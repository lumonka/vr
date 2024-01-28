@extends('layouts.app')
@section('content')
    <div class="min-h-screen py-[200px] overflow-x-auto bg-neutral-700 text-white">
        <table class="w-[90%] mx-auto text-left text-xl whitespace-nowrap flex flex-col">
            <h2 class="my-[50px] text-5xl text-center">BANNERS</h2>
            <thead class="uppercase tracking-wider border-b-2">
                <tr class="flex justify-between">
                    <th scope="col" class="px-6 py-4 text-left w-[250px]">
                        HEADER
                    </th>
                    <th scope="col" class="px-6 py-4 text-center w-[600px]">
                        BACKGROUND
                    </th>
                    <th scope="col" class="px-6 py-4 text-center w-[120px]">
                        PAGE
                    </th>
                    <th scope="col" class="px-6 py-4 text-right w-[150px]">
                        ACTION
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($banner as $item)
                    <tr class="border-neutral-600 hover:bg-neutral-600 hover:scale-105 duration-100 flex justify-between items-center">
                        <td class="px-6 py-4 text-left w-[250px]">
                            {{ $item->heading }}
                        </td>
                        <td class="px-6 py-4 text-center text-wrap break-all w-[600px]">
                            {{ $item->background }}
                        </td>
                        <td class="px-6 py-4 text-center w-[120px]">
                            {{ $item->page }}
                        </td>
                        <td class="px-6 py-6 flex justify-end text-right gap-5 w-[150px]">
                            <a href="/admin_banner/{{ $item->id }}"
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
