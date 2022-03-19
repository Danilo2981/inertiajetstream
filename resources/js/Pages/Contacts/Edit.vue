<template lang="">
    <app-layout title="Contacts">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Contacts
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    Edicion de contactos
                </div>
                <pre>
                    {{ contact }}
                </pre>
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
    // Trae el unico id como un objeto
    props: {
        contact: {
            type: Object,
            required: true,
        },
    }
}
</script>
<style lang="">
    
</style>