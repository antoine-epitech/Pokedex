<template>
   <div >
        <div class="flex-wrap flex m-2 p-2 rounded">
                <div class="w-1/5 bg-white bg-opacity-75 h-12"> <img class="mx-auto" width="70" height="70" v-bind:src="'/img/icons/'+ idicon+'.png'"/></div>
                <div class="w-3/5 bg-white bg-opacity-75 h-12 text-center" > <a id="linkpok" v-bind:href="'/users/'+iduser"><span class="text-red-700">[ # {{ iduser }} ]</span> </a></div>
                <div class="w-1/5 bg-white bg-opacity-75 h-12 " > <span class="font-bold uppercase m-1"> {{username}} </span></div>
            </div>
    </div>
</template>

<script>
    export default {
        props:['iduser','idicon','username'],
        mounted() {
            console.log('Component mounted.')
          
        },
    }
</script>