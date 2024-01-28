@extends('layouts.app')
@section('content')
    <div class="min-h-screen pt-[200px] overflow-x-auto flex items-center justify-center bg-neutral-700 text-white">
        <form action="/admin_events_person_edit/{{ $person->id }}" method="post" class="flex flex-col items-center">
            @method('patch')
            @csrf
            <table>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="rap_name" class="form-label text-xl">RAP NAME</label>
                    </td>
                    <td>
                        <input type="text" name="rap_name" id="rap_name" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $person->rap_name }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="name" class="form-label text-xl">NAME</label>
                    </td>
                    <td>
                        <input type="text" name="name" id="name" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $person->name }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="surname" class="form-label text-xl">SURNAME</label>
                    </td>
                    <td>
                        <input type="text" name="surname" id="surname" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $person->surname }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="date_of_birth" class="form-label text-xl">DATE OF BIRTH</label>
                    </td>
                    <td>
                        <input type="date" name="date_of_birth" id="date_of_birth" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $person->date_of_birth }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="email" class="form-label text-xl">E-MAIL</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $person->email }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="phone" class="form-label text-xl">PHONE</label>
                    </td>
                    <td>
                        <input type="tel" name="phone" id="phone" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $person->phone }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="date" class="form-label text-xl">DATE</label>
                    </td>
                    <td>
                        <input type="datetime-local" name="date" id="date" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $person->date }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="zip" class="form-label text-xl">Zip</label>
                    </td>
                    <td>
                        <input type="text" name="zip" id="zip" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $person->zip }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="address" class="form-label text-xl">ADDRESS</label>
                    </td>
                    <td>
                        <input type="text" name="address" id="address" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $person->address }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-5 items-center">
                    <td>
                        <label for="city" class="form-label text-xl">CITY</label>
                    </td>
                    <td>
                        <input type="text" name="city" id="city" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $person->city }}">
                    </td>
                </tr>
            </table>
            <input type="submit" value="SUBMIT" class="mx-auto inline-block text-base rounded bg-green-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-green-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-green-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-green-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
        </form>
    </div>
@endsection
