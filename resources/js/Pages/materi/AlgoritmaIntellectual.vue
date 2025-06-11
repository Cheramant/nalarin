
<template>
  <MainLayout>
    <Head title="Desain Algoritma - Intellectual" />

    <section class="min-h-screen bg-gradient-to-br from-indigo-900 to-purple-800 text-white px-4 py-16">
      <div class="max-w-5xl mx-auto space-y-12">
        <!-- Header -->
        <div class="text-center space-y-4">
          <h1 class="text-4xl font-bold text-purple-200">🧠 Desain Algoritma - Intellectual</h1>
          <p class="text-lg text-slate-300">
            Mari kita telusuri logika dari penyusunan algoritma dengan pendekatan intelektual berbasis analisis.
          </p>
        </div>

        <!-- Penjelasan -->
        <div class="bg-[#2d1f4a] p-6 rounded-xl shadow space-y-4 text-white">
          <h2 class="text-xl font-semibold text-purple-300">🛠 Studi Kasus: Proses Login ke Website</h2>
          <p class="text-slate-200">
            Untuk masuk ke sebuah website, pengguna perlu mengikuti serangkaian langkah logis. Jika salah satu langkah tidak terpenuhi, maka proses tidak akan berjalan.
          </p>
          <ul class="list-disc list-inside space-y-1 text-slate-300">
            <li>1. Buka halaman login</li>
            <li>2. Masukkan username</li>
            <li>3. Masukkan password</li>
            <li>4. Klik tombol "Login"</li>
            <li>5. Sistem memverifikasi data</li>
            <li>6. Jika benar, pengguna diarahkan ke beranda</li>
            <li>7. Jika salah, tampilkan pesan kesalahan</li>
          </ul>
        </div>

        <!-- Aktivitas Pemahaman -->
        <div class="bg-[#39266c] p-6 rounded-xl shadow text-slate-100 space-y-4">
          <h2 class="text-lg font-semibold text-purple-300">🔍 Berdasarkan alur di atas, apa yang terjadi jika password salah?</h2>
          <div class="space-y-2">
            <label v-for="(opt, idx) in options" :key="idx" class="flex items-center space-x-2">
              <input type="radio" :value="opt" v-model="selected" class="form-radio text-purple-600" />
              <span>{{ opt }}</span>
            </label>
          </div>
          <div class="mt-4 space-x-4">
            <button @click="checkAnswer" class="px-4 py-2 bg-green-600 hover:bg-green-700 rounded">
              ✅ Cek Jawaban
            </button>
            <button
              @click="goToNext"
              :disabled="!isCorrect"
              class="px-4 py-2 bg-purple-700 hover:bg-purple-800 rounded disabled:opacity-50"
            >
              Lanjut ke Kesimpulan 📌
            </button>
          </div>
          <div class="pt-4 text-green-300 font-semibold" v-if="showFeedback && isCorrect">✅ Betul! Sistem akan menampilkan pesan kesalahan.</div>
          <div class="pt-4 text-red-300 font-semibold" v-if="showFeedback && !isCorrect">❌ Salah. Coba cermati lagi logikanya.</div>
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

const options = [
  'Pengguna langsung masuk ke halaman dashboard',
  'Sistem menampilkan pesan kesalahan',
  'Website melakukan refresh halaman',
  'Login tetap berhasil tanpa password'
]

const selected = ref('')
const showFeedback = ref(false)
const isCorrect = ref(false)

function checkAnswer() {
  isCorrect.value = selected.value === 'Sistem menampilkan pesan kesalahan'
  showFeedback.value = true
}

function goToNext() {
  if (isCorrect.value) {
    router.visit('/materi/algoritma/kesimpulan')
  }
}
</script>
