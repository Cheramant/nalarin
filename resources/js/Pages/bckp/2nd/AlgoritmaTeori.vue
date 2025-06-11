<template>
  <MainLayout>
    <Head title="Desain Algoritma - Teori" />

    <section class="bg-gradient-to-br from-[#0F172A] to-[#1E293B] text-white py-20 px-4">
      <div class="max-w-4xl mx-auto text-center space-y-10">

        <!-- Slide 1: Intro Algoritma -->
        <div class="transition duration-700 ease-in-out animate-fade-in">
          <h1 class="text-4xl font-bold text-cyan-400 mb-4">🧾 Apa itu Desain Algoritma?</h1>
          <p class="text-lg text-slate-300">Desain algoritma adalah proses merancang urutan langkah logis dan sistematis untuk menyelesaikan suatu masalah.</p>
        </div>

        <!-- Slide 2: Komponen Algoritma -->
        <div class="transition duration-700 delay-100 animate-fade-in">
          <h2 class="text-3xl font-semibold text-cyan-300 mb-3">📦 Komponen Utama Algoritma</h2>
          <ul class="text-left text-slate-300 list-disc pl-6 space-y-2">
            <li>Input: data yang diberikan ke algoritma</li>
            <li>Proses: langkah-langkah yang dijalankan</li>
            <li>Output: hasil dari proses algoritma</li>
          </ul>
        </div>

        <!-- Slide 3: Tujuan Desain Algoritma -->
        <div class="transition duration-700 delay-200 animate-fade-in">
          <h2 class="text-3xl font-semibold text-cyan-300 mb-3">🎯 Tujuan Desain Algoritma</h2>
          <p class="text-slate-300">Membuat solusi yang efisien, terstruktur, dan mudah dipahami. Algoritma yang baik bisa digunakan kembali untuk masalah serupa.</p>
        </div>

        <!-- Slide 4: Studi Kasus -->
        <div class="transition duration-700 delay-300 animate-fade-in">
          <h2 class="text-3xl font-semibold text-cyan-300 mb-3">🧠 Studi Kasus: Antrian Minimarket</h2>
          <p class="text-slate-300">Desain algoritma digunakan untuk mengatur siapa yang dilayani lebih dulu, misalnya FIFO (First In First Out), atau sistem prioritas.</p>
        </div>

        <!-- Slide 5: Contoh Algoritma -->
        <div class="transition duration-700 delay-400 animate-fade-in">
          <h2 class="text-3xl font-semibold text-cyan-300 mb-3">📝 Contoh Algoritma Sederhana</h2>
          <div class="text-left text-slate-300 bg-slate-800 p-4 rounded-md font-mono text-sm">
            1. Mulai<br>
            2. Masukkan dua angka<br>
            3. Tambahkan kedua angka<br>
            4. Tampilkan hasil<br>
            5. Selesai
          </div>
        </div>

        <!-- Slide 6: Penutup -->
        <div class="transition duration-700 delay-500 animate-fade-in">
          <h2 class="text-3xl font-bold text-cyan-400 mb-4">📘 Ringkasan</h2>
          <p class="text-slate-300">Desain algoritma adalah kunci pemecahan masalah secara logis dan efisien. Penting untuk menyusun langkah yang tepat dan berurutan.</p>
        </div>

        <!-- Button to SAVI -->
        <div class="mt-10">
          <Link href="/materi/algoritma/savi" class="inline-block bg-cyan-500 hover:bg-cyan-400 text-white font-semibold px-6 py-3 rounded-lg transition">
            Lanjut ke Aktivitas SAVI
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

<style scoped>
@keyframes fade-in {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate-fade-in {
  animation: fade-in 0.8s ease-out both;
}
</style>
