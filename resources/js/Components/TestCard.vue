<script setup>

</script>

<template>
  <div
      class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
    <div class="border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:border-gray-700">
      <p class="mt-1 text-sm text-gray-500 dark:text-gray-500">
        Featured
      </p>
    </div>
    <div
        class="bg-gray-800/[.1] border border-gray-200 text-sm text-gray-800 p-4 dark:bg-gray-900/[.1] dark:border-gray-700 dark:text-white">
      <span class="font-bold">Attention needed!</span> This is an alert box.
    </div>
    <div class="p-4 md:p-5">
      <h3 class="text-lg font-bold text-gray-800 dark:text-white">
        Card title
      </h3>
      <p class="mt-2 text-gray-500 dark:text-gray-400">
        With supporting text below as a natural lead-in to additional content.
      </p>
      <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
         href="#">
        Card link
        <svg class="flex-shrink-0 size-4" fill="none" height="24" stroke="currentColor" stroke-linecap="round"
             stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
          <path d="m9 18 6-6-6-6"/>
        </svg>
      </a>
    </div>
  </div>
</template>

<style scoped>

</style>