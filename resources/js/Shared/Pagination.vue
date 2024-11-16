<template>
    <ul class="pagination pagination-sm float-right">
      <li class="page-item">
        <a class="page-link" :href="props.prev">Previous</a>
      </li>
      
      <!-- Vérifiez si props.links est un tableau avant de l'itérer -->
      <li v-if="Array.isArray(computedLinks)" class="page-item active" v-for="link in computedLinks" :key="link.url">
        <a class="page-link" :href="link.url">{{ link.label }}</a>
      </li>
  
      <li class="page-item">
        <a class="page-link" :href="props.next">Next</a>
      </li>
    </ul>
  </template>
  
  <script setup>
  import { computed } from 'vue';
  
  const props = defineProps({
    links: {
      type: Array,
      required: true
    },
    prev: {
      type: String,
      default: ''
    },
    next: {
      type: String,
      default: ''
    }
  });
  
  const computedLinks = computed(() => {
    if (!Array.isArray(props.links)) {
      console.error("props.links n'est pas un tableau", props.links);
      return [];  // Retourner un tableau vide si props.links n'est pas valide
    }
    const linksCopy = [...props.links];
    linksCopy.shift();  // Retirer le premier élément (prev)
    linksCopy.pop();    // Retirer le dernier élément (next)
    return linksCopy;
  });
  </script>
  
  