<template lang="">
    <header class="w-full h-16 pt-4 text-sm">
        <nav class="flex justify-end">
            <ul class="w-64 h-auto flex justify-center items-center">
                <li>
                    <a class="mr-2.5 black" href="">Correo</a>
                </li>
                <li>
                    <a class="mr-2.5 black" href="">Imagenes</a>
                </li>
                <li>
                    <a class="mr-2.5 flex w-7 h-7" href="">
                        <img src="https://static.thenounproject.com/png/756729-200.png" alt="">
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