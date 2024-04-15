<script>
import {Head, Link, useForm} from '@inertiajs/vue3';
import HeaderLayout from "@/Layouts/HeaderLayout.vue";
import TextInput from "@/Components/TextInput.vue";
import Checkbox from "@/Components/Checkbox.vue";

export default {
  name: "Login",
  components: {Checkbox, TextInput, HeaderLayout, Head, Link},

  props: {
    canResetPassword: Boolean,
    status: String
  },
  data() {
    return {
      form: useForm({
        email: '',
        password: '',
        remember: false,
      })
    }
  },
  methods: {
    submit() {
      this.form.post(route('login'), {
        onFinish: () => this.form.reset('password'),
      });
    },
  },
  computed: {
    emailErrorMessage() {
      if (this.form.errors.email) {
        return "Не верный имейл или пароль"
      }
      return '';
    }
  }
}
</script>

<template>
  <Head title="Вход"/>
  <HeaderLayout>
    <main class="w-full max-w-md mx-auto p-6">
    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
      <div class="p-4 sm:p-7">
        <div class="text-center">
          <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Вход</h1>
          <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
            Ещё нет аккаунта?
            <Link
                :href="route('register')"
                class="text-blue-600 decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
            >
              Зарегистрироваться
            </Link>
          </p>
        </div>

        <div class="mt-5">

          <div
              class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 before:me-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ms-6 dark:text-gray-500 dark:before:border-gray-600 dark:after:border-gray-600">
            Или
          </div>

          <!-- Form -->
          <form @submit.prevent="submit">
            <div class="grid gap-y-4">
              <!-- Form Group -->
              <div>
                <label class="block text-sm mb-2 dark:text-white" for="email">Имейл</label>
                <div class="relative">
                  <TextInput
                      id="email"
                      v-model="form.email"
                      autocomplete="email"
                      autofocus
                      placeholder="Имейл"
                      required
                      type="email"
                  />
                  <div v-show="emailErrorMessage" class="absolute inset-y-0 end-0 pointer-events-none pe-3">
                    <svg aria-hidden="true" class="size-5 text-red-500" fill="currentColor" height="16" viewBox="0 0 16 16"
                         width="16">
                      <path
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                  </div>
                </div>
                <p v-show="emailErrorMessage" id="email-error" class="text-xs text-red-600 mt-2">{{
                    emailErrorMessage
                  }}</p>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div>
                <div class="flex justify-between items-center">
                  <label class="block text-sm mb-2 dark:text-white" for="password">Пароль</label>
                </div>
                <div class="relative">
                  <TextInput
                      id="password"
                      v-model="form.password"
                      autocomplete="password"
                      placeholder="Пароль"
                      required
                      type="password"
                  />

                </div>
              </div>
              <!-- End Form Group -->

              <!-- Checkbox -->
              <div class="flex items-center">
                <div class="flex">
                  <Checkbox id="remember" v-model:checked="form.remember" name="remember"/>
                </div>
                <div class="ms-3">
                  <label class="text-sm dark:text-white" for="remember">Запомнить меня</label>
                </div>
              </div>
              <!-- End Checkbox -->

              <button :disabled="form.processing"
                      class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                      type="submit">
                Войти
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