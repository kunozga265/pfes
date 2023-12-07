<template>
    <div class="bg-system min-h-screen w-full mb-160">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <nav class="flex justify-between p-6 items-center">
                <div class="flex items-center">
                    <div>
                        <img class="h-auto w-16 shadow-lg" :src="fileUrl('images/assets/luanar_logo.png')" alt="">
                    </div>
                    <div class="ml-4">
                        <div class="text-xl font-semibold">Carbs</div>
                        <div class="text-xl font-semibold text-app-color">Exchange</div>
                    </div>
                </div>
                <div class="bg-app-color p-4 shadow-lg">

                </div>

            </nav>

            <main class="mx-4">
                <slot></slot>
            </main>

            <!-- Modal Portal -->
            <portal-target name="modal" multiple>
            </portal-target>
        </div>
        <nav class=" fixed bottom-8 w-full">
            <div class="mx-auto max-w-xl bg-white py-2 px-4  flex items-end justify-between shadow rounded-2xl">
                <div class="p-2">
                    <inertia-link :href="route('carb-info')">
                        <div><img class="mx-auto w-10" :src="fileUrl('images/assets/carbInfo.svg')" alt=""></div>
                        <div class="text-sm text-gray-400 text-center">Carb Info</div>
                    </inertia-link>
                </div>
                <div class="p-2 mx-2 md:mx-4">
                    <inertia-link :href="route('carb-compare')">
                        <div><img class="mx-auto w-10" :src="fileUrl('images/assets/compare.svg')" alt=""></div>
                        <div class="text-sm text-gray-400 text-center">Compare</div>
                    </inertia-link>
                </div>
                <div class="p-2">
                    <inertia-link :href="route('carb-counting')">
                        <div><img class="mx-auto w-8" :src="fileUrl('images/assets/carbCounting.svg')" alt=""></div>
                        <div class="text-sm text-gray-400 text-center">Carb Counting</div>
                    </inertia-link>
                </div>
            </div>
        </nav>
    </div>

</template>

<script>
export default {
    name: "PageLayout"
}
</script>

<style scoped>

</style>
