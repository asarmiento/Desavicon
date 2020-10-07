<template>
    <div class=" ">
        <div class=" min-h-full border-b border-gray-200 ">
            <div>
                <jet-application-logo class="block h-12 w-auto"/>
            </div>
            <form @submit.prevent="submit" class="py-4">
                <div
                    class="grid  grid-cols-1 sm:grid-cols-3  xl:grid-cols-4 gap-2 my-2 w-full bg-white float-left text-xl">
                    <div class="px-1 w-full float-left ">
                        <label class="text-blue-900 text-left">Cliente:</label>
                        <input v-model="form.card" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                    </div>
                    <div class="px-1 w-full  float-left ">
                        <label class="text-blue-900 text-left">Proyecto:</label>
                        <input v-model="form.card" class="bg-gray-200  min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                    </div>
                    <div class="px-1 w-full  float-left ">
                        <label class="text-blue-900 text-left">Teléfono:</label>
                        <input v-model="form.card" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                    </div>
                    <div class="px-1 w-full  float-left ">
                        <label class="text-blue-900 text-left">Atención:</label>
                        <input v-model="form.card" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                    </div>
                    <div class="px-1 w-full  float-left ">
                        <label class="text-blue-900 text-left">Días de Valides:</label>
                        <input v-model="form.card" type="date" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                    </div>
                    <div class="px-1 w-full  float-left ">
                        <label class="text-blue-900 text-left">Total de Costo:</label>
                        <input v-model="form.cost" type="number" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                    </div>
                    <div class="px-1 w-full  float-left ">
                        <label class="text-blue-900 text-left">Descuento:</label>
                        <input v-model="form.discount" type="number" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                    </div>
                    <div class="px-1  w-full float-left ">
                        <label class="text-blue-900 text-left">I.V.A 13%:</label>
                        <input v-model="form.iva" type="number" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                    </div>
                    <div class="px-1 w-full  float-left ">
                        <label class="text-blue-900 text-left">Total:</label>
                        <input v-model="form.total" type="number" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                    </div>

                </div>
            </form>
            <div class="grid  grid-cols-1 sm:grid-cols-3  xl:grid-cols-4 gap-2 my-2 w-full bg-white float-left text-xl">
                <div class="px-1 col-start-2 w-full float-left ">
                    <label class="text-blue-900 text-left">Agregar Imagenes:</label>
                    <input type="file" class="bg-gray-200 min-w-full hover:bg-white hover:border-blue-400 hover:bg-indigo-100 hover:shadow-outline
                     focus:outline-none focus:bg-indigo-100 focus:shadow-outline focus:border-gray-300"/>
                </div>
            </div>

        </div>
        <div class="w-full  m-3 float-left overflow-scroll overscroll-x-auto  ">
            <table class=" box-content mb-2 ">
                <thead class="bg-black text-white">
                <tr class=" border-white h-5 xl:text-xl text-xs ">
                    <th class="border border-white  w-auto">Nivel</th>
                    <th class="border border-white w-1/12">Ubicación</th>
                    <th class="border border-white w-1/12">Referencia</th>
                    <th class="border border-white">Cantidad</th>
                    <th class="border border-white">Ancho (m)</th>
                    <th class="border border-white">Alto (m)</th>
                    <th class="border border-white">Área (m2)</th>
                    <th class="border border-white">Diseño</th>
                    <th class="border border-white">acción</th>
                </tr>
                </thead>
                <tbody class="">
                <tr class=" text-xs ">
                    <td class="border border-black w-1/12 "><input v-model="levels" type="text" class="h-8 w-full "/>
                    </td>
                    <td class="border border-black w-10"><input v-model="locations" type="text" class="h-8 w-full"/>
                    </td>
                    <td class="border border-black w-1/4"><input v-model="references" type="text" class="h-8 w-full"/>
                    </td>
                    <td class="border border-black w-1/12"><input v-model="quantitys" type="text" class="h-8 w-full"/>
                    </td>
                    <td class="border border-black w-1/12"><input v-model="width_ms" type="text" class="h-8 w-full"/>
                    </td>
                    <td class="border border-black w-1/12"><input v-model="high_ms" type="text" class="h-8 w-full"/>
                    </td>
                    <td class="border border-black w-1/12"><input v-model="areas" type="text" class="h-8 w-full"/></td>
                    <td class="border border-black w-1/12"><input v-model="desings" type="text" class="h-8 w-full"/>
                    </td>
                    <td class="border border-black text-center w-1/12">
                        <a class="border border-blue-300 bg-green-400 w-4 rounded-md " href="#" @click="addDestails">
                            <i class="text-white hover:text-green-900 rounded-sm fa fa-plus w-4"></i></a>
                    </td>
                </tr>
                <tr v-for="detail in form.details" class="hover:bg-indigo-100 text-xs sm:text-2xl text-blue-600">
                    <td class="border border-black w-auto">{{detail.level}}</td>
                    <td class="border border-black  w-auto">{{detail.location}}</td>
                    <td class="border border-black  w-auto">{{detail.reference}}</td>
                    <td class="border border-black  w-auto">{{detail.quantity}}</td>
                    <td class="border border-black  w-auto">{{detail.width_m}}</td>
                    <td class="border border-black  w-auto">{{detail.high_m}}</td>
                    <td class="border border-black  w-auto">{{detail.area}}</td>
                    <td class="border border-black  w-auto">{{detail.desing}}</td>
                    <td class="border border-black text-center w-1/12 ">
                        <a class="border border-blue-300 bg-red-400 w-4 rounded-md " href="#" @click="addDestails">
                            <i class="text-white hover:text-red-900 rounded-sm fa fa-remove w-4"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
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
          datas_f: null,
          iva: 0,
          total: 0,
          discount: 0,
          cost: 0,
          details: [],
        },
        levels: '',
        locations: '',
        references: '',
        quantitys: '',
        width_ms: '',
        high_ms: '',
        areas: '',
        desings: '',
        list_details: ''
      }
    },
    mounted() {
      var openmodal = document.querySelectorAll('.modal-open')
      for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener('click', function (event) {
          event.preventDefault()
          toggleModal()
        })
      }

      const overlay = document.querySelector('.modal-overlay')
      overlay.addEventListener('click', toggleModal)

      var closemodal = document.querySelectorAll('.modal-close')
      for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
      }

      document.onkeydown = function (evt) {
        evt = evt || window.event
        var isEscape = false
        if ("key" in evt) {
          isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
          isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
          toggleModal()
        }
      };


      function toggleModal() {
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
      }

    },
    methods: {
      submit() {
        this.$inertia.post('/users', this.form)
      },
      addDestails() {
        this.list_details = {
          level: this.levels,
          location: this.locations,
          reference: this.references,
          quantity: this.quantitys,
          width_m: this.width_ms,
          high_m: this.high_ms,
          area: this.areas,
          desing: this.desings,
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
        this.level = '';
      }
    },
  }
</script>
