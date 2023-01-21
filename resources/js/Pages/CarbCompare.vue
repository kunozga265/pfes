<template>
    <page-layout>

        <table class="table_compare table-fixed w-full text-center">
            <tr>
                <th class="bg-app-color text-white p-4 md:p-12 text-lg">Food</th>
                <th @click="selectFood(1)"
                    class="cursor-pointer bg-white"
                >
                     <div v-if="selectedFood1.item">
                         <img class="mx-auto w-24" :src="fileUrl(selectedFood1.image)" alt="">
                         <div class="text-center text-lg">
                             {{selectedFood1.item}}
                         </div>
                     </div>
                    <div v-else>
                        Select Food
                    </div>
                </th>
                <th @click="selectFood(2)"
                    class="cursor-pointer bg-white"
                >
                    <div v-if="selectedFood2.item">
                        <img class="mx-auto w-24" :src="fileUrl(selectedFood2.image)" alt="">
                        <div class="text-center text-lg">
                            {{selectedFood2.item}}
                        </div>
                    </div>
                    <div v-else>
                        Select Food
                    </div>
                </th>
            </tr>
            <tr class="p-6">
                <td class="text-gray-600 bg-gray-200">Group</td>
                <td class="bg-gray-100">
                    <span v-if="selectedFood1.item">
                        {{selectedFood1.group.name}}
                    </span>
                </td>
                <td class="bg-gray-100">
                    <span v-if="selectedFood2.item">
                        {{selectedFood2.group.name}}
                    </span>
                </td>
            </tr>
            <tr>
                <td class="text-gray-600 bg-gray-100">Serving Size</td>
                 <td class="bg-gray-50">
                    <span v-if="selectedFood1.item">
                        {{decimalToFraction(selectedFood1.serving_size).display}}
                    </span>
                </td>
                 <td class="bg-gray-50">
                    <span v-if="selectedFood2.item">
                        {{decimalToFraction(selectedFood2.serving_size).display}}
                    </span>
                </td>
            </tr>
            <tr>
                <td class="text-gray-600 bg-gray-200">Serving Unit</td>
                <td class="bg-gray-100">
                    <span v-if="selectedFood1.item">
                        {{selectedFood1.serving_unit}}
                    </span>
                </td>
                <td class="bg-gray-100">
                    <span v-if="selectedFood2.item">
                        {{selectedFood2.serving_unit}}
                    </span>
                </td>
            </tr>
            <tr>
                <td class="text-gray-600 bg-gray-100">Net weight (g)</td>
                <td class="bg-gray-50">
                    <span v-if="selectedFood1.item"
                          :class="{'text-app-color': selectedFood1.net_weight > selectedFood2.net_weight}"
                    >
                        {{selectedFood1.net_weight}}
                    </span>
                </td>
                <td class="bg-gray-50">
                    <span v-if="selectedFood2.item"
                          :class="{'text-app-color': selectedFood2.net_weight > selectedFood1.net_weight}"
                    >
                        {{selectedFood2.net_weight}}
                    </span>
                </td>
            </tr>
            <tr>
                <td class="text-gray-600 bg-gray-200">Energy (kCal)</td>
                <td class="bg-gray-100">
                    <span v-if="selectedFood1.item"
                          :class="{'text-app-color': selectedFood1.energy > selectedFood2.energy}"
                    >
                        {{selectedFood1.energy}}
                    </span>
                </td>
                <td class="bg-gray-100">
                    <span v-if="selectedFood2.item"
                          :class="{'text-app-color': selectedFood2.energy > selectedFood1.energy}"
                    >
                        {{selectedFood2.energy}}
                    </span>
                </td>
            </tr>
            <tr>
                <td class="text-gray-600 bg-gray-100">Carbs (g)</td>
                <td class="bg-gray-50">
                    <span v-if="selectedFood1.item"
                          :class="{'text-app-color': selectedFood1.carbohydrate > selectedFood2.carbohydrate}"
                    >
                        {{selectedFood1.carbohydrate}}
                    </span>
                </td>
                <td class="bg-gray-50">
                    <span v-if="selectedFood2.item"
                          :class="{'text-app-color': selectedFood2.carbohydrate > selectedFood1.carbohydrate}"
                    >
                        {{selectedFood2.carbohydrate}}
                    </span>
                </td>
            </tr>
            <tr>
                <td class="text-gray-600 bg-gray-200">Fiber (g)</td>
                <td class="bg-gray-100">
                    <span v-if="selectedFood1.item"
                          :class="{'text-app-color': selectedFood1.fiber > selectedFood2.fiber}"
                    >
                        {{selectedFood1.fiber}}
                    </span>
                </td>
                <td class="bg-gray-100">
                    <span v-if="selectedFood2.item"
                          :class="{'text-app-color': selectedFood2.fiber > selectedFood1.fiber}"
                    >
                        {{selectedFood2.fiber}}
                    </span>
                </td>
            </tr>
            <tr>
                <td class="text-gray-600 bg-gray-100">Protein(g)</td>
                <td class="bg-gray-50">
                    <span v-if="selectedFood1.item"
                          :class="{'text-app-color': selectedFood1.protein > selectedFood2.protein}"
                    >
                        {{selectedFood1.protein}}
                    </span>
                </td>
                <td class="bg-gray-50">
                    <span v-if="selectedFood2.item"
                          :class="{'text-app-color': selectedFood2.protein > selectedFood1.protein}"
                    >
                        {{selectedFood2.protein}}
                    </span>
                </td>
            </tr>
            <tr>
                <td class="text-gray-600 bg-gray-200">Fat (g)</td>
                <td class="bg-gray-100">
                    <span v-if="selectedFood1.item"
                          :class="{'text-app-color': selectedFood1.fat > selectedFood2.fat}"
                    >
                        {{selectedFood1.fat}}
                    </span>
                </td>
                <td class="bg-gray-100">
                    <span v-if="selectedFood2.item"
                          :class="{'text-app-color': selectedFood2.fat > selectedFood1.fat}"
                    >
                        {{selectedFood2.fat}}
                    </span>
                </td>
            </tr>
        </table>

        <dialog-modal :show="selectFoodDialog" @close="selectFoodDialog=false">

            <template #title>
                <div class="relative">
                    <i class="text-gray-400 text-3xl px-4 py-2 sm:py-4 mt-1 absolute mdi mdi-magnify"></i>
                    <input v-model="search" class="border-0 shadow rounded-2xl pl-16 py-4 sm:py-6 w-full focus:ring-0 focus:shadow-lg transition duration-500 ease-in-out" type="text" placeholder="Search food">
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

    </page-layout>

</template>

<script>
import PageLayout from "@/Layouts/PageLayout";
import DialogModal from "@/Jetstream/DialogModal";
import SecondaryButton from "@/Jetstream/SecondaryButton";

export default {
    name: "CarbCompare",
    props:['foods'],
    components:{
        PageLayout,
        DialogModal,
        SecondaryButton

    },
    data() {
        return {
            search:"",
            selectedSection:0,
            selectFoodDialog:false,
            selectedFood1: {
                'serving_unit':0,
                'net_weight':0,
                'energy':0,
                'carbohydrate':0,
                'fiber':0,
                'protein':0,
                'fat':0,
            },
            selectedFood2:{
                'serving_unit':0,
                'net_weight':0,
                'energy':0,
                'carbohydrate':0,
                'fiber':0,
                'protein':0,
                'fat':0,
            },
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
        }
    },
    methods: {
        selectFood(section){
            this.selectedSection=section
            this.selectFoodDialog=true
        },
        selectFoodItem(food){
            if(this.selectedSection===1){
                this.selectedFood1=food
            }else
                this.selectedFood2=food

            this.selectFoodDialog=false
        }

    }

}
</script>

<style scoped>

</style>
