@extends('layouts.app')
@section('content')
    <div class="min-h-screen py-[200px] overflow-x-auto bg-neutral-700 text-white flex flex-col justify-center">
        <h2 class="mt-[50px] text-5xl text-center">CARDS</h2>
        <a href="/admin_social_create"
            class="my-[25px] text-base mx-auto inline-block rounded bg-green-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-green-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-green-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-green-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
            ADD SOCIAL
        </a>
        <table class="mt-[50px] w-[90%] mx-auto text-left text-xl whitespace-nowrap flex flex-col">
            <thead class="uppercase tracking-wider border-b-2">
                <tr class="flex justify-between">
                    <th scope="col" class="px-6 py-4 text-left w-[500px]">
                        ICON
                    </th>
                    <th scope="col" class="px-6 py-4 text-center w-[500px]">
                        ICON-HTML
                    </th>
                    <th scope="col" class="px-6 py-4 text-right w-[300px]">
                        ACTION
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($social as $item)
                    <tr class="border-neutral-600 hover:bg-neutral-600 hover:scale-105 duration-100 flex justify-between items-center">
                        <td class="px-6 py-4 text-wrap break-all text-left w-[500px]">
                            {{ $item->icon }}
                        </td>
                        <td class="px-6 py-4 text-wrap break-all text-center w-[500px]">
                            {{ $item->icon }}
                        </td>
                        <td class="px-6 py-6 flex justify-end text-right gap-5 w-[300px]">
                            <a href="/admin_social/{{ $item->id }}"
                                class="inline-block rounded text-base bg-sky-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-sky-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-sky-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-sky-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                                EDIT
                            </a>
                            <form action="/admin_social_delete/{{ $item->id }}" method="post">
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
