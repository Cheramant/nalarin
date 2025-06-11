<template>
  <MainLayout>
    <Head title="Latihan Terpadu 2 - Belanja di Minimarket" />

    <section class="min-h-screen bg-gradient-to-br from-[#f8fafc] via-[#e0f2fe] to-[#fef6e4] text-[#232323] px-4 py-16">
      <div class="max-w-5xl mx-auto space-y-12">

        <!-- Narasi (Audio, Tidak Bernomor) -->
        <div class="bg-[#2563eb]/90 p-6 rounded-xl shadow flex flex-col md:flex-row items-center gap-6 hover:scale-105 transition text-white">
          <div class="text-5xl mb-2 md:mb-0">🎧</div>
          <div class="flex-1">
            <audio controls class="w-full max-w-xs mx-auto">
              <source src="/sounds/latihan2.mp3" type="audio/mpeg" />
              Browser Anda tidak mendukung audio.
            </audio>
            <p class="text-blue-100 text-sm mt-2 text-center md:text-left">
              Dengarkan penjelasan singkat proses belanja di minimarket berikut untuk memahami alurnya.
            </p>
          </div>
        </div>

        <!-- Visual (Tidak Bernomor, Observasi) -->
        <div class="bg-white rounded-xl p-6 shadow-lg hover:scale-105 transition flex flex-col items-center border border-blue-200">
          <h2 class="font-bold text-xl text-blue-700 flex items-center gap-2 mb-3">
            <span>🛒</span> Observasi Visual Minimarket
          </h2>
          <div class="flex flex-col md:flex-row items-center gap-8 w-full">
            <img src="/images/belanja-visual.png" alt="Ilustrasi Siswa Belanja" class="w-64 md:w-80 rounded-lg shadow border-2 border-blue-200 mb-4 md:mb-0 bg-white" />
            <div class="flex-1">
              <p class="text-blue-900 text-base mb-3">
                Amati gambar proses belanja di minimarket di samping!<br>
                Menurutmu, apa saja langkah penting saat belanja?<br>
                Fitur atau proses apa yang perlu diperhatikan agar belanja berjalan lancar?
              </p>
              <div class="bg-blue-50 rounded-lg px-4 py-3 shadow text-sm text-blue-800 border border-blue-100">
                <span class="font-bold text-blue-600">Petunjuk:</span>
                Perhatikan keranjang belanja, daftar barang, rak barang, kasir, dan proses pembayaran.
              </div>
            </div>
          </div>
        </div>

        <!-- 1. Dekomposisi -->
        <div class="bg-blue-100/80 rounded-xl p-6 shadow-lg hover:scale-105 transition flex flex-col items-center">
          <h2 class="font-bold text-2xl text-blue-800 flex items-center gap-2 mb-3"><span>1.</span><span>🖐️</span> Dekomposisi</h2>
          <p class="text-blue-900 mb-2 text-center">
            Pilih <span class="text-blue-600 font-semibold">4 langkah utama</span> dalam proses belanja di minimarket berikut!
          </p>
          <div class="flex flex-wrap gap-3 justify-center mb-2">
            <div
              v-for="item in decompositionItems"
              :key="item.id"
              draggable="true"
              @dragstart="startDragDecomposition(item)"
              class="cursor-move bg-white text-blue-900 px-3 py-1 rounded-lg shadow font-medium border border-blue-200 hover:bg-blue-50 transition select-none"
            >{{ item.text }}</div>
          </div>
          <div
            class="bg-blue-50 min-h-[50px] w-full md:w-2/3 p-3 rounded-lg border-2 border-dashed border-blue-200 flex flex-wrap gap-2 justify-center"
            @dragover.prevent
            @drop="dropDecomposition"
          >
            <span v-if="decompositionBox.length === 0" class="text-blue-400">Taruh di sini...</span>
            <div
              v-for="item in decompositionBox"
              :key="item.id"
              class="bg-blue-200 px-2 py-1 rounded shadow flex items-center gap-2 text-blue-900"
            >
              {{ item.text }}
              <button @click="removeDecomposition(item)" class="text-xs text-red-400 hover:text-red-600 ml-2">✕</button>
            </div>
          </div>
          <div class="mt-3 flex flex-col items-center gap-2">
            <button
              @click="checkDecomposition"
              :disabled="decompositionBox.length !== 4"
              class="bg-blue-600 hover:bg-blue-700 px-6 py-2 rounded-lg shadow font-bold transition disabled:opacity-60 text-white"
            >
              Cek Jawaban
            </button>
            <span v-if="decompositionFeedback" :class="decompositionCorrect ? 'text-green-700 font-semibold' : 'text-red-500 font-semibold'">
              {{ decompositionFeedback }}
            </span>
            <button v-if="decompositionBox.length > 0" @click="resetDecomposition" class="text-blue-800 underline text-xs">Reset</button>
          </div>
        </div>

        <!-- 2. Pola -->
        <div class="bg-blue-100/80 rounded-xl p-6 shadow-lg hover:scale-105 transition flex flex-col items-center">
          <h2 class="font-bold text-2xl text-blue-800 flex items-center gap-2 mb-3"><span>2.</span><span>🖼️</span> Pengenalan Pola</h2>
          <p class="text-blue-900 mb-2 text-center">
            Pilih <span class="text-blue-600 font-semibold">2 pola</span> yang sering terjadi saat belanja di minimarket!
          </p>
          <div class="flex flex-wrap gap-3 mb-2 justify-center">
            <button
              v-for="item in patternItems"
              :key="item.id"
              :class="[
                'px-3 py-1 rounded-lg shadow font-medium border transition select-none',
                patternBox.includes(item)
                  ? 'bg-blue-500 text-white border-blue-700'
                  : 'bg-white text-blue-900 border-blue-200 hover:bg-blue-200'
              ]"
              @click="togglePattern(item)"
            >{{ item.text }}</button>
          </div>
          <div class="mt-3 flex flex-col items-center gap-2">
            <button @click="checkPattern" :disabled="patternBox.length !== 2" class="bg-blue-600 hover:bg-blue-700 px-6 py-2 rounded-lg shadow font-bold transition disabled:opacity-60 text-white">
              Cek Jawaban
            </button>
            <span v-if="patternFeedback" :class="patternCorrect ? 'text-green-700 font-semibold' : 'text-red-500 font-semibold'">
              {{ patternFeedback }}
            </span>
            <button v-if="patternBox.length > 0" @click="resetPattern" class="text-blue-800 underline text-xs">Reset</button>
          </div>
        </div>

        <!-- 3. Abstraksi -->
        <div class="bg-blue-100/80 rounded-xl p-6 shadow-lg hover:scale-105 transition flex flex-col items-center">
          <h2 class="font-bold text-2xl text-blue-800 flex items-center gap-2 mb-3"><span>3.</span><span>🧠</span> Abstraksi</h2>
          <p class="text-blue-900 mb-2 text-center">
            Pilih <span class="text-blue-600 font-semibold">3 informasi terpenting</span> saat belanja di minimarket!
          </p>
          <div class="flex flex-wrap gap-3 justify-center mb-2">
            <div
              v-for="item in abstractionItems"
              :key="item.id"
              draggable="true"
              @dragstart="startDragAbstraction(item)"
              class="cursor-move bg-white text-blue-900 px-3 py-1 rounded-lg shadow font-medium border border-blue-200 hover:bg-blue-50 transition select-none"
            >{{ item.text }}</div>
          </div>
          <div
            class="bg-blue-50 min-h-[50px] w-full md:w-2/3 p-3 rounded-lg border-2 border-dashed border-blue-200 flex flex-wrap gap-2 justify-center"
            @dragover.prevent
            @drop="dropAbstraction"
          >
            <span v-if="abstractionBox.length === 0" class="text-blue-400">Taruh di sini...</span>
            <div
              v-for="item in abstractionBox"
              :key="item.id"
              class="bg-blue-200 px-2 py-1 rounded shadow flex items-center gap-2 text-blue-900"
            >
              {{ item.text }}
              <button @click="removeAbstraction(item)" class="text-xs text-red-400 hover:text-red-600 ml-2">✕</button>
            </div>
          </div>
          <div class="mt-3 flex flex-col items-center gap-2">
            <button
              @click="checkAbstraction"
              :disabled="abstractionBox.length !== 3"
              class="bg-blue-600 hover:bg-blue-700 px-6 py-2 rounded-lg shadow font-bold transition disabled:opacity-60 text-white"
            >
              Cek Jawaban
            </button>
            <span v-if="abstractionFeedback" :class="abstractionCorrect ? 'text-green-700 font-semibold' : 'text-red-500 font-semibold'">
              {{ abstractionFeedback }}
            </span>
            <button v-if="abstractionBox.length > 0" @click="resetAbstraction" class="text-blue-800 underline text-xs">Reset</button>
          </div>
        </div>

        <!-- 4. Algoritma -->
        <div class="bg-blue-100/80 rounded-xl p-6 shadow-lg hover:scale-105 transition flex flex-col items-center">
          <h2 class="font-bold text-2xl text-blue-800 flex items-center gap-2 mb-3"><span>4.</span><span>📋</span> Desain Algoritma</h2>
          <p class="text-blue-900 mb-3 text-center">Urutkan langkah proses belanja yang benar di minimarket!</p>
          <draggable v-model="algorithmSteps" :options="{ animation: 200 }" class="flex flex-col gap-2 mt-2 w-full md:w-2/3">
            <template #item="{element}">
              <div class="bg-white border border-blue-200 rounded-lg px-3 py-2 shadow cursor-move text-blue-900 hover:bg-blue-50 transition">
                {{ element }}
              </div>
            </template>
          </draggable>
          <div class="mt-3 flex flex-col items-center gap-2">
            <button @click="checkAlgorithm" class="bg-blue-600 hover:bg-blue-700 px-6 py-2 rounded-lg shadow font-bold transition text-white">
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
            class="bg-blue-800 text-white font-bold px-8 py-3 rounded-lg shadow-lg text-lg hover:bg-blue-600 transition disabled:opacity-40"
            :disabled="!canContinue"
            @click="goNext"
          >
            Lanjut ke Latihan Berikutnya →
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

