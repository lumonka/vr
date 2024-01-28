<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Services extends Controller
{

    // <--------------------INDEX-------------------->

    public function index(Request $request)
    {
        $banner = DB::table('banner')->where('banner.page', 'services')->get();
        $cards = DB::table('services_cards')->get();
        $socialNetworks = DB::table('social')->get();
        return view('services', ['banner' => $banner, 'cards' => $cards, 'socialNetworks' => $socialNetworks]);
    }

    public function admin_index(Request $request)
    {
        $cards = DB::table('services_cards')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.services.index', ['cards' => $cards, 'socialNetworks' => $socialNetworks]);
    }

    // <--------------------CARDS-------------------->

    public function getCardsById(Request $request)
    {
        $id = $request->id;
        $cards = DB::table('services_cards')->where('services_cards.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($cards)) {
            return view('admin.services.cards', ['cards' => $cards, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editCards(Request $request)
    {
        $cards = DB::table('services_cards')->where('id', $request->id)->first();

        $old_icon = $cards->icon;
        $old_image = $cards->image;
        $old_headers = $cards->headers;
        $old_descr = $cards->descr;
        $old_prices = $cards->prices;

        DB::table('services_cards')
            ->where('id', $request->id)
            ->update([
                'old_icon' => $old_icon,
                'old_image' => $old_image,
                'old_headers' => $old_headers,
                'old_descr' => $old_descr,
                'old_prices' => $old_prices,
                'updated_at' => now(),
            ]);

        DB::table('services_cards')
            ->where('id', $request->id)
            ->update([
                'icon' => $request->input('icon'),
                'image' => $request->input('image'),
                'headers' => $request->input('headers'),
                'descr' => $request->input('descr'),
                'prices' => $request->input('prices'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[125px]">ICON</td><td>-</td><td class="break-normal text-balance">' . $old_icon . '</td><td> => </td><td class="break-normal text-balance">' . $request->input('icon') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">IMAGE</td><td>-</td><td class="break-all text-balance">' . $old_image . '</td><td> => </td><td class="break-all text-balance">' . $request->input('image') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">HEADERS</td><td>-</td><td class="break-normal text-balance">' . $old_headers . '</td><td> => </td><td class="break-normal text-balance">' . $request->input('headers') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">DESCRIPTION</td><td>-</td><td class="break-normal text-balance">' . $old_descr . '</td><td> => </td><td class="break-normal text-balance">' . $request->input('descr') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">PRICES</td><td>-</td><td class="break-normal text-balance">' . $old_prices . '</td><td> => </td><td class="break-normal text-balance">' . $request->input('prices') . '</td></tr>',
            'table' => 'SERVICES - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_services');
    }
}
