<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>

<style>
.background {
  position: relative;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.background svg {
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: scaleY(3) scaleX(2.25);
  transform-origin: bottom;
  box-sizing: border-box;
  display: block;
  pointer-events: none;
}

.footer-register {
  position: fixed;
  left: 0;
  bottom: 0;
  display: flex;
  width: 200%;
  height: 2000px;
}
</style>

<div class="hidden lg:block lg:flex-1 lg:relative sm:contents">
    <div class="footer-register">
        <div class="background-register">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900">
                <defs>
                    <path id="wave" fill="rgba(0, 119, 190, 0.6)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
                    s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
                </defs>
                <g>
                    <use xlink:href="#wave" opacity=".4">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s" calcMode="spline" values="270 230; -334 180; 270 230" keyTimes="0; .5; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
                    </use>
                    <use xlink:href="#wave" opacity=".6">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s" calcMode="spline" values="-270 230;243 220;-270 230" keyTimes="0; .6; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
                    </use>
                    <use xlink:href="#wave" opacty=".9">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="4s" calcMode="spline" values="0 230;-140 200;0 230" keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
                    </use>
                </g>
            </svg>
        </div>
    </div>
</div>


    <x-guest-layout>
            <x-slot name="logo">
                <x-authentication-card-logo />
            </x-slot>
            
            <div class="signup shadow h-full w-full">
                <h2>Sign Up <span class="grey-text">to Koperasi</span></h2>
                
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
                    
                    <div class="boxx relative mt-10 mb-10 grid grid-cols-2 gap-4">
                        <div class="input-signup-container">
                            <x-input id="no_hp" class="block w-full px-10 py-0 h-45 text-black" type="number" name="no_hp" :value="old('no_hp')" required autocomplete="phonenumber" />
                            <label for="no_hp">{{ __('No Handphone') }}</label>
                            <span class="absolute top-50% transform -translate-y-50% left-10 text-xs text-gray-400 pointer-events-none">No Handphone</span>
                        </div>
                        
                        <div class="input-signup-container">
                            <x-input id="tanggal_lahir" class="block w-full px-10 py-0 h-45 text-black" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" />
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
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-base text-gray-800 hover:text-black">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-base text-gray-800 hover:text-black">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                <div class="flex justify-between items-center mt-10">
                    <a class="underline text-base text-gray-800 hover:text-black" href="{{ route('login') }}">
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
    