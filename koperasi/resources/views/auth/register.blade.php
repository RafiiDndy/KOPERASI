<x-guest-layout>
    <div class="relative flex justify-center max-h-full overflow-hidden lg:px-0 bg-gray-100">
        <div class="relative z-10 flex flex-col mr-full px-12 py-10 bg-gray-semi-transparent lg:border-r  sm:justify-center">
            <div class="w-full mx-auto mr-44 md:px-0 sm:px-4">
                <div class="flex flex-col">
                    <h1 class="text-3xl font-semibold tracking-tighter text-gray-900">
                        Sign up
                        <span class="text-gray-600"> to Koperasi</span>
                    </h1>
                </div>
                <form enctype="multipart/form-data" class="form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="space-y-3 mt-8">
                        <div>
                            <label for="name" class="block mb-3 text-sm font-medium text-black">
                                {{ __('Nama') }} *
                            </label>
                            <input type="text" id="name" name="name" placeholder="Nama" value="{{ old('name') }}" required autofocus autocomplete="name" class="block w-full h-12 px-4 py-2 text-black duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm">
                            @error('name')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex space-x-3">
                            <div class="flex-1">
                                <label for="email" class="block mb-3 text-sm font-medium text-black">
                                    {{ __('Email') }} *
                                </label>
                                <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="email" class="block w-full h-12 px-4 py-2 text-black duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm">
                                @error('email')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex-1">
                                <label for="nik" class="block mb-3 text-sm font-medium text-black">
                                    {{ __('NIK') }} *
                                </label>
                                <input type="number" id="nik" name="nik" placeholder="NIK (Nomor Induk Kependudukan)" value="{{ old('nik') }}" maxlength="24" required autofocus autocomplete="nik" min="1" class="block w-full h-12 px-4 py-2 text-black duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm">
                                @error('nik')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <div class="flex-1">
                                <label for="no_hp" class="block mb-3 text-sm font-medium text-black">
                                    {{ __('No Handphone') }} *
                                </label>
                                <input type="tel" id="no_hp" name="no_hp" placeholder="Nomor Handphone" value="{{ old('no_hp') }}" maxlength="13" required autofocus autocomplete="phone" class="block w-full h-12 px-4 py-2 text-black duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm">
                                @error('no_hp')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex-1">
                                <label for="tanggal_lahir" class="block mb-3 text-sm font-medium text-black">
                                    {{ __('Tanggal Lahir') }} *
                                </label>
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ old('tanggal_lahir') }}" required autofocus autocomplete="tanggal_lahir" class="block w-full h-12 px-4 py-2 text-black duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm">
                                @error('tanggal_lahir')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-span-full">
                            <div class="mb-4" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                <label for="foto_ktp" class="block mb-3 text-sm font-medium text-black">Upload Foto KTP *</label>
                                <input type="file" id="foto_ktp" wire:model="foto_ktp" name="foto_ktp" class="block w-full h-12 px-4 py-2 text-black duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm">
                                @error('foto_ktp') <span class="error text-sm text-red-600">{{ $message }}</span> @enderror
                                <div x-show="isUploading">
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <div class="flex-1">

                                <label for="password" class="block mb-3 text-sm font-medium text-black">
                                    {{ __('Password') }} *
                                </label>
                                <input id="password" name="password" required autocomplete="password" class="block w-full h-12 px-4 py-2 text-black duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm" placeholder="Password" type="password">
                                @error('password')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex-1">
                                <label for="password_confirmation" class="block mb-3 text-sm font-medium text-black">
                                    {{ __('Confirm Password') }} *
                                </label>
                                <input id="password_confirmation" name="password_confirmation" required autocomplete="password" class="block w-full h-12 px-4 py-2 text-black duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm" placeholder="Confirm Password" type="password">
                                @error('password_confirmation')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-3">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />
                                    <div class="ms-2 text-sm">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-800 hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-800 hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                        @endif
                        <div class="col-span-full">
                            <button type="submit" class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 font-medium text-white duration-200 bg-gray-900 rounded-xl hover:bg-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-black">
                                Sign up
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <p class="flex mx-auto text-sm font-medium leading-tight text-center text-black">
                            {{ __('Already registered?') }}
                            <a class="ml-auto text-blue-500 hover:text-black" href="{{ route('login') }}">
                                Sign in now
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div class="hidden lg:block lg:flex-1 lg:relative sm:contents">
            <div class="footer-bg-wavy">
                <div class="background-wavy">
                    <svg class="wave-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900">
                        <defs>
                            <path id="wave" fill="#249dc5" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
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
    </div>
</x-guest-layout>
<script>
  const nikInput = document.getElementById('nik');

  nikInput.addEventListener('input', function() {
    if (this.value.length > 23) {
      this.value = this.value.slice(0, 23);
    }
  });
</script>