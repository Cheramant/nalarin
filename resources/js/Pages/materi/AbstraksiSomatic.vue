
<template>
  <MainLayout>
    <Head title="Abstraksi - Somatic" />

    <section class="min-h-screen bg-gradient-to-br from-rose-900 to-rose-800 text-white px-4 py-16">
      <div class="max-w-5xl mx-auto space-y-12">
        <!-- Header -->
        <header class="text-center space-y-4">
          <h1 class="text-4xl font-bold text-rose-200">📚 Abstraksi - Somatic</h1>
          <p class="text-lg text-neutral-200">
            Abstraksi adalah kemampuan untuk menyaring informasi penting dan mengabaikan yang tidak relevan.
            Dalam dunia nyata, ini penting agar kita tidak tenggelam dalam detail yang tidak perlu.
          </p>
        </header>

        <!-- Studi Kasus -->
        <div class="bg-[#2d1f4a] p-6 rounded-xl shadow space-y-4">
          <h2 class="text-xl font-semibold text-rose-300">🧠 Studi Kasus</h2>
          <p class="text-neutral-300">
            Kamu sedang mengembangkan sebuah <strong class="text-rose-200">aplikasi manajemen waktu belajar</strong> untuk siswa.
            Banyak sekali informasi tersedia, tetapi hanya beberapa yang benar-benar diperlukan agar aplikasi tersebut bermanfaat dan tidak membingungkan.
            Pilih informasi yang relevan untuk fitur utama.
          </p>
        </div>

        <!-- Drag and Drop Interface -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Sumber Informasi -->
          <div>
            <h3 class="text-lg font-semibold text-rose-300 mb-2">📦 Informasi yang Tersedia</h3>
            <div class="space-y-2">
              <div
                v-for="(item, index) in items"
                :key="index"
                class="bg-[#3f2f6a] px-4 py-2 rounded shadow-md cursor-grab hover:scale-105 transition"
                draggable="true"
                @dragstart="startDrag(index)"
              >
                {{ item.text }}
              </div>
            </div>
          </div>

          <!-- Drop Area -->
          <div>
            <h3 class="text-lg font-semibold text-rose-300 mb-2">🎯 Fitur Inti Aplikasi</h3>
            <div
              class="min-h-[200px] bg-rose-950 p-4 rounded-xl border-2 border-dashed border-rose-400"
              @dragover.prevent
              @drop="onDrop"
            >
              <div
                v-for="(item, index) in droppedItems"
                :key="'dropped-' + index"
                class="bg-rose-800 p-3 rounded-lg mb-2 shadow-md"
              >
                {{ item.text }}
              </div>
              <p v-if="droppedItems.length === 0" class="text-neutral-400 italic">Seret item penting ke sini</p>
            </div>
          </div>
        </div>

        <!-- Feedback dan Tombol -->
        <div class="text-center pt-8 space-y-4">
          <div v-if="showFeedback && isCorrect" class="text-rose-300 font-semibold">✅ Bagus! Semua informasi yang kamu pilih relevan.</div>
          <div v-if="showFeedback && !isCorrect" class="text-red-300 font-semibold">❌ Ada informasi yang kurang tepat. Coba lagi.</div>

          <div class="space-x-4">
            <button @click="reset" class="px-4 py-2 bg-rose-600 hover:bg-rose-700 rounded">🔄 Reset</button>
            <button @click="checkAnswer" class="px-4 py-2 bg-rose-600 hover:bg-rose-700 rounded">✅ Cek Jawaban</button>
            <button
              @click="goToNext"
              :disabled="!isCorrect"
              class="px-4 py-2 bg-rose-700 hover:bg-rose-800 rounded disabled:opacity-50"
            >
              Lanjut ke Auditory 🎧
            </button>
          </div>
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

const items = ref([
  { text: 'Jadwal belajar harian' },
  { text: 'Foto profil pengguna' },
  { text: 'Notifikasi pengingat waktu belajar' },
  { text: 'Warna tema aplikasi' },
  { text: 'Catatan belajar mingguan' },
  { text: 'Link ke media sosial' },
  { text: 'Durasi fokus dan jeda waktu' }
])

const correctKeywords = ['jadwal', 'notifikasi', 'catatan', 'durasi']
const droppedItems = ref([])
const draggedIndex = ref(null)
const showFeedback = ref(false)
const isCorrect = ref(false)

function startDrag(index) {
  draggedIndex.value = index
  new Audio('/sounds/drag.mp3').play()
}

function onDrop() {
  const item = items.value[draggedIndex.value]
  if (!droppedItems.value.includes(item)) {
    droppedItems.value.push(item)
    new Audio('/sounds/drop.mp3').play()
  }
}

function reset() {
  droppedItems.value = []
  showFeedback.value = false
  isCorrect.value = false
}

function checkAnswer() {
  const texts = droppedItems.value.map(i => i.text.toLowerCase())
  const filtered = correctKeywords.every(keyword =>
    texts.some(t => t.includes(keyword))
  )
  isCorrect.value = filtered && texts.length === correctKeywords.length
  showFeedback.value = true
}

function goToNext() {
  if (isCorrect.value) {
    router.visit('/materi/abstraksi/auditory')
  }
}
</script>
