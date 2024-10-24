<x-dashboard-layout :title="$title" >
    <div x-data="{ nama_barang: '', harga_barang: '', stok_barang: '' }" class="p-8">
        <form action="" class="grid grid-cols-2 gap-4">
            <input type="text" name="id_barang" id="id_barang" placeholder="ID Barang" readonly
                class="w-full rounded bg-gray-400 px-4 py-2 shadow outline-none placeholder:text-gray-700 focus:ring" />
            <input x-model="nama_barang" type="text" name="nama_barang" id="nama_barang" placeholder="Nama Barang"
                class="w-full rounded bg-gray-300 px-4 py-2 shadow outline-none placeholder:text-gray-600 focus:ring" />
            <input x-model="harga_barang" type="number" name="harga_barang" id="harga_barang"
                placeholder="Harga Barang"
                class="w-full rounded bg-gray-300 px-4 py-2 shadow outline-none placeholder:text-gray-600 focus:ring" />
            <input x-model="stok_barang" type="number" name="stok_barang" id="stok_barang" placeholder="Stok Barang"
                class="w-full rounded bg-gray-300 px-4 py-2 shadow outline-none placeholder:text-gray-600 focus:ring" />
        </form>

        <div class="mt-4">
            <a href=""
                class="inline-block rounded bg-blue-500 px-4 py-2 font-medium text-white hover:bg-blue-600">Tambah
                Barang</a>
            <a href=""
                class="inline-block rounded bg-yellow-500 px-4 py-2 font-medium text-white hover:bg-yellow-600">Ubah
                Barang</a>
            <a href=""
                class="inline-block rounded bg-red-500 px-4 py-2 font-medium text-white hover:bg-red-600">Hapus
                Barang</a>
            <a @click="nama_barang = ''; harga_barang = ''; stok_barang = ''" href=""
                class="inline-block rounded bg-primary-500 px-4 py-2 font-medium text-white hover:bg-primary-600">Bersihkan
                Form</a>
        </div>

        <table class="mt-8 w-full text-center">
            <thead>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Stok Barang</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <tr>
                    <td>P-001</td>
                    <td>Garam</td>
                    <td>Rp. 5000</td>
                    <td>100</td>
                    <td>
                        <button type="button" href=""
                            class="rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Pilih</but>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-dashboard-layout>