// Sound effect drag-drop
const dragAudio = new Audio('/sounds/drag.mp3')
const dropAudio = new Audio('/sounds/drop.mp3')

// --- Dekomposisi (opsi lebih mudah dimengerti)
const decompositionItems = [
  { id: 1, text: 'Membuat daftar belanja' },
  { id: 2, text: 'Mengambil keranjang belanja' },
  { id: 3, text: 'Memilih barang yang akan dibeli' },
  { id: 4, text: 'Membayar di kasir' },
  { id: 5, text: 'Bertanya promo ke kasir' }, // Distraktor
  { id: 6, text: 'Mengobrol dengan petugas' }, // Distraktor
  { id: 7, text: 'Memasukkan barang ke tas' }, // Distraktor
]
const correctDecomposition = [1, 2, 3, 4]
const decompositionBox = ref([])
const decompositionFeedback = ref('')
const decompositionCorrect = ref(null)
function startDragDecomposition(item) {
  dragAudio.currentTime = 0
  dragAudio.play()
  event.dataTransfer.setData('decomposition-l2', JSON.stringify(item))
}
function dropDecomposition() {
  dropAudio.currentTime = 0
  dropAudio.play()
  const data = event.dataTransfer.getData('decomposition-l2')
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
    decompositionFeedback.value = 'Benar! Langkah utama belanja sudah kamu urutkan dengan baik.'
    decompositionCorrect.value = true
  } else {
    decompositionFeedback.value = 'Kurang tepat. Pilih 4 langkah utama dari proses belanja di minimarket.'
    decompositionCorrect.value = false
  }
}

