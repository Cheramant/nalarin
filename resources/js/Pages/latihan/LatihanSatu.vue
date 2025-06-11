<template>
  <MainLayout>
    <Head title="Latihan Terpadu 1 - Simulasi ATM" />

    <section class="min-h-screen bg-gradient-to-br from-[#e0f7fa] via-[#e8f1ff] to-[#f8fafc] text-[#223148] px-4 py-16">
      <div class="max-w-5xl mx-auto space-y-12">

        <!-- Narasi (Audio) -->
        <div class="bg-[#0284c7]/90 p-6 rounded-xl shadow flex flex-col md:flex-row items-center gap-6 hover:scale-105 transition text-white">
          <div class="text-5xl mb-2 md:mb-0">🎧</div>
          <div class="flex-1">
            <audio controls class="w-full max-w-xs mx-auto">
              <source src="/sounds/latihan1.mp3" type="audio/mpeg" />
              Browser Anda tidak mendukung audio.
            </audio>
            <p class="text-cyan-100 text-sm mt-2 text-center md:text-left">
              Dengarkan narasi pengenalan simulasi ATM berikut untuk memahami alur proses yang akan kamu pecahkan.
            </p>
          </div>
        </div>

        <!-- Visual (Observasi) -->
        <div class="bg-white rounded-xl p-6 shadow-lg hover:scale-105 transition flex flex-col items-center border border-cyan-200">
          <h2 class="font-bold text-xl text-cyan-700 flex items-center gap-2 mb-3">
            <span>🏧</span> Observasi Visual ATM
          </h2>
          <div class="flex flex-col md:flex-row items-center gap-8 w-full">
            <img src="/images/atm-visual.png" alt="Ilustrasi Mesin ATM" class="w-64 md:w-80 rounded-lg shadow border-2 border-cyan-200 mb-4 md:mb-0 bg-white" />
            <div class="flex-1">
              <p class="text-cyan-900 text-base mb-3">
                Amati ilustrasi mesin ATM di samping!<br>
                Apa saja bagian penting dari mesin ATM menurutmu?<br>
                Kira-kira proses atau fitur apa yang harus kamu perhatikan saat menggunakan ATM?
              </p>
              <div class="bg-cyan-50 rounded-lg px-4 py-3 shadow text-sm text-cyan-800 border border-cyan-100">
                <span class="font-bold text-cyan-600">Petunjuk:</span>
                Fokus pada layar, slot kartu, tombol PIN, dan tempat keluarnya uang. Perhatikan bagaimana urutan interaksi kita dengan mesin ATM.
              </div>
            </div>
          </div>
        </div>

        <!-- 1. Dekomposisi -->
        <div class="bg-cyan-100/80 rounded-xl p-6 shadow-lg hover:scale-105 transition flex flex-col items-center">
          <h2 class="font-bold text-2xl text-cyan-800 flex items-center gap-2 mb-3"><span>1.</span><span>🖐️</span> Dekomposisi</h2>
          <p class="text-cyan-900 mb-2 text-center">
            Pilih <span class="text-cyan-600 font-semibold">4 langkah utama</span> saat melakukan transaksi di ATM berikut!
          </p>
          <div class="flex flex-wrap gap-3 justify-center mb-2">
            <div
              v-for="item in decompositionItems"
              :key="item.id"
              draggable="true"
              @dragstart="startDragDecomposition(item)"
              class="cursor-move bg-white text-cyan-900 px-3 py-1 rounded-lg shadow font-medium border border-cyan-200 hover:bg-cyan-50 transition select-none"
            >{{ item.text }}</div>
          </div>
          <div
            class="bg-cyan-50 min-h-[50px] w-full md:w-2/3 p-3 rounded-lg border-2 border-dashed border-cyan-200 flex flex-wrap gap-2 justify-center"
            @dragover.prevent
            @drop="dropDecomposition"
          >
            <span v-if="decompositionBox.length === 0" class="text-cyan-400">Taruh di sini...</span>
            <div
              v-for="item in decompositionBox"
              :key="item.id"
              class="bg-cyan-200 px-2 py-1 rounded shadow flex items-center gap-2 text-cyan-900"
            >
              {{ item.text }}
              <button @click="removeDecomposition(item)" class="text-xs text-red-400 hover:text-red-600 ml-2">✕</button>
            </div>
          </div>
          <div class="mt-3 flex flex-col items-center gap-2">
            <button
              @click="checkDecomposition"
              :disabled="decompositionBox.length !== 4"
              class="bg-yellow-400 hover:bg-yellow-300 px-6 py-2 rounded-lg shadow font-bold transition disabled:opacity-60 text-cyan-900"
            >
              Cek Jawaban
            </button>
            <span v-if="decompositionFeedback" :class="decompositionCorrect ? 'text-green-700 font-semibold' : 'text-red-500 font-semibold'">
              {{ decompositionFeedback }}
            </span>
            <button v-if="decompositionBox.length > 0" @click="resetDecomposition" class="text-cyan-800 underline text-xs">Reset</button>
          </div>
        </div>

        <!-- 2. Pola -->
        <div class="bg-cyan-100/80 rounded-xl p-6 shadow-lg hover:scale-105 transition flex flex-col items-center">
          <h2 class="font-bold text-2xl text-cyan-800 flex items-center gap-2 mb-3"><span>2.</span><span>🖼️</span> Pengenalan Pola</h2>
          <p class="text-cyan-900 mb-2 text-center">
            Pilih <span class="text-cyan-600 font-semibold">2 pola</span> yang sering terjadi saat transaksi di ATM!
          </p>
          <div class="flex flex-wrap gap-3 mb-2 justify-center">
            <button
              v-for="item in patternItems"
              :key="item.id"
              :class="[
                'px-3 py-1 rounded-lg shadow font-medium border transition select-none',
                patternBox.includes(item)
                  ? 'bg-yellow-300 text-cyan-900 border-yellow-400'
                  : 'bg-white text-cyan-900 border-cyan-200 hover:bg-cyan-200'
              ]"
              @click="togglePattern(item)"
            >{{ item.text }}</button>
          </div>
          <div class="mt-3 flex flex-col items-center gap-2">
            <button @click="checkPattern" :disabled="patternBox.length !== 2" class="bg-yellow-400 hover:bg-yellow-300 px-6 py-2 rounded-lg shadow font-bold transition disabled:opacity-60 text-cyan-900">
              Cek Jawaban
            </button>
            <span v-if="patternFeedback" :class="patternCorrect ? 'text-green-700 font-semibold' : 'text-red-500 font-semibold'">
              {{ patternFeedback }}
            </span>
            <button v-if="patternBox.length > 0" @click="resetPattern" class="text-cyan-800 underline text-xs">Reset</button>
          </div>
        </div>

        <!-- 3. Abstraksi -->
        <div class="bg-cyan-100/80 rounded-xl p-6 shadow-lg hover:scale-105 transition flex flex-col items-center">
          <h2 class="font-bold text-2xl text-cyan-800 flex items-center gap-2 mb-3"><span>3.</span><span>🧠</span> Abstraksi</h2>
          <p class="text-cyan-900 mb-2 text-center">
            Pilih <span class="text-cyan-600 font-semibold">3 informasi terpenting</span> saat menggunakan ATM!
          </p>
          <div class="flex flex-wrap gap-3 justify-center mb-2">
            <div
              v-for="item in abstractionItems"
              :key="item.id"
              draggable="true"
              @dragstart="startDragAbstraction(item)"
              class="cursor-move bg-white text-cyan-900 px-3 py-1 rounded-lg shadow font-medium border border-cyan-200 hover:bg-cyan-50 transition select-none"
            >{{ item.text }}</div>
          </div>
          <div
            class="bg-cyan-50 min-h-[50px] w-full md:w-2/3 p-3 rounded-lg border-2 border-dashed border-cyan-200 flex flex-wrap gap-2 justify-center"
            @dragover.prevent
            @drop="dropAbstraction"
          >
            <span v-if="abstractionBox.length === 0" class="text-cyan-400">Taruh di sini...</span>
            <div
              v-for="item in abstractionBox"
              :key="item.id"
              class="bg-cyan-200 px-2 py-1 rounded shadow flex items-center gap-2 text-cyan-900"
            >
              {{ item.text }}
              <button @click="removeAbstraction(item)" class="text-xs text-red-400 hover:text-red-600 ml-2">✕</button>
            </div>
          </div>
          <div class="mt-3 flex flex-col items-center gap-2">
            <button
              @click="checkAbstraction"
              :disabled="abstractionBox.length !== 3"
              class="bg-yellow-400 hover:bg-yellow-300 px-6 py-2 rounded-lg shadow font-bold transition disabled:opacity-60 text-cyan-900"
            >
              Cek Jawaban
            </button>
            <span v-if="abstractionFeedback" :class="abstractionCorrect ? 'text-green-700 font-semibold' : 'text-red-500 font-semibold'">
              {{ abstractionFeedback }}
            </span>
            <button v-if="abstractionBox.length > 0" @click="resetAbstraction" class="text-cyan-800 underline text-xs">Reset</button>
          </div>
        </div>

        <!-- 4. Algoritma -->
        <div class="bg-cyan-100/80 rounded-xl p-6 shadow-lg hover:scale-105 transition flex flex-col items-center">
          <h2 class="font-bold text-2xl text-cyan-800 flex items-center gap-2 mb-3"><span>4.</span><span>📋</span> Desain Algoritma</h2>
          <p class="text-cyan-900 mb-3 text-center">Urutkan langkah proses transaksi di ATM dengan benar!</p>
          <draggable
            v-model="algorithmSteps"
            :options="{ animation: 200 }"
            class="flex flex-col gap-2 mt-2 w-full md:w-2/3"
            @start="playDrag"
            @end="playDrop"
          >
            <template #item="{element}">
              <div class="bg-white border border-cyan-200 rounded-lg px-3 py-2 shadow cursor-move text-cyan-900 hover:bg-cyan-50 transition">
                {{ element }}
              </div>
            </template>
          </draggable>
          <div class="mt-3 flex flex-col items-center gap-2">
            <button @click="checkAlgorithmWithSound" class="bg-yellow-400 hover:bg-yellow-300 px-6 py-2 rounded-lg shadow font-bold transition text-cyan-900">
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
            class="bg-cyan-800 text-white font-bold px-8 py-3 rounded-lg shadow-lg text-lg hover:bg-cyan-600 transition disabled:opacity-40"
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

