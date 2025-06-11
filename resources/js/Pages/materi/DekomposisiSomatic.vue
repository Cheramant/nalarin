<template>
  <MainLayout>
    <Head title="Dekomposisi - Somatic" />

    <section class="min-h-screen bg-gradient-to-br from-indigo-950 to-purple-950 text-white px-4 py-16">
      <div class="max-w-6xl mx-auto space-y-10">
        <header class="text-center space-y-3">
          <h1 class="text-4xl font-bold text-purple-300">🌅 Dekomposisi: Aktivitas Somatik</h1>
          <p class="text-lg text-slate-200">Seret bagian penting dari rutinitas pagi ke kolom jawaban. Fokus pada langkah-langkah yang efektif.</p>
        </header>

        <!-- Drag and Drop Area -->
        <div class="bg-[#1f1b2e] p-6 rounded-xl shadow-md space-y-6">
          <div>
            <h2 class="text-xl font-semibold text-purple-200 mb-2">🔍 Masalah: Rutinitas Pagi Sebelum Berangkat Sekolah</h2>
            <p class="text-slate-300">Pilih dan seret hanya langkah yang masuk akal dan relevan untuk rutinitas pagi sebelum berangkat ke sekolah.</p>
          </div>

          <div class="flex flex-col md:flex-row gap-6">
            <!-- Pilihan -->
            <div class="flex-1">
              <h3 class="text-lg font-semibold mb-2">Pilihan Konten</h3>
              <ul class="bg-slate-800 p-4 rounded-lg min-h-[200px] space-y-2" id="options">
                <li class="draggable bg-purple-700 p-3 rounded-lg cursor-move">Bangun tidur</li>
                <li class="draggable bg-purple-700 p-3 rounded-lg cursor-move">Main game 1 jam</li>
                <li class="draggable bg-purple-700 p-3 rounded-lg cursor-move">Mandi pagi</li>
                <li class="draggable bg-purple-700 p-3 rounded-lg cursor-move">Scroll TikTok sampai lupa waktu</li>
                <li class="draggable bg-purple-700 p-3 rounded-lg cursor-move">Sarapan</li>
                <li class="draggable bg-purple-700 p-3 rounded-lg cursor-move">Mempersiapkan buku dan seragam</li>
              </ul>
            </div>

            <!-- Jawaban -->
            <div class="flex-1">
              <h3 class="text-lg font-semibold mb-2">Bagian Penting</h3>
              <ul class="bg-slate-900 p-4 rounded-lg min-h-[200px] space-y-2" id="answers" @drop.prevent="drop($event)" @dragover.prevent>
              </ul>
              <div class="mt-4 flex gap-4">
                <button @click="checkAnswer"
                  class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-lg font-semibold transition">
                  ✅ Cek Jawaban
                </button>
                <button @click="resetAnswers"
                  class="bg-rose-600 hover:bg-rose-700 text-white px-4 py-2 rounded-lg font-semibold transition">
                  🔁 Reset
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- CTA -->
        <div class="text-center pt-8">
          <Link :class="!unlocked ? 'pointer-events-none opacity-50' : ''" :href="unlocked ? '/materi/dekomposisi/auditory' : '#'" class="inline-block bg-purple-500 hover:bg-purple-600 text-white px-6 py-3 rounded-lg text-lg font-semibold transition">
            Lanjut ke Auditory →
          </Link>
        </div>
      </div>

      <!-- Feedback Modal -->
      <div v-if="showModal" class="fixed inset-0 bg-black/60 z-50 flex items-center justify-center">
        <div class="bg-white rounded-xl p-8 w-[90%] md:w-[500px] text-slate-800 shadow-xl text-center space-y-4">
          <h3 class="text-2xl font-bold">{{ feedbackTitle }}</h3>
          <p class="text-base">{{ feedbackMessage }}</p>
          <button @click="showModal = false" class="bg-purple-600 text-white px-4 py-2 rounded-lg font-semibold mt-2">
            Tutup
          </button>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { onMounted, ref } from 'vue'

const showModal = ref(false)
const feedbackTitle = ref('')
const feedbackMessage = ref('')
const unlocked = ref(false)

const correctAnswers = [
  'Bangun tidur',
  'Mandi pagi',
  'Sarapan',
  'Mempersiapkan buku dan seragam'
]

const dropSound = new Audio('/sounds/drop.mp3')
const dragSound = new Audio('/sounds/drag.mp3')

const resetAnswers = () => {
  document.getElementById('answers').innerHTML = ''
  unlocked.value = false
}

const checkAnswer = () => {
  const items = Array.from(document.querySelectorAll('#answers li')).map(li => li.textContent.trim())
  const correct = correctAnswers.every(ans => items.includes(ans)) && items.every(i => correctAnswers.includes(i))

  if (items.length === 0) {
    feedbackTitle.value = '🚫 Belum Ada Jawaban'
    feedbackMessage.value = 'Silakan seret beberapa bagian penting dari rutinitas pagi ke kolom jawaban.'
  } else if (correct) {
    feedbackTitle.value = '✅ Jawaban Tepat!'
    feedbackMessage.value = 'Langkah-langkah rutinitas pagi kamu sudah benar. Siap berangkat sekolah!'
    unlocked.value = true
  } else {
    feedbackTitle.value = '❌ Masih Ada yang Kurang Tepat'
    feedbackMessage.value = 'Beberapa langkah tidak efektif atau kurang relevan. Yuk coba lagi!'
    unlocked.value = false
  }

  showModal.value = true
}

onMounted(() => {
  const draggables = document.querySelectorAll('.draggable')
  const target = document.getElementById('answers')

  draggables.forEach(el => {
    el.setAttribute('draggable', 'true')
    el.addEventListener('dragstart', e => {
      e.dataTransfer.setData('text/plain', e.target.innerText)
      dragSound.play()
    })
  })

  target.addEventListener('drop', e => {
    const data = e.dataTransfer.getData('text/plain')
    if (data && !Array.from(target.children).some(el => el.textContent.trim() === data)) {
      const item = document.createElement('li')
      item.className = 'bg-purple-600 p-3 rounded-lg'
      item.textContent = data
      target.appendChild(item)
      dropSound.play()
    }
  })
})
</script>
