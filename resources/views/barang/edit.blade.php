<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Barang - Lab RPL</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-3xl mx-auto px-4 py-8">

        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800">
                Edit Barang
            </h1>

            <p class="text-gray-500 mt-1">
                Ubah data barang
            </p>
        </div>

        <div class="bg-white rounded-xl shadow p-6">

            <form action="{{ route('barang.update', $barang) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block font-medium text-gray-700 mb-2">
                        Kode Barang
                    </label>

                    <input type="text"
                           name="kode_barang"
                           value="{{ old('kode_barang', $barang->kode_barang) }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2.5">

                    @error('kode_barang')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-gray-700 mb-2">
                        Nama Barang
                    </label>

                    <input type="text"
                           name="nama_barang"
                           value="{{ old('nama_barang', $barang->nama_barang) }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2.5">

                    @error('nama_barang')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-gray-700 mb-2">
                        Kategori
                    </label>

                    <select name="kategori_id"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5">

                        @foreach($kategoris as $kategori)
                            <option value="{{ $kategori->id }}"
                                {{ old('kategori_id', $barang->kategori_id) == $kategori->id ? 'selected' : '' }}>
                                {{ $kategori->nama_kategori }}
                            </option>
                        @endforeach

                    </select>

                    @error('kategori_id')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-gray-700 mb-2">
                        Spesifikasi
                    </label>

                    <textarea name="spesifikasi"
                              rows="4"
                              class="w-full border border-gray-300 rounded-lg px-4 py-2.5">{{ old('spesifikasi', $barang->spesifikasi) }}</textarea>

                    @error('spesifikasi')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-gray-700 mb-2">
                        Stok
                    </label>

                    <input type="number"
                           name="stok"
                           min="0"
                           value="{{ old('stok', $barang->stok) }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2.5">

                    @error('stok')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-gray-700 mb-2">
                        Kondisi
                    </label>

                    <select name="kondisi"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5">

                        <option value="Baik" {{ old('kondisi', $barang->kondisi) == 'Baik' ? 'selected' : '' }}>
                            Baik
                        </option>

                        <option value="Rusak Ringan" {{ old('kondisi', $barang->kondisi) == 'Rusak Ringan' ? 'selected' : '' }}>
                            Rusak Ringan
                        </option>

                        <option value="Rusak Berat" {{ old('kondisi', $barang->kondisi) == 'Rusak Berat' ? 'selected' : '' }}>
                            Rusak Berat
                        </option>

                    </select>

                    @error('kondisi')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block font-medium text-gray-700 mb-2">
                        Status
                    </label>

                    <select name="status"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5">

                        <option value="Tersedia" {{ old('status', $barang->status) == 'Tersedia' ? 'selected' : '' }}>
                            Tersedia
                        </option>

                        <option value="Dipinjam" {{ old('status', $barang->status) == 'Dipinjam' ? 'selected' : '' }}>
                            Dipinjam
                        </option>

                        <option value="Maintenance" {{ old('status', $barang->status) == 'Maintenance' ? 'selected' : '' }}>
                            Maintenance
                        </option>

                    </select>
                    @error('status')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex gap-3">

                    <a href="{{ route('barang.index') }}"
                       class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2.5 rounded-lg">
                        Kembali
                    </a>

                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg">
                        Update Barang
                    </button>

                </div>

            </form>

        </div>

    </div>

</body>
</html>