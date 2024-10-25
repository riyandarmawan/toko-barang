<x-dashboard-layout :$title>
    <div class="p-8">
        <form x-data="transactionForm()" class="grid gap-4">
            <div>
                <label for="ID_transaksi" class="me-4 inline-block w-40">ID Transaksi</label>
                <input type="text" name="ID_transaksi" id="ID_transaksi" readonly
                    class="w-60 rounded bg-gray-400 px-4 py-2 shadow" />
            </div>
            <div>
                <label for="tanggal_transaksi" class="me-4 inline-block w-40">Tanggal Transaksi</label>
                <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" readonly
                    class="w-60 rounded bg-gray-400 px-4 py-2 shadow" />
            </div>
            <div>
                <label for="id_pelanggan" class="me-4 inline-block w-40">ID Pelanggan</label>
                <input type="text" name="id_pelanggan" id="id_pelanggan"
                    class="w-60 rounded bg-gray-300 px-4 py-2 shadow placeholder:text-gray-600" />
            </div>
            <div>
                <label for="nama_pelanggan" class="me-4 inline-block w-40">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" id="nama_pelanggan" readonly
                    class="w-60 rounded bg-gray-400 px-4 py-2 shadow" />
            </div>

            <table class="mt-4">
                <thead>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Subtotal Barang</th>
                </thead>
                <tbody>
                    <template x-for="(item, index) in items" :key="index">
                        <tr>
                            <td class="p-0">
                                <input type="text" x-model="item.id_barang" class="w-full border-none" />
                            </td>
                            <td class="p-0">
                                <input type="text" x-model="item.nama_barang" disabled
                                    class="w-full border-none bg-gray-300" />
                            </td>
                            <td class="p-0">
                                <input type="number" x-model="item.harga" @input="updateSubtotal(index)" disabled
                                    class="w-full border-none bg-gray-300" />
                            </td>
                            <td class="p-0">
                                <input type="number" x-model="item.jumlah" @input="updateSubtotal(index)"
                                    class="w-full border-none" />
                            </td>
                            <td class="p-0">
                                <input type="number" x-model="item.sub_total" disabled
                                    class="w-full border-none bg-gray-300" />
                            </td>
                        </tr>
                    </template>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="p-0">
                            <button type="button" @click="addItem"
                                class="w-full border-none bg-blue-500 text-white hover:bg-blue-600">
                                Tambah Barang
                            </button>
                        </td>
                        <td colspan="2" class="p-0">
                            <button type="button" @click="removeItem(items.length - 1)"
                                class="w-full border-none bg-red-500 text-white hover:bg-red-600">
                                Hapus Barang
                            </button>
                        </td>
                    </tr>
                </tfoot>
            </table>

            <input type="text" name="total_harga" id="total_harga" placeholder="Rp. 0" readonly
                class="max-w-96 rounded bg-gray-300 p-4 text-xl shadow placeholder:text-gray-700">

            <button
                class="hover:bg hvoer:bg-blue-600 w-96 rounded bg-blue-500 px-4 py-2 text-white shadow">Simpan</button>
        </form>
    </div>

    <script>
        function transactionForm() {
            return {
                items: [],
                addItem() {
                    this.items.push({
                        id_barang: "",
                        nama_barang: "",
                        harga: 0,
                        jumlah: 1,
                        sub_total: 0,
                    });
                },
                removeItem(index) {
                    this.items.splice(index, 1);
                },
                updateSubtotal(index) {
                    const item = this.items[index];
                    item.sub_total = item.harga * item.jumlah;
                },
            };
        }
    </script>
</x-dashboard-layout>
