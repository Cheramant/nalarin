<template>
  <MainLayout>
    <Head title="Abstraksi - Aktivitas SAVI" />

    <section class="py-20 px-6 md:px-20 bg-[#0F1C2E] text-white min-h-screen">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold mb-10 text-center text-yellow-400">
          Aktivitas Terpadu Abstraksi dengan Pendekatan SAVI
        </h2>

        <!-- Somatic -->
        <div class="mb-16">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🖐️ Somatic: Praktik Abstraksi Visual</h3>
          <p class="text-slate-300 mb-4">
            Simulasi berikut membantu kamu belajar menyederhanakan informasi dari gambar nyata:
          </p>
          <div class="bg-[#1E2B3A] p-6 rounded-xl shadow text-center">
            <img src="/images/situasi-pasar.png" alt="Situasi Pasar" class="mx-auto rounded-lg shadow-lg mb-4" />
            <p class="text-slate-300">Apa saja informasi penting dari gambar ini yang bisa dijadikan model sistem?</p>
            <ul class="text-left list-disc list-inside mt-4 text-slate-200 text-sm">
              <li>Jenis transaksi yang dilakukan</li>
              <li>Pelaku kegiatan</li>
              <li>Alur arus barang dan uang</li>
            </ul>
          </div>
        </div>

        <!-- Auditory -->
        <div class="mb-16">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🎧 Auditory: Narasi Abstraksi</h3>
          <blockquote class="bg-[#1E2B3A] p-6 rounded-xl italic text-slate-300 shadow-lg">
            "Dalam hidup, kita setiap hari menyederhanakan hal kompleks: memilih menu makan, membuat jadwal, 
            bahkan menentukan jalur pulang tercepat. Semua itu adalah bentuk abstraksi. Kita fokus pada yang penting."
          </blockquote>
        </div>

        <!-- Visual -->
        <div class="mb-16">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🖼️ Visual: Model Sistem Abstraksi</h3>
          <p class="text-slate-300 mb-4">
            Lihat diagram berikut. Ini adalah hasil abstraksi dari sistem perpustakaan:
          </p>
          <div class="bg-[#1E2B3A] p-6 rounded-xl shadow">
            <img src="/images/abstraksi-perpus.png" alt="Model Sistem Abstraksi" class="mx-auto rounded-lg mb-3" />
            <p class="text-sm text-slate-400 text-center">Diagram alur pengguna → peminjaman → database</p>
          </div>
        </div>

        <!-- Intellectual -->
        <div class="mb-16">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🧠 Intellectual: Pertanyaan Refleksi</h3>
          <p class="text-slate-300 mb-4">Jawablah pertanyaan berikut untuk menguji pemahamanmu:</p>
          <ul class="list-decimal list-inside text-slate-300 space-y-3 bg-[#1E2B3A] p-6 rounded-xl shadow">
            <li>Mengapa abstraksi penting saat menyusun program komputer?</li>
            <li>Bagaimana kamu menentukan informasi yang penting dan yang tidak dalam suatu masalah?</li>
            <li>Buat contoh sendiri dari kehidupan nyata yang menunjukkan penggunaan abstraksi.</li>
          </ul>
        </div>

        <!-- Kesimpulan -->
        <div class="mt-20 text-center border-t border-slate-600 pt-8">
          <h3 class="text-2xl font-bold text-yellow-400 mb-4">Kesimpulan</h3>
          <p class="text-slate-300 mb-6 max-w-3xl mx-auto leading-relaxed">
            Abstraksi adalah keterampilan berpikir untuk menyaring hal yang esensial. Dengan mengasah kemampuan ini,
            kamu dapat menjadi pemecah masalah yang lebih cepat, lebih fokus, dan lebih efisien.
          </p>
          <Link
            href="/materi/algoritma"
            class="inline-block px-6 py-3 bg-gradient-to-r from-yellow-400 to-yellow-500 text-slate-900 font-semibold rounded-xl shadow hover:scale-105 transition"
          >
            Lanjut ke Topik Desain Algoritma
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
