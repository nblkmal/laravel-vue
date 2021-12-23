<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.{{ custom }}
                        <input v-model="message" placeholder="edit me">
                        <p>Message is: {{ message }}</p>
                        <div class="list-group">
                            <a href="" class="list-group-item" v-for="product in products" :key="product.id">
                                {{ product.name }}
                            </a>
                            <button class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submit">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                </div>
                                <input type="text" class="form-control" placeholder="name" v-model="fields.name" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Details</span>
                                </div>
                                <input type="text" class="form-control" placeholder="detail" v-model="fields.detail" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <button type="submit">Submit</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props: ['homeRoute'],

        data: function() {
            return {
                products: [],
                custom: 'helloooo',
                message: '',
                fields: {},
                // loading: true
            }
        },

        mounted() {
            console.log('Component mounted.'),
            this.loadProducts();
        },

        methods: {
            loadProducts: function() {
                // load from API
                axios.get('/api/products')
                .then((response) => {
                    this.products = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
                // assign
                // catch errors
            },
            submit() {
                // post to endpoint
                axios.post( this.homeRoute, this.fields )
                .then(response => {
                    this.fields = {};
                    console.log(this.fields);
                }).catch(error => {
                    console.log(error);
                })
            }
        }
    }
</script>
