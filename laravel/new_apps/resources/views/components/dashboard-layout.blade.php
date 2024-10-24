<x-base-layout :title="$title">
{{-- <x-base-layout> --}}
    <section id="layout" class="h-14">
        <header class="flex h-full items-center justify-center bg-primary-500">
            <h3 class="text-xl font-bold text-white">Barang</h3>
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
                <a href="/auth/logout"
                    class="row-start-10 w-full rounded bg-primary-700 py-2 text-center font-bold text-white hover:bg-primary-800">Keluar</a>
            </aside>
            <main style="width: calc(100vw - 10rem)">
                {{ $slot }}
            </main>
        </div>
    </section>
</x-base-layout>
