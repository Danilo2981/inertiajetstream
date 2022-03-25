<template lang="">
    <app-layout title="Contacts">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Contacts
            </h2>
        </template>
        <!-- Container -->
        <div class="container py-12">
            <div class="bg-white p-8 rounded-m w-full">
                <div class="flex items-center justify-between ph-6">
                    <div class="flex items-center justify-between w-full">
                        <Input v-model="search" type="text" class="flex-1" placeholder="Ingrese texto a buscar" />
                        <Link :href="route('contacts.create')" class="ml-4 flex-shrink-0 btn btn-blue">Nuevo</Link>
                    </div>
                </div>
                <div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Organization
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            City
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Phone
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Con get = array, con paginate se trae el ojeto data y se itera como un Objeto -->
                                    <tr v-for="contact in contacts.data" :key="contact.id">
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10">
                                                <img class="w-full h-full rounded-full"
                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                alt="" />
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ contact.first_name + " " + contact.last_name }}
                                                </p>
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ contact.email }}
                                                </p>
                                            </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                <!-- trae la relacion contact.organization -->
                                                {{ contact.organization.name }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ contact.city }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{  contact.phone }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                            <span class="relative">Activo</span>
                                            </span>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                <Link :href="route('contacts.edit', contact)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                                    </svg>
                                                </Link>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <!-- Cambiar de otra pagina contacts por users o etc -->
                            <pagination :pagination="contacts"></pagination>
                            
                        </div>    
                    </div>    
                </div>  
            </div>
        </div>
    </app-layout>
</template>
<script>

import AppLayout from '@/Layouts/AppLayout.vue'
import Pagination from '@/Components/Pagination.vue'
import Input from '@/Jetstream/Input.vue'
// pickBy hace que si el valor es null no se pase lo de watch a la ruta
import pickBy from 'lodash/pickBy'
// Componente Link sireve para dirigirse entre paginas
import {Link} from '@inertiajs/inertia-vue3'

export default {
    components: {
        AppLayout,
        Pagination,
        Input,
        Link
    },
    // creamos una propiedad que sea inicializada como una cadena que es recuperada por filters
    data() {
        return {
            search: this.filters.search,
        }
    },
    // mantenemos a la escucha de todo lo de search y campture el valor por el que cambio
    // con this.inertia se refresca los datos y no la pagina
    // luego se lo pasa por la ruta el valor a la propiedad search y se mantiende todo lo que pase con preserveState
    watch: {
        // con esto logramos que se ponga en la ruta lo digitado en el input http://labinertia.test/contacts?search=Spinka
        // informacion que se pasa al controlador
        search($value) {
            this.$inertia.get('/contacts', pickBy({ search: $value }), { preserveState: true })
        }
    },
    // pasamos los datos obtenidos del model a traves del controlador, y con typescript especificando el 
    // nombre del parametro y el tipo a recibir
    props: {
        // Con get = array, con paginate se trae el ojeto data y se itera como un Objeto
        contacts: {
            type: Object,
            required: true,
        },
        filters: Object,
    }
}
</script>
<style lang="">
    
</style>