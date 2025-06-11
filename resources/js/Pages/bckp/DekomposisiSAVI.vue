<template>
  <MainLayout>
    <Head title="Dekomposisi - Aktivitas SAVI" />

    <section class="py-20 px-6 md:px-20 bg-[#0F1C2E] text-white min-h-screen">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold mb-10 text-center text-yellow-400">
          Aktivitas Terpadu Dekomposisi dengan Pendekatan SAVI
        </h2>

        <!-- Somatic -->
        <div class="mb-16">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🖐️ Somatic: Bergerak dan Pecah Masalah</h3>
          <p class="text-slate-300 mb-4">
            Ayo bantu timmu menyusun rencana studi tour sekolah. Geser elemen penting ke dalam daftar eksekusi!
          </p>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 bg-[#1E2B3A] p-6 rounded-xl shadow-lg">
            <div class="space-y-2">
              <p class="text-slate-200 font-medium">Daftar Ide Mentah:</p>
              <ul class="space-y-2 text-sm text-slate-100">
                <li class="bg-slate-700 px-3 py-2 rounded-lg">Sewa Bus</li>
                <li class="bg-slate-700 px-3 py-2 rounded-lg">Desain Poster</li>
                <li class="bg-slate-700 px-3 py-2 rounded-lg">Koordinasi Orang Tua</li>
                <li class="bg-slate-700 px-3 py-2 rounded-lg">Beli Snack</li>
                <li class="bg-slate-700 px-3 py-2 rounded-lg">Booking Tempat Wisata</li>
              </ul>
            </div>
            <div class="space-y-2">
              <p class="text-slate-200 font-medium">Tugas Siap Eksekusi:</p>
              <div class="bg-slate-800 p-4 rounded-lg text-sm text-slate-300 italic">
                Seret item dari kiri ke sini (simulasi)
              </div>
            </div>
          </div>
        </div>

        <!-- Auditory -->
        <div class="mb-16">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🎧 Auditory: Dengarkan dan Cerna</h3>
          <blockquote class="bg-[#1E2B3A] p-6 rounded-xl italic text-slate-300 shadow-lg">
            "Ketika kamu memecah masalah besar menjadi bagian-bagian kecil, kamu sedang membangun strategi.
            Seperti menyusun lego: potongan-potongan kecil bisa menjadi struktur luar biasa bila disusun dengan benar."
          </blockquote>
        </div>

        <!-- Visual -->
        <div class="mb-16">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🖼️ Visual: Lihat Prosesnya</h3>
          <p class="text-slate-300 mb-4">
            Perhatikan diagram pembagian modul sistem perpustakaan berikut. Diskusikan bagian mana yang paling kompleks.
          </p>
          <div class="bg-[#1E2B3A] p-6 rounded-xl shadow text-center">
            <img src="/images/dekomposisi-perpus.png" alt="Diagram sistem perpustakaan" class="mx-auto rounded-lg shadow-lg mb-2" />
            <p class="text-sm text-slate-400">Diagram modularisasi sistem</p>
          </div>
        </div>

        <!-- Intellectual -->
        <div class="mb-16">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🧠 Intellectual: Refleksi dan Analisis</h3>
          <p class="text-slate-300 mb-4">
            Jawab pertanyaan berikut untuk menguatkan pemahaman konsep dekomposisi:
          </p>
          <div class="bg-[#1E2B3A] p-6 rounded-xl shadow space-y-3">
            <ul class="list-decimal list-inside text-slate-300 space-y-2">
              <li>Jika sebuah proyek gagal karena terlalu rumit, bagian mana yang seharusnya dipecah?</li>
              <li>Apa bedanya dekomposisi dengan membagi tugas secara acak?</li>
              <li>Ceritakan pengalamanmu menggunakan dekomposisi dalam menyelesaikan masalah sekolah atau rumah.</li>
            </ul>
          </div>
        </div>

        <!-- Kesimpulan -->
        <div class="mt-20 text-center border-t border-slate-600 pt-8">
          <h3 class="text-2xl font-bold text-yellow-400 mb-4">Kesimpulan</h3>
          <p class="text-slate-300 mb-6 max-w-3xl mx-auto leading-relaxed">
            Dekomposisi bukan hanya strategi belajar, tapi juga keterampilan berpikir tingkat tinggi.
            Dengan menguasainya, kamu akan lebih percaya diri menyelesaikan masalah besar dalam kehidupan maupun teknologi.
          </p>
          <Link
            href="/materi/pola"
            class="inline-block px-6 py-3 bg-gradient-to-r from-yellow-400 to-yellow-500 text-slate-900 font-semibold rounded-xl shadow hover:scale-105 transition"
          >
            Lanjut ke Topik Pengenalan Pola
          </Link>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
</script>

<style scoped></style>
