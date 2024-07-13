<script setup>
import { ref } from 'vue'
import Card from '@/components/Card.vue'
import Plant from '@/plants.json'
const plants = ref(Plant)
</script>

<template>
    <div class="w-full h-8">
        <svg viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 43.9999C106.667 43.9999 213.333 7.99994 320 7.99994C426.667 7.99994 533.333 43.9999 640 43.9999C746.667 43.9999 853.333 7.99994 960 7.99994C1066.67 7.99994 1173.33 43.9999 1280 43.9999C1386.67 43.9999 1440 19.0266 1440 9.01329V100H0V43.9999Z"
                class="fill-current text-green-600"></path>
        </svg>
    </div>
    <div class="max-w-3xl mx-auto text-center mt-20">
        <h1 class="text-4xl font-bold text-gray-900 leading-tight mb-2 border-t-4 border-b-4 border-green-600 py-4">
            Fancy Plant
        </h1>
        <p class="text-lg text-gray-800 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="p-1 flex flex-wrap items-center justify-center mt-4">
        <Card v-for="plant in plants" :key="plant.name" bg="bg-teal-500" :name="plant.name" :category="plant.family" :desc="plant.description" />



    </div>
</template>