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
                  class="flex justify-between gap-x-2 items-center w-full text-gray-500 hover:text-gray-600"
                  data-hs-overlay="#docs-sidebar" type="button">
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
                class="ms-auto flex justify-end lg:hidden text-gray-500 hover:text-gray-600 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                data-hs-overlay="#docs-sidebar" type="button">
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
                href="#first">Практический материал о React</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#second">JSX</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#third">Fragment</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#fourth">Хуки</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#fifth">React Portal(порталы)</a></li>
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
            <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl dark:text-white">React</h1>
            <p class="mt-2 text-lg text-gray-800 dark:text-gray-400">
            <span class="text-red-600">
              React
            </span> — это <span class="text-red-600">библиотека JavaScript</span> с открытым кодом для создания внешних
              пользовательских интерфейсов. В отличие от других библиотек JavaScript,
              предоставляющих полноценную платформу приложений, React ориентируется исключительно на создание
              представлений приложений через инкапсулированные
              единицы (называются компонентами), которые сохраняют состояние и генерируют элементы пользовательского
              интерфейса.
            </p>
          </header>
          <!-- End Page Heading -->

          <!-- Content -->
          <div class="mt-16">
            <div id="scrollspy" class="space-y-10 md:space-y-16">
              <div id="first" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">Практический материал о React</h2>
                <iframe height="720" src="https://www.youtube.com/embed/kz23xxukY5s" width="1000"></iframe>
              </div>

              <div id="second" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">JSX</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white">
                  <span class="text-red-600">JSX</span> — расширение языка JavaScript. Мы рекомендуем использовать его,
                  когда требуется объяснить React, как должен выглядеть <span>UI (User Interface)</span>.
                  <span class="text-red-600">JSX</span> напоминает язык шаблонов, наделённый силой JavaScript.
                </p>

                <p class="text-2xl p-3 font-semibold text-gray-800 dark:text-white">
                  React исходит из принципа, что логика рендеринга неразрывно связана с прочей логикой UI: с тем, как
                  обрабатываются события,
                  как состояние изменяется во времени и как данные готовятся к отображению.
                </p>

                <p class="text-lg font-semibold text-gray-800 dark:text-white">
                  React можно использовать и без <span class="text-red-600">JSX</span>, но большинство людей ценит его
                  за наглядность при работе с UI, живущем в JavaScript-коде.
                  Помимо этого, <span class="text-red-600">JSX</span> помогает React делать сообщения об ошибках и
                  предупреждениях понятнее.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white">
                  React можно использовать и без <span class="text-red-600">JSX</span>, но большинство людей ценит его
                  за наглядность при работе с UI, живущем в JavaScript-коде.
                  Помимо этого, <span class="text-red-600">JSX</span> помогает React делать сообщения об ошибках и
                  предупреждениях понятнее.
                  <a class="text-amber-600 text-lg"
                     href="https://reactdev.ru/archive/react16/introducing-jsx/" target="_blank">
                    Полная документация о JSX
                  </a>
                </p>
              </div>
              <hr>
              <div id="third" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">Fragment</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  <span class="text-red-600">
                    &lt;Fragment&gt;
                  </span>, часто используемый через синтаксис
                  <span class="text-red-600">
                    &lt;&gt;...&lt;/&gt;
                  </span>, позволяет группировать элементы без узла-обертки.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Оберните элементы в <span class="text-red-600">&lt;Fragment&gt;</span>, чтобы сгруппировать их вместе
                  в ситуациях, когда вам нужен один элемент. Группировка элементов в <span
                    class="text-red-600">Fragment</span>
                  не влияет на результирующий DOM; он такой же, как если бы элементы не были сгруппированы.
                  Пустой <span class="text-red-600">JSX-тег &lt;&gt;&lt;/&gt;</span> в большинстве случаев является
                  сокращением для <span class="text-red-600">&lt;Fragment&gt;&lt;/Fragment&gt;</span>.
                  <a class="text-amber-600 text-lg"
                     href="https://reactdev.ru/reference/react/Fragment/" target="_blank">
                    Полная документация о Fragment
                  </a>
                </p>
              </div>
              <hr>
              <div id="fourth" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Хуки</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Описание
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  <span class="text-red-600">Хуки</span> — это функции, с помощью которых вы можете "подцепиться" к
                  состоянию и методам жизненного цикла React из функциональных компонентов.
                  Хуки не работают внутри классов — они дают вам возможность использовать React без классов.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  React содержит несколько встроенных хуков, таких как <span class="text-red-600">useState</span>. Вы
                  также можете создавать собственные хуки, чтобы повторно использовать их в других своих компонентах.
                  <a class="text-amber-600 text-lg"
                     href="https://reactdev.ru/archive/react16/hooks-overview/" target="_blank">
                    Полная документация о хуках
                  </a>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  useState
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  <span class="text-red-600">useState</span> — это хук, который мы вызываем, чтобы наделить наш
                  функциональный компонент внутренним состоянием. React будет хранить это состояние между рендерами.
                  Вызов <span class="text-red-600">useState</span> возвращает две вещи: текущее значение состояния и
                  функцию для его обновления. Эту функцию можно использовать где угодно, например, в обработчике
                  событий.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Единственный аргумент <span class="text-red-600">useState</span> — это начальное состояние. Состояние
                  может, но не обязано, быть объектом. Исходное значение аргумента используется только при первом
                  рендере.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  useEffect
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  С помощью хука эффекта <span class="text-red-600">useEffect</span> вы можете выполнять побочные
                  эффекты из функционального компонента.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Когда вы вызываете <span class="text-red-600">useEffect</span>, React получает указание запустить вашу
                  функцию с "эффектом" после того, как он отправил изменения в DOM.
                  Поскольку эффекты объявляются внутри компонента, у них есть доступ к его пропсам и состоянию. По
                  умолчанию, React запускает эффекты после каждого рендера, включая первый рендер.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  useRef
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  <span class="text-red-600">useRef</span> возвращает изменяемый <span
                    class="text-red-600">ref-объект</span>, свойство <span class="text-red-600">.current</span> которого
                  инициализируется переданным аргументом.
                  Возвращённый объект будет сохраняться в течение всего времени жизни компонента.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  По сути, <span class="text-red-600">useRef</span> похож на «коробку», которая может содержать
                  изменяемое значение в своём свойстве <span class="text-red-600">.current</span>.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Если вы передадите React объект рефа с помощью подобного выражения <span class="text-red-600">&lt;div ref={myRef}/&gt;</span>,
                  React установит собственное свойство <span class="text-red-600">.current</span>
                  на соответствующий DOM-узел при каждом его изменении.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Но хук <span class="text-red-600">useRef()</span> полезен не только установкой атрибута с рефом. Он
                  удобен для сохранения любого мутируемого значения.
                  Это возможно, поскольку <span class="text-red-600">useRef()</span> создаёт обычный JavaScript-объект.
                  Единственная разница между <span class="text-red-600">useRef()</span> и просто созданием самого
                  объекта
                  <span class="text-red-600">{current: ...}</span>— это то, что хук useRef даст один и тот же объект с
                  рефом при каждом рендере.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Имейте в виду, что <span class="text-red-600">useRef</span> не уведомляет вас, когда изменяется его
                  содержимое. Мутирование свойства <span>.current</span> не вызывает повторный рендер.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  useCallback
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  <span class="text-red-600">useCallback</span> возвращает мемоизированный колбэк.
                  <a class="text-amber-600 text-lg"
                     href="https://ru.wikipedia.org/wiki/Callback_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)"
                     target="_blank">
                    Callback (колбэк)
                  </a> или функция обратного вызова в программировании — передача исполняемого кода в качестве одного
                  из параметров другому коду.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  <a class="text-amber-600 text-lg"
                     href="https://ru.wikipedia.org/wiki/%D0%9C%D0%B5%D0%BC%D0%BE%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F"
                     target="_blank">
                    Мемоизация (Кэш)
                  </a> (англ. memoization от англ. memory и англ. optimization) — пример использования кэша при
                  разработке программного обеспечения,
                  в программировании сохранение результатов выполнения функций для предотвращения повторных вычислений.
                  Это один из способов оптимизации,
                  применяемый для увеличения скорости выполнения компьютерных программ.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Передайте встроенный колбэк и массив зависимостей. Хук <span class="text-red-600">useCallback</span>
                  вернёт мемоизированную версию колбэка, который изменяется только,
                  если изменяются значения одной из зависимостей. Это полезно при передаче колбэков оптимизированным
                  дочерним компонентам,
                  которые полагаются на равенство ссылок для предотвращения ненужных рендеров.
                </p>
              </div>
              <hr>
              <div id="fifth" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">React Portal(порталы)</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  <span class="text-red-600">Порталы</span> позволяют рендерить дочерние элементы в DOM-узел, который
                  находится вне DOM-иерархии родительского компонента.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  <span class="text-red-600">ReactDOM.createPortal(child, container)</span>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Первый аргумент (<span class="text-red-600">child</span>) — это любой React-компонент, который может
                  быть отрендерен, такой как элемент, строка или фрагмент.
                  Следующий аргумент (<span class="text-red-600">container</span>) — это DOM-элемент.
                  <a class="text-amber-600 text-lg"
                     href="https://reactdev.ru/archive/react16/portals/" target="_blank">
                    Полная документация о порталах
                  </a>
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
                  <TestModule test-name="REACT"/>
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