<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 1 - Laravel</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-gradient-to-br from-black via-zinc-900 to-zinc-800 min-h-screen flex items-center justify-center p-6">

    <!-- Card Container -->
    <div class="relative w-full max-w-4xl">

        <!-- Glow Effect -->
        <div class="absolute -inset-1 bg-gradient-to-r from-purple-600 via-pink-500 to-indigo-500 rounded-2xl blur opacity-20"></div>

        <!-- Main Card -->
        <div class="relative bg-zinc-900/80 backdrop-blur-xl border border-zinc-800 rounded-2xl p-10 shadow-2xl transition-all duration-500 hover:scale-[1.01]">

            <!-- Profile Section -->
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

                <div>
                    <h1 class="text-white text-2xl lg:text-3xl font-bold mb-2 tracking-wide">
                        Fera Istanti
                    </h1>
                    <p class="text-zinc-400 text-sm lg:text-base">
                        NIM: <span class="text-white font-medium">20230140083</span>
                    </p>
                </div>

                <!-- Badge -->
                <div class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white text-xs font-semibold px-4 py-2 rounded-full shadow-md">
                    Mahasiswa Informatika
                </div>

            </div>

            <!-- Divider -->
            <div class="my-8 border-t border-zinc-800"></div>

            <!-- Button Section -->
            <div class="flex flex-col sm:flex-row gap-4">

                <a href="#"
                   class="flex items-center justify-center gap-2 bg-white text-black font-semibold text-sm px-6 py-3 rounded-lg hover:bg-gray-200 transition-all duration-300 shadow-md hover:shadow-xl hover:-translate-y-1">

                    📘 Modul Pertemuan 1
                </a>

                <a href="#"
                   class="flex items-center justify-center gap-2 bg-transparent border border-zinc-700 text-white font-medium text-sm px-6 py-3 rounded-lg hover:bg-zinc-800 transition-all duration-300">

                    🌐 Lihat Project
                </a>

            </div>

        </div>
    </div>

</body>
</html>