<script setup>
import {Link} from '@inertiajs/vue3';
import Footer from "@/Components/Footer.vue";
import {onMounted} from 'vue';

onMounted(() => {
  setTimeout(() => {
    window.HSStaticMethods.autoInit();
  }, 100)
});

</script>

<template>
  <!-- ========== HEADER ========== -->
  <header
      class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full bg-white border-b text-sm py-2.5 md:py-4 dark:bg-slate-900 dark:border-gray-700">
    <nav
        aria-label="Global"
        class="mt-6 relative max-w-[85rem] w-full bg-white border border-gray-200 rounded-[36px] mx-2 py-3 px-4 md:flex md:items-center md:justify-between md:py-0 md:px-6 lg:px-8 xl:mx-auto dark:bg-gray-800 dark:border-gray-700">
      <div class="flex items-center justify-between">
        <Link
            :href="route('index')"
            class="flex-none text-xl font-semibold dark:text-white"
        >
          FrontEnd RoadMap
        </Link>
        <div class="md:hidden">
          <button aria-controls="navbar-collapse-with-animation"
                  aria-label="Toggle navigation"
                  class="hs-collapse-toggle size-8 flex justify-center items-center text-sm font-semibold rounded-full border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-collapse="#navbar-collapse-with-animation"
                  type="button">
            <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" fill="none" height="24"
                 stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                 width="24" xmlns="http://www.w3.org/2000/svg">
              <line x1="3" x2="21" y1="6" y2="6"/>
              <line x1="3" x2="21" y1="12" y2="12"/>
              <line x1="3" x2="21" y1="18" y2="18"/>
            </svg>
            <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" fill="none"
                 height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                 width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 6 6 18"/>
              <path d="m6 6 12 12"/>
            </svg>
          </button>
        </div>
      </div>
      <div id="navbar-collapse-with-animation"
           class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
        <div
            class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:items-center md:justify-end md:gap-y-0 md:gap-x-7 md:mt-0 md:ps-7">
          <Link
              v-if="!$page.props.auth.user"
              :href="route('login')"
              class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 md:border-s md:border-gray-300 md:my-6 md:ps-6 dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500">
            <svg class="flex-shrink-0 size-4" fill="none" height="24" stroke="currentColor"
                 stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                 xmlns="http://www.w3.org/2000/svg">
              <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
              <circle cx="12" cy="7" r="4"/>
            </svg>
            Войти
          </Link>
          <template v-if="$page.props.auth.user">
            <Link
                :href="route('login')"
                class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 md:border-s md:border-gray-300 md:my-6 md:ps-6 dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500">
              <svg class="flex-shrink-0 size-4" fill="none" height="24" stroke="currentColor"
                   stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                   xmlns="http://www.w3.org/2000/svg">
                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
              </svg>
              Профиль
            </Link>
          </template>

        </div>
      </div>
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->
  <slot/>
  <Footer/>
</template>

<style scoped>

</style>