
<template>
  <MainLayout>
    <Head title="Abstraksi - Pengantar" />

    <section class="min-h-screen bg-gradient-to-br from-rose-900 to-rose-800 text-white px-4 py-16">
      <div class="max-w-4xl mx-auto space-y-12">
        <!-- Header -->
        <header class="text-center space-y-4">
          <h1 class="text-4xl font-bold text-rose-200">🔎 Abstraksi</h1>
          <p class="text-lg text-neutral-200">Mari pahami bagaimana cara menyederhanakan masalah kompleks dengan menyaring informasi penting saja.</p>
        </header>

        <!-- Pengantar -->
        <div class="bg-[#261b3f] p-6 rounded-xl space-y-4 shadow-lg">
          <h2 class="text-xl font-semibold text-rose-300">🧠 Apa itu Abstraksi?</h2>
          <p class="text-neutral-300">
            Abstraksi adalah proses menyederhanakan masalah dengan <span class="text-rose-200 font-medium">mengambil inti atau informasi penting</span> saja,
            dan mengabaikan hal-hal yang tidak relevan. Dengan begitu, kita dapat fokus pada bagian-bagian yang benar-benar dibutuhkan untuk menyelesaikan masalah.
          </p>
          <p class="text-neutral-300">
            Dalam kehidupan sehari-hari, kita sering melakukan abstraksi, misalnya ketika membaca peta: kita tidak melihat semua detail sebenarnya, hanya informasi penting seperti jalan dan lokasi.
          </p>
        </div>

        <!-- Tujuan Belajar -->
        <div class="bg-[#2d1f4a] p-6 rounded-xl shadow space-y-3">
          <h2 class="text-xl font-semibold text-rose-300">🎯 Tujuan Pembelajaran</h2>
          <ul class="list-disc list-inside text-neutral-200 space-y-2">
            <li>Memahami konsep abstraksi dalam Computational Thinking.</li>
            <li>Mampu mengidentifikasi informasi penting dari sebuah masalah.</li>
            <li>Melatih kemampuan menyederhanakan kompleksitas untuk menemukan solusi yang efektif.</li>
          </ul>
        </div>

        <!-- Navigasi -->
        <div class="text-center pt-4">
          <button
            @click="goToNext"
            class="px-6 py-3 bg-rose-700 hover:bg-rose-800 rounded-xl font-semibold transition"
          >
            Mulai Pembelajaran dengan Somatic ✋
          </button>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { router } from '@inertiajs/vue3'

function goToNext() {
  router.visit('/materi/abstraksi/somatic')
}
</script>
