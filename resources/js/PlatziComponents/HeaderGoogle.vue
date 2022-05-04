<template lang="">
    <header class="w-full h-16 p-2 text-sm">
        <nav class="flex justify-end">
            <ul class="w-64 h-auto flex justify-center items-center">
                <li>
                    <a class="mr-2.5 black" href="">Correo</a>
                </li>
                <li>
                    <a class="mr-2.5 black" href="">Imagenes</a>
                </li>
                <li>
                    <a class="mr-2.5 flex" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="mr-2.5 black flex" href="">
                        <img class="rounded-full" src="https://lh3.googleusercontent.com/ogw/ADea4I5Rz_7akZSIOXluFsP6S8cPOFUXPNDC8qIy840L=s32-c-mo" srcset="https://lh3.googleusercontent.com/ogw/ADea4I5Rz_7akZSIOXluFsP6S8cPOFUXPNDC8qIy840L=s32-c-mo 1x, https://lh3.googleusercontent.com/ogw/ADea4I5Rz_7akZSIOXluFsP6S8cPOFUXPNDC8qIy840L=s64-c-mo 2x" alt="" aria-hidden="true" data-noaft="">
                    </a>
                </li>
            </ul>
        </nav>
    </header>
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