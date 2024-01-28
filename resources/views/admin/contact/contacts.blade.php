@extends('layouts.app')
@section('content')
    <div class="h-[72.7vh] flex items-center justify-center bg-neutral-700 text-white">
        <form action="/admin_contact_contacts_edit/{{ $contacts->id }}" method="post" class="flex flex-col items-center">
            @method('patch')
            @csrf
            <table>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="phone" class="form-label text-xl">PHONE</label>
                    </td>
                    <td>
                        <input type="tel" name="phone" id="phone" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $contacts->phone }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="email" class="form-label text-xl">E-MAIL</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $contacts->email }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="address" class="form-label text-xl">ADDRESS</label>
                    </td>
                    <td>
                        <input type="text" name="address" id="address" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $contacts->address }}">
                    </td>
                </tr>
            </table>
            <input type="submit" value="SUBMIT"
                class="inline-block rounded text-base bg-green-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-green-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-green-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-green-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
        </form>
    </div>
@endsection
