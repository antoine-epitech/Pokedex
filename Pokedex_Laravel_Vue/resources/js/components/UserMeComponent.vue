<template>
   
   <div >
    <div class="flex flex-wrap mb-4">
             <div class="w-full text-center text-white font-bold lg:text-2xl bg-yellow-500 h-12">PROFILE</div>
           </div>
      
         <div class="flex items-center">
            
        </div>
        <div class="border-r border-b border-l border-red-700 lg:border-l-0 lg:border-t lg:border-red-700 bg-white bg-opacity-50 rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
            <div class="text-sm">
                <img class="mx-auto" width="100" height="100" v-bind:src="'/img/icons/'+ idicon+'.png'"/>
            </div>
            <p class="text-sm text-center text-gray-600 ">
                #ID: {{iduser}}
            </p>
            <div class="text-gray-900 text-center text-red-700 font-bold text-xl mb-2">{{username}}</div>
            <p class="text-gray-700 text-base"></p>
            </div>
           
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