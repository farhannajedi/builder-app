<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Builder App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col">
    <main class="bg-white flex-1">
        @include('layouts.alamat')
    </main>
    <footer class="w-full bg-slate-900 text-slate-300 pt-14 pb-10 relative overflow-hidden">

        {{-- BIG BACKGROUND TEXT --}}
        <p class="pointer-events-none select-none absolute -left-4 top-2
        text-[170px] font-black tracking-widest leading-none
        bg-gradient-to-t from-slate-900 via-slate-800 to-slate-800 bg-clip-text text-transparent opacity-40">
            BUMI
        </p>
        <p class="pointer-events-none select-none absolute -right-4 bottom-5
        text-[150px] font-black tracking-widest leading-none
        bg-gradient-to-b from-slate-900 via-slate-800 to-slate-800 bg-clip-text text-transparent opacity-40">
            BERAZAM
        </p>

        <div class="max-w-screen-lg mx-auto px-4 relative z-10">

            {{-- TOP SECTION --}}
            <div class="flex justify-between items-start gap-10 mb-14">
                <div>
                    <img src="{{ asset('assets/images/logo_kab.png') }}" class="w-28 mb-3 drop-shadow-xl" alt="">
                    <p class="text-xl font-semibold text-white drop-shadow">Kabupaten Karimun</p>
                    <p class="text-sm text-slate-300 drop-shadow">Diskominfo</p>
                </div>

                {{-- Kontak --}}
                <div class="text-sm space-y-1">
                    <p class="text-slate-400 mb-1 font-medium">Kontak</p>
                    <p>Jl. Jendral Sudirman No. ...</p>
                    <p>Email: diskominfo@karimun.go.id</p>
                    <p>Telp: (0777) xxxx</p>
                </div>

                {{-- Sosial Media --}}
                <div class="text-sm space-y-1">
                    <p class="text-slate-400 mb-1 font-medium">Media Sosial</p>
                    <div class="flex gap-4">
                        <a href="#" class="hover:text-white transition">Facebook</a>
                        <a href="#" class="hover:text-white transition">Instagram</a>
                        <a href="#" class="hover:text-white transition">YouTube</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- COPYRIGHT BAR --}}
    <div class="w-full bg-slate-800 py-1">
        <p class="text-sm text-center font-medium text-slate-100">Copyright &copy; 2025</p>
    </div>

</body>

</html>