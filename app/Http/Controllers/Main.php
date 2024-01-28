<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Main extends Controller
{

    // <--------------------INDEX-------------------->

    public function index(Request $request)
    {
        $banner = DB::table('banner')->where('banner.page', 'main')->get();
        $music = DB::table('main_music')->get();
        $social = DB::table('social')->get();
        $socialNetworks = DB::table('social')->get();
        return view('main', ['banner' => $banner, 'music' => $music, 'social' => $social, 'socialNetworks' => $socialNetworks]);
    }

    public function admin_index(Request $request)
    {
        $banner = DB::table('banner')->where('banner.page', 'main')->get();
        $music = DB::table('main_music')->get();
        $social = DB::table('social')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.main.index', ['banner' => $banner, 'music' => $music, 'social' => $social, 'socialNetworks' => $socialNetworks]);
    }

    // <--------------------MUSIC-------------------->

    public function getMusicById(Request $request)
    {
        $id = $request->id;
        $music = DB::table('main_music')->where('main_music.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($music)) {
            return view('admin.main.music', ['music' => $music, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editMusic(Request $request)
    {
        $music = DB::table('main_music')->where('id', $request->id)->first();

        $old_name = $music->name;
        $old_image = $music->image;

        DB::table('main_music')
            ->where('id', $request->id)
            ->update([
                'old_name' => $old_name,
                'old_image' => $old_image,
                'updated_at' => now(),
            ]);

        DB::table('main_music')
            ->where('id', $request->id)
            ->update([
                'name' => $request->input('name'),
                'image' => $request->input('image'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">NAME</td><td>-</td><td class="break-normal text-balance w-[500px]">' . $old_name . '</td><td> => </td><td class="break-normal text-balance w-[500px]">' . $request->input('name') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">IMAGE</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_image . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('image') . '</td></tr>',
            'table' => 'MAIN - MUSIC - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_main');
    }

    public function createMusicView(Request $request)
    {
        $music = DB::table('main_music')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.main.create_music', ['music' => $music, 'socialNetworks' => $socialNetworks]);
    }

    public function createMusic(Request $request)
    {
        DB::table('main_music')->insert([
            'name' => $request->input('name'),
            'image' => $request->input('image'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">NAME</td><td>-</td><td class="break-normal text-balance">' . $request->input('name') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">IMAGE</td><td>-</td><td class="break-all text-balance">' . $request->input('image') . '</td></tr>',
            'table' => 'MAIN - MUSIC - CREATE',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_main');
    }

    public function deleteMusic(Request $request)
    {
        $music = DB::table('main_music')->where('id', $request->id)->first();

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">NAME</td><td>-</td><td class="break-normal text-balance">' . $music->name . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">IMAGE</td><td>-</td><td class="break-all text-balance">' . $music->image . '</td></tr>',
            'table' => 'MAIN - MUSIC - DELETE',
            'datetime' => now(),
        ]);

        $music = DB::table('main_music')->where('id', $request->id)->delete();
        return redirect()->route('admin_main');
    }

}
