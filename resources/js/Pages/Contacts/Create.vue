<template lang="">
    <app-layout title="Contacts">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Contacts
            </h2>
        </template>

        <div class="container py-12">
            <h1 class="text-3xl font-semibold text-gray-700 mb-3">
                <span class="text-indigo-500">Contacts /</span> Create
            </h1>
            <div class="bg-white px-6 py-8 rounded-lg shadow">

                <!-- Acceder a los props para para registrar los errores a traves del componente JetValidationErrors -->
                <jet-validation-errors></jet-validation-errors>

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label>
                            First Name
                            <Input v-model="contact.first_name" type="text" class="w-full" />
                        </label>
                    </div>
                    <!-- Select trae con v-model lo de la tabla relacionada y con v-for el ciclo -->
                    <div>
                        <label>
                            Last Name
                            <Input v-model="contact.last_name" type="text" class="w-full" />
                        </label>
                    </div>
                    <div>
                        <label>
                            Organization
                            <!-- <Input v-model="contact.organization_id" type="text" class="w-full" /> -->
                            <select v-model="contact.organization_id" class="w-full form-control">
                                <option value="" selected disabled>
                                    Seleccione una opción
                                </option>
                                <option v-for="organization in organizations" :value="organization.id" :key="'organization-' + organization.id">
                                    {{ organization.name }}
                                </option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <label>
                            Email
                            <Input v-model="contact.email" type="text" class="w-full" />
                        </label>
                    </div>
                    <div>
                        <label>
                            Phone
                            <Input v-model="contact.phone" type="text" class="w-full" />
                        </label>
                    </div>
                    <div>
                        <label>
                            Address
                            <Input v-model="contact.address" type="text" class="w-full" />
                        </label>
                    </div>
                    <div>
                        <label>
                            City
                            <Input v-model="contact.city" type="text" class="w-full" />
                        </label>
                    </div>
                    <div>
                        <label>
                            State
                            <Input v-model="contact.state" type="text" class="w-full" />
                        </label>
                    </div>
                    <div>
                        <label>
                            Country
                            <!-- <Input v-model="contact.country_id" type="text" class="w-full" /> -->
                            <select v-model="contact.country_id" class="w-full form-control">
                                <option value="" selected disabled>
                                    Seleccione una opción
                                </option>
                                <option v-for="country in countries" :value="country.id" :key="'country-' + country.id">
                                    {{ country.name }}
                                </option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <label>
                            Postal Code
                            <Input v-model="contact.postal_code" type="text" class="w-full" />
                        </label>
                    </div>
                </div>
                <div class="flex justify-end mt-3">
                    <button class="btn btn-indigo" @click="store">
                        Crear
                    </button>
                </div>
            </div>
        </div>
    </app-layout>
</template>
<script>

import AppLayout from '@/Layouts/AppLayout.vue'
import Input from '@/Jetstream/Input.vue'
import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'

export default {
    components: {
        AppLayout,
        Input,
        JetValidationErrors
    },
    // capturamos lo que ingresa el usuario en data
    data(){
        return {
            contact: {
                first_name: '',
                last_name: '',
                organization_id: '',
                email: '',
                phone: '',
                address: '',
                city: '',
                state: '',
                country_id: '',
                postal_code: ''
            }
        }
    },
    // capturamos del controlador lo de las tablas relacionadas
    props: {
        organizations: Array,
        countries: Array,
    },
    // metodo store para guardar los imputs
    methods: {
        store() {
            this.$inertia.post(this.route('contacts.store'), this.contact)
        }
    }    
}
</script>
<style lang="">
    
</style>