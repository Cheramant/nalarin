<template>
  <MainLayout>
    <Head title="Kuis Computational Thinking" />
    <section class="bg-gradient-to-br from-blue-950 to-blue-800 min-h-screen flex items-center justify-center py-8">
      <div class="w-full max-w-3xl mx-auto bg-white/95 rounded-xl shadow-xl p-4 sm:p-8 space-y-8 border border-blue-200/60">

        <!-- Progress Bar & Info -->
        <div v-if="quizState === 'in-progress'" class="flex flex-col md:flex-row justify-between items-center gap-2 sticky top-0 z-20 bg-white/95 rounded-lg px-4 py-2 shadow">
          <div class="flex items-center gap-2 font-semibold text-blue-800 text-sm">
            <svg class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" />
            </svg>
            Soal <span class="ml-1 text-lg font-bold tracking-wide">{{ currentIndex + 1 }}</span> / {{ questions.length }}
          </div>
        </div>

        <!-- Soal Pilihan Ganda -->
        <div v-if="quizState === 'in-progress'" class="space-y-6">
          <header class="space-y-2 text-center">
            <div
              class="inline-block rounded-full px-4 py-1 bg-gradient-to-r"
              :class="[
                currentTopic.color
              ]"
            >
              <span class="text-sm font-semibold text-white tracking-wide">{{ currentTopic.title }}</span>
            </div>
            <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-blue-900 mt-2 leading-tight">
              #{{ currentIndex + 1 }}. {{ questions[currentIndex].question }}
            </h2>
          </header>

          <div class="grid gap-3">
            <button
              v-for="(option, idx) in questions[currentIndex].options"
              :key="idx"
              :class="[
                'w-full text-left px-5 py-3 rounded-xl border font-medium focus:outline-none transition-all duration-150',
                selectedAnswers[currentIndex] === idx
                  ? 'bg-blue-600/90 text-white border-blue-700 scale-105 shadow-md ring-2 ring-blue-400'
                  : 'bg-white border-blue-100 text-blue-900 hover:bg-blue-100/70 active:scale-95'
              ]"
              @click="selectAnswer(idx)"
            >
              <span class="font-bold mr-2">{{ optionLabels[idx] }}.</span>
              {{ option }}
            </button>
          </div>

          <!-- Navigasi Soal -->
          <div class="flex flex-col sm:flex-row justify-between items-center mt-6 gap-2">
            <button
              @click="prevQuestion"
              :disabled="currentIndex === 0"
              class="px-4 py-2 bg-gray-200 text-gray-500 rounded-md font-semibold shadow hover:bg-gray-300/80 active:scale-95 transition"
            >
              Sebelumnya
            </button>
            <button
              @click="nextOrSubmit"
              :class="[
                'px-6 py-2 rounded-md font-bold shadow transition ml-0 sm:ml-4 duration-150',
                currentIndex === questions.length - 1
                  ? 'bg-green-600 text-white hover:bg-green-700'
                  : 'bg-blue-600 text-white hover:bg-blue-700'
              ]"
              :disabled="selectedAnswers[currentIndex] == null"
            >
              {{ currentIndex === questions.length - 1 ? 'Selesai & Lihat Skor' : 'Selanjutnya' }}
            </button>
          </div>

          <!-- Progress Bar -->
          <div class="mt-6">
            <div class="w-full h-3 bg-blue-100 rounded-xl">
              <div
                class="h-3 bg-gradient-to-r from-blue-400 to-blue-700 rounded-xl transition-all"
                :style="{ width: ((currentIndex + 1) / questions.length * 100) + '%' }"
              ></div>
            </div>
            <div class="text-center text-xs text-gray-400 mt-1">
              Progress: {{ ((currentIndex + 1) / questions.length * 100).toFixed(0) }}%
            </div>
          </div>
        </div>

        <!-- Skor & Feedback -->
        <div v-else-if="quizState === 'finished'" class="flex flex-col items-center justify-center py-10 space-y-4">
          <div class="text-5xl font-extrabold text-blue-700">🎉</div>
          <div class="text-2xl font-bold text-blue-900">Kuis Selesai!</div>
          <div class="text-lg text-gray-700 mb-2">
            Skor kamu: <span class="text-blue-600 text-2xl font-bold">{{ score }}/100</span>
          </div>
          <div>
            <span v-if="score >= 80" class="text-green-600 font-semibold">Bagus! Kamu sangat paham materi CT 🎓</span>
            <span v-else-if="score >= 60" class="text-yellow-600 font-semibold">Lumayan! Tingkatkan lagi pemahamanmu 💡</span>
            <span v-else class="text-red-600 font-semibold">Yuk, pelajari lagi materi CT! 🔄</span>
          </div>
          <button
            @click="ulangQuiz"
            class="mt-4 px-6 py-3 rounded bg-blue-600 hover:bg-blue-700 text-white font-semibold shadow transition"
          >Ulangi Kuis</button>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { ref, reactive, computed } from 'vue'
