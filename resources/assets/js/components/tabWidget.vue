<template>
    <section id="tab-widget">

        <b-tabs type="is-boxed" v-model="activeTab">
            <b-tab-item label="Overview">
                Lorem ipsum dolor sit amet.
            </b-tab-item>

            <b-tab-item label="Course outline">
                Lorem <br>
                ipsum <br>
                dolor <br>
                sit <br>
                amet.
            </b-tab-item>

            <b-tab-item label="Requirement">
                Nunc nec velit nec libero vestibulum eleifend.
                Curabitur pulvinar congue luctus.
                Nullam hendrerit iaculis augue vitae ornare.
                Maecenas vehicula pulvinar tellus, id sodales felis lobortis eget.
            </b-tab-item>
        </b-tabs>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                activeTab: 0
            }
        }
    }
</script>
