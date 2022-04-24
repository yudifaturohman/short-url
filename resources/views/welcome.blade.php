<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Perpendek URL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">

</head>

<body>

    <section class="relative"
        style="background-image: url('https://i.pinimg.com/originals/74/73/cf/7473cf7cb404a24fd1f20e9699492ad6.jpg')">
        <div class="absolute inset-0 bg-gradient-to-b from-black to-transparent opacity-30"></div>

        <div class="relative z-20 px-4 py-24 mx-auto text-center text-white max-w-7xl lg:py-32">
            <div class="flex flex-wrap text-white">
                <div class="relative w-full px-4 mx-auto text-center xl:flex-grow-0 xl:flex-shrink-0">

                    <h1 class="mt-0 mb-5 text-4xl font-bold text-white sm:text-5xl lg:text-7xl">Laravel Perpendek URL
                    </h1>
                    @if (session('berhasil'))
                    <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 mt-5 text-base text-green-700 mb-3" role="alert">
                        {!! session('berhasil') !!}
                    </div>
                    @endif

                    @error('url')
                    <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 mt-5 text-base text-red-700 mb-3" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror

                </div>
            </div>
        </div>

        <div class="relative z-30 h-48 px-10 bg-white lg:h-32">
            <form action="{{ route('url.shorten') }}" method="POST"
                class="flex flex-col items-center h-auto max-w-lg p-6 mx-auto space-y-3 overflow-hidden transform -translate-y-12 bg-white rounded-lg shadow-md lg:h-24 lg:max-w-6xl lg:flex-row lg:space-y-0 lg:space-x-3">
                @csrf
                <div class="w-full h-12 border-2 border-gray-200 rounded-lg lg:border-0 lg:w-auto lg:flex-1">
                    <input type="text" name="url"
                        class="w-full h-full px-4 font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none"
                        placeholder="Misal : https://www.youtube.com/channel/UC0dg25S0UA2wlYJa8n0lzdw">
                </div>
                <div class="w-full h-full lg:w-auto">
                    <button type="submit"
                        class="inline-flex items-center justify-center w-full h-full px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600 lg:w-64">Ambil
                        URL</button>
                </div>
            </form>
        </div>

    </section>

    <!-- AlpineJS Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>

</body>

</html>
