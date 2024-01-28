<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Label extends Controller
{

    // <--------------------INDEX-------------------->

    public function index(Request $request)
    {
        $banner = DB::table('banner')->where('banner.page', 'label')->get();
        $cards = DB::table('label_cards')->get();
        $header = DB::table('label_header')->get();
        $socialNetworks = DB::table('social')->get();
        return view('label', ['banner' => $banner, 'cards' => $cards, 'header' => $header, 'socialNetworks' => $socialNetworks]);
    }

    public function admin_index(Request $request)
    {
        $cards = DB::table('label_cards')->get();
        $header = DB::table('label_header')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.label.index', ['cards' => $cards, 'header' => $header, 'socialNetworks' => $socialNetworks]);
    }

    // <--------------------CARDS-------------------->

    public function getCardsById(Request $request)
    {
        $id = $request->id;
        $cards = DB::table('label_cards')->where('label_cards.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($cards)) {
            return view('admin.label.cards', ['cards' => $cards, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editCards(Request $request)
    {
        $cards = DB::table('label_cards')->where('id', $request->id)->first();

        $old_headers = $cards->headers;
        $old_descr = $cards->descr;
        $old_image = $cards->image;

        DB::table('label_cards')
            ->where('id', $request->id)
            ->update([
                'old_headers' => $old_headers,
                'old_descr' => $old_descr,
                'old_image' => $old_image,
                'updated_at' => now(),
            ]);

        DB::table('label_cards')
            ->where('id', $request->id)
            ->update([
                'headers' => $request->input('headers'),
                'descr' => $request->input('descr'),
                'image' => $request->input('image'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">HEADER</td><td>-</td><td class="break-normal text-balance w-[500px]">' . $old_headers . '</td><td> => </td><td class="break-normal text-balance w-[500px]">' . $request->input('headers') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">DESCRIPTION</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_descr . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('descr') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">IMAGE</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_image . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('image') . '</td></tr>',
            'table' => 'LABEL - CARDS - EDIT',
            'datetime' => now(),
        ]);
        return redirect()->route('admin_label');
    }

    public function createCardsView(Request $request)
    {
        $cards = DB::table('label_cards')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.label.create_cards', ['cards' => $cards, 'socialNetworks' => $socialNetworks]);
    }

    public function createCards(Request $request)
    {
        DB::table('label_cards')->insert([
            'headers' => $request->input('headers'),
            'descr' => $request->input('descr'),
            'image' => $request->input('image'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">HEADER</td><td>-</td><td class="break-normal text-balance">' . $request->input('headers') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">DESCRIPTION</td><td>-</td><td class="break-all text-balance">' . $request->input('descr') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">IMAGE</td><td>-</td><td class="break-all text-balance">' . $request->input('image') . '</td></tr>',
            'table' => 'LABEL - CARDS - CREATE',
            'datetime' => now(),
        ]);
        return redirect()->route('admin_label');
    }

    public function deleteCards(Request $request)
    {
        $cards = DB::table('label_cards')->where('id', $request->id)->first();

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[125px]">HEADER</td><td>-</td><td class="break-normal text-balance">' . $cards->headers . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">DESCRIPTION</td><td>-</td><td class="break-all text-balance">' . $cards->descr . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">IMAGE</td><td>-</td><td class="break-all text-balance">' . $cards->image . '</td></tr>',
            'table' => 'LABEL - CARDS - DELETE',
            'datetime' => now(),
        ]);

        $cards = DB::table('label_cards')->where('id', $request->id)->delete();
        return redirect()->route('admin_label');
    }

    // <--------------------HEADER-------------------->

    public function getHeaderById(Request $request)
    {
        $id = $request->id;
        $header = DB::table('label_header')->where('label_header.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($header)) {
            return view('admin.label.header', ['header' => $header, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editHeader(Request $request)
    {
        $header = DB::table('label_header')->where('id', $request->id)->first();

        $old_text = $header->text;

        DB::table('label_header')
            ->where('id', $request->id)
            ->update([
                'old_text' => $old_text,
                'updated_at' => now(),
            ]);

        DB::table('label_header')
            ->where('id', $request->id)
            ->update([
                'text' => $request->input('text'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">TEXT</td><td>-</td><td class="break-normal text-balance w-[500px]">' . $old_text . '</td><td> => </td><td class="break-normal text-balance w-[500px]">' . $request->input('text') . '</td></tr>',
            'table' => 'LABEL - HEADER - EDIT',
            'datetime' => now(),
        ]);
        return redirect()->route('admin_label');
    }

}
