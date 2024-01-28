@extends('layouts.app')
@section('content')
    <div class="music-create">
        <div class="h-screen overflow-x-auto flex items-center justify-center bg-neutral-700 text-white">
            <form action="/admin_social_create" method="post" class="flex flex-col items-center">
                @csrf

                <table>
                    <tr class="mb-3 flex justify-between gap-5 items-center">
                        <td>
                            <label for="icon" class="form-label text-xl">ICON</label>
                        </td>
                        <td>
                            <input type="text" name="icon" id="icon" class="w-[500px] form-control bg-neutral-700">
                        </td>
                    </tr>
                    <tr class="mb-3 flex justify-between gap-5 items-center">
                        <td>
                            <label for="name" class="form-label text-xl">NAME</label>
                        </td>
                        <td>
                            <input type="text" name="name" id="name" class="w-[500px] form-control bg-neutral-700">
                        </td>
                    </tr>
                </table>

                <button type="submit"
                    class="inline-block rounded text-base bg-green-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-green-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-green-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-green-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                    CREATE
                </button>

            </form>
        </div>
    </div>
@endsection
