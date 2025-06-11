<template>
  <MainLayout>
    <Head title="Abstraksi - Visual" />

    <section class="min-h-screen bg-gradient-to-br from-rose-900 to-rose-800 text-white px-4 py-16">
      <div class="max-w-5xl mx-auto space-y-12">

        <!-- Judul -->
        <header class="text-center space-y-4">
          <h1 class="text-4xl font-bold text-rose-200">👁️ Abstraksi - Visual</h1>
          <p class="text-lg text-neutral-200">
            Abstraksi memudahkan kita fokus pada informasi paling penting, seperti pada aplikasi Android yang hanya menampilkan jadwal dan tombol aksi inti.
          </p>
        </header>

        <!-- Ilustrasi Visual Abstraksi -->
        <div class="bg-[#2d1f4a] p-6 rounded-xl shadow space-y-6">
          <h2 class="text-xl font-semibold text-rose-300">📱 Contoh Abstraksi pada Aplikasi Jadwal</h2>
          <img src="/images/abstraksi-visual.png" alt="Ilustrasi Abstraksi Jadwal Android" class="rounded-lg mx-auto shadow-lg w-80 max-w-xl" />
          <p class="text-neutral-300 text-center">
            Ilustrasi ini menunjukkan antarmuka aplikasi jadwal gaya Android. Hanya informasi utama yang ditampilkan: jam saat ini, daftar jadwal, dan tombol aksi seperti "Tambah" & "Selesai". Semua detail teknis (pengaturan, log, notifikasi sistem, dll) disembunyikan agar pengguna mudah memahami fungsinya tanpa gangguan.
          </p>
        </div>

        <!-- Penjelasan Konsep Visual -->
        <div class="bg-[#261b3f] p-6 rounded-xl shadow text-neutral-200 space-y-4">
          <h2 class="text-xl font-semibold text-rose-300">🧠 Mengapa Abstraksi Penting dalam Desain Aplikasi?</h2>
          <p>
            Abstraksi adalah proses <b>menyaring detail penting</b> dan <b>menghilangkan kerumitan</b> yang tidak perlu dilihat pengguna. Pada aplikasi Android, prinsip ini diwujudkan dalam antarmuka yang sederhana—pengguna hanya melihat info esensial, sedangkan sistem bekerja di balik layar.
          </p>
          <p>
            Dengan abstraksi, aplikasi menjadi <b>lebih mudah digunakan</b>, <b>minim distraksi</b>, dan <b>fokus pada tujuan utama</b>. Sebagai contoh, ketika kita membuka aplikasi jadwal, kita tidak perlu melihat bagaimana data diolah, bagaimana server berkomunikasi, atau bagaimana database disusun—semua itu sudah “diabstraksikan”.
          </p>
          <p>
            Inilah kekuatan abstraksi: memudahkan pengguna memproses informasi, meningkatkan efisiensi, dan mengurangi kemungkinan kesalahan karena overload informasi.
          </p>
        </div>

        <!-- Kuis Interaktif -->
        <div class="bg-[#2d1f4a] p-6 rounded-xl shadow-lg space-y-6">
          <h2 class="text-xl font-semibold text-rose-300">🧪 Kuis Visual Abstraksi</h2>
          <p class="text-neutral-300">Manakah tampilan berikut yang mencerminkan prinsip abstraksi pada aplikasi Android?</p>

          <div class="flex flex-col gap-4">
            <label
              v-for="(option, index) in options"
              :key="index"
              class="flex items-center gap-3 p-3 border border-rose-600 rounded-lg cursor-pointer hover:bg-rose-700 transition-all"
              :class="{
                'bg-rose-600 text-white': selected === option.value && option.value === 'c',
                'bg-red-600 text-white': selected === option.value && option.value !== 'c'
              }"
            >
              <input
                type="radio"
                class="form-radio h-5 w-5 text-rose-500 focus:ring-rose-400"
                :value="option.value"
                v-model="selected"
              />
              <span>{{ option.label }}</span>
            </label>
          </div>

          <div v-if="selected" class="mt-4 p-4 rounded-lg" :class="selected === 'c' ? 'bg-rose-700' : 'bg-red-700'">
            <p class="font-semibold text-white">
              {{ selected === 'c'
                ? '✅ Benar! Abstraksi pada aplikasi Android hanya menampilkan elemen utama, seperti jadwal dan tombol aksi, agar mudah digunakan.'
                : '❌ Kurang tepat. Prinsip abstraksi justru menyembunyikan detail teknis yang tidak diperlukan pengguna.' }}
            </p>
          </div>

          <div class="text-center mt-6">
            <a
              href="/materi/abstraksi/intellectual"
              class="inline-block bg-rose-600 text-white font-semibold px-6 py-3 rounded-xl shadow transition-all duration-300 hover:bg-rose-700"
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
  { label: 'Tampilan dengan seluruh log dan detail teknis aplikasi', value: 'a' },
  { label: 'Desain penuh notifikasi, pengaturan, dan menu tersembunyi', value: 'b' },
  { label: 'Antarmuka sederhana: hanya jadwal & tombol inti', value: 'c' }
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
