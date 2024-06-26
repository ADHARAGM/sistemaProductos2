<x-guest-layout>
    <div class="col-sm-5">
        <div class="recuadro ">
                

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Inserta tu correo para reestablecer tu contraseña') }}
                    </div>
                    <div>
                        <x-input-label for="email" :value="__('Correo/Usuario')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button >
                            {{ __('Enviar') }}
                        </x-primary-button>
                    </div>
                </form>           
        </div>
    </div>
</x-guest-layout>
