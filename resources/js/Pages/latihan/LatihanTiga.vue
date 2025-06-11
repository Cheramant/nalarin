<template>
  <MainLayout>
    <Head title="Latihan Terpadu 3 - Jadwal Kerja Siswa SMK" />

    <section class="min-h-screen bg-gradient-to-br from-[#fffbe9] via-[#fff0c8] to-[#ffe5b4] text-[#20220d] px-4 py-16">
      <div class="max-w-5xl mx-auto space-y-12">

        <!-- Narasi (Audio, Tidak Bernomor) -->
        <div class="bg-[#fdba74]/90 p-6 rounded-xl shadow flex flex-col md:flex-row items-center gap-6 hover:scale-105 transition text-[#473015]">
          <div class="text-5xl mb-2 md:mb-0">🎧</div>
          <div class="flex-1">
            <audio controls class="w-full max-w-xs mx-auto">
              <source src="/sounds/latihan3.mp3" type="audio/mpeg" />
              Browser Anda tidak mendukung audio.
            </audio>
            <p class="text-[#855c25] text-sm mt-2 text-center md:text-left">
              Dengarkan penjelasan tentang aktivitas dan jadwal harian siswa berikut untuk memahami studi kasusnya.
            </p>
          </div>
        </div>

        <!-- Visual (Tidak Bernomor, Observasi) -->
        <div class="bg-white rounded-xl p-6 shadow-lg hover:scale-105 transition flex flex-col items-center border border-orange-200">
          <h2 class="font-bold text-xl text-orange-700 flex items-center gap-2 mb-3">
            <span>🗓️</span> Observasi Visual Jadwal Siswa
          </h2>
          <div class="flex flex-col md:flex-row items-center gap-8 w-full">
            <img src="/images/jadwal-visual.png" alt="Ilustrasi Jadwal Siswa" class="w-64 md:w-80 rounded-lg shadow border-2 border-orange-200 mb-4 md:mb-0 bg-white" />
            <div class="flex-1">
              <p class="text-orange-900 text-base mb-3">
                Amati contoh jadwal harian siswa di samping!<br>
                Menurutmu, aktivitas apa saja yang penting dalam satu hari sekolah?<br>
                Bagaimana cara mengatur waktu agar semua kegiatan berjalan lancar?
              </p>
              <div class="bg-orange-50 rounded-lg px-4 py-3 shadow text-sm text-orange-800 border border-orange-100">
                <span class="font-bold text-orange-600">Petunjuk:</span>
                Perhatikan waktu belajar, istirahat, ibadah, kegiatan rumah, hingga aktivitas tambahan seperti ekstrakurikuler.
              </div>
            </div>
          </div>
        </div>

        <!-- 1. Dekomposisi -->
        <div class="bg-orange-100/80 rounded-xl p-6 shadow-lg hover:scale-105 transition flex flex-col items-center">
          <h2 class="font-bold text-2xl text-orange-800 flex items-center gap-2 mb-3"><span>1.</span><span>🖐️</span> Dekomposisi</h2>
          <p class="text-orange-900 mb-2 text-center">
            Pilih <span class="text-orange-600 font-semibold">4 aktivitas utama</span> dalam jadwal harian siswa SMK berikut!
          </p>
          <div class="flex flex-wrap gap-3 justify-center mb-2">
            <div
              v-for="item in decompositionItems"
              :key="item.id"
              draggable="true"
              @dragstart="startDragDecomposition(item)"
              class="cursor-move bg-white text-orange-900 px-3 py-1 rounded-lg shadow font-medium border border-orange-200 hover:bg-orange-50 transition select-none"
            >{{ item.text }}</div>
          </div>
          <div
            class="bg-orange-50 min-h-[50px] w-full md:w-2/3 p-3 rounded-lg border-2 border-dashed border-orange-200 flex flex-wrap gap-2 justify-center"
            @dragover.prevent
            @drop="dropDecomposition"
          >
            <span v-if="decompositionBox.length === 0" class="text-orange-400">Taruh di sini...</span>
            <div
              v-for="item in decompositionBox"
              :key="item.id"
              class="bg-orange-200 px-2 py-1 rounded shadow flex items-center gap-2 text-orange-900"
            >
              {{ item.text }}
              <button @click="removeDecomposition(item)" class="text-xs text-red-400 hover:text-red-600 ml-2">✕</button>
            </div>
          </div>
          <div class="mt-3 flex flex-col items-center gap-2">
            <button
              @click="checkDecomposition"
              :disabled="decompositionBox.length !== 4"
              class="bg-orange-600 hover:bg-orange-700 px-6 py-2 rounded-lg shadow font-bold transition disabled:opacity-60 text-white"
            >
              Cek Jawaban
            </button>
            <span v-if="decompositionFeedback" :class="decompositionCorrect ? 'text-green-700 font-semibold' : 'text-red-500 font-semibold'">
              {{ decompositionFeedback }}
            </span>
            <button v-if="decompositionBox.length > 0" @click="resetDecomposition" class="text-orange-800 underline text-xs">Reset</button>
          </div>
        </div>

        <!-- 2. Pola -->
        <div class="bg-orange-100/80 rounded-xl p-6 shadow-lg hover:scale-105 transition flex flex-col items-center">
          <h2 class="font-bold text-2xl text-orange-800 flex items-center gap-2 mb-3"><span>2.</span><span>🖼️</span> Pengenalan Pola</h2>
          <p class="text-orange-900 mb-2 text-center">
            Pilih <span class="text-orange-600 font-semibold">2 pola</span> kegiatan yang sering muncul di jadwal siswa SMK!
          </p>
          <div class="flex flex-wrap gap-3 mb-2 justify-center">
            <button
              v-for="item in patternItems"
              :key="item.id"
              :class="[
                'px-3 py-1 rounded-lg shadow font-medium border transition select-none',
                patternBox.includes(item)
                  ? 'bg-orange-500 text-white border-orange-700'
                  : 'bg-white text-orange-900 border-orange-200 hover:bg-orange-200'
              ]"
              @click="togglePattern(item)"
            >{{ item.text }}</button>
          </div>
          <div class="mt-3 flex flex-col items-center gap-2">
            <button @click="checkPattern" :disabled="patternBox.length !== 2" class="bg-orange-600 hover:bg-orange-700 px-6 py-2 rounded-lg shadow font-bold transition disabled:opacity-60 text-white">
              Cek Jawaban
            </button>
            <span v-if="patternFeedback" :class="patternCorrect ? 'text-green-700 font-semibold' : 'text-red-500 font-semibold'">
              {{ patternFeedback }}
            </span>
            <button v-if="patternBox.length > 0" @click="resetPattern" class="text-orange-800 underline text-xs">Reset</button>
          </div>
        </div>

        <!-- 3. Abstraksi -->
        <div class="bg-orange-100/80 rounded-xl p-6 shadow-lg hover:scale-105 transition flex flex-col items-center">
          <h2 class="font-bold text-2xl text-orange-800 flex items-center gap-2 mb-3"><span>3.</span><span>🧠</span> Abstraksi</h2>
          <p class="text-orange-900 mb-2 text-center">
            Pilih <span class="text-orange-600 font-semibold">3 hal terpenting</span> dari aktivitas harian siswa SMK!
          </p>
          <div class="flex flex-wrap gap-3 justify-center mb-2">
            <div
              v-for="item in abstractionItems"
              :key="item.id"
              draggable="true"
              @dragstart="startDragAbstraction(item)"
              class="cursor-move bg-white text-orange-900 px-3 py-1 rounded-lg shadow font-medium border border-orange-200 hover:bg-orange-50 transition select-none"
            >{{ item.text }}</div>
          </div>
          <div
            class="bg-orange-50 min-h-[50px] w-full md:w-2/3 p-3 rounded-lg border-2 border-dashed border-orange-200 flex flex-wrap gap-2 justify-center"
            @dragover.prevent
            @drop="dropAbstraction"
          >
            <span v-if="abstractionBox.length === 0" class="text-orange-400">Taruh di sini...</span>
            <div
              v-for="item in abstractionBox"
              :key="item.id"
              class="bg-orange-200 px-2 py-1 rounded shadow flex items-center gap-2 text-orange-900"
            >
              {{ item.text }}
              <button @click="removeAbstraction(item)" class="text-xs text-red-400 hover:text-red-600 ml-2">✕</button>
            </div>
          </div>
          <div class="mt-3 flex flex-col items-center gap-2">
            <button
              @click="checkAbstraction"
              :disabled="abstractionBox.length !== 3"
              class="bg-orange-600 hover:bg-orange-700 px-6 py-2 rounded-lg shadow font-bold transition disabled:opacity-60 text-white"
            >
              Cek Jawaban
            </button>
            <span v-if="abstractionFeedback" :class="abstractionCorrect ? 'text-green-700 font-semibold' : 'text-red-500 font-semibold'">
              {{ abstractionFeedback }}
            </span>
            <button v-if="abstractionBox.length > 0" @click="resetAbstraction" class="text-orange-800 underline text-xs">Reset</button>
          </div>
        </div>

        <!-- 4. Algoritma -->
        <div class="bg-orange-100/80 rounded-xl p-6 shadow-lg hover:scale-105 transition flex flex-col items-center">
          <h2 class="font-bold text-2xl text-orange-800 flex items-center gap-2 mb-3"><span>4.</span><span>📋</span> Desain Algoritma</h2>
          <p class="text-orange-900 mb-3 text-center">Urutkan langkah jadwal harian siswa SMK dengan benar!</p>
          <draggable v-model="algorithmSteps" :options="{ animation: 200 }" class="flex flex-col gap-2 mt-2 w-full md:w-2/3">
            <template #item="{element}">
              <div class="bg-white border border-orange-200 rounded-lg px-3 py-2 shadow cursor-move text-orange-900 hover:bg-orange-50 transition">
                {{ element }}
              </div>
            </template>
          </draggable>
          <div class="mt-3 flex flex-col items-center gap-2">
            <button @click="checkAlgorithm" class="bg-orange-600 hover:bg-orange-700 px-6 py-2 rounded-lg shadow font-bold transition text-white">
              Cek Urutan
            </button>
            <span v-if="algorithmFeedback" :class="algorithmCorrect ? 'text-green-700 font-semibold' : 'text-red-500 font-semibold'">
              {{ algorithmFeedback }}
            </span>
          </div>
        </div>

        <!-- Tombol Lanjut -->
        <div class="flex justify-center mt-8">
          <button
            class="bg-orange-700 text-white font-bold px-8 py-3 rounded-lg shadow-lg text-lg hover:bg-orange-600 transition disabled:opacity-40"
            :disabled="!canContinue"
            @click="goNext"
          >
            Selesai →
          </button>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { ref, computed } from 'vue'
