@extends('layouts.app')
@section('content')
    <div class="min-h-screen pt-[200px] overflow-x-auto flex items-center justify-center bg-neutral-700 text-white">
        <form action="/admin_label_header_edit/{{ $header->id }}" method="post" class="flex flex-col items-center">
            @method('patch')
            @csrf
            <table>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <tr>
                        <label for="text" class="form-label text-xl">TEXT</label>
                    </tr>
                    <td>
                        <textarea name="text" id="text" cols="30" rows="10" class="w-[500px] form-control bg-neutral-700">
                                {{ $header->text }}
                            </textarea>
                    </td>
                </tr>
            </table>
            <input type="submit" value="SUBMIT"
                class="mx-auto inline-block rounded text-base bg-green-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-green-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-green-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-green-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
        </form>
    </div>
@endsection
