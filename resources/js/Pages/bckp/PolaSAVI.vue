<template>
  <MainLayout>
    <Head title="Pengenalan Pola - Aktivitas SAVI" />

    <section class="py-20 px-6 md:px-20 bg-[#0F1C2E] text-white min-h-screen">
      <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold mb-10 text-center text-yellow-400">
          Aktivitas Pembelajaran Pengenalan Pola dengan Pendekatan SAVI
        </h2>

        <!-- Somatic -->
        <div class="mb-12">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🖐️ Somatic</h3>
          <p class="text-slate-300 mb-4">
            Identifikasi pola dari aktivitas berikut secara fisik atau visual:
          </p>
          <div class="bg-[#1E2B3A] p-6 rounded-xl shadow space-y-2">
            <p class="text-sm text-slate-400">
              Urutkan aktivitas harian berikut untuk menunjukkan pola kebiasaanmu:
            </p>
            <ul class="grid grid-cols-2 sm:grid-cols-3 gap-4 mt-4 text-sm text-slate-100">
              <li class="bg-slate-700 px-3 py-2 rounded-lg">Bangun Tidur</li>
              <li class="bg-slate-700 px-3 py-2 rounded-lg">Sarapan</li>
              <li class="bg-slate-700 px-3 py-2 rounded-lg">Berangkat Sekolah</li>
              <li class="bg-slate-700 px-3 py-2 rounded-lg">Belajar</li>
              <li class="bg-slate-700 px-3 py-2 rounded-lg">Istirahat</li>
            </ul>
          </div>
        </div>

        <!-- Auditory -->
        <div class="mb-12">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🎧 Auditory</h3>
          <p class="text-slate-300 mb-2">
            Simak narasi berikut atau bacakan secara berpasangan:
          </p>
          <blockquote class="bg-[#1E2B3A] p-6 rounded-xl italic text-slate-300 shadow">
            "Ketika kita menghadapi masalah, mengenali pola dari masalah sebelumnya
            dapat membantu kita menyelesaikan masalah baru dengan lebih cepat. Otak manusia
            secara alami senang mencari pola — dan kita bisa melatihnya!"
          </blockquote>
        </div>

        <!-- Visual -->
        <div class="mb-12">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🖼️ Visual</h3>
          <p class="text-slate-300 mb-4">
            Perhatikan gambar berikut. Apa pola yang dapat kamu identifikasi?
          </p>
          <div class="bg-[#1E2B3A] p-6 rounded-xl shadow text-center">
            <img src="/images/pola-bentuk.png" alt="Ilustrasi pola" class="mx-auto mb-4 rounded-lg shadow-lg" />
            <p class="text-slate-400 text-sm">Amati bentuk dan urutan warna, lalu identifikasi polanya.</p>
          </div>
        </div>

        <!-- Intellectual -->
        <div class="mb-12">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🧠 Intellectual</h3>
          <p class="text-slate-300 mb-4">
            Jawab pertanyaan berikut untuk menguji pemahamanmu:
          </p>
          <div class="bg-[#1E2B3A] p-6 rounded-xl shadow space-y-3">
            <ul class="list-decimal list-inside text-slate-300 space-y-2">
              <li>Jelaskan bagaimana mengenali pola bisa mempercepat proses menyelesaikan masalah?</li>
              <li>Berikan satu contoh pola dari kehidupan nyata yang sering kamu temui.</li>
            </ul>
          </div>
        </div>

        <!-- Kesimpulan -->
        <div class="mt-16 text-center border-t border-slate-600 pt-8">
          <h3 class="text-2xl font-bold text-yellow-400 mb-4">Kesimpulan</h3>
          <p class="text-slate-300 mb-6 max-w-2xl mx-auto">
            Pengenalan Pola adalah kemampuan penting untuk mengenali kemiripan dan struktur berulang dari masalah.
            Dengan mengenali pola, kita dapat menyusun solusi yang lebih efisien dan kreatif.
          </p>
          <Link
            href="/materi/abstraksi"
            class="inline-block px-6 py-3 bg-gradient-to-r from-yellow-400 to-yellow-500 text-slate-900 font-semibold rounded-xl shadow hover:scale-105 transition"
          >
            Lanjut ke Topik Abstraksi
          </Link>
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
