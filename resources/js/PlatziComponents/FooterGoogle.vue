<template lang="">
    <footer class="w-full h-12 absolute bottom-0 grid grid-cols-2 items-center text-sm bg-[#f2f2f2] border-t-2 border-solid border-t-[#e4e4e4]">
        <ul class="justify-self-start m-3 flex pl-0">
            <li>
                <a class="m-3 text-[#5f5638]" href="">Publicidad</a>
            </li>
            <li>
                <a class="m-3 text-[#5f5638]" href="">Negocios</a>
            </li>
            <li>
                <a class="m-3 text-[#5f5638]" href="">Acerca de</a>
            </li>
            <li>
                <a class="m-3 text-[#5f5638]" href="">Como funciona la busqueda</a>
            </li>
        </ul>
        <ul class="justify-self-end m-3 flex pl-0">
            <li>
                <a class="m-3 text-[#5f5638]" href="">Privacidad</a>
            </li>
            <li>
                <a class="m-3 text-[#5f5638]" href="">Condiciones</a>
            </li>
            <li>
                <a class="m-3 text-[#5f5638]" href="">Preferencias</a>
            </li>
        </ul>
    </footer>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3"

export default {
    components: {
        Link,
    }
}
</script>
<style lang="">
    
</style>