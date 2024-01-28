<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Social extends Controller
{

    // <--------------------INDEX-------------------->

    public function index(Request $request)
    {
        $social = DB::table('social')->get();
        $socialNetworks = DB::table('social')->get();
        return view('app', ['social' => $social, 'socialNetworks' => $socialNetworks]);
    }

    public function admin_index(Request $request)
    {
        $social = DB::table('social')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.social.index', ['social' => $social, 'socialNetworks' => $socialNetworks]);
    }

    // <--------------------SOCIAL-------------------->

    public function getSocialById(Request $request)
    {
        $id = $request->id;
        $social = DB::table('social')->where('social.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($social)) {
            return view('admin.social.social_edit', ['social' => $social, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editSocial(Request $request)
    {
        $social = DB::table('social')->where('id', $request->id)->first();

        $old_name = $social->name;
        $old_icon = $social->icon;

        DB::table('social')
            ->where('id', $request->id)
            ->update([
                'old_name' => $old_name,
                'old_icon' => $old_icon,
                'updated_at' => now(),
            ]);

        DB::table('social')
            ->where('id', $request->id)
            ->update([
                'name' => $request->input('name'),
                'icon' => $request->input('icon'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td>NAME</td><td>' . $old_name . '</td><td> => </td><td>' . $request->input('name') . '</td></tr>
            <tr class="flex gap-5"><td>ICON</td><td>' . $old_icon . '</td><td> => </td><td>' . $request->input('icon') . '</td></tr>',
            'table' => 'SOCIAL - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_socials');
    }

    public function createSocialView(Request $request)
    {
        $social = DB::table('social')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.social.create_social', ['social' => $social, 'socialNetworks' => $socialNetworks]);
    }

    public function createSocial(Request $request)
    {

        DB::table('social')->insert([
            'name' => $request->input('name'),
            'icon' => $request->input('icon'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">NAME</td><td>-</td><td class="break-normal text-balance">' . $request->input('name') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">ICON</td><td>-</td><td class="break-all text-balance">' . $request->input('icon') . '</td></tr>',
            'table' => 'SOCIAL - CREATE',
            'datetime' => now(),
        ]);
        return redirect()->route('admin_socials');
    }

    public function deleteSocial(Request $request)
    {
        $social = DB::table('social')->where('id', $request->id)->first();

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">NAME</td><td>-</td><td class="break-normal text-balance">' . $social->name . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">ICON</td><td>-</td><td class="break-all text-balance">' . $social->icon . '</td></tr>',
            'table' => 'SOCIAL - DELETE',
            'datetime' => now(),
        ]);

        $social = DB::table('social')->where('id', $request->id)->delete();
        return redirect()->route('admin_socials');
    }
}
