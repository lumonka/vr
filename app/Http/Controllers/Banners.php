<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Banners extends Controller
{

    // <--------------------INDEX-------------------->

    public function admin_index(Request $request)
    {
        $banner = DB::table('banner')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.banner.index', ['banner' => $banner, 'socialNetworks' => $socialNetworks]);
    }

    // <--------------------BANNER-------------------->

    public function getBannerById(Request $request)
    {
        $id = $request->id;
        $banner = DB::table('banner')->where('banner.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($banner)) {
            return view('admin.banner.banner_edit', ['banner' => $banner, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editBanner(Request $request)
    {
        $banner = DB::table('banner')->where('id', $request->id)->first();

        $old_heading = $banner->heading;
        $old_background = $banner->background;
        $old_page = $banner->page;

        DB::table('banner')
            ->where('id', $request->id)
            ->update([
                'old_heading' => $old_heading,
                'old_background' => $old_background,
                'old_page' => $old_page,
                'updated_at' => now(),
            ]);

        DB::table('banner')
            ->where('id', $request->id)
            ->update([
                'heading' => $request->input('heading'),
                'background' => $request->input('background'),
                'page' => $request->input('page'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[125px]">HEADING</td><td>-</td><td class="break-normal text-balance">' . $old_heading . '</td><td> => </td><td class="break-normal text-balance">' . $request->input('heading') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">BACKGROUND</td><td>-</td><td class="break-all text-balance">' . $old_background . '</td><td> => </td><td class="break-all text-balance">' . $request->input('background') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">PAGE</td><td>-</td><td class="break-all text-balance">' . $old_page . '</td><td> => </td><td class="break-all text-balance">' . $request->input('page') . '</td></tr>',
            'table' => 'BANNERS - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_banners');
    }

}
