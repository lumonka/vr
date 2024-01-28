<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChangeLog extends Controller
{
    
    // <--------------------INDEX-------------------->

    public function admin_index(Request $request)
    {
        $change_log = DB::table('change_log')->orderBy('change_log.datetime', 'desc')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.change_log', ['change_log' => $change_log, 'socialNetworks' => $socialNetworks]);
    }

    public function recoverUser(Request $request)
    {

        $id = $request->id;
        $change_log = DB::table('change_log')->where('change_log.id', $id)->first();

        $old_name = $change_log->name;
        $old_email = $change_log->email;
        $old_is_admin = $change_log->is_admin;

        DB::table('change_log')
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

        return redirect()->route('change_log');
    }

}
