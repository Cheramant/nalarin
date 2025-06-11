<template>
  <MainLayout>
    <Head title="Pengenalan Pola - Aktivitas SAVI" />

    <!-- Section Header -->
    <section class="bg-gradient-to-br from-[#1e293b] to-[#0f172a] text-white py-20 px-4">
      <div class="max-w-4xl mx-auto text-center space-y-6">
        <h1 class="text-4xl font-bold text-blue-400">🔍 Aktivitas Pengenalan Pola Berbasis SAVI</h1>
        <p class="text-slate-300 text-lg">Waktunya mengidentifikasi pola dari data dan masalah melalui pendekatan interaktif <strong>SAVI</strong>.</p>
      </div>
    </section>

    <!-- SAVI Activities -->
    <section class="bg-[#111827] py-16 px-4">
      <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">

        <!-- Somatic -->
        <div class="bg-[#1f2937] p-6 rounded-xl shadow transition hover:scale-105">
          <h2 class="text-2xl font-semibold text-blue-300 mb-2">🖐️ Somatic</h2>
          <p class="text-slate-300 text-sm mb-4">Coba susun pola berikut: seret urutan angka yang tepat untuk membentuk pola bilangan ganjil.</p>
          <img src="https://dummyimage.com/400x200/334155/ffffff&text=Drag+Urutan+Bilangan" class="rounded-md border border-blue-500" alt="Simulasi Somatic Pola">
        </div>

        <!-- Auditory -->
        <div class="bg-[#1f2937] p-6 rounded-xl shadow transition hover:scale-105">
          <h2 class="text-2xl font-semibold text-blue-300 mb-2">🎧 Auditory</h2>
          <p class="text-slate-300 text-sm mb-4">Dengarkan audio berikut tentang bagaimana mengenali pola perilaku dalam sistem alarm otomatis.</p>
          <audio controls class="w-full rounded shadow">
            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-2.mp3" type="audio/mpeg">
            Browser kamu tidak mendukung audio.
          </audio>
        </div>

        <!-- Visual -->
        <div class="bg-[#1f2937] p-6 rounded-xl shadow transition hover:scale-105">
          <h2 class="text-2xl font-semibold text-blue-300 mb-2">🖼️ Visual</h2>
          <p class="text-slate-300 text-sm mb-4">Amati gambar berikut dan temukan pola yang tersembunyi. Misalnya: urutan warna, bentuk, atau waktu kejadian.</p>
          <img src="https://dummyimage.com/500x280/445566/ffffff&text=Temukan+Pola+Visual" class="rounded border border-blue-500" alt="Gambar Visual Pola">
        </div>

        <!-- Intellectual -->
        <div class="bg-[#1f2937] p-6 rounded-xl shadow transition hover:scale-105">
          <h2 class="text-2xl font-semibold text-blue-300 mb-2">🧠 Intellectual</h2>
          <p class="text-slate-300 text-sm mb-4">Refleksikan: “Pola apa yang sering kamu temukan dalam rutinitas harianmu, dan bagaimana kamu bisa menyusunnya jadi sistem otomatis?”</p>
          <textarea class="w-full mt-2 p-3 text-sm rounded-lg bg-[#0f172a] text-white border border-blue-500" rows="4" placeholder="Tuliskan jawabanmu di sini..."></textarea>
        </div>
      </div>
    </section>

    <!-- Kesimpulan dan Navigasi -->
    <section class="py-16 bg-gradient-to-r from-blue-900 to-blue-700 text-white text-center px-4">
      <div class="max-w-3xl mx-auto space-y-4">
        <h2 class="text-2xl font-bold">📘 Kesimpulan</h2>
        <p class="text-slate-200">Dengan mengenali pola, kamu dapat menyusun strategi dan prediksi untuk memecahkan masalah secara efisien. Hebat!</p>
        <Link href="/materi/abstraksi/teori" class="inline-block mt-4 bg-white text-blue-700 font-semibold px-6 py-3 rounded-lg hover:bg-slate-100 transition">
          Lanjut ke Topik Selanjutnya: Abstraksi
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
