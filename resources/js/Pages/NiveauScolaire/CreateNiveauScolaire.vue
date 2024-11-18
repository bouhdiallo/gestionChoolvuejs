        
<template>
   <button class="btn btn-primary"
   data-toggle="modal" 
   data-target="#createNVModal"
   > <i class="fa fa-plus"></i> Nouveau  </button>
    
    


   <div class="modal fade" id="createNVModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajout niveau scolaire</h1>
        <button type="button" @click="closeModal" class="btn-close"></button>
      </div>
      <div class="modal-body">

               
        <form @submit.prevent="soumettre" id="createForm">

         <div class="form-group">

          <label for="">Nom</label>
          <input type="text" required class="form-control" v-model="nomNiveauScolaire">

          <h2>{{ nomNiveauScolaire }}</h2>

         </div>
        </form>
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" @click="closeModal">Fermer</button>
        <button form="createForm" type="submit" class="btn btn-success">Soumettre</button>
      </div>
    </div>
  </div>
</div>
        
    </template>
    

    <script setup>
import { onMounted, ref } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import { useSwalSuccess , useSwalError } from '../../Composables/alert';
// ici on declare le two way databandins
const nomNiveauScolaire = ref("")
let createModal = ""
onMounted( ()=> {
createModal = $("#createNVModal")
})
    const closeModal = () => {
      createModal.modal("hide")
      nomNiveauScolaire.value = ""
    }
    const soumettre = () => {
      const nom = nomNiveauScolaire.value
      const url = route("niveauscolaire.store")
      Inertia.post(  
        url, 
        {nom},
        {
          onSuccess: (page) => {
            // createModal.modal("hide")
            closeModal(), 

            // afficher message succes
            // alert("niveau scolaire ajouter avec success")

          
             useSwalSuccess("ajout effectuer avec success!")
            
           },
          onError: (errors) => {
        // afficher message erreure
         
           useSwalError (" une erreure s'est produite")     

           }
          } )
    }
  </script>

    
    
    
    
    
   