<template>
  <MainLayout>
    <Head title="Abstraksi - Teori" />

    <section class="bg-gradient-to-br from-[#0F1C2E] to-[#1E293B] text-white py-20 px-4">
      <div class="max-w-4xl mx-auto text-center space-y-10">

        <!-- Slide 1: Intro Abstraksi -->
        <div class="transition duration-700 ease-in-out animate-fade-in">
          <h1 class="text-4xl font-bold text-purple-400 mb-4">🎯 Apa itu Abstraksi?</h1>
          <p class="text-lg text-slate-300">Abstraksi adalah proses menyaring informasi penting dan mengabaikan detail yang tidak relevan dalam menyelesaikan masalah.</p>
        </div>

        <!-- Slide 2: Pentingnya Abstraksi -->
        <div class="transition duration-700 delay-100 animate-fade-in">
          <h2 class="text-3xl font-semibold text-purple-300 mb-3">📌 Mengapa Penting?</h2>
          <ul class="text-left text-slate-300 list-disc pl-6 space-y-2">
            <li>Fokus pada inti masalah</li>
            <li>Efisiensi waktu dan pemrosesan</li>
            <li>Membantu dalam merancang solusi</li>
          </ul>
        </div>

        <!-- Slide 3: Analogi Abstraksi -->
        <div class="transition duration-700 delay-200 animate-fade-in">
          <h2 class="text-3xl font-semibold text-purple-300 mb-3">🧩 Analogi: Peta</h2>
          <p class="text-slate-300">Saat kamu melihat peta kota, kamu hanya melihat jalan utama, simbol penting, dan lokasi strategis. Ini adalah bentuk abstraksi: menyajikan informasi penting tanpa detail yang mengganggu.</p>
        </div>

        <!-- Slide 4: Studi Kasus -->
        <div class="transition duration-700 delay-300 animate-fade-in">
          <h2 class="text-3xl font-semibold text-purple-300 mb-3">🧠 Studi Kasus</h2>
          <p class="text-slate-300">Saat merancang sistem pemesanan makanan online, abstraksi membantu fokus pada proses utama: pilih makanan, masukkan alamat, dan bayar — tanpa perlu detail dapur atau sistem logistik.</p>
        </div>

        <!-- Slide 5: Teknik Abstraksi -->
        <div class="transition duration-700 delay-400 animate-fade-in">
          <h2 class="text-3xl font-semibold text-purple-300 mb-3">⚙️ Teknik Abstraksi</h2>
          <ul class="text-left text-slate-300 list-disc pl-6 space-y-2">
            <li>Identifikasi bagian penting dari data</li>
            <li>Hilangkan informasi yang tidak relevan</li>
            <li>Kelompokkan informasi serupa</li>
          </ul>
        </div>

        <!-- Slide 6: Ringkasan -->
        <div class="transition duration-700 delay-500 animate-fade-in">
          <h2 class="text-3xl font-bold text-purple-400 mb-4">📘 Ringkasan</h2>
          <p class="text-slate-300">Abstraksi membuat kita lebih fokus dan efisien dalam berpikir. Ini sangat penting dalam menyusun solusi yang terstruktur.</p>
        </div>

        <!-- Button to SAVI -->
        <div class="mt-10">
          <Link href="/materi/abstraksi/savi" class="inline-block bg-purple-500 hover:bg-purple-400 text-white font-semibold px-6 py-3 rounded-lg transition">
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
