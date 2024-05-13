<template>
    <aside>
      <input type="text" placeholder="Filtrar por nome" v-model="filterName" @input="filterData" />
    </aside>
  </template>
  
  <script>
  export default {
    data() {
      return {
        filterName: ''
      }
    },
    methods: {
      filterData() {
        // Adicione a lógica para filtrar os dados por nome aqui
      }
    }
  }
  </script>