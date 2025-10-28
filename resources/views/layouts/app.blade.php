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

    </main>
    <footer class="relative bottom-0 left-0 w-full bg-slate-900 pb-1 z-50">
        <div class="max-w-screen-lg px-2 mx-auto text-slate-300">
            <div class="overflow-hidden">
                <div class="flex py-8 relative border-b border-slate-700">
                    <div class="flex-1 space-y-2 z-10">
                        <img src="{{ asset('assets/images/logo_kab.png') }}" class="w-32 h-auto" alt="">
                    </div>
                    <div class="right-0 z-0 bottom-0">
                        <p
                            class="text-9xl tracking-wide font-bold text-right bg-gradient-to-t bg-slate-900 via-slate-800 to-slate-800 bg-clip-text text-transparent opacity-50">
                            BUMI
                        </p>
                    </div>
                </div>
                <div class="relative py-8 items-end relative">
                    <div class="flex-1 z-10">
                        <p class="text-slate-200 text-base font-normal">KABUPATEN KARIMUN</p>
                        <p class="text-sm font-light">DISKOMINFO</p>
                    </div>
                    <p
                        class="top-4 right-0 bottom-0 leading-[0.8] text-9xl tracking-wide font-bold text-right bg-gradient-to-b bg-slate-900 via-slate-800 to-slate-800 bg-clip-text text-transparent opacity-50">
                        <span class="align-[0px]">BERAZAM</span>
                    </p>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <div class="w-full bg-slate-800 py-1">
        <p class="text-sm text-center font-medium text-slate-100">Copyright &copy; 2025 </p>
    </div>
</body>

</html>