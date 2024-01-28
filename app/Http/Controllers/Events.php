<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Events extends Controller
{

    // <--------------------INDEX-------------------->

    public function admin_index(Request $request)
    {
        $news = DB::table('events_news')->get();
        $person = DB::table('events_person')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.events.index', ['news' => $news, 'person' => $person, 'socialNetworks' => $socialNetworks]);
    }

    // <--------------------NEWS-------------------->

    public function getNewsById(Request $request)
    {
        $id = $request->id;
        $news = DB::table('events_news')->where('events_news.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($news)) {
            return view('admin.events.news', ['news' => $news, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editNews(Request $request)
    {
        $news = DB::table('events_news')->where('id', $request->id)->first();

        $old_heading = $news->heading;
        $old_descr = $news->descr;
        $old_image = $news->image;
        $old_data = $news->data;

        DB::table('events_news')
            ->where('id', $request->id)
            ->update([
                'old_heading' => $old_heading,
                'old_descr' => $old_descr,
                'old_image' => $old_image,
                'old_data' => $old_data,
                'updated_at' => now(),
            ]);

        DB::table('events_news')
            ->where('id', $request->id)
            ->update([
                'heading' => $request->input('heading'),
                'descr' => $request->input('descr'),
                'image' => $request->input('image'),
                'data' => $request->input('data'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[125px]">HEADING</td><td>-</td><td class="break-normal text-balance w-[500px]">' . $old_heading . '</td><td> => </td><td class="break-normal text-balance w-[500px]">' . $request->input('heading') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">DESCRIPTION</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_descr . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('descr') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">IMAGE</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_image . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('image') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">DATA</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_data . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('data') . '</td></tr>',
            'table' => 'EVENTS - NEWS - EDIT',
            'datetime' => now(),
        ]);
        return redirect()->route('admin_events');
    }

    public function createNewsView(Request $request)
    {
        $news = DB::table('events_news')->get();
        $socialNetworks = DB::table('social')->get();
        return view('admin.events.create_news', ['news' => $news, 'socialNetworks' => $socialNetworks]);
    }

    public function createNews(Request $request)
    {
        DB::table('events_news')->insert([
            'heading' => $request->input('heading'),
            'descr' => $request->input('descr'),
            'image' => $request->input('image'),
            'data' => $request->input('data'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('events_news')->insert([
            'heading' => $request->input('heading'),
            'descr' => $request->input('descr'),
            'image' => $request->input('image'),
            'data' => $request->input('data'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[125px]">NAME</td><td>-</td><td class="break-normal text-balance">' . $request->input('heading') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">DESCRIPTION</td><td>-</td><td class="break-all text-balance">' . $request->input('descr') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">IMAGE</td><td>-</td><td class="break-all text-balance">' . $request->input('image') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">DATA</td><td>-</td><td class="break-all text-balance">' . $request->input('data') . '</td></tr>',
            'table' => 'EVENTS - NEWS - CREATE',
            'datetime' => now(),
        ]);
        return redirect()->route('admin_events');
    }

    public function deleteNews(Request $request)
    {

        $news = DB::table('events_news')->where('id', $request->id)->first();
        $heading = $news->heading;
        $descr = $news->descr;
        $image = $news->image;
        $data = $news->data;

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[125px]">HEADING</td><td>-</td><td class="break-normal text-balance">' . $heading . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">DESCRIPTION</td><td>-</td><td class="break-normal text-balance">' . $descr . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">IMAGE</td><td>-</td><td class="break-normal text-balance">' . $image . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">DATE</td><td>-</td><td class="break-normal text-balance">' . $data . '</td></tr>',
            'table' => 'EVENTS - NEWS - DELETE',
            'datetime' => now(),
        ]);

        $news = DB::table('events_news')->where('id', $request->id)->delete();

        return redirect()->route('admin_events');
    }

    // <--------------------PERSON-------------------->

    public function getPersonById(Request $request)
    {
        $id = $request->id;
        $person = DB::table('events_person')->where('events_person.id', $id)->first();
        $socialNetworks = DB::table('social')->get();
        if (!is_null($person)) {
            return view('admin.events.person', ['person' => $person, 'socialNetworks' => $socialNetworks]);
        } else {
            return abort(404);
        }
    }

    public function editPerson(Request $request)
    {
        $person = DB::table('events_person')->where('id', $request->id)->first();

        $old_rap_name = $person->rap_name;
        $old_name = $person->name;
        $old_surname = $person->surname;
        $old_date_of_birth = $person->date_of_birth;
        $old_email = $person->email;
        $old_phone = $person->phone;
        $old_date = $person->date;
        $old_zip = $person->zip;
        $old_address = $person->address;
        $old_city = $person->city;


        DB::table('events_person')
            ->where('id', $request->id)
            ->update([
                'old_rap_name' => $old_rap_name,
                'old_name' => $old_name,
                'old_surname' => $old_surname,
                'old_date_of_birth' => $old_date_of_birth,
                'old_email' => $old_email,
                'old_phone' => $old_phone,
                'old_date' => $old_date,
                'old_zip' => $old_zip,
                'old_address' => $old_address,
                'old_city' => $old_city,
                'updated_at' => now(),
            ]);

        DB::table('events_person')
            ->where('id', $request->id)
            ->update([
                'rap_name' => $request->input('rap_name'),
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'date_of_birth' => $request->input('date_of_birth'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'date' => $request->input('date'),
                'zip' => $request->input('zip'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'updated_at' => now(),
            ]);

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[75px]">RAP NAME</td><td>-</td><td class="break-normal text-balance w-[500px]">' . $old_rap_name . '</td><td> => </td><td class="break-normal text-balance w-[500px]">' . $request->input('rap_name') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">NAME</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_name . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('name') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">SURNAME</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_surname . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('surname') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px] text-wrap">DATE OF BIRTH</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_date_of_birth . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('date_of_birth') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">E-MAIL</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_email . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('email') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">PHONE</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_phone . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('phone') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">DATE</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_date . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('date') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">ZIP</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_zip . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('zip') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">ADDRESS</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_address . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('address') . '</td></tr>
            <tr class="flex gap-5"><td class="w-[75px]">CITY</td><td>-</td><td class="break-all text-balance w-[500px]">' . $old_city . '</td><td> => </td><td class="break-all text-balance w-[500px]">' . $request->input('city') . '</td></tr>',
            'table' => 'EVENTS - PERSON - UPDATE',
            'datetime' => now(),
        ]);

        return redirect()->route('admin_events');
    }

    public function createPerson(Request $request)
    {
        DB::table('events_person')->insert([
            'rap_name' => $request->input('rap_name'),
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'date_of_birth' => $request->input('date_of_birth'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'date' => $request->input('date'),
            'zip' => $request->input('zip'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        return redirect()->route('create-beat');
    }
    
    public function deletePerson(Request $request)
    {
        $person = DB::table('events_person')->where('id', $request->id)->first();

        DB::table('change_log')->insert([
            'name' => '<tr class="flex gap-5"><td class="w-[125px]">NAME</td><td>-</td><td class="break-normal text-balance">' . $person->rap_name . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">NAME</td><td>-</td><td class="break-all text-balance">' . $person->name . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">SURNAME</td><td>-</td><td class="break-all text-balance">' . $person->surname . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">DATE OF BIRTH</td><td>-</td><td class="break-all text-balance">' . $person->date_of_birth . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">E-MAIL</td><td>-</td><td class="break-all text-balance">' . $person->email . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">PHONE</td><td>-</td><td class="break-all text-balance">' . $person->phone . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">DATE</td><td>-</td><td class="break-all text-balance">' . $person->date . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">ZIP</td><td>-</td><td class="break-all text-balance">' . $person->zip . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">ADDRESS</td><td>-</td><td class="break-all text-balance">' . $person->address . '</td></tr>
            <tr class="flex gap-5"><td class="w-[125px]">CITY</td><td>-</td><td class="break-all text-balance">' . $person->city . '</td></tr>',
            'table' => 'EVENTS - PERSON - DELETE',
            'datetime' => now(),
        ]);

        $person = DB::table('events_person')->where('id', $request->id)->delete();
        return redirect()->route('admin_events');
    }

}