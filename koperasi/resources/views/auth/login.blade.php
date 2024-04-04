<x-guest-layout>
    <x-slot name="logo">
        <x-authentication-card-logo />
    </x-slot>

    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="cincin">
            <i style="--clr:#00ff0a;"></i>
            <i style="--clr:#ff0057;"></i>
            <i style="--clr:#fffd44;"></i>
            
            <div class="login mx-auto max-w-md rounded-lg bg-white shadow p-8">
                <h2 class="text-center" style="font-size: 20px; font-weight: bold;">LOGIN</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mx-auto max-w-xs mb-4">
                        <div>
                            <label for="email" class="mb-1 block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                            <x-input id="email" class="block w-full rounded-md border-gray-300 pl-2.5 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="you@email.com" />
                            @error('email')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="mx-auto max-w-xs">
                        <div class="relative">
                            <label for="password" class="mb-1 block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                            <x-input id="password" class="block w-full rounded-md border-gray-300 pl-2.5 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" type="password" name="password" required autocomplete="current-password" placeholder="**********" />
                                <div class="absolute inset-y-0 right-0 flex items-center pr-2.5 top-1/2 transform -translate-y-1/4">
                                    <button type="button" class="p-1 rounded-full" onclick="togglePasswordVisibility()">
                                        <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 text-gray-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        <svg id="eye-off-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 text-gray-500 hidden">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0a2 2 0 012.77 2.77M7.688 7.688a2 2 0 002.77 2.77M15.386 15.386a2 2 0 002.77 2.77" />
                                        </svg>
                                    </button>
                                </div>
                        </div>
                            @error('password')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                            <label for="remember_me" class="flex items-center mt-5">
                                <x-checkbox id="remember_me" name="remember" />
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>   
                    </div>
                    <div class="flex justify-center">
                        <x-button x-button class="mt-7">
                            {{ __('Log in') }}
                        </x-button>
                    </div>

                    <div class="flex justify-center mt-2">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mt-4" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <div class="flex justify-center mt-2 px-10"></div>
                        @if (Route::has('register'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mt-4" href="{{ route('register') }}">
                                {{ __("Didn't Have Account?") }}
                            </a>
                        @endif

                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>

<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        const eyeOffIcon = document.getElementById('eye-off-icon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList.add('hidden');
            eyeOffIcon.classList.remove('hidden');
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList.remove('hidden');
            eyeOffIcon.classList.add('hidden');
        }
    }
</script>