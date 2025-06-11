<template>
  <MainLayout>
    <Head title="Desain Algoritma - Teori" />

    <section class="py-20 px-6 md:px-20 bg-[#0F1C2E] text-white min-h-screen">
      <div class="max-w-5xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold mb-8 text-yellow-400 text-center">
          Apa Itu Desain Algoritma?
        </h2>
        <p class="text-lg text-slate-300 mb-6 leading-relaxed text-justify">
          <strong>Desain algoritma</strong> adalah proses menyusun langkah-langkah logis yang digunakan untuk menyelesaikan suatu permasalahan.
          Algoritma membantu kita menjabarkan solusi secara sistematis, terstruktur, dan dapat diulang oleh mesin maupun manusia.
        </p>
        <p class="text-lg text-slate-300 mb-6 leading-relaxed text-justify">
          Dalam dunia pemrograman dan Computational Thinking, desain algoritma sangat penting untuk memastikan solusi yang dibuat efisien,
          tidak membingungkan, dan mampu mengatasi kasus-kasus tak terduga.
        </p>

        <div class="space-y-6 text-slate-300">
          <h3 class="text-2xl font-semibold text-yellow-300">🔧 Contoh Kehidupan Sehari-Hari</h3>
          <p>
            Saat membuat mie instan, kamu mengikuti algoritma: panaskan air, masukkan mie, tambahkan bumbu, aduk, sajikan.
            Itu adalah algoritma sederhana.
          </p>

          <h3 class="text-2xl font-semibold text-yellow-300">💻 Contoh di Dunia Teknologi</h3>
          <p>
            Ketika membuat aplikasi kasir, algoritma dibutuhkan untuk menentukan total belanja, diskon, kembalian,
            dan mencetak struk. Setiap langkah harus ditulis jelas, agar komputer bisa menjalankannya.
          </p>
        </div>

        <div class="mt-12 border-t border-slate-600 pt-8">
          <h3 class="text-2xl font-semibold text-yellow-400 mb-4 text-center">Tujuan Pembelajaran</h3>
          <ul class="list-disc list-inside space-y-3 text-slate-200 max-w-2xl mx-auto">
            <li>Memahami pengertian dan fungsi algoritma dalam menyelesaikan masalah.</li>
            <li>Menyusun langkah-langkah penyelesaian masalah secara logis dan terstruktur.</li>
            <li>Menuliskan algoritma dalam bentuk pseudocode atau diagram alir.</li>
          </ul>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
</script>

<style scoped></style>
