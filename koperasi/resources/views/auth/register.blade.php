<div class="wave-container">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#a2d9ff" fill-opacity="1" d="M0,192L48,202.7C96,213,192,235,288,208C384,181,480,107,576,112C672,117,768,203,864,218.7C960,235,1056,181,1152,144C1248,107,1344,85,1392,74.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</div>

<div class="wave-container-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,192L48,202.7C96,213,192,235,288,208C384,181,480,107,576,112C672,117,768,203,864,218.7C960,235,1056,181,1152,144C1248,107,1344,85,1392,74.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</div>
<x-guest-layout>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>
        
        <div class="signup shadow">
            <h2>Sign Up</h2>
            
            <x-validation-errors class="mb-4" />
            <form class="form" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="boxx relative mt-10 mb-10">
                    <x-input id="name" class="block mt-10 w-full px-20 py-0 h-45 text-black" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <label for="name">{{ __('Nama') }}</label>
                    <span class="absolute top-50% transform -translate-y-50% left-10 text-xs text-gray-400 pointer-events-none">Nama</span>
                </div>

                <div class="boxx relative mt-10 mb-10">
                    <x-input id="email" class="block mt-10 w-full px-10 py-0 h-45 text-black" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <label for="email">{{ __('Email') }}</label>
                    <span class="absolute top-50% transform -translate-y-50% left-10 text-xs text-gray-400 pointer-events-none">Email</span>
                </div>

                <div class="boxx relative mt-10 mb-10">
                    <x-input id="nik" class="block mt-10 w-full px-10 py-0 h-45 text-black" type="number" name="nik" :value="old('nik')" required autocomplete="nik" />
                    <label for="nik">{{ __('NIK') }}</label>
                    <span class="absolute top-50% transform -translate-y-50% left-10 text-xs text-gray-400 pointer-events-none">NIK</span>
                    @error('nik')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="boxx relative mt-10 mb-10">
                    <x-input id="no_hp" class="block mt-10 w-full px-10 py-0 h-45 text-black" type="number" name="no_hp" :value="old('no_hp')" required autocomplete="phonenumber" />
                    <label for="no_hp">{{ __('No Handphone') }}</label>
                    @error('no_hp')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                    <span class="absolute top-50% transform -translate-y-50% left-10 text-xs text-gray-400 pointer-events-none">No Handphone</span>
                </div>

                <div class="boxx relative mt-10 mb-10">
                    <x-input id="tanggal_lahir" class="block mt-10 w-full px-10 py-0 h-45 text-black" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" />
                    <label for="tanggal_lahir">{{ __('Tanggal Lahir') }}</label>
                    <span class="absolute top-50% transform -translate-y-50% left-10 text-xs text-gray-400 pointer-events-none">dd/mm/yyyy</span>
                </div>

                <div class="boxx relative mt-10 mb-10">
                    <x-input id="password" class="block mt-10 w-full px-10 py-0 h-45 text-black" type="password" name="password" required autocomplete="new-password" />
                    <label for="password">{{ __('Password') }}</label>
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                    <span class="absolute top-50% transform -translate-y-50% left-10 text-xs text-gray-400 pointer-events-none">Password</span>
                </div>

                <div class="boxx relative mt-10 mb-10">
                    <x-input id="password_confirmation" class="block mt-10 w-full px-10 py-0 h-45 text-black" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                    @error('password_confirmation')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                    <span class="absolute top-50% transform -translate-y-50% left-10 text-xs text-gray-400 pointer-events-none">Confirm Password</span>
                </div>


                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ms-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-800 hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-800 hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>

                        </x-label>
                    </div>
                @endif
                <div class="mt-5">
                    <a class="underline text-sm text-gray-800 hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>

            <div class="flex justify-center items-center mt-5">
                <x-button class="ms-4 custom-register-login-button">
                    <div class="svg-wrapper-1">
                        <div class="svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                            </svg>
                        </div>
                    </div>
                    <span>{{ __('Register') }}</span>
                </x-button>
            </div>
        </form>
</x-guest-layout>
