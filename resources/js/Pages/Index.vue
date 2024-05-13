<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="BI" />
    <div id="app">
      <TopMenu />
      <div>
        <Sidebar />
        <main>
          <!-- Conteúdo principal da sua aplicação aqui -->
        </main>
      </div>
    </div>
  </template>
  
  <script>
  import TopMenu from '../Components/TopMenu.vue'
  import Sidebar from '../Components/Sidebar.vue'
  
  export default {
    components: {
      TopMenu,
      Sidebar
    }
  }
  </script>