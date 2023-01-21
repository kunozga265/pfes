<template>
    <div>
        <div @click="showDialog=true" class="food h-full bg-white shadow rounded-3xl hover:shadow-lg transition duration-500 ease-in-out">
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
        <dialog-modal :show="showDialog" @close="showDialog=false">

            <template #title>
                <div class="mx-auto max-w-xl mt-6 text-3xl text-center font-bold">
                    {{food.item}}
                </div>
                <div class="text-xl text-center text-gray-600">
                    {{title(food)}}, {{food.net_weight}}
                </div>
                <div class="text-xl text-center text-gray-400">
                    {{food.more_info}}
                </div>

                <div class="flex justify-center">
                    <div class="h-80 w-80 mt-2 image-placeholder"
                         :style="{ backgroundImage:`url(${food.image})` }"></div>
                </div>
            </template>

            <template #content>
                <div class="text-2xl font-semibold">
                    Details
                </div>
                <div class="flex justify-between md:px-12 mt-4">
                    <div v-if="food.unpeeled_weight != null" class="group bg-white rounded-full p-2 max-w-24 border-variant">
                        <div class="mt-4 font-bold text-sm p-2 gray-400 text-center">
                            Unpeeled Weight
                        </div>
                        <div class="flex justify-center">
                            <div  class="flex justify-center items-center text-2xl font-bold h-20 w-20 mt-2 rounded-full bg-app-color-variant p-2">
                                <div>{{food.unpeeled_weight}}g</div>
                            </div>
                        </div>
                    </div>
                    <div class="group bg-white rounded-full p-2 max-w-24 border-variant">
                        <div class="font-bold text-lg p-2 gray-400 text-center">
                            Net Weight
                        </div>
                        <div class="flex justify-center">
                            <div  class="flex justify-center items-center text-2xl font-bold h-20 w-20 mt-2 rounded-full bg-app-color-variant p-2">
                                <div>{{food.net_weight}}g</div>
                            </div>
                        </div>
                    </div>
                    <div class="group bg-white rounded-full p-2 max-w-24 border-variant ">
                        <div class="font-bold text-lg p-2 gray-400 text-center">
                            Energy (kCal)
                        </div>
                        <div class="flex justify-center">
                            <div  class="flex justify-center items-center text-2xl font-bold h-20 w-20 mt-2 rounded-full bg-app-color-variant p-2">
                                <div>{{food.energy}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="group bg-white rounded-full p-2 max-w-24 border-variant">
                        <div class="font-bold text-lg p-2 gray-400 text-center">
                            Carbs
                        </div>
                        <div class="flex justify-center mt-7">
                            <div  class="flex justify-center items-center text-2xl font-bold h-20 w-20 mt-2 rounded-full bg-app-color-variant p-2">
                                <div>{{food.carbohydrate}}g</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between md:px-12 mt-2">
                    <div class="group bg-white rounded-full p-2 max-w-24 border-variant">
                        <div class="font-bold text-lg p-2 gray-400 text-center">
                            Fiber
                        </div>
                        <div class="flex justify-center">
                            <div  class="flex justify-center items-center text-2xl font-bold h-20 w-20 mt-2 rounded-full bg-app-color-variant p-2">
                                <div>{{food.fiber}}g</div>
                            </div>
                        </div>
                    </div>
                    <div class="group bg-white rounded-full p-2 max-w-24 border-variant">
                        <div class="font-bold text-lg p-2 gray-400 text-center">
                            Protein
                        </div>
                        <div class="flex justify-center">
                            <div  class="flex justify-center items-center text-2xl font-bold h-20 w-20 mt-2 rounded-full bg-app-color-variant p-2">
                                <div>{{food.protein}}g</div>
                            </div>
                        </div>
                    </div>
                    <div class="group bg-white rounded-full p-2 max-w-24 border-variant">
                        <div class="font-bold text-lg p-2 gray-400 text-center">
                            Fat
                        </div>
                        <div class="flex justify-center">
                            <div  class="flex justify-center items-center text-2xl font-bold h-20 w-20 mt-2 rounded-full bg-app-color-variant p-2">
                                <div>{{food.fat}}g</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-if="food.source" class="mt-4 text-center text-gray-400">
                    Sources: {{food.source}}
                </div>
            </template>

            <template #footer>
                <secondary-button @click.native="showDialog=false">
                    Close
                </secondary-button>
            </template>
        </dialog-modal>


    </div>



</template>

<script>
import DialogModal from "@/Jetstream/DialogModal";
import SecondaryButton from "@/Jetstream/SecondaryButton";
export default {
    name: "Food",
    props:['food'],
    data(){
        return{
            showDialog:false
        }
    },
    components:{
        DialogModal,
        SecondaryButton
    },
    computed:{

    },
    methods:{

    }
}
</script>

<style scoped>

</style>
