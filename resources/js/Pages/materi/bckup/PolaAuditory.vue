
<template>
  <MainLayout>
    <Head title="Pola - Auditory" />

    <section class="min-h-screen bg-gradient-to-br from-emerald-900 to-teal-700 text-white px-4 py-16">
      <div class="max-w-5xl mx-auto space-y-10">
        <!-- Header -->
        <header class="text-center">
          <h1 class="text-4xl font-bold text-emerald-200">🎧 Pola - Auditory</h1>
          <p class="text-lg text-slate-200 mt-2">Dengarkan narasi berikut dan pahami pola yang terjadi.</p>
        </header>

        <!-- Audio Player -->
        <div class="bg-[#1a3a32] p-6 rounded-xl shadow-md">
          <h2 class="text-xl font-semibold text-emerald-300 mb-3">🔊 Narasi Pola</h2>
          <audio controls class="w-full">
            <source src="/sounds/pattern-audio.mp3" type="audio/mpeg" />
            Browsermu tidak mendukung audio player.
          </audio>
        </div>

        <!-- Narasi Teks -->
        <div class="bg-[#12322c] p-6 rounded-xl space-y-4">
          <h2 class="text-xl font-semibold text-emerald-300">📝 Transkrip Narasi</h2>
          <p class="text-slate-200">
            Setiap hari Senin, siswa mengikuti upacara bendera. Pada hari Rabu sore, mereka rutin belajar kelompok di rumah salah satu teman.
            Lalu setiap Jumat sore, mereka mengikuti kegiatan ekstrakurikuler seperti Pramuka atau KIR. Sementara pada akhir pekan, mereka memiliki kegiatan bebas seperti bermain atau menghadiri acara keluarga.
            Dari kebiasaan tersebut, terlihat pola aktivitas yang berulang pada hari-hari tertentu.
          </p>
        </div>

        <!-- Quiz Section -->
        <div class="bg-[#1a3a32] p-6 rounded-xl shadow space-y-4">
          <h2 class="text-xl font-semibold text-emerald-300">❓ Pertanyaan</h2>
          <p class="text-slate-200">Manakah dari aktivitas berikut yang merupakan bagian dari pola rutin mingguan siswa?</p>

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

          <p v-if="selected && !isCorrectAnswer(selected)" class="text-red-300 mt-2">Jawaban belum tepat. Silakan coba lagi!</p>
        </div>

        <!-- Navigation -->
        <div class="text-center pt-6">
          <button
            @click="goToNext"
            class="px-6 py-3 bg-emerald-700 hover:bg-emerald-800 rounded-xl font-semibold transition disabled:opacity-50"
            :disabled="!isCorrectAnswer(selected)"
          >
            Lanjut ke Visual ➡️
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
  'Belajar kelompok setiap Rabu sore',
  'Mendadak ke pesta ulang tahun teman',
  'Berlibur ke luar kota',
  'Makan di restoran dengan keluarga'
]
const correctAnswer = 'Belajar kelompok setiap Rabu sore'

const selected = ref(null)

function selectOption(option) {
  selected.value = option
}

function isCorrectAnswer(option) {
  return option === correctAnswer
}

function goToNext() {
  if (isCorrectAnswer(selected.value)) {
    router.visit('/materi/pola/visual')
  }
}
</script>
