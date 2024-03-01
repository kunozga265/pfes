<template>
    <jet-action-section>


        <template #content>
            <p class="paragraph">
                Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
            </p>

            <div class="mt-5">

                <div class="mt-4">
                    <jet-input type="text" class="" placeholder="Phone Number"
                               ref="phoneNumber"
                               v-model="form.phoneNumber"
                               @keyup.enter.native="deleteUser" />

                    <jet-input-error :message="form.errors.phoneNumber" class="mt-2" />
                </div>

                <jet-danger-button @click.native="confirmUserDeletion">
                    Delete Account
                </jet-danger-button>
            </div>

            <!-- Delete Account Confirmation Modal -->
            <jet-dialog-modal :show="confirmingUserDeletion" @close="closeModal">
                <template #title>
                    Delete Account
                </template>

                <template #content>
                    Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.

                    <div class="mt-4">
                        <jet-input type="text" class="mt-1 block w-3/4" placeholder="Phone Number"
                                    ref="phoneNumber"
                                    v-model="form.phoneNumber"
                                    @keyup.enter.native="deleteUser" />

                        <jet-input-error :message="form.errors.password" class="mt-2" />
                    </div>
                </template>

                <template #footer>
                    <jet-secondary-button @click.native="closeModal">
                        Nevermind
                    </jet-secondary-button>

                    <jet-danger-button class="ml-2" @click.native="deleteUser" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Delete Account
                    </jet-danger-button>
                </template>
            </jet-dialog-modal>
        </template>
    </jet-action-section>
</template>

<script>
    import JetActionSection from '@/Jetstream/ActionSection'
    import JetDialogModal from '@/Jetstream/DialogModal'
    import JetDangerButton from '@/Jetstream/DangerButton'
    import JetInput from '@/Jetstream/Input'
    import JetInputError from '@/Jetstream/InputError'
    import JetSecondaryButton from '@/Jetstream/SecondaryButton'

    export default {
        components: {
            JetActionSection,
            JetDangerButton,
            JetDialogModal,
            JetInput,
            JetInputError,
            JetSecondaryButton,
        },

        data() {
            return {
                confirmingUserDeletion: false,

                form: this.$inertia.form({
                    phoneNumber: '',
                })
            }
        },

        methods: {
            confirmUserDeletion() {
                this.confirmingUserDeletion = true;

                // setTimeout(() => this.$refs.phoneNumber.focus(), 250)
            },

            deleteUser() {
                this.form.delete(route('user.destroy'), {
                    preserveScroll: true,
                    onSuccess: () => this.closeModal(),
                    // onError: () => this.$refs.phoneNumber.focus(),
                    onFinish: () => this.form.reset(),
                })
            },

            closeModal() {
                this.confirmingUserDeletion = false

                this.form.reset()
            },
        },
    }
</script>
