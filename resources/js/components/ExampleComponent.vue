<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                        <div class="list-group">
                            <a href="" class="list-group-item" v-for="product in products" :key="product">
                                {{ product.name }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                products: [],
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
            }
        }
    }
</script>
