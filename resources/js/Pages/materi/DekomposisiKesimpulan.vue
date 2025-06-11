
<template>
  <MainLayout>
    <Head title="Dekomposisi - Kesimpulan" />

    <section class="min-h-screen bg-gradient-to-br from-purple-950 to-indigo-900 text-white py-16 px-4">
      <div class="max-w-4xl mx-auto space-y-12">
        <!-- Header -->
        <div class="text-center space-y-4">
          <h1 class="text-4xl font-bold text-purple-300">🧾 Kesimpulan: Dekomposisi</h1>
          <p class="text-lg text-slate-200">Refleksi akhir pembelajaran dekomposisi.</p>
        </div>

        <!-- Penegasan Konsep -->
        <div class="bg-[#1f1a32] p-6 rounded-xl space-y-4">
          <h3 class="text-xl font-bold text-purple-200">🔑 Inti dari Dekomposisi</h3>
          <p class="text-slate-300">
            Dekomposisi adalah keterampilan inti dalam Computational Thinking yang memungkinkan seseorang menguraikan masalah besar menjadi bagian-bagian kecil yang saling berkaitan.
            Melalui proses ini, kompleksitas masalah dapat dikendalikan, dan solusi menjadi lebih terarah. Tidak hanya dalam dunia pemrograman, kemampuan ini juga sangat relevan dalam kehidupan nyata — mulai dari mengatur tugas sehari-hari hingga menyusun strategi dalam bekerja sama dengan tim.
          </p>
          <p class="text-slate-400 italic">
            Kemampuan untuk berpikir terstruktur dimulai dari keberanian untuk memecah tantangan menjadi bagian-bagian yang bisa dikelola.
          </p>
        </div>

        <!-- Penutup -->
        <div class="bg-[#1a162b] p-6 rounded-xl space-y-4">
          <h3 class="text-xl font-bold text-purple-200">📣 Penutup</h3>
          <p class="text-slate-200">
            Kita telah memahami bahwa dekomposisi bukan hanya teknik, melainkan keterampilan berpikir yang dapat diterapkan dalam berbagai aspek kehidupan.
            Dengan latihan dan kesadaran, kita dapat mengelola masalah dengan lebih terstruktur dan efisien.
          </p>
          <p class="text-slate-300 font-semibold">
            Mari kita lanjutkan ke topik berikutnya dan terus mengasah kemampuan berpikir kita. 🚀
          </p>
        </div>

        <!-- Tombol Lanjut ke Topik Berikutnya -->
        <div class="text-center mt-12">
          <button
            @click="goToNextTopic"
            class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-xl transition-all"
          >
            ➡️ Lanjut ke Topik Berikutnya: Pengenalan Pola
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

function goToNextTopic() {
  router.visit('/materi/pola/intro')
}
</script>
