<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Customer;
use App\Models\JadwalInstalasi;
use App\Models\LaporanInstalasi;
use App\Models\Layanan;
use App\Models\Pimpinan;
use App\Models\RegistrasiInstalasi;
use App\Models\Role;
use App\Models\Status;
use App\Models\Teknisi;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $customerRole = Role::firstOrCreate(['name' => 'customer']);
        $teknisiRole = Role::firstOrCreate(['name' => 'teknisi']);
        $pimpinanRole = Role::firstOrCreate(['name' => 'pimpinan']);

        // Users dan Relasinya
        $adminUser = User::firstOrCreate([
            'email' => 'admin@example.com'
        ], [
            'username' => 'adminuser',
            'no_telp' => '0800000001',
            'alamat' => 'Kantor Pusat',
            'password' => Hash::make('password'),
            'role_id' => $adminRole->id,
        ]);
        Admin::firstOrCreate([
            'user_id' => $adminUser->id
        ]);

        $pimpinanUser = User::firstOrCreate([
            'email' => 'pimpinan@example.com'
        ], [
            'username' => 'pimpinanuser',
            'no_telp' => '0800000002',
            'alamat' => 'Gedung Pimpinan',
            'password' => Hash::make('password'),
            'role_id' => $pimpinanRole->id,
        ]);
        Pimpinan::firstOrCreate([
            'user_id' => $pimpinanUser->id
        ]);

        $teknisiUser = User::firstOrCreate([
            'email' => 'teknisi@example.com'
        ], [
            'username' => 'teknisiuser',
            'no_telp' => '0800000003',
            'alamat' => 'Workshop Teknisi',
            'password' => Hash::make('password'),
            'role_id' => $teknisiRole->id,
        ]);
        $teknisi = Teknisi::firstOrCreate([
            'user_id' => $teknisiUser->id
        ]);

        $customerUser = User::firstOrCreate([
            'email' => 'customer@example.com'
        ], [
            'username' => 'customeruser',
            'no_telp' => '0800000004',
            'alamat' => 'Jl. Pelanggan Setia No. 9',
            'password' => Hash::make('password'),
            'role_id' => $customerRole->id,
        ]);
        $customer = Customer::firstOrCreate([
            'user_id' => $customerUser->id
        ], [
            'nama_customer' => 'John Doe'
        ]);

        // Status Instalasi
        $statusList = [
            'Menunggu Verifikasi Admin',
            'Disetujui Admin',
            'Ditolak Admin',
            'Menunggu Penjadwalan',
            'Terjadwal',
            'Selesai Instalasi',
            'Dibatalkan',
        ];

        foreach ($statusList as $namaStatus) {
            Status::firstOrCreate(['nama_status' => $namaStatus]);
        }

        $status = Status::where('nama_status', 'Menunggu Verifikasi Admin')->first();

        // Layanan
        $layanan = Layanan::firstOrCreate([
            'nama_layanan' => 'Internet 100 Mbps'
        ], [
            'harga' => 300000
        ]);

        // Registrasi Instalasi
        $registrasi = RegistrasiInstalasi::firstOrCreate([
            'customer_id' => $customer->id,
            'layanan_id' => $layanan->id,
            'alamat_pemasangan' => 'Jl. Contoh No. 123'
        ], [
            'status_id' => $status->id,
            'no_hp' => '08123456789'
        ]);

        // Jadwal Instalasi
        $jadwal = JadwalInstalasi::firstOrCreate([
            'registrasi_instalasi_id' => $registrasi->id,
            'teknisi_id' => $teknisi->id
        ], [
            'waktu_kunjungan' => now()->addDays(3)
        ]);

        // Laporan Instalasi
        LaporanInstalasi::firstOrCreate([
            'jadwal_id' => $jadwal->id
        ], [
            'catatan' => 'Instalasi selesai dengan baik.',
            'foto_bukti' => 'foto.jpg'
        ]);
    }
}
