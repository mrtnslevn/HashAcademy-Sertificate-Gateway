<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import AppBawah from "../Layouts/AppBawah.vue";
defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
});
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
            >
              <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                <path
                  fill-rule="evenodd"
                  d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
                ></path>
              </svg>
            </button>
          </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div class="flex-1 md:flex md:items-center md:justify-between">
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

            <!-- <Link
              v-if="canRegister"
              :href="route('register')"
              class="font-semibold px-5 py-2 mx-2 mt-2 ml-4 text-sm lg:text-md rounded-md dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700"
            >
              Register
            </Link> -->
          </template>
        </div>
      </div>
    </div>
  </nav>

  <!-- isi dari halaman cari -->
  <div class="text-center">
    <section class="bg-white dark:bg-gray-800">
      <div class="container px-6 py-16 mx-auto text-center">
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
  </div>
  <AppBawah />
</template>
