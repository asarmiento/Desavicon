<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Registro Clientes
      </h2>
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class=" sm:px-20 bg-white border-b border-gray-200">
            <div>
              <jet-application-logo class="block h-12 w-auto"/>
            </div>

            <div class=" text-2xl flex items-stretch place-content-start ">
              <form @submit.prevent="submit" >
                <div class="m-1 md:w-1/2 float-left ">
                  <label class="text-blue-900 text-left">Cédula del Cliente:</label>
                  <input v-model="form.card" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                </div>
                <div class="m-1 md:w-1/2 float-left">
                  <label class="text-blue-900">Nombre del Cliente:</label>
                  <input v-model="form.name" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                </div>
                <div class="m-1 md:w-1/2 float-left ">
                  <label class="text-blue-900">Email:</label>
                  <input v-model="form.email" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                </div>
                <div class="m-1 md:w-1/2 float-left ">
                  <label class="text-blue-900">Teléfono:</label>
                  <input v-model="form.phone" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                </div>
                <div class="m-1 w-full float-left ">
                  <label class="text-blue-900">Dirección:</label>
                  <input v-model="form.address" class="bg-gray-200 min-w-full  hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                </div>
                <div class="m-2 float-left min-w-full text-center ">
                  <button type="submit" class="bg-teal-500 hover:bg-teal-600 focus:outline-none
                  focus:shadow-outline mt-auto uppercase py-3 px-8 font-bold border">
                    Registrar
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
  import AppLayout from './../../Layouts/AppLayout'
  import Label from "../../Jetstream/Label";
import Swal from "sweetalert2";

  export default {
    components: {
      Label,
      AppLayout,
Swal
    }, data() {
      return {
        form: {
          name: null,
          card: null,
          phone: null,
          address: null,
          email: null,
        },
      }
    },  methods: {
    submit() {
      this.$inertia.post('/store-customer', this.form).then(response=>{

        Swal.fire('!Excelente','Se guardo con exito el cliente: '+this.form.name,'success');
        this.form.name= null;
          this.form.card=null;
          this.form.phone= null;
          this.form.address= null;
          this.form.email=null;
      });
    },
  },
  }
</script>
