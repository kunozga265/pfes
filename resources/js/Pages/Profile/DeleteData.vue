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

        <!--newsletter section start-->
        <section class="newsletter">
            <div class="newsletter__wrapper">
                <div class="container">
                    <div class="row align-items-lg-center">
                        <div class="col-lg-12">
                            <div class="newsletter__info">
                                <h2 class="section-heading color-black">Clear user data!</h2>
                                <p class="paragraph">
                                    Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
                                </p>
                                <form class="newsletter__info--field">
                                    <input v-model="form.phoneNumber" type="text" placeholder="Phone Number" class="input-field">
                                    <jet-input-error :message="form.errors.password" class="mt-2" />
                                    <button :disabled="form.processing" class="button"><span>Delete Account <i class="fad fa-long-arrow-right"></i></span></button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--newsletter section end-->
    </page-layout>
</template>

<script>
    import PageLayout from '@/Layouts/PageLayout'
    import DeleteUserDataForm from './DeleteUserDataForm'
    import JetSectionBorder from '@/Jetstream/SectionBorder'
    import LogoutOtherBrowserSessionsForm from './LogoutOtherBrowserSessionsForm'
    import TwoFactorAuthenticationForm from './TwoFactorAuthenticationForm'
    import UpdatePasswordForm from './UpdatePasswordForm'
    import UpdateProfileInformationForm from './UpdateProfileInformationForm'
    import JetInputError from "@/Jetstream/InputError";

    export default {
        props: ['sessions'],

        components: {
            PageLayout,
            DeleteUserDataForm,
            JetSectionBorder,
            LogoutOtherBrowserSessionsForm,
            TwoFactorAuthenticationForm,
            UpdatePasswordForm,
            UpdateProfileInformationForm,
            JetInputError,
        },

        data() {
            return {

                form: this.$inertia.form({
                    phoneNumber: '',
                })
            }
        },

        deleteUser() {
            this.form.delete(route('user.destroy'), {
                preserveScroll: true,
                onFinish: () => this.form.reset(),
            })
        },
    }
</script>
