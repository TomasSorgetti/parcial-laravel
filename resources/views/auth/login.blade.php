<x-layouts.main>
    <x-slot:title>Constructly - Iniciar Sessión</x-slot:title>
    <x-slot:description>Iniciar Sessión</x-slot:description>

    <form action="{{ route('auth.login.login') }}" method="post" class="my-32 w-full max-w-[29rem] mx-auto flex flex-col items-start space-y-6">
        @csrf
        <div class="mb-8">
            <h1 class="font-bold text-font-primary text-3xl">Iniciar Sessión</h1>
            <p class="text-font-secondary">Ingresa tus credenciales.</p>
        </div>

        <x-ui.google-button>Continuar con Google</x-ui.google-button>

        @if (session('login.error') || $errors->any())
        <div class="w-full p-3 mb-4 text-sm text-red-600 bg-red-100 rounded-md">
            {{ session('login.error') ?? $errors->first() }}
        </div>
        @endif

        <x-ui.custom-input
            id="email"
            name="email"
            type="email"
            label="Correo electrónico"
            placeholder="Ingresa tu correo"
            :required="true"
            :disabled=false />

        <x-ui.custom-input
            id="password"
            name="password"
            type="password"
            label="Contraseña"
            placeholder="********"
            :required="true"
            :disabled=false />

        <x-ui.custom-check
            id="rememberme"
            name="rememberme"
            label="Recordarme" />

        <x-ui.form-button>Iniciar Sessión</x-ui.form-button>

        <p class="text-font-secondary w-full text-center">No tienes cuenta? <a href="<?= route('auth.register'); ?>" class="text-primary underline">Registrate</a></p>
    </form>
</x-layouts.main>