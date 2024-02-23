<script setup>
import Base from '@/Pages/Layout/Base.vue'
import { Head } from '@inertiajs/vue3'

defineProps({ user: Object })
</script>

<template>
  <Base>
    <Head title="Welcome" />
    <h1>Welcome</h1>
    <p>Hello {{ user.name }}, welcome to your first Inertia app!</p>
  </Base>
</template>
