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
            <span class="text-sm">Переключить навигацию</span>
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
          <span class="sr-only">Переключить навигацию</span>
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
                href="#first">Практический материал о CSS</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#second">Background и color</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#third">Fonts</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#fourth">Box Model</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#fifth">Внешние, внутренние отступы и рамки</a></li>
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
            <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl dark:text-white">CSS</h1>
            <p class="mt-2 text-lg text-gray-800 dark:text-gray-400">
            <span class="text-red-600">
              Cascading Style Sheets (CSS)
            </span> - это язык иерархических правил (таблиц стилей), используемый для представления внешнего вида
              документа, написанного на HTML или XML (включая различные языки XML, такие как SVG и XHTML). CSS
              описывает, каким образом элемент должен отображаться на экране, на бумаге, голосом или с использованием
              других медиа средств.
            </p>
          </header>
          <!-- End Page Heading -->

          <!-- Content -->
          <div class="mt-16">
            <div id="scrollspy" class="space-y-10 md:space-y-16">
              <div id="first" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">Практический материал о CSS</h2>
                <iframe height="720" src="https://www.youtube.com/embed/SpCUuyZZTp8" width="1000"></iframe>
              </div>

              <div id="second" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">Background и color</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white">CSS-свойство
                  <span class="text-red-600">background-color</span>
                  CSS устанавливает цвет фона элемента.
                </p>
                <p class="text-lg p-2 font-semibold text-gray-800 dark:text-white">Пример: <span class="bg-red-700">background-color: red;</span>
                </p>
                <a class="text-amber-600 text-lg" href="https://developer.mozilla.org/ru/docs/Web/CSS/background-color"
                   target="_blank">
                  Документация background-color</a>

                <p class="text-lg p-1.5 font-semibold text-gray-800 dark:text-white">Свойство
                  <span class="text-red-600">color</span> CSS устанавливает значение цвета переднего плана текста
                  элемента и текстовых украшений.</p>
                <p class="text-lg p-2 font-semibold text-gray-800 dark:text-white">Пример:
                  <span class="text-green-700">color: #00a400;</span></p>

                <a class="text-amber-600 text-lg" href="https://developer.mozilla.org/en-US/docs/Web/CSS/color"
                   target="_blank">Документация color</a>
              </div>
              <hr>
              <div id="third" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">Fonts</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  CSS-свойство <span class="text-red-600">font</span> является сокращением для
                  <span class="text-red-600">font-style</span>, <span class="text-red-600">font-variant (en-US)</span>,
                  <span class="text-red-600">font-weight</span>, <span class="text-red-600">font-stretch (en-US)</span>,
                  <span class="text-red-600">font-size</span>, <span class="text-red-600">line-height</span> и <span
                    class="text-red-600">font-family</span>. Кроме того, он позволяет установить системный шрифт для
                  элементов интерфейса.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/CSS/font" target="_blank">
                    Документация font
                  </a>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  CSS свойство <span class="text-red-600">font-weight</span> устанавливает начертание шрифта. Некоторые
                  шрифты доступны только в нормальном или полужирном начертании.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Пример: <span class="font-bold text-blue-600">font-weight: bold</span>
                </p>

                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  CSS свойство <span class="text-red-600">font-size</span> пределяет размер шрифта. Это свойство также
                  используется для вычисления размера
                  <span class="text-red-600">em</span>, <span class="text-red-600">ex</span> и других относительных
                  единиц.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Пример: <span class="font-bold text-blue-600">font-size: large</span>
                </p>

                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  CSS свойство <span class="text-red-600">font-family</span> определяет приоритетный список из одного
                  или нескольких названий семейства шрифтов и/или общее имя шрифта для выбранного элемента.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Пример: <span class="font-bold text-blue-600"> font-family: Ariel, sans-serif</span>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Документации:
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/CSS/font-weight" target="_blank">
                    font-weight
                  </a>,
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/CSS/font-size" target="_blank">
                    font-size
                  </a>,
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/CSS/font-family" target="_blank">
                    font-family
                  </a>
                </p>
              </div>
              <hr>
              <div id="fourth" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Box Model</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  В CSS мы, говоря упрощённо, имеем два типа элементов —
                  <span class="text-red-600">блочные</span> и <span class="text-red-600">строчные</span>.
                  Эти характеристики относятся к поведению блоков в контексте потока страницы и относительно других
                  блоков на странице.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Если элемент определён как блочный, то он будет вести себя следующим образом:
                  <ul class="list-disc list-inside text-gray-800 dark:text-white">
                    <li>Начнётся с новой строки.</li>
                    <li>Будет расширяться вдоль строки таким образом, чтобы заполнить всё пространство, доступное в её
                      контейнере. В большинстве случаев это означает, что блок станет такой же ширины, как и его
                      контейнер, заполняя 100% доступного пространства.
                    </li>
                    <li>Будут применяться свойства <span class="text-red-600">width</span> и <span class="text-red-600">height</span>
                    </li>
                    <li>Внешние и внутренние отступы, рамка будут отодвигать от него другие элементы.</li>
                  </ul>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Если не изменить намеренно тип отображения на строчный, то такие элементы, как заголовки (например,
                  <span class="text-red-600">&lt;h1&gt;</span>) и <span class="text-red-600">&lt;p&gt;</span>, все
                  используют <span class="text-red-600">block</span> как свой внешний тип отображения по умолчанию.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Если элемент имеет тип отображения <span class="text-red-600">inline</span> (строчный), то:
                  <ul class="list-disc list-inside text-gray-800 dark:text-white">
                    <li>Он не будет начинаться с новой строки.</li>
                    <li>Свойства <span class="text-red-600">width</span> и <span class="text-red-600">height</span> не
                      будут применяться.
                    </li>
                    <li>Вертикальные внешние и внутренние отступы, рамки будут применяться, но не будут отодвигать
                      другие строчные элементы.
                    </li>
                    <li>Горизонтальные внешние и внутренние отступы, рамки будут применяться и будут отодвигать другие
                      строчные элементы.
                    </li>
                  </ul>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Элемент <span class="text-red-600">&lt;a&gt;</span>, используемый для ссылок,
                  <span class="text-red-600">&lt;em&gt;</span> и <span class="text-red-600">&lt;span&gt;</span>
                  — всё это примеры по умолчанию строчных элементов.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Тип отображения, применяемый к элементу, определяется значениями свойства <span class="text-red-600">display</span>,
                  такими как <span class="text-red-600">block</span> и <span class="text-red-600">inline</span>, и
                  относится к внешнему значению <span class="text-red-600">display</span>.
                </p>
                <a class="text-amber-600 text-lg"
                   href="https://developer.mozilla.org/ru/docs/Learn/CSS/Building_blocks/The_box_model" target="_blank">
                  Документация Box Model
                </a>
              </div>
              <hr>
              <div id="fifth" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Внешние, внутренние отступы и
                  рамки</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Внешний отступ (<span class="text-red-600">margin</span> ) — это невидимое пространство вокруг вашего
                  элемента. Оно отталкивает другие элементы от него. Внешний отступ может быть как положительным, так и
                  отрицательным. Негативное значение может привести к перекрытию некоторых элементов страницы.

                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Рамка располагается между margin и padding блочного элемента. Вы можете установить ширину, стиль или
                  цвет рамки, используя свойство
                  <span class="text-red-600">border</span>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Внутренний отступ (<span class="text-red-600">margin</span>) расположен между рамкой и областью
                  контента блока. В отличии от внешних отступов (
                  <span class="text-red-600">margin</span>), вы не можете использовать отрицательные значения для
                  padding: они должны быть положительными или равными 0. Любой применённый к вашим элементам фон будет
                  отображаться под областью padding, поэтому внутренний отступ обычно используется, чтобы отодвинуть
                  контент от рамок.
                </p>
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
                  <TestModule test-name="CSS"/>
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