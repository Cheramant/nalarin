<template>
  <MainLayout>
    <Head title="Abstraksi - Visual" />

    <section class="min-h-screen bg-gradient-to-br from-indigo-900 to-purple-800 text-white px-4 py-16">
      <div class="max-w-5xl mx-auto space-y-12">

        <!-- Judul -->
        <header class="text-center space-y-4">
          <h1 class="text-4xl font-bold text-purple-200">👁️ Abstraksi - Visual</h1>
          <p class="text-lg text-slate-200">
            Visualisasi memungkinkan kita menyaring informasi yang kompleks dan menyoroti bagian inti dari suatu masalah.
          </p>
        </header>

        <!-- Ilustrasi Visual Abstraksi -->
        <div class="bg-[#2d1f4a] p-6 rounded-xl shadow space-y-6">
          <h2 class="text-xl font-semibold text-purple-300">📷 Contoh Visual Abstraksi</h2>
          <img src="/images/abstraksi-visual.svg" alt="Ilustrasi Abstraksi" class="rounded-lg mx-auto shadow-lg w-full max-w-xl" />
          <p class="text-slate-300 text-center">
            Gambar ini menunjukkan penyederhanaan tampilan aplikasi, hanya menampilkan elemen penting seperti waktu, jadwal, dan tombol aksi. Detail teknis disembunyikan untuk memudahkan pemahaman.
          </p>
        </div>

        <!-- Penjelasan Konsep Visual -->
        <div class="bg-[#261b3f] p-6 rounded-xl shadow text-slate-200 space-y-4">
          <h2 class="text-xl font-semibold text-purple-300">🧠 Mengapa Visualisasi Efektif dalam Abstraksi?</h2>
          <p>
            Visual membantu kita memahami informasi dengan lebih cepat. Abstraksi dalam konteks visual berarti menyaring elemen yang relevan agar fokus pada inti solusi.
          </p>
          <p>
            Contohnya seperti pada antarmuka aplikasi yang menampilkan hanya tombol-tombol penting dan konten utama. Informasi pendukung seperti sistem database tidak perlu ditampilkan ke pengguna.
          </p>
          <p>
            Sama seperti peta kota yang hanya menunjukkan jalan besar dan tempat penting, visual dalam abstraksi bertujuan untuk mempermudah navigasi dan pengambilan keputusan.
          </p>
        </div>

        <!-- Kuis Interaktif -->
        <div class="bg-[#2d1f4a] p-6 rounded-xl shadow-lg space-y-6">
          <h2 class="text-xl font-semibold text-purple-300">🧪 Kuis Visual Abstraksi</h2>
          <p class="text-slate-300">Pilih tampilan mana yang mencerminkan prinsip abstraksi visual:</p>

          <div class="flex flex-col gap-4">
            <label
              v-for="(option, index) in options"
              :key="index"
              class="flex items-center gap-3 p-3 border border-purple-600 rounded-lg cursor-pointer hover:bg-purple-700 transition-all"
              :class="{
                'bg-green-600 text-white': selected === option.value && option.value === 'c',
                'bg-red-600 text-white': selected === option.value && option.value !== 'c'
              }"
            >
              <input
                type="radio"
                class="form-radio h-5 w-5 text-purple-500 focus:ring-purple-400"
                :value="option.value"
                v-model="selected"
              />
              <span>{{ option.label }}</span>
            </label>
          </div>

          <div v-if="selected" class="mt-4 p-4 rounded-lg" :class="selected === 'c' ? 'bg-green-700' : 'bg-red-700'">
            <p class="font-semibold text-white">
              {{ selected === 'c' ? '✅ Benar! Gambar tersebut menyaring informasi dan fokus pada elemen penting.' : '❌ Kurang tepat. Pikirkan kembali bagaimana visualisasi dapat menyederhanakan informasi.' }}
            </p>
          </div>

          <div class="text-center mt-6">
            <a
              href="/materi/abstraksi/intellectual"
              class="inline-block bg-purple-600 text-white font-semibold px-6 py-3 rounded-xl shadow transition-all duration-300 hover:bg-purple-700"
              :class="{ 'opacity-50 cursor-not-allowed pointer-events-none': selected !== 'c' }"
            >
              Lanjut ke Abstraksi Intellectual
            </a>
          </div>
        </div>

      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import MainLayout from '@/Layouts/MainLayout.vue'
import { ref } from 'vue'
import { Head } from '@inertiajs/vue3'

const selected = ref(null)
const options = [
  { label: 'Tampilan penuh kode dan data mentah', value: 'a' },
  { label: 'Gambar dengan semua detail teknis aplikasi', value: 'b' },
  { label: 'Desain yang menampilkan elemen inti saja', value: 'c' }
]
</script>

<style scoped>
.form-radio {
  appearance: none;
  border: 2px solid white;
  border-radius: 50%;
  width: 20px;
  height: 20px;
  background-color: transparent;
  transition: 0.2s;
}
.form-radio:checked {
  background-color: #a855f7;
  border-color: #a855f7;
}
</style>
