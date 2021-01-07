<x-guest-layout>
    <x-jet-authentication-card >
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        
        width: 100%;
        height: 100vh;
        display:flex;
        justify-content:center;
    }.antialiased{
        width:500px;
    }
    label{
        display:block;
    }
    input[type=text],input[type=password]{
        width:100%;
        padding:5px 0;
        box-sizing:border-box;
    }
    svg{
        width: 100px;
        
    }
    button{
        display:block;
        width:100%;
        margin-top:10px;
        padding:5px;
        cursor:pointer;
    }
</style>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Username Or Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="text"  name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
