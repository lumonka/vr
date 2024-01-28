<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    public function admin_index(Request $request)
    {
        $users = DB::table('users')->get();
        $socialNetworks = DB::table('social')->get();
        $requests = DB::table('requests')->get();
        return view('admin.users.index', ['users' => $users, 'socialNetworks' => $socialNetworks, 'requests' => $requests]);
    }

    public function getUserById(Request $request)
    {
        $id = $request->id;
        $user = DB::table('users')->where('users.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($user)) {
            return view('admin.users.user', ['user' => $user, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editUser(Request $request)
    {

        $user = DB::table('users')->where('id', $request->id)->first();

        $old_name = $user->name;
        $old_email = $user->email;
        $old_is_admin = $user->is_admin;

        DB::table('users')
            ->where('id', $request->id)
            ->update([
                'old_name' => $old_name,
                'old_email' => $old_email,
                'old_is_admin' => $old_is_admin,
                'updated_at' => now(),
            ]);

        DB::table('users')
            ->where('id', $request->id)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'is_admin' => $request->input('is_admin'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td>NAME</td><td>' . $old_name . '</td><td> => </td><td>' . $request->input('name') . '</td></tr>
            <tr class="flex gap-5"><td>E-MAIL</td><td>' . $old_email . '</td><td> => </td><td>' . $request->input('email') . '</td></tr>
            <tr class="flex gap-5"><td>ADMIN</td><td>' . $old_is_admin . '</td><td> => </td><td>' . $request->input('is_admin') . '</td></tr>',
            'table' => 'USER - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_users');
    }

    public function deleteUser(Request $request)
    {
        $user = DB::table('users')->where('id', $request->id)->first();

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td>NAME</td><td>' . $user->name . '</td></tr>
            <tr class="flex gap-5"><td>E-MAIL</td><td>' . $user->email . '</td></tr>
            <tr class="flex gap-5"><td>ADMIN</td><td>' . $user->is_admin . '</td></tr>',
            'table' => 'USERS - DELETE',
            'datetime' => now(),
        ]);

        $user = DB::table('users')->where('id', $request->id)->delete();

        return redirect()->route('admin_users');
    }

    public function getRequestById(Request $request)
    {
        $id = $request->id;
        $requests = DB::table('requests')->where('requests.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($request)) {
            return view('admin.users.request', ['requests' => $requests, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editRequest(Request $request)
    {

        $requests = DB::table('requests')->where('id', $request->id)->first();

        $old_data = $requests->data;
        $old_text = $requests->text;
        $old_price = $requests->price;

        DB::table('requests')
            ->where('id', $requests->id)
            ->update([
                'old_data' => $old_data,
                'old_text' => $old_text,
                'old_price' => $old_price,
                'updated_at' => now(),
            ]);

        DB::table('requests')
            ->where('id', $requests->id)
            ->update([
                'data' => $request->input('data'),
                'text' => $request->input('text'),
                'price' => $request->input('price'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td>DATA</td><td>' . $old_data . '</td><td> => </td><td>' . $request->input('data') . '</td></tr>
            <tr class="flex gap-5"><td>TEXT</td><td>' . $old_text . '</td><td> => </td><td>' . $request->input('text') . '</td></tr>
            <tr class="flex gap-5"><td>PRICE</td><td>' . $old_price . '</td><td> => </td><td>' . $request->input('price') . '</td></tr>',
            'table' => 'REQUEST - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_users');
    }

    public function createRequestView(Request $request)
    {
        $requests = DB::table('requests')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.users.create_request', ['requests' => $requests, 'socialNetworks' => $socialNetworks]);
    }
    
    public function createRequest(Request $request)
    {
        DB::table('requests')->insert([
            'data' => $request->input('data'),
            'text' => $request->input('text'),
            'price' => $request->input('price'),
            'user_id' => $request->input('user_id'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('requests')->insert([
            'data' => $request->input('data'),
            'text' => $request->input('text'),
            'price' => $request->input('price'),
            'user_id' => $request->input('user_id'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[125px]">DATA</td><td>-</td><td class="break-normal text-balance">' . $request->input('data') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">TEXT</td><td>-</td><td class="break-all text-balance">' . $request->input('text') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">PRICE</td><td>-</td><td class="break-all text-balance">' . $request->input('price') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">USER</td><td>-</td><td class="break-all text-balance">' . $request->input('user_id') . '</td></tr>',
            'table' => 'USERS - REQUEST - CREATE',
            'datetime' => now(),
        ]);
        return redirect()->route('admin_users');
    }
}
