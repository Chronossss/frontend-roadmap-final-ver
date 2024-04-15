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
                href="#first">Практический материал о JavaScript</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#second">Переменные</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#third">Типы данных</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#fourth">Массивы</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#fifth">Числа</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#sixth">Строки</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#seventh">Функции</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#eighth">Объекты</a></li>
            <li><a
                class="block py-1 ps-4 -ms-px border-s-2 border-transparent text-sm text-slate-700 hover:border-slate-400 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 hs-scrollspy-active:font-medium hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#ninth">Классы</a></li>
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
            <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl dark:text-white">JavaScript</h1>
            <p class="mt-2 text-lg text-gray-800 dark:text-gray-400">
            <span class="text-red-600">
              JavaScript (JS)
            </span> — это легковесный интерпретируемый язык программирования с функциями первого класса.
              Наиболее широкое применение находит как язык сценариев веб-страниц, но также используется и в других
              программных продуктах, например,
              <span class="text-red-600">Node.js</span> или <span class="text-red-600">Apache CouchDB</span>. <span
                class="text-red-600">JavaScript</span> это прототипно-ориентированный, мультипарадигменный язык с
              динамической типизацией,
              который поддерживает объектно-ориентированный, императивный и декларативный стили программирования.
            </p>
          </header>
          <!-- End Page Heading -->

          <!-- Content -->
          <div class="mt-16">
            <div id="scrollspy" class="space-y-10 md:space-y-16">
              <div id="first" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">Практический материал о JavaScript</h2>
                <iframe height="720" src="https://www.youtube.com/embed/fcMcf_4PjfI" width="1000"></iframe>
              </div>

              <div id="second" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">Переменные</h2>
                <p class="text-2xl p-3 font-semibold text-gray-800 dark:text-white">const</p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white">
                  <span class="text-red-600">const</span>
                  создаёт константу, чья область действия может быть как глобальной, так и локальной внутри блока,
                  в котором она объявлена. Глобальные константы не становятся свойствами объекта window, в отличие от
                  <span class="text-red-600">var</span> менных.
                  Инициализация константы обязательна; необходимо указать значение одновременно с объявлением (смысл в
                  том, что потом это значение изменить уже нельзя).
                </p>
                <a class="text-amber-600 text-lg"
                   href="https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Statements/const"
                   target="_blank">
                  Полная документация const</a>

                <p class="text-2xl p-3 font-semibold text-gray-800 dark:text-white">let</p>

                <p class="text-lg font-semibold text-gray-800 dark:text-white">Директива
                  <span class="text-red-600">let</span>
                  объявляет переменную с блочной областью видимости с возможностью инициализировать её значением.
                </p>
                <a class="text-amber-600 text-lg"
                   href="https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Statements/let#%D0%BE%D0%BF%D0%B8%D1%81%D0%B0%D0%BD%D0%B8%D0%B5"
                   target="_blank">
                  Полная документация let</a>
              </div>
              <hr>
              <div id="third" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">Типы данных</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  JavaScript является слабо типизированным или динамическим языком. Это значит, что вам не нужно
                  определять тип переменной заранее.
                  Тип определится автоматически во время выполнения программы. Также это значит, что вы можете
                  использовать одну переменную для хранения данных различных типов:
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Стандарт ECMAScript определяет 8 типов:
                  <ul class="list-disc list-inside text-gray-800 dark:text-white">
                    <li><span class="text-red-600">Undefined</span> (Неопределённый тип)</li>
                    <li>
                      <span class="text-red-600">Boolean</span> (Логический тип)
                    </li>
                    <li>
                      <span class="text-red-600">Number</span> (Число)
                    </li>
                    <li>
                      <span class="text-red-600">String</span> (Строка)
                    </li>
                    <li>
                      <span class="text-red-600">BigInt</span> (Большие числа)
                    </li>
                    <li>
                      <span class="text-red-600">Symbol</span> (Уникальные идентификаторы)
                    </li>
                    <li>
                      <span class="text-red-600">Null</span> (Специальный примитив, используемый не только для данных но
                      и в качестве указателя на финальную точку в Цепочке Прототипов)
                    </li>
                    <li>
                      <span class="text-red-600">Object</span> (Простая структура, используемая не только для хранения
                      данных, но и для создания других структур,
                      где любая структура создаётся с использованием ключевого слова new: new Object, new Array, new Map
                      (en-US),
                      new Set, new WeakMap, new WeakSet, new Date и множество других структур)
                    </li>
                  </ul>
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/JavaScript/Data_structures"
                     target="_blank">Полная документация о типах данных</a>
                </p>
              </div>
              <hr>
              <div id="fourth" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Массивы</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Описание
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Объект <span class="text-red-600">Array</span>, как и массивы в других языках программирования,
                  позволяет хранить коллекцию из нескольких элементов под одним именем переменной и
                  имеет методы для выполнения общих операций с массивами.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Массивы являются спископодобными объектами, чьи прототипы содержат методы для операций обхода и
                  изменения массива. Ни размер JavaScript-массива,
                  ни типы его элементов не являются фиксированными. Поскольку размер массива может увеличиваться и
                  уменьшаться в любое время, то нет гарантии, что массив окажется плотным.
                  То есть, при работе с массивом может возникнуть ситуация, что элемент массива, к которому вы
                  обратитесь, будет пустым и вернёт <span class="text-red-600">undefined</span>
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Global_Objects/Array"
                     target="_blank">
                    Полная документация о массивах
                  </a>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">Основные методы:
                  <ul class="list-disc list-inside text-gray-800 dark:text-white">
                    <li>
                      <span class="text-red-600">push</span>
                      Добавляет один или более элементов в конец массива и возвращает новое значение
                      <span class="text-red-600">length</span> массива.
                    </li>
                    <li>
                      <span class="text-red-600">unshift</span>
                      Добавляет один или более элементов в начало массива и возвращает новое значение
                      <span class="text-red-600">length</span> массива.
                    </li>
                    <li>
                      <span class="text-red-600">shift</span>
                      Удаляет первый элемент массива и возвращает его значение.
                    </li>
                    <li>
                      <span class="text-red-600">pop</span>
                      Удаляет последний элемент массива и возвращает его значение.
                    </li>
                    <li>
                      <span class="text-red-600">reverse</span>
                      Изменяет порядок элементов массива на месте
                      (то есть изменяя исходный массив) на обратный (первый станет последним, последний — первым).
                    </li>
                    <li>
                      <span class="text-red-600">toReversed</span>
                      Возвращает новый массив с элементами в обратном порядке без изменения исходного массива.
                    </li>
                    <li>
                      <span class="text-red-600">sort</span>
                      Сортирует элементы массива на месте (то есть изменяя исходный массив) и возвращает массив.
                    </li>
                    <li>
                      <span class="text-red-600">toSorted</span>
                      Возвращает новый массив с отсортированными по возрастанию элементами без изменения исходного
                      массива.
                    </li>
                    <li>
                      <span class="text-red-600">splice</span>
                      Добавляет и/или удаляет элементы массива.
                    </li>
                    <li>
                      <span class="text-red-600">toSpliced</span>
                      Возвращает новый массив с удалёнными и/или заменёнными элементами без изменения исходного массива.
                    </li>
                    <li>
                      <span class="text-red-600">indexOf</span>
                      Возвращает первый (наименьший) индекс, по которому может быть найден переданный элемент.
                    </li>
                    <li>
                      <span class="text-red-600">with</span>
                      Возвращает новый массив с заменённым значением элемента с указанным индексом без изменения
                      исходного массива.
                    </li>
                    <li>
                      <span class="text-red-600">map</span>
                      Возвращает новый массив, содержащий результат применения переданной функции к каждому элементу
                      исходного массива.
                    </li>
                    <li>
                      <span class="text-red-600">forEach</span>
                      Вызывает функцию для каждого элемента массива.
                    </li>
                    <li>
                      <span class="text-red-600">includes</span>
                      Возвращает <span>true</span>, если массив содержит переданное значение и <span>false</span> в
                      противном случае.
                    </li>
                    <li>
                      <span class="text-red-600">find</span>
                      Возвращает значение первого элемента массива, для которого переданная в качестве аргумента функция
                      возвращает <span>true</span>, или <span>undefined</span> если таких элементов нет.
                    </li>
                    <li>
                      <span class="text-red-600">findIndex</span>
                      Возвращает индекс первого элемента массива, для которого переданная в качестве аргумента функция
                      возвращает <span>true</span>, или <span>-1</span> если таких элементов нет.
                    </li>
                    <li>
                      <span class="text-red-600">filter</span>
                      Возвращает новый массив, содержащий все элементы исходного массива, для которых переданная функция
                      вернула <span>true</span>.
                    </li>
                    <li>
                      <span class="text-red-600">reduce</span>
                      Вызывает указанную функцию-редьюсер для каждого элемента массива (слева направо) для получения
                      единственного значения.
                    </li>
                    <li>
                      <span class="text-red-600">join</span>
                      Объединяет все элементы массива в строку.
                    </li>
                  </ul>
                </p>
              </div>
              <hr>
              <div id="fifth" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Числа</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Значения <span class="text-red-600">Number</span> представляют числа с плавающей запятой, такие как 37
                  или -9,25.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Конструктор <span class="text-red-600">Number</span> содержит константы и методы для работы с числами.
                  Значения других типов могут быть преобразованы в числа с помощью функции
                  <span class="text-red-600">Number()</span>
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Global_Objects/Number"
                     target="_blank">
                    Полная документация о Number
                  </a>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Основные методы Number:
                  <ul class="list-disc list-inside text-gray-800 dark:text-white">
                    <li>
                      <span class="text-red-600">MAX_SAFE_INTEGER</span> Максимальное целое число, которое можно
                      безопасно использовать в JavaScript (2^53 - 1).
                    </li>
                    <li>
                      <span class="text-red-600">MIN_SAFE_INTEGER</span> Минимальное целое число, которое можно
                      безопасно использовать в JavaScript (-(2^53 - 1)).
                    </li>
                    <li>
                      <span class="text-red-600">MAX_VALUE</span> Наибольшее представимое положительное число.
                    </li>
                    <li>
                      <span class="text-red-600">MIN_VALUE</span> Наименьшее представимое положительное число, то есть
                      самое близкое к нулю положительное число (которое ещё не является нулём).
                    </li>
                    <li>
                      <span class="text-red-600">POSITIVE_INFINITY</span> Специальное значение для представления
                      бесконечности. Возвращается при переполнении.
                    </li>
                    <li>
                      <span class="text-red-600">NEGATIVE_INFINITY</span> Специальное значение для представления
                      отрицательной бесконечности. Возвращается при переполнении.
                    </li>
                    <li>
                      <span class="text-red-600">isFinite()</span> Определяет, является ли переданное значение конечным
                      числом.
                    </li>
                    <li>
                      <span class="text-red-600">isNaN()</span> Определяет, является ли переданное значение значением
                      <span>NaN</span>.
                    </li>
                    <li>
                      <span class="text-red-600">parseInt()</span> Принимает строку в качестве аргумента и возвращает
                      целое число в соответствии с указанным основанием системы счисления.
                    </li>
                    <li>
                      <span class="text-red-600">parseFloat()</span> Принимает строку в качестве аргумента и возвращает
                      десятичное число (число с плавающей точкой).
                    </li>
                    <li>
                      <span class="text-red-600">toFixed()</span> Возвращает строку, представляющую число в записи с
                      фиксированной точкой.
                    </li>
                  </ul>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Math
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">Объект <span class="text-red-600">Math</span>является
                  встроенным объектом, хранящим в своих свойствах и методах различные математические константы и
                  функции.
                  Объект <span class="text-red-600">Math</span> не является функциональным объектом.
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Global_Objects/Math"
                     target="_blank">
                    Полная документация о Math
                  </a>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Основные методы Math:
                  <ul class="list-disc list-inside text-gray-800 dark:text-white">
                    <li>
                      <span class="text-red-600">pow(a, n)</span> Возвращает <span class="text-red-600">a</span> в <span
                        class="text-red-600">n-й</span> степени, то есть <span class="text-red-600">a^n</span>
                    </li>
                    <li>
                      <span class="text-red-600">E</span> Число Эйлера или Непера, основание натуральных логарифмов,
                      приблизительно равное 2,718
                    </li>
                    <li>
                      <span class="text-red-600">PI</span> Отношение длины окружности круга к его диаметру,
                      приблизительно равно 3,14159
                    </li>
                    <li>
                      <span class="text-red-600">sqrt(x)</span> Возвращает положительный квадратный корень числа
                    </li>
                    <li>
                      <span class="text-red-600">abs(x)</span> Возвращает абсолютное значение числа
                    </li>
                    <li>
                      <span class="text-red-600">max([x[, y[, …]]])</span> Возвращает наибольшее число из своих
                      аргументов
                    </li>
                    <li>
                      <span class="text-red-600">min([x[, y[, …]]])</span> Возвращает наименьшее число из своих
                      аргументов
                    </li>
                    <li>
                      <span class="text-red-600">floor(x)</span> Возвращает значение числа, округлённое к меньшему
                      целому
                    </li>
                    <li>
                      <span class="text-red-600">ceil(x)</span> Возвращает значение числа, округлённое к большему целому
                    </li>
                    <li>
                      <span class="text-red-600">round(x)</span> Возвращает значение числа, округлённое до ближайшего
                      целого
                    </li>
                    <li>
                      <span class="text-red-600">trunc(x)</span> Возвращает целую часть числа, убирая дробные цифры
                    </li>
                    <li>
                      <span class="text-red-600">random()</span> Возвращает псевдослучайное число в диапазоне от 0 до 1
                    </li>
                  </ul>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">BigInt</p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5"><span
                    class="text-red-600">BigInt</span> это встроенный объект, который предоставляет способ представлять
                  целые числа больше 2^53 - 1, наибольшего числа,
                  которое JavaScript может надёжно представить с <span class="text-red-600">Number</span> примитивом.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5"><span
                    class="text-red-600">BigInt</span> создаётся путём добавления <span class="text-red-600">n</span>
                  в конец целочисленного литерала — <span class="text-red-600">10</span> — или вызовом функции <span
                      class="text-red-600">BigInt()</span>.</p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  В некотором смысле он похож на <span class="text-red-600">Number</span>, но отличается в некоторых
                  ключевых моментах —
                  его нельзя использовать с методами во встроенном объекте <span class="text-red-600">Math</span> и
                  нельзя смешивать в операциях с любыми экземплярами <span class="text-red-600">Number</span>.
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Global_Objects/BigInt"
                     target="_blank">
                    Полная документация о BigInt
                  </a>
                </p>

              </div>
              <hr>
              <div id="sixth" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Строки</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Описание
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  <span class="text-red-600">Строки</span> полезны для хранения данных, которые можно представить в
                  текстовой форме. Некоторые из наиболее частых операций со строками — это проверка их длины,
                  построение строки с помощью операций строковой конкатенации <span class="text-red-600">+</span> и
                  <span class="text-red-600">+=</span>, проверка на существование или местоположение подстрок с помощью
                  метода
                  <span class="text-red-600">indexOf()</span>, либо извлечение подстрок с помощью метода <span
                    class="text-red-600">substring()</span>.
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Global_Objects/String"
                     target="_blank">
                    Полная документация о строках
                  </a>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">Конкатенация</p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Если применить оператор <span>+</span> к строке и любому другому типу данных, результатом операции
                  «сложения» будет строка.
                  Эта операция называется конкатенация, или сложение строк.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Во время конкатенации, любой тип данных приводится к строке и сшивается со строкой, но есть
                  особенность — последовательность записи операндов.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Последовательность операций имеет значение, преобразование типов происходит только в момент операции
                  сложения со строкой, до этого момента действуют привычные правила математики.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Основные методы строк:
                  <ul class="list-disc list-inside text-gray-800 dark:text-white">
                    <li>
                      <span class="text-red-600">pow(a, n)</span> Возвращает <span class="text-red-600">a</span> в <span
                        class="text-red-600">n-й</span> степени, то есть <span class="text-red-600">a^n</span>
                    </li>
                    <li>
                      <span class="text-red-600">E</span> Число Эйлера или Непера, основание натуральных логарифмов,
                      приблизительно равное 2,718
                    </li>
                    <li>
                      <span class="text-red-600">PI</span> Отношение длины окружности круга к его диаметру,
                      приблизительно равно 3,14159
                    </li>
                    <li>
                      <span class="text-red-600">sqrt(x)</span> Возвращает положительный квадратный корень числа
                    </li>
                    <li>
                      <span class="text-red-600">abs(x)</span> Возвращает абсолютное значение числа
                    </li>
                    <li>
                      <span class="text-red-600">max([x[, y[, …]]])</span> Возвращает наибольшее число из своих
                      аргументов
                    </li>
                    <li>
                      <span class="text-red-600">min([x[, y[, …]]])</span> Возвращает наименьшее число из своих
                      аргументов
                    </li>
                    <li>
                      <span class="text-red-600">floor(x)</span> Возвращает значение числа, округлённое к меньшему
                      целому
                    </li>
                    <li>
                      <span class="text-red-600">ceil(x)</span> Возвращает значение числа, округлённое к большему целому
                    </li>
                    <li>
                      <span class="text-red-600">round(x)</span> Возвращает значение числа, округлённое до ближайшего
                      целого
                    </li>
                    <li>
                      <span class="text-red-600">trunc(x)</span> Возвращает целую часть числа, убирая дробные цифры
                    </li>
                    <li>
                      <span class="text-red-600">random()</span> Возвращает псевдослучайное число в диапазоне от 0 до 1
                    </li>
                  </ul>
                </p>
              </div>
              <hr>
              <div id="seventh" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Функции</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Описание
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  <span class="text-red-600">Функция</span> в JavaScript специальный тип объектов, позволяющий
                  формализовать средствами языка определённую логику поведения и обработки данных.
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/JavaScript/Guide/Functions#%D0%BE%D0%B1%D1%8A%D1%8F%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5_%D1%84%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%B9"
                     target="_blank">
                    Полная документация о функциях
                  </a>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Объявление
                  <ul class="list-disc list-inside text-gray-800 dark:text-white">
                    <li><span class="text-red-600">Function Declaration</span> – функция, объявленная в основном потоке
                      кода.
                    </li>
                    <li><span class="text-red-600">Function Expression</span> – объявление функции в контексте
                      какого-либо выражения, например присваивания.
                    </li>
                  </ul>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Основное отличие между ними: функции, объявленные как Function Declaration, создаются интерпретатором
                  до выполнения кода, поэтому их можно вызвать до объявления в
                  отличии от Function Expression.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Это из-за того, что JavaScript перед запуском кода ищет в нём Function Declaration (их легко найти:
                  они не являются частью выражений
                  и начинаются со слова <span class="text-red-600">function</span>) и обрабатывает их. А Function
                  Expression создаются в процессе выполнения выражения, в котором созданы, например – функция будет
                  создана при операции присваивания <span class="text-red-600">name = function...</span></p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Как правило, возможность Function Declaration вызвать функцию до объявления – это удобно, так как даёт
                  больше свободы в том, как организовать свой код.
                  Можно расположить функции внизу, а их вызов – сверху или наоборот.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Стрелочные функции
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Выражения стрелочных функций имеют более короткий синтаксис по сравнению с <span class="text-red-600">функциональными выражениями(function)</span>
                  и лексически привязаны к значению <span class="text-red-600">this</span>.
                  Выражение стрелочных функций не позволяют задавать имя, поэтому стрелочные функции анонимны, если их
                  ни к чему не присвоить.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Пример:
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">(параметры) => { выражение }</p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Замыкания
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5"><span class="text-red-600">Замыкание</span>
                  это одна из главных особенностей JavaScript. JavaScript разрешает вложенность функций и предоставляет
                  вложенной функции полный доступ
                  ко всем переменным и функциям, объявленным внутри внешней функции (и другим переменным и функции, к
                  которым имеет доступ эта внешняя функция).</p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">Однако, внешняя функция не имеет
                  доступа к переменным и функциям, объявленным во внутренней функции. Это обеспечивает своего рода
                  инкапсуляцию
                  для переменных внутри вложенной функции.</p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">Также, поскольку вложенная функция
                  имеет доступ к внешней функции, переменные и функции, объявленные во внешней функции, будут продолжать
                  существовать и после её выполнения для вложенной функции, если на них и на неё сохранился доступ
                  (имеется ввиду, что переменные, объявленные во
                  внешней функции, сохраняются, только если внутренняя функция обращается к ним).</p>
              </div>
              <hr>
              <div id="eighth" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Объекты</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  <span class="text-red-600">Объект в JavaScript</span> — это набор свойств, и каждое свойство состоит
                  из имени и значения, ассоциированного с этим именем. Значением свойства может быть функция,
                  которую можно назвать <span class="text-red-600">методом</span> объекта. В дополнение к встроенным в
                  браузер объектам, вы можете определить свои собственные объекты.</p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">Объекты в JavaScript, как и во
                  многих других языках программирования, похожи на объекты реальной жизни. Концепцию объектов JavaScript
                  легче понять,
                  проводя параллели с реально существующими в жизни объектами.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  В JavaScript объект — это самостоятельная единица, имеющая свойства и определённый тип. Сравним,
                  например, с чашкой. У чашки есть цвет, форма,
                  вес, материал, из которого она сделана, и т.д. Точно так же, объекты JavaScript имеют свойства,
                  которые определяют их характеристики.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">Почти все объекты в JavaScript
                  являются экземплярами <span class="text-red-600">Object</span>; типичный объект наследует свойства
                  (включая методы) от <span class="text-red-600">Object.prototype</span>,
                  хотя эти свойства могут быть затенены (т.е. переопределены). Единственные объекты, которые не
                  наследуют от <span class="text-red-600">Object.prototype</span>, - это те,
                  у которых прототип <span class="text-red-600">null</span>, или которые происходят от других объектов с
                  прототипом <span class="text-red-600">null</span>.
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Global_Objects/Object"
                     target="_blank">
                    Полная документация об объектах
                  </a>
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/JavaScript/Guide/Working_with_objects#%D0%BF%D0%B5%D1%80%D0%B5%D1%87%D0%B8%D1%81%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5_%D0%B2%D1%81%D0%B5%D1%85_%D1%81%D0%B2%D0%BE%D0%B9%D1%81%D1%82%D0%B2_%D0%BE%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%B0"
                     target="_blank">
                    Полная документация о работе с объектами
                  </a>
                </p>

              </div>
              <hr>
              <div id="ninth" class="scroll-mt-24 min-h-[25rem] [--scrollspy-offset:150]">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Классы</h2>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  <span class="text-red-600">Классы</span> — это "специальные функции", поэтому точно также, как вы
                  определяете функции (<span class="text-red-600">function expressions</span> и <span
                    class="text-red-600">function declarations</span>),
                  вы можете определять и классы с помощью: <span class="text-red-600">class declarations</span> и <span
                    class="text-red-600">class expressions</span>.
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">
                  Разница между объявлением функции (function declaration) и объявлением класса (class declaration) в
                  том, что объявление функции совершает <span>подъём (hoisting)</span>,
                  в то время как объявление класса — нет. Поэтому вначале необходимо объявить ваш класс и только затем
                  работать с ним
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Global_Objects/Object"
                     target="_blank">
                    Полная документация об объектах
                  </a>
                </p>
                <p class="text-lg font-semibold text-gray-800 dark:text-white p-2.5">Ключевое слово <span
                    class="text-red-600">extends (наследование)</span> используется в объявлениях классов и выражениях
                  классов для создания класса, дочернего относительно другого класса.
                  <a class="text-amber-600 text-lg"
                     href="https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Classes#%D0%BD%D0%B0%D1%81%D0%BB%D0%B5%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%BE%D0%B2_%D1%81_%D0%BF%D0%BE%D0%BC%D0%BE%D1%89%D1%8C%D1%8E_extends"
                     target="_blank">
                    Полная документация о классах
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
                  <TestModule test-name="JS"/>
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