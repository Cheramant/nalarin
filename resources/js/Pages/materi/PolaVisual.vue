<template>
  <MainLayout>
    <section class="min-h-screen bg-gradient-to-br from-emerald-900 to-teal-700 text-white px-4 py-16">
      <div class="max-w-6xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-extrabold text-center mb-6 text-white drop-shadow">🖼️ Visual: Pengenalan Pola</h1>
        <p class="text-center text-lg md:text-xl text-white/90 mb-12 leading-relaxed">
          Dalam Computational Thinking, mengenali pola membantu kita memahami struktur yang berulang agar solusi bisa diterapkan secara efisien.
        </p>

        <img src="/images/pola-visual.png" alt="Visual Pola" class="rounded-2xl shadow-2xl w-full max-w-4xl mx-auto mb-12 ring-2 ring-white/20" />

        <div class="grid md:grid-cols-3 gap-6 mb-16">
          <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl shadow-md hover:scale-[1.02] transition-all">
            <h2 class="text-xl font-semibold text-teal-100 mb-3">Pola Kelipatan 2</h2>
            <p class="text-white/80">
              Contoh: 2, 4, 6, 8. Kita bisa melihat bahwa setiap angka bertambah 2 dari angka sebelumnya. Ini adalah pola kelipatan 2.
            </p>
          </div>
          <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl shadow-md hover:scale-[1.02] transition-all">
            <h2 class="text-xl font-semibold text-teal-100 mb-3">Pola Bilangan Ganjil</h2>
            <p class="text-white/80">
              Contoh: 1, 3, 5, 7. Angka-angka ini membentuk pola bilangan ganjil karena semuanya tidak habis dibagi 2.
            </p>
          </div>
          <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl shadow-md hover:scale-[1.02] transition-all">
            <h2 class="text-xl font-semibold text-teal-100 mb-3">Pola Bentuk</h2>
            <p class="text-white/80">
              Selain angka, pola juga bisa ditemukan dalam bentuk visual. Contoh: ● ● ● ▢ ▢ ▢, menunjukkan pergantian bentuk setelah tiga kali.
            </p>
          </div>
        </div>

        <!-- Quiz Interaktif -->
        <div class="bg-white/10 backdrop-blur p-6 rounded-2xl shadow-lg">
          <h2 class="text-3xl font-bold text-white mb-6">Quiz Interaktif</h2>
          <p class="text-white/90 text-lg mb-6">Manakah dari pilihan berikut yang termasuk pola bilangan ganjil?</p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <button @click="checkAnswer('A')" :class="buttonClass('A')" class="transition-all px-4 py-3 rounded-xl shadow bg-white/10 hover:bg-teal-600 text-left">
              A. 2, 4, 6, 8
            </button>
            <button @click="checkAnswer('B')" :class="buttonClass('B')" class="transition-all px-4 py-3 rounded-xl shadow bg-white/10 hover:bg-teal-600 text-left">
              B. 1, 3, 5, 7
            </button>
            <button @click="checkAnswer('C')" :class="buttonClass('C')" class="transition-all px-4 py-3 rounded-xl shadow bg-white/10 hover:bg-teal-600 text-left">
              C. 10, 20, 30, 40
            </button>
            <button @click="checkAnswer('D')" :class="buttonClass('D')" class="transition-all px-4 py-3 rounded-xl shadow bg-white/10 hover:bg-teal-600 text-left">
              D. 5, 10, 15, 20
            </button>
          </div>

          <p v-if="feedback" class="mt-6 text-lg font-semibold" :class="feedbackColor">
            {{ feedback }}
          </p>
          <div class="text-center">
          <button
            class="mt-8 px-6 py-3 rounded-xl text-white font-bold bg-green-500 hover:bg-green-600 transition disabled:opacity-50"
            :disabled="!isCorrect"
            @click="$inertia.visit('/materi/pola/intellectual')"
          >
            Lanjutkan
          </button>
          </div>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import MainLayout from '@/Layouts/MainLayout.vue'
import { ref, computed } from 'vue'

const selected = ref(null)
const feedback = ref('')
const isCorrect = ref(false)

function checkAnswer(option) {
  selected.value = option
  if (option === 'B') {
    feedback.value = 'Benar! 1, 3, 5, 7 adalah pola bilangan ganjil.'
    isCorrect.value = true
  } else {
    feedback.value = 'Jawaban kurang tepat. Coba lagi!'
    isCorrect.value = false
  }
}

function buttonClass(option) {
  if (!selected.value) return ''
  if (option === selected.value) {
    return option === 'B' ? 'bg-green-600 text-white' : 'bg-red-600 text-white'
  }
  return ''
}

const feedbackColor = computed(() => {
  return isCorrect.value ? 'text-green-300' : 'text-red-400'
})
</script>
