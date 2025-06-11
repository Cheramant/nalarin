<template>
  <MainLayout>
    <Head title="Desain Algoritma - Aktivitas SAVI" />

    <section class="py-20 px-6 md:px-20 bg-[#0F1C2E] text-white min-h-screen">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold mb-10 text-center text-yellow-400">
          Aktivitas Terpadu Desain Algoritma dengan Pendekatan SAVI
        </h2>

        <!-- Somatic -->
        <div class="mb-16">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🖐️ Somatic: Simulasi Algoritma Fisik</h3>
          <p class="text-slate-300 mb-4">
            Bayangkan kamu adalah robot yang harus membuat secangkir teh. Susun urutan langkahnya dari kartu berikut:
          </p>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 bg-[#1E2B3A] p-6 rounded-xl shadow-lg text-sm text-slate-200">
            <ul class="space-y-2">
              <li class="bg-slate-700 px-3 py-2 rounded-lg">Tuang air ke dalam teko</li>
              <li class="bg-slate-700 px-3 py-2 rounded-lg">Masukkan teh celup ke gelas</li>
              <li class="bg-slate-700 px-3 py-2 rounded-lg">Panaskan air selama 5 menit</li>
              <li class="bg-slate-700 px-3 py-2 rounded-lg">Tuang air panas ke gelas</li>
              <li class="bg-slate-700 px-3 py-2 rounded-lg">Aduk dan sajikan</li>
            </ul>
            <div class="italic text-slate-400">
              Seret dan susun ulang langkah-langkah di atas ke urutan yang benar (simulasi).
            </div>
          </div>
        </div>

        <!-- Auditory -->
        <div class="mb-16">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🎧 Auditory: Dengarkan Narasi Algoritmik</h3>
          <blockquote class="bg-[#1E2B3A] p-6 rounded-xl italic text-slate-300 shadow-lg">
            "Algoritma ibarat resep masakan: tanpa urutan yang benar, hasilnya bisa gagal total.
            Sama halnya dengan solusi teknologi — butuh struktur dan urutan yang presisi."
          </blockquote>
        </div>

        <!-- Visual -->
        <div class="mb-16">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🖼️ Visual: Flowchart Sistem Penjualan</h3>
          <p class="text-slate-300 mb-4">Perhatikan flowchart sistem berikut dan coba pelajari alur prosesnya:</p>
          <div class="bg-[#1E2B3A] p-6 rounded-xl shadow text-center">
            <img src="/images/algoritma-penjualan.png" alt="Flowchart Penjualan" class="mx-auto rounded-lg shadow-lg mb-2" />
            <p class="text-sm text-slate-400">Flowchart: input barang → proses → output nota</p>
          </div>
        </div>

        <!-- Intellectual -->
        <div class="mb-16">
          <h3 class="text-2xl font-semibold text-yellow-300 mb-4">🧠 Intellectual: Refleksi Desain Algoritma</h3>
          <ul class="list-decimal list-inside text-slate-300 space-y-3 bg-[#1E2B3A] p-6 rounded-xl shadow">
            <li>Apa manfaat menyusun langkah secara berurutan dalam menyelesaikan masalah?</li>
            <li>Coba buat algoritma sederhana untuk kegiatan pagi harimu.</li>
            <li>Kenapa urutan dalam algoritma penting untuk logika komputer?</li>
          </ul>
        </div>

        <!-- Kesimpulan -->
        <div class="mt-20 text-center border-t border-slate-600 pt-8">
          <h3 class="text-2xl font-bold text-yellow-400 mb-4">Kesimpulan</h3>
          <p class="text-slate-300 mb-6 max-w-3xl mx-auto leading-relaxed">
            Desain algoritma membuat kita lebih terstruktur, logis, dan efisien dalam menyelesaikan masalah.
            Ini adalah inti dari berpikir komputasional yang sesungguhnya.
          </p>
          <Link
            href="/kuis"
            class="inline-block px-6 py-3 bg-gradient-to-r from-yellow-400 to-yellow-500 text-slate-900 font-semibold rounded-xl shadow hover:scale-105 transition"
          >
            Uji Kemampuanmu Lewat Kuis!
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
