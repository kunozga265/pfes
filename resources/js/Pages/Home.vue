<template>
    <page-layout>
        <!--header section start-->
        <header class="header header-1">
            <div class="container">
                <div class="header__wrapper flex items-center">
                    <div class="header__logo">

                        <a href="index-2.html">
                            <div class="flex items-center">
                                <div>
                                    <img class="h-auto w-16 shadow-lg" :src="fileUrl('images/assets/luanar_logo.png')" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-4xl font-semibold text-black">Carbs</div>
                                    <div class="text-4xl font-semibold text-app-color">Exchange</div>
                                </div>
                            </div>

<!--                            <img src="assets/images/footer-logo.png" alt="logo">-->
                        </a>
                    </div>
                    <div class="header__nav">
                        <ul class="header__nav-primary">
                           
                            <li><a href="#home">Home</a></li>
                            <li><a href="#video">Video</a></li>
                            <li><a href="#feature">Features</a></li>
                            <li><a href="#preview">Preview</a></li>
                        </ul>
                        <span><i class="fas fa-times"></i></span>
                    </div>
                    <div class="header__bars">
                        <div class="header__bars-bar header__bars-bar-1"></div>
                        <div class="header__bars-bar header__bars-bar-2"></div>
                        <div class="header__bars-bar header__bars-bar-3"></div>
                    </div>
                </div>
            </div>
        </header>
        <!--header section end-->

        <!--hero section start-->
        <section class="hero" id="home">
            <div class="hero__wrapper">
                <div class="container">
                    <div class="row align-items-lg-center">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <h1 class="main-heading color-black">Why Count Carbohydrates?</h1>
                            <p class="paragraph">Learn the importance of counting carbohydrates in managing diabetes and maintaining blood glucose levels. Explore how healthy eating from various food groups plays a crucial role in diabetes self-care.</p>
                            <p class="paragraph">
                                Discover the meal planning method of carbohydrate counting and how it helps gauge the amount of carbohydrates in each meal or snack. 
                            </p>
                            <div class="download-buttons">
                                <a href="https://play.google.com/store/apps/details?id=com.luanar.carb_exchange&hl=en&gl=US" class="google-play">
                                    <i class="fab fa-google-play"></i>
                                    <div class="button-content">
                                        <h6>GET IT ON <span>Google Play</span></h6>
                                    </div>
                                </a>
                                <a href="#" class="apple-store">
                                    <i class="fab fa-apple"></i>
                                    <div class="button-content">
                                        <h6>GET IT ON <span>Apple Store</span></h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="questions-img hero-img">
                                <img src="assets/images/phone-01.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--feature section start-->
        <!-- <section class="feature" id="intro">
            <div class="container">
                <h2 class="section-heading color-black">Get surprised by amazing features.</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature__box feature__box--1">
                            <div class="icon icon-1">
                                <i class="fad fa-user-astronaut"></i>
                            </div>
                            <div class="feature__box__wrapper">
                                <div class="feature__box--content feature__box--content-1">
                                    <h3>Join in Easy Steps</h3>
                                    <p class="paragraph dark">Suisque metus tortor ultricies ac ligula neced eleifend sodales felise morbi
                                        nec tempor isvelultricies ligula.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature__box feature__box--2">
                            <div class="icon icon-2">
                                <i class="fad fa-lightbulb-on"></i>
                            </div>
                            <div class="feature__box__wrapper">
                                <div class="feature__box--content feature__box--content-2">
                                    <h3>Track Your Progress</h3>
                                    <p class="paragraph dark">Euisque metus tortor ultricies ac ligula neced eleifend sodales felise morbi
                                        nec tempor isvel ultricies ligula.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature__box feature__box--3">
                            <div class="icon icon-3">
                                <i class="fad fa-solar-system"></i>
                            </div>
                            <div class="feature__box__wrapper">
                                <div class="feature__box--content feature__box--content-3">
                                    <h3>Improve Your Growth</h3>
                                    <p class="paragraph dark">Auisque metus tortor ultricies ac ligula neced eleifend sodales felise morbi
                                        nec tempor isvel ultricies ligula.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature__box feature__box--4">
                            <div class="icon icon-4">
                                <i class="fad fa-rocket-launch"></i>
                            </div>
                            <div class="feature__box__wrapper">
                                <div class="feature__box--content feature__box--content-4">
                                    <h3>Become an Inspiration</h3>
                                    <p class="paragraph dark">Tuisque metus tortor ultricies ac ligula neced eleifend sodales felise morbi
                                        nec tempor isvel ultricies ligula.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--feature section end-->

        <!--video section start-->
        <div class="video" id="video">
            <div class="video__wrapper">
                <div class="container">
                    <div class="video__play">
                        <button type="button" data-toggle="modal" data-target="#videoModal">
                            <i class="fad fa-play"></i>
                        </button>
                        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-close">
                                        <button type="button" data-dismiss="modal" aria-label="Close">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="ytdefer yt-video" style="width: 100%; height: 100%;" data-src="L0SgnPNA5Yw"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="video__background">
                        <img src="assets/images/video-bg-1.png" alt="image" class="texture-1">
                        <img src="assets/images/video-img.png" alt="image" class="phone">
                        <img src="assets/images/video-bg-2.png" alt="image" class="texture-2">
                    </div>
                </div>
            </div>
        </div>
        <!--video section end-->

        <!--growth section start-->
        <section class="growth" id="feature">
            <div class="growth__wrapper">
                <div class="container">
                    <h2 class="section-heading color-black">Features designed to support your dietary needs and diabetes management</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="growth__box">
                                <div class="icon">
                                    <i class="fad fa-rocket-launch"></i>
                                </div>
                                <div class="content">
                                    <h3>Start Easily</h3>
                                    <p class="paragraph dark">Easily create an account and begin recording your data.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="growth__box">
                                <div class="icon">
                                    <i class="fad fa-solar-system"></i>
                                </div>
                                <div class="content">
                                    <h3>Foods from Malawi</h3>
                                    <p class="paragraph dark">Explore diverse foods from different food groups commonly consumed in Malawi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="growth__box">
                                <div class="icon">
                                    <i class="fad fa-backpack"></i>
                                </div>
                                <div class="content">
                                    <h3>Carb Info</h3>
                                    <p class="paragraph dark">View carbohydrate content per serving for different foods.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="growth__box">
                                <div class="icon">
                                    <i class="fad fa-backpack"></i>
                                </div>
                                <div class="content">
                                    <h3>Compare Tab</h3>
                                    <p class="paragraph dark">Compare nutrient content of different foods per serving.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="growth__box">
                                <div class="icon">
                                    <i class="fad fa-backpack"></i>
                                </div>
                                <div class="content">
                                    <h3>Carb Count Tab</h3>
                                    <p class="paragraph dark">Know the carbohydrate count per serving and other essential nutrients.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="growth__box">
                                <div class="icon">
                                    <i class="fad fa-backpack"></i>
                                </div>
                                <div class="content">
                                    <h3>Meal Plan Tab</h3>
                                    <p class="paragraph dark">Plan your meals and track if you are meeting daily nutritional requirements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="button__wrapper">
                            <a href="#" class="button">
                                <span>GET STARTED <i class="fad fa-long-arrow-right"></i></span>
                            </a>
                            <a href="#" class="button">
                                <span>LEARN MORE <i class="fad fa-long-arrow-right"></i></span>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!--growth section end-->

        <!--step section start-->
        <section class="step" id="preview">
            <div class="step__wrapper">
                <div class="container">
                    <h2 class="section-heading color-black">Improve your health in just a few clicks.</h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="step__box">
                                <div class="image">
                                    <img src="assets/images/phone-01.png" alt="image">
                                </div>
                                <div class="content">
                                    <h3>EASY TO<span>Register.</span></h3>
                                    <!-- <p class="paragraph dark">Join the app in 3 easy steps and get
                                        started with your progresso daily.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="step__box">
                                <div class="image">
                                    <img src="assets/images/phone-02.png" alt="image">
                                </div>
                                <div class="content">
                                    <h3>SIMPLE TO<span>Navigate.</span></h3>
                                    <!-- <p class="paragraph dark">Once you’re signed up you can create
                                        as many polls you want to watch.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="step__box">
                                <div class="image">
                                    <img src="assets/images/phone-03.png" alt="image">
                                </div>
                                <div class="content">
                                    <h3>EXCITING TO<span>Record.</span></h3>
                                    <!-- <p class="paragraph dark">Share your growth results with your
                                        friends and inspre others.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="button__wrapper">
                            <a href="#" class="button">
                                <span>GET STARTED <i class="fad fa-long-arrow-right"></i></span>
                            </a>
                            <a href="#" class="button">
                                <span>LEARN MORE <i class="fad fa-long-arrow-right"></i></span>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!--step section end-->

        

    </page-layout>

</template>

<script>
import PageLayout from "@/Layouts/PageLayout";
import Food from "@/Components/Food";
import DialogModal from "@/Jetstream/DialogModal";

export default {
    name: "CarbInfo",
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
                    return food.group_id == this.selectedGroup
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
