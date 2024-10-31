<x-dashobard-layout :$title>
<div x-data="{ username: '', password: '', stok_pengguna: '' }" class="p-8">
    <form action="" class="grid grid-cols-2 gap-4">
        <input x-model="username" type="text" name="username" id="username" placeholder="Username"
            class="w-full rounded bg-gray-300 px-4 py-2 shadow outline-none placeholder:text-gray-600 focus:ring" />
        <input x-model="password" type="password" name="password" id="password" placeholder="Password"
            class="w-full rounded bg-gray-300 px-4 py-2 shadow outline-none placeholder:text-gray-600 focus:ring" />
        <select x-model="role" type="number" name="role" id="role"
            class="w-full rounded bg-gray-300 px-4 py-2 shadow outline-none placeholder:text-gray-600 focus:ring">
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
        </select>
    </form>

    <div class="mt-4">
        <a href=""
            class="inline-block rounded bg-blue-500 px-4 py-2 font-medium text-white hover:bg-blue-600">Tambah
            Pengguna</a>
        <a href=""
            class="inline-block rounded bg-yellow-500 px-4 py-2 font-medium text-white hover:bg-yellow-600">Ubah
            Pengguna</a>
        <a href=""
            class="inline-block rounded bg-red-500 px-4 py-2 font-medium text-white hover:bg-red-600">Hapus
            Pengguna</a>
        <a @click="username = ''; password = ''; stok_pengguna = ''" href=""
            class="inline-block rounded bg-primary-500 px-4 py-2 font-medium text-white hover:bg-primary-600">Bersihkan
            Form</a>
    </div>

    <table class="mt-8 w-full text-center">
        <thead>
            <th>Username Pengguna</th>
            <th>Role Pengguna</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <tr>
                <td>Jajang</td>
                <td>Kasir</td>
                <td>
                    <button type="button" href=""
                        class="rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Pilih</but>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</x-dashobard-layout>
