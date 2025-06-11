<template>
  <MainLayout>
    <Head title="Dekomposisi - Pengantar" />

    <!-- Hero Slide -->
    <section class="bg-gradient-to-br from-purple-900 to-purple-700 text-white py-20 px-4 transition-all duration-700">
      <div class="max-w-4xl mx-auto text-center space-y-6 animate-fade-in">
        <h1 class="text-4xl font-bold text-purple-200">🔍 Pengantar Dekomposisi</h1>
        <p class="text-slate-200 text-lg">
          Dalam Computational Thinking, dekomposisi adalah kemampuan memecah masalah kompleks menjadi bagian-bagian yang lebih kecil, lebih mudah dipahami, dan diselesaikan.
        </p>
      </div>
    </section>

    <!-- Slide 2 -->
    <section class="bg-[#1e1b2e] py-16 px-4 text-white transition-all duration-700">
      <div class="max-w-5xl mx-auto space-y-8">
        <div class="animate-slide-up">
          <h2 class="text-2xl font-semibold text-purple-300">🧠 Mengapa Dekomposisi Penting?</h2>
          <p class="text-slate-300">
            Bayangkan kamu diminta membangun aplikasi belanja online. Jika kamu mencoba memikirkan semuanya sekaligus, kamu bisa kewalahan. Tapi jika kamu membagi tugas menjadi “buat halaman produk”, “sistem keranjang”, “checkout”, dan lainnya, semuanya jadi lebih mudah.
          </p>
        </div>
      </div>
    </section>

    <!-- Slide 3 -->
    <section class="bg-[#272240] py-16 px-4 text-white transition-all duration-700">
      <div class="max-w-5xl mx-auto space-y-8">
        <div class="animate-slide-up">
          <h2 class="text-2xl font-semibold text-purple-300">📦 Contoh Sehari-hari</h2>
          <ul class="list-disc pl-6 text-slate-300 space-y-2">
            <li>Menyiapkan sarapan: ambil bahan → panaskan alat → masak → sajikan</li>
            <li>Mengerjakan tugas besar: cari referensi → buat kerangka → tulis isi → revisi</li>
            <li>Membersihkan rumah: ruang tamu → kamar → dapur → kamar mandi</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-gradient-to-r from-purple-800 to-purple-600 text-white text-center px-4">
      <div class="max-w-3xl mx-auto space-y-4 animate-fade-in">
        <h2 class="text-2xl font-bold">Siap Menguraikan Masalah Kompleks?</h2>
        <p class="text-slate-100">Mari kita eksplorasi aktivitas berbasis SAVI untuk memahami dekomposisi lebih dalam.</p>
        <Link
          href="/materi/dekomposisi/somatic"
          class="inline-block mt-4 bg-white text-purple-700 font-semibold px-6 py-3 rounded-lg hover:bg-slate-100 transition"
        >
          Lanjut ke Aktivitas Somatic →
        </Link>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
</script>

<style scoped>
@keyframes fade-in {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes slide-up {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

.animate-fade-in {
  animation: fade-in 1s ease-out forwards;
}

.animate-slide-up {
  animation: slide-up 1s ease-out forwards;
}
</style>
