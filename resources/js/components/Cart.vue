<template>
    <div>

        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="/checkout" style="margin-left:25%" class="btn btn-warning mr-1 hover:text-gray-900 inline-flex items-center border-0 py-1 px-3">

                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                    stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                    <path
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>{{ itemCount }}</a>
        </nav>

        <!-- <li class="nav-item">
            <a href="/checkout" 
                class="btn btn-warning btn-sm">
                    Cart {{itemCount}}
            </a>
        </li> -->
    </div>
</template>

<script>
export default {
    data() {
        return {
            itemCount: '',
        }
    },
    mounted() {
        this.$root.$on('changeInCart', (item) => {
            this.itemCount = item;
        })
    },
    methods: {
        async getCartItemsOnPageLoad() {
            let response = await axios.post('/cart');
            this.itemCount = response.data.items
        }
    },
    created() {
        this.getCartItemsOnPageLoad();
    }
}
</script>
