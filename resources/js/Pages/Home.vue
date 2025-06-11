<template>
  <MainLayout>
    <Head title="Home" />

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-[#0F1C2E] to-[#1E293B] py-24 text-white text-center px-4">
      <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold text-blue-400 mb-4">
          Belajar Computational Thinking Jadi Menyenangkan bersama Nalarin!
        </h1>
        <p class="text-lg text-slate-300 mb-6">
          Platform interaktif untuk siswa SMK yang ingin memahami konsep CT menggunakan pendekatan belajar SAVI (Somatic, Auditory, Visual, Intellectual).
        </p>
        <Link href="/materi" class="inline-block bg-blue-500 hover:bg-blue-400 text-white font-semibold px-6 py-3 rounded-lg transition">
          Mulai Belajar
        </Link>
      </div>
    </section>

    <!-- Penjelasan SAVI -->
    <section class="py-20 bg-[#111827] px-4">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold text-center text-blue-300 mb-12">Apa itu SAVI?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-[#1F2937] p-6 rounded-xl shadow hover:scale-105 transition">
            <div class="text-4xl mb-4">🖐️</div>
            <h3 class="text-xl font-bold mb-2">Somatic</h3>
            <p class="text-slate-300 text-sm">Belajar melalui aktivitas fisik, simulasi, dan praktik langsung.</p>
          </div>
          <div class="bg-[#1F2937] p-6 rounded-xl shadow hover:scale-105 transition">
            <div class="text-4xl mb-4">🎧</div>
            <h3 class="text-xl font-bold mb-2">Auditory</h3>
            <p class="text-slate-300 text-sm">Belajar lewat diskusi, mendengarkan, dan narasi audio.</p>
          </div>
          <div class="bg-[#1F2937] p-6 rounded-xl shadow hover:scale-105 transition">
            <div class="text-4xl mb-4">🖼️</div>
            <h3 class="text-xl font-bold mb-2">Visual</h3>
            <p class="text-slate-300 text-sm">Belajar lewat gambar, warna, video, dan diagram.</p>
          </div>
          <div class="bg-[#1F2937] p-6 rounded-xl shadow hover:scale-105 transition">
            <div class="text-4xl mb-4">🧠</div>
            <h3 class="text-xl font-bold mb-2">Intellectual</h3>
            <p class="text-slate-300 text-sm">Berpikir kritis, reflektif, dan menyusun strategi pemecahan masalah.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Fitur Nalarin -->
    <section class="py-20 bg-[#0F172A] px-4">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold text-center text-blue-300 mb-12">Apa yang Bisa Kamu Lakukan di Nalarin?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div class="bg-[#1E293B] p-6 rounded-xl shadow-md">
            <h3 class="text-xl text-blue-400 font-semibold mb-2">🧾 Akses Materi Lengkap</h3>
            <p class="text-slate-300 text-sm">Materi Computational Thinking dibagi ke dalam topik dengan pendekatan SAVI.</p>
          </div>
          <div class="bg-[#1E293B] p-6 rounded-xl shadow-md">
            <h3 class="text-xl text-blue-400 font-semibold mb-2">🎮 Aktivitas Interaktif</h3>
            <p class="text-slate-300 text-sm">Setiap topik dilengkapi aktivitas yang melibatkan elemen somatik, audio, visual, dan intelektual.</p>
          </div>
          <div class="bg-[#1E293B] p-6 rounded-xl shadow-md">
            <h3 class="text-xl text-blue-400 font-semibold mb-2">📝 Kuis Evaluasi</h3>
            <p class="text-slate-300 text-sm">Uji kemampuanmu melalui 20 soal pilihan ganda dengan waktu 10 menit.</p>
          </div>
          <div class="bg-[#1E293B] p-6 rounded-xl shadow-md">
            <h3 class="text-xl text-blue-400 font-semibold mb-2">📊 Feedback</h3>
            <p class="text-slate-300 text-sm">Dengan feedback yang spesifik, sehingga memperkuat minat belajar siswa</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Penutup -->
    <section class="py-20 bg-gradient-to-r from-blue-900 to-blue-700 text-white text-center px-4">
      <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold mb-4">Mulai Perjalanan Computational Thinking-mu Hari Ini!</h2>
        <p class="text-slate-200 mb-6">Nalarin siap menemanimu dengan materi menarik, aktivitas interaktif, dan pengalaman belajar menyenangkan.</p>
        <Link href="/register" class="inline-block bg-white text-blue-700 font-semibold px-6 py-3 rounded-lg hover:bg-slate-100 transition">
          Daftar Sekarang
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
