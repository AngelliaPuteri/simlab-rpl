<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $komputer = Kategori::create([
            'nama_kategori' => 'Komputer & Laptop',
            'deskripsi' => 'Peralatan komputer dan laptop untuk kebutuhan praktikum.',
        ]);

        $jaringan = Kategori::create([
            'nama_kategori' => 'Perangkat Jaringan',
            'deskripsi' => 'Peralatan yang digunakan untuk praktik jaringan komputer.',
        ]);

        $perkabelan = Kategori::create([
            'nama_kategori' => 'Alat Perkabelan',
            'deskripsi' => 'Alat dan perlengkapan untuk kebutuhan perkabelan.',
        ]);

        $multimedia = Kategori::create([
            'nama_kategori' => 'Multimedia',
            'deskripsi' => 'Peralatan multimedia untuk kegiatan pembelajaran.',
        ]);

        Barang::create([
            'kategori_id' => $komputer->id,
            'kode_barang' => 'KOM-001',
            'nama_barang' => 'Laptop Lenovo',
            'spesifikasi' => 'Intel Core i5, RAM 8GB, SSD 512GB',
            'stok' => 10,
            'kondisi' => 'Baik',
            'status' => 'Tersedia',
        ]);

        Barang::create([
            'kategori_id' => $jaringan->id,
            'kode_barang' => 'JAR-001',
            'nama_barang' => 'Router TP-Link',
            'spesifikasi' => 'Wireless Router',
            'stok' => 5,
            'kondisi' => 'Baik',
            'status' => 'Tersedia',
        ]);

        Barang::create([
            'kategori_id' => $perkabelan->id,
            'kode_barang' => 'KAB-001',
            'nama_barang' => 'Kabel LAN',
            'spesifikasi' => 'UTP Cat 6',
            'stok' => 25,
            'kondisi' => 'Baik',
            'status' => 'Tersedia',
        ]);

        Barang::create([
            'kategori_id' => $multimedia->id,
            'kode_barang' => 'MUL-001',
            'nama_barang' => 'Proyektor',
            'spesifikasi' => 'LCD Projector',
            'stok' => 3,
            'kondisi' => 'Baik',
            'status' => 'Tersedia',
        ]);
    }
}