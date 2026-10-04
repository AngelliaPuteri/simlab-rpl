<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Barang - Lab RPL</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-7xl mx-auto px-4 py-8">

        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">
                    Data Barang
                </h1>

                <p class="text-gray-500 mt-1">
                    Sistem Manajemen Inventaris Lab RPL
                </p>
            </div>

            <a href="{{ route('barang.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg text-center">
                + Tambah Barang
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-lg mb-5">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-xl shadow overflow-hidden">

            <div class="overflow-x-auto">

                <table class="w-full text-sm text-left">

                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Kode</th>
                            <th class="px-4 py-3">Nama Barang</th>
                            <th class="px-4 py-3">Kategori</th>
                            <th class="px-4 py-3">Stok</th>
                            <th class="px-4 py-3">Kondisi</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($barangs as $barang)

                            <tr class="border-b hover:bg-gray-50">

                                <td class="px-4 py-3">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="px-4 py-3 font-medium">
                                    {{ $barang->kode_barang }}
                                </td>

                                <td class="px-4 py-3">
                                    {{ $barang->nama_barang }}
                                </td>

                                <td class="px-4 py-3">
                                    {{ $barang->kategori->nama_kategori }}
                                </td>

                                <td class="px-4 py-3">
                                    {{ $barang->stok }}
                                </td>

                                <td class="px-4 py-3">
                                    {{ $barang->kondisi }}
                                </td>

                                <td class="px-4 py-3">
                                    @if($barang->status === 'Tersedia')
                                        <span class="bg-green-100 text-green-700 px-2.5 py-1 rounded-full text-xs font-medium">
                                            Tersedia
                                        </span>
                                    @elseif($barang->status === 'Dipinjam')
                                        <span class="bg-yellow-100 text-yellow-700 px-2.5 py-1 rounded-full text-xs font-medium">
                                            Dipinjam
                                        </span>
                                    @else
                                        <span class="bg-red-100 text-red-700 px-2.5 py-1 rounded-full text-xs font-medium">
                                            Maintenance
                                        </span>
                                    @endif
                                </td>

                                <td class="px-4 py-3">
                                    <div class="flex gap-2">

                                        <a href="{{ route('barang.edit', $barang) }}"
                                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1.5 rounded-md">
                                            Edit
                                        </a>

                                        <form action="{{ route('barang.destroy', $barang) }}"
                                              method="POST"
                                              onsubmit="return confirm('Yakin ingin menghapus barang ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded-md">
                                                Hapus
                                            </button>

                                        </form>

                                    </div>
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="8" class="text-center py-8 text-gray-500">
                                    Belum ada data barang.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</body>
</html>