@extends('layouts.app')
@section('content')
    <div class="min-h-screen py-[200px] overflow-x-auto bg-neutral-700 text-white">
        <table class="w-[90%] mx-auto text-left text-xl whitespace-nowrap">
            <thead class="uppercase tracking-wider border-b-2">
                <h2 class="my-[50px] text-5xl text-center">CARDS</h2>
                <tr class="flex justify-between">
                    <th scope="col" class="px-6 py-4 text-left w-[150px]">
                        ICON
                    </th>
                    <th scope="col" class="px-6 py-4 text-center w-[200px]">
                        IMAGE
                    </th>
                    <th scope="col" class="px-6 py-4 text-center w-[200px]">
                        HEADER
                    </th>
                    <th scope="col" class="px-6 py-4 text-center w-[350px]">
                        DESCRIPTION
                    </th>
                    <th scope="col" class="px-6 py-4 text-center w-[350px]">
                        PRICES
                    </th>
                    <th scope="col" class="px-6 py-4 text-right w-[250px]">
                        ACTION
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($cards as $item)
                    <tr class="hover:bg-neutral-600 hover:scale-105 duration-100 flex justify-between items-center">
                        <td class="px-6 py-4 text-left text-wrap break-all w-[150px]">
                            {{ $item->icon }}
                        </td>
                        <td class="px-6 py-4 text-center text-wrap break-all w-[200px]">
                            {{ $item->image }}
                        </td>
                        <td class="px-6 py-4 text-center text-wrap w-[200px]">
                            {{ $item->headers }}
                        </td>
                        <td class="px-6 py-4 text-center text-wrap w-[350px]">
                            {{ $item->descr }}
                        </td>
                        <td class="px-6 py-4 text-center text-balance w-[350px]">
                            {{ $item->prices }}
                        </td>
                        <td class="px-6 py-6 flex justify-end text-right gap-5 w-[250px]">
                            <a href="/admin_services_cards/{{ $item->id }}"
                                class="inline-block rounded text-base bg-sky-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-sky-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-sky-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-sky-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                                EDIT
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
