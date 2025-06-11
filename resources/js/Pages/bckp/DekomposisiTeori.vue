<template>
  <MainLayout>
    <Head title="Dekomposisi - Teori" />

    <section class="py-20 px-6 md:px-20 bg-[#0F1C2E] text-white min-h-screen">
      <div class="max-w-5xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold mb-8 text-yellow-400 text-center">
          Memahami Dekomposisi dalam Computational Thinking
        </h2>
        <p class="text-lg text-slate-300 mb-6 leading-relaxed text-justify">
          <strong>Dekomposisi</strong> adalah proses memecah permasalahan besar menjadi bagian-bagian kecil
          yang lebih mudah dikelola dan diselesaikan. Dalam dunia teknologi, pemikiran dekomposisi membantu
          kita mengidentifikasi struktur, menyusun strategi, dan membuat solusi menjadi lebih efektif.
        </p>
        <p class="text-lg text-slate-300 mb-6 leading-relaxed text-justify">
          Proses ini penting karena membantu kita untuk:
        </p>
        <ul class="list-disc list-inside text-slate-200 space-y-2 mb-6">
          <li>Mengurangi kompleksitas masalah</li>
          <li>Fokus pada bagian-bagian spesifik dari masalah</li>
          <li>Memudahkan perencanaan dan implementasi solusi</li>
          <li>Meningkatkan kerja kolaboratif dalam tim</li>
        </ul>

        <div class="space-y-6 text-slate-300">
          <h3 class="text-2xl font-semibold text-yellow-300">🔍 Contoh Kehidupan Nyata</h3>
          <p>
            Saat menyusun acara sekolah, kita secara alami menggunakan dekomposisi: memilih lokasi,
            menyusun jadwal, membentuk panitia, menentukan konsumsi, dan mengatur logistik. Ini adalah
            cara berpikir dekomposisi yang efektif.
          </p>

          <h3 class="text-2xl font-semibold text-yellow-300">💻 Contoh di Dunia Komputer</h3>
          <p>
            Dalam pengembangan perangkat lunak, aplikasi besar seperti toko online akan dipecah menjadi
            modul kecil: modul login, katalog produk, sistem pembayaran, dan manajemen pesanan. Ini membuat
            aplikasi lebih mudah dikembangkan dan dikelola.
          </p>
        </div>

        <div class="mt-12 border-t border-slate-600 pt-8">
          <h3 class="text-2xl font-semibold text-yellow-400 mb-4 text-center">Tujuan Pembelajaran</h3>
          <ul class="list-disc list-inside space-y-3 text-slate-200 max-w-2xl mx-auto">
            <li>Siswa memahami konsep dekomposisi dalam Computational Thinking.</li>
            <li>Siswa mampu memecah permasalahan menjadi bagian-bagian yang lebih kecil.</li>
            <li>Siswa dapat mengidentifikasi dan menyusun langkah-langkah solusi secara sistematis.</li>
          </ul>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
</script>

<style scoped></style>
