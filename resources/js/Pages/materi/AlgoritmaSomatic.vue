<template>
  <MainLayout>
    <section class="min-h-screen py-20 px-6 md:px-16 bg-gradient-to-br from-indigo-900 via-purple-800 to-indigo-900 text-white">
      <div class="max-w-5xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-center">🧠 Somatic Activity: Merancang Algoritma</h1>
        <p class="text-lg md:text-xl mb-10 text-center leading-relaxed">
          Dalam kehidupan sehari-hari, kita sering melakukan tindakan berdasarkan urutan langkah-langkah tertentu. Itulah yang disebut <span class="font-bold">algoritma</span> — serangkaian instruksi logis untuk menyelesaikan suatu masalah atau tugas. <br>
          Kali ini, kamu akan menyusun algoritma untuk menyelesaikan masalah berikut:
        </p>

        <div class="text-center text-xl mb-10">
          🔌 <span class="italic font-semibold">"Bagaimana cara menyalakan lampu dengan saklar?"</span>
        </div>

        <!-- Drop Zone -->
        <div class="bg-white text-gray-800 rounded-3xl shadow-2xl p-6 md:p-10 mb-8 min-h-[200px] border-4 border-dashed border-indigo-500">
          <draggable
            v-model="droppedItems"
            group="steps"
            item-key="id"
            class="flex flex-wrap gap-4 justify-center w-full min-h-[100px]"
          >
            <template #item="{ element }">
              <div class="px-4 py-3 bg-purple-600 hover:bg-purple-700 text-white text-base rounded-xl shadow cursor-pointer transition duration-200">
                {{ element.text }}
              </div>
            </template>
          </draggable>
        </div>

        <!-- Drag Items -->
        <div class="flex flex-wrap gap-4 justify-center bg-purple-700/60 backdrop-blur-md p-4 rounded-3xl shadow-lg mb-8">
          <draggable
            v-model="dragItems"
            group="steps"
            item-key="id"
            class="flex flex-wrap gap-4 justify-center"
            @start="playDragSound"
            @end="playDropSound"
          >
            <template #item="{ element }">
              <div class="px-4 py-3 bg-indigo-500 hover:bg-indigo-600 text-white text-base rounded-xl shadow cursor-move transition duration-200">
                {{ element.text }}
              </div>
            </template>
          </draggable>
        </div>

        <!-- Feedback -->
        <div v-if="showFeedback" class="text-center mb-6">
          <div v-if="isCorrect" class="text-green-400 text-xl font-semibold">✅ Jawaban Benar! Kamu telah menyusun algoritma dengan tepat.</div>
          <div v-else class="text-red-400 text-xl font-semibold">❌ Masih kurang tepat. Coba periksa kembali urutan langkahmu.</div>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-center gap-4">
          <button @click="checkAnswer" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 rounded-xl shadow text-white text-lg font-semibold">Periksa Jawaban</button>
          <button @click="resetItems" class="px-6 py-3 bg-gray-500 hover:bg-gray-600 rounded-xl shadow text-white text-lg font-semibold">Reset</button>
          <button :disabled="!isCorrect" @click="goNext" class="px-6 py-3 rounded-xl shadow text-white text-lg font-semibold" :class="isCorrect ? 'bg-green-600 hover:bg-green-700' : 'bg-green-900 cursor-not-allowed'">
            Lanjutkan ➡
          </button>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import MainLayout from '@/Layouts/MainLayout.vue'
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'
import draggable from 'vuedraggable'

const dragItems = ref([
  { id: 1, text: 'Arahkan tangan ke saklar' },
  { id: 2, text: 'Tekan saklar ke posisi ON' },
  { id: 3, text: 'Arus listrik mengalir' },
  { id: 4, text: 'Lampu menyala' },
  { id: 5, text: 'Ambil remote TV' }, // distraktor
  { id: 6, text: 'Buka jendela kamar' }, // distraktor
])

const correctSequence = [
  'Arahkan tangan ke saklar',
  'Tekan saklar ke posisi ON',
  'Arus listrik mengalir',
  'Lampu menyala',
]

const droppedItems = ref([])
const isCorrect = ref(false)
const showFeedback = ref(false)

const checkAnswer = () => {
  const current = droppedItems.value.map(item => item.text)
  isCorrect.value = JSON.stringify(current) === JSON.stringify(correctSequence)
  showFeedback.value = true
}

const resetItems = () => {
  dragItems.value = [...dragItems.value, ...droppedItems.value]
  droppedItems.value = []
  showFeedback.value = false
  isCorrect.value = false
}

const goNext = () => {
  router.visit('/materi/algoritma/auditory')
}

const playDragSound = () => {
  new Audio('/sounds/drag.mp3').play()
}

const playDropSound = () => {
  new Audio('/sounds/drop.mp3').play()
}
</script>

<style scoped>
.draggable-container {
  min-height: 100px;
}
</style>
