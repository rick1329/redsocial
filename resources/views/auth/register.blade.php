<x-guest-layout>
    <div class="w-full h-full pt-20 bg-center bg-cover lg:pt-0" style="background-image: url({{ asset('image/wallpaper.webp') }})">
        <div class="mx-auto p-4 lg:p-10 bg-white/75 rounded-3xl w-[90%] lg:w-[410px] relative lg:-translate-y-1/2 lg:top-1/2 col gap-14">
            <div class="gap-4 center-content">
                <div>
                    <p class="text-4xl font-bold text-primary">Readme</p>
                    <p class="text-lg font-semibold text-secondary">FeedBack</p>
                </div>

                <x-utils.icons.heart class="w-16 h-16" />
            </div>

            <form action="/register" method="POST">
                @csrf

                <div class="col">
                    <div class="gap-5 col">
                        <div class="gap-1 col">
                            <p class="text-input">Nombre</p>
                            <input type="text" name="name" class="input-form" style="transition: all 0.5s" autofocus>
                        </div>

                        <div class="gap-1 col">
                            <p class="text-input">Correo electrónico</p>
                            <input type="email" name="email" class="input-form" style="transition: all 0.5s">
                        </div>

                        <div class="gap-1 col">
                            <p class="text-input">Contraseña</p>
                            <div class="relative" x-data="{ show: false }">
                                <input :type="show === false ? 'password' : 'text'" name="password" class="input-form" style="transition: all 0.5s" autocomplete="off">

                                <div class="absolute top-2 right-3" @click="show = !show">
                                    <div x-show="!show" class="tooltip tooltip-top" data-tip="Ver contraseña">
                                        <x-utils.icons.eye style="eye-form tooltip tooltip-top" />
                                    </div>

                                    <div x-show="show" class="tooltip tooltip-top" data-tip="Ocultar contraseña">
                                        <x-utils.icons.eye-slash style="eye-form" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gap-1 col">
                            <p class="text-input">Confirmar contraseña</p>
                            <div class="relative" x-data="{ show: false }">
                                <input :type="show === false ? 'password' : 'text'" name="password_confirmation" class="input-form" style="transition: all 0.5s" autocomplete="off">

                                <div class="absolute top-2 right-3" @click="show = !show">
                                    <div x-show="!show" class="tooltip tooltip-top" data-tip="Ver contraseña">
                                        <x-utils.icons.eye style="eye-form tooltip tooltip-top" />
                                    </div>

                                    <div x-show="show" class="tooltip tooltip-top" data-tip="Ocultar contraseña">
                                        <x-utils.icons.eye-slash style="eye-form" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="mt-10 btn-form">
                        <p class="skew-x-[15deg]">Registrarse</p>
                    </button>

                    <p class="items-center mt-10 col">
                        ¿Ya tienes cuenta?

                        <a href="/login" wire:navigate class="font-semibold hover:underline text-primary">
                            Iniciar Sesión
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
