<x-dashboard-layout :$title>
    <div x-data="{ id_pelanggan: '{{ $latestId }}',nama_pelanggan: '{{ $errors->has('nama_pelanggan') ? '' : old('nama_pelanggan') }}', alamat: '{{ $errors->has('alamat') ? '' : old('alamat') }}', telepon: '{{ $errors->has('telepon') ? '' : old('telepon') }}' }" class="p-8">
        <form action="/dashboard/pelanggan/tambah" method="POST" class="grid grid-cols-2 gap-4">
            @csrf
            <input x-model="id_pelanggan" x-ref="id_pelanggan" type="text" name="id_pelanggan" id="id_pelanggan" placeholder="ID Pelanggan" required readonly
                class="w-full rounded bg-gray-400 px-4 py-2 shadow outline-none placeholder:text-gray-700 focus:ring" />
            <div>
                <input x-model="nama_pelanggan" type="text" name="nama_pelanggan" id="nama_pelanggan"
                    placeholder="Nama Pelanggan"
                    class="w-full rounded bg-gray-300 px-4 py-2 shadow outline-none placeholder:text-gray-600 focus:ring" />
                @error('nama_pelanggan')
                    <p class="pl-2 pt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <textarea x-model="alamat" name="alamat" id="alamat" placeholder="Alamat Pelanggan" required
                    class="w-full rounded bg-gray-300 px-4 py-2 shadow outline-none placeholder:text-gray-600 focus:ring">
                  </textarea>
                @error('alamat')
                    <p class="pl-2 pt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input x-model="telepon" type="tel" name="telepon" id="telepon" required
                    placeholder="Telepon Pelanggan"
                    class="h-fit w-full rounded bg-gray-300 px-4 py-2 shadow outline-none placeholder:text-gray-600 focus:ring" />
                @error('telepon')
                    <p class="pl-2 pt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2 mt-4">
                <button type="submit"
                    class="inline-block rounded bg-blue-500 px-4 py-2 font-medium text-white hover:bg-blue-600">Tambah
                    Pelanggan</button>
                <button @click="updatePelanggan($refs.id_pelanggan.value)" type="button"
                    class="inline-block rounded bg-yellow-500 px-4 py-2 font-medium hover:bg-yellow-600">Ubah
                    Pelanggan</button>
                <button @click="deletePelanggan($refs.id_pelanggan.value)" type="button"
                    class="inline-block rounded bg-red-500 px-4 py-2 font-medium text-white hover:bg-red-600">Hapus
                    Pelanggan</button>
                <a @click="nama_pelanggan = ''; harga_pelanggan = ''; stok_pelanggan = ''" href=""
                    class="inline-block rounded bg-primary-500 px-4 py-2 font-medium text-white hover:bg-primary-600">Bersihkan
                    Form</a>
            </div>
        </form>

        <table class="mb-4 mt-8 w-full text-center">
            <thead>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Alamat Pelanggan</th>
                <th>Telepon Pelanggan</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach ($pelanggans as $pelanggan)
                    <tr>
                        <td>{{ $pelanggan->id_pelanggan }}</td>
                        <td>{{ $pelanggan->nama_pelanggan }}</td>
                        <td>{{ $pelanggan->alamat }}</td>
                        <td>{{ $pelanggan->telepon }}</td>
                        <td>
                            <button type="button" data-pelanggan="{{ $pelanggan->id_pelanggan }}" @click="getPelanggan($el.dataset.pelanggan)"
                                class="rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Pilih</but>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $pelanggans->links() }}
    </div>

    <script src="/js/pelanggan.js"></script>
</x-dashboard-layout>
