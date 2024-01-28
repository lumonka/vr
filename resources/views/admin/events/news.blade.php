@extends('layouts.app')
@section('content')
    <div class="min-h-screen pt-[200px] overflow-x-auto flex items-center justify-center bg-neutral-700 text-white">
        <form action="/admin_events_news_edit/{{ $news->id }}" method="post" class="flex flex-col items-center">
            @method('patch')
            @csrf
            <table>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="heading" class="form-label text-xl">HEADER</label>
                    </td>
                    <td>
                        <input type="text" name="heading" id="heading" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $news->heading }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="descr" class="form-label text-xl">DESCRIPTION</label>
                    </td>
                    <td>
                        <input type="text" name="descr" id="descr" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $news->descr }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="image" class="form-label text-xl">IMAGE</label>
                    </td>
                    <td>
                        <input type="text" name="image" id="image" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $news->image }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="data" class="form-label text-xl">DATE</label>
                    </td>
                    <td>
                        <input type="date" name="data" id="data" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $news->data }}">
                    </td>
                </tr>
            </table>
            <input type="submit" value="SUBMIT"
                class="mx-auto inline-block rounded text-base bg-green-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-green-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-green-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-green-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
        </form>
    </div>
@endsection
