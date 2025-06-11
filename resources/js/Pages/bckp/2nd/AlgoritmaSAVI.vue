<template>
  <MainLayout>
    <Head title="Desain Algoritma - Aktivitas SAVI" />

    <!-- Header Section -->
    <section class="bg-gradient-to-br from-cyan-900 to-cyan-700 text-white py-20 px-4">
      <div class="max-w-4xl mx-auto text-center space-y-6">
        <h1 class="text-4xl font-bold text-cyan-300">💡 Aktivitas Desain Algoritma Berbasis SAVI</h1>
        <p class="text-slate-100 text-lg">Mari kita rancang solusi melalui simulasi, suara, visualisasi, dan refleksi pemikiran kritis.</p>
      </div>
    </section>

    <!-- SAVI Activities -->
    <section class="bg-[#0f1c2e] py-16 px-4">
      <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">

        <!-- Somatic -->
        <div class="bg-[#163045] p-6 rounded-xl shadow transition hover:scale-105">
          <h2 class="text-2xl font-semibold text-cyan-300 mb-2">🖐️ Somatic</h2>
          <p class="text-slate-300 text-sm mb-4">Seret dan urutkan langkah-langkah berikut untuk membuat algoritma memasak mie instan secara benar.</p>
          <img src="https://dummyimage.com/400x200/3c5f74/ffffff&text=Drag+Langkah+Algoritma" class="rounded-md border border-cyan-500" alt="Simulasi Algoritma Somatic">
        </div>

        <!-- Auditory -->
        <div class="bg-[#163045] p-6 rounded-xl shadow transition hover:scale-105">
          <h2 class="text-2xl font-semibold text-cyan-300 mb-2">🎧 Auditory</h2>
          <p class="text-slate-300 text-sm mb-4">Dengarkan penjelasan suara ini: cara membuat algoritma pengurutan data secara logis dan efisien.</p>
          <audio controls class="w-full rounded shadow">
            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-5.mp3" type="audio/mpeg">
            Browser kamu tidak mendukung audio.
          </audio>
        </div>

        <!-- Visual -->
        <div class="bg-[#163045] p-6 rounded-xl shadow transition hover:scale-105">
          <h2 class="text-2xl font-semibold text-cyan-300 mb-2">🖼️ Visual</h2>
          <p class="text-slate-300 text-sm mb-4">Perhatikan flowchart berikut: identifikasi langkah awal dan akhir dari algoritma login ke aplikasi web.</p>
          <img src="https://dummyimage.com/500x280/457c9b/ffffff&text=Flowchart+Algoritma" class="rounded border border-cyan-500" alt="Flowchart Visual Algoritma">
        </div>

        <!-- Intellectual -->
        <div class="bg-[#163045] p-6 rounded-xl shadow transition hover:scale-105">
          <h2 class="text-2xl font-semibold text-cyan-300 mb-2">🧠 Intellectual</h2>
          <p class="text-slate-300 text-sm mb-4">Coba refleksikan: langkah apa saja yang kamu lakukan setiap pagi sebelum berangkat sekolah, dan bisa dijadikan algoritma?</p>
          <textarea class="w-full mt-2 p-3 text-sm rounded-lg bg-[#0f1c2e] text-white border border-cyan-500" rows="4" placeholder="Tuliskan algoritma rutinitas pagimu..."></textarea>
        </div>
      </div>
    </section>

    <!-- Conclusion and Navigation -->
    <section class="py-16 bg-gradient-to-r from-cyan-800 to-cyan-600 text-white text-center px-4">
      <div class="max-w-3xl mx-auto space-y-4">
        <h2 class="text-2xl font-bold">📘 Kesimpulan</h2>
        <p class="text-slate-100">Desain algoritma mengajarkan kita cara berpikir sistematis dan menyusun langkah demi langkah untuk menyelesaikan masalah.</p>
        <Link href="/kuis" class="inline-block mt-4 bg-white text-cyan-700 font-semibold px-6 py-3 rounded-lg hover:bg-slate-100 transition">
          Uji Pemahamanmu: Lanjut ke Kuis!
        </Link>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
</script>

<style scoped></style>
