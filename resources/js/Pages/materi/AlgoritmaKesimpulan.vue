
<template>
  <MainLayout>
    <Head title="Desain Algoritma - Kesimpulan" />

    <section class="min-h-screen bg-gradient-to-br from-indigo-900 to-purple-800 text-white px-4 py-20">
      <div class="max-w-4xl mx-auto space-y-12 text-center">
        <!-- Judul -->
        <div class="space-y-4">
          <h1 class="text-4xl font-bold text-purple-200">📌 Kesimpulan - Desain Algoritma</h1>
          <p class="text-lg text-slate-300">Mari kita simpulkan apa yang telah kita pelajari dari topik ini.</p>
        </div>

        <!-- Isi Kesimpulan -->
        <div class="bg-[#2d1f4a] p-6 rounded-xl shadow space-y-6 text-left text-slate-100">
          <p>
            Desain algoritma adalah kemampuan penting dalam Computational Thinking yang melibatkan penyusunan langkah-langkah logis untuk menyelesaikan suatu masalah.
            Proses ini melatih kita berpikir sistematis, efisien, dan terstruktur.
          </p>
          <p>
            Melalui studi kasus yang telah dipelajari, kita mengetahui bahwa menyusun algoritma tidak hanya sekadar urutan, tetapi juga mempertimbangkan kondisi, pengulangan, dan logika yang berlaku.
            Dalam kehidupan sehari-hari, algoritma digunakan mulai dari membuat minuman, login ke akun, hingga menyusun strategi bisnis.
          </p>
          <p>
            Dengan memahami dan menerapkan desain algoritma, kita dapat menjadi problem solver yang lebih baik dan berpikir lebih jernih saat menghadapi tantangan.
          </p>
        </div>

        <!-- Navigasi -->
        <div class="pt-6">
          <button @click="goToNextTopic" class="px-6 py-3 bg-purple-700 hover:bg-purple-800 rounded text-white text-lg transition">
            Lanjut Latihan Yukk!
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

function goToNextTopic() {
  router.visit('/latihan')
}
</script>
