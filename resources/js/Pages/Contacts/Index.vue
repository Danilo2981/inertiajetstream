<template lang="">
    <app-layout title="Contacts">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Contacts
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                Contactos
            </div>
        </div>
    </app-layout>
</template>
<script>

import AppLayout from '@/Layouts/AppLayout.vue'

export default {
    components: {
        AppLayout,
    },
    // pasamos los datos obtenidos del model a traves del controlador, y con typescript especificando el 
    // nombre del parametro y el tipo a recibir
    props: {
        type: Array,
        
    }
}
</script>
<style lang="">
    
</style>