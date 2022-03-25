<template lang="">
    <app-layout title="Contacts">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Contacts
            </h2>
        </template>

        <div class="container py-12">
            <h1 class="text-3xl font-semibold text-gray-700 mb-3">
                <span class="text-indigo-500">Contacts /</span> Edit
            </h1>
            <div class="bg-white px-6 py-8 rounded-lg shadow">

                <!-- Acceder a los props para para registrar los errores a traves del componente JetValidationErrors -->
                <jet-validation-errors></jet-validation-errors>

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label>
                            First Name
                            <Input v-model="form.first_name" type="text" class="w-full" />
                        </label>
                    </div>
                    <!-- Select trae con v-model lo de la tabla relacionada y con v-for el ciclo -->
                    <div>
                        <label>
                            Last Name
                            <Input v-model="form.last_name" type="text" class="w-full" />
                        </label>
                    </div>
                    <div>
                        <label>
                            Organization
                            <!-- <Input v-model="contact.organization_id" type="text" class="w-full" /> -->
                            <select v-model="form.organization_id" class="w-full form-control">
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
                            <Input v-model="form.email" type="text" class="w-full" />
                        </label>
                    </div>
                    <div>
                        <label>
                            Phone
                            <Input v-model="form.phone" type="text" class="w-full" />
                        </label>
                    </div>
                    <div>
                        <label>
                            Address
                            <Input v-model="form.address" type="text" class="w-full" />
                        </label>
                    </div>
                    <div>
                        <label>
                            City
                            <Input v-model="form.city" type="text" class="w-full" />
                        </label>
                    </div>
                    <div>
                        <label>
                            State
                            <Input v-model="form.state" type="text" class="w-full" />
                        </label>
                    </div>
                    <div>
                        <label>
                            Country
                            <!-- <Input v-model="contact.country_id" type="text" class="w-full" /> -->
                            <select v-model="form.country_id" class="w-full form-control">
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
                            <Input v-model="form.postal_code" type="text" class="w-full" />
                        </label>
                    </div>
                </div>
                <div class="flex justify-end mt-3">
                    <button class="btn btn-red mr-3" @click="destroy">
                        Eliminar
                    </button>
                </div>
                <div class="flex justify-end mt-3">
                    <button class="btn btn-indigo" @click="upadate">
                        Actualizar
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
    // Trae el unico id como un objeto
    props: {
        contact: {
            type: Object,
            required: true,
        },
        organizations: Array,
        countries: Array,
    },
    data(){
        // recupera todo lo almacenado en contact
        return{
            form: this.contact
        }
    },
    // metodo store para guardar los imputs
    methods: {
        upadate() {
            // Otra forma
            // this.$inertia.form(this.form).put(this.route('contacts.update', this.contact));
            this.$inertia.put(this.route('contacts.update', this.contact), this.form);
        },
        // Para eliminar
        destroy(){
            this.$inertia.delete(this.route('contacts.destroy', this.contact));
        }
    } 
}
</script>
<style lang="">
    
</style>