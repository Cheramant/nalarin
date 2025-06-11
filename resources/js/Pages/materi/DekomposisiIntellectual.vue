
<template>
  <MainLayout>
    <Head title="Dekomposisi - Intellectual" />

    <section class="min-h-screen bg-gradient-to-br from-indigo-950 to-purple-900 text-white py-16 px-4">
      <div class="max-w-5xl mx-auto space-y-12">

        <!-- Header -->
        <div class="text-center space-y-4">
          <h1 class="text-4xl font-bold text-purple-300">🧠 Dekomposisi: Pendekatan Intellectual</h1>
          <p class="text-lg text-slate-200">Pahami konsep dekomposisi melalui pemikiran kritis dan reflektif.</p>
        </div>

        <!-- Penjelasan Konsep Intellectual -->
        <div class="bg-[#261f3f] p-6 rounded-xl shadow-lg space-y-4">
          <h2 class="text-xl font-semibold text-purple-200">Apa itu Dekomposisi secara Intelektual?</h2>
          <p class="text-slate-100">
            Dekomposisi dilihat dari sudut pandang intelektual adalah proses berpikir logis dan sistematis dalam membagi sebuah masalah besar menjadi bagian-bagian kecil yang saling berhubungan dan lebih mudah dianalisis. Ini bukan hanya tentang membagi masalah, tetapi juga menentukan alasan, tujuan, dan cara terbaik menangani tiap bagian.
          </p>
          <p class="text-slate-300 italic">Contoh: Saat kamu mengerjakan proyek besar, kamu tidak langsung mulai, tapi kamu pikirkan dulu strategi dan susunan tugasnya — inilah cara berpikir intelek dalam memahami dekomposisi.</p>
        </div>

        <!-- Studi Mini -->
        <div class="bg-[#2e274e] p-6 rounded-xl space-y-4">
          <h3 class="text-xl font-bold text-purple-200">🔍 Studi Mini</h3>
          <p class="text-slate-100">Skenario: Kamu memiliki proyek membuat aplikasi inventaris sekolah dalam 1 minggu. Apa strategi intelektual terbaik?</p>
          <ul class="list-disc list-inside space-y-2 text-slate-200">
            <li>Menganalisis kebutuhan pengguna</li>
            <li>Merancang modul-modul utama aplikasi (login, data barang, laporan)</li>
            <li>Menentukan prioritas pengerjaan</li>
            <li>Mengatur pembagian waktu dan sumber daya</li>
          </ul>
          <p class="text-slate-400">Langkah-langkah di atas dihasilkan dari proses berpikir yang sistematis dan reflektif.</p>
        </div>

        <!-- Kuis Intellectual -->
        <div class="bg-[#221b3d] p-6 rounded-xl mt-12">
          <h3 class="text-xl font-bold text-purple-200 mb-4">🧠 Kuis Pemahaman</h3>
          <p class="text-slate-100 mb-4">Mengapa penting menggunakan pendekatan intelektual dalam dekomposisi?</p>

          <div class="space-y-2">
            <button @click="checkAnswer('a')" :class="buttonClass('a')" class="block w-full text-left px-4 py-2 rounded-lg border border-purple-700 hover:bg-purple-800">a. Agar masalah bisa dibagi secara acak</button>
            <button @click="checkAnswer('b')" :class="buttonClass('b')" class="block w-full text-left px-4 py-2 rounded-lg border border-purple-700 hover:bg-purple-800">b. Agar dapat menyelesaikan masalah tanpa berpikir</button>
            <button @click="checkAnswer('c')" :class="buttonClass('c')" class="block w-full text-left px-4 py-2 rounded-lg border border-purple-700 hover:bg-purple-800">c. Agar solusi dapat disusun secara terstruktur dan efisien</button>
            <button @click="checkAnswer('d')" :class="buttonClass('d')" class="block w-full text-left px-4 py-2 rounded-lg border border-purple-700 hover:bg-purple-800">d. Supaya tidak perlu evaluasi hasil</button>
          </div>

          <p v-if="feedback" class="mt-4 font-semibold text-sm" :class="feedbackClass">{{ feedback }}</p>
        </div>

        <!-- Tombol Lanjut -->
        <div class="text-center mt-8">
          <button
            class="mt-6 px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white rounded-xl disabled:opacity-50 disabled:cursor-not-allowed"
            :disabled="!quizPassed"
            @click="goToNext"
          >
            Lanjutkan ke Kesimpulan ➡️
          </button>
        </div>

      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'

const selected = ref('')
const feedback = ref('')
const quizPassed = ref(false)

function checkAnswer(option) {
  selected.value = option
  if (option === 'c') {
    feedback.value = '✅ Jawaban benar! Pendekatan intelektual membantu menyusun solusi secara terstruktur.'
    quizPassed.value = true
  } else {
    feedback.value = '❌ Jawaban belum tepat. Yuk pikirkan kembali.'
    quizPassed.value = false
  }
}

function buttonClass(option) {
  if (!selected.value) return ''
  if (option === selected.value) {
    return option === 'c' ? 'bg-green-700 text-white' : 'bg-red-700 text-white'
  }
  return ''
}

function feedbackClass() {
  return quizPassed.value ? 'text-green-400' : 'text-red-400'
}

function goToNext() {
  router.visit('/materi/dekomposisi/kesimpulan')
}
</script>
