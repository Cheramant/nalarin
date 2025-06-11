
<template>
  <MainLayout>
    <Head title="Desain Algoritma - Intro" />

    <section class="min-h-screen bg-gradient-to-br from-indigo-900 to-purple-800 text-white px-4 py-16">
      <div class="max-w-5xl mx-auto text-center space-y-10">
        <!-- Header -->
        <div class="space-y-4">
          <h1 class="text-4xl font-bold text-purple-200">🔄 Desain Algoritma</h1>
          <p class="text-lg text-slate-300">
            Saatnya menyusun langkah demi langkah untuk menyelesaikan masalah! Desain algoritma mengajarkan kita berpikir runtut dan sistematis.
          </p>
        </div>

        <!-- Penjelasan Umum -->
        <div class="bg-[#2d1f4a] p-6 rounded-xl shadow text-slate-200 space-y-4 text-left">
          <h2 class="text-xl font-semibold text-purple-300">🧭 Apa itu Algoritma?</h2>
          <p>
            Algoritma adalah <strong>urutan langkah logis</strong> yang disusun untuk menyelesaikan suatu masalah.
            Dalam Computational Thinking, merancang algoritma berarti menyusun solusi secara efisien dan mudah dipahami.
          </p>
          <p>
            Seperti resep masakan yang harus diikuti tahap demi tahap, algoritma membantu kita menyelesaikan masalah dengan cara sistematis dan terstruktur.
          </p>
        </div>

        <!-- Navigasi ke SAVI -->
        <div class="pt-6">
          <button @click="goToSomatic" class="px-6 py-3 bg-purple-700 hover:bg-purple-800 rounded text-white text-lg transition">
            Mulai dengan Somatic 🧍
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

function goToSomatic() {
  router.visit('/materi/algoritma/somatic')
}
</script>
