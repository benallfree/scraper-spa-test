<template>
    <div class="container" id="landing_container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Loan Alert</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>Get loan alerts in your inbox!</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <input class="form-control" id="email" type="text" placeholder="Enter your email" v-model="email">
                <button class="btn btn-primary" @click="gotoDetails">Alert Me</button>
            </div>
        </div>
    </div>
</template>

<script>
    import router from '../routes';

    export default {
        data() {
            return {
                email: this.$parent.email
            }
        },
        methods: {
            gotoDetails() {
                // Some validation here
                if ($.trim(this.email) && this.isEmail(this.email)) {
                    $('#email').removeClass('error');
                    this.$parent.email = this.email;
                    router.replace('/details');
                } else {
                    $('#email').addClass('error');
                }
            },
            isEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }
        }
    }
</script>
