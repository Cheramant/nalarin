<template>
  <MainLayout>
    <Head title="Materi Pembelajaran" />

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-purple-900 to-purple-700 text-white py-20 px-4">
      <div class="max-w-4xl mx-auto text-center space-y-6">
        <h1 class="text-4xl font-bold text-purple-300">📚 Materi Pembelajaran Computational Thinking</h1>
        <p class="text-slate-200 text-lg">
          Mari belajar Computational Thinking secara bertahap dengan pendekatan interaktif berbasis SAVI.
        </p>
      </div>
    </section>

    <!-- Materi Grid -->
    <section class="bg-[#1e1b2e] py-16 px-4">
      <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

        <div class="bg-[#2a263e] p-6 rounded-xl shadow hover:shadow-lg transition hover:scale-105 flex flex-col justify-between">
          <div>
            <h2 class="text-xl font-semibold text-purple-300 mb-2">🔍 Dekomposisi</h2>
            <p class="text-slate-300 text-sm">Belajar membagi masalah besar menjadi bagian-bagian yang lebih kecil dan terstruktur.</p>
          </div>
          <Link href="/materi/dekomposisi/intro" class="mt-4 inline-block bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-lg transition text-sm text-center">
            Mulai Belajar
          </Link>
        </div>

        <div class="bg-[#2a263e] p-6 rounded-xl shadow hover:shadow-lg transition hover:scale-105 flex flex-col justify-between">
          <div>
            <h2 class="text-xl font-semibold text-purple-300 mb-2">🧩 Pengenalan Pola</h2>
            <p class="text-slate-300 text-sm">Mengenali pola dari masalah atau data yang berulang sebagai dasar untuk solusi.</p>
          </div>
          <Link href="/materi/pola/intro" class="mt-4 inline-block bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-lg transition text-sm text-center">
            Mulai Belajar
          </Link>
        </div>

        <div class="bg-[#2a263e] p-6 rounded-xl shadow hover:shadow-lg transition hover:scale-105 flex flex-col justify-between">
          <div>
            <h2 class="text-xl font-semibold text-purple-300 mb-2">🧠 Abstraksi</h2>
            <p class="text-slate-300 text-sm">Menentukan informasi yang relevan dan menyaring hal-hal yang tidak diperlukan.</p>
          </div>
          <Link href="/materi/abstraksi/intro" class="mt-4 inline-block bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-lg transition text-sm text-center">
            Mulai Belajar
          </Link>
        </div>

        <div class="bg-[#2a263e] p-6 rounded-xl shadow hover:shadow-lg transition hover:scale-105 flex flex-col justify-between">
          <div>
            <h2 class="text-xl font-semibold text-purple-300 mb-2">📋 Desain Algoritma</h2>
            <p class="text-slate-300 text-sm">Merancang langkah-langkah logis dan sistematis untuk menyelesaikan masalah.</p>
          </div>
          <Link href="/materi/algoritma/intro" class="mt-4 inline-block bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-lg transition text-sm text-center">
            Mulai Belajar
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

<style scoped></style>
