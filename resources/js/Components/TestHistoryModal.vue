<script>
export default {
  name: "TestHistoryModal",
  props: {
    test: {
      type: Object,
      default: null
    }
  },
  methods: {
    getClassText(answer, user_answer) {
      if (answer.id === user_answer) {
        if (answer.is_true) {
          return 'text-green-600'
        }
        return 'text-red-600'
      }
      return ''
    }
  }
}
</script>

<template>
  <div id="hs-history" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
      <div
          class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
          <h3 v-if="test != null" class="font-bold text-gray-800 dark:text-white">
            Тема теста: {{ test.test_name }}
          </h3>
          <button class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                  data-hs-overlay="#hs-history"
                  type="button">
            <span class="sr-only">Закрыть</span>
            <svg class="flex-shrink-0 size-4" fill="none" height="24" stroke="currentColor"
                 stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                 xmlns="http://www.w3.org/2000/svg">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <div class="p-4 overflow-y-auto">
          <div v-if="test != null" class="space-y-4">
            <div v-for="result in test.results" :key="result.question">
              <h3 class="text-lg font-semibold text-gray-800 dark:text-white">{{ result.question }}</h3>
              <p class="mt-1 text-gray-800 dark:text-gray-400">
                <ul class="list-disc list-inside text-gray-800 dark:text-white">
                  <li v-for="answer in result.answers" :key="answer.id"
                      :class="getClassText(answer, result.user_answer)">
                    {{ answer.answer }}
                  </li>
                </ul>
              </p>
            </div>


          </div>
        </div>
        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
          <button class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800"
                  data-hs-overlay="#hs-history"
                  type="button">
            Закрыть
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>