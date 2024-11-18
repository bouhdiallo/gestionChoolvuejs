        
<template>
    <MainLayout>
      <!-- Content Wrapper. Contains page content -->
    
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"> Liste des niveaux scolaire </h1>
              </div><!-- /.col -->
            
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">

            <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title">

                <CreateNiveauScolaire/>

                </div>

                <div class="card-tools">
              

                  <Pagination  
                  :links="props.niveauScolaires.link" 
                  :prev="props.niveauScolaires.prev_page_url"
                  :next="props.niveauScolaires.next_page_url"
                    />

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <!-- <th style="width: 10px">#</th> -->
                      <th>Niveau Scolaire</th>
                      <th style="width: 100px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="niveauScolaire in props.niveauScolaires.data">
                      <!-- <td>1.</td> -->
                      <td> {{ niveauScolaire.nom }}</td>
                      
                      <td>
                        <div class="d-flex">
                        <button class="btn btn-info mr-4"><i class="fas fa-pen" aria-hidden="true"></i>
                      </button>
                    
                      <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>

                      </button>
                    </div>
                    </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
             </div>
          </div><!-- /.container-fluid -->
        </div>
        
      </MainLayout>
    
    
        
    </template>
    <!-- <script >
    import MainLayout from '../../Layouts/MainLayout.vue';
    export default {
        layout: MainLayout 
    }
    </script> -->
    <script setup>
        import MainLayout from '../../Layouts/MainLayout.vue';
        import Pagination from '../../Shared/Pagination.vue';
        import CreateNiveauScolaire from './CreateNiveauScolaire.vue';
    const props = defineProps({
            niveauScolaires: Object
    })
    
    </script>