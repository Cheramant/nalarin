<template>
  <MainLayout>
    <Head title="Dekomposisi - Auditory" />

    <section class="min-h-screen bg-gradient-to-br from-indigo-950 to-purple-950 text-white py-16 px-4">
      <div class="max-w-5xl mx-auto space-y-10">
        <header class="text-center space-y-4">
          <h1 class="text-4xl font-bold text-purple-300">🔊 Dekomposisi: Pendekatan Auditory</h1>
          <p class="text-lg text-slate-200">Dengarkan narasi pembelajaran dan pahami bagaimana cara memecah masalah menjadi bagian yang lebih kecil.</p>
        </header>

        <!-- Audio Player -->
        <div class="bg-[#1f1b2e] p-6 rounded-xl shadow-md space-y-4 text-center">
          <h2 class="text-xl font-semibold text-purple-200">🎧 Dengarkan Narasi</h2>
          <audio controls class="w-full rounded-lg">
            <source src="/sounds/narasi1.mp3" type="audio/mp3" />
            Browser Anda tidak mendukung audio.
          </audio>
          <p class="text-sm text-slate-400">*Gunakan headset agar lebih fokus dalam memahami materi</p>
        </div>

        <!-- Ringkasan Materi -->
        <div class="bg-[#292240] p-6 rounded-xl space-y-4">
          <h3 class="text-xl font-bold text-purple-200">📚 Ringkasan Materi</h3>
          <p class="text-slate-100">
            Dekomposisi adalah proses memecah suatu masalah kompleks menjadi bagian-bagian yang lebih kecil dan mudah dikelola. Dalam kehidupan sehari-hari, kita sering menerapkan dekomposisi tanpa sadar, seperti saat mempersiapkan rutinitas pagi. Setiap bagian dari proses tersebut — bangun tidur, mandi, sarapan, hingga mempersiapkan barang — adalah contoh nyata dari dekomposisi.
          </p>
          <p class="text-slate-300 italic">“Dengan mendengar penjelasan secara runtut, kita bisa membayangkan dan memahami struktur masalah secara lebih jelas.”</p>
        </div>

        <!-- Interaktif Refleksi -->
        <div class="bg-[#1e1933] p-6 rounded-xl space-y-4">
          <h3 class="text-xl font-bold text-purple-200">🧠 Jawaban Cepat</h3>
          <p class="text-slate-300">Pilih jawaban yang sesuai dengan narasi yang kamu dengarkan:</p>
          <div class="space-y-4">
            <div>
              <p class="mb-2 text-slate-200">1. Apa itu dekomposisi?</p>
              <label class="block"><input type="checkbox" class="appearance-none w-5 h-5 border-2 border-purple-500 rounded-md checked:bg-purple-600 checked:border-transparent focus:outline-none transition duration-150 ease-in-out mr-2" v-model="answers.q1" value="wrong1" /> Membuat masalah jadi lebih rumit</label>
              <label class="block"><input type="checkbox" class="appearance-none w-5 h-5 border-2 border-purple-500 rounded-md checked:bg-purple-600 checked:border-transparent focus:outline-none transition duration-150 ease-in-out mr-2" v-model="answers.q1" value="right1" /> Memecah masalah jadi bagian kecil</label>
              <label class="block"><input type="checkbox" class="appearance-none w-5 h-5 border-2 border-purple-500 rounded-md checked:bg-purple-600 checked:border-transparent focus:outline-none transition duration-150 ease-in-out mr-2" v-model="answers.q1" value="wrong2" /> Menyalin masalah orang lain</label>
            </div>
            <div>
              <p class="mb-2 text-slate-200">2. Contoh dekomposisi dalam kehidupan sehari-hari:</p>
              <label class="block"><input type="checkbox" class="appearance-none w-5 h-5 border-2 border-purple-500 rounded-md checked:bg-purple-600 checked:border-transparent focus:outline-none transition duration-150 ease-in-out mr-2" v-model="answers.q2" value="wrong3" /> Mengerjakan ujian langsung semua soal</label>
              <label class="block"><input type="checkbox" class="appearance-none w-5 h-5 border-2 border-purple-500 rounded-md checked:bg-purple-600 checked:border-transparent focus:outline-none transition duration-150 ease-in-out mr-2" v-model="answers.q2" value="right2" /> Rutinitas pagi seperti mandi dan sarapan</label>
              <label class="block"><input type="checkbox" class="appearance-none w-5 h-5 border-2 border-purple-500 rounded-md checked:bg-purple-600 checked:border-transparent focus:outline-none transition duration-150 ease-in-out mr-2" v-model="answers.q2" value="wrong4" /> Menunda pekerjaan terus menerus</label>
            </div>
            <button @click="checkAnswers" class="mt-4 bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded">Cek Jawaban</button>
            <div v-if="feedback" class="mt-4 p-4 rounded-lg" :class="feedbackClass">
              {{ feedback }}
            </div>
          </div>
        </div>

        <!-- CTA -->
        <div class="text-center pt-10">
          <button
            :disabled="!canProceed"
            @click="goNext"
            class="inline-block bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg font-semibold text-lg transition disabled:opacity-50 disabled:cursor-not-allowed"
          >
            Lanjut ke Visual →
          </button>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { Head, router } from '@inertiajs/vue3'
import { ref, computed } from 'vue'
import MainLayout from '@/Layouts/MainLayout.vue'

const answers = ref({
  q1: [],
  q2: []
})

const feedback = ref('')
const canProceed = ref(false)

const feedbackClass = computed(() => {
  return feedback.value.includes('Benar') ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
})

function checkAnswers() {
  const correct1 = answers.value.q1.includes('right1') && answers.value.q1.length === 1
  const correct2 = answers.value.q2.includes('right2') && answers.value.q2.length === 1

  if (correct1 && correct2) {
    feedback.value = '✅ Jawaban Kamu Benar! Kamu memahami konsep dekomposisi dengan baik.'
    canProceed.value = true
  } else {
    feedback.value = '❌ Beberapa jawaban masih kurang tepat. Coba dengarkan narasi kembali dan perhatikan poin pentingnya.'
    canProceed.value = false
  }
}

function goNext() {
  if (canProceed.value) {
    router.visit('/materi/dekomposisi/visual')
  }
}
</script>
