<x-base-layout :$title>
    {{-- <x-base-layout> --}}
    <section x-data="{showModalLogout: false}" id="layout" class="h-14">
        <header class="flex h-full items-center justify-center bg-primary-500">
            <h3 class="text-xl font-bold text-white">{{ $title }}</h3>
        </header>
        <div class="flex w-full" style="height: calc(100vh - 3.5rem)">
            <aside class="grid-rows-10 grid w-40 items-center bg-primary-600 p-4">
                @if (Auth::user()->role === 'admin')
                    <a href="/dashboard/barang"
                        class="w-full rounded bg-primary-700 py-2 text-center font-bold text-white hover:bg-primary-800">Barang</a>
                    <a href="/dashboard/pelanggan"
                        class="w-full rounded bg-primary-700 py-2 text-center font-bold text-white hover:bg-primary-800">Pelanggan</a>
                    <a href="/dashboard/laporan"
                        class="w-full rounded bg-primary-700 py-2 text-center font-bold text-white hover:bg-primary-800">Laporan</a>
                    <a href="/dashboard/pengguna"
                        class="w-full rounded bg-primary-700 py-2 text-center font-bold text-white hover:bg-primary-800">Pengguna</a>
                @endif
                <a href="/dashboard/transaksi"
                    class="w-full rounded bg-primary-700 py-2 text-center font-bold text-white hover:bg-primary-800">Transaksi</a>
                <a href="/dashboard/riwayat"
                    class="w-full rounded bg-primary-700 py-2 text-center font-bold text-white hover:bg-primary-800">Riwayat</a>
                <button type="button" @click="showModalLogout = true"
                    class="row-start-10 w-full rounded bg-primary-700 py-2 text-center font-bold text-white hover:bg-primary-800">Keluar</button>
            </aside>
            <main style="width: calc(100vw - 10rem)">
                {{ $slot }}
            </main>
        </div>

        <div x-cloak x-show="showModalLogout" class="absolute inset-0 flex items-center justify-center bg-gray-500 bg-opacity-50">
            <div @click.outside="showModalLogout = false" @keyup.escape.window="showModalLogout = false" class="rounded bg-white p-4 shadow max-w-96">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-xl">Peringatan</h3>
                    <span @click="showModalLogout = false" class="i-mdi-close text-xl font-semibold cursor-pointer hover:text-2xl duration-300"></span>
                </div>
                <div class="pt-4">
                    <p class="text-base">Apakah anda yakin ingin keluar dari akun ini?</p>
                </div>
                <div class="pt-4 flex justify-end gap-4">
                    <button type="button" @click="showModalLogout = false" class="py-2 px-4 bg-red-500 text-white font-medium rounded shadow hover:bg-red-600">Tidak</button>
                    <form action="/auth/logout" method="POST">
                        @csrf
                        <button class="py-2 px-4 bg-blue-500 text-white font-medium rounded shadow hover:bg-blue-600">Ya</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-base-layout>
