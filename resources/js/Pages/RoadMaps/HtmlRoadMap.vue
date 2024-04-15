<script setup>

import HeaderLayout from "@/Layouts/HeaderLayout.vue";
import TestModule from "@/Components/TestModule.vue";
</script>

<template>
  <HeaderLayout>
    <div class="max-w-[90rem] mx-auto">
      <!-- Sidebar Toggle -->
      <div
          class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 md:px-8 lg:hidden dark:bg-slate-900 dark:border-gray-700">
        <div class="max-w-3xl mx-auto py-2">
          <!-- Navigation Toggle -->
          <button aria-controls="docs-sidebar"
                  aria-label="Toggle navigation"
                  class="flex justify-between gap-x-2 items-center w-full text-gray-500 hover:text-gray-600" data-hs-overlay="#docs-sidebar" type="button">
            <span class="text-sm">Toggle Navigation</span>
            <svg class="flex-shrink-0 size-5" fill="none" height="24" stroke="currentColor"
                 stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                 xmlns="http://www.w3.org/2000/svg">
              <line x1="3" x2="21" y1="6" y2="6"></line>
              <line x1="3" x2="21" y1="12" y2="12"></line>
              <line x1="3" x2="21" y1="18" y2="18"></line>
            </svg>
          </button>
          <!-- End Navigation Toggle -->
        </div>
      </div>
      <!-- End Sidebar Toggle -->

      <!-- Sidebar -->
      <div id="docs-sidebar"
           class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-80 bg-white overflow-y-auto [--has-autofocus:false] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 lg:block lg:translate-x-0 lg:top-8 lg:end-auto lg:-bottom-8 lg:start-[max(0px,calc(50%-45rem))] lg:z-10 before:sticky before:inset-x-0 before:top-0 lg:before:top-8 before:z-20 before:block before:w-full before:h-10 before:pointer-events-none before:bg-gradient-to-b before:from-white before:via-white/90 after:sticky after:inset-x-0 after:bottom-0 lg:after:bottom-8 after:z-20 after:block after:w-full after:h-10 after:pointer-events-none after:bg-gradient-to-t after:from-white after:via-white/90 dark:before:from-slate-900 dark:before:via-slate-900/95 dark:after:from-slate-900 dark:after:via-slate-900/95 dark:bg-slate-900 dark:[&::-webkit-scrollbar-track]:bg-slate-700 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500">
        <!-- Navigation Toggle -->
        <button aria-controls="docs-sidebar"
                aria-label="Toggle navigation"
                class="ms-auto flex justify-end lg:hidden text-gray-500 hover:text-gray-600 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#docs-sidebar" type="button">
          <span class="sr-only">Toggle Navigation</span>
          <svg class="flex-shrink-0 size-5" fill="none" height="24" stroke="currentColor"
               stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
               xmlns="http://www.w3.org/2000/svg">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </button>
        <!-- End Navigation Toggle -->

        <!-- Nav -->
        <nav id="sidebar-nav" class="relative space-y-8 pt-7 pb-10 px-8 -my-8 lg:my-0">
          <h5 class="mb-3 text-sm font-semibold text-slate-900 dark:text-slate-200">Меню навигации</h5>
          <ul class="ms-0.5 space-y-2 border-s-2 border-slate-100 dark:border-slate-800" data-hs-scrollspy="#scrollspy">
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 active"
                href="#first">Практический материал о HTML</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#second">Выделение элементов</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#third">Списки</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#fourth">Ссылки</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#fifth">Изображения</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#sixth">Таблицы</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#seventh">Формы</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#test">Тест</a></li>
          </ul>
        </nav>
        <!-- Nav -->
      </div>
      <!-- End Sidebar -->

      <!-- Content -->
      <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:ps-[22rem]">
        <div class="lg:max-w-3xl mx-auto xl:max-w-none xl:ms-0 xl:me-64 xl:pe-16">
          <!-- Page Heading -->
          <header class="max-w-3xl">
            <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl dark:text-white">HTML</h1>
            <p class="mt-2 text-lg text-gray-800 dark:text-gray-400">
            <span class="text-red-600">
              HTML (Hypertext Markup Language)
            </span> - это код, который используется для структурирования и отображения веб-страницы и её контента.
              Например, контент может быть структурирован внутри множества параграфов, маркированных списков или с
              использованием изображений и таблиц данных. HTML не является языком программирования; это язык разметки, и
              используется, чтобы сообщать вашему браузеру, как отображать веб-страницы, которые вы посещаете.
            </p>
          </header>
          <!-- End Page Heading -->

          <!-- Content -->
          <div class="mt-16">
            <div id="scrollspy" class="space-y-10 md:space-y-16">
              <div id="first" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">Практический материал о HTML</h2>
                <iframe height="720" src="https://www.youtube.com/embed/DOEtVdkKwcU" width="1000"></iframe>
              </div>

              <div id="second" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">Выделение элементов</h2>
                <p class="text-2xl p-3 font-semibold text-gray-800 dark:text-white">&lt;em&gt;</p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white">Элемент
                  <span class="text-red-600">&lt;em&gt;</span>
                  предназначен для слов, которые имеют подчёркнутый акцент по сравнению с окружающим текстом, который
                  часто ограничивается словом или словами предложения и влияет на смысл самого предложения. Обычно этот
                  элемент отображается курсивом. Элемент
                  <span class="text-red-600">&lt;em&gt;</span> часто используется для указания неявного или явного
                  контраста.
                </p>
                <a class="text-amber-600 text-lg" href="https://developer.mozilla.org/ru/docs/Web/HTML/Element/em"
                   target="_blank">
                  Полная документация &lt;em&gt;</a>

                <p class="text-2xl p-3 font-semibold text-gray-800 dark:text-white">&lt;strong&gt;</p>

                <p class="text-lg font-semibold text-gray-800 dark:text-white">Элемент
                  <span class="text-red-600">&lt;strong&gt;</span>
                  предназначен для контента, который имеет "большое значение", включая вещи большой серьёзности или
                  срочности (например, предупреждения). Это может быть предложение, которое имеет большое значение для
                  всей страницы, или вы можете просто попытаться указать, что некоторые слова имеют большее значение по
                  сравнению с соседним контентом. Обычно этот элемент отображается по умолчанию с использованием жирного
                  шрифта.
                </p>
                <a class="text-amber-600 text-lg" href="https://developer.mozilla.org/ru/docs/Web/HTML/Element/strong"
                   target="_blank">
                  Полная документация &lt;strong&gt;</a>
              </div>
              <hr>
              <div id="third" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">Списки</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Упорядоченные (&lt;ol&gt;) и неупорядоченные(&lt;ul&gt;) списки
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  HTML-элемент <span class="text-red-600">&lt;ol&gt;</span> используется для упорядоченного списка — в
                  частности для пронумерованного списка, а &lt;ul&gt; для неупорядоченного списка - в частности для
                  маркированного списка.
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/HTML/Element/ol" target="_blank">
                    Полная документация &lt;ol&gt;
                  </a>
                  —
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/HTML/Element/ul" target="_blank">
                    Полная документация &lt;ul&gt;
                  </a>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Элементы <span class="text-red-600">&lt;ol&gt;</span> и <span class="text-red-600">&lt;ul&gt;</span>
                  используются для списков. Различие лишь в том, что в элементе <span
                    class="text-red-600">&lt;ol&gt;</span> порядок имеет значение. Согласно эмпирической закономерности
                  (или правилу большого пальца), чтобы определить, какую маркировку использовать, попробуйте поменять
                  порядок элементов в списке. Если суть списка меняется, то тогда подойдёт элемент <span
                    class="text-red-600">&lt;ol&gt;</span>, в противном случае используйте <span class="text-red-600">&lt;ul&gt;</span>.

                </p>

              </div>
              <hr>
              <div id="fourth" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Ссылки</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  HTML-элемент <span class="text-red-600">&lt;a&gt;</span> определяет гиперссылку для перехода на
                  определённое место на странице или на другую страницу в Интернете.
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/HTML/Element/a" target="_blank">
                    Полная документация &lt;a&gt;
                  </a>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Пример: <span class="text-red-600">
                &lt;a href="https://www.youtube.com/"&gt;Youtube&lt;/a&gt;
              </span>
                  — <a class="text-amber-600 text-lg"
                       href="https://www.youtube.com/" target="_blank">
                  Youtube
                </a>
                </p>
              </div>
              <hr>
              <div id="fifth" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Изображения</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  HTML-элемент <span class="text-red-600">&lt;img&gt;</span> встраивает изображение в документ.
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/HTML/Element/img" target="_blank">
                    Полная документация &lt;img&gt;
                  </a>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Атрибут <span class="text-red-600">src</span> обязателен и содержит путь к изображению, которое вы
                  хотите встроить в документ. Атрибут <span class="text-red-600">alt</span> содержит текстовое описание
                  изображения, которое не обязательно, но невероятно полезно для доступности — программы чтения с экрана
                  читают это описание своим пользователям, так они знают какое изображение показано, и так же оно
                  отображается на странице, если изображение не может быть загружено по какой-либо причине.
                </p>
              </div>
              <hr>
              <div id="sixth" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Таблицы</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  HTML-элемент <span class="text-red-600">&lt;table&gt;</span> представляет табличные данные, то есть
                  информацию, представленную в двумерной таблице, состоящей из строк и столбцов ячеек, содержащих
                  данные.
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table#try_it" target="_blank">
                    Полная документация &lt;table&gt;
                  </a>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Строки таблицы определяются <span class="text-red-600">&lt;tr&gt;</span> элементами, а столбцы
                  определяются заголовком таблицы и ячейками данных внутри них. Первая строка содержит ячейки заголовков
                  ( <span class="text-red-600">&lt;th&gt;</span> элементы), которые служат заголовками столбцов для
                  ячеек данных ( <span class="text-red-600">&lt;td&gt;</span> элементов). Каждый элемент ( <span
                    class="text-red-600">&lt;th&gt;</span> или <span class="text-red-600">&lt;td&gt;</span> ) в каждой
                  строке находится в соответствующем столбце, то есть первый элемент строки находится в первом столбце,
                  а второй элемент этой строки — во втором столбце.
                </p>
              </div>
              <hr>
              <div id="seventh" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Формы</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  HTML содержит некоторое количество элементов, которые используются вместе для создания форм, которые
                  пользователь может заполнить и отправить на сервер. Доступно множество информации по этой теме в
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Learn/Forms" target="_blank">
                    руководстве по HTML формам.
                  </a>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Основные элементы:
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  HTML-элемент <span class="text-red-600">&lt;form&gt;</span> представляет (собой) раздел документа,
                  содержащий интерактивные элементы управления, которые позволяют пользователю отправлять информацию на
                  веб-сервер.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  HTML-элемент <span class="text-red-600">&lt;input&gt;</span> используется для создания интерактивных
                  элементов управления в веб-формах для получения данных от пользователя; в зависимости от устройства,
                  доступен широкий выбор типов входных данных и виджетов управления. Из-за огромного количества
                  возможных сочетаний типов ввода и атрибутов это один из самых мощных и сложных элементов HTML.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  HTML-элемент <span class="text-red-600">&lt;label&gt;</span> представляет собой подпись к элементу
                  пользовательского интерфейса.
                </p>
                <a class="text-amber-600 text-lg"
                   href="https://developer.mozilla.org/ru/docs/Web/HTML/Element#%D1%84%D0%BE%D1%80%D0%BC%D1%8B"
                   target="_blank">
                  Все элементы для создания форм
                </a>
              </div>
              <hr>
              <div id="test" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <div
                    class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                  <div class="border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:border-gray-700">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-500">
                      Тест по пройденному материалу
                    </p>
                  </div>
                  <TestModule test-name="HTML"/>
                </div>
              </div>
            </div>
          </div>
          <!-- End Content -->
        </div>
      </div>
      <!-- End Content -->
    </div>
  </HeaderLayout>
</template>

<style scoped>

</style>