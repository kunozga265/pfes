<template>
    <page-layout>
        <div class="text-center">
            <div class="text-gray-400">Total Carbs</div>
            <div class="text-3xl sm:text-4xl">{{ totalCarbs }}g</div>
        </div>
        <div class="mt-4 grid grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white flex p-2 shadow rounded-xl">
                <div class="bg-gray-900 w-12 h-12"></div>
                <div class="ml-2">
                    <div class="text-gray-400 text-sm sm:text-base">Energy (kCal)</div>
                    <div class="sm:text-lg">{{ totalEnergy }}</div>
                </div>
            </div>
            <div class="bg-white flex p-2 shadow rounded-xl">
                <div class="bg-gray-900 w-12 h-12"></div>
                <div class="ml-2">
                    <div class="text-gray-400 text-sm sm:text-base">Fiber</div>
                    <div class="sm:text-lg">{{ totalFiber }}g</div>
                </div>
            </div>
            <div class="bg-white flex p-2 shadow rounded-xl">
                <div class="bg-gray-900 w-12 h-12"></div>
                <div class="ml-2">
                    <div class="text-gray-400 text-sm sm:text-base">Protein</div>
                    <div class="sm:text-lg">{{ totalProtein }}g</div>
                </div>
            </div>
            <div class="bg-white flex p-2 shadow rounded-xl">
                <div class="bg-gray-900 w-12 h-12"></div>
                <div class="ml-2">
                    <div class="text-gray-400 text-sm sm:text-base">Fat</div>
                    <div class="sm:text-lg">{{ totalFat }}g</div>
                </div>
            </div>
        </div>

        <div class="mt-8">

            <div class="text-lg sm:text-2xl">Foods</div>

            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div v-for="(food,index) in selectedFoods"
                     :key="index"
                     class="bg-white shadow rounded-xl px-2 py-4  sm:px-4 sm:py-6"
                >

                    <div class="grid grid-flow-row-dense grid-cols-3 gap-4">
                        <div class="row-span-2 flex justify-center items-center">
                            <div class="">
                                <img class="mx-auto w-full" :src="fileUrl(food.image)" alt="">
                            </div>

                        </div>
                        <div class="col-span-2">
                            <div class="relative">
                                <div @click="removeRecord(index)" class="absolute right-0 w-6 cursor-pointer">
                                    <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 78.6 78.6" style="enable-background:new 0 0 78.6 78.6;" xml:space="preserve">
                                        <circle class="st0" cx="39.3" cy="39.3" r="36.5"/>
                                        <g>
                                            <rect x="22.3" y="35.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -16.2786 39.3)" class="st1" width="33.9" height="6.9"/>
                                            <rect x="22.3" y="35.9" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 39.3 94.8786)" class="st1" width="33.9" height="6.9"/>
                                        </g>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-lg sm:text-xl mr-10">{{ food.item }}</div>
                                    <div class="text-gray-400 sm:text-lg">{{food.quantity}} * {{title(food)}}</div>
                                </div>

                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="mt-2 grid grid-flow-row-dense grid-cols-3 gap-2">
                                <div class="bg-white flex p-2  rounded">
                                    <div class="flex justify-center items-center">
                                        <div class="bg-gray-900 w-6 h-6"></div>
                                    </div>
                                    <div class="ml-2">
                                        <div class="text-gray-400 text-sm ">Carbs</div>
                                        <div class="text-sm">{{ food.carbohydrate }}g</div>
                                    </div>
                                </div>
                                <div class="bg-white flex p-2  rounded">
                                    <div class="flex justify-center items-center">
                                        <div class="bg-gray-900 w-6 h-6"></div>
                                    </div>
                                    <div class="ml-2">
                                        <div class="text-gray-400 text-sm ">Energy</div>
                                        <div class="text-sm">{{food.energy}} kCal</div>
                                    </div>
                                </div>
                                <div class="bg-white flex p-2  rounded">
                                    <div class="flex justify-center items-center">
                                        <div class="bg-gray-900 w-6 h-6"></div>
                                    </div>
                                    <div class="ml-2">
                                        <div class="text-gray-400 text-sm ">Fiber</div>
                                        <div class="text-sm">{{ food.fiber }}g</div>
                                    </div>
                                </div>
                                <div class="bg-white flex p-2  rounded">
                                    <div class="flex justify-center items-center">
                                        <div class="bg-gray-900 w-6 h-6"></div>
                                    </div>
                                    <div class="ml-2">
                                        <div class="text-gray-400 text-sm ">Protein</div>
                                        <div class="text-sm">{{food.protein}}g</div>
                                    </div>
                                </div>
                                <div class="bg-white flex p-2  rounded">
                                    <div class="flex justify-center items-center">
                                        <div class="bg-gray-900 w-6 h-6"></div>
                                    </div>
                                    <div class="ml-2">
                                        <div class="text-gray-400 text-sm ">Fat</div>
                                        <div class="text-sm">{{food.fat}}g</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div @click="selectFoodDialog=true" class="flex justify-end cursor-pointer">
            <div class="flex justify-center items-center fixed bottom-32 w-12 h-12 text-lg text-white font-bold rounded-full bg-app-color">
                <div>+</div>
            </div>
        </div>

        <dialog-modal :show="selectFoodDialog" @close="selectFoodDialog=false">

            <template #title>
                <div class="relative">
                    <i class="text-gray-400 text-3xl px-4 py-2 sm:py-4 mt-1 absolute mdi mdi-magnify"></i>
                    <input v-model="search" class="border-0 shadow rounded-2xl pl-16 py-4 sm:py-6 w-full focus:ring-0 focus:shadow-lg transition duration-500 ease-in-out" type="text" placeholder="Search food" autofocus>
                </div>
            </template>

            <template #content>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="food h-full bg-white shadow rounded-3xl hover:shadow-lg transition duration-500 ease-in-out"
                         v-for="(food,index) in filteredFoods"
                         :key="index"
                         @click="selectFoodItem(food)"

                    >
                        <div class="flex justify-end">
                            <div class="bg-app-color text-white p-2 rounded-tr-3xl rounded-bl-3xl">Carbs: {{ food.carbohydrate }}g</div>
                        </div>
                        <div class="flex justify-center">
                            <div class="h-32 w-32 mt-2 image-placeholder"
                                 :style="{ backgroundImage:`url(${food.image})` }"></div>
                        </div>
                        <div class="text-xl font-bold text-center mt-4">{{ food.item }}</div>
                        <div class="text-app-color text-center mb-2"> {{title(food)}}, {{ food.net_weight }}g</div>


                    </div>
                </div>

            </template>

            <template #footer>
                <secondary-button @click.native="selectFoodDialog=false">
                    Close
                </secondary-button>
            </template>
        </dialog-modal>

        <dialog-modal :show="foodDetailsDialog" @close="foodDetailsDialog=false">

            <template #title>
                <div v-if="selectedFood" class="mx-auto max-w-xl mt-6 text-3xl text-center font-bold">
                    {{selectedFood.item}}
                </div>
            </template>

            <template #content>
                <div v-if="selectedFood" class="grid grid-cols-2 gap-4">
                    <div class="bg-white flex p-2 shadow rounded-xl">
                        <div class="ml-2">
                            <div class="text-gray-400 text-sm sm:text-base">Quantity</div>
                            <input type="text" v-model="quantity" class="border-0 w-full focus:ring-0" autofocus>
                            <span v-show="error" class="text-red-600 text-sm">Enter Quantity</span>
                        </div>
                    </div>
                    <div class="bg-white flex p-2 shadow rounded-xl">
                        <div class="bg-gray-900 w-12 h-12"></div>
                        <div class="ml-2">
                            <div class="text-gray-400 text-sm sm:text-base">Unit</div>
                            <div class="sm:text-lg">{{title(selectedFood)}}</div>
                        </div>
                    </div>
                    <div class="bg-white flex p-2 shadow rounded-xl">
                        <div class="bg-gray-900 w-12 h-12"></div>
                        <div class="ml-2">
                            <div class="text-gray-400 text-sm sm:text-base">Carbs</div>
                            <div class="sm:text-lg">{{quantity===''?0:parseFloat(quantity)*selectedFood.carbohydrate}}g</div>
                        </div>
                    </div>
                    <div class="bg-white flex p-2 shadow rounded-xl">
                        <div class="bg-gray-900 w-12 h-12"></div>
                        <div class="ml-2">
                            <div class="text-gray-400 text-sm sm:text-base">Energy (kCal)</div>
                            <div class="sm:text-lg">{{quantity===''?0:parseFloat(quantity)*selectedFood.energy}}</div>
                        </div>
                    </div>
                    <div class="bg-white flex p-2 shadow rounded-xl">
                        <div class="bg-gray-900 w-12 h-12"></div>
                        <div class="ml-2">
                            <div class="text-gray-400 text-sm sm:text-base">Fiber</div>
                            <div class="sm:text-lg">{{quantity===''?0:parseFloat(quantity)*selectedFood.fiber}}g</div>
                        </div>
                    </div>
                    <div class="bg-white flex p-2 shadow rounded-xl">
                        <div class="bg-gray-900 w-12 h-12"></div>
                        <div class="ml-2">
                            <div class="text-gray-400 text-sm sm:text-base">Protein</div>
                            <div class="sm:text-lg">{{quantity===''?0:parseFloat(quantity)*selectedFood.protein}}g</div>
                        </div>
                    </div>
                    <div class="bg-white flex p-2 shadow rounded-xl">
                        <div class="bg-gray-900 w-12 h-12"></div>
                        <div class="ml-2">
                            <div class="text-gray-400 text-sm sm:text-base">Fat</div>
                            <div class="sm:text-lg">{{quantity===''?0:parseFloat(quantity)*selectedFood.fat}}g</div>
                        </div>
                    </div>
                </div>

            </template>

            <template #footer>
                <secondary-button @click.native="foodDetailsDialog=false">
                    Close
                </secondary-button>
                <primary-button @click.native="addFood" class="bg-app-color">
                    Add
                </primary-button>
            </template>
        </dialog-modal>

    </page-layout>

