<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Pagination from "../../Layouts/Pagination.vue";
import { Link } from "@inertiajs/inertia-vue3";

// const showingNavigationDropdown = ref(false);
defineProps({ sertifs: Object });
</script>

<template>
  <AppLayout title="Sertifikat">
    <template #header>
      <h2 class="font-semibold text-xl text-slate-300 leading-tight">
        Sertifikat HashAcademy
      </h2>
    </template>
    <div class="px-5 py-6 lg:py-12 lg:px-0 sm:rounded-lg">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- button create -->
        <div class="flex justify-end">
          <Link
            :href="route('sertifikat.create')"
            type="button"
            class="flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
          >
            <svg
              class="w-5 h-5 mr-2"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd"
              ></path>
            </svg>
            Buat Baru
          </Link>
        </div>
        <div
          class="relative overflow-x-auto shadow-md rounded-md sm:rounded-lg"
        >
          <table
            class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
          >
            <thead
              class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-700 dark:text-gray-400"
            >
              <tr>
                <th scope="col" class="px-6 py-3">Nama Peserta</th>
                <th scope="col" class="px-6 py-3">Nama Kegiatan</th>
                <th scope="col" class="px-6 py-3">Kode Unik</th>
                <th scope="col" class="px-6 py-3">Sertifikat Path</th>
                <th scope="col" class="px-6 py-3">Tanggal Ditambahkan</th>
                <th scope="col" class="px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr
                v-for="sertifikat in sertifs.data"
                :key="sertifikat.id"
                class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
              >
                <th
                  scope="row"
                  class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
                >
                  {{ sertifikat.Nama_Peserta }}
                </th>
                <td class="px-6 py-4">{{ sertifikat.Nama_Kegiatan }}</td>
                <td class="px-6 py-4 max-w-sm">{{ sertifikat.kode_unik }}</td>
                <td class="px-6 py-4 max-w-sm">
                  {{ sertifikat.sertifikat_path }}
                </td>
                <td class="px-6 py-4">{{ sertifikat.created_at }}</td>
                <td class="px-6 py-4">
                  <div class="">
                    <a
                      href="#"
                      class="font-medium text-blue-600 dark:text-blue-500 hover:underline flex"
                    >
                      <svg
                        class="w-4 h-4 mr-3"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"
                        ></path>
                        <path
                          fill-rule="evenodd"
                          d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                          clip-rule="evenodd"
                        ></path></svg
                      >Edit</a
                    >
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <Pagination />
      </div>
    </div>
  </AppLayout>
</template>
