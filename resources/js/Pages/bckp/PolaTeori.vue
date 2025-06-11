<template>
  <MainLayout>
    <Head title="Pengenalan Pola - Teori" />

    <section class="py-20 px-6 md:px-20 bg-[#0F1C2E] text-white min-h-screen">
      <div class="max-w-5xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold mb-8 text-yellow-400 text-center">
          Mengenali Pola dalam Computational Thinking
        </h2>
        <p class="text-lg text-slate-300 mb-6 leading-relaxed text-justify">
          <strong>Pengenalan pola</strong> atau <em>pattern recognition</em> adalah kemampuan untuk mengidentifikasi
          kesamaan, perbedaan, dan keteraturan dalam informasi atau masalah yang kompleks. Dalam Computational Thinking,
          mengenali pola sangat penting untuk menyederhanakan masalah dan menemukan solusi efisien.
        </p>

        <p class="text-lg text-slate-300 mb-6 leading-relaxed text-justify">
          Dengan mengenali pola, kita bisa:
        </p>
        <ul class="list-disc list-inside text-slate-200 space-y-2 mb-6">
          <li>Memprediksi hasil berdasarkan data sebelumnya</li>
          <li>Menghemat waktu dalam menyusun solusi</li>
          <li>Menyesuaikan solusi yang sudah ada untuk masalah baru</li>
        </ul>

        <div class="space-y-6 text-slate-300">
          <h3 class="text-2xl font-semibold text-yellow-300">🔍 Contoh Kehidupan Nyata</h3>
          <p>
            Saat belajar matematika, kita mengenali pola bilangan ganjil, genap, atau deret tertentu.
            Dalam kehidupan sehari-hari, kita juga mengantisipasi cuaca atau kebiasaan seseorang berdasarkan pola masa lalu.
          </p>

          <h3 class="text-2xl font-semibold text-yellow-300">💻 Contoh di Dunia Komputer</h3>
          <p>
            Dalam keamanan siber, sistem mengenali pola serangan seperti login gagal berulang. Dalam data science,
            algoritma mengenali pola belanja pelanggan untuk rekomendasi produk.
          </p>
        </div>

        <div class="mt-12 border-t border-slate-600 pt-8">
          <h3 class="text-2xl font-semibold text-yellow-400 mb-4 text-center">Tujuan Pembelajaran</h3>
          <ul class="list-disc list-inside space-y-3 text-slate-200 max-w-2xl mx-auto">
            <li>Siswa memahami konsep pengenalan pola dalam Computational Thinking.</li>
            <li>Siswa mampu mengidentifikasi keteraturan dalam data atau masalah.</li>
            <li>Siswa dapat menggunakan pola untuk menyusun solusi yang efisien dan tepat.</li>
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
