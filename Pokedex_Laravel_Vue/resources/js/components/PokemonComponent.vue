<template>
    <div >
        <div class="flex-wrap flex m-2 p-2 rounded">
                <div class="w-1/5 bg-white bg-opacity-75 h-12"> <img class="mx-auto" width="70" height="70" v-bind:src="'/img/pokemons/'+ idpok+'.png'"/></div>
                <div class="w-3/5 bg-white bg-opacity-75 h-12 text-center" > <a id="linkpok" v-bind:href="'/pokemons/'+idpok"><span class="text-red-700">[ # {{ idpok }} ]</span> <span class="font-bold uppercase m-1"> {{nompok}} </span></a></div>
                <div class="w-1/5 bg-white bg-opacity-75 h-12 " >
                    <span v-bind:style="{ backgroundColor: bgc1 }" class="flex text-center rounded-full uppercase text-xs font-bold m-1" id="type1">{{type1}}</span>
                    <span v-bind:style="{ backgroundColor: bgc2 }" id="type2"  class="flex text-center rounded-full uppercase  text-xs font-bold m-1">{{type2}}</span>
                </div>
            </div>
    </div>
</template>

<script>
    export default {
        data() {
            return{
            bgc1: "#fff",
            bgc2: "#fff"
                    }
            },
        mounted() {
            console.log('Component mounted.')
            this.getColor();
            //this.changelink();
        },
     props: ['idpok', 'nompok','type1','type2'],
     methods:{
         changelink: function(){
             var link = "/pokemons/"+this.idpok
            document.getElementById("linkpok").setAttribute("href", link);

         },

         getColor:function(){

                switch(this.type1){
                   case "grass":
                      this.bgc1 = "#5DBE62";
                   break;

                   case "fire":
                       this.bgc1 = "#F8A54F";
                   break;

                   case "water":
                      this.bgc1 = "#0773C7";
                   break;

                   case "bug":
                       this.bgc1 = "#9DC130";
                   break;

                   case "normal":
                      this.bgc1 = "#CCCCCC";
                   break;

                   case "poison":
                      this.bgc1 = "#B563CE";
                   break;

                   case "electric":
                      this.bgc1 = "#EDD53F";
                   break;

                   case "ground":
                       this.bgc1 = "#CEC18C";
                   break;

                   case "fairy":
                       this.bgc1 = "#F87C7A";
                   break;

                   case "fighting":
                      this.bgc1 = "#D94256";
                   break;

                   case "psychic":
                      this.bgc1 = "#EF97E6";
                   break;

                   case "rock":
                      this.bgc1 = "#9A9DA1";
                   break;

                   case "ghost":
                       this.bgc1 = "#6970C5";
                   break;

                   case "ice":
                        this.bgc1 = "#7ED4C9";
                   break;

                   case "dragon":
                        this.bgc1 = "#5596A4";
                   break;

                    case "flying":
                        this.bgc1 = "#e6f2ff";
                   break;

                   case "dark":
                        this.bgc1 = "#260d1a";
                   break;


                   default:
                        this.bgc1 = "#fff";

                  };


                 //TYPE 2

                 switch(this.type2){
                     case "grass":
                        this.bgc2 = "#5DBE62";
                     break;

                     case "fire":
                         this.bgc2 = "#F8A54F";
                     break;

                     case "water":
                        this.bgc2 = "#0773C7";
                     break;

                     case "bug":
                         this.bgc2 = "#9DC130";
                     break;

                     case "normal":
                        this.bgc2 = "#CCCCCC";
                     break;

                     case "poison":
                        this.bgc2 = "#B563CE";
                     break;

                     case "electric":
                        this.bgc2 = "#EDD53F";
                     break;

                     case "ground":
                         this.bgc2 = "#CEC18C";
                     break;


                    case "fairy":
                         this.bgc2 = "#F87C7A";
                    break;

                    case "figthing":
                        this.bgc2 = "#D94256";
                    break;

                    case "psychic":
                      this.bgc2 = "#EF97E6";
                    break;

                    case "rock":
                           this.bgc2 = "#9A9DA1";
                    break;

                    case "ghost":
                         this.bgc2 = "#6970C5";
                    break;

                    case "ice":
                       this.bgc2 = "#7ED4C9";
                    break;

                    case "flying":
                        this.bgc2 = "#e6f2ff";
                    break;

                    case "dark":
                        this.bgc2 = "#260d1a";
                    break;
                    case "dragon":
                      this.bgc2 = "#5596A4";
                    break;

                    default:
                       this.bgc2 = "#fff";

                 }
             }
     },

    }
</script>
