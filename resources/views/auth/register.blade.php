<x-layouts.main>
    <x-slot:title>Constructly - Registrarse</x-slot:title>
    <x-slot:description>Registrarse</x-slot:description>

    <form action="#" method="post" class="my-32 w-full max-w-[29rem] mx-auto flex flex-col items-start space-y-6">
        @csrf
        <div class="mb-8">
            <h1 class="font-bold text-font-primary text-3xl">Registrarse</h1>
            <p class="text-font-secondary">Ingresa tus datos.</p>
        </div>

        <x-ui.google-button>Registrarse con Google</x-ui.google-button>

        <x-ui.custom-input
            id="email"
            name="email"
            type="email"
            label="Correo electrónico"
            placeholder="Ingresa tu correo"
            :required="true"
            :error="$errors->first('email')"
            :disabled=false />

        <x-ui.custom-input
            id="password"
            name="password"
            type="password"
            label="Contraseña"
            placeholder="********"
            :required="true"
            :error="$errors->first('email')"
            :disabled=false />

        <x-ui.custom-check
            id="terms"
            name="terms"
            label="Aceptar términos y condiciones" />

        <x-ui.form-button>Registrarse</x-ui.form-button>

        <p class="text-font-secondary w-full text-center">Ya tienes cuenta? <a href="<?= route('registrarse'); ?>" class="text-primary underline">Iniciar Sessión</a></p>
    </form>
</x-layouts.main>