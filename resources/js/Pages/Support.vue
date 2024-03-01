<template>
    <page-layout>
        <template #navlinks>
            <div class="header__nav">
                <ul class="header__nav-primary">
                    <li><a :href="route('support')">Support</a></li>
                </ul>
                <span><i class="fas fa-times"></i></span>
            </div>

        </template>


        <!--growth section start-->
        <section class="growth mt-200" id="feature">
            <div class="growth__wrapper">
                <div class="container">
                    <h2 class="section-heading color-black mb-0">Get in touch with us!</h2>
                    <p class="paragraph mb-20 text-center">Share with us your experiences with the app and reach out if you have any questions</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="growth__box">
                                <div class="icon">
                                    <i class="fad fa-mail-bulk"></i>
                                </div>
                                <div class="content">
                                    <h3>Email Address</h3>
                                    <p class="paragraph dark">gmphwanthe@luanar.ac.mw</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="growth__box">
                                <div class="icon">
                                    <i class="fad fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h3>Phone Number</h3>
                                    <p class="paragraph dark">+265 992 29 17 05</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--growth section end-->



<!--        &lt;!&ndash;questions section start&ndash;&gt;-->
<!--        <section class="questions" id="faq">-->
<!--            <div class="questions__wrapper">-->
<!--                <div class="container">-->
<!--                    <h2 class="section-heading color-black">Some frequently asked questions.</h2>-->
<!--                    <div class="row align-items-lg-center">-->
<!--                        <div class="col-lg-12">-->
<!--                            <div id="accordion">-->
<!--                                <div class="card" id="card-1">-->
<!--                                    <div class="card-header" id="heading-1">-->
<!--                                        <h5 class="mb-0">-->
<!--                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true"-->
<!--                                                    aria-controls="collapse-1">-->
<!--                                                How does algorithms work?-->
<!--                                            </button>-->
<!--                                        </h5>-->
<!--                                    </div>-->

<!--                                    <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">-->
<!--                                        <div class="card-body">-->
<!--                                            <p class="paragraph">With increasing calls for government accountability and cost savings, agencies-->
<!--                                                are contending with a mountain-->
<!--                                                of rule and policy changes affecting everything from pensions and benefits, to client eligibility-->
<!--                                                and oversight.</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="card" id="card-2">-->
<!--                                    <div class="card-header" id="heading-2">-->
<!--                                        <h5 class="mb-0">-->
<!--                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-2"-->
<!--                                                    aria-expanded="false" aria-controls="collapse-2">-->
<!--                                                What is a business rules engine?-->
<!--                                            </button>-->
<!--                                        </h5>-->
<!--                                    </div>-->
<!--                                    <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">-->
<!--                                        <div class="card-body">-->
<!--                                            <p class="paragraph">With increasing calls for government accountability and cost savings, agencies-->
<!--                                                are contending with a mountain-->
<!--                                                of rule and policy changes affecting everything from pensions and benefits, to client eligibility-->
<!--                                                and oversight.</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="card" id="card-3">-->
<!--                                    <div class="card-header" id="heading-3">-->
<!--                                        <h5 class="mb-0">-->
<!--                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-3"-->
<!--                                                    aria-expanded="false" aria-controls="collapse-3">-->
<!--                                                How are datadirect drivers different?-->
<!--                                            </button>-->
<!--                                        </h5>-->
<!--                                    </div>-->
<!--                                    <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">-->
<!--                                        <div class="card-body">-->
<!--                                            <p class="paragraph">With increasing calls for government accountability and cost savings, agencies-->
<!--                                                are contending with a mountain-->
<!--                                                of rule and policy changes affecting everything from pensions and benefits, to client eligibility-->
<!--                                                and oversight.</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="card" id="card-4">-->
<!--                                    <div class="card-header" id="heading-4">-->
<!--                                        <h5 class="mb-0">-->
<!--                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-4"-->
<!--                                                    aria-expanded="false" aria-controls="collapse-4">-->
<!--                                                How do determine agencies compliance?-->
<!--                                            </button>-->
<!--                                        </h5>-->
<!--                                    </div>-->
<!--                                    <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion">-->
<!--                                        <div class="card-body">-->
<!--                                            <p class="paragraph">With increasing calls for government accountability and cost savings, agencies-->
<!--                                                are contending with a mountain-->
<!--                                                of rule and policy changes affecting everything from pensions and benefits, to client eligibility-->
<!--                                                and oversight.</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="card" id="card-5">-->
<!--                                    <div class="card-header" id="heading-5">-->
<!--                                        <h5 class="mb-0 ">-->
<!--                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-5"-->
<!--                                                    aria-expanded="false" aria-controls="collapse-5">-->
<!--                                                How are datadirect drivers different?-->
<!--                                            </button>-->
<!--                                        </h5>-->
<!--                                    </div>-->
<!--                                    <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion">-->
<!--                                        <div class="card-body">-->
<!--                                            <p class="paragraph">With increasing calls for government accountability and cost savings, agencies-->
<!--                                                are contending with a mountain-->
<!--                                                of rule and policy changes affecting everything from pensions and benefits, to client eligibility-->
<!--                                                and oversight.</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="card" id="card-6">-->
<!--                                    <div class="card-header" id="heading-6">-->
<!--                                        <h5 class="mb-0 ">-->
<!--                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-6"-->
<!--                                                    aria-expanded="false" aria-controls="collapse-6">-->
<!--                                                What is a business rules engine?-->
<!--                                            </button>-->
<!--                                        </h5>-->
<!--                                    </div>-->
<!--                                    <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordion">-->
<!--                                        <div class="card-body">-->
<!--                                            <p class="paragraph">With increasing calls for government accountability and cost savings, agencies-->
<!--                                                are contending with a mountain-->
<!--                                                of rule and policy changes affecting everything from pensions and benefits, to client eligibility-->
<!--                                                and oversight.</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="card" id="card-7">-->
<!--                                    <div class="card-header" id="heading-7">-->
<!--                                        <h5 class="mb-0 ">-->
<!--                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-7"-->
<!--                                                    aria-expanded="false" aria-controls="collapse-7">-->
<!--                                                What are the types of datadirect drivers?-->
<!--                                            </button>-->
<!--                                        </h5>-->
<!--                                    </div>-->
<!--                                    <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordion">-->
<!--                                        <div class="card-body">-->
<!--                                            <p class="paragraph">With increasing calls for government accountability and cost savings, agencies-->
<!--                                                are contending with a mountain-->
<!--                                                of rule and policy changes affecting everything from pensions and benefits, to client eligibility-->
<!--                                                and oversight.</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--&lt;!&ndash;                        <div class="col-lg-6 order-1 order-lg-2">&ndash;&gt;-->
<!--&lt;!&ndash;                            <div class="questions-img">&ndash;&gt;-->
<!--&lt;!&ndash;                                <img src="assets/images/phone-01.png" alt="image">&ndash;&gt;-->
<!--&lt;!&ndash;                            </div>&ndash;&gt;-->
<!--&lt;!&ndash;                        </div>&ndash;&gt;-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        &lt;!&ndash;questions section end&ndash;&gt;-->
    </page-layout>
</template>

<script>
    import PageLayout from '@/Layouts/PageLayout'


    export default {


        components: {
            PageLayout,

        },
        data() {
            return {

                form: this.$inertia.form({
                    phoneNumber: '',
                })
            }
        },

    }
</script>
