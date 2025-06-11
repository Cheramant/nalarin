<template>
  <MainLayout>
    <Head title="Abstraksi - Aktivitas SAVI" />

    <!-- Section Header -->
    <section class="bg-gradient-to-br from-purple-900 to-purple-700 text-white py-20 px-4">
      <div class="max-w-4xl mx-auto text-center space-y-6">
        <h1 class="text-4xl font-bold text-purple-300">🧠 Aktivitas Abstraksi Berbasis SAVI</h1>
        <p class="text-slate-200 text-lg">Mari menerapkan pemahaman abstraksi melalui berbagai pendekatan belajar SAVI.</p>
      </div>
    </section>

    <!-- SAVI Activities -->
    <section class="bg-[#1e1b2e] py-16 px-4">
      <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">

        <!-- Somatic -->
        <div class="bg-[#2a263e] p-6 rounded-xl shadow transition hover:scale-105">
          <h2 class="text-2xl font-semibold text-purple-300 mb-2">🖐️ Somatic</h2>
          <p class="text-slate-300 text-sm mb-4">Mainkan simulasi ini: pilih informasi yang relevan dan seret ke kategori utama, abaikan detail yang tidak penting.</p>
          <img src="https://dummyimage.com/400x200/5b427c/ffffff&text=Simulasi+Abstraksi" class="rounded-md border border-purple-500" alt="Simulasi Abstraksi Somatic">
        </div>

        <!-- Auditory -->
        <div class="bg-[#2a263e] p-6 rounded-xl shadow transition hover:scale-105">
          <h2 class="text-2xl font-semibold text-purple-300 mb-2">🎧 Auditory</h2>
          <p class="text-slate-300 text-sm mb-4">Dengarkan narasi ini: bagaimana programmer memilih variabel penting dalam menyusun program sederhana.</p>
          <audio controls class="w-full rounded shadow">
            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-3.mp3" type="audio/mpeg">
            Browser kamu tidak mendukung audio.
          </audio>
        </div>

        <!-- Visual -->
        <div class="bg-[#2a263e] p-6 rounded-xl shadow transition hover:scale-105">
          <h2 class="text-2xl font-semibold text-purple-300 mb-2">🖼️ Visual</h2>
          <p class="text-slate-300 text-sm mb-4">Lihat bagan berikut: temukan bagian informasi utama dan diskusikan bagian mana yang dapat disederhanakan.</p>
          <img src="https://dummyimage.com/500x280/6c4fa6/ffffff&text=Diagram+Abstraksi" class="rounded border border-purple-500" alt="Diagram Visual Abstraksi">
        </div>

        <!-- Intellectual -->
        <div class="bg-[#2a263e] p-6 rounded-xl shadow transition hover:scale-105">
          <h2 class="text-2xl font-semibold text-purple-300 mb-2">🧠 Intellectual</h2>
          <p class="text-slate-300 text-sm mb-4">Refleksi: Dalam kehidupan sehari-hari, bagaimana kamu menyederhanakan masalah besar jadi konsep utama? Tulis contohnya.</p>
          <textarea class="w-full mt-2 p-3 text-sm rounded-lg bg-[#1f1b2d] text-white border border-purple-500" rows="4" placeholder="Tuliskan jawabanmu di sini..."></textarea>
        </div>
      </div>
    </section>

    <!-- Kesimpulan dan Navigasi -->
    <section class="py-16 bg-gradient-to-r from-purple-800 to-purple-600 text-white text-center px-4">
      <div class="max-w-3xl mx-auto space-y-4">
        <h2 class="text-2xl font-bold">📘 Kesimpulan</h2>
        <p class="text-slate-100">Abstraksi memungkinkan kita fokus pada esensi masalah. Dengan pendekatan SAVI, kamu telah belajar mengabaikan detail yang mengganggu.</p>
        <Link href="/materi/algoritma/teori" class="inline-block mt-4 bg-white text-purple-700 font-semibold px-6 py-3 rounded-lg hover:bg-slate-100 transition">
          Lanjut ke Topik Selanjutnya: Desain Algoritma
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
