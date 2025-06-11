<template>
  <div class="bg-[#0F1C2E] text-white min-h-screen flex flex-col">
    <!-- Navbar -->
    <header class="sticky top-0 z-50 bg-[#0F1C2E]/80 backdrop-blur border-b border-slate-800 shadow">
      <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <Link href="/" class="text-2xl font-bold text-blue-400 hover:opacity-80 transition">Nalarin</Link>
        <ul class="flex space-x-6 text-sm md:text-base font-medium items-center">
          <template v-if="!isAuth">
            <li><Link href="/" class="hover:text-blue-400 transition">Home</Link></li>
            <li><Link href="/about" class="hover:text-blue-400 transition">About</Link></li>
            <li><Link href="/login" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-400 transition">Login</Link></li>
            <li><Link href="/register" class="text-blue-300 hover:text-blue-400 transition">Register</Link></li>
          </template>
          <template v-else>
            <li><Link href="/materi" class="hover:text-blue-400 transition">Materi</Link></li>
            <li><Link href="/latihan" class="hover:text-blue-400 transition">Latihan</Link></li>
            <li><Link href="/kuis" class="hover:text-blue-400 transition">Kuis</Link></li>
            <li><Link href="/profil" class="hover:text-blue-400 transition">Profil</Link></li>
            <li>
              <Link href="/logout" method="post" as="button"
                class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400 transition">Logout</Link>
            </li>
          </template>
        </ul>
      </nav>
    </header>

    <!-- Page content -->
    <main class="pt-20 px-4 animate-fade-in flex-grow">
      <slot />
    </main>

    <!-- Footer -->
    <footer class="bg-[#1A202C] border-t border-slate-700 py-10 mt-12">
      <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-sm text-slate-400">
        <div>
          <h4 class="text-blue-400 font-semibold mb-2">Tentang Nalarin</h4>
          <p>Nalarin adalah media pembelajaran Computational Thinking berbasis pendekatan SAVI untuk siswa SMK.</p>
        </div>
        <div>
          <h4 class="text-blue-400 font-semibold mb-2">Menu</h4>
          <ul class="space-y-1">
            <li><Link href="/">Home</Link></li>
            <li><Link href="/about">About</Link></li>
            <li><Link href="/materi">Materi</Link></li>
            <li><Link href="/kuis">Kuis</Link></li>
          </ul>
        </div>
        <div>
          <h4 class="text-blue-400 font-semibold mb-2">Teknologi</h4>
          <ul class="space-y-1">
            <li>Laravel 12 + Inertia.js</li>
            <li>Vue 3 + TailwindCSS</li>
            <li>MySQL</li>
          </ul>
        </div>
        <div>
          <h4 class="text-blue-400 font-semibold mb-2">Kontak Penulis</h4>
          <p>Email: habibmunif003@gmail.com</p>
          <p>Instagram: @habibmooneep</p>
        </div>
      </div>
      <div class="text-center text-slate-500 text-xs mt-6">
        © 2025 Nalarin. All rights reserved.
      </div>
    </footer>

    <!-- 🔊 Backsound edukatif -->
    <audio id="bg-music" src="/sounds/backsound.mp3" autoplay loop hidden></audio>
  </div>
</template>

<script setup>
import { onMounted } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'

const { props } = usePage()
const isAuth = props.auth?.user !== null

onMounted(() => {
  // Sound effect untuk button & link
  const clickSound = new Audio('/sounds/click.mp3')
  clickSound.volume = 0.6

  document.querySelectorAll('button').forEach(button => {
    button.addEventListener('click', () => {
      clickSound.currentTime = 0
      clickSound.play()
    })
  })

  document.querySelectorAll('a[href]').forEach(link => {
    link.addEventListener('click', () => {
      clickSound.currentTime = 0
      clickSound.play()
    })
  })

  // Backsound loop edukatif
  const bgMusic = document.getElementById('bg-music')
  if (bgMusic) {
    bgMusic.volume = 0.3
    bgMusic.play().catch(() => {
      document.addEventListener('click', () => bgMusic.play(), { once: true })
    })
  }
})
</script>

<style scoped>
nav ul li {
  transition: all 0.3s ease-in-out;
}
nav ul li:hover {
  transform: translateY(-2px);
}
</style>

<style>
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fade-in {
  animation: fadeIn 0.6s ease-out;
}
</style>
