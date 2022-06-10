<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template lang="">
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-slate-300 leading-tight">
        Kegiatan
      </h2>

      <!-- table -->
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead
          class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-700 dark:text-gray-400"
        >
          <tr>
            <th scope="col" class="px-6 py-3">User Name</th>
            <th scope="col" class="px-6 py-3">Status</th>
            <th scope="col" class="px-6 py-3">Role</th>
            <th scope="col" class="px-6 py-3">
              <span class="sr-only">Edit</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr
            class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
            v-for="users in Allusers"
            :key="users.id"
          >
            <th
              scope="row"
              class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
            >
              <p class="px-1.5">{{ users.name }}</p>
              <span
                class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-xl dark:bg-yellow-200 dark:text-yellow-900"
                >{{ users.email }}</span
              >
            </th>
            <td class="px-6 py-4">
              <span
                class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-xl dark:bg-green-200 dark:text-green-900"
                >Active</span
              >
            </td>
            <td class="px-6 py-4">{{ users.role }}</td>
            <td class="px-6 py-4">
              <div class="">
                <Link
                  :href="route('users.edit', users.id)"
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
                  >Edit</Link
                >
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      <!-- table end -->
    </template>
  </AppLayout>
</template>
