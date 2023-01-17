<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"  />

    <form method="POST" action="{{ route('login') }}" style="margin-top: 100px " >
        @csrf
        <div class="p-4 rounded shadow-lg ring ring-pink-300/50"style="margin-left:30%;margin-right:30% ;background-image:url('/images/back.png');background-repeat:no-repeat;background-size: cover;">
        <!-- Email Address -->
        <div class="mt-4" >
            <x-input-label  class="text-blue-200 font-bold" for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full"
             type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="text-blue-200 font-bold"  for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button class="px-4 py-2 font-bold bg-blue-200 hover:bg-blue-900 hover:text-blue-200 rounded-lg text-blue-900">
                {{ __('Log in') }}
            <button>
        </div>
        </div>
    </form>
</x-guest-layout>
