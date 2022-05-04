<template lang="">
    <main class="mt-40 flex flex-col items-center justify-center"> 
        <section class="mt-0 mr-auto mb-9 ml-auto">
            <img class="w-72" src="https://logodownload.org/wp-content/uploads/2014/09/google-logo-1.png" alt="">
        </section>
        <section class="mt-0 mr-auto mb-9 ml-auto">
            <div class="w-528 h-10 rounded-full flex justify-center items-center border-[1px] border-solid border-greysi hover:shadow-[0_1px_6px_0_rgba(32,33,36,0.278)] hover:border-[#dfe1e500]">
                <span class="w-4 h-4 m-2">
                    <img src="https://img.icons8.com/android/24/000000/search.png" alt="">
                </span>
                <input class="w-448 h-8 border-none outline-none" type="">
                <a class="w-5 h-5 m-2" href="">
                    <img src="https://www.gstatic.com/images/branding/googlemic/2x/googlemic_color_24dp.png" alt="">
                </a>
            </div>
        </section>
        <section class="w-528 m-[0_auto] flex justify-center">
            <div>
                <button class="h-9 bg-[#f2f2f2] border-0 text-sm text-[#5f6368] rounded p-[0_15px] mr-4  hover:border-[1px] hover:border-solid hover:border-[#c6c6c6] hover:shadow-[0_1px_1px_0_rgb(0,0,1) hover:text-[#222]">Buscar con Google</button>
            </div>
            <div>
                <button class="h-9 bg-[#f2f2f2] border-0 text-sm text-[#5f6368] rounded p-[0_15px] mr-4
                hover:border-[1px] hover:border-solid hover:border-[#c6c6c6] hover:shadow-[0_1px_1px_0_rgb(0,0,1) hover:text-[#222]">Me siento con suerte</button>
            </div>
        </section>
    </main>
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