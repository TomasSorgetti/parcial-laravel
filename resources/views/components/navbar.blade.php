<header class="fixed top-0 left-0 w-full bg-tertiary">
    <nav class="container mx-auto flex items-center justify-between p-4 lg:px-0">
        <a
            href="<?= route('home'); ?>">
            <img src="/images/logo.svg" alt="logo de constructly">
        </a>

        <ul class="flex flex-col gap-8 lg:flex-row">
            <li>
                <x-ui.nav-link to="home">Inicio</x-ui.nav-link>
            </li>
            <li>
                <x-ui.nav-link to="home">Docs</x-ui.nav-link>
            </li>
            <li>
                <x-ui.nav-link to="blog.list">Blog</x-ui.nav-link>
            </li>
        </ul>

        <ul class="flex flex-col gap-8 lg:flex-row">
            @auth
            <x-ui.auth-dropdown />
            @else
            <li>
                <x-ui.main-button to="auth.login" variant="primary">Iniciar Sessión</x-ui.main-button>
            </li>
            @endauth
        </ul>
    </nav>
</header>