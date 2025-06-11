
<template>
  <MainLayout>
    <Head title="Abstraksi - Intellectual" />

    <section class="min-h-screen bg-gradient-to-br from-rose-900 to-rose-800 text-white px-4 py-16">
      <div class="max-w-5xl mx-auto space-y-12">
        <!-- Header -->
        <header class="text-center space-y-4">
          <h1 class="text-4xl font-bold text-rose-200">🧠 Abstraksi - Intellectual</h1>
          <p class="text-lg text-neutral-200">
            Saatnya mengasah logika dan pemahamanmu dalam berpikir abstrak. Fokus pada hal-hal inti dan abaikan informasi yang tidak penting.
          </p>
        </header>

        <!-- Penjelasan Teori -->
        <div class="bg-[#2d1f4a] p-6 rounded-xl shadow space-y-4 text-neutral-300">
          <h2 class="text-xl font-semibold text-rose-300">🧠 Apa itu Abstraksi?</h2>
          <p>
            Dalam Computational Thinking, <strong>abstraksi</strong> adalah proses menyaring informasi untuk menemukan bagian yang paling penting dari sebuah masalah.
            Ini membantu kita untuk memahami sistem secara lebih efisien dan merancang solusi yang tepat.
          </p>
          <p>
            Misalnya, saat merancang aplikasi, kita tidak perlu tahu bagaimana semua detail kecil bekerja.
            Yang penting adalah <strong>fitur utama dan fungsionalitas utamanya</strong>.
          </p>
        </div>

        <!-- Studi Mini -->
        <div class="bg-[#2d1f4a] p-6 rounded-xl shadow space-y-4 text-neutral-300">
          <h2 class="text-lg font-semibold text-rose-300">🧪 Studi Mini</h2>
          <p>
            Bayangkan kamu sedang membuat sistem peminjaman buku digital untuk sekolah.
            Dari semua informasi berikut, mana yang penting untuk fitur peminjaman?
          </p>
          <ul class="list-disc list-inside space-y-1">
            <li>Judul dan pengarang buku</li>
            <li>Warna sampul buku</li>
            <li>Jumlah stok tersedia</li>
            <li>Nama kepala sekolah</li>
            <li>Status siswa (aktif/non-aktif)</li>
          </ul>
        </div>

        <!-- Quiz Interaktif -->
        <div class="bg-[#39266c] p-6 rounded-xl shadow text-neutral-100">
          <h2 class="text-lg font-semibold text-rose-300 mb-2">🧩 Pilih Informasi Penting:</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <label v-for="(opt, index) in options" :key="index" class="flex items-center space-x-2">
              <input type="checkbox" v-model="selected" :value="opt" class="form-checkbox h-5 w-5 text-rose-600" />
              <span>{{ opt }}</span>
            </label>
          </div>
          <div class="mt-4 space-x-4">
            <button @click="checkAnswer" class="px-4 py-2 bg-rose-600 hover:bg-rose-700 rounded">
              ✅ Cek Jawaban
            </button>
            <button
              @click="goToNext"
              :disabled="!isCorrect"
              class="px-4 py-2 bg-rose-700 hover:bg-rose-800 rounded disabled:opacity-50"
            >
              Lanjut ke Kesimpulan 🔍
            </button>
          </div>
          <div class="pt-4 text-rose-300 font-semibold" v-if="showFeedback && isCorrect">✅ Jawaban benar!</div>
          <div class="pt-4 text-red-300 font-semibold" v-if="showFeedback && !isCorrect">❌ Coba periksa lagi pilihanmu.</div>
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

const options = [
  'Judul dan pengarang buku',
  'Warna sampul buku',
  'Jumlah stok tersedia',
  'Nama kepala sekolah',
  'Status siswa (aktif/non-aktif)'
]

const selected = ref([])
const showFeedback = ref(false)
const isCorrect = ref(false)

function checkAnswer() {
  const correct = [
    'Judul dan pengarang buku',
    'Jumlah stok tersedia',
    'Status siswa (aktif/non-aktif)'
  ]
  isCorrect.value =
    selected.value.length === correct.length &&
    correct.every(c => selected.value.includes(c))
  showFeedback.value = true
}

function goToNext() {
  if (isCorrect.value) {
    router.visit('/materi/abstraksi/kesimpulan')
  }
}
</script>
