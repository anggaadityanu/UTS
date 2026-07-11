<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        if (Project::count() === 0) {
            Project::create([
                'title' => 'Kostify - Sistem Pemesanan dan Pengelolaan Kos & Kontrakan',
                'slug' => 'kostify',
                'short_description' => 'Platform berbasis web untuk pencarian, pemesanan, pembayaran, dan pengelolaan kos & kontrakan secara terpusat, dilengkapi payment gateway Midtrans.',
                'is_final_project' => true,
                'status' => 'on_progress',
                'github_url' => null,
                'demo_url' => 'https://kostify.my.id',

                'problem_analysis' => '<p>Kebutuhan hunian sementara bagi mahasiswa dan masyarakat umum, khususnya kos dan kontrakan, terus meningkat, namun proses pencarian dan pemesanannya masih mengandalkan komunikasi informal melalui aplikasi pesan singkat atau kunjungan langsung ke lokasi.</p>
<p>Kondisi ini menimbulkan beberapa masalah operasional:</p>
<ul>
<li>Data ketersediaan kamar tidak dapat diakses secara real-time.</li>
<li>Risiko pemesanan ganda (double booking) sering terjadi.</li>
<li>Tidak ada dokumentasi terstruktur atas riwayat pembayaran maupun keluhan penyewa.</li>
</ul>
<p><strong>Kostify</strong> hadir sebagai solusi berbasis web yang mendigitalisasi seluruh proses pengelolaan kos dan kontrakan — mulai dari pencarian kamar, pemesanan, pembayaran, hingga penanganan keluhan — dalam satu platform terpusat.</p>
<p>Sistem ini melayani tiga peran pengguna:</p>
<ul>
<li><strong>Penyewa (Tenant)</strong> — mencari, memesan, dan membayar sewa kamar secara daring.</li>
<li><strong>Admin / Super Admin</strong> — mengelola properti, memverifikasi pemesanan, dan menangani keluhan.</li>
<li><strong>Pemilik Usaha (Owner)</strong> — memantau kinerja properti miliknya secara mandiri.</li>
</ul>',

                'system_requirements' => '<p>Kebutuhan sistem disusun dalam bentuk user story dan dikembangkan secara iteratif dalam 5 tahap:</p>
<ol>
<li><strong>Fondasi Sistem</strong> — autentikasi pengguna, pengelolaan properti & kamar, tampilan daftar kamar.</li>
<li><strong>Pemesanan Kamar</strong> — booking kamar, kalkulasi estimasi biaya, status kamar otomatis.</li>
<li><strong>Verifikasi & Pembayaran</strong> — verifikasi admin, tagihan otomatis, pembayaran via Midtrans, pembatalan otomatis jika telat bayar.</li>
<li><strong>Dokumen Identitas & Komplain</strong> — upload KTP/KK, pengajuan komplain, chat dua arah.</li>
<li><strong>Pengelolaan Website & Monitoring</strong> — pengaturan konten situs, dashboard owner, notifikasi email, ekspor data.</li>
</ol>
<p>Fitur inti (MVP) yang wajib tersedia:</p>
<ul>
<li>Registrasi & autentikasi pengguna (termasuk reset password)</li>
<li>Pengelolaan properti dan kamar oleh admin</li>
<li>Pencarian dan detail kamar</li>
<li>Pemesanan kamar dengan kode booking otomatis (format <code>BK-YYYY-XXX</code>)</li>
<li>Status kamar otomatis: Tersedia, Dibooking, Terisi, Maintenance</li>
<li>Verifikasi booking dan penerbitan tagihan otomatis</li>
<li>Pembayaran daring via Midtrans dengan pembatalan otomatis jika telat 2 hari</li>
<li>Dashboard administrasi</li>
</ul>',

                'tech_stack_explanation' => '<p>Kostify dibangun dengan stack berikut:</p>
<ul>
<li><strong>Backend:</strong> Laravel 12</li>
<li><strong>Frontend:</strong> Blade Template, Bootstrap, HTML/CSS/JavaScript</li>
<li><strong>Komponen Interaktif:</strong> Livewire (untuk fitur chat komplain real-time)</li>
<li><strong>Database:</strong> MariaDB</li>
<li><strong>Admin Panel:</strong> Filament</li>
<li><strong>Payment Gateway:</strong> Midtrans</li>
<li><strong>Autentikasi Pihak Ketiga:</strong> Google OAuth</li>
<li><strong>Peta Lokasi:</strong> Google Maps API</li>
<li><strong>Containerization:</strong> Docker</li>
<li><strong>Web Server:</strong> Nginx</li>
</ul>
<p>Laravel dipilih karena mendukung pengembangan aplikasi web yang cepat dan terstruktur. Filament mempercepat pembangunan dashboard admin yang fungsional, sementara Livewire memungkinkan fitur interaktif seperti chat komplain tanpa framework JavaScript terpisah. Midtrans dipilih karena mendukung berbagai metode pembayaran populer di Indonesia, dan Docker menjaga konsistensi lingkungan pengembangan antar mesin.</p>',
            ]);
        }
    }
}
