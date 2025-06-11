<template>
  <MainLayout>
    <Head title="Dekomposisi - Intro" />

    <!-- Hero Section -->
    <section class="min-h-screen bg-gradient-to-br from-purple-950 via-purple-900 to-indigo-900 text-white flex flex-col justify-center items-center px-6 py-16 text-center animate-fade-in">
      <div class="max-w-3xl space-y-6">
        <h1 class="text-4xl md:text-5xl font-bold text-purple-300">🔍 Dekomposisi</h1>
        <p class="text-lg md:text-xl text-slate-200">
          Dekomposisi adalah proses memecah masalah kompleks menjadi bagian-bagian kecil yang lebih mudah dipahami dan diselesaikan.
        </p>
        <p class="text-md md:text-lg text-slate-300">
          Bayangkan kamu merakit komputer. Kamu akan mulai dari merakit motherboard, lalu memasang RAM, CPU, dan sebagainya. Itulah dekomposisi — menyelesaikan masalah besar secara bertahap.
        </p>
        <div class="mt-8">
          <Link href="/materi/dekomposisi/somatic" class="inline-block bg-purple-500 hover:bg-purple-600 text-white px-6 py-3 rounded-lg text-lg font-semibold transition">
            Lanjut ke Somatic →
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
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate-fade-in {
  animation: fade-in 0.8s ease-out both;
}
</style>
