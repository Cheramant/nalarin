<template>
  <MainLayout>
    <Head title="Pengenalan Pola - Teori" />

    <section class="bg-gradient-to-br from-[#0F1C2E] to-[#1E293B] text-white py-20 px-4">
      <div class="max-w-4xl mx-auto text-center space-y-10">

        <!-- Slide 1: Intro -->
        <div class="transition duration-700 ease-in-out animate-fade-in">
          <h1 class="text-4xl font-bold text-blue-400 mb-4">🔁 Apa itu Pengenalan Pola?</h1>
          <p class="text-lg text-slate-300">Pengenalan pola adalah kemampuan untuk mengidentifikasi kesamaan, pengulangan, atau keteraturan dari data, masalah, atau proses.</p>
        </div>

        <!-- Slide 2: Mengapa Penting -->
        <div class="transition duration-700 delay-100 animate-fade-in">
          <h2 class="text-3xl font-semibold text-blue-300 mb-3">📌 Kenapa Penting?</h2>
          <ul class="text-left text-slate-300 list-disc pl-6 space-y-2">
            <li>Mempercepat proses pemecahan masalah</li>
            <li>Menghindari pengulangan kerja</li>
            <li>Memudahkan pembuatan solusi otomatis</li>
          </ul>
        </div>

        <!-- Slide 3: Contoh Nyata -->
        <div class="transition duration-700 delay-200 animate-fade-in">
          <h2 class="text-3xl font-semibold text-blue-300 mb-3">🔎 Contoh Sehari-hari</h2>
          <div class="bg-[#1E293B] rounded-lg p-6 text-left text-slate-300 space-y-2">
            <p><strong>Contoh 1:</strong> Saat belajar matematika, kita mengenali pola bilangan seperti 2, 4, 6, 8...</p>
            <p><strong>Contoh 2:</strong> Di dunia pemrograman, kita mengenali pola error untuk menyusun debugging otomatis.</p>
          </div>
        </div>

        <!-- Slide 4: Studi Kasus -->
        <div class="transition duration-700 delay-300 animate-fade-in">
          <h2 class="text-3xl font-semibold text-blue-300 mb-3">🧠 Studi Kasus: Sistem Absensi Otomatis</h2>
          <p class="text-slate-300">Dengan mengenali pola kehadiran siswa, sistem bisa otomatis memberikan peringatan atau laporan kepada guru/wali murid.</p>
        </div>

        <!-- Slide 5: Manfaat -->
        <div class="transition duration-700 delay-400 animate-fade-in">
          <h2 class="text-3xl font-semibold text-blue-300 mb-3">🎯 Manfaat Pengenalan Pola</h2>
          <ul class="text-left text-slate-300 list-disc pl-6 space-y-2">
            <li>Lebih efisien dalam menyelesaikan masalah</li>
            <li>Solusi bisa diulang untuk masalah serupa</li>
            <li>Mendukung pengembangan algoritma</li>
          </ul>
        </div>

        <!-- Slide 6: Penutup -->
        <div class="transition duration-700 delay-500 animate-fade-in">
          <h2 class="text-3xl font-bold text-blue-400 mb-4">📘 Ringkasan</h2>
          <p class="text-slate-300">Pengenalan pola membantu kita memahami struktur data dan peristiwa, sehingga bisa memprediksi dan menyusun solusi lebih cepat.</p>
        </div>

        <!-- Button to SAVI -->
        <div class="mt-10">
          <Link href="/materi/pola/savi" class="inline-block bg-blue-500 hover:bg-blue-400 text-white font-semibold px-6 py-3 rounded-lg transition">
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