</template>

<script>
import PageLayout from "@/Layouts/PageLayout";
import DialogModal from "@/Jetstream/DialogModal";
import SecondaryButton from "@/Jetstream/SecondaryButton";
import PrimaryButton from "@/Jetstream/Button";

export default {
    name: "CarbCounting",
    props:['foods'],
    components:{
        PageLayout,
        DialogModal,
        SecondaryButton,
        PrimaryButton
    },
    data() {
        return {
            search: "",
            selectFoodDialog: false,
            foodDetailsDialog: false,
            selectedFood:null,
            selectedFoods:[],
            quantity:"",
            error:false
        }
    },
    computed: {
        filteredFoods(){
            let foods = this.foods.data

            if(this.search.length !==0){
                foods = (foods).filter((food) => {
                    return food.item.toLowerCase().includes(this.search.toLowerCase())
                })
            }
            return foods
        },
        totalCarbs(){
            let sum=0
            for (let x in this.selectedFoods)
                sum+=this.selectedFoods[x].carbohydrate
            return sum
        },
        totalEnergy(){
            let sum=0
            for (let x in this.selectedFoods)
                sum+=this.selectedFoods[x].energy
            return sum
        },
        totalFiber(){
            let sum=0
            for (let x in this.selectedFoods)
                sum+=this.selectedFoods[x].fiber
            return sum
        },
        totalProtein(){
            let sum=0
            for (let x in this.selectedFoods)
                sum+=this.selectedFoods[x].protein
            return sum
        },
        totalFat(){
            let sum=0
            for (let x in this.selectedFoods)
                sum+=this.selectedFoods[x].fat
            return sum
        },

    },
    watch:{
        foodDetailsDialog(){
            if (!this.foodDetailsDialog) {
                this.quantity=""
                this.selectedFood = null
                this.error=false
            }
        },
    },
    methods: {
        selectFoodItem(food){
            this.selectedFood=food
            this.selectFoodDialog=false
            this.foodDetailsDialog=true
        },
        addFood(){
            if (this.quantity==="" || this.quantity.length ===0 || this.quantity==0){
                this.error=true
            }else{
                let thirdFactor=0.33333333333333
                let servingSize

                if (Number.isInteger(this.selectedFood.serving_size/thirdFactor))
                    servingSize=this.quantity+this.selectedFood.serving_size
                else
                    servingSize=this.selectedFood.serving_size*this.quantity

                //add food to list
                this.selectedFoods.push({
                    'id': this.selectedFood.id,
                    'image': this.selectedFood.image,
                    'serving_unit': this.selectedFood.serving_unit,
                    'group': this.selectedFood.group,
                    'item': this.selectedFood.item,
                    'net_weight': this.selectedFood.net_weight,
                    'carbohydrate': this.selectedFood.carbohydrate*this.quantity,
                    'energy': this.selectedFood.energy*this.quantity,
                    'protein': this.selectedFood.protein*this.quantity,
                    'fiber': this.selectedFood.fiber*this.quantity,
                    'fat': this.selectedFood.fat*this.quantity,
                    'serving_size': this.selectedFood.serving_size,
                    'quantity':this.quantity
                })
                this.foodDetailsDialog=false
            }

        },
        removeRecord(index){
            this.selectedFoods.splice(index,1)
        },
    }

}
</script>

<style scoped>

</style>
