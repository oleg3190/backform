<template>
    <form id="feedback-form" class="p-4" action="/form" method="post">
        <label class="form-label" for="name">Name:</label>
        <input
            class="form-control"
            type="text"
            id="name"
            v-model="name"
            name="name"
            required
        />

        <label class="form-label" for="phone">Phone Number:</label>
        <input
            class="form-control"
            type="tel"
            id="phone"
            v-model="phone"
            name="phone"
            required
        />
        <label class="form-label" for="phone">Message:</label>
        <textarea
            class="form-control"
            v-model="message"
            name="message"
            required
        />
        <input type="hidden" name="_token" :value="csrf" />

        <button :disabled="check" class="btn btn-primary mt-2" type="submit">
            Submit
        </button>
        <slot></slot>
    </form>
</template>

<script>
export default {
    data() {
        return {
            name: "",
            phone: "",
            message: "",
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        };
    },
    computed: {
        check() {
            if (!this.name) {
                return true;
            }

            if (!this.phone) {
                return true;
            }

            if (!this.message) {
                return true;
            }
            return false;
        },
    },
};
</script>
