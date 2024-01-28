<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Contact extends Controller
{

    // <--------------------INDEX-------------------->

    public function index(Request $request)
    {
        $banner = DB::table('banner')->where('banner.page', 'contact')->get();
        $contacts = DB::table('contact_contacts')->get();
        $social = DB::table('social')->get();
        $socialNetworks = DB::table('social')->get();
        return view('contact', ['banner' => $banner, 'contacts' => $contacts, 'social' => $social, 'socialNetworks' => $socialNetworks]);
    }

    public function admin_index(Request $request)
    {
        $contacts = DB::table('contact_contacts')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.contact.index', ['contacts' => $contacts, 'socialNetworks' => $socialNetworks]);
    }

    // <--------------------CONTACTS-------------------->

    public function getContactsById(Request $request)
    {
        $id = $request->id;
        $contacts = DB::table('contact_contacts')->where('contact_contacts.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($contacts)) {
            return view('admin.contact.contacts', ['contacts' => $contacts, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editContacts(Request $request)
    {
        $contacts = DB::table('contact_contacts')->where('id', $request->id)->first();

        $old_phone = $contacts->phone;
        $old_email = $contacts->email;
        $old_address = $contacts->address;

        DB::table('contact_contacts')
            ->where('id', $request->id)
            ->update([
                'old_phone' => $old_phone,
                'old_email' => $old_email,
                'old_address' => $old_address,
                'updated_at' => now(),
            ]);

        DB::table('contact_contacts')
            ->where('id', $request->id)
            ->update([
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">PHONE</td><td>-</td><td class="break-normal text-balance w-[500px]">' . $old_phone . '</td><td> => </td><td class="break-normal text-balance w-[500px]">' . $request->input('phone') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">E-MAIL</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_email . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('email') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">ADDRESS</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_address . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('address') . '</td></tr>',
            'table' => 'CONTACTS - EDIT',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_contact');
    }
}
