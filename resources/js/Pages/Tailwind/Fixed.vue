<template lang="">
    <!-- z-50 me permite que con z-index el nav se posicione sobre el aside -->
    <nav class="bg-indigo-300 h-16 fixed w-full z-50">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <jet-nav-link :href="route('dashboard')" :active="route().current('dashboard')">
                Dashboard
            </jet-nav-link>
            <jet-nav-link :href="route('grid')" :active="route().current('grid')">
                Grid Tailwind
            </jet-nav-link>
            <jet-nav-link :href="route('layout')" :active="route().current('layout')">
                Layout Tailwind
            </jet-nav-link>
            <jet-nav-link :href="route('fixed')" :active="route().current('fixed')">
                Fixed Tailwind
            </jet-nav-link>
            <!-- .* permite poner como active cualquier ruta que contenga contacts -->
            <jet-nav-link :href="route('contacts.index')" :active="route().current('contacts.*')">
                Contacts
            </jet-nav-link>
        </div>
    </nav>

    <!-- inset y hace que el aside se coloque al lado izquierdo -->
    <aside class="w-64 bg-gray-800 fixed inset-y-0 z-40"></aside>
    
</template>
<script>
    import { defineComponent } from 'vue'
    import JetNavLink from '@/Jetstream/NavLink.vue'
    import { Link } from '@inertiajs/inertia-vue3';
    
    export default defineComponent({
        components: {
            JetNavLink,
            Link
        },
    })
</script>
<style lang="">
    
</style>