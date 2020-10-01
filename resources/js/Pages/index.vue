<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Lista Clientes
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg min-h-table  ">
                    <table class="min-w-full">
                        <thead class="bg-black text-white">
                        <tr class=" border-white h-12" >
                            <th class="border border-white  ">Cédula</th>
                            <th class="border border-white  ">Nombre</th>
                            <th class="border border-white">Teléfono</th>
                            <th class="border border-white">Email</th>
                            <th class="border border-white">Dirección</th>
                            <th class="border border-white">acción</th>
                        </tr>
                        </thead>
                        <tbody class="">
                        <tr v-for="customer in customers" :key="customer.id" class="hover:bg-indigo-100">
                            <td class="border border-black">{{customer.card}}</td>
                            <td class="border border-black">{{customer.name}}</td>
                            <td class="border border-black">{{customer.phone}}</td>
                            <td class="border border-black">{{customer.email}}</td>
                            <td class="border border-black">{{customer.address}}</td>
                            <td class="border border-black text-center "><inertia-link  :href="customer.edit_url"><i class="text-blue-900 hover:text-orange-900 fa fa-edit "></i></inertia-link></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from './../Layouts/AppLayout';
    import Welcome from './../Jetstream/Welcome';

    export default {
        props:['customers'],
        components: {
            AppLayout,
            Welcome,
        },
    }
</script>
<style>
    .min-h-table{
        height: 60vh ;
    }
</style>
