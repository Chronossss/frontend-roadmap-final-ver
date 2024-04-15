<script>
import {Head, Link} from '@inertiajs/vue3';
import HeaderLayout from "@/Layouts/HeaderLayout.vue";
import {isEmail, notEmpty} from "@/helpers/validation.js";
import TextInput from "@/Components/TextInput.vue";

export default {
  name: "Register",
  components: {Head, TextInput, Link, HeaderLayout},
  data() {
    return {
      email: {
        value: "",
        touch: false,
        backendError: null,
      },
      password: {
        value: "",
        touch: false,
        backendError: null,
      },
      password_confirmation: {
        value: "",
        touch: false,
        backendError: null,
      },
      loading: false,
    }
  },
  methods: {
    onBlur(field) {
      this[field].touch = true
    },
    clearBackendError(field) {
      this[field].backendError = null
    },
    touchAllFields() {
      this.email.touch = true
      this.password.touch = true
      this.password_confirmation.touch = true
    },
    async tryRequest(callback) {
      try {
        this.loading = true
        await callback()
      } catch (error) {
        console.log(error)
        this.handleErrors(error)
      } finally {
        this.loading = false
      }
    },
    handleErrors(error) {
      if (error?.response?.status === 422) {
        Object.entries(error.response.data.errors).forEach(
            ([field, errors]) => {
              this[field].backendError = errors[0]
            }
        )
      }
    },
    onSubmit() {
      this.touchAllFields()
      if (this.hasErrors) {
        return
      }

      this.tryRequest(async () => {
        await axios.post(route('register'), {
          email: this.email.value,
          password: this.password.value,
          password_confirmation: this.password_confirmation.value,
        })
        this.$inertia.get(route('index'))
      })
    },
  },
  computed: {
    emailError() {
      if (this.email.backendError) {
        return this.email.backendError
      }
      if (!this.email.touch) {
        return null
      }
      if (!notEmpty(this.email.value)) {
        return 'Это поле обязательное'
      }
      if (!isEmail(this.email.value)) {
        return "Имейл введён не верно"
      }
      return null
    },
    passwordError() {
      if (this.password.backendError) {
        return this.password.backendError
      }
      if (!this.password.touch) {
        return null
      }
      if (!notEmpty(this.password.value)) {
        return 'Это поле обязательное'
      }
      return null
    },
    passwordConfirmationError() {
      if (this.password_confirmation.backendError) {
        return this.password_confirmation.backendError
      }
      if (!this.password_confirmation.touch) {
        return null
      }
      if (!notEmpty(this.password_confirmation.value)) {
        return "Это поле обязательное"
      }
      return null
    },
    hasErrors() {
      return Boolean(this.emailError || this.passwordError)
    },
  }
}
</script>

<template>
  <Head title="Регистрация"/>
  <HeaderLayout>
    <main class="w-full max-w-md mx-auto p-6">
    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
      <div class="p-4 sm:p-7">
        <div class="text-center">
          <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Регистрация</h1>
          <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
            Уже есть аккаунт?
            <Link
                :href="route('login')"
                class="text-blue-600 decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
            >
              Войти
            </Link>
          </p>
        </div>

        <div class="mt-5">

          <div
              class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 before:me-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ms-6 dark:text-gray-500 dark:before:border-gray-600 dark:after:border-gray-600">
            Или
          </div>

          <!-- Form -->
          <form @submit.prevent="onSubmit">
            <div class="grid gap-y-4">
              <!-- Form Group -->
              <div>
                <label class="block text-sm mb-2 dark:text-white" for="email">Имейл адрес</label>
                <div class="relative">
                  <TextInput
                      id="email"
                      v-model="email.value"
                      placeholder="Имейл"
                      type="text"
                      @blur="onBlur('email')"
                      @input="clearBackendError('email')"
                  />
                  <div v-show="emailError" class="absolute inset-y-0 end-0 pointer-events-none pe-3">
                    <svg aria-hidden="true" class="size-5 text-red-500" fill="currentColor" height="16" viewBox="0 0 16 16"
                         width="16">
                      <path
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                  </div>
                </div>
                <p v-show="emailError" id="email-error" class="text-xs text-red-600 mt-2">{{ emailError }}</p>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div>
                <label class="block text-sm mb-2 dark:text-white" for="password">Пароль</label>
                <div class="relative">
                  <TextInput
                      id="password"
                      v-model="password.value"
                      placeholder="Пароль"
                      type="password"
                      @blur="onBlur('password')"
                      @input="clearBackendError('password')"
                  />
                  <div v-show="passwordError" class="absolute inset-y-0 end-0 pointer-events-none pe-3">
                    <svg aria-hidden="true" class="size-5 text-red-500" fill="currentColor" height="16" viewBox="0 0 16 16"
                         width="16">
                      <path
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                  </div>
                </div>
                <p v-show="passwordError" id="password-error" class="text-xs text-red-600 mt-2">{{ passwordError }}</p>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div>
                <label class="block text-sm mb-2 dark:text-white" for="confirm-password">Подтверждение пароля</label>
                <div class="relative">
                  <TextInput
                      id="password_confirmation"
                      v-model="password_confirmation.value"
                      placeholder="Подтверждение пароля"
                      type="password"
                      @blur="onBlur('password_confirmation')"
                      @input="clearBackendError('password_confirmation')"
                  />
                  <div v-show="passwordConfirmationError" class="absolute inset-y-0 end-0 pointer-events-none pe-3">
                    <svg aria-hidden="true" class="size-5 text-red-500" fill="currentColor" height="16" viewBox="0 0 16 16"
                         width="16">
                      <path
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                  </div>
                </div>
                <p v-show="passwordConfirmationError" id="confirm-password-error" class="text-xs text-red-600 mt-2">
                  {{ passwordConfirmationError }}
                </p>
              </div>
              <!-- End Form Group -->

              <button
                  :disabled="loading"
                  class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                      type="submit">
                Зарегистрироваться
              </button>
            </div>
          </form>
          <!-- End Form -->
        </div>
      </div>
    </div>
  </main>
  </HeaderLayout>
</template>

<style scoped>

</style>