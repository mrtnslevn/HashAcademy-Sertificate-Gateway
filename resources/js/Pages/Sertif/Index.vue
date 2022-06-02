<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-slate-300 leading-tight">
        Sertifikat HashAcademy
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
          <div class="flex justify-end pb-4">
            <a
              :href="route('sertif.create')"
              class="btn btn-info hover:bg-cyan-700 hover:border-cyan-700"
              ><svg
                class="w-5 h-5 mr-3"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                ></path></svg
              >Buat Baru</a
            >
          </div>
          <div class="overflow-x-auto w-full">
            <table class="table w-full bg-gray-800">
              <!-- head -->
              <thead>
                <tr>
                  <th>
                    <label>
                      <!-- <input type="checkbox" class="checkbox" /> -->
                    </label>
                  </th>
                  <th>ID Sertifikat</th>
                  <th>Nama</th>
                  <th>Kegiatan</th>
                  <th>Tanggal Rilis</th>
                  <th></th>
                  ````````
                </tr>
              </thead>
              <tbody>
                <!-- row 1 -->
                <tr>
                  <th>
                    <label>
                      <!-- <input type="checkbox" class="checkbox" /> -->
                    </label>
                  </th>
                  <td>
                    <div class="flex items-center space-x-3">
                      <div class="badge badge-info">1234qwer123</div>
                    </div>
                  </td>
                  <td>
                    <div class="flex items-center space-x-3">
                      <div>
                        <div class="font-bold">
                          Martinus Rexyfarrel Evan Sayoga
                        </div>
                        <span class="badge badge-warning badge-sm"
                          >id: 12349687768</span
                        >
                      </div>
                    </div>
                  </td>
                  <td>
                    MBKM Bersertifikat resmi
                    <br />
                  </td>
                  <td>14/06/2022</td>
                  <th>
                    <button class="btn btn-ghost px-5 py-3">
                      edit<svg
                        class="ml-4 w-4 h-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                        ></path>
                      </svg>
                    </button>
                  </th>
                </tr>
              </tbody>
              <!-- foot -->
            </table>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
