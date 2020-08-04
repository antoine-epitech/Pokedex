<template>
<div >
    <div class="container flex-wrap max-w-lg  mx-auto " id="fondpoke" >
        <div class="header dark-sky-blue pt-6 pb-6 " v-bind:style="{ backgroundColor: bgc }" style="border-radius: 40px; box-shadow: 12px 5px 18px #000000 ;">
            <div class="header-round w-1/3 m-auto ">
               <img v-bind:src="'/img/pokemons/'+ idpok+'.png'" style="border-radius: 50%; background-color:white; box-shadow: 3px 4px 4px #000000 ;"/>
            </div>
        </div>
        <br>

        <div class="bg-white bg-opacity-75" >
        <div class="flex items-center flex-row pokemon_font">
                <div class="w-1/4"></div>
                <h1 class="header-username text-center text-gray-700 mt-6 opacity-10 text-4xl w-2/4">{{nompok}}</h1>
                <p class="text-gray-700 text-opacity-50 text-center mt-8 w-1/4">ID #{{idpok}}</p>
            </div>
            <hr>
           <div class="flex justify-center"> <span class="text-center rounded-full p-2 uppercase text-xs font-bold m-1" v-bind:style="{ backgroundColor: bgc }"> {{type1}}</span>  <span class="text-center rounded-full p-2 uppercase text-xs font-bold m-1" v-bind:style="{ backgroundColor: bgc2 }"> {{type2}} </span>
           </div>
        <li class="flex flex-row pokemon_font justify-center flex space-x-10 py-5">
            <!--<a href="#"><img class="1/3 content-picture" src="img/water.png"/></a>-->
        </li>
        <div class="flex text-center flex-row pokemon_font ">
            <p class="header-username text-center m-5 text-gray-700 mt-6 opacity-10 text-1xl">{{descpok}}
                </p>
        </div>
            <div class="flex justify-center">
                <button @click="getStat" v-bind:style="{ backgroundColor: bgc }" class=" m-2 hover:bg-black text-white font-bold py-2 px-4 rounded-full">
                    STATS
                </button>
                <button @click="getWeak" v-bind:style="{ backgroundColor: bgc }" class="m-2 hover:bg-black text-white font-bold py-2 px-4 rounded-full">
                    WEAKNESSES
                </button>
                <button @click="getEvol" v-bind:style="{ backgroundColor: bgc }" class=" m-2 hover:bg-black text-white font-bold py-2 px-4 rounded-full">
                    EVOLUTIONS
                </button>
            </div>


            <!-- SKILLS -->
            <div v-if="showmenu === 0" class="w-full flex mt-4 mb-4 flex-wrap">
                 <div class="w-full inline-flex mb-2">
                    <span class="ml-2 font-bold mr-12">HP</span>
                    <div class="ml-2 bg-blue-500 text-xs leading-none py-1 text-center text-white" v-bind:style="'width:'+hp +'%; backgroundColor:'+bgc">{{hp}}</div>
                </div>
                <div class="w-full inline-flex mb-2 ">
                    <span class="ml-2 font-bold  mr-12">ATK</span>
                    <div class="bg-blue-500 text-xs leading-none py-1 text-center text-white" v-bind:style="'width:'+attack /2 +'%; backgroundColor:'+bgc">{{attack}}</div>
                </div>

                <div class="w-full inline-flex  mb-2">
                    <span class="ml-2 font-bold mr-12">DEF</span>
                    <div class="bg-blue-500 text-xs leading-none py-1 text-center text-white" v-bind:style="'width:'+defense /2 +'%; backgroundColor:'+bgc">{{defense}}</div>
                </div>

                <div class="w-full inline-flex  mb-2">
                    <span class="ml-2 font-bold  mr-5">SPE ATT</span>
                    <div class="bg-blue-500 text-xs leading-none py-1 text-center text-white" v-bind:style="'width:'+sp_attack /2 +'%; backgroundColor:'+bgc">{{sp_attack}}</div>
                </div>

                <div class="w-full inline-flex  mb-2">
                    <span class="ml-2 font-bold mr-5">SPE DEF</span>
                    <div class="bg-blue-500 text-xs leading-none py-1 text-center text-white" v-bind:style="'width:'+sp_defense / 2 +'%; backgroundColor:'+bgc">{{sp_defense}}</div>
                </div>

                <div class="w-full inline-flex  mb-2">
                    <span class="ml-2 mb-2 font-bold  mr-8">SPEED</span>
                    <div class="bg-blue-500 text-xs leading-none py-1 text-center text-white" v-bind:style="'width:'+speed /2 +'%; backgroundColor:'+bgc">{{speed}}</div>
                </div>
            </div>

            <!-- Weakneasses -->
            <div v-else-if="showmenu === 1" class="w-full flex mt-4 pb-4 flex-wrap">
                     <table class="table-auto flex justify-center">
                        <thead>
                            <tr>
                            <th class="px-4 py-2"></th>
                            <th class="px-4 py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="backgroundColor:#9DC130;" class="px-4 py-2 rounded text-center ">BUG</td>
                                <td class="">{{bug}}</td>
                            </tr>
                            <tr>
                                <td style="backgroundColor:#5596A4;" class="px-4 py-2 rounded text-center">DRAGON</td>
                                <td class="px-4 py-2 ">{{dragon}}</td>
                            </tr>
                            <tr>
                                <td style="backgroundColor:#EDD53F;" class="rounded px-4 py-2 text-center">ELECTRIC</td>
                                <td class="px-4 py-2">{{electric}}</td>
                            </tr>
                            <tr>
                                <td style="backgroundColor:#F87C7A;" class="rounded px-4 py-2 text-center">FAIRY</td>
                                <td class="px-4 py-2 ">{{fairy}}</td>
                            </tr>
                            <tr>
                                <td style="backgroundColor:#D94256;" class="rounded px-4 py-2 text-center">FIGHT</td>
                                <td class="px-4 py-2">{{fight}}</td>
                            </tr>

                            <tr>
                                <td style="backgroundColor:#F8A54F;" class="rounded px-4 py-2 text-center">FIRE</td>
                                <td class="px-4 py-2">{{fire}}</td>
                            </tr>

                            <tr>
                                <td style="backgroundColor:#e6f2ff;" class="rounded px-4 py-2 text-center">FLYING</td>
                                <td class="px-4 py-2">{{flying}}</td>
                            </tr>

                            <tr>
                                <td  style="backgroundColor:#6970C5;" class="rounded px-4 py-2 text-center">GHOST</td>
                                <td class="px-4 py-2">{{ghosts}}</td>
                            </tr>

                            <tr>
                                <td style="backgroundColor:#5DBE62;" class="rounded px-4 py-2 text-center">GRASS</td>
                                <td class="px-4 py-2">{{grass}}</td>
                            </tr>

                        </tbody>
                    </table>
                    <table class="table-auto flex justify-center">
                        <thead>
                            <tr>
                            <th class="px-4 py-2"></th>
                            <th class="px-4 py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background:#CEC18C" class="rounded px-4 py-2 text-center">GROUND</td>
                                <td class="px-4 py-2">{{ground}}</td>
                            </tr>

                            <tr>
                                <td style="background:#7ED4C9" class="rounded  px-4 py-2 text-centerborder px-4 py-2">ICE</td>
                                <td class="px-4 py-2">{{ice}}</td>
                            </tr>

                            <tr>
                                <td style="background:#B563CE" class="rounded px-4 py-2 text-center">POISON</td>
                                <td class="px-4 py-2">{{poison}}</td>
                            </tr>

                            <tr>
                                <td style="background:#CCCCCC" class="rounded px-4 py-2 text-center">NORMAL</td>
                                <td class="px-4 py-2">{{normal}}</td>
                            </tr>

                            <tr>
                                <td style="background:#EF97E6" class="rounded px-4 py-2 text-center">PSYCHIC</td>
                                <td class="px-4 py-2">{{psychic}}</td>
                            </tr>

                            <tr>
                                <td style="background:#9A9DA1" class="rounded px-4 py-2 text-center">ROCK</td>
                                <td class="px-4 py-2">{{rock}}</td>
                            </tr>

                            <tr>
                                <td style="background:#9A9DA1"  class="rounded px-4 py-2 text-center">STEEL</td>
                                <td class="px-4 py-2">{{steel}}</td>
                            </tr>

                            <tr>
                                <td style="background:#0773C7"  class="px-4 py-2 rounded text-center">WATER</td>
                                <td class="px-4 py-2 ">{{water}}</td>
                            </tr>
                        </tbody>
                        </table>
                  <br>
                  <br>

            </div>

            <!--Evol -->
            <div v-else-if="showmenu === 2" class="w-full flex mt-4 pb-4 flex-wrapflex justify-center">

                <div class="inline-flex">
                    <div class="mr-16"v-if="evolbase !== ''">
                         <a id="linkpok" v-bind:href="'/pokemons/'+evolbase"><img width="100" height="100" class="header-picture" v-bind:src="'/img/pokemons/'+ evolbase+'.png'"/></a>
                        <span class="text-gray-700 text-opacity-50 text-center mt-8 w-1/4">Evolution base</span></h2>
                    </div>
                     <div class="ml-16" v-if="evolsup !== ''">
                           <a id="linkpok" v-bind:href="'/pokemons/'+evolsup"><img width="100" height="100" class="header-picture" v-bind:src="'/img/pokemons/'+ evolsup+'.png'"/></a>
                           <span class="text-gray-700 text-opacity-50 text-center mt-8 w-1/4">Evolution supérieur: {{lvlsup}}</span></h2>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return{
            showmenu: 0,
            bgc: "#fff",
            bgc2: "#fff"
                    }
            },
            mounted() {
                console.log('Component mounted.')

            },
            created(){
                 this.getColor()
            },

        props: ['idpok', 'descpok', 'nompok','type1','type2',
        'bug','dragon','electric','fairy','fight','fire','flying','ghost',
        'grass', 'ground','ice','normal','poison','psychic','rock','steel',
        'water','hp','attack','defense','sp_attack','sp_defense','speed','evolbase','evolsup','lvlsup'],
        methods:{
             getStat:function(){this.showmenu = 0},
             getWeak:function(){this.showmenu = 1},
             getEvol:function(){this.showmenu = 2},
             getColor:function(){
                 console.log("yo")
                 switch(this.type1){
                     case "grass":
                        this.bgc = "#5DBE62";
                     break;

                     case "fire":
                         this.bgc = "#F8A54F";
                     break;

                     case "water":
                        this.bgc = "#0773C7";
                     break;

                     case "bug":
                         this.bgc = "#9DC130";
                     break;

                     case "normal":
                        this.bgc = "#CCCCCC";
                     break;

                     case "poison":
                        this.bgc = "#B563CE";
                     break;

                     case "electric":
                        this.bgc = "#EDD53F";
                     break;

                     case "ground":
                         this.bgc = "#CEC18C";
                     break;


                    case "fairy":
                         this.bgc = "#F87C7A";
                    break;

                    case "figthing":
                        this.bgc = "#D94256";
                    break;

                    case "psychic":
                      this.bgc = "#EF97E6";
                    break;

                    case "rock":
                           this.bgc = "#9A9DA1";
                    break;

                    case "ghost":
                         this.bgc = "#6970C5";
                    break;

                    case "ice":
                       this.bgc = "#7ED4C9";
                    break;

                    case "dragon":
                      this.bgc = "#5596A4";
                    break;

                    default:
                       this.bgc = "#fff";

                 };

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
