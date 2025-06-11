
<template>
  <MainLayout>
    <Head title="Abstraksi - Kesimpulan" />

    <section class="min-h-screen bg-gradient-to-br from-indigo-900 to-purple-800 text-white px-4 py-16">
      <div class="max-w-4xl mx-auto space-y-10 text-center">
        <!-- Header -->
        <div class="space-y-4">
          <h1 class="text-4xl font-bold text-purple-200">🔍 Kesimpulan Abstraksi</h1>
          <p class="text-lg text-slate-300">
            Ringkasan penting dari materi yang telah kamu pelajari tentang abstraksi dalam Computational Thinking.
          </p>
        </div>

        <!-- Kesimpulan Utama -->
        <div class="bg-[#2d1f4a] p-6 rounded-xl shadow space-y-6 text-left text-slate-200">
          <h2 class="text-xl font-semibold text-purple-300">🔎 Apa yang Kamu Pelajari?</h2>
          <ul class="list-disc list-inside space-y-3">
            <li><strong>Abstraksi</strong> adalah proses menyederhanakan masalah dengan hanya memfokuskan pada informasi penting dan mengabaikan detail yang tidak relevan.</li>
            <li>Dalam kehidupan nyata, abstraksi membantu kita membuat sistem yang efisien dan tidak membingungkan pengguna.</li>
            <li>Contoh nyata: membuat aplikasi, menyusun jadwal belajar, atau sistem informasi — semua membutuhkan penyaringan data yang tepat.</li>
            <li>Abstraksi membuat solusi lebih <strong>fokus, hemat waktu, dan mudah dipahami</strong>.</li>
          </ul>
        </div>

        <!-- Navigasi ke Topik Selanjutnya -->
        <div class="pt-6">
          <button @click="goToNext" class="px-6 py-3 bg-purple-700 hover:bg-purple-800 rounded text-white text-lg transition">
            Lanjut ke Topik: Algoritma
          </button>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { router } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { Head } from '@inertiajs/vue3'

function goToNext() {
  router.visit('/materi/algoritma/intro')
}
</script>
