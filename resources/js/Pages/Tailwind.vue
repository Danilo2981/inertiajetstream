<template>
    <app-layout title="Tailwind">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tailwind
            </h2>
        </template>

        <div class="py-12">
            <h1>Esto es un H1</h1>
            <h2>Esto es un H2</h2>
            <h3>Esto es un H3</h3>
            <h4>Esto es un H4</h4>
            <h5>Esto es un H5</h5>
            <h6>Esto es un H6</h6>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    
    export default defineComponent({
        components: {
            AppLayout,
        },
    })
</script>