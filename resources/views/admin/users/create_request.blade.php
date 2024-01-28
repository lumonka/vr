@extends('layouts.app')
@section('content')
    <div class="music-create">
        <div class="h-screen overflow-x-auto flex items-center justify-center bg-neutral-700">
            <form action="/admin_users_requests_create" method="post" class="flex flex-col items-center">
                @csrf
                <table>
                    <tr class="mb-3 flex justify-between gap-5 items-center">
                        <td>
                            <label for="data" class="form-label text-xl">DATA</label>
                        </td>
                        <td>
                            <input type="datetime-local" name="data" id="data" class="w-[500px] form-control bg-neutral-700">
                        </td>
                    </tr>
                    <tr class="mb-3 flex justify-between gap-5 items-center">
                        <td>
                            <label for="text" class="form-label text-xl">TEXT</label>
                        </td>
                        <td>
                            <input type="text" name="text" id="text" class="w-[500px] form-control bg-neutral-700">
                        </td>
                    </tr>
                    <tr class="mb-3 flex justify-between gap-5 items-center">
                        <td>
                            <label for="price" class="form-label text-xl">PRICE</label>
                        </td>
                        <td>
                            <input type="number" name="price" id="price" class="w-[500px] form-control bg-neutral-700">
                        </td>
                    </tr>
                    <tr class="mb-3 flex justify-between gap-5 items-center">
                        <td>
                            <label for="user_id" class="form-label text-xl">USER</label>
                        </td>
                        <td>
                            <input type="number" name="user_id" id="user_id" class="w-[500px] form-control bg-neutral-700">
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
