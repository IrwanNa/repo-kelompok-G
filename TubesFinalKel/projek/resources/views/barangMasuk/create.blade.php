<x-app-layout>
    
    <h2 class="text-2xl m-2">Halaman Input Barang Masuk</h2>

<form method="post" action="{{ route('barangMasuk.store') }}" class="m-5 p-5">
    @csrf
    @method('post')
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Nama Produk</label>
        <input type="text"  name="namaProduk" class="py-3 px-5 block w-full border-gray-200 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Masukan Nama Produk">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Jumlah Produk Masuk</label>
        <input type="text" name="jumlahMasuk" class="py-3 px-5 block w-full border-gray-200 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Masukan Jumlah Produk yang Masuk">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Jenis Produk</label>
        <input type="text" name="jenis" class="py-3 px-5 block w-full border-gray-200 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="makanan/minuman">
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold  bg-blue-600  hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Simpan
          </button>
    </div>
</form>


</x-app-layout>
