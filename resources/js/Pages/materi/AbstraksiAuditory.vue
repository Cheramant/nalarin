
<template>
  <MainLayout>
    <Head title="Abstraksi - Auditory" />
    <section class="min-h-screen bg-gradient-to-br from-rose-900 to-rose-800 text-white px-4 py-16">
      <div class="max-w-4xl mx-auto space-y-12">

        <!-- Judul -->
        <header class="text-center space-y-4">
          <h1 class="text-4xl font-bold text-rose-200">🎧 Abstraksi - Auditory</h1>
          <p class="text-lg text-neutral-200">Memahami inti dari permasalahan melalui suara dan penjelasan verbal.</p>
        </header>

        <!-- Penjelasan Audio -->
        <div class="bg-[#261b3f] p-6 rounded-xl space-y-4 shadow-lg">
          <h2 class="text-xl font-semibold text-rose-300">🔊 Penjelasan Audio</h2>
          <audio controls class="w-full rounded">
            <source src="/sounds/narasi3.mp3" type="audio/mpeg" />
            Browser Anda tidak mendukung pemutar audio.
          </audio>
          <p class="text-neutral-300">
            Audio ini berisi penjelasan mengenai konsep abstraksi dan bagaimana penerapannya dalam kehidupan sehari-hari maupun pemrograman.
          </p>
        </div>

        <!-- Narasi Teks -->
        <div class="bg-[#2d1f4a] p-6 rounded-xl shadow space-y-3">
          <h2 class="text-xl font-semibold text-rose-300">📖 Narasi Teks</h2>
          <p class="text-neutral-300">
            Abstraksi membantu kita menyederhanakan suatu masalah dengan hanya mengambil informasi penting, dan mengabaikan detail yang tidak relevan.
            Contohnya, saat menggunakan aplikasi, kita tidak melihat proses teknis di baliknya, hanya tampilan yang mudah digunakan.
          </p>
          <p class="text-neutral-300">
            Dalam kehidupan sehari-hari, kita juga menerapkan abstraksi, seperti saat membaca jadwal atau peta. Kita hanya fokus pada informasi yang dibutuhkan, bukan keseluruhan detail.
          </p>
        </div>

        <!-- Quiz Interaktif -->
        <div class="bg-[#261b3f] p-6 rounded-xl space-y-4 shadow-lg">
          <h2 class="text-xl font-semibold text-rose-300">🧪 Kuis Interaktif</h2>
          <p class="text-neutral-300">Pilih jawaban yang paling tepat untuk memahami pemahamanmu tentang abstraksi:</p>

          <div class="mt-4 space-y-3">
            <div
              v-for="(option, index) in options"
              :key="index"
              class="border border-rose-600 rounded-lg p-3 cursor-pointer hover:bg-rose-700 transition-all"
              :class="{
                'bg-rose-600 text-white': selected === option.value && option.value === 'b',
                'bg-red-600 text-white': selected === option.value && option.value !== 'b'
              }"
              @click="checkAnswer(option.value)"
            >
              {{ option.label }}
            </div>
            <p v-if="feedback" class="mt-3 text-sm" :class="feedbackColor">{{ feedback }}</p>
          </div>
        </div>

        <!-- Navigasi -->
        <div class="text-right">
          <button :disabled="!isCorrect" class="mt-4 bg-rose-600 hover:bg-rose-700 disabled:bg-neutral-500 text-white font-semibold py-2 px-6 rounded-full transition-all duration-300" @click="goNext">
            Lanjut ke Visual →
          </button>
        </div>

      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { Head } from '@inertiajs/vue3'

const feedback = ref('')
const feedbackColor = ref('')
const selected = ref('')
const isCorrect = ref(false)

const options = [
  { label: ' Menyusun ulang data menjadi bentuk visual.', value: 'a' },
  { label: ' Mengambil informasi penting dan mengabaikan detail yang tidak relevan.', value: 'b' },
  { label: ' Memecah masalah menjadi bagian kecil.', value: 'c' }
]

function checkAnswer(value) {
  selected.value = value
  if (value === 'b') {
    feedback.value = '✅ Benar! Abstraksi fokus pada informasi penting dan mengabaikan yang tidak relevan.'
    feedbackColor.value = 'text-rose-400'
    isCorrect.value = true
  } else {
    feedback.value = '❌ Kurang tepat. Coba baca lagi narasi di atas.'
    feedbackColor.value = 'text-red-400'
    isCorrect.value = false
  }
}

function goNext() {
  router.visit('/materi/abstraksi/visual')
}
</script>
