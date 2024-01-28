@extends('layouts.app')
@section('content')
    <div class="min-h-screen py-[200px] overflow-x-auto bg-neutral-700 text-white">
        <table class="w-[90%] mx-auto text-xl whitespace-nowrap flex flex-col">
            <h2 class="mt-[50px] text-5xl text-center">CHANGE LOG</h2>
            <thead class="uppercase tracking-wider border-b-2">
                <tr class="flex justify-between">
                    <th scope="col" class="px-6 py-4 text-left w-[400px]">
                        OPERATION
                    </th>
                    <th scope="col" class="px-6 py-4 text-right">
                        TIME
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($change_log as $item)
                    <tr
                        class="hover:bg-neutral-600 hover:scale-105 duration-100 flex justify-between items-center">
                        <td class="px-6 py-4 text-left w-[1000px]">
                            <table>
                                <h2 class="py-4">{{ $item->table }}</h2>
                                <tbody class="flex flex-col gap-5 text-base">
                                    {!! $item->name !!}
                                </tbody>
                            </table>
                        </td>
                        <td class="px-6 py-4 text-right">
                            {{ $item->datetime }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
