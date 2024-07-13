<script setup>
import { defineProps, ref, computed } from 'vue';

defineProps({
    bg: {
        type: String,
        default: "bg-green-500"
    },
    name: {
        type: String,
        default: "Jasmine"
    },
    category: {
        type: String,
        default: "Indoor"
    },
    desc:{
        type: String,
        default: "Tropical Plant"
    }

})

const isReadmore = ref(false);

const toogleReadmore = () => {
    isReadmore.value = !isReadmore.value
}
const description = computed(() => {
    if (isReadmore.value) {
        return true;
    } else {
        return false;
    }
})

</script>

<template>
    <div :class="`flex-shrink-0 m-6 relative overflow-hidden ${bg} rounded-lg max-w-xs shadow-lg group `">
        <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
            viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
            </div>
            <img class="relative w-40"
                src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                alt="" />
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">{{ category }}</span>
            <div class="flex justify-between">
                <span class="block font-semibold text-xl">{{ name }}</span>
                <span
                    class=" bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$36.00</span>
            </div>
        </div>
        <button @click="toogleReadmore" class="relative px-3 py-1 mb-3 ml-4 items-center justify-center bg-white text-green-600 rounded-lg">
            {{ description ? 'Less' : 'More' }}
        </button>
        <div v-if="description" class="relative pt-2 px-10 flex mb-10 text-sm text-white">
            <i class="pi pi-bookmark-fill"></i>
           {{ desc }}
        </div>
    </div>
</template>