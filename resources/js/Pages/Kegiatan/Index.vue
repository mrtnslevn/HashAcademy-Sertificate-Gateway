<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import Pagination from "@/Layouts/Pagination.vue";
// defineProps({ Allusers: String });
defineProps({ kegiatans: Object });
</script>

<template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-slate-300 leading-tight">
        Daftar Kegiatan
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="px-5 py-6 lg:py-12 lg:px-0 sm:rounded-lg">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- <div v-if="$page.props.flash.message">
              {{ $page.props.flash.message }}
            </div> -->
            <!-- button create -->
            <div class="flex justify-end">
              <Link
                :href="route('kegiatan.create')"
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
                    <th scope="col" class="px-6 py-3">Nama Kegiatan</th>
                    <th scope="col" class="px-6 py-3">deskripsi kegiatan</th>
                    <th scope="col" class="px-6 py-3">
                      Tanggal kegiatan dimasukan
                    </th>
                    <th scope="col" class="px-6 py-3">
                      <span class="sr-only">Edit</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                      <span class="sr-only">Hapus</span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                    v-for="kegiatan in kegiatans.data"
                    :key="kegiatan.id"
                  >
                    <!-- :key="kegiatan.id" -->
                    <th
                      scope="row"
                      class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
                    >
                      <p class="px-1.5">{{ kegiatan.nama }}</p>
                      <span
                        class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-xl dark:bg-yellow-200 dark:text-yellow-900"
                        >id: {{ kegiatan.id }}</span
                      >
                    </th>
                    <td class="px-6 py-4 max-w-sm">
                      {{ kegiatan.deskripsi }}
                    </td>
                    <td class="px-6 py-4">
                      <span
                        class="bg-indigo-100 text-indigo-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-xl dark:bg-indigo-200 dark:text-indigo-900"
                        >{{ kegiatan.created_at }}</span
                      >
                    </td>
                    <td class="px-6 py-4">
                      <div class="">
                        <Link
                          class="font-medium text-blue-600 dark:text-blue-500 hover:underline flex"
                        >
                          <!-- :href="route('users.edit', users.id)" -->
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
                          >Edit</Link
                        >
                      </div>
                    </td>
                    <td class="px-6 py-4">
                      <div class="">
                        <Link
                          method="delete"
                          :href="route('kegiatan.destroy', kegiatan.id)"
                          class="flex focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                        >
                          <svg
                            class="w-4 h-4 mr-3"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                          Hapus
                        </Link>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <Pagination />
            <!-- <Page :links="kegiatans.links" /> -->
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
