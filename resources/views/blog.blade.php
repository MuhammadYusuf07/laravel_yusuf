<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Halaman blog</title>
</head>

<body>
    <div class="min-h-full">
        <x-navbar></x-navbar>

        <header class="relative bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Blog Page</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
                <h1>Selamat datang di halaman Blog</h1>
                <article>
                    <h3>Judul1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum a impedit quasi et minima autem
                        ratione
                        modi
                        quidem possimus voluptates quibusdam iure vitae enim temporibus molestias, adipisci ipsum! Iure,
                        natus?</p>
                </article>

                <article>
                    <h3>Judul2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum a impedit quasi et minima autem
                        ratione
                        modi
                        quidem possimus voluptates quibusdam iure vitae enim temporibus molestias, adipisci ipsum! Iure,
                        natus?</p>
                </article>

                <article>
                    <h3>Judul3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum a impedit quasi et minima autem
                        ratione
                        modi
                        quidem possimus voluptates quibusdam iure vitae enim temporibus molestias, adipisci ipsum! Iure,
                        natus?</p>
                </article>
            </div>
        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>

</html>
