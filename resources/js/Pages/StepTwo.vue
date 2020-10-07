<template>
    <div>
        <div class="p-6 sm:px-20 min-h-full bg-white border-b border-gray-200 text-2xl">
            <div>
                <jet-application-logo class="block h-12 w-auto"/>
            </div>

            <form @submit.prevent="submit">
                <div class="m-1 min-w-full float-left ">
                <div class="m-1 md:w-1/3 float-left ">
                    <label class="text-blue-900 text-left">Cliente:</label>
                    <input v-model="form.card" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                </div>
                <div class="m-1 md:w-1/2 float-left ">
                    <label class="text-blue-900 text-left">Proyecto:</label>
                    <input v-model="form.card" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                </div>
                <div class="m-1 md:w-1/3 float-left ">
                    <label class="text-blue-900 text-left">Teléfono:</label>
                    <input v-model="form.card" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                </div>
                <div class="m-1 md:w-1/3 float-left ">
                    <label class="text-blue-900 text-left">Atención:</label>
                    <input v-model="form.card" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                </div>
                <div class="m-1 md:w-1/4 float-left ">
                    <label class="text-blue-900 text-left">Días de Valides:</label>
                    <input v-model="form.card" type="date" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                </div>
                </div>

                    <a href="#"   class="bg-green-400 text-white py-1 px-4 mb-2 modal-open1 ">
                        Agregar Totales
                    </a>

            </form>


        </div>


    </div>
</template>
<script>
  import JetApplicationLogo from './../Jetstream/ApplicationLogo'
  import Button from "../Jetstream/Button";
  export default {
    components: {
      Button,
      JetApplicationLogo,
    },
    data() {
      return {
        form: {
          customer_id: null,
          project: null,
          email: null,
          details:[],
        },
          levels:'',
          locations:'',
          references:'',
          quantitys:'',
          width_ms:'',
          high_ms:'',
          areas:'',
          desings:'',
        list_details:''
      }
    },

    methods: {
      submit() {
        this.$inertia.post('/users', this.form)
      },
      addDestails(){
        this.list_details = {
          level: this.levels,
          location:this.locations,
          reference:this.references,
          quantity:this.quantitys,
          width_m:this.width_ms,
          high_m:this.high_ms,
          area:this.areas,
          desing:this.desings,
        };
        this.levels = '';
        this.locations = '';
        this.references = '';
        this.quantitys = '';
        this.width_ms = '';
        this.high_ms = '';
        this.desings = '';
        this.areas = '';
        this.form.details.push(this.list_details);
        this.level ='';
      }
    },
  }
</script>
