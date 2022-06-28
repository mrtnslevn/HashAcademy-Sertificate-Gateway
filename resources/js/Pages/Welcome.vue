<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import { ref } from "vue";
import AppBawah from "../Layouts/AppBawah.vue";
defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  CodeQR: String,
});

const NavbarResponsiveOpen = ref(false);
</script>

<template>
  <Head title="Cari Sertifikat Anda" />

  <nav class="bg-white shadow dark:bg-gray-800">
    <div class="container px-11 py-6 mx-auto">
      <div class="md:flex md:items-center md:justify-between">
        <div class="flex items-center justify-between">
          <div class="text-xl font-semibold text-gray-700">
            <a
              class="text-xl font-bold text-gray-800 transition-colors duration-200 transform dark:text-white lg:text-2xl hover:text-gray-700 dark:hover:text-gray-300"
              href="#"
              >HashAcademy</a
            >
          </div>

          <!-- Mobile menu button -->
          <div class="flex md:hidden">
            <button
              type="button"
              class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
              aria-label="toggle menu"
              @click="NavbarResponsiveOpen = !NavbarResponsiveOpen"
            >
              <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                <path
                  :class="{
                    hidden: NavbarResponsiveOpen,
                    'inline-flex': !NavbarResponsiveOpen,
                  }"
                  fill-rule="evenodd"
                  d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
                ></path>
                <svg
                  class="w-6 h-6"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    :class="{
                      hidden: !NavbarResponsiveOpen,
                      'inline-flex': NavbarResponsiveOpen,
                    }"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                  ></path>
                </svg>
              </svg>
            </button>
          </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div
          class="flex-1 md:flex md:items-center md:justify-between"
          :class="{
            block: NavbarResponsiveOpen,
            hidden: !NavbarResponsiveOpen,
          }"
        >
          <div class="flex flex-col -mx-4 md:flex-row md:items-center md:mx-8">
            <Link
              href="#"
              class="px-5 py-2 mx-2 mt-2 text-sm font-semibold text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 lg:text-md dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700"
              >Cari Sertifikat</Link
            >
            <Link
              href="#"
              class="px-5 py-2 mx-2 mt-2 text-sm font-semibold text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700"
              >Tempat Pengaduan</Link
            >
          </div>
        </div>
        <div v-if="canLogin" class="flex sm:block">
          <!-- px-5 py-2 mx-2 mt-2 sm:px-6 -->
          <Link
            v-if="$page.props.user"
            :href="route('dashboard')"
            class="font-semibold px-5 py-2 mx-5 mt-2 text-sm lg:text-md rounded-md dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700"
          >
            Dashboard
          </Link>

          <template v-else>
            <Link
              :href="route('login')"
              class="font-semibold px-5 py-2 mx-2 mt-2 text-sm lg:text-md rounded-md dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700"
            >
              Log in sebagai Admin
            </Link>

            <Link
              v-if="canRegister"
              :href="route('register')"
              class="font-semibold px-5 py-2 mx-2 mt-2 ml-4 text-sm lg:text-md rounded-md dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700"
            >
              Register
            </Link>
          </template>
        </div>
      </div>
    </div>
  </nav>

  <!-- isi dari halaman cari -->
  <div class="text-center mb-auto">
    <section class="bg-white dark:bg-gray-800">
      <div class="container px-6 py-16 2xl:py-20 mx-auto text-center">
        <div class="max-w-lg mx-auto">
          <h1
            class="text-3xl font-bold text-gray-800 dark:text-white md:text-4xl"
          >
            Cari Sertifikat HashAcademy anda di sini!
          </h1>

          <p class="mt-6 text-gray-500 dark:text-gray-300">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero
            similique obcaecati illum mollitia.
          </p>

          <div
            class="w-full max-w-sm mx-auto mt-6 bg-transparent border rounded-md dark:border-gray-700 focus-within:border-blue-400 focus-within:ring focus-within:ring-blue-300 dark:focus-within:border-blue-300 focus-within:ring-opacity-40"
          >
            <form class="flex flex-col md:flex-row">
              <input
                type="text"
                placeholder="Masukan kode unik anda"
                class="flex-1 h-10 px-4 py-2 m-1 text-gray-700 placeholder-gray-400 bg-transparent border-none appearance-none dark:text-gray-200 focus:outline-none focus:placeholder-transparent focus:ring-0"
              />

              <button
                type="button"
                class="h-10 px-4 py-2 m-1 text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400"
              >
                <div class="flex">
                  <svg
                    class="w-6 h-6 mr-4"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                    ></path></svg
                  >Cari
                </div>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <div class="py-2 md:py-5 dark:bg-gray-800">
      <!-- <div class="divider bg-grey-800"></div> -->
      <div class="relative flex py-5 items-center bg-gray-800">
        <div class="flex-grow border-t-4 rounded border-gray-700"></div>
        <span class="flex-shrink mx-4 text-gray-500">Content</span>
        <div class="flex-grow border-t-4 rounded border-gray-700"></div>
      </div>

      <div>
        <div class="flex justify-center">
          <div>{! CodeQR ! }</div>
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              version="1.1"
              width="400"
              height="400"
              viewBox="0 0 400 400"
            >
              <rect x="0" y="0" width="400" height="400" fill="#ffffff" />
              <g transform="scale(12.121)">
                <g transform="translate(4,4)">
                  <path
                    fill-rule="evenodd"
                    d="M8 0L8 1L10 1L10 0ZM13 0L13 2L11 2L11 4L10 4L10 3L9 3L9 2L8 2L8 5L9 5L9 6L8 6L8 7L9 7L9 8L8 8L8 10L5 10L5 9L4 9L4 8L0 8L0 11L1 11L1 12L0 12L0 13L1 13L1 15L0 15L0 16L1 16L1 15L2 15L2 17L3 17L3 16L4 16L4 17L5 17L5 16L4 16L4 15L7 15L7 16L6 16L6 17L8 17L8 18L9 18L9 17L10 17L10 19L12 19L12 20L11 20L11 21L10 21L10 20L9 20L9 21L8 21L8 25L9 25L9 22L10 22L10 23L14 23L14 20L13 20L13 19L15 19L15 20L16 20L16 21L17 21L17 22L16 22L16 23L17 23L17 25L18 25L18 24L19 24L19 25L25 25L25 24L23 24L23 23L24 23L24 22L25 22L25 21L24 21L24 20L25 20L25 15L24 15L24 14L25 14L25 12L23 12L23 11L21 11L21 10L20 10L20 9L23 9L23 10L24 10L24 9L25 9L25 8L24 8L24 9L23 9L23 8L20 8L20 9L19 9L19 10L20 10L20 11L19 11L19 12L18 12L18 11L17 11L17 9L18 9L18 8L17 8L17 1L16 1L16 2L15 2L15 3L14 3L14 0ZM12 3L12 5L10 5L10 6L9 6L9 7L10 7L10 8L9 8L9 9L10 9L10 10L8 10L8 11L6 11L6 12L5 12L5 10L4 10L4 11L2 11L2 9L1 9L1 11L2 11L2 12L3 12L3 13L6 13L6 14L7 14L7 15L8 15L8 17L9 17L9 15L10 15L10 16L12 16L12 17L11 17L11 18L12 18L12 17L13 17L13 18L15 18L15 19L16 19L16 16L19 16L19 15L20 15L20 14L18 14L18 13L17 13L17 11L16 11L16 9L14 9L14 6L13 6L13 7L12 7L12 5L14 5L14 4L13 4L13 3ZM15 5L15 7L16 7L16 5ZM10 6L10 7L11 7L11 8L12 8L12 7L11 7L11 6ZM6 8L6 9L7 9L7 8ZM8 11L8 12L6 12L6 13L7 13L7 14L8 14L8 15L9 15L9 14L10 14L10 15L11 15L11 14L12 14L12 16L13 16L13 17L15 17L15 16L13 16L13 14L12 14L12 12L13 12L13 13L15 13L15 14L14 14L14 15L15 15L15 14L17 14L17 13L15 13L15 12L16 12L16 11L11 11L11 13L10 13L10 12L9 12L9 11ZM8 12L8 14L9 14L9 12ZM19 12L19 13L20 13L20 12ZM21 12L21 16L24 16L24 15L22 15L22 14L24 14L24 13L22 13L22 12ZM2 14L2 15L3 15L3 14ZM17 17L17 20L20 20L20 17ZM21 17L21 20L22 20L22 21L23 21L23 19L22 19L22 17ZM23 17L23 18L24 18L24 17ZM18 18L18 19L19 19L19 18ZM11 21L11 22L12 22L12 21ZM19 21L19 24L20 24L20 21ZM21 22L21 24L22 24L22 22ZM10 24L10 25L11 25L11 24ZM12 24L12 25L13 25L13 24ZM14 24L14 25L15 25L15 24ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM18 0L18 7L25 7L25 0ZM19 1L19 6L24 6L24 1ZM20 2L20 5L23 5L23 2ZM0 18L0 25L7 25L7 18ZM1 19L1 24L6 24L6 19ZM2 20L2 23L5 23L5 20Z"
                    fill="#000000"
                  />
                </g>
              </g>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  <AppBawah />
</template>
