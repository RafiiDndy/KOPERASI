<div class="h-full w-full bg-no-repeat bg-cover" style="background-image: url('{{ asset('img/wave.jpg') }}'); background-size: cover;">
    <x-guest-layout>
            <x-slot name="logo">
                <x-authentication-card-logo />
            </x-slot>
            
            <div class="signup shadow h-full w-full">
                <h2>Sign Up</h2>
                
                <form class="form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="boxx relative mt-10 mb-10">
                        <div class = "input-signup-container">
                            <x-input id="name" class="block mt-10 w-full px-20 py-0 h-45 text-black" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <label for="name">{{ __('Nama') }}</label>
                            <span class="absolute top-50% transform -translate-y-50% left-10 text-xs text-gray-400 pointer-events-none">Nama</span>
                        </div>
                    </div>

                    <div class="boxx relative mt-10 mb-10">
                        <div class = "input-signup-container">
                            <x-input id="email" class="block mt-10 w-full px-10 py-0 h-45 text-black" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <label for="email">{{ __('Email') }}</label>
                            <span class="absolute top-50% transform -translate-y-50% left-10 text-xs text-gray-400 pointer-events-none">Email</span>
                        </div>
                    </div>

                    <div class="boxx relative mt-10 mb-10">
                        <div class = "input-signup-container">
                            <x-input id="nik" class="block mt-10 w-full px-10 py-0 h-45 text-black" type="number" name="nik" :value="old('nik')" required autocomplete="nik" />
                            <label for="nik">{{ __('NIK') }}</label>
                            <span class="absolute top-50% transform -translate-y-50% left-10 text-xs text-gray-400 pointer-events-none">NIK</span>
                        </div>
                        <div class="mt-1">
                            @error('nik')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="boxx relative mt-10 mb-10">
                        <div class = "input-signup-container">
                            <x-input id="no_hp" class="block mt-10 w-full px-10 py-0 h-45 text-black" type="number" name="no_hp" :value="old('no_hp')" required autocomplete="phonenumber" />
                            <label for="no_hp">{{ __('No Handphone') }}</label>
                            <span class="absolute top-50% transform -translate-y-50% left-10 text-xs text-gray-400 pointer-events-none">No Handphone</span>
                        </div>
                    </div>

                    <div class="boxx relative mt-10 mb-10">
                        <div class = "input-signup-container">
                            <x-input id="tanggal_lahir" class="block mt-10 mb-5 w-full px-10 py-0 h-45 text-black" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" />
                            <label for="tanggal_lahir">{{ __('Tanggal Lahir') }}</label>
                            <span class="absolute top-50% transform -translate-y-50% left-10 text-xs text-gray-400 pointer-events-none">dd/mm/yyyy</span>
                        </div>
                    </div>

                    <div class="boxx relative mt-10 mb-10">
                        <div class = "input-signup-container">
                            <x-input id="password" class="block mt-10 w-full px-10 py-0 h-45 text-black" type="password" name="password" required autocomplete="new-password" />
                            <label for="password">{{ __('Password') }}</label>
                            <span class="absolute top-50% transform -translate-y-50% left-10 text-xs text-gray-400 pointer-events-none">Password</span>
                        </div>
                        <div class="mt-1">
                            @error('password')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="boxx relative mt-10 ">
                        <div class = "input-signup-container">
                            <x-input id="password_confirmation" class="block mt-10 w-full px-10 py-0 h-45 text-black" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                            <span class="absolute top-50% transform -translate-y-50% left-10 text-xs text-gray-400 pointer-events-none">Confirm Password</span>
                        </div>
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-3">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />
                                    <div class="ms-2 text-base">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-base text-gray-800 hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-base text-gray-800 hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                <div class="flex justify-between items-center mt-10">
                    <a class="underline text-base text-gray-800 hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

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
            </div>
    </x-guest-layout>
</div>