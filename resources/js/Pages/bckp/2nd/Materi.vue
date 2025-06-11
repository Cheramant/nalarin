<template>
  <MainLayout>
    <Head title="Materi" />

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-[#0F1C2E] to-[#1E293B] py-20 px-4 text-white text-center">
      <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold text-blue-400 mb-4">📚 Materi Pembelajaran Computational Thinking</h1>
        <p class="text-lg text-slate-300">
          Belajar Computational Thinking (CT) akan lebih mudah jika dilakukan secara bertahap. Yuk mulai dari Dekomposisi hingga Desain Algoritma!
        </p>
      </div>
    </section>

    <!-- Topik List -->
    <section class="py-20 bg-[#111827] px-4">
      <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-white">
        <div class="bg-[#1F2937] p-6 rounded-xl shadow">
          <div class="text-4xl mb-4">🔧</div>
          <h3 class="text-xl font-bold mb-2">Dekomposisi</h3>
          <p class="text-slate-300 text-sm">Memecah masalah besar menjadi bagian kecil agar lebih mudah dianalisis dan diselesaikan.</p>
        </div>
        <div class="bg-[#1F2937] p-6 rounded-xl shadow">
          <div class="text-4xl mb-4">🔁</div>
          <h3 class="text-xl font-bold mb-2">Pengenalan Pola</h3>
          <p class="text-slate-300 text-sm">Menemukan pola, kesamaan, atau pengulangan dari berbagai data atau masalah yang dihadapi.</p>
        </div>
        <div class="bg-[#1F2937] p-6 rounded-xl shadow">
          <div class="text-4xl mb-4">🎯</div>
          <h3 class="text-xl font-bold mb-2">Abstraksi</h3>
          <p class="text-slate-300 text-sm">Fokus pada hal-hal penting dan mengabaikan informasi yang tidak relevan untuk menyederhanakan masalah.</p>
        </div>
        <div class="bg-[#1F2937] p-6 rounded-xl shadow">
          <div class="text-4xl mb-4">⚙️</div>
          <h3 class="text-xl font-bold mb-2">Desain Algoritma</h3>
          <p class="text-slate-300 text-sm">Menyusun langkah-langkah logis dan sistematis untuk menyelesaikan masalah dengan efisien.</p>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="bg-gradient-to-r from-blue-900 to-blue-700 py-16 text-white text-center px-4">
      <div class="max-w-xl mx-auto">
        <h2 class="text-2xl font-bold mb-4">Siap untuk mulai belajar?</h2>
        <p class="text-slate-200 mb-6">Klik tombol di bawah ini untuk memulai pembelajaran dari topik pertama: <strong>Dekomposisi</strong></p>
        <Link href="/materi/dekomposisi/teori" class="inline-block bg-white text-blue-700 font-semibold px-6 py-3 rounded-lg hover:bg-slate-100 transition">
          Mulai Belajar Sekarang
        </Link>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
</script>

<style scoped></style>
