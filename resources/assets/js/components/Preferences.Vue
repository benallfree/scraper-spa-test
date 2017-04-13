<template>
    <div class="container" id="preferences">
        <div class="row">
            <form v-on:submit.prevent="submitPreferences">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="zip-code">Zip Code</label>
                            <input id="zip-code" type="text" class="form-control" placeholder="Enter Zip Code" v-model="zip_code" required>
                        </div>

                        <div class="form-group">
                            <label for="purchase-price">Purchase Price</label>
                            <div class="input-group">
                              <span class="input-group-addon">$</span>
                              <input id="purchase-price" type="number" min="1" max="1000000000" class="form-control" placeholder="Enter purchase price" v-model.number="purchase_price" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="down_payment">Down Payment</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="down_payment" type="number" min="1" max="1000000000" class="form-control" placeholder="Enter down payment" v-model.number="down_payment" required>
                                <span class="input-group-addon"><span v-show="validDownPayment">{{ down_payment_percentage }}</span> %</span>
                            </div>
                            <p v-show="!validDownPayment && submit_button_pressed" class="error">Down payment must be smaller than purchase price</p>
                        </div>

                        <div class="form-group">
                            <label for="credit-score">
                                <span>Credit Score</span>
                                <a href="#" class="credit-score-popover" data-toggle="popover" data-trigger="hover" data-content="Credit Score Explanation">?</a>
                            </label>
                            <div>
                                <select id="credit-score" v-model="credit_score" required>
                                    <option disabled value="">Please select one</option>
                                    <option>700-710</option>
                                    <option>711-720</option>
                                    <option>721-730</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="military-veteran">Military/Veteran Code</label>
                            <input id="military-veteran" type="checkbox" v-model="military">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="annual_income">Annual Income</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="annual_income" type="number" min="1" max="1000000000" class="form-control" placeholder="Enter annual income" v-model.number="annual_income" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="monthly_debts">Monthly Debts</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="monthly_debts" type="number" min="1" max="1000000000" class="form-control" placeholder="Enter monthly debts" v-model.number="monthly_debts" required>
                            </div>
                        </div>

                        <div>
                            <label for="property_type">Property Type</label>
                            <div>
                                <select id="property_type" v-model="property_type" required>
                                    <option disabled value="">Please select one</option>
                                    <option>Flat</option>
                                    <option>House</option>
                                    <option>Room</option>
                                </select>
                            </div>

                        </div>
                        <br>
                        <div>
                            <label for="home_usage">How is home used?</label>
                            <div>
                                <select id="home_usage" v-model="home_usage" required>
                                    <option disabled value="">Please select one</option>
                                    <option>Primary residence</option>
                                    <option>Secondary residence</option>
                                    <option>Shared residence</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div>
                            <label for="first_time_buyer">First-time buyer?</label>
                            <div>
                                <select id="first_time_buyer" v-model="first_time_buyer" required>
                                    <option disabled value="">Please select one</option>
                                    <option value="true">Yes</option>
                                    <option value="false">No</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div>
                            <label for="new_construction">New construction?</label>
                            <div>
                                <select id="new_construction" v-model="new_construction" required>
                                    <option disabled value="">Please select one</option>
                                    <option value="true">Yes</option>
                                    <option value="false">No</option>
                                </select>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="filed-bankruptcy">Filed bankruptcy?</label>
                            <input id="filed-bankruptcy" type="checkbox" v-model="filed_bankruptcy">
                        </div>

                        <div class="form-group">
                            <label for="had-foreclosure">Had foreclosure?</label>
                            <input id="had-foreclosure" type="checkbox" v-model="had_foreclosure">
                        </div>

                        <div class="form-group">
                            <label for="self-employed">Self employed?</label>
                            <input id="self-employed" type="checkbox" v-model="self_employed">
                        </div>

                        <div class="form-group">
                            <label>Desired loan programs</label>
                            <div id="desired-loan-programs">
                                <div v-for="program in desired_loan_programs">
                                    <input :id="program" :value="program" type="checkbox" v-model="checked_desired_loan_programs">
                                    <label :for="program">{{ program }}</label>
                                </div>
                            </div>
                            <p v-show="!validDesiredPrograms && submit_button_pressed" class="error">At least one program must be selected</p>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-success">Alert</button>
            </form>
            
        </div>
    </div>
</template>

<script>
    export default {
        props: ['email'],
        data: function() {
            return {
                submit_button_pressed: false,
                zip_code: '',
                purchase_price: null,
                down_payment: null,
                credit_score: '',
                military: false,
                annual_income: null,
                monthly_debts: null,
                property_type: '',
                home_usage: '',
                first_time_buyer: false,
                new_construction: false,
                filed_bankruptcy: false,
                had_foreclosure: false,
                self_employed: false,
                desired_loan_programs: ['30 year fixed', '20 year fixed', '15 year fixed', '10 year fixed', '7/1 ARM', '5/1 ARM', '3/1 ARM'],
                checked_desired_loan_programs: [],
            }
        },
        methods: {
            submitPreferences: function() {
                this.submit_button_pressed = true;

                if (!this.fieldsAreValid()) {
                    return false;
                }

                this.$http.post('/api/users/preferences', {
                    email: this.email,
                    zip_code: this.zip_code,
                    purchase_price: this.purchase_price,
                    down_payment: this.down_payment,
                    credit_score: this.credit_score,
                    military: this.military,
                    annual_income: this.annual_income,
                    monthly_debts: this.monthly_debts,
                    property_type: this.property_type,
                    home_usage: this.home_usage,
                    first_time_buyer: this.first_time_buyer,
                    new_construction: this.new_construction,
                    filed_bankruptcy: this.filed_bankruptcy,
                    had_foreclosure: this.had_foreclosure,
                    self_employed: this.self_employed,
                    checked_desired_loan_programs: this.checked_desired_loan_programs,

                }).then((response) => {
                    this.$emit('preferences-submitted');
                }).catch(function (error) {
                    console.log(error);
                });
            },
            fieldsAreValid: function() {
                return this.validDownPayment && this.validDesiredPrograms;
            }
        },
        computed: {
            down_payment_percentage: function() {
                return Math.round(100 * this.down_payment / this.purchase_price);
            },
            validDesiredPrograms: function() {
                return this.checked_desired_loan_programs.length > 0;
            },
            validDownPayment: function() {
                return this.down_payment < this.purchase_price;
            }
        }
    }

    $(document).ready(function(){
        $('[data-toggle="popover"]').popover(); 
    });
</script>

<style scoped>
    .credit-score-popover {
        background-color: white;
        border-radius: 100%;
        padding: 4px;
    }

    .error {
        color: red;
    }

    #desired-loan-programs label {
        font-weight: normal;
    }

    .row {
        padding: 0px 10px;
    }
</style>
