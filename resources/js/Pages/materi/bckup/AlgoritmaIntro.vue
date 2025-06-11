
<template>
  <MainLayout>
    <Head title="Desain Algoritma - Intro" />

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-fuchsia-900 to-rose-800 text-white py-20 px-4 transition-all duration-700">
      <div class="max-w-4xl mx-auto text-center space-y-6 animate-fade-in">
        <h1 class="text-4xl font-bold text-pink-200">🤖 Pengantar Desain Algoritma</h1>
        <p class="text-slate-200 text-lg">
          Dalam Computational Thinking, desain algoritma adalah kemampuan menyusun langkah-langkah logis untuk menyelesaikan masalah secara sistematis.
        </p>
      </div>
    </section>

    <!-- Slide 2 -->
    <section class="bg-[#162e29] py-16 px-4 text-white transition-all duration-700">
      <div class="max-w-5xl mx-auto space-y-8">
        <div class="animate-slide-up">
          <h2 class="text-2xl font-semibold text-pink-300">📌 Mengapa Desain Algoritma Penting?</h2>
          <p class="text-slate-300">
            Dengan merancang algoritma, kita dapat menyelesaikan masalah secara runtut, efisien, dan bisa diulang oleh manusia atau mesin.
            Pengenalan pola membantu kita memahami struktur dari informasi dan mempercepat proses berpikir logis.
          </p>
        </div>
      </div>
    </section>

    <!-- Slide 3 -->
    <section class="bg-[#12322c] py-16 px-4 text-white transition-all duration-700">
      <div class="max-w-5xl mx-auto space-y-8">
        <div class="animate-slide-up">
          <h2 class="text-2xl font-semibold text-pink-300">🔍 Contoh Penerapan Desain Algoritma</h2>
          <p class="text-slate-300">
            Dalam kehidupan sehari-hari, kita menggunakan pengenalan pola saat:
          </p>
          <ul class="list-disc list-inside text-slate-200 space-y-1">
            <li>Membuat resep masakan</li>
            <li>Membuat langkah-langkah login sistem</li>
            <li>Mendesain rute pengiriman barang</li>
            <li>Menyusun prosedur evakuasi bencana</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Navigation Button -->
    <section class="bg-[#0d2c27] py-12 px-4 text-center text-white">
      <div class="max-w-3xl mx-auto space-y-6">
        <p class="text-lg">Sudah siap memahami pola lebih dalam?</p>
        <button
          @click="goToNext"
          class="px-6 py-3 bg-pink-600 hover:bg-pink-700 text-white font-semibold rounded-xl transition"
        >
          Lanjutkan ke Materi Somatic ➡️
        </button>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { router } from '@inertiajs/vue3'

function goToNext() {
  router.visit('/materi/algoritma/somatic')
}
</script>