import draggable from 'vuedraggable'
import MainLayout from '@/Layouts/MainLayout.vue'
import { Head, router } from '@inertiajs/vue3'

const dragAudio = new Audio('/sounds/drag.mp3')
const dropAudio = new Audio('/sounds/drop.mp3')

const decompositionItems = [
  { id: 1, text: 'Berangkat ke sekolah' },
  { id: 2, text: 'Belajar di kelas' },
  { id: 3, text: 'Mengobrol di kantin' }, // Distraktor
  { id: 4, text: 'Istirahat dan makan siang' },
  { id: 5, text: 'Mengerjakan tugas rumah' },
  { id: 6, text: 'Ikut kegiatan ekstrakurikuler' },
  { id: 7, text: 'Main game di malam hari' }, // Distraktor
]
const correctDecomposition = [1, 2, 4, 5]
const decompositionBox = ref([])
const decompositionFeedback = ref('')
const decompositionCorrect = ref(null)
function startDragDecomposition(item) {
  dragAudio.currentTime = 0
  dragAudio.play()
  event.dataTransfer.setData('decomposition-l3', JSON.stringify(item))
}
function dropDecomposition() {
  dropAudio.currentTime = 0
  dropAudio.play()
  const data = event.dataTransfer.getData('decomposition-l3')
  if (!data) return
  const item = JSON.parse(data)
  if (!decompositionBox.value.some(i => i.id === item.id) && decompositionBox.value.length < 4) {
    decompositionBox.value.push(item)
  }
}
function removeDecomposition(item) {
  decompositionBox.value = decompositionBox.value.filter(i => i.id !== item.id)
}
function resetDecomposition() {
  decompositionBox.value = []
  decompositionFeedback.value = ''
  decompositionCorrect.value = null
}
function checkDecomposition() {
  const ids = decompositionBox.value.map(i => i.id).sort()
  if (JSON.stringify(ids) === JSON.stringify(correctDecomposition)) {
    decompositionFeedback.value = 'Benar! Langkah utama jadwal harian sudah kamu pilih dengan baik.'
    decompositionCorrect.value = true
  } else {
    decompositionFeedback.value = 'Kurang tepat. Pilih 4 aktivitas utama dari jadwal harian siswa.'
    decompositionCorrect.value = false
  }
}

