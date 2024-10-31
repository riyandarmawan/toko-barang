<x-dashboard-layout :$title>
    <div x-data="{ nama_barang: '{{ $errors->has('nama_barang') ? '' : old('nama_barang') }}', harga: '{{ $errors->has('harga') ? '' : old('harga') }}', stok: '{{ $errors->has('stok') ? '' : old('stok') }}' }" class="p-8">
        <form action="/dashboard/barang/tambah" method="POST" class="grid grid-cols-2 gap-4">
            @csrf
            <input type="text" name="id_barang" id="id_barang" placeholder="ID Barang" value="{{ $latestId }}"
                required readonly
                class="w-full rounded bg-gray-400 px-4 py-2 shadow outline-none placeholder:text-gray-700 focus:ring" />
            <div>
                <input x-model="nama_barang" type="text" name="nama_barang" id="nama_barang"
                    placeholder="Nama Barang" value="{{ $errors->has('nama_barang') ? '' : old('nama_barang') }}"
                    required
                    class="w-full rounded bg-gray-300 px-4 py-2 shadow outline-none placeholder:text-gray-600 focus:ring" />
                @error('nama_barang')
                    <p class="pl-2 pt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input x-model="harga" type="number" name="harga" id="harga"
                    value="{{ $errors->has('harga') ? '' : old('harga') }}" required placeholder="Harga Barang"
                    class="w-full rounded bg-gray-300 px-4 py-2 shadow outline-none placeholder:text-gray-600 focus:ring" />
                @error('harga')
                    <p class="pl-2 pt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input x-model="stok" type="number" name="stok" id="stok"
                    value="{{ $errors->has('stok') ? '' : old('stok') }}" placeholder="Stok Barang" required
                    class="w-full rounded bg-gray-300 px-4 py-2 shadow outline-none placeholder:text-gray-600 focus:ring" />
                @error('stok')
                    <p class="pl-2 pt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2 mt-4">
                <button type="submit"
                    class="inline-block rounded bg-blue-500 px-4 py-2 font-medium text-white hover:bg-blue-600">Tambah
                    Barang</button>
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
        </form>

        <table class="mt-8 w-full text-center mb-4">
            <thead>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Stok Barang</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach ($barangs as $barang)
                    <tr>
                        <td>{{ $barang->id_barang }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->harga }}</td>
                        <td>{{ $barang->stok }}</td>
                        <td>
                            <button type="button"
                                class="rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Pilih</but>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $barangs->links() }}
    </div>
</x-dashboard-layout>
