<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Studio extends Controller
{

    // <--------------------INDEX-------------------->

    public function index(Request $request)
    {
        $banner_1 = DB::table('banner')->where('banner.page', 'studio_1')->get();
        $banner_2 = DB::table('banner')->where('banner.page', 'studio_2')->get();
        $cards = DB::table('studio_cards')->get();
        $list = DB::table('studio_list')->get();
        $person = DB::table('studio_person')->get();
        $socialNetworks = DB::table('social')->get();
        return view('studio', ['banner_1' => $banner_1, 'banner_2' => $banner_2, 'cards' => $cards, 'list' => $list, 'person' => $person, 'socialNetworks' => $socialNetworks]);
    }

    public function admin_index(Request $request)
    {
        $cards = DB::table('studio_cards')->get();
        $list = DB::table('studio_list')->get();
        $person = DB::table('studio_person')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.studio.index', ['cards' => $cards, 'list' => $list, 'person' => $person, 'socialNetworks' => $socialNetworks]);
    }

    // <--------------------CARDS-------------------->

    public function getCardsById(Request $request)
    {
        $id = $request->id;
        $cards = DB::table('studio_cards')->where('studio_cards.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($cards)) {
            return view('admin.studio.cards', ['cards' => $cards, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editCards(Request $request)
    {

        $cards = DB::table('studio_cards')->where('id', $request->id)->first();

        $old_image = $cards->image;

        DB::table('studio_cards')
            ->where('id', $request->id)
            ->update([
                'old_image' => $old_image,
                'updated_at' => now(),
            ]);

        DB::table('studio_cards')
            ->where('id', $request->id)
            ->update([
                'image' => $request->input('image'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td>IMAGE</td><td class="break-all text-balance">' . $old_image . '</td><td> => </td><td class="break-all text-balance">' . $request->input('image') . '</td></tr>',
            'table' => 'STUDIO - CARDS - EDIT',
            'datetime' => now(),
        ]);
        return redirect()->route('admin_studio');
    }

    // <--------------------LIST-------------------->

    public function getListById(Request $request)
    {
        $id = $request->id;
        $list = DB::table('studio_list')->where('studio_list.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($list)) {
            return view('admin.studio.list', ['list' => $list, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editList(Request $request)
    {

        $list = DB::table('studio_list')->where('id', $request->id)->first();

        $old_text = $list->text;

        DB::table('studio_list')
            ->where('id', $request->id)
            ->update([
                'old_text' => $old_text,
                'updated_at' => now(),
            ]);

        DB::table('studio_list')
            ->where('id', $request->id)
            ->update([
                'text' => $request->input('text'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td>TEXT</td><td class="break-normal text-balance">' . $old_text . '</td><td> => </td><td class="break-normal text-balance">' . $request->input('text') . '</td></tr>',
            'table' => 'STUDIO - LIST - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_studio');
    }

    // <--------------------PERSON-------------------->

    public function getPersonById(Request $request)
    {
        $id = $request->id;
        $person = DB::table('studio_person')->where('studio_person.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($person)) {
            return view('admin.studio.person', ['person' => $person, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editPerson(Request $request)
    {
        $person = DB::table('studio_person')->where('id', $request->id)->first();

        $old_image = $person->image;
        $old_text = $person->text;

        DB::table('studio_person')
            ->where('id', $request->id)
            ->update([
                'old_image' => $old_image,
                'old_text' => $old_text,
                'updated_at' => now(),
            ]);

        DB::table('studio_person')
            ->where('id', $request->id)
            ->update([
                'image' => $request->input('image'),
                'text' => $request->input('text'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td>IMAGE</td><td class="break-all text-balance">' . $old_image . '</td><td> => </td><td class="break-all text-balance">' . $request->input('image') . '</td></tr>
            <tr class="flex gap-5"><td class="break-normal text-balance">TEXT</td><td>' . $old_text . '</td><td> => </td><td class="break-normal text-balance">' . $request->input('text') . '</td></tr>',
            'table' => 'STUDIO - PERSON - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_studio');
    }

}
