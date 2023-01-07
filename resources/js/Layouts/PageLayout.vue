<template>
    <div class="bg-system min-h-screen w-full mb-160">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <nav class="flex justify-between p-6 items-center">
                <div class="flex items-center">
                    <div>
                        <img class="h-auto w-16 shadow-lg" src="images/assets/luanar_logo.png" alt="">
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
        <nav class=" fixed bottom-8 flex justify-center w-full">
            <div class="bg-white p-4 flex items-end shadow rounded-2xl">
                <div class="p-2">
                    <div><img class="mx-auto w-8" src="images/assets/carbCounting.svg" alt=""></div>
                    <div class="text-sm text-gray-400 text-center">Carb Counting</div>
                </div>
                <div class="p-2 mx-2 md:mx-4">
                    <div><img class="mx-auto w-10" src="images/assets/carbInfo.svg" alt=""></div>
                    <div class="text-sm text-gray-400 text-center">Carb Info</div>
                </div>
                <div class="p-2">
                    <div><img class="mx-auto w-10" src="images/assets/compare.svg" alt=""></div>
                    <div class="text-sm text-gray-400 text-center">Compare</div>
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
