
<template>
  <MainLayout>
    <Head title="Pengenalan Pola - Intro" />

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-emerald-900 to-teal-700 text-white py-20 px-4 transition-all duration-700">
      <div class="max-w-4xl mx-auto text-center space-y-6 animate-fade-in">
        <h1 class="text-4xl font-bold text-emerald-200">🔎 Pengantar Pengenalan Pola</h1>
        <p class="text-slate-200 text-lg">
          Dalam Computational Thinking, pengenalan pola adalah kemampuan untuk menemukan kesamaan dan struktur berulang dalam data atau masalah.
        </p>
      </div>
    </section>

    <!-- Slide 2 -->
    <section class="bg-[#162e29] py-16 px-4 text-white transition-all duration-700">
      <div class="max-w-5xl mx-auto space-y-8">
        <div class="animate-slide-up">
          <h2 class="text-2xl font-semibold text-emerald-300">🧠 Mengapa Pengenalan Pola Penting?</h2>
          <p class="text-slate-300">
            Ketika kita mampu mengenali pola, kita bisa membuat prediksi, menyederhanakan solusi, dan merancang strategi pemecahan masalah yang lebih efisien.
            Pengenalan pola membantu kita memahami struktur dari informasi dan mempercepat proses berpikir logis.
          </p>
        </div>
      </div>
    </section>

    <!-- Slide 3 -->
    <section class="bg-[#12322c] py-16 px-4 text-white transition-all duration-700">
      <div class="max-w-5xl mx-auto space-y-8">
        <div class="animate-slide-up">
          <h2 class="text-2xl font-semibold text-emerald-300">📌 Contoh Penerapan</h2>
          <p class="text-slate-300">
            Dalam kehidupan sehari-hari, kita menggunakan pengenalan pola saat:
          </p>
          <ul class="list-disc list-inside text-slate-200 space-y-1">
            <li>Mengenali jadwal kegiatan yang berulang setiap minggu</li>
            <li>Menemukan kesamaan dari soal matematika</li>
            <li>Mengidentifikasi gejala penyakit berdasarkan pola</li>
            <li>Mengklasifikasi data yang serupa dalam sebuah tabel</li>
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
          class="px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl transition"
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
  router.visit('/materi/pola/somatic')
}
</script>
