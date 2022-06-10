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
                  </tr>
                </tbody>
              </table>
            </div>
            <Pagination />
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
