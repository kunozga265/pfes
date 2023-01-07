<template>
    <page-layout>
        <div class="relative">
            <i class="text-gray-400 text-3xl p-4 mt-1 absolute mdi mdi-magnify"></i>
            <input v-model="search" class="border-0 shadow rounded-2xl pl-16 py-6 w-full focus:ring-0 focus:shadow-lg transition duration-500 ease-in-out" type="text" placeholder="Search food">
        </div>
        <div class="my-4 p-2 flex overflow-x-scroll gap-4">
            <div
                class="group bg-white rounded-full shadow  p-2 max-w-24 hover:shadow-lg transition duration-500 ease-in-out"
                @click="selectedGroup=0"
                :class="{'bg-app-color text-white':selectedGroup===0}"
            >
                <div class="flex justify-center">
                    <div  class="h-20 w-20 mt-2 rounded-full bg-gray-200 image-placeholder" style="background-image:url('images/groups/all.png')"></div>
                </div>
                <div class="text-xs gray-400 p-2 text-center">All</div>
            </div>
            <div class="group bg-white rounded-full shadow p-2 max-w-24 hover:shadow-lg transition duration-500 ease-in-out"
                 v-for="group in groups"
                 :key="group.id"
                 @click="selectedGroup=group.id"
                 :class="{'bg-app-color text-white':selectedGroup===group.id}"
            >
                <div class="flex justify-center">
                    <div class="h-20 w-20 mt-2 rounded-full image-placeholder"
                         :style="{ backgroundImage:`url(${group.image})` }"
                    ></div>
                </div>
                <div class="text-xs gray-400 p-2 text-center">{{ group.name }}</div>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">

            <food
                v-for="(food,index) in filteredFoods"
                :key="index"
                :food="food"
            />

        </div>

    </page-layout>

</template>

<script>
import PageLayout from "@/Layouts/PageLayout";
import Food from "@/Components/Food";
import DialogModal from "@/Jetstream/DialogModal";

export default {
    name: "Home",
    props:['groups','foods'],
    components:{
        PageLayout,
        Food
    },
    data(){
        return{
            selectedGroup:0,
            search:""
        }
    },
    computed:{
        filteredFoods(){
            let foods = this.foods

            if(this.selectedGroup!==0){
                foods = (foods).filter((food) => {
                    return food.group_id === this.selectedGroup
                })
            }

            if(this.search.length !==0){
                foods = (foods).filter((food) => {
                    return food.item.toLowerCase().includes(this.search.toLowerCase())
                })
            }

            return foods

        }
    },
    methods:{

    }
}
</script>

<style scoped>

</style>