import { Head } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'

// =============================
// --- Data Soal 20 Quiz (Urut CT) ---
// =============================
const questions = [
  // --- Dekomposisi (1-5) ---
  {
    question: "Apa tujuan utama dari dekomposisi dalam Computational Thinking?",
    options: [
      "Menggabungkan semua masalah jadi satu",
      "Membagi masalah besar menjadi bagian-bagian kecil yang lebih mudah dikelola",
      "Mengabaikan bagian sulit",
      "Memecahkan masalah tanpa perencanaan"
    ],
    answer: 1
  },
  {
    question: "Saat merancang sistem belanja online, dekomposisi dapat dilakukan dengan...",
    options: [
      "Membuat satu modul besar untuk semua proses",
      "Membagi proses belanja menjadi: login, cari barang, checkout, pembayaran",
      "Menghilangkan fitur pembayaran",
      "Menyatukan semua data dalam satu halaman"
    ],
    answer: 1
  },
  {
    question: "Mengapa dekomposisi penting dalam pemrograman?",
    options: [
      "Agar masalah terlihat lebih menantang",
      "Membantu dalam membagi tugas dan fokus solusi pada bagian tertentu",
      "Supaya kode lebih panjang",
      "Agar proses tidak efisien"
    ],
    answer: 1
  },
  {
    question: "Contoh dekomposisi pada aplikasi kasir adalah...",
    options: [
      "Proses login, pemilihan barang, pembayaran, dan cetak struk sebagai modul terpisah",
      "Satu modul untuk semua proses",
      "Mengulang proses setiap kali transaksi",
      "Mengabaikan data struk"
    ],
    answer: 0
  },
  {
    question: "Setelah melakukan dekomposisi, langkah selanjutnya adalah...",
    options: [
      "Membiarkan bagian-bagian tetap terpisah",
      "Menganalisis dan menyelesaikan setiap bagian kecil secara terpisah",
      "Langsung menjalankan sistem tanpa uji coba",
      "Menggabungkan kembali tanpa solusi"
    ],
    answer: 1
  },

  // --- Pengenalan Pola (6-10) ---
  {
    question: "Apa yang dimaksud dengan pengenalan pola dalam Computational Thinking?",
    options: [
      "Mencari perbedaan dalam data",
      "Menemukan kesamaan atau pola dari beberapa contoh",
      "Membuat data menjadi acak",
      "Mengabaikan informasi penting"
    ],
    answer: 1
  },
  {
    question: "Pengenalan pola bermanfaat dalam pemrograman untuk...",
    options: [
      "Menebak-nebak solusi tanpa data",
      "Menemukan solusi yang pernah digunakan pada masalah serupa",
      "Membuat solusi acak",
      "Menghindari penggunaan algoritma"
    ],
    answer: 1
  },
  {
    question: "Saat mengamati data penjualan toko, pengenalan pola dilakukan dengan cara...",
    options: [
      "Mencatat semua transaksi tanpa analisis",
      "Mencari tren penjualan produk di waktu tertentu",
      "Menghapus data yang tidak penting",
      "Mengelompokkan barang secara acak"
    ],
    answer: 1
  },
  {
    question: "Contoh sederhana pengenalan pola di kehidupan sehari-hari adalah...",
    options: [
      "Menghitung pengeluaran secara manual",
      "Mengamati pola jam berangkat sekolah setiap hari",
      "Menghindari tugas rumah",
      "Membeli barang tanpa pertimbangan"
    ],
    answer: 1
  },
  {
    question: "Manfaat pengenalan pola saat membuat aplikasi absensi adalah...",
    options: [
      "Mengulang proses yang sama tanpa perubahan",
      "Mengidentifikasi pola kehadiran siswa untuk prediksi bolos",
      "Mengabaikan data kehadiran",
      "Membiarkan aplikasi berjalan tanpa analisis"
    ],
    answer: 1
  },

  // --- Abstraksi (11-15) ---
  {
    question: "Apa yang dimaksud dengan abstraksi dalam Computational Thinking?",
    options: [
      "Menyederhanakan masalah dengan hanya mengambil bagian penting",
      "Memecah masalah menjadi bagian kecil",
      "Mencari pola dari serangkaian data",
      "Menyusun urutan langkah solusi"
    ],
    answer: 0
  },
  {
    question: "Contoh penerapan abstraksi dalam aplikasi jadwal adalah...",
    options: [
      "Menampilkan semua detail aktivitas, tanpa filter",
      "Hanya menampilkan waktu dan nama kegiatan utama",
      "Menyusun langkah algoritma secara detail",
      "Memecah jadwal menjadi jam per menit"
    ],
    answer: 1
  },
  {
    question: "Manakah berikut ini yang merupakan manfaat utama abstraksi?",
    options: [
      "Membuat masalah menjadi lebih rumit",
      "Mempercepat proses tanpa memikirkan solusi",
      "Menyaring informasi sehingga lebih mudah dipahami",
      "Mengabaikan langkah-langkah penting"
    ],
    answer: 2
  },
  {
    question: "Pada desain aplikasi, abstraksi sering dilakukan dengan cara...",
    options: [
      "Membuat desain tanpa analisis",
      "Mengambil fitur inti dan mengabaikan detail tidak relevan",
      "Menyalin semua data mentah",
      "Menambah fitur sebanyak-banyaknya"
    ],
    answer: 1
  },
  {
    question: "Abstraksi membantu siswa dalam menyelesaikan masalah dengan cara...",
    options: [
      "Memfokuskan pada detail kecil",
      "Menemukan inti masalah tanpa kebingungan informasi",
      "Mencoba semua solusi sekaligus",
      "Mengerjakan secara acak"
    ],
    answer: 1
  },

  // --- Desain Algoritma (16-20) ---
  {
    question: "Apa yang dimaksud dengan desain algoritma dalam Computational Thinking?",
    options: [
      "Menyusun langkah-langkah solusi secara terstruktur dan logis",
      "Mengerjakan tanpa urutan",
      "Mengandalkan keberuntungan",
      "Mencari pola tanpa solusi"
    ],
    answer: 0
  },
  {
    question: "Langkah pertama dalam menyusun algoritma adalah...",
    options: [
      "Memahami masalah dan menentukan tujuan akhir",
      "Langsung membuat kode",
      "Menyalin algoritma dari internet",
      "Mengabaikan kebutuhan user"
    ],
    answer: 0
  },
  {
    question: "Manakah berikut ini yang termasuk algoritma sederhana dalam kehidupan sehari-hari?",
    options: [
      "Urutan memasak mie instan: panaskan air, masukkan mie, tambahkan bumbu, sajikan",
      "Membeli mie tanpa memasaknya",
      "Mencuci piring tanpa urutan",
      "Menyimpan barang sembarangan"
    ],
    answer: 0
  },
  {
    question: "Desain algoritma yang baik harus...",
    options: [
      "Memiliki langkah jelas dan mudah dipahami",
      "Membingungkan user",
      "Tidak ada hasil akhir",
      "Sembarangan urutan"
    ],
    answer: 0
  },
  {
    question: "Salah satu prinsip desain algoritma yang efektif adalah...",
    options: [
      "Membuat langkah sebanyak-banyaknya tanpa tujuan",
      "Mengutamakan efisiensi dan kejelasan urutan",
      "Melakukan proses berulang tanpa alasan",
      "Menghindari pengujian hasil"
    ],
    answer: 1
  }
]

