<script setup>
import {Link} from '@inertiajs/vue3';
</script>

<template>
  <!-- Card Blog -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Grid -->
    <div class="grid lg:grid-cols-2 lg:gap-y-16 gap-10">
      <!-- Card -->
      <Link
          :href="route('roadmap.html')"
          class="group rounded-xl overflow-hidden dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
        <div class="sm:flex">
          <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
            <img
                alt="Image Description"
                class="group-hover:scale-105 transition-transform duration-500 ease-in-out size-full absolute top-0 start-0 object-cover rounded-xl" src="../../images/html-5.png">
          </div>

          <div class="grow mt-4 sm:mt-0 sm:ms-6 px-4 sm:px-0">
            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-gray-300 dark:group-hover:text-white">
              HTML
            </h3>
            <p class="mt-3 text-gray-600 dark:text-gray-400">
              В этом блоке вы узнаете что такое HTML, как он работает и для чего нужен
            </p>
            <p class="mt-4 inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium">
              Открыть
              <svg class="flex-shrink-0 size-4" fill="none" height="24" stroke="currentColor"
                   stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                   xmlns="http://www.w3.org/2000/svg">
                <path d="m9 18 6-6-6-6"/>
              </svg>
            </p>
          </div>
        </div>
      </Link>
      <!-- End Card -->

      <!-- Card -->
      <Link
          :href="route('roadmap.css')"
          class="group rounded-xl overflow-hidden dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
      >
        <div class="sm:flex">
          <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
            <img
                alt="Image Description"
                class="group-hover:scale-105 transition-transform duration-500 ease-in-out size-full absolute top-0 start-0 object-cover rounded-xl"
                src="../../images/CSS3_logo.svg.png">
          </div>

          <div class="grow mt-4 sm:mt-0 sm:ms-6 px-4 sm:px-0">
            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-gray-300 dark:group-hover:text-white">
              CSS
            </h3>
            <p class="mt-3 text-gray-600 dark:text-gray-400">
              В этом разделе вы узнаете что такое CSS, как он работает и для чего нужен
            </p>
            <p class="mt-4 inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium">
              Открыть
              <svg class="flex-shrink-0 size-4" fill="none" height="24" stroke="currentColor"
                   stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                   xmlns="http://www.w3.org/2000/svg">
                <path d="m9 18 6-6-6-6"/>
              </svg>
            </p>
          </div>
        </div>
      </Link>

      <Link
          :href="route('roadmap.js')"
          class="group rounded-xl overflow-hidden dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
      >
        <div class="sm:flex">
          <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
            <img
                alt="Image Description"
                class="group-hover:scale-105 transition-transform duration-500 ease-in-out size-full absolute top-0 start-0 object-cover rounded-xl"
                src="../../images/javascript-js-icon-2048x2048-nyxvtvk0.png">
          </div>

          <div class="grow mt-4 sm:mt-0 sm:ms-6 px-4 sm:px-0">
            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-gray-300 dark:group-hover:text-white">
              JS
            </h3>
            <p class="mt-3 text-gray-600 dark:text-gray-400">
              В этом разделе вы узнаете что такое JS, как он работает и для чего нужен
            </p>
            <p class="mt-4 inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium">
              Открыть
              <svg class="flex-shrink-0 size-4" fill="none" height="24" stroke="currentColor"
                   stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                   xmlns="http://www.w3.org/2000/svg">
                <path d="m9 18 6-6-6-6"/>
              </svg>
            </p>
          </div>
        </div>
      </Link>

      <Link
          :href="route('roadmap.react')"
          class="group rounded-xl overflow-hidden dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
      >
        <div class="sm:flex">
          <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
            <img
                alt="Image Description"
                class="group-hover:scale-105 transition-transform duration-500 ease-in-out size-full absolute top-0 start-0 object-cover rounded-xl"
                src="../../images/React-icon.svg.png">
          </div>

          <div class="grow mt-4 sm:mt-0 sm:ms-6 px-4 sm:px-0">
            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-gray-300 dark:group-hover:text-white">
              React
            </h3>
            <p class="mt-3 text-gray-600 dark:text-gray-400">
              В этом разделе вы узнаете что такое React, как он работает и для чего нужен
            </p>
            <p class="mt-4 inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium">
              Открыть
              <svg class="flex-shrink-0 size-4" fill="none" height="24" stroke="currentColor"
                   stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                   xmlns="http://www.w3.org/2000/svg">
                <path d="m9 18 6-6-6-6"/>
              </svg>
            </p>
          </div>
        </div>
      </Link>
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Card Blog -->
</template>

<style scoped>

</style>