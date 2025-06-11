<template>
  <MainLayout>
    <Head title="Abstraksi - Teori" />

    <section class="py-20 px-6 md:px-20 bg-[#0F1C2E] text-white min-h-screen">
      <div class="max-w-5xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold mb-8 text-yellow-400 text-center">
          Apa Itu Abstraksi?
        </h2>
        <p class="text-lg text-slate-300 mb-6 leading-relaxed text-justify">
          <strong>Abstraksi</strong> adalah kemampuan untuk fokus pada informasi penting dan mengabaikan detail yang tidak relevan.
          Ini memungkinkan kita menyederhanakan masalah dan membentuk pemahaman yang lebih efektif dan efisien.
        </p>
        <p class="text-lg text-slate-300 mb-6 leading-relaxed text-justify">
          Dalam Computational Thinking, abstraksi memungkinkan kita membuat model dari situasi nyata. Dengan membuat
          representasi sederhana dari masalah yang kompleks, kita bisa lebih mudah menyusun solusi.
        </p>

        <div class="space-y-6 text-slate-300">
          <h3 class="text-2xl font-semibold text-yellow-300">📌 Contoh Kehidupan Nyata</h3>
          <p>
            Saat kamu membaca peta, kamu tidak melihat semua detail seperti lampu jalan atau jumlah pohon — hanya yang penting seperti nama jalan dan arah. Itulah abstraksi.
          </p>

          <h3 class="text-2xl font-semibold text-yellow-300">💡 Contoh di Dunia Komputer</h3>
          <p>
            Dalam pemrograman, fungsi atau modul adalah bentuk abstraksi — kita cukup tahu apa yang dilakukan fungsi itu, tanpa perlu tahu detail bagaimana ia bekerja.
          </p>
        </div>

        <div class="mt-12 border-t border-slate-600 pt-8">
          <h3 class="text-2xl font-semibold text-yellow-400 mb-4 text-center">Tujuan Pembelajaran</h3>
          <ul class="list-disc list-inside space-y-3 text-slate-200 max-w-2xl mx-auto">
            <li>Siswa memahami konsep abstraksi dalam konteks pemecahan masalah.</li>
            <li>Siswa mampu menyaring informasi penting dari masalah kompleks.</li>
            <li>Siswa dapat menyusun model sederhana dari situasi nyata.</li>
          </ul>
        </div>
        <button class="mt-4 bg-yellow-400 text-black py-1 px-4 rounded hover:bg-yellow-300 text-sm font-semibold transition">Mulai Belajar</button>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
</script>

<style scoped></style>
