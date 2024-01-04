<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Selamat Datang, di Website Pengelolaan Barang') }}
        </h2>
    </x-slot>

    <div class="py-10 px-10">
        <div class="max-w-xs bg-white border border-gray-200 rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700" role="alert">
            <div class="flex p-4">
              <div class="flex-shrink-0">
                <svg class="flex-shrink-0 h-4 w-4 text-teal-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
              </div>
              <div class="ms-3">
                <p class="text-sm text-gray-700 dark:text-gray-400">
                  Anda Berhasil Masuk!
                </p>
              </div>
            </div>
          </div>
    </div>

    <div class="m-5 flex gap-x-4">
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700">
           <div class="p-4 md:p-7">
             <h3 class="text-lg font-bold text-gray-800 dark:text-white">
               Pengelolaan Barang Masuk
             </h3>
             <p class="mt-2 text-gray-500 dark:text-gray-400">
               Dikelola oleh Staff Gudang
             </p>
             <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 {isDisabled ? 'disabled:opacity-50 disabled:pointer-events-none' : ''}" href="barangMasuk">
               Barang Masuk
             </a>
           </div>
        </div>
       
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700">
           <div class="p-4 md:p-7">
             <h3 class="text-lg font-bold text-gray-800 dark:text-white">
               Pengelolaan Barang Keluar
             </h3>
             <p class="mt-2 text-gray-500 dark:text-gray-400">
               Dikelola oleh Staff Kasir
             </p>
             <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 {isDisabled ? 'disabled:opacity-50 disabled:pointer-events-none' : ''}" href="barangKeluar">
               Barang Keluar
             </a>
           </div>
        </div>

        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700">
            <div class="p-4 md:p-7">
              <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                Pengelolaan Barang Habis
              </h3>
              <p class="mt-2 text-gray-500 dark:text-gray-400">
                Dikelola oleh Supervisor
              </p>
              <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 {isDisabled ? 'disabled:opacity-50 disabled:pointer-events-none' : ''}" href="barangHabis">
                Barang Habis
              </a>
            </div>
         </div>


         <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700">
            <div class="p-4 md:p-7">
              <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                Pengelolaan Barang Tersedia
              </h3>
              <p class="mt-2 text-gray-500 dark:text-gray-400">
                Dikelola oleh Supervisor
              </p>
              <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 {isDisabled ? 'disabled:opacity-50 disabled:pointer-events-none' : ''}" href="barangTersedia">
                Barang Tersedia
              </a>
            </div>
         </div>

         <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700">
            <div class="p-4 md:p-7">
              <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                Laporan Transaksi
              </h3>
              <p class="mt-2 text-gray-500 dark:text-gray-400">
                Dikelola oleh Pemilik
              </p>
              <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 {isDisabled ? 'disabled:opacity-50 disabled:pointer-events-none' : ''}" href="cetakTransaksi">
                Cetak Transaksi
              </a>
            </div>
        </div>
    </div>

</x-app-layout>
