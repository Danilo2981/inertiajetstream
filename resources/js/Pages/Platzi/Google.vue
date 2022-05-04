<template lang="">
    
    <HeaderGoogle />

</template>
<script>
    import { defineComponent } from 'vue'
    import HeaderGoogle from '@/PlatziComponents/HeaderGoogle.vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            HeaderGoogle,
            Link
        },
    })    
</script>
<style lang="">
    
</style>