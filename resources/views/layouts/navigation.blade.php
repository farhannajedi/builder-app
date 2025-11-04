<!-- <div class="max-w-screen-lg px-2 flex items-center justify-between mx-auto w-full py-4">
    <ul class="text-sm font-medium uppercase flex gap-6 text-slate-600"> -->

{{-- Menu navigator --}}
<nav x-data="{ mobileOpen: false }" class="bg-white sticky top-0 z-50 shadow">
    <div class="hidden md:block max-w-screen-lg px-2 mx-auto w-full border-t-1 border-slate-200">
        <ul class="text-sm font-medium uppercase flex gap-4 text-slate-600">
            <!-- Beranda -->
            <li class="h-full">
                <a href="/"
                    class="{{ ($activePage ?? '') === 'beranda' ? 'text-orange-600' : 'hover:text-slate-800  border-transparent' }} flex gap-1 items-center border-b-2 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" />
                    </svg>
                    <span>Beranda</span>
                </a>
            </li>

            <!-- Berita -->
            <li class="h-full">
                <a href="/"
                    class="{{ ($activePage ?? '') === 'berita' ? 'text-orange-600 border-b-2' : 'hover:text-slate-800 border-transparent border-b-2' }} h-full block hover:border-b-2 p-2 uppercase">
                    Berita
                </a>
            </li>

            <!-- Berita -->
            <li class="">
                <a href="/"
                    class="{{ ($activePage ?? '') === 'berita' ? 'text-orange-600 border-b-2' : 'hover:text-slate-800 border-transparent border-b-2' }} h-full block hover:border-b-2 p-2 uppercase">
                    Berita
                </a>
            </li>

            <!-- Garis pemisah -->
            <li class="mx-2 text-slate-300">|</li>

            <!-- Logout -->
            <li>
                <form id="logoutForm" action="#" method="POST">
                    @csrf
                    <button type="submit"
                        class="text-red-600 hover:text-red-800 border-transparent border-b-2 block py-2 uppercase">
                        Logout
                    </button>
                </form>
            </li>

        </ul>
    </div>
</nav>