const patternItems = [
  { id: 1, text: 'Belajar di pagi hari dan sore hari' },
  { id: 2, text: 'Istirahat di siang hari' },
  { id: 3, text: 'Sering main game setelah belajar' }, // Distraktor
  { id: 4, text: 'Mengikuti ekstrakurikuler seminggu sekali' },
]
const correctPattern = [1, 2]
const patternBox = ref([])
const patternFeedback = ref('')
const patternCorrect = ref(null)
function togglePattern(item) {
  if (patternBox.value.includes(item)) {
    patternBox.value = patternBox.value.filter(i => i.id !== item.id)
  } else if (patternBox.value.length < 2) {
    patternBox.value.push(item)
  }
}
function resetPattern() {
  patternBox.value = []
  patternFeedback.value = ''
  patternCorrect.value = null
}
function checkPattern() {
  const ids = patternBox.value.map(i => i.id).sort()
  if (JSON.stringify(ids) === JSON.stringify(correctPattern)) {
    patternFeedback.value = 'Tepat! Pola ini umum terjadi pada jadwal siswa.'
    patternCorrect.value = true
  } else {
    patternFeedback.value = 'Kurang tepat. Pilih 2 pola yang sering ditemukan di jadwal harian.'
    patternCorrect.value = false
  }
}

