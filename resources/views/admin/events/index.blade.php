@extends('layouts.app')
@section('content')
    <div class="min-h-screen py-[200px] overflow-x-auto bg-neutral-700 text-white flex flex-col justify-center">
        <table class="w-[90%] mx-auto text-left text-xl whitespace-nowrap">
            <h2 class="mt-[50px] text-5xl text-center">NEWS</h2>
            <a href="/admin_events_news_create"
                class="my-[25px] mx-auto text-base mx-auto inline-block rounded bg-green-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-green-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-green-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-green-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                ADD NEWS
            </a>
            <thead class="uppercase tracking-wider">
                <tr class="flex justify-between">
                    <th scope="col" class="px-6 py-4 text-left w-[150px]">
                        HEADER
                    </th>
                    <th scope="col" class="px-6 py-4 text-center w-[600px]">
                        DESCRIPTION
                    </th>
                    <th scope="col" class="px-6 py-4 text-center w-[250px]">
                        IMAGE
                    </th>
                    <th scope="col" class="px-6 py-4 text-center w-[175px]">
                        DATE
                    </th>
                    <th scope="col" class="px-6 py-4 text-right w-[300px]">
                        ACTION
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($news as $item)
                    <tr class="hover:bg-neutral-600 hover:scale-105 duration-100 flex justify-between items-center">
                        <td class="px-6 py-4 text-left w-[150px]">
                            {{ $item->heading }}
                        </td>
                        <td class="px-6 py-4 text-center text-wrap w-[600px]">
                            {{ $item->descr }}
                        </td>
                        <td class="px-6 py-4 text-center text-wrap break-all w-[250px]">
                            {{ $item->image }}
                        </td>
                        <td class="px-6 py-4 text-center w-[175px]">
                            {{ $item->data }}
                        </td>
                        <td class="px-6 py-4 flex justify-end text-right gap-5 w-[300px]">
                            <a href="/admin_events_news/{{ $item->id }}"
                                class="inline-block rounded text-base bg-sky-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-sky-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-sky-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-sky-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                                EDIT
                            </a>
                            <form action="/admin_events_news_delete/{{ $item->id }}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit"
                                    class="inline-block rounded text-base bg-red-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-red-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-red-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-red-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0"
                                    value="DELETE">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <table class="w-[90%] mx-auto text-base whitespace-nowrap flex flex-col">
            <h2 class="my-[50px] text-5xl text-center">PERSON</h2>
            <thead class="uppercase tracking-wider border-b-2">
                <tr class="flex justify-between">
                    <th scope="col" class="px-3 py-2 text-left w-[115px]">
                        Rap name
                    </th>
                    <th scope="col" class="px-3 py-2 text-center w-[75px]">
                        NAME
                    </th>
                    <th scope="col" class="px-3 py-2 text-center w-[110px]">
                        SURNAME
                    </th>
                    <th scope="col" class="px-3 py-2 text-center w-[155px]">
                        DATE OF BIRTH
                    </th>
                    <th scope="col" class="px-3 py-2 text-center w-[90px]">
                        E-MAIL
                    </th>
                    <th scope="col" class="px-3 py-2 text-center w-[90px]">
                        PHONE
                    </th>
                    <th scope="col" class="px-3 py-2 text-center w-[210px]">
                        DATE OF RECORDING
                    </th>
                    <th scope="col" class="px-3 py-2 text-center w-[50px]">
                        Zip
                    </th>
                    <th scope="col" class="px-3 py-2 text-center w-[110px]">
                        ADDRESS
                    </th>
                    <th scope="col" class="px-3 py-2 text-center w-[65px]">
                        CITY
                    </th>
                    <th scope="col" class="px-3 py-2 text-right w-[135px]">
                        ACTION
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($person as $item)
                    <tr class="hover:bg-neutral-600 hover:scale-105 duration-100 flex justify-between items-center text-sm">
                        <td class="px-3 py-2 text-left w-[115px] text-wrap">
                            {{ $item->rap_name }}
                        </td>
                        <td class="px-3 py-2 text-center w-[75px] text-wrap">
                            {{ $item->name }}
                        </td>
                        <td class="px-3 py-2 text-center w-[110px] text-wrap">
                            {{ $item->surname }}
                        </td>
                        <td class="px-3 py-2 text-center w-[155px] text-wrap">
                            {{ $item->date_of_birth }}
                        </td>
                        <td class="px-3 py-2  text-center w-[90px] text-wrap">
                            {{ $item->email }}
                        </td>
                        <td class="px-3 py-2  text-center w-[90px] text-wrap">
                            {{ $item->phone }}
                        </td>
                        <td class="px-3 py-2  text-center w-[210px] text-wrap">
                            {{ $item->date }}
                        </td>
                        <td class="px-3 py-2  text-center w-[50px] text-wrap break-all">
                            {{ $item->zip }}
                        </td>
                        <td class="px-3 py-2  text-center w-[110px] text-wrap">
                            {{ $item->address }}
                        </td>
                        <td class="px-3 py-2  text-center w-[65px] text-wrap">
                            {{ $item->city }}
                        </td>
                        <td class="px-3 py-2 flex flex-col justify-end text-right gap-5 w-[135px]">
                            <a href="/admin_events_person/{{ $item->id }}"
                                class="inline-block text-center rounded text-base bg-sky-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-sky-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-sky-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-sky-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                                EDIT
                            </a>
                            <form action="/admin_events_person_delete/{{ $item->id }}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit"
                                    class="inline-block rounded text-base bg-red-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-red-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-red-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-red-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0"
                                    value="DELETE">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> 
    </div>
@endsection
