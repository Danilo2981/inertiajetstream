<template>
    <app-layout title="Tailwind">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tailwind
            </h2>
        </template>

        <div class="container py-12">
            <h1 class="text-center text-3xl font-bold">GRID</h1>
        </div>
        <!-- Container determina el tamaño 
        
        Class       Breakpoint      Properties
        container	None	        width: 100%;
                    sm (640px)	    max-width: 640px;
                    md (768px)	    max-width: 768px;
                    lg (1024px)	    max-width: 1024px;
                    xl (1280px)	    max-width: 1280px;
                    2xl (1536px)	max-width: 1536px; -->

        <div class="container">
            <!-- Sistema de columnas, mover la grid para determinar el sistema de columnas 
            container no es necesario -->
            <!-- Grid determina el numero de columnas a distribuir -->
            <!-- Solamente divide hasta 12 columnas para poner mas columnas hacerlo en tailwind.config.js -->

            <!-- By default, Tailwind includes grid-template-column utilities for creating basic grids with up to 12 equal width columns. You can customize these values by editing theme.gridTemplateColumns or theme.extend.gridTemplateColumns in your tailwind.config.js file.

            You have direct access to the grid-template-columns CSS property here so you can make your custom column values as generic or as complicated and site-specific as you like.

            tailwind.config.js
            module.exports = {
            theme: {
                extend: {
                gridTemplateColumns: {
                    // Simple 16 column grid
                    '16': 'repeat(16, minmax(0, 1fr))',

                    // Complex site-specific column configuration
                    'footer': '200px minmax(900px, 1fr) 100px',
                }
                }
            }
            } -->

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- col-span hace que la caja ocupe espacios dentro de la grid -->
                <div class="bg-blue-200 col-span-1 sm:col-span-2 lg:col-span-3">A</div>
                <div class="bg-blue-300">B</div>
                <div class="bg-blue-400">C</div>
                <div class="bg-blue-500">D</div>
                <!-- Si se pone mas columnas las pone en la siguiente linea -->
                <!-- Se usa gap para separar entre columnas -->
                <!-- gap-x- y gap-y- para separar horizontal o verticalmente -->
                <div class="bg-blue-600">E</div>
                <div class="bg-blue-700">F</div>
            </div>
        </div>

        <div class="container py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- col-start hace que la caja empieze en determinada columna -->
                <div class="bg-blue-200 col-span-2 col-start-2">A</div>
                <div class="bg-blue-300 col-start-1">B</div>
                <div class="bg-blue-400">C</div>
                <div class="bg-blue-500">D</div>
                <div class="bg-blue-600">E</div>
                <div class="bg-blue-700 col-span-2 col-start-2">F</div>
            </div>
        </div>

        <div class="container py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-blue-200">A</div>
                <div class="bg-blue-300">B</div>
                <!-- row-span ocupa n filas que se escoja -->
                <div class="bg-blue-400 col-span-2 row-span-2">C</div>
                <div class="bg-blue-500">D</div>
                <div class="bg-blue-600">E</div>
            </div>
        </div>

        <div class="container py-12">
            <!-- grid-flow-col hubica horizontal y luego verticalmente las cajas al usar grid-rows -->
            <div class="grid grid-flow-col grid-rows-3">
                <div class="bg-blue-100">1</div>
                <div class="bg-blue-200">2</div>
                <div class="bg-blue-300">3</div>
                <div class="bg-blue-400">4</div>
                <div class="bg-blue-500">5</div>
                <div class="bg-blue-600">6</div>
                <div class="bg-blue-700">7</div>
                <div class="bg-blue-800">8</div>
                <div class="bg-blue-900">9</div>
            </div>
        </div>

        <div class="container py-12">
            <h1 class="text-center text-3xl font-bold">TIPOGRAFIA</h1>
        </div>

        <div class="container">
            <h1 class="font-sans text-6xl md:text-3xl font-bold mb-4">Este es un título de prueba</h1>
            <p class="font-serif leading-relaxed mb-3 -ml-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iusto quod beatae. Tempora ratione debitis dolorum? In cumque enim dolores magni distinctio consectetur a inventore, officiis libero, accusamus suscipit aliquam.</p>
            <ul>
                <li class="font-mono text-sm italic">Elemento #01</li>
                <li class="font-mono text-sm italic">Elemento #02</li>
                <li class="font-mono text-sm italic">Elemento #03</li>
            </ul>
        </div>

        <div class="container py-12">
            <p class="font-popi font-thin">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere illum magnam eaque excepturi consequuntur magni pariatur dolores necessitatibus dolore sunt labore sint ab fuga impedit quam tenetur, quas nobis blanditiis.</p>
            <p class="font-popi font-light">Natus animi repellendus laboriosam eveniet similique perferendis totam cumque. Quod voluptates, beatae iste quaerat sunt facere error animi impedit quae vero et praesentium, natus facilis minus atque expedita omnis tenetur!</p>
            <p class="font-popi font-semibold">Voluptate enim quo, animi nemo praesentium maiores. Sapiente voluptate ex, enim quae quod sunt dolorem necessitatibus corrupti optio tempora cumque nihil alias fugiat facilis eveniet laborum, similique illo quas maiores!</p>
            <p class="font-popi font-black">Earum quibusdam cupiditate deserunt, quidem laboriosam esse aliquam quia labore unde quam, magnam sint modi. Unde ad voluptatibus fugit magnam aut labore quisquam porro consequatur, dolores repellat ab optio eius?</p>
        </div>

        <div class="container py-12">
            <p class="tracking-tighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum rem explicabo, eveniet, illum consectetur a illo unde accusantium excepturi, mollitia tempore magni quam impedit ut. Nisi molestias dignissimos laboriosam reiciendis.</p>
            <p class="tracking-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum rem explicabo, eveniet, illum consectetur a illo unde accusantium excepturi, mollitia tempore magni quam impedit ut. Nisi molestias dignissimos laboriosam reiciendis.</p>
            <p class="tracking-widest">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum rem explicabo, eveniet, illum consectetur a illo unde accusantium excepturi, mollitia tempore magni quam impedit ut. Nisi molestias dignissimos laboriosam reiciendis.</p>
        </div>

        <div class="container py-12">
            <ul class="list-disc">
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quidem exercitationem assumenda repudiandae enim est eligendi cum eveniet eaque neque excepturi tempore, quibusdam dolores ipsum illum doloribus modi cumque magni.</li>
                <li>Dicta maxime, eligendi laboriosam corporis quidem ipsum totam optio, earum sunt ut adipisci et tempore praesentium repudiandae est culpa quis? Laboriosam, quas asperiores? Perspiciatis voluptas, corporis reprehenderit adipisci quia velit.</li>
                <li>Temporibus autem commodi quisquam repellendus magnam molestiae facere adipisci, id repudiandae tempora laborum itaque officiis dolorem quaerat earum doloremque culpa iusto ullam deleniti exercitationem nisi minus labore. Aut, voluptas dolores.</li>
                <li>Reprehenderit ullam nam at molestiae cupiditate tempore odit nihil praesentium, facilis aperiam dolorum maiores modi. Hic beatae aliquam possimus quas. Totam sapiente fugiat molestias magni! Ullam perferendis unde porro suscipit?</li>
                <li>Aliquam eligendi consectetur, officia aperiam at nobis temporibus esse odit? Magni labore a dolore repudiandae. Fugit asperiores expedita odio aspernatur! Veritatis labore cupiditate odit eum aut, dicta illo iusto fuga!</li>
            </ul>
        </div>

        <div class="container py-12">
            <ul class="list-decimal">
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quidem exercitationem assumenda repudiandae enim est eligendi cum eveniet eaque neque excepturi tempore, quibusdam dolores ipsum illum doloribus modi cumque magni.</li>
                <li>Dicta maxime, eligendi laboriosam corporis quidem ipsum totam optio, earum sunt ut adipisci et tempore praesentium repudiandae est culpa quis? Laboriosam, quas asperiores? Perspiciatis voluptas, corporis reprehenderit adipisci quia velit.</li>
                <li>Temporibus autem commodi quisquam repellendus magnam molestiae facere adipisci, id repudiandae tempora laborum itaque officiis dolorem quaerat earum doloremque culpa iusto ullam deleniti exercitationem nisi minus labore. Aut, voluptas dolores.</li>
                <li>Reprehenderit ullam nam at molestiae cupiditate tempore odit nihil praesentium, facilis aperiam dolorum maiores modi. Hic beatae aliquam possimus quas. Totam sapiente fugiat molestias magni! Ullam perferendis unde porro suscipit?</li>
                <li>Aliquam eligendi consectetur, officia aperiam at nobis temporibus esse odit? Magni labore a dolore repudiandae. Fugit asperiores expedita odio aspernatur! Veritatis labore cupiditate odit eum aut, dicta illo iusto fuga!</li>
            </ul>
        </div>

        <div class="container">

            <h1 class="text-xl font-bold text-left md:text-center lg:text-right underline uppercase">Este es el titulo</h1>

            <p class="text-red-700 hover:text-blue-500 text-opacity-60">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores laboriosam distinctio cum nam facere odit eligendi alias aperiam excepturi delectus. Ipsum velit facilis dignissimos eveniet, porro aut tenetur explicabo? Voluptas.</p>
            
            <ul class="list-decimal md:list-disc list-inside">
                <li class="line-through">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quidem exercitationem assumenda repudiandae enim est eligendi cum eveniet eaque neque excepturi tempore, quibusdam dolores ipsum illum doloribus modi cumque magni.</li>
                <li>Dicta maxime, eligendi laboriosam corporis quidem ipsum totam optio, earum sunt ut adipisci et tempore praesentium repudiandae est culpa quis? Laboriosam, quas asperiores? Perspiciatis voluptas, corporis reprehenderit adipisci quia velit.</li>
                <li>Temporibus autem commodi quisquam repellendus magnam molestiae facere adipisci, id repudiandae tempora laborum itaque officiis dolorem quaerat earum doloremque culpa iusto ullam deleniti exercitationem nisi minus labore. Aut, voluptas dolores.</li>
                <li>Reprehenderit ullam nam at molestiae cupiditate tempore odit nihil praesentium, facilis aperiam dolorum maiores modi. Hic beatae aliquam possimus quas. Totam sapiente fugiat molestias magni! Ullam perferendis unde porro suscipit?</li>
                <li class="lowercase">Aliquam eligendi consectetur, officia aperiam at nobis temporibus esse odit? Magni labore a dolore repudiandae. Fugit asperiores expedita odio aspernatur! Veritatis labore cupiditate odit eum aut, dicta illo iusto fuga!</li>
            </ul>

            <p class="capitalize">danilo miguel vega lopez</p>
        </div>

        <div class="container py-12">
            <h1 class="text-center text-3xl font-bold">BACKGROUND</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam quo officia facere iusto, iure aliquam sint enim in et excepturi expedita dolorem porro nesciunt accusantium esse veritatis unde eaque maxime.</P>
            <!-- bg-contain hace que la imagen utilice lo referido en la clase imagen -->
            <!-- bg-no-repeat se usa con bg-contain -->
            <!-- bg-cover hace que se muestre la imagen desde le lado izquierdo -->
            <!-- Con bg-cover bg-right hace que la imagen se muestre desde el lado derecho -->
            <!-- bg-clip-content permite poner pading del border -->
            <div class="imagen bg-cover bg-right border-8 border-blue-600 border-dashed bg-clip-content p-4"></div>
        </div>

        <div class="container">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam quo officia facere iusto, iure aliquam sint enim in et excepturi expedita dolorem porro nesciunt accusantium esse veritatis unde eaque maxime.</P>
            <!-- bg-fixed fija la imagen hace que ocupe todo el ancho y se queda en la vista a lo que se hace scroll -->
            <div class="imagen1 bg-cover bg-fixed"></div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque temporibus nam cupiditate tempore expedita, ducimus a consequuntur eligendi molestiae, modi accusantium! Iste, sapiente maiores delectus eligendi dolorem ducimus sunt asperiores?</p>
            <p>Vero eos velit temporibus. Modi deleniti porro quibusdam rerum ipsum nulla, similique alias dicta consequatur doloribus sed laudantium, fugiat sit temporibus, tempora esse quisquam accusamus ratione eveniet fuga vero ut!</p>
            <p>Fugit quos laboriosam deserunt quia nulla facere repellendus quidem quae nemo laborum! Distinctio enim in expedita odit optio perferendis cumque reprehenderit vel repudiandae atque molestiae cum, vitae officiis rerum labore.</p>
            <p>Aspernatur possimus numquam deserunt ratione ea perferendis architecto in recusandae hic vero. Expedita dolore, commodi, at in aperiam consequatur magni, voluptas necessitatibus nisi soluta quos repudiandae cumque atque quisquam ad.</p>
            <p>Repudiandae id consequatur corrupti eos facere fugit amet, soluta veritatis minima cupiditate blanditiis quaerat dolorem obcaecati, aliquam, molestias eligendi libero iusto natus optio. Porro animi repudiandae, vitae ea quaerat laboriosam.</p>
            <p>Dolor tempora atque magnam voluptatem laudantium id! Asperiores nulla sint enim odio officiis. Dolorum porro explicabo sequi similique repellat ab, voluptatibus tenetur tempora ducimus nemo hic modi sint minus nihil.</p>
            <p>Laudantium est quae numquam magnam? At velit voluptatibus nobis sapiente officia, temporibus incidunt architecto ipsam dicta repellendus dignissimos provident, rerum ab alias voluptatem nisi molestiae, libero a quia dolores ut.</p>
            <p>Sunt impedit quis aut excepturi nesciunt. Vero voluptatem repellat corrupti non fugiat distinctio asperiores porro veritatis eos soluta modi ipsam odio cum praesentium cumque deserunt qui perferendis animi, rem tempora!</p>
            <p>Sunt nobis est ad. Sed tempora suscipit nisi vero earum, distinctio quam sunt velit iure ab ut esse ducimus, reiciendis sit soluta? Aliquid, cum obcaecati. Nostrum molestiae facere aut tenetur.</p>
            <p>Magni eveniet inventore fuga quibusdam, culpa quia deleniti similique placeat velit dolore mollitia accusantium qui, quod nesciunt quo ad libero ipsum exercitationem molestias quisquam, beatae maxime? Vitae iusto ea natus?</p>
        </div>

        <div class="container py-12">
            <h1 class="text-center text-3xl font-bold">DEGRADARO</h1>
            <div class="bg-gradient-to-r from-blue-500 via-green-600 to-yellow-400 text-center text-5xl font-bold">
                Hola mundo
            </div>
            <div class="bg-gradient-to-r from-blue-500 via-green-600 to-yellow-400 text-center text-5xl font-bold bg-clip-text text-transparent">
                Hola mundo
            </div>
        </div>

        <div class="container py-12">
            <h1 class="text-center text-3xl font-bold">BORDES</h1>
                <!-- rounded full redondea al cuadrado -->
            <div class="w-64 h-64 bg-gray-500 border-8 border-blue-800 rounded-full"></div>
                <!-- divide pone lineas de division en las listas o proyectos -->
            <div class="divide-y-8 divide-gray-600 divide-dashed">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus accusantium laboriosam exercitationem ratione enim id, optio architecto nulla pariatur aut ullam error nam iure excepturi dolores. Nostrum, magni. Accusantium, aspernatur?</p>
                <p>Modi veniam, sed rem minus repellendus voluptas nobis porro, adipisci eveniet expedita eum deleniti quo sapiente possimus corporis a ea ducimus quos obcaecati eius tenetur? Voluptatum quod praesentium eos in!</p>
                <p>Laborum quasi sequi, vitae quaerat obcaecati aut illo, quam cumque facilis quod enim expedita ipsam placeat amet deserunt doloribus blanditiis alias saepe aspernatur voluptates quos voluptatem. Placeat voluptatum perspiciatis tempore!</p>
                <p>Ad dolor eaque odit illum facilis dolorum, amet necessitatibus cupiditate deserunt vel? Consequuntur iste veniam animi rem voluptate a, perferendis aliquam aliquid voluptatem eaque quidem, dolore, odio ut consequatur iure!</p>
                <p>Quibusdam sed delectus sapiente, aspernatur minima, possimus hic soluta modi iusto esse dolorum pariatur ducimus voluptate quisquam, natus animi atque fugiat repellendus laborum quaerat. Aliquam velit officia quo quisquam harum!</p>
            </div>
            <nav class="divide-x-2 divide-gray-400">
                <a href="" class="">Link 1</a>
                <a href="" class="">Link 2</a>
                <a href="" class="">Link 3</a>
                <a href="" class="">Link 4</a>
                <a href="" class="">Link 5</a>
            </nav>
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