<template>
    <div class="container" id="input_container">
        <div class="row">
            <div class="col-md-12">
                <h1>You're One Step Away</h1>
            </div>
        </div>
        <div class="row">
            <form id="details_form">
                <div class="col-md-4">
                    <div class="alert alert-info" role="alert">
                        Your Email Address : <strong>{{ user_email }}</strong>
                    </div>
                    <div class="form-group">
                        <label>ZIP code</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Purchase price</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Down payment</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Credit score</label>
                        <select class="form-control">
                            <option>720-739</option>
                            <option>740-759</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Annual income</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Monthly debts</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Property type</label>
                        <select class="form-control">
                            <option>Type 1</option>
                            <option>Type 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>How is home used?</label>
                        <select class="form-control">
                            <option>Usecase 1</option>
                            <option>Usecase 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>First-time buyer?</label>
                        <select class="form-control">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>New construction?</label>
                        <select class="form-control">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <fieldset class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="option1" checked>
                            Filed bankruptcy?
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="option2">
                            Had a foreclosure?
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="option2">
                            Self-employed?
                            </label>
                        </div>
                    </fieldset>
                    <fieldset class="form-group">
                        <legend>DESIRED LOAN PROGRAMS?</legend>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="option1" checked>
                            30 year fixed
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="option1" checked>
                            20 year fixed
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="option1" checked>
                            15 year fixed
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="option1" checked>
                            10 year fixed
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="option1" checked>
                            7/1 ARM
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="option1" checked>
                            5/1 ARM
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="option1" checked>
                            3/1 ARM
                            </label>
                        </div>
                        
                        <button class="btn btn-primary" @click="submitDetails">Confirm Alert</button>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import router from '../routes';

    export default {
        // route: {
        //     data: function(transition) {
        //         if (typeof transition.to.params.email == 'undefined') {
        //             transition.redirect('/login');
        //         } else {
        //             transition.next({
        //                 email: transition.to.params.email
        //             });
        //         }
        //     }
        // },
        beforeCreate() {
            if (this.$parent.email === '') {
                router.replace('/');
            }
        },
        data() {
            return {
                user_email: this.$parent.email
            }
        },
        methods: {
            submitDetails() {
                axios.post('/subscribers', { email: this.user_email }).then(response => {
                    if (response.status === 200 && response.statusText === 'OK') {
                        router.replace('/success');
                    } else {
                        // error handling
                    }
                });
            }
        }
    }
</script>
