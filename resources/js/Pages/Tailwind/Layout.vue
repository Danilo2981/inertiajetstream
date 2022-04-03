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
        
        <div class="container mt-4 bg-blue-400 mb-4">            
            <h1>Inline no permite margin y pading en el eje y </h1>
            <div class="bg-gray-400 text gray-700 text-center px-4 py-2 inline">1</div>
            <div class="bg-gray-400 text gray-700 text-center px-4 py-2 my-2 inline">2</div>
            <div class="bg-gray-400 text gray-700 text-center px-4 py-2 inline">3</div>
        </div>
        
        <div class="container mt-4 bg-blue-400 mb-4">            
            <h1>Inline-Block permite ponerle margin y pading en el eje y</h1>
            <div class="bg-gray-400 text gray-700 text-center px-4 py-2 inline-block">1</div>
            <div class="bg-gray-400 text gray-700 text-center px-4 py-2 my-2 inline-block">2</div>
            <div class="bg-gray-400 text gray-700 text-center px-4 py-2 inline-block">3</div>
        </div>

        <div class="container mt-4">
            <!-- float ubica a la imagen en el lugar dentro del texto -->
            <img src="https://images.pexels.com/photos/11143927/pexels-photo-11143927.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="float-right" >
            <img src="https://images.pexels.com/photos/9072452/pexels-photo-9072452.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="float-left">
            <p class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, dolorem. Incidunt molestiae totam eos maiores cum numquam nesciunt, eius nemo! Dolor adipisci dicta deleniti quis, illum at facere tenetur ipsum.</p>
            <p class="mb-2">Consectetur, nesciunt officia. Corrupti dicta itaque quos excepturi sapiente, ipsa amet quis quidem. Iure recusandae facilis, exercitationem quae eum temporibus laudantium deleniti ad porro sequi similique, error iste culpa molestiae?</p>
            <p class="mb-2">Perferendis rerum deserunt cupiditate quae nam doloribus officia enim fuga, reiciendis nostrum quibusdam deleniti. Maxime, corrupti a! Possimus tenetur blanditiis incidunt repellat temporibus, deleniti voluptate mollitia quos magnam iste magni.</p>
            <p class="mb-2">Soluta, rem laudantium ex eaque, cupiditate labore inventore dolores, itaque laborum sed optio eligendi aspernatur vero magni iusto voluptatum earum reprehenderit impedit beatae voluptatibus minima nemo fugit amet! Ullam, laudantium.</p>
            <p class="mb-2">Nisi atque quibusdam ut dolorem ipsa laborum, dolor obcaecati recusandae nobis est autem quo omnis nihil corporis placeat adipisci corrupti necessitatibus, blanditiis quis? Excepturi sint distinctio harum nam incidunt cupiditate!</p>
            <p class="mb-2">Ex facilis repellat maiores iste culpa eveniet dolore impedit rem itaque velit repellendus voluptate et ea cupiditate, dignissimos aperiam animi temporibus? Quos, minus veniam! A velit officia consequatur voluptates voluptatum.</p>
            <p class="mb-2">Asperiores quo maxime repellendus officia ducimus dolores et consequuntur sint error est facilis rem, laudantium ipsum fugit qui facere recusandae distinctio voluptas quisquam dolorem ut alias soluta quod magni. Cumque.</p>
            <p class="mb-2">Voluptates in sit nulla eum. Laudantium vel eaque, hic quidem tenetur a consequatur ipsa nobis accusamus temporibus, porro ex minima blanditiis dolores rem nihil repellendus amet totam. Sed, corporis dignissimos?</p>
            <p class="mb-2">Porro illum laboriosam enim quidem consequatur nostrum iste sit repellat id maxime beatae error veritatis recusandae officiis saepe ut earum vel, soluta nobis ipsa. Possimus, magni enim. Suscipit, doloribus nihil.</p>
            <p class="mb-2">Labore ea explicabo minima totam amet a vel soluta, laborum accusamus facere! Necessitatibus consequatur et, facilis odio facere aperiam cupiditate asperiores, dolor tempore quas nobis sapiente aut, architecto velit ratione.</p>
        </div>

        <div class="container mt-4">
            <!-- clear hace que los parrafos se pongan bajo la imagen flex-izquierda o derecha -->
            <!-- clear both hace que se formatee bajo flex left y right -->
            <img src="https://images.pexels.com/photos/11143927/pexels-photo-11143927.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="float-right" >
            <img src="https://images.pexels.com/photos/9072452/pexels-photo-9072452.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="float-left">
            <p class="mb-2 clear-right">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, dolorem. Incidunt molestiae totam eos maiores cum numquam nesciunt, eius nemo! Dolor adipisci dicta deleniti quis, illum at facere tenetur ipsum.</p>
            <p class="mb-2">Consectetur, nesciunt officia. Corrupti dicta itaque quos excepturi sapiente, ipsa amet quis quidem. Iure recusandae facilis, exercitationem quae eum temporibus laudantium deleniti ad porro sequi similique, error iste culpa molestiae?</p>
            <p class="mb-2">Perferendis rerum deserunt cupiditate quae nam doloribus officia enim fuga, reiciendis nostrum quibusdam deleniti. Maxime, corrupti a! Possimus tenetur blanditiis incidunt repellat temporibus, deleniti voluptate mollitia quos magnam iste magni.</p>
            <p class="mb-2">Soluta, rem laudantium ex eaque, cupiditate labore inventore dolores, itaque laborum sed optio eligendi aspernatur vero magni iusto voluptatum earum reprehenderit impedit beatae voluptatibus minima nemo fugit amet! Ullam, laudantium.</p>
            <p class="mb-2">Nisi atque quibusdam ut dolorem ipsa laborum, dolor obcaecati recusandae nobis est autem quo omnis nihil corporis placeat adipisci corrupti necessitatibus, blanditiis quis? Excepturi sint distinctio harum nam incidunt cupiditate!</p>
            <p class="mb-2">Ex facilis repellat maiores iste culpa eveniet dolore impedit rem itaque velit repellendus voluptate et ea cupiditate, dignissimos aperiam animi temporibus? Quos, minus veniam! A velit officia consequatur voluptates voluptatum.</p>
            <p class="mb-2">Asperiores quo maxime repellendus officia ducimus dolores et consequuntur sint error est facilis rem, laudantium ipsum fugit qui facere recusandae distinctio voluptas quisquam dolorem ut alias soluta quod magni. Cumque.</p>
            <p class="mb-2">Voluptates in sit nulla eum. Laudantium vel eaque, hic quidem tenetur a consequatur ipsa nobis accusamus temporibus, porro ex minima blanditiis dolores rem nihil repellendus amet totam. Sed, corporis dignissimos?</p>
            <p class="mb-2">Porro illum laboriosam enim quidem consequatur nostrum iste sit repellat id maxime beatae error veritatis recusandae officiis saepe ut earum vel, soluta nobis ipsa. Possimus, magni enim. Suscipit, doloribus nihil.</p>
            <p class="mb-2">Labore ea explicabo minima totam amet a vel soluta, laborum accusamus facere! Necessitatibus consequatur et, facilis odio facere aperiam cupiditate asperiores, dolor tempore quas nobis sapiente aut, architecto velit ratione.</p>
        </div>

        <div class="container mt-4">
            <!-- clear hace que los parrafos se pongan bajo la imagen flex-izquierda o derecha -->
            <!-- clear both hace que se formatee bajo flex left y right -->
            <img src="https://images.pexels.com/photos/11143927/pexels-photo-11143927.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="float-right" >
            <img src="https://images.pexels.com/photos/9072452/pexels-photo-9072452.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="float-left">
            <p class="mb-2 clear-both">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, dolorem. Incidunt molestiae totam eos maiores cum numquam nesciunt, eius nemo! Dolor adipisci dicta deleniti quis, illum at facere tenetur ipsum.</p>
            <p class="mb-2">Consectetur, nesciunt officia. Corrupti dicta itaque quos excepturi sapiente, ipsa amet quis quidem. Iure recusandae facilis, exercitationem quae eum temporibus laudantium deleniti ad porro sequi similique, error iste culpa molestiae?</p>
            <p class="mb-2">Perferendis rerum deserunt cupiditate quae nam doloribus officia enim fuga, reiciendis nostrum quibusdam deleniti. Maxime, corrupti a! Possimus tenetur blanditiis incidunt repellat temporibus, deleniti voluptate mollitia quos magnam iste magni.</p>
            <p class="mb-2">Soluta, rem laudantium ex eaque, cupiditate labore inventore dolores, itaque laborum sed optio eligendi aspernatur vero magni iusto voluptatum earum reprehenderit impedit beatae voluptatibus minima nemo fugit amet! Ullam, laudantium.</p>
            <p class="mb-2">Nisi atque quibusdam ut dolorem ipsa laborum, dolor obcaecati recusandae nobis est autem quo omnis nihil corporis placeat adipisci corrupti necessitatibus, blanditiis quis? Excepturi sint distinctio harum nam incidunt cupiditate!</p>
            <p class="mb-2">Ex facilis repellat maiores iste culpa eveniet dolore impedit rem itaque velit repellendus voluptate et ea cupiditate, dignissimos aperiam animi temporibus? Quos, minus veniam! A velit officia consequatur voluptates voluptatum.</p>
            <p class="mb-2">Asperiores quo maxime repellendus officia ducimus dolores et consequuntur sint error est facilis rem, laudantium ipsum fugit qui facere recusandae distinctio voluptas quisquam dolorem ut alias soluta quod magni. Cumque.</p>
            <p class="mb-2">Voluptates in sit nulla eum. Laudantium vel eaque, hic quidem tenetur a consequatur ipsa nobis accusamus temporibus, porro ex minima blanditiis dolores rem nihil repellendus amet totam. Sed, corporis dignissimos?</p>
            <p class="mb-2">Porro illum laboriosam enim quidem consequatur nostrum iste sit repellat id maxime beatae error veritatis recusandae officiis saepe ut earum vel, soluta nobis ipsa. Possimus, magni enim. Suscipit, doloribus nihil.</p>
            <p class="mb-2">Labore ea explicabo minima totam amet a vel soluta, laborum accusamus facere! Necessitatibus consequatur et, facilis odio facere aperiam cupiditate asperiores, dolor tempore quas nobis sapiente aut, architecto velit ratione.</p>
        </div>

        <div class="container">
            <h1>Object contain</h1>
        </div>
        <div class="container bg-gray-300">
            <img src="https://cdn.pixabay.com/photo/2022/02/24/15/17/cat-7032641_960_720.jpg" alt="" class="w-full h-64 object-contain">
        </div>

        <div class="container">
            <h1>Object cover</h1>
        </div>
        <div class="container bg-gray-300">
            <img src="https://cdn.pixabay.com/photo/2022/02/24/15/17/cat-7032641_960_720.jpg" alt="" class="w-full h-64 object-cover">
        </div>

        <div class="container">
            <h1>Object cover object top</h1>
        </div>
        <div class="container bg-gray-300">
            <img src="https://cdn.pixabay.com/photo/2022/02/24/15/17/cat-7032641_960_720.jpg" alt="" class="w-full h-64 object-cover object-top">
        </div>

        <div class="container">
            <h1>Object cover object bottom</h1>
        </div>
        <div class="container bg-gray-300">
            <img src="https://cdn.pixabay.com/photo/2022/02/24/15/17/cat-7032641_960_720.jpg" alt="" class="w-full h-64 object-cover object-bottom">
        </div>

        <div class="container">
            <h1>Object none</h1>
        </div>
        <div class="container bg-gray-300">
            <img src="https://cdn.pixabay.com/photo/2022/02/24/15/17/cat-7032641_960_720.jpg" alt="" class="w-full h-64 object-none">
        </div>

        <div class="container mt-6">
            <!-- over flow hidden esconde los parrafos que salen del contenedor padre -->
            <h1>Over Flow Hidden</h1>
            <div class="bg-gray-400 h-64 overflow-hidden">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat, repudiandae commodi beatae at inventore, mollitia nisi et provident consequatur earum temporibus quam, ipsum libero. Repudiandae doloribus possimus nesciunt molestiae!</p>
                <p>Nihil neque maiores, est officia quae dolorum voluptatem? Dicta, eaque illo rerum, repellat harum autem dolore quam recusandae voluptate doloribus est quas voluptatem molestias quia aspernatur id perferendis, itaque consequatur!</p>
                <p>Id cupiditate tempora ratione nisi, exercitationem, praesentium aut quo officia veritatis placeat possimus ipsa voluptatum, maxime aperiam odit mollitia? Ullam consectetur corrupti dolor nemo minus, debitis repellat molestias perferendis eum?</p>
                <p>Obcaecati fugit earum deserunt quae dolorem inventore mollitia cupiditate expedita iure nam aperiam, optio perspiciatis laudantium provident ipsum quas repellat, sequi sint repudiandae, facilis error voluptatibus non saepe delectus! Adipisci?</p>
                <p>Sapiente, eos ad quaerat odit necessitatibus fuga sint laborum temporibus repellat modi architecto similique sunt nobis debitis maiores sed vitae ipsum odio cupiditate. Omnis quod assumenda at expedita dolores nemo!</p>
                <p>At quam praesentium iusto, quidem unde, iste dignissimos vel nostrum, enim possimus cumque voluptatibus dolore nobis sed quos. Cupiditate laborum voluptates tempore eum, repudiandae quo id repellendus iusto fugit facilis?</p>
                <p>Illum labore reiciendis id quam dolores adipisci molestias aut odio mollitia exercitationem voluptate ducimus beatae sunt cupiditate ipsam maiores dolore sapiente nisi, molestiae nihil cum! Velit ut illum enim ab.</p>
                <p>Quis quaerat dolore dolores quas quam dignissimos impedit? Officiis vitae aperiam incidunt maxime amet! Eum repudiandae voluptatem et explicabo ex dolorum praesentium tenetur vero commodi reiciendis beatae, rerum blanditiis earum.</p>
                <p>Doloremque quidem possimus, voluptatem aliquam aspernatur quibusdam aperiam rem. Quas perspiciatis mollitia doloremque tempore aperiam possimus pariatur quis doloribus aliquam sapiente, ullam, molestiae quae beatae laborum quam impedit, accusantium qui!</p>
                <p>Repellat esse incidunt aut, non earum obcaecati neque eaque, ea nam doloribus at pariatur modi commodi, temporibus officiis expedita maxime debitis nihil aperiam. Quasi eveniet alias reiciendis quis corporis asperiores!</p>
            </div>
        </div>

        <div class="container mt-6">
            <!-- over flow scroll permite que se pueda mover para ver el texto overflow-x-scroll o -y-scroll o -auto -->
            <h1>Over Flow Scroll</h1>
            <div class="bg-gray-400 h-64 overflow-auto">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat, repudiandae commodi beatae at inventore, mollitia nisi et provident consequatur earum temporibus quam, ipsum libero. Repudiandae doloribus possimus nesciunt molestiae!</p>
                <p>Nihil neque maiores, est officia quae dolorum voluptatem? Dicta, eaque illo rerum, repellat harum autem dolore quam recusandae voluptate doloribus est quas voluptatem molestias quia aspernatur id perferendis, itaque consequatur!</p>
                <p>Id cupiditate tempora ratione nisi, exercitationem, praesentium aut quo officia veritatis placeat possimus ipsa voluptatum, maxime aperiam odit mollitia? Ullam consectetur corrupti dolor nemo minus, debitis repellat molestias perferendis eum?</p>
                <p>Obcaecati fugit earum deserunt quae dolorem inventore mollitia cupiditate expedita iure nam aperiam, optio perspiciatis laudantium provident ipsum quas repellat, sequi sint repudiandae, facilis error voluptatibus non saepe delectus! Adipisci?</p>
                <p>Sapiente, eos ad quaerat odit necessitatibus fuga sint laborum temporibus repellat modi architecto similique sunt nobis debitis maiores sed vitae ipsum odio cupiditate. Omnis quod assumenda at expedita dolores nemo!</p>
                <p>At quam praesentium iusto, quidem unde, iste dignissimos vel nostrum, enim possimus cumque voluptatibus dolore nobis sed quos. Cupiditate laborum voluptates tempore eum, repudiandae quo id repellendus iusto fugit facilis?</p>
                <p>Illum labore reiciendis id quam dolores adipisci molestias aut odio mollitia exercitationem voluptate ducimus beatae sunt cupiditate ipsam maiores dolore sapiente nisi, molestiae nihil cum! Velit ut illum enim ab.</p>
                <p>Quis quaerat dolore dolores quas quam dignissimos impedit? Officiis vitae aperiam incidunt maxime amet! Eum repudiandae voluptatem et explicabo ex dolorum praesentium tenetur vero commodi reiciendis beatae, rerum blanditiis earum.</p>
                <p>Doloremque quidem possimus, voluptatem aliquam aspernatur quibusdam aperiam rem. Quas perspiciatis mollitia doloremque tempore aperiam possimus pariatur quis doloribus aliquam sapiente, ullam, molestiae quae beatae laborum quam impedit, accusantium qui!</p>
                <p>Repellat esse incidunt aut, non earum obcaecati neque eaque, ea nam doloribus at pariatur modi commodi, temporibus officiis expedita maxime debitis nihil aperiam. Quasi eveniet alias reiciendis quis corporis asperiores!</p>
            </div>
        </div>

        <div class="container mt-6">
            <div class="bg-gray-300 p-4">
                <div class="bg-gray-400 p-4">
                    <div class="bg-blue-400 p-4"></div>
                    <div class="bg-blue-600 p-4"></div>
                </div>
            </div>
        </div>

        <div class="container mt-6">
            <div class="bg-gray-300 p-4 relative">
                <!-- relative hace que el absoluto de la caja hija se posicione fuera de la caja hija en la caja relativa -->
                <!-- toma el relative mas cercano a la caja hija de no se posiciona en el body -->
                <div class="bg-gray-400 p-4 relative">
                    <div class="bg-blue-400 p-4"></div>
                    <!-- posicion absolute permite sacar la caja del orden relativo y colocarlo fuera -->
                    <!-- inset-x-0 posisiona en todo en un eje,  top o bottom posiciona arriba o abajo -->
                    <div class="bg-blue-600 p-4 absolute inset-x-0 bottom-0"></div>
                </div>
            </div>
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
