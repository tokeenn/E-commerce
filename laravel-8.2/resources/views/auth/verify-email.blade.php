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
            {{ __('Merci pour votre inscription! Avant de commencer, pourriez-vous vérifier votre adresse e-mail en cliquant sur le lien que nous venons de vous envoyer par e-mail ? Si vous n'avez pas reçu l'e-mail, nous nous ferons un plaisir de vous en envoyer un autre.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Un nouveau lien de vérification a été envoyé à l'adresse e-mail que vous avez fournie lors de l'inscription.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Renvoyer e-mail de vérification') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Se déconnecter') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