const dragAudio = new Audio('/sounds/drag.mp3')
const dropAudio = new Audio('/sounds/drop.mp3')
const cekAudio = new Audio('/sounds/cek.mp3')

// --- Dekomposisi
const decompositionItems = [
  { id: 1, text: 'Memasukkan kartu ATM ke mesin' },
  { id: 2, text: 'Memasukkan PIN dengan benar' },
  { id: 3, text: 'Memilih jenis transaksi (misal: tarik tunai)' },
  { id: 4, text: 'Mengambil uang dari mesin ATM' },
  { id: 5, text: 'Membaca panduan di layar' }, // Distraktor
  { id: 6, text: 'Menjawab telepon saat transaksi' }, // Distraktor
  { id: 7, text: 'Mengobrol dengan orang lain' }, // Distraktor
]
const correctDecomposition = [1, 2, 3, 4]
const decompositionBox = ref([])
const decompositionFeedback = ref('')
const decompositionCorrect = ref(null)
function startDragDecomposition(item) {
  dragAudio.currentTime = 0
  dragAudio.play()
  event.dataTransfer.setData('decomposition-l1', JSON.stringify(item))
}
function dropDecomposition() {
  dropAudio.currentTime = 0
  dropAudio.play()
  const data = event.dataTransfer.getData('decomposition-l1')
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
    decompositionFeedback.value = 'Benar! Langkah utama transaksi ATM sudah kamu pilih dengan baik.'
    decompositionCorrect.value = true
  } else {
    decompositionFeedback.value = 'Kurang tepat. Pilih 4 langkah utama saat bertransaksi di ATM.'
    decompositionCorrect.value = false
  }
}

