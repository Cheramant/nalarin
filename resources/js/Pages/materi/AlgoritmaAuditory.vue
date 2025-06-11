<template>
  <MainLayout>
    <section class="min-h-screen py-20 px-6 md:px-20 bg-gradient-to-br from-purple-950 via-indigo-900 to-purple-950 text-white font-sans">
      <div class="max-w-5xl mx-auto">
        <div class="bg-white/10 backdrop-blur-xl p-10 rounded-3xl shadow-2xl border border-purple-500">
          <h1 class="text-3xl md:text-4xl font-bold mb-6 text-center text-purple-200 drop-shadow">🔊 Auditory: Memahami Algoritma Lewat Suara</h1>

          <p class="text-lg md:text-xl mb-8 text-center text-indigo-100 leading-relaxed">
            Pendekatan auditory membantu kamu memahami konsep melalui <strong>pendengaran</strong>. Dalam sesi ini, kamu akan mendengarkan penjelasan konsep <em>algoritma</em> dan bagaimana ia diterapkan untuk menyelesaikan masalah secara logis dan sistematis.
          </p>

          <div class="flex flex-col items-center mb-8">
            <div class="mb-4">
              <img src="/images/audio_wave.svg" alt="Audio Wave" class="w-32 md:w-40 opacity-80">
            </div>
            <audio controls class="w-full max-w-xl rounded-xl shadow-xl">
              <source src="/sounds/narasi4.mp3" type="audio/mpeg">
              Browser Anda tidak mendukung audio.
            </audio>
          </div>

          <div class="bg-indigo-800/50 rounded-xl p-6 text-white text-base md:text-lg leading-relaxed border-l-4 border-yellow-400">
            <p>
              🔉 <strong>Penjelasan Narasi:</strong> Algoritma adalah serangkaian langkah logis dan sistematis yang digunakan untuk menyelesaikan suatu masalah. Dalam kehidupan sehari-hari, kita sering menggunakannya tanpa sadar — seperti saat membuat kopi, menyalakan komputer, atau mengikuti resep memasak. Algoritma membantu kita berpikir runtut, efisien, dan menghindari kesalahan. Dalam dunia teknologi dan pemrograman, algoritma menjadi dasar dalam menyusun instruksi bagi komputer untuk menyelesaikan tugas-tugas tertentu.
            </p>
          </div>

          <!-- Quiz -->
          <div class="mt-10 bg-white/5 p-6 rounded-xl border border-purple-700">
            <p class="text-lg font-semibold text-white mb-4">🎯 Kuis: Manakah dari pernyataan berikut yang merupakan contoh algoritma?</p>
            <div class="space-y-3">
              <div>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" value="a" v-model="selectedAnswer" class="accent-green-500" />
                  Membaca buku tanpa urutan halaman.
                </label>
              </div>
              <div>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" value="b" v-model="selectedAnswer" class="accent-green-500" />
                  Mengisi gelas dengan air secara acak.
                </label>
              </div>
              <div>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" value="c" v-model="selectedAnswer" class="accent-green-500" />
                  Menyalakan komputer dengan langkah: tekan tombol power, tunggu loading, login ke akun.
                </label>
              </div>
              <div>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" value="d" v-model="selectedAnswer" class="accent-green-500" />
                  Bermain tanpa aturan.
                </label>
              </div>
            </div>
            <div v-if="showQuizFeedback" class="mt-4 font-bold text-lg" :class="isQuizCorrect ? 'text-green-400' : 'text-red-400'">
              {{ isQuizCorrect ? '✅ Jawaban benar!' : '❌ Jawaban masih salah. Coba lagi.' }}
            </div>
            <div class="mt-4">
              <button @click="checkQuizAnswer" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg shadow mr-4">Periksa Jawaban</button>
              <button :disabled="!isQuizCorrect" @click="goNext" class="px-6 py-2 rounded-lg text-white font-semibold" :class="isQuizCorrect ? 'bg-green-600 hover:bg-green-700' : 'bg-green-900 cursor-not-allowed'">
                Lanjutkan ke Visual ➡
              </button>
            </div>
          </div>

        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import MainLayout from '@/Layouts/MainLayout.vue'
import { router } from '@inertiajs/vue3'
import { ref } from 'vue'

const selectedAnswer = ref(null)
const showQuizFeedback = ref(false)
const isQuizCorrect = ref(false)

const checkQuizAnswer = () => {
  isQuizCorrect.value = selectedAnswer.value === 'c'
  showQuizFeedback.value = true
}

const goNext = () => {
  router.visit('/materi/algoritma/visual')
}
</script>

<style scoped>
ul li::marker {
  color: #facc15;
}
</style>
