<template>
    <div class="container" id="home">
        <div class="row">     
             <h1>Loan Alert</h1>

             <h4>Get loan alerts in your inbox!</h4>
             <form v-on:submit.prevent="submitEmail">
               <div class="input-group">
                    <input id="email" type="email" class="form-control" v-model="email" placeholder="Enter your email" required>
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-success">Alert</button>
                    </span>
                </div>
             </form>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return { 
                email: ''
            }
        },
        methods: {
            submitEmail: function() {
                this.$http.post('/api/users', {email: this.email}).then((response) => {
                    this.$emit('email-submitted', this.email);
                }).catch(function (error) {
                    console.log(error);
                });
            }
        }
    }
</script>
