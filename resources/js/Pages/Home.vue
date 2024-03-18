<template>
  <div>
    <h1>Lista de Usuários</h1>
    <ul>
      <li v-for="(nome, index) in nomes" :key="index">{{ nome }}</li>
    </ul>
  </div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
  nomes: {
    type: Array,
    required: true,
  },
});
</script>