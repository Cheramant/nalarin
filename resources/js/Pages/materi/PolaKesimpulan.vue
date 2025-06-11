
<template>
  <MainLayout>
    <Head title="Pola - Kesimpulan" />

    <section class="min-h-screen bg-gradient-to-br from-emerald-900 to-teal-700 text-white px-4 py-16">
      <div class="max-w-4xl mx-auto space-y-10">
        <!-- Header -->
        <header class="text-center">
          <h1 class="text-4xl font-bold text-emerald-200">📌 Pola - Kesimpulan</h1>
          <p class="text-lg text-slate-200 mt-2">Kesimpulan akhir dari pembelajaran topik Pengenalan Pola.</p>
        </header>

        <!-- Kesimpulan -->
        <div class="bg-[#12322c] p-6 rounded-xl shadow space-y-5">
          <h2 class="text-xl font-semibold text-emerald-300">🔍 Intisari Materi</h2>
          <ul class="list-disc list-inside text-slate-200 space-y-2">
            <li>
              Pola adalah <strong class="text-emerald-300">keteraturan</strong> yang dapat ditemukan dalam aktivitas, data, atau kejadian yang berulang.
            </li>
            <li>
              Mengenali pola membantu kita <strong class="text-emerald-300">memahami situasi</strong> dan <strong class="text-emerald-300">memprediksi kejadian selanjutnya</strong>.
            </li>
            <li>
              Pola bisa berbentuk waktu (jadwal), perilaku (rutinitas), atau data (grafik/statistik).
            </li>
            <li>
              Dalam kehidupan nyata, kemampuan mengenali pola membantu dalam <strong class="text-emerald-300">pengambilan keputusan dan pemecahan masalah</strong>.
            </li>
            <li>
              Dengan mengenali pola, siswa dapat lebih mudah menyusun strategi, membuat prediksi, dan mengorganisasi informasi secara efisien.
            </li>
            <li>
              Keterampilan ini juga menjadi fondasi penting dalam pemrograman, data analitik, dan kehidupan sehari-hari.
            </li>
          </ul>
        </div>

        <!-- Navigasi -->
        <div class="text-center pt-4">
          <button
            @click="goToNext"
            class="px-6 py-3 bg-emerald-700 hover:bg-emerald-800 rounded-xl font-semibold transition"
          >
            Lanjut ke Topik Abstraksi 🔎
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
  router.visit('/materi/abstraksi/intro')
}
</script>