// --- Pola
const patternItems = [
  { id: 1, text: 'Sering lupa mengambil kartu ATM' },
  { id: 2, text: 'Salah memasukkan PIN beberapa kali' },
  { id: 3, text: 'Membawa buku tabungan saat transaksi' }, // Distraktor
  { id: 4, text: 'Mengulangi transaksi karena gagal' },
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
    patternFeedback.value = 'Tepat! Dua pola ini sering terjadi saat menggunakan ATM.'
    patternCorrect.value = true
  } else {
    patternFeedback.value = 'Kurang tepat. Pilih 2 pola yang sering terjadi pada proses transaksi ATM.'
    patternCorrect.value = false
  }
}

// --- Abstraksi
const abstractionItems = [
  { id: 1, text: 'Jaga kerahasiaan PIN ATM' },
  { id: 2, text: 'Pastikan tidak ada orang yang melihat PIN' },
  { id: 3, text: 'Periksa saldo setelah transaksi' },
  { id: 4, text: 'Mengambil struk transaksi untuk bukti' },
  { id: 5, text: 'Membawa teman saat ke ATM' }, // Distraktor
  { id: 6, text: 'Bersandar di mesin ATM' }, // Distraktor
]
const correctAbstraction = [1, 2, 3]
const abstractionBox = ref([])
const abstractionFeedback = ref('')
const abstractionCorrect = ref(null)
function startDragAbstraction(item) {
  dragAudio.currentTime = 0
  dragAudio.play()
  event.dataTransfer.setData('abstraction-l1', JSON.stringify(item))
}
function dropAbstraction() {
  dropAudio.currentTime = 0
  dropAudio.play()
  const data = event.dataTransfer.getData('abstraction-l1')
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
    abstractionFeedback.value = 'Benar! Informasi penting tentang keamanan dan transaksi ATM sudah kamu pilih.'
    abstractionCorrect.value = true
  } else {
    abstractionFeedback.value = 'Kurang tepat. Pilih hanya 3 informasi penting dari proses transaksi ATM.'
    abstractionCorrect.value = false
  }
}

// --- Algoritma
const algorithmSteps = ref([
  'Memasukkan kartu ATM ke mesin',
  'Memasukkan PIN dengan benar',
  'Memilih jenis transaksi (misal: tarik tunai)',
  'Mengambil uang dari mesin ATM',
])
const correctAlgorithm = [
  'Memasukkan kartu ATM ke mesin',
  'Memasukkan PIN dengan benar',
  'Memilih jenis transaksi (misal: tarik tunai)',
  'Mengambil uang dari mesin ATM',
]
const algorithmFeedback = ref('')
const algorithmCorrect = ref(null)
function playDrag() {
  dragAudio.currentTime = 0
  dragAudio.play()
}
function playDrop() {
  dropAudio.currentTime = 0
  dropAudio.play()
}
function checkAlgorithmWithSound() {
  cekAudio.currentTime = 0
  cekAudio.play()
  checkAlgorithm()
}
function checkAlgorithm() {
  if (JSON.stringify(algorithmSteps.value) === JSON.stringify(correctAlgorithm)) {
    algorithmFeedback.value = 'Urutan benar! Proses transaksi ATM sudah tersusun dengan baik.'
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
  router.visit('/latihan/latihanDua')
}
</script>
