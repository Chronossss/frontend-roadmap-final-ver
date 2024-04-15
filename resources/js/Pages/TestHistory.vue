<script>

import HeaderLayout from "@/Layouts/HeaderLayout.vue";
import TestHistoryModal from "@/Components/TestHistoryModal.vue";

export default {
  name: "TestHistory",
  components: {TestHistoryModal, HeaderLayout},
  data() {
    return {
      tests: [
        {
          test_name: "Loading",
          results: [
            {
              question: "Loading",
              answers: [
                {
                  id: 0,
                  answer: "Loading",
                  is_true: false
                }
              ],
              user_answer: 0
            }
          ],
          good_answers: 0
        }
      ],
      openedTestIndex: null
    }
  },
  methods: {
    async loadResults() {
      await axios.get(route('api.test.history')).then((response) => {
        this.tests = response.data;
      })
    }
  },
  async mounted() {
    await this.loadResults();
    setTimeout(() => {
      window.HSStaticMethods.autoInit();
    }, 100)
  }
}

</script>

<template>

  <HeaderLayout>
    <!-- Clients -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      <!-- Title -->
      <div class="w-2/3 sm:w-1/2 lg:w-1/3 mx-auto text-center mb-6">
        <h2 class="text-gray-600 dark:text-gray-400">В данной таблице представлены результаты того, как вы решали
          тесты</h2>
      </div>
      <!-- End Title -->

      <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto text-center">
        <div class="flex flex-col">
          <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
              <div class="overflow-hidden ">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                  <thead>
                  <tr>
                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase" scope="col">Тема
                      теста
                    </th>
                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase" scope="col">Кол-во
                      вопросов
                    </th>
                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase" scope="col">Верных
                      ответов
                    </th>
                    <th class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase" scope="col">Управление
                    </th>
                  </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                  <tr v-for="(test, index) in tests" :key="index">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                      {{ test.test_name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                      {{ test.results.length }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600 dark:text-green-600">
                      {{ test.good_answers }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <button class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400"
                              data-hs-overlay="#hs-history" type="button" @click="openedTestIndex = index">
                        Подробнее
                      </button>

                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </HeaderLayout>
  <TestHistoryModal :test="tests[openedTestIndex]"/>
</template>

<style scoped>

</style>