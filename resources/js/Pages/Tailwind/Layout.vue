<template>
    <app-layout title="Layout">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Layout
            </h2>
        </template>

        <div class="container mt-4">
            <!-- Border nace de la clase padre hacia adentro y disminuye el tama;o que usa la clase hija -->
            <!-- Al darle pading a la clase padre se ajusta h-full y w-full a lo que les deja el padding -->
            <div class="bg-gray-300 w-64 h-32 p-8 border-8 border-gray-500">
                <!-- ocupe todo el espacio disponible del padre -->
                <div class="bg-gray-500 h-full w-full">
                </div>
            </div>
        </div>
        
        <div class="container mt-4">
            <div class="bg-gray-300 w-64 h-32 p-8 border-8 border-gray-500 box-content">
                <!-- Box content permite que se mantenga el w-64 y h-32 del padre en el hijo y se hace mas grande  -->
                <div class="bg-gray-500 h-full w-full">
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <h1>Block</h1>
            <div class="bg-gray-400 text gray-700 text-center px-4 py-2 block">1</div>
            <div class="bg-gray-400 text gray-700 text-center px-4 py-2 my-2 block">2</div>
            <div class="bg-gray-400 text gray-700 text-center px-4 py-2 block">3</div>
        </div>

        <h1>Inline no permite margin y pading en el eje y </h1>
        <div class="container mt-4 bg-blue-400">            
            <div class="bg-gray-400 text gray-700 text-center px-4 py-2 inline">1</div>
            <div class="bg-gray-400 text gray-700 text-center px-4 py-2 my-2 inline">2</div>
            <div class="bg-gray-400 text gray-700 text-center px-4 py-2 inline">3</div>
        </div>

        <h1>Inline-Block permite ponerle margin y pading en el eje y</h1>
        <div class="container mt-4 bg-blue-400">            
            <div class="bg-gray-400 text gray-700 text-center px-4 py-2 inline-block">1</div>
            <div class="bg-gray-400 text gray-700 text-center px-4 py-2 my-2 inline-block">2</div>
            <div class="bg-gray-400 text gray-700 text-center px-4 py-2 inline-block">3</div>
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