// Label jawaban
const optionLabels = ['A', 'B', 'C', 'D']

// Topik mapping untuk UI label & warna
const topicMap = [
  { from: 0, to: 4, title: 'Dekomposisi', color: 'bg-blue-500/90' },
  { from: 5, to: 9, title: 'Pengenalan Pola', color: 'bg-emerald-500/90' },
  { from: 10, to: 14, title: 'Abstraksi', color: 'bg-fuchsia-500/90' },
  { from: 15, to: 19, title: 'Desain Algoritma', color: 'bg-orange-500/90' }
]
const currentTopic = computed(() => {
  const idx = currentIndex.value
  return topicMap.find(t => idx >= t.from && idx <= t.to) || topicMap[0]
})

// =========================
// --- State & Logic ---
// =========================
const currentIndex = ref(0)
const selectedAnswers = reactive(Array(questions.length).fill(null))
const quizState = ref('in-progress') // in-progress | finished
const score = ref(0)

function selectAnswer(idx) {
  selectedAnswers[currentIndex.value] = idx
}

function prevQuestion() {
  if (currentIndex.value > 0) currentIndex.value--
}

function nextOrSubmit() {
  if (currentIndex.value < questions.length - 1) {
    currentIndex.value++
  } else {
    submitQuiz()
  }
}

function submitQuiz() {
  let benar = 0
  questions.forEach((q, i) => {
    if (selectedAnswers[i] === q.answer) benar++
  })
  score.value = Math.round((benar / questions.length) * 100)
  quizState.value = 'finished'
}

function ulangQuiz() {
  for (let i = 0; i < selectedAnswers.length; i++) selectedAnswers[i] = null
  currentIndex.value = 0
  quizState.value = 'in-progress'
  score.value = 0
}
</script>
