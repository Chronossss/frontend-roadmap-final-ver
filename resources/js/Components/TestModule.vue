<script>
import {nextTick} from "vue";

export default {
  name: "TestModule",
  props: {
    testName: {
      type: String,
    }
  },
  data() {
    return {
      testData: {
        id: 0,
        name: 'css',
        questions: [
          {
            id: 0,
            test_id: 0,
            questions: "Loading",
            answers: [
              {
                id: 0,
                test_questions_id: 0,
                answer: "Loading",
                is_true: false
              }
            ]
          }
        ]
      },
      currentQuestionIndex: 0,
      selectedAnswer: null,
      showTest: true,
      isDisabledTest: false,
      canNextAnswer: false,
      countGoodQuestions: 0,
      testEnd: false,
      testEndShow: false,
      resultsQuestions: []
    }
  },
  methods: {
    async loadTest() {
      await axios.get(route('api.test.get', this.testName)).then((response) => {
        this.testData = response.data
        console.log(this.testData)
      })
    },
    async sendResults() {
      await axios.post(route('api.test.save', this.testData.id), {
        testResults: this.resultsQuestions
      }).then((response) => {
        console.log(response.data)
      })
    },
    async checkAnswer() {
      if (this.selectedAnswer == null) {
        return
      }
      if (this.canNextAnswer === false) {
        this.isDisabledTest = true

        let element = document.querySelector('label[for="hs-radio-vertical-group-' + this.selectedAnswer + '"]');

        if (this.currentQuestion.answers[this.selectedAnswer].is_true) {
          this.countGoodQuestions += 1;
          element.classList.add("text-green-600")
        } else {
          element.classList.add("text-red-600")
        }
        this.canNextAnswer = true
        this.resultsQuestions.push({
          question_id: this.currentQuestion.id,
          answer_id: this.currentQuestion.answers[this.selectedAnswer].id
        })
        return;
      }
      this.showTest = false
      if (this.selectedAnswer != null) {
        let element = document.querySelector('label[for="hs-radio-vertical-group-' + this.selectedAnswer + '"]');
        element.classList.remove("text-green-600")
        element.classList.remove("text-red-600")
      }
      if (this.testData.questions.length === this.currentQuestionIndex + 1) {
        this.selectedAnswer = null
        this.canNextAnswer = false
        this.isDisabledTest = false
        this.testEnd = true
        await nextTick(() => {
          this.testEndShow = true
        })
        if (this.$page.props.auth.user) {
          await this.sendResults()
        }
        return;
      }
      await nextTick(() => {
        this.currentQuestionIndex += 1
        this.selectedAnswer = null
        this.canNextAnswer = false
        this.isDisabledTest = false
        this.showTest = true
      })
    }
  },
  async mounted() {
    await this.loadTest()
  },
  computed: {
    currentQuestion() {
      console.log(this.testData.questions)
      return this.testData.questions[this.currentQuestionIndex]
    },
    resultTextClass() {
      if (this.countGoodQuestions * 100 / this.testData.questions.length > 70) {
        return 'text-green-500'
      }
      return 'text-red-500'
    }
  }
}
</script>

<template>
  <template v-if="testEnd">
    <Transition name="slide-fade">
      <div v-if="testEndShow" class="p-4 md:p-5">
        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
          Результаты тестирования:
        </h3>
        <p class="mt-2 text-gray-500 dark:text-gray-400">
                        <span :class="resultTextClass">
                          Вы решили верно {{ countGoodQuestions }} из {{ testData.questions.length }} вопросов.
                        </span>
          Прошлые и будущие результаты тестирования можно посмотреть в профиле, в разделе "История
          тестирования"
        </p>
      </div>
    </Transition>
  </template>
  <template v-else>
    <Transition name="slide-fade">
      <div v-if="showTest" class="p-4 md:p-5">
        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
          {{ currentQuestion.question }}
        </h3>
        <p class="mt-2 text-gray-500 dark:text-gray-400">
          <div class="flex flex-col gap-y-3">
            <div v-for="(answer, index) in currentQuestion.answers" :key="index" class="flex">
              <input :id="'hs-radio-vertical-group-' + index" v-model="selectedAnswer" :disabled="isDisabledTest"
                     :value="index"
                     class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                     name="hs-radio-vertical-group"
                     type="radio">
              <label :for="'hs-radio-vertical-group-' + index" class="text-sm ms-2">{{
                  answer.answer
                }}</label>
            </div>
          </div>
        </p>
        <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
           @click="checkAnswer">

          <template v-if="canNextAnswer">
            Следующий вопрос
          </template>
          <template v-else>
            Проверить ответ
          </template>
          <svg class="flex-shrink-0 size-4" fill="none" height="24" stroke="currentColor"
               stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
               width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="m9 18 6-6-6-6"/>
          </svg>
        </a>
      </div>
    </Transition>
  </template>
</template>

<style scoped>
.slide-fade-enter-active {
  transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
  transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
  transform: translateX(20px);
  opacity: 0;
}
</style>