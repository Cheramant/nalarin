
<template>
  <MainLayout>
    <Head title="Dekomposisi - Visual" />

    <section class="min-h-screen bg-gradient-to-br from-purple-900 to-indigo-900 text-white py-16 px-4">
      <div class="max-w-6xl mx-auto space-y-12">
        <!-- Header -->
        <div class="text-center space-y-4">
          <h1 class="text-4xl font-bold text-purple-300">🖼️ Dekomposisi: Pendekatan Visual</h1>
          <p class="text-lg text-slate-200">Pahami materi dekomposisi dengan bantuan visualisasi menarik dan interaktif.</p>
        </div>

        <!-- Visual Illustration -->
        <div class="flex flex-col lg:flex-row items-center gap-8 bg-[#211c3a] p-6 rounded-xl shadow-lg">
          <img src="/images/visual1.png" alt="Ilustrasi Rutinitas Pagi" class="w-full max-w-md rounded-lg shadow-md" />
          <div class="space-y-4">
            <h2 class="text-2xl font-semibold text-purple-200">Visualisasi Dekomposisi</h2>
            <p class="text-slate-100">
              Dengan pendekatan visual, kita dapat memetakan bagian-bagian kecil dari sebuah masalah menggunakan gambar atau diagram.
              Seperti pada contoh rutinitas pagi ini, kamu bisa melihat bagaimana satu kegiatan besar dipecah menjadi langkah-langkah kecil
              yang saling berurutan namun dapat dipahami dengan cepat secara visual.
            </p>
            <p class="text-slate-400 italic">Visual membantu otak mengenali pola dan struktur dengan lebih efektif.</p>
            <p class="text-slate-300 text-sm mt-2">
              🔍 Gambar di samping menunjukkan aktivitas seperti bangun tidur, mandi, sarapan, dan berangkat sekolah.
              Setiap kegiatan tersebut adalah bagian kecil dari satu proses besar — inilah inti dari dekomposisi:
              <strong>memecah masalah kompleks menjadi bagian yang lebih sederhana dan terstruktur.</strong>
            </p>
          </div>
        </div>

        <!-- Quiz Interaktif -->
        <div class="bg-[#2a2346] p-6 rounded-xl mt-12">
          <h3 class="text-xl font-bold text-purple-200 mb-4">🧠 Kuis Cepat</h3>
          <p class="text-slate-100 mb-4">Manakah pilihan yang merupakan contoh penerapan dekomposisi?</p>

          <div class="space-y-2">
            <button @click="checkAnswer('a')" :class="buttonClass('a')" class="block w-full text-left px-4 py-2 rounded-lg border border-purple-700 hover:bg-purple-800">a. Menghafal seluruh rutinitas sekaligus</button>
            <button @click="checkAnswer('b')" :class="buttonClass('b')" class="block w-full text-left px-4 py-2 rounded-lg border border-purple-700 hover:bg-purple-800">b. Membagi rutinitas pagi menjadi beberapa langkah kecil</button>
            <button @click="checkAnswer('c')" :class="buttonClass('c')" class="block w-full text-left px-4 py-2 rounded-lg border border-purple-700 hover:bg-purple-800">c. Menyalin rutinitas orang lain tanpa memahami langkahnya</button>
            <button @click="checkAnswer('d')" :class="buttonClass('d')" class="block w-full text-left px-4 py-2 rounded-lg border border-purple-700 hover:bg-purple-800">d. Menghindari membuat daftar langkah-langkah kegiatan</button>
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
            Lanjutkan ke Intellectual ➡️
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
  if (option === 'b') {
    feedback.value = '✅ Jawaban benar! Kamu sudah memahami konsep dekomposisi.'
    quizPassed.value = true
  } else {
    feedback.value = '❌ Jawaban belum tepat. Coba lagi ya.'
    quizPassed.value = false
  }
}

function buttonClass(option) {
  if (!selected.value) return ''
  if (option === selected.value) {
    return option === 'b' ? 'bg-green-700 text-white' : 'bg-red-700 text-white'
  }
  return ''
}

function feedbackClass() {
  return quizPassed.value ? 'text-green-400' : 'text-red-400'
}

function goToNext() {
  router.visit('/materi/dekomposisi/intellectual')
}
</script>