// --- Pola
const patternItems = [
  { id: 1, text: 'Lupa mengambil kembalian di kasir' },
  { id: 2, text: 'Mengantre panjang saat pembayaran' },
  { id: 3, text: 'Mengambil barang yang tidak ada di daftar' },
  { id: 4, text: 'Mengobrol dengan kasir tentang promo' }, // Distraktor
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
    patternFeedback.value = 'Tepat! Kedua pola ini sering terjadi saat belanja di minimarket.'
    patternCorrect.value = true
  } else {
    patternFeedback.value = 'Kurang tepat. Pilih 2 pola yang relevan dengan proses belanja.'
    patternCorrect.value = false
  }
}

// --- Abstraksi
const abstractionItems = [
  { id: 1, text: 'Membawa cukup uang untuk belanja' },
  { id: 2, text: 'Mencatat barang yang sudah diambil' },
  { id: 3, text: 'Memastikan semua barang di daftar sudah dibeli' },
  { id: 4, text: 'Menghitung jumlah barang yang dibeli' },
  { id: 5, text: 'Promo mingguan minimarket' }, // Distraktor
  { id: 6, text: 'Mengingat warna seragam petugas' }, // Distraktor
]
const correctAbstraction = [1, 3, 4]
const abstractionBox = ref([])
const abstractionFeedback = ref('')
const abstractionCorrect = ref(null)
function startDragAbstraction(item) {
  dragAudio.currentTime = 0
  dragAudio.play()
  event.dataTransfer.setData('abstraction-l2', JSON.stringify(item))
}
function dropAbstraction() {
  dropAudio.currentTime = 0
  dropAudio.play()
  const data = event.dataTransfer.getData('abstraction-l2')
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
    abstractionFeedback.value = 'Benar! Informasi penting saat belanja sudah kamu tentukan.'
    abstractionCorrect.value = true
  } else {
    abstractionFeedback.value = 'Kurang tepat. Pilih hanya informasi yang benar-benar penting dari proses belanja.'
    abstractionCorrect.value = false
  }
}

// --- Algoritma (urutkan proses)
const algorithmSteps = ref([
  'Ambil keranjang belanja',
  'Pilih barang yang akan dibeli',
  'Bayar di kasir',
  'Masukkan barang ke keranjang',
])
const correctAlgorithm = [
  'Ambil keranjang belanja',
  'Pilih barang yang akan dibeli',
  'Masukkan barang ke keranjang',
  'Bayar di kasir',
]
const algorithmFeedback = ref('')
const algorithmCorrect = ref(null)
function checkAlgorithm() {
  if (JSON.stringify(algorithmSteps.value) === JSON.stringify(correctAlgorithm)) {
    algorithmFeedback.value = 'Urutan benar! Itulah algoritma belanja di minimarket.'
    algorithmCorrect.value = true
  } else {
    algorithmFeedback.value = 'Urutan masih salah, coba perbaiki lagi!'
    algorithmCorrect.value = false
  }
}

// --- Lanjut
const canContinue = computed(() =>
  decompositionCorrect.value && patternCorrect.value && abstractionCorrect.value && algorithmCorrect.value
)
function goNext() {
  router.visit('/latihan/latihanTiga')
}
</script>
