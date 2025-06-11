<template>
  <MainLayout>
    <Head title="Home" />

    <!-- HERO SECTION -->
    <section class="text-center py-16 px-6 md:px-20 bg-[#0F1C2E] text-white">
      <h2 class="text-3xl md:text-5xl font-bold leading-tight mb-4">
        Belajar Computational Thinking Jadi Menyenangkan bersama <span class="text-yellow-400">Nalarin</span>!
      </h2>
      <p class="text-lg md:text-xl text-slate-300 mb-6">
        Platform e-learning interaktif berbasis pendekatan <strong>SAVI</strong> untuk siswa SMK
      </p>
      <Link
        href="/materi"
        class="inline-block px-6 py-3 rounded-xl bg-gradient-to-r from-yellow-400 to-yellow-500 text-slate-900 font-semibold shadow hover:scale-105 transition"
      >
        Mulai Belajar
      </Link>
    </section>

    <!-- SAVI SECTION -->
    <section class="py-20 px-6 md:px-20 bg-[#10273A] text-white">
      <h3 class="text-2xl md:text-3xl font-bold text-center mb-12">
        Metode Pembelajaran <span class="text-yellow-400">SAVI</span>
      </h3>
      <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
        <div
          class="bg-[#1F2E46] p-6 rounded-2xl shadow hover:scale-105 transition transform duration-300"
        >
          <div class="text-yellow-400 text-3xl mb-4">
            <i class="lucide lucide-armchair"></i>
          </div>
          <h4 class="text-xl font-bold mb-2">Somatic</h4>
          <p class="text-slate-300 text-sm">
            Belajar dengan gerakan dan tindakan langsung agar lebih mudah dipahami.
          </p>
        </div>
        <div
          class="bg-[#1F2E46] p-6 rounded-2xl shadow hover:scale-105 transition transform duration-300"
        >
          <div class="text-yellow-400 text-3xl mb-4">
            <i class="lucide lucide-headphones"></i>
          </div>
          <h4 class="text-xl font-bold mb-2">Auditory</h4>
          <p class="text-slate-300 text-sm">
            Belajar lewat suara, diskusi, dan aktivitas mendengarkan yang menarik.
          </p>
        </div>
        <div
          class="bg-[#1F2E46] p-6 rounded-2xl shadow hover:scale-105 transition transform duration-300"
        >
          <div class="text-yellow-400 text-3xl mb-4">
            <i class="lucide lucide-image"></i>
          </div>
          <h4 class="text-xl font-bold mb-2">Visual</h4>
          <p class="text-slate-300 text-sm">
            Belajar melalui gambar, video, dan warna untuk memperkuat pemahaman.
          </p>
        </div>
        <div
          class="bg-[#1F2E46] p-6 rounded-2xl shadow hover:scale-105 transition transform duration-300"
        >
          <div class="text-yellow-400 text-3xl mb-4">
            <i class="lucide lucide-brain"></i>
          </div>
          <h4 class="text-xl font-bold mb-2">Intellectual</h4>
          <p class="text-slate-300 text-sm">
            Belajar dengan berpikir kritis, refleksi, dan pemecahan masalah nyata.
          </p>
        </div>
      </div>
    </section>

    <!-- FITUR UTAMA SECTION -->
    <section class="py-20 px-6 md:px-20 bg-[#0F1C2E] text-white">
      <h3 class="text-2xl md:text-3xl font-bold text-center mb-10">
        Apa yang Bisa Kamu Lakukan di <span class="text-yellow-400">Nalarin</span>?
      </h3>
      <div class="space-y-6 max-w-3xl mx-auto">
        <div class="flex items-start space-x-4">
          <div class="text-yellow-400 text-2xl mt-1">
            <i class="lucide lucide-book-open"></i>
          </div>
          <div>
            <h4 class="font-semibold text-lg">Akses Materi Computational Thinking</h4>
            <p class="text-slate-300 text-sm">
              Pelajari konsep CT secara sistematis dan terstruktur dalam bentuk teori dan latihan.
            </p>
          </div>
        </div>
        <div class="flex items-start space-x-4">
          <div class="text-yellow-400 text-2xl mt-1">
            <i class="lucide lucide-touchpad"></i>
          </div>
          <div>
            <h4 class="font-semibold text-lg">Aktivitas Interaktif SAVI</h4>
            <p class="text-slate-300 text-sm">
              Ikuti aktivitas seru berdasarkan gaya belajar kamu: somatik, audio, visual, atau intelektual.
            </p>
          </div>
        </div>
        <div class="flex items-start space-x-4">
          <div class="text-yellow-400 text-2xl mt-1">
            <i class="lucide lucide-timer"></i>
          </div>
          <div>
            <h4 class="font-semibold text-lg">Kuis dengan Timer</h4>
            <p class="text-slate-300 text-sm">
              Uji kemampuanmu dengan kuis berdurasi 10 menit dan dapatkan skor real-time.
            </p>
          </div>
        </div>
        <div class="flex items-start space-x-4">
          <div class="text-yellow-400 text-2xl mt-1">
            <i class="lucide lucide-bar-chart"></i>
          </div>
          <div>
            <h4 class="font-semibold text-lg">Pantau Skor & Perkembangan</h4>
            <p class="text-slate-300 text-sm">
              Lihat riwayat skor dan progres belajarmu dari waktu ke waktu.
            </p>
          </div>
        </div>
        <div class="flex items-start space-x-4">
          <div class="text-yellow-400 text-2xl mt-1">
            <i class="lucide lucide-case-sensitive"></i>
          </div>
          <div>
            <h4 class="font-semibold text-lg">Studi Kasus Nyata</h4>
            <p class="text-slate-300 text-sm">
              Terapkan ilmu CT dalam studi kasus yang relevan dengan kehidupan sehari-hari.
            </p>
          </div>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
</script>

<style scoped></style>
