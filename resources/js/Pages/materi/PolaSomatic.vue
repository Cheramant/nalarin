
<template>
  <MainLayout>
    <Head title="Pola - Somatic" />

    <section class="min-h-screen bg-gradient-to-br from-emerald-900 to-teal-700 text-white px-4 py-16">
      <div class="max-w-6xl mx-auto space-y-10">
        <!-- Header -->
        <header class="text-center space-y-3">
          <h1 class="text-4xl font-bold text-emerald-200">🔁 Pengenalan Pola - Aktivitas Somatik</h1>
          <p class="text-lg text-slate-200">Temukan kegiatan yang berulang dalam kehidupan siswa setiap minggu. Seret dan lepas ke dalam zona jawaban.</p>
        </header>

        <!-- Studi Kasus -->
        <div class="bg-[#162e29] p-6 rounded-xl shadow-md space-y-4">
          <h2 class="text-xl font-semibold text-emerald-300">📅 Studi Kasus:</h2>
          <p class="text-slate-300">Berikut adalah aktivitas yang dilakukan siswa SMK dalam seminggu. Temukan yang termasuk dalam pola berulang.</p>
        </div>

        <!-- Drag and Drop Area -->
        <div class="space-y-8">
          <!-- Options -->
          <div class="flex flex-wrap justify-center gap-4">
            <div
              v-for="(item, index) in options"
              :key="index"
              class="bg-teal-600 hover:bg-teal-500 text-white px-5 py-3 rounded-xl shadow-lg cursor-grab transition-all duration-200 active:scale-95"
              draggable="true"
              @dragstart="startDrag($event, item)"
            >
              {{ item }}
            </div>
          </div>

          <!-- Drop Zone -->
          <div
            class="min-h-[140px] bg-[#1a3a32] border-2 border-dashed border-emerald-400 rounded-xl p-6 flex flex-wrap justify-start items-center gap-3 transition-all duration-300"
            @dragover.prevent
            @drop="handleDrop"
          >
            <div v-if="answers.length === 0" class="text-slate-400 italic">Tarik ke sini untuk menjawab...</div>
            <div
              v-for="(ans, idx) in answers"
              :key="'ans-' + idx"
              class="bg-emerald-600 px-4 py-2 rounded-xl shadow text-white animate-fadeIn"
            >
              {{ ans }}
            </div>
          </div>

          <!-- Reset -->
          <div class="text-center">
            <button
              @click="resetAnswers"
              class="mt-4 px-6 py-2 bg-emerald-700 hover:bg-emerald-800 rounded text-white font-semibold transition"
            >
              🔁 Reset
            </button>
          </div>
        </div>

        <!-- Navigation Button -->
        <div class="text-center pt-10">
          <button
            @click="goToNext"
            class="px-6 py-3 bg-emerald-700 hover:bg-emerald-800 text-white font-semibold rounded-xl transition disabled:opacity-50"
            :disabled="!isCorrect"
          >
            Lanjut ke Auditory ➡️
          </button>
          <p v-if="answers.length > 0 && !isCorrect" class="text-red-300 mt-2">💡 Jawaban masih belum benar. Coba lagi ya!</p>
        </div>
      </div>

      <!-- Sound Elements -->
      <audio ref="dragSound" src="/sounds/drag.mp3"></audio>
      <audio ref="dropSound" src="/sounds/drop.mp3"></audio>
    </section>
  </MainLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { ref, computed, onMounted } from 'vue'
import { router } from '@inertiajs/vue3'

const options = [
  'Upacara hari Senin',
  'Ulangan harian dadakan',
  'Ekstrakurikuler pramuka hari Jumat',
  'Pergi ke acara ulang tahun teman',
  'Belajar kelompok setiap Rabu sore',
  'Kegiatan gotong royong dadakan'
]
const correctAnswers = [
  'Upacara hari Senin',
  'Ekstrakurikuler pramuka hari Jumat',
  'Belajar kelompok setiap Rabu sore'
]

const draggedItem = ref(null)
const answers = ref([])
const dragSound = ref(null)
const dropSound = ref(null)

function startDrag(event, item) {
  draggedItem.value = item
  dragSound.value?.play()
}

function handleDrop() {
  if (draggedItem.value && !answers.value.includes(draggedItem.value)) {
    answers.value.push(draggedItem.value)
    dropSound.value?.play()
  }
}

function resetAnswers() {
  answers.value = []
}

const isCorrect = computed(() => {
  return (
    answers.value.length === correctAnswers.length &&
    correctAnswers.every((item) => answers.value.includes(item))
  )
})

function goToNext() {
  if (isCorrect.value) {
    router.visit('/materi/pola/auditory')
  }
}
</script>

<style scoped>
@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.9); }
  to { opacity: 1; transform: scale(1); }
}
.animate-fadeIn {
  animation: fadeIn 0.3s ease-in-out;
}
</style>
