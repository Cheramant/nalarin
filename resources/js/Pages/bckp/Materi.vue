<template>
  <MainLayout>
    <Head title="Materi - Nalarin" />
    <section class="min-h-screen bg-[#0F1C2E] text-white px-6 md:px-20 py-16">
      <div class="max-w-6xl mx-auto text-center">
        <h1 class="text-3xl md:text-4xl font-bold text-yellow-400 mb-6">📚 Pilih Topik Computational Thinking</h1>
        <p class="text-slate-300 mb-10">Setiap topik memiliki penjelasan menarik dan aktivitas SAVI (Somatic, Auditory, Visual, Intellectual) untuk membantumu memahami dengan lebih baik.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
          <div v-for="item in topikList" :key="item.route"
            @click="$inertia.visit(item.route)"
            class="bg-[#1E2B3A] hover:bg-[#263447] p-6 rounded-xl shadow-lg cursor-pointer transition transform hover:scale-105">
            <div class="text-4xl mb-2">{{ item.icon }}</div>
            <h2 class="text-xl font-bold text-yellow-300 mb-1">{{ item.title }}</h2>
            <p class="text-slate-400 text-sm">{{ item.desc }}</p>
            <button class="mt-4 bg-yellow-400 text-black py-1 px-4 rounded hover:bg-yellow-300 text-sm font-semibold transition">Mulai Belajar</button>
          </div>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'

const topikList = [
  {
    title: 'Dekomposisi',
    desc: 'Memecah masalah besar menjadi bagian-bagian kecil agar lebih mudah diselesaikan.',
    route: '/materi/dekomposisi/teori',
    icon: '🧩'
  },
  {
    title: 'Pengenalan Pola',
    desc: 'Mengidentifikasi pola atau kesamaan dalam data atau proses untuk mempermudah penyelesaian.',
    route: '/materi/pola/teori',
    icon: '🔍'
  },
  {
    title: 'Abstraksi',
    desc: 'Fokus pada informasi penting dan mengabaikan hal yang tidak relevan.',
    route: '/materi/abstraksi/teori',
    icon: '🎯'
  },
  {
    title: 'Desain Algoritma',
    desc: 'Menyusun langkah-langkah logis untuk menyelesaikan suatu masalah.',
    route: '/materi/algoritma/teori',
    icon: '🧠'
  }
]
</script>

<style scoped></style>
