<template>
    <div>
        <button class="btn btn-warning inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base md:mt-0"                              
            v-on:click.prevent="addProductToCart()">
           <b>+</b>  
            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
        </button>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                
            }
        },
        props:['productId', 'userId'],
        methods:{
            async addProductToCart(){

                // Checking if user logged in.

                if(this.userId == 0){
                    this.$toastr.e('Você precisa fazer o login, para adicionar este produto no carrinho.');
                    return;
                }

                // If user logged in then add item to cart.

                let response = await axios.post('/cart', {
                    'product_id': this.productId
                });

                this.$root.$emit('changeInCart', response.data.items)

            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
