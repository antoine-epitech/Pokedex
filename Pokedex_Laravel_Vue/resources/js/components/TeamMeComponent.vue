<template>
   
   <div >

         <div class="flex max-w-screen-lg m-2">
                <div class="w-1/5 bg-gray-500 h-12"> <a id="linkpok" v-bind:href="'/pokemons/'+idpok">CLICK</a> <img v-bind:src="'/img/pokemons/'+ idpok+'.png'"/></div>
                <div class="w-3/5 bg-gray-400 h-12 text-center" > [ # {{ idpok }} ] {{nompok}}</div>
                <div class="w-1/5 bg-gray-500 h-12 " >
                    <span class="flex rounded-full bg-indigo-500 uppercase text-xs font-bold m-1" id="type1">{{type1}}</span>
                    <span id="type2" class="flex rounded-full bg-indigo-500 uppercase  text-xs font-bold m-1">{{type2}}</span>
                </div>
            </div>
    </div>
</template>

<script>
    export default {
        props: ['idpok', 'nompok','type1','type2'],
        mounted() {
            console.log('Component mounted.')
          
        },
    }
</script>