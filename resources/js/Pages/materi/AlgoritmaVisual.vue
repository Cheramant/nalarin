<template>
  <MainLayout>
    <section class="min-h-screen py-20 px-6 md:px-20 bg-gradient-to-br from-indigo-950 via-purple-900 to-indigo-950 text-white font-sans">
      <div class="max-w-6xl mx-auto">
        <div class="bg-white/10 backdrop-blur-xl p-10 rounded-3xl shadow-2xl border border-purple-500">

          <h1 class="text-3xl md:text-4xl font-bold mb-6 text-center text-purple-200 drop-shadow">🧩 Visual: Memahami Algoritma Lewat Gambar</h1>

          <p class="text-lg md:text-xl mb-10 text-center leading-relaxed text-indigo-100">
            Dalam pendekatan <strong>visual</strong>, kamu akan belajar memahami konsep algoritma dengan melihat representasi gambar berurutan yang menggambarkan proses langkah demi langkah. Visualisasi ini membantu kamu mengaitkan algoritma dengan kehidupan nyata secara konkret.
          </p>

          <!-- Ilustrasi Langkah Visual -->
          <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
            <div class="bg-purple-800/60 p-4 rounded-2xl text-center shadow-md">
              <img src="/images/alg1.png" alt="Langkah 1" class="w-30 h-30 mx-auto mb-2">
              <p class="text-white">1. Buka Aplikasi</p>
            </div>
            <div class="bg-purple-800/60 p-4 rounded-2xl text-center shadow-md">
              <img src="/images/alg2.png" alt="Langkah 2" class="w-30 h-30 mx-auto mb-2">
              <p class="text-white">2. Klik Tombol "Daftar"</p>
            </div>
            <div class="bg-purple-800/60 p-4 rounded-2xl text-center shadow-md">
              <img src="/images/alg3.png" alt="Langkah 3" class="w-30 h-30 mx-auto mb-2">
              <p class="text-white">3. Isi Formulir</p>
            </div>
            <div class="bg-purple-800/60 p-4 rounded-2xl text-center shadow-md">
              <img src="/images/alg4.png" alt="Langkah 4" class="w-30 h-30 mx-auto mb-2">
              <p class="text-white">4. Klik "Kirim"</p>
            </div>
          </div>

          <!-- Penjelasan -->
          <div class="bg-indigo-800/40 rounded-xl p-6 border-l-4 border-yellow-400 mb-8">
            <p class="text-base md:text-lg text-white">
              📌 <strong>Penjelasan:</strong> Seperti contoh di atas, algoritma dapat divisualisasikan sebagai urutan langkah bergambar. Ini sangat membantu untuk memahami alur logis dalam menyelesaikan suatu tugas, seperti mendaftar akun. Setiap gambar mewakili satu langkah algoritmik yang jelas dan berurutan.
            </p>
          </div>

          <!-- Kuis Interaktif -->
          <div class="bg-white/5 p-6 rounded-xl border border-purple-700">
            <p class="text-lg font-semibold text-white mb-4">🎯 Kuis: Manakah urutan algoritma yang benar untuk memesan makanan secara online?</p>
            <div class="space-y-3">
              <div>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" value="a" v-model="selectedAnswer" class="accent-green-500" />
                  Pilih makanan → Klik bayar → Buka aplikasi → Masukkan alamat
                </label>
              </div>
              <div>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" value="b" v-model="selectedAnswer" class="accent-green-500" />
                  Masukkan alamat → Pilih makanan → Klik bayar
                </label>
              </div>
              <div>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" value="c" v-model="selectedAnswer" class="accent-green-500" />
                  Buka aplikasi → Pilih makanan → Masukkan alamat → Klik bayar
                </label>
              </div>
              <div>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" value="d" v-model="selectedAnswer" class="accent-green-500" />
                  Klik bayar → Masukkan alamat → Buka aplikasi
                </label>
              </div>
            </div>
            <div v-if="showQuizFeedback" class="mt-4 font-bold text-lg" :class="isQuizCorrect ? 'text-green-400' : 'text-red-400'">
              {{ isQuizCorrect ? '✅ Jawaban benar!' : '❌ Jawaban masih salah. Coba lagi.' }}
            </div>
            <div class="mt-4">
              <button @click="checkQuizAnswer" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg shadow mr-4">Periksa Jawaban</button>
              <button :disabled="!isQuizCorrect" @click="goNext" class="px-6 py-2 rounded-lg text-white font-semibold" :class="isQuizCorrect ? 'bg-green-600 hover:bg-green-700' : 'bg-green-900 cursor-not-allowed'">
                Lanjutkan ke Intellectual ➡
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
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'

const selectedAnswer = ref(null)
const showQuizFeedback = ref(false)
const isQuizCorrect = ref(false)

const checkQuizAnswer = () => {
  isQuizCorrect.value = selectedAnswer.value === 'c'
  showQuizFeedback.value = true
}

const goNext = () => {
  router.visit('/materi/algoritma/intellectual')
}
</script>

<style scoped>
input[type="radio"]:checked + label {
  font-weight: bold;
}
</style>
