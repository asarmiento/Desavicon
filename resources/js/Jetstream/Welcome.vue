<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div>
                <jet-application-logo class="block h-12 w-auto" />
            </div>

            <div class="mt-8 text-2xl">dfsfd
                <form @submit.prevent="submit">
                    <label for="first_name">First name:</label>
                    <input id="first_name" v-model="form.first_name" />
                    <label for="last_name">Last name:</label>
                    <input id="last_name" v-model="form.last_name" />
                    <label for="email">Email:</label>
                    <input id="email" v-model="form.email" />
                    <button type="submit">Submit</button>
                </form>
            </div>


        </div>


    </div>
</template>

<script>
    import JetApplicationLogo from './../Jetstream/ApplicationLogo'

    export default {
        components: {
            JetApplicationLogo,
        },
        data() {
            return {
                form: {
                    first_name: null,
                    last_name: null,
                    email: null,
                },
            }
            }, methods: {
            submit() {
                this.$inertia.post('/users', this.form)
            },
        },
    }
</script>
