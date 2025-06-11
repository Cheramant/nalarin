<template>
  <MainLayout>
    <Head title="Dekomposisi - Teori" />

    <section class="bg-gradient-to-br from-[#0F1C2E] to-[#1E293B] text-white py-20 px-4">
      <div class="max-w-4xl mx-auto text-center space-y-10">

        <!-- Slide 1: Intro -->
        <div class="transition duration-700 ease-in-out animate-fade-in">
          <h1 class="text-4xl font-bold text-blue-400 mb-4">🔧 Apa itu Dekomposisi?</h1>
          <p class="text-lg text-slate-300">Dekomposisi adalah teknik memecah masalah besar menjadi bagian-bagian kecil agar lebih mudah dianalisis dan diselesaikan.</p>
        </div>

        <!-- Slide 2: Mengapa Penting -->
        <div class="transition duration-700 delay-100 animate-fade-in">
          <h2 class="text-3xl font-semibold text-blue-300 mb-3">📌 Mengapa Dekomposisi Penting?</h2>
          <ul class="text-left text-slate-300 list-disc pl-6 space-y-2">
            <li>Membantu fokus pada satu bagian masalah</li>
            <li>Mempermudah dalam menyusun solusi</li>
            <li>Menghindari kebingungan akibat kompleksitas</li>
            <li>Sering digunakan dalam dunia nyata (pemrograman, bisnis, kehidupan sehari-hari)</li>
          </ul>
        </div>

        <!-- Slide 3: Analogi Puzzle -->
        <div class="transition duration-700 delay-200 animate-fade-in">
          <h2 class="text-3xl font-semibold text-blue-300 mb-3">🧩 Analogi: Puzzle</h2>
          <p class="text-slate-300">Sama seperti puzzle, kita perlu menyusun bagian-bagian kecil agar menjadi gambaran besar yang utuh. Ini adalah inti dari dekomposisi!</p>
        </div>

        <!-- Slide 4: Studi Kasus -->
        <div class="transition duration-700 delay-300 animate-fade-in">
          <h2 class="text-3xl font-semibold text-blue-300 mb-3">🔍 Studi Kasus: Membuat Teh</h2>
          <div class="bg-[#1E293B] rounded-lg p-6 text-left text-slate-300 space-y-2">
            <p><strong>Masalah:</strong> Bagaimana cara membuat teh?</p>
            <p><strong>Dekomposisi:</strong></p>
            <ol class="list-decimal pl-6 space-y-1">
              <li>Didihkan air</li>
              <li>Masukkan teh ke dalam gelas</li>
              <li>Tuang air panas ke gelas</li>
              <li>Tunggu beberapa menit</li>
              <li>Tambahkan gula atau madu (opsional)</li>
              <li>Teh siap disajikan</li>
            </ol>
          </div>
        </div>

        <!-- Slide 5: Manfaat -->
        <div class="transition duration-700 delay-400 animate-fade-in">
          <h2 class="text-3xl font-semibold text-blue-300 mb-3">🎯 Manfaat Dekomposisi</h2>
          <ul class="text-left text-slate-300 list-disc pl-6 space-y-2">
            <li>Membuat masalah kompleks menjadi lebih sederhana</li>
            <li>Meningkatkan fokus dan efisiensi</li>
            <li>Membantu tim bekerja lebih terstruktur</li>
            <li>Menjadi dasar berpikir komputasional</li>
          </ul>
        </div>

        <!-- Slide 6: Penutup -->
        <div class="transition duration-700 delay-500 animate-fade-in">
          <h2 class="text-3xl font-bold text-blue-400 mb-4">🧠 Ringkasan</h2>
          <p class="text-slate-300">Dekomposisi membantu kita melihat masalah sebagai potongan kecil yang bisa diselesaikan satu per satu. Ini adalah langkah pertama dalam Computational Thinking!</p>
        </div>

        <!-- Button to SAVI -->
        <div class="mt-10">
          <Link href="/materi/dekomposisi/savi" class="inline-block bg-blue-500 hover:bg-blue-400 text-white font-semibold px-6 py-3 rounded-lg transition">
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
