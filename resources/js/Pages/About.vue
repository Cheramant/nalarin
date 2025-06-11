<template>
  <MainLayout>
    <Head title="Tentang Nalarin" />
    <section class="min-h-screen bg-[#0F1C2E] text-white px-6 md:px-20 py-16">
      <div class="max-w-5xl mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold text-yellow-400 mb-6 text-center">🧠 Tentang Nalarin</h1>
        <p class="text-lg text-slate-300 mb-8 text-center leading-relaxed">
          <strong>Nalarin</strong> adalah platform e-learning interaktif yang dikembangkan untuk membantu siswa SMK memahami <span class="text-yellow-400 font-semibold">Computational Thinking (CT)</span> melalui pendekatan pembelajaran <span class="text-yellow-400 font-semibold">SAVI (Somatic, Auditory, Visual, Intellectual)</span>.
        </p>

        <div class="grid md:grid-cols-2 gap-8 text-slate-300 text-base leading-relaxed">
          <div class="bg-[#1E2B3A] p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold text-yellow-300 mb-3">🎯 Tujuan Utama</h2>
            <ul class="list-disc pl-5 space-y-2">
              <li>Meningkatkan minat dan pemahaman siswa terhadap Computational Thinking</li>
              <li>Menyediakan media belajar interaktif yang sesuai dengan gaya belajar siswa</li>
              <li>Menjadi sarana penelitian untuk mengukur efektivitas model SAVI</li>
            </ul>
          </div>

          <div class="bg-[#1E2B3A] p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold text-yellow-300 mb-3">🔍 Apa Itu SAVI?</h2>
            <ul class="list-disc pl-5 space-y-2">
              <li><strong>Somatic:</strong> Belajar melalui gerakan dan aktivitas langsung</li>
              <li><strong>Auditory:</strong> Belajar melalui pendengaran dan diskusi</li>
              <li><strong>Visual:</strong> Belajar dengan melihat gambar, warna, dan video</li>
              <li><strong>Intellectual:</strong> Belajar dengan berpikir kritis dan reflektif</li>
            </ul>
          </div>

          <div class="md:col-span-2 bg-[#1E2B3A] p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold text-yellow-300 mb-3">🧪 Tentang Proyek Ini</h2>
            <p>
              Website ini merupakan bagian dari penelitian skripsi yang dikembangkan oleh mahasiswa <strong>Pendidikan Teknik Informatika - Universitas Negeri Malang</strong>. Platform ini dirancang untuk digunakan dalam kegiatan pembelajaran nyata maupun uji coba penelitian akademik.
            </p>
          </div>
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
