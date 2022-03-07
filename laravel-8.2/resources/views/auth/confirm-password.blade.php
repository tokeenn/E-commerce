<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        <img src="https://www.logolynx.com/images/logolynx/48/48be75041e6045bd8a914e5d1c7cfbc3.png">
            <style>
                img{
                    width: 200px;
                }
            </style>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Il s'agit d'une zone sécurisée de l'application. Veuillez confirmer votre mot de passe avant de continuer.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Confirmer') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
