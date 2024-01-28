<x-guest-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight dark:text-gray-100">Register your
                account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium leading-6 dark:text-gray-100">Name</label>
                    <div class="mt-2">
                        <input id="name" name="name" type="text" :value="old('name')" autocomplete="name"
                            required autofocus
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 dark:text-gray-100">Email
                        address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" :value="old('email')"
                            autocomplete="username" required autofocus
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                <div>
                    <label for="password"
                        class="block text-sm font-medium leading-6 dark:text-gray-100">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" :value="old('password')"
                            autocomplete="new-password" required autofocus
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
                <div>
                    <label for="password_confirmation"
                        class="block text-sm font-medium leading-6 dark:text-gray-100">Confirm Password</label>
                    <div class="mt-2">
                        <input id="password_confirmation" name="password_confirmation" type="password"
                            :value="old('password_confirmation')" autocomplete="new-password" required autofocus
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm">
                <a href="{{ route('login') }}"
                    class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Already registered?</a>
            </p>
        </div>
    </div>
</x-guest-layout>
