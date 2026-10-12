<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Lab RPL</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-7xl mx-auto px-4 py-8">

        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">
                    Dashboard
                </h1>

                <p class="text-gray-500 mt-1">
                    Sistem Manajemen Inventaris Lab RPL
                </p>
            </div>

            <a href="{{ route('barang.index') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg text-center">
                Lihat Data Barang
            </a>
        </div>

        <!-- Dashboard Kartu Metrik -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

            <div class="bg-white rounded-xl shadow p-5">
                <p class="text-sm text-gray-500">
                    Total Aset
                </p>

                <p class="text-3xl font-bold text-gray-800 mt-2">
                    {{ $total }}
                </p>
            </div>

            <div class="bg-white rounded-xl shadow p-5">
                <p class="text-sm text-gray-500">
                    Unit Tersedia
                </p>

                <p class="text-3xl font-bold text-emerald-600 mt-2">
                    {{ $tersedia }}
                </p>
            </div>

            <div class="bg-white rounded-xl shadow p-5">
                <p class="text-sm text-gray-500">
                    Unit Dipinjam / Maintenance
                </p>

                <p class="text-3xl font-bold text-rose-600 mt-2">
                    {{ $dipinjamMaintenance }}
                </p>
            </div>

        </div>

    </div>

</body>
</html>