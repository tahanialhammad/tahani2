<template>
    <div>
        <div class="glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <img
                            style="width: 200px"
                            src="https://plus.unsplash.com/premium_photo-1673827679973-058bdf3caa68?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2030&q=80"
                            alt=""
                        />
                    </li>
                    <li class="glide__slide">
                        <img
                            style="width: 200px"
                            src="https://images.unsplash.com/photo-1693892256511-5672cac6e5e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                            alt=""
                        />
                    </li>
                    <li class="glide__slide">
                        <img
                            style="width: 200px"
                            src="https://plus.unsplash.com/premium_photo-1675314768267-b6ac0b096e07?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                            alt=""
                        />
                    </li>
                </ul>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
                <button
                    class="glide__arrow glide__arrow--left"
                    data-glide-dir="<"
                >
                    prev
                </button>
                <button
                    class="glide__arrow glide__arrow--right"
                    data-glide-dir=">"
                >
                    next
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import Glide from "@glidejs/glide";

export default {
    mounted() {
        new Glide(".glide").mount();
    },
};
</script>

<style scoped>
@import "@glidejs/glide/dist/css/glide.core.min.css";
</style>
