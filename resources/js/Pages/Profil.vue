<template>
  <MainLayout>
    <Head title="Profil Siswa" />
    <section class="min-h-screen bg-gradient-to-br from-blue-950 to-blue-800 flex items-center justify-center px-4 py-10">
      <div class="w-full max-w-xl mx-auto bg-white/95 border border-blue-200/60 rounded-xl shadow-xl p-6 md:p-10 space-y-7">
        <div class="flex items-center gap-4 mb-6">
          <div class="rounded-full w-16 h-16 flex items-center justify-center bg-blue-100 text-blue-500 text-3xl font-bold shadow">
            {{ inisial }}
          </div>
          <div>
            <div class="text-xl font-bold text-blue-900">{{ user.name }}</div>
            <div class="text-gray-500 text-base">{{ user.email }}</div>
            <div class="text-gray-400 text-xs mt-1">Terdaftar: {{ regDate }}</div>
          </div>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script setup>
import { computed } from 'vue'
import { Head, usePage } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'

const user = usePage().props.auth.user
const inisial = computed(() => user.name?.split(' ').map(x => x[0]).join('').toUpperCase().slice(0,2) ?? '-')
const regDate = new Date(user.created_at).toLocaleDateString('id-ID', { year: 'numeric', month: 'short', day: 'numeric' })
</script>
