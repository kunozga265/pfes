<template>
    <page-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profile
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div></div>

                <template v-if="$page.props.jetstream.hasAccountDeletionFeatures">
<!--                    <jet-section-border />-->

                    <delete-user-data-form class="mt-10 sm:mt-0" />
                </template>
            </div>
        </div>
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
        },
    }
</script>
