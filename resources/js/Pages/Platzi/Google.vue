<template lang="">
    
    <HeaderGoogle />
    
    <MainGoogle />

    <FooterGoogle />

</template>
<script>
    import { defineComponent } from 'vue'
    import HeaderGoogle from '@/PlatziComponents/HeaderGoogle.vue'
    import MainGoogle from '@/PlatziComponents/MainGoogle.vue'
    import FooterGoogle from '@/PlatziComponents/FooterGoogle.vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            HeaderGoogle,
            MainGoogle,
            FooterGoogle,
            Link
        },
    })    
</script>
<style lang="">
    
</style>