const abstractionItems = [
  { id: 1, text: 'Membagi waktu antara belajar dan istirahat' },
  { id: 2, text: 'Selalu bawa bekal makan siang' }, // Distraktor
  { id: 3, text: 'Memprioritaskan tugas sekolah' },
  { id: 4, text: 'Menjaga kesehatan dengan cukup tidur' },
  { id: 5, text: 'Mengatur jadwal main game' }, // Distraktor
  { id: 6, text: 'Mencatat kegiatan lucu setiap hari' },
]
const correctAbstraction = [1, 3, 4]
const abstractionBox = ref([])
const abstractionFeedback = ref('')
const abstractionCorrect = ref(null)
function startDragAbstraction(item) {
  dragAudio.currentTime = 0
  dragAudio.play()
  event.dataTransfer.setData('abstraction-l3', JSON.stringify(item))
}
function dropAbstraction() {
  dropAudio.currentTime = 0
  dropAudio.play()
  const data = event.dataTransfer.getData('abstraction-l3')
  if (!data) return
  const item = JSON.parse(data)
  if (!abstractionBox.value.some(i => i.id === item.id) && abstractionBox.value.length < 3) {
    abstractionBox.value.push(item)
  }
}
function removeAbstraction(item) {
  abstractionBox.value = abstractionBox.value.filter(i => i.id !== item.id)
}
function resetAbstraction() {
  abstractionBox.value = []
  abstractionFeedback.value = ''
  abstractionCorrect.value = null
}
function checkAbstraction() {
  const ids = abstractionBox.value.map(i => i.id).sort()
  if (JSON.stringify(ids) === JSON.stringify(correctAbstraction)) {
    abstractionFeedback.value = 'Benar! Informasi penting dalam jadwal harian sudah kamu pilih.'
    abstractionCorrect.value = true
  } else {
    abstractionFeedback.value = 'Kurang tepat. Pilih hanya hal-hal penting dari aktivitas harian siswa.'
    abstractionCorrect.value = false
  }
}

const algorithmSteps = ref([
  'Berangkat ke sekolah',
  'Istirahat dan makan siang',
  'Belajar di kelas',
  'Mengerjakan tugas rumah',
])
const correctAlgorithm = [
  'Berangkat ke sekolah',
  'Belajar di kelas',
  'Istirahat dan makan siang',
  'Mengerjakan tugas rumah',
]
const algorithmFeedback = ref('')
const algorithmCorrect = ref(null)
function checkAlgorithm() {
  if (JSON.stringify(algorithmSteps.value) === JSON.stringify(correctAlgorithm)) {
    algorithmFeedback.value = 'Urutan benar! Jadwal harian sudah tersusun dengan baik.'
    algorithmCorrect.value = true
  } else {
    algorithmFeedback.value = 'Urutan masih salah, coba urutkan kembali!'
    algorithmCorrect.value = false
  }
}

const canContinue = computed(() =>
  decompositionCorrect.value && patternCorrect.value && abstractionCorrect.value && algorithmCorrect.value
)
function goNext() {
  router.visit('/kuis')
}
</script>
