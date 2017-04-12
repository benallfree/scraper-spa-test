<template>
    <div class="container" id="success_container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Watch your inbox</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>Alerts are on the way to {{ user_email }}</p>
                <p>If you need to change anything, just sign up again.</p>
            </div>
        </div>
    </div>
</template>

<script>
    import router from '../routes';

    export default {
        data() {
            return {
                user_email: this.$parent.email
            }
        }
    }
</script>
