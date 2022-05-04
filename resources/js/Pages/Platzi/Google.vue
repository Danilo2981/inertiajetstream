<template lang="">
    
    <HeaderGoogle />
    
    <MainGoogle />

</template>
<script>
    import { defineComponent } from 'vue'
    import HeaderGoogle from '@/PlatziComponents/HeaderGoogle.vue'
    import MainGoogle from '@/PlatziComponents/MainGoogle.vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            HeaderGoogle,
            MainGoogle,
            Link
        },
    })    
</script>
<style lang="">
    
</style>