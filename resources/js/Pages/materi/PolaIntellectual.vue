
<template>
  <MainLayout>
    <Head title="Pola - Intellectual" />

    <section class="min-h-screen bg-gradient-to-br from-emerald-900 to-teal-700 text-white px-4 py-16">
      <div class="max-w-5xl mx-auto space-y-10">
        <!-- Header -->
        <header class="text-center">
          <h1 class="text-4xl font-bold text-emerald-200">🧠 Pola - Intellectual</h1>
          <p class="text-lg text-slate-200 mt-2">Gunakan kemampuan berpikir logis untuk mengidentifikasi pola berdasarkan data yang disajikan.</p>
        </header>

        <!-- Studi Kasus -->
        <div class="bg-[#12322c] p-6 rounded-xl space-y-4">
          <h2 class="text-xl font-semibold text-emerald-300">📋 Studi Kasus</h2>
          <p class="text-slate-300">
            Seorang siswa memiliki jadwal sebagai berikut:
          </p>
          <ul class="list-disc list-inside text-slate-200 space-y-1">
            <li>Senin: Upacara dan pelajaran penuh</li>
            <li>Selasa: Pelajaran penuh</li>
            <li>Rabu: Pelajaran + belajar kelompok sore</li>
            <li>Kamis: Pelajaran penuh</li>
            <li>Jumat: Pelajaran setengah hari + ekstrakurikuler</li>
            <li>Sabtu & Minggu: Kegiatan bebas</li>
          </ul>
          <p class="text-slate-300 pt-2">Analisis pola yang terjadi berdasarkan jadwal tersebut.</p>
        </div>

        <!-- Quiz -->
        <div class="bg-[#1a3a32] p-6 rounded-xl shadow space-y-4">
          <h2 class="text-xl font-semibold text-emerald-300">❓ Pertanyaan</h2>
          <p class="text-slate-200">Dari jadwal di atas, pola apa yang bisa disimpulkan dari hari Rabu dan Jumat?</p>

          <div class="space-y-2">
            <div
              v-for="(opt, idx) in options"
              :key="idx"
              class="px-4 py-2 rounded-lg cursor-pointer border transition"
              :class="selected === opt ? (isCorrectAnswer(opt) ? 'bg-green-600 border-green-700' : 'bg-red-600 border-red-700') : 'bg-teal-700 border-teal-600 hover:bg-teal-600'"
              @click="selectOption(opt)"
            >
              {{ opt }}
            </div>
          </div>

          <p v-if="selected && !isCorrectAnswer(selected)" class="text-red-300 mt-2">Jawaban belum tepat. Coba analisis ulang!</p>
        </div>

        <!-- Navigation -->
        <div class="text-center pt-6">
          <button
            @click="goToNext"
            class="px-6 py-3 bg-emerald-700 hover:bg-emerald-800 rounded-xl font-semibold transition disabled:opacity-50"
            :disabled="!isCorrectAnswer(selected)"
          >
            Lanjut ke Kesimpulan ➡️
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

const options = [
  'Hari Rabu dan Jumat adalah hari libur',
  'Rabu dan Jumat memiliki aktivitas tambahan rutin',
  'Rabu dan Jumat selalu ujian',
  'Rabu dan Jumat tidak memiliki pelajaran'
]
const correctAnswer = 'Rabu dan Jumat memiliki aktivitas tambahan rutin'

const selected = ref(null)

function selectOption(option) {
  selected.value = option
}

function isCorrectAnswer(option) {
  return option === correctAnswer
}

function goToNext() {
  if (isCorrectAnswer(selected.value)) {
    router.visit('/materi/pola/kesimpulan')
  }
}
</script>
