<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
  <div>
    <AppLayout>
      <template #header>
        <h2 class="font-semibold text-xl text-slate-300 leading-tight">
          Sertifikat Baru
        </h2>
      </template>

      <div class="py-12">
        <section class="max-w-4xl p-6 mx-auto rounded-md shadow-md">
          <h2
            class="text-lg font-semibold text-gray-700 capitalize dark:text-white"
          >
            Data Pemilik
          </h2>

          <form>
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
              <div>
                <label class="text-gray-700 dark:text-gray-200" for="username"
                  >Nama Lengkap</label
                >
                <input
                  id="name"
                  type="text"
                  class="input input-bordered w-full max-w-lg block mt-2 dark:bg-gray-800"
                />
              </div>

              <div>
                <label
                  class="text-gray-700 dark:text-gray-200"
                  for="emailAddress"
                  >kode unik</label
                >
                <input
                  id="uniqueCode"
                  type="text"
                  class="input input-bordered w-full max-w-lg block mt-2 dark:bg-gray-800"
                />
              </div>

              <div>
                <label class="text-gray-700 dark:text-gray-200" for="password"
                  >Kegiatan</label
                >
                <select
                  class="select select-bordered w-full max-w-lg block mt-2 dark:bg-gray-800"
                >
                  <option disabled selected>pilih nama kegiatan</option>
                  <option>Homer</option>
                  <option>Marge</option>
                  <option>Bart</option>
                  <option>Lisa</option>
                  <option>Maggie</option>
                </select>
              </div>

              <div>
                <label
                  class="text-gray-700 dark:text-gray-200"
                  for="passwordConfirmation"
                  >Tanggal Lulus</label
                >
                <div class="relative mt">
                  <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                  >
                    <svg
                      class="w-5 h-5 text-gray-500 dark:text-gray-400"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </div>
                  <input
                    datepicker
                    type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Select date"
                  />
                </div>
              </div>
            </div>

            <div class="flex justify-end mt-6">
              <button
                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600"
              >
                Save
              </button>
            </div>
          </form>
        </section>
      </div>
    </AppLayout>
  </div>
</template>
