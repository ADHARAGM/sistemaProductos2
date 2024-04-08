<x-guest-layout>
    <div class="col-sm-12 recuadro">
        <form class="col-sm-10" method="POST" action="{{route('register') }}">
            <div class="col-sm-12 lineal">
            @csrf
                <div class="col-sm-5">
                    <x-input-label for="nombre" :value="__('nombre')" />
                    <x-text-input id="nombre" class="block mt-1 w-full form-control" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
                    <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                </div>
                <div class="col-sm-3">
                    <x-input-label for="apPaterno" :value="__('Apellido paterno')" />
                    <x-text-input id="apPaterno" class="block mt-1 w-full form-control" type="text" name="apPaterno" :value="old('apPaterno')" required autofocus autocomplete="apPaterno" />
                    <x-input-error :messages="$errors->get('apPaterno')" class="mt-2" />
                </div>
                <div class="col-sm-3">
                    <x-input-label for="apMaterno" :value="__('Apellido materno')" />
                    <x-text-input id="apMaterno" class="block mt-1 w-full form-control" type="text" name="apMaterno" :value="old('apMaterno')" required autofocus autocomplete="apMaterno" />
                    <x-input-error :messages="$errors->get('apMaterno')" class="mt-2" />
                </div>
            </div>
            <div class="col-sm-12 lineal">
                <!-- Email Address -->
                <div class="col-sm-5">
                    <x-input-label for="email" :value="__('Correo/Usuario')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="col-sm-3">
                    <x-input-label for="password" :value="__('Contraseña')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="col-sm-3">
                    <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>
            <div class="col-sm-12 lineal">
                
                <div class="col-sm-6">
                    <label  class="form-label">Acceso</label>
                    <select id="acceso"  name="acceso" class="block mt-1 w-full form-control">
                        <option value="1">SI</option>
                        <option value="0">DENEGADO</option>
                    </select>
                </div>
                <div class="col-sm-5">
                    <label  class="form-label">Perfil</label>
                    <select id="id_perfil"  name="id_perfil" class="block mt-1 w-full form-control">
                        @foreach($datos as $key)
                            <option value="{{$key['id_perfil']}}">
                                {{$key['perfil']}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-12 lineal align-right">
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Iniciar sesión') }}
                    </a>

                    <x-primary-button class="ms-4">
                        {{ __('Registrar') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
