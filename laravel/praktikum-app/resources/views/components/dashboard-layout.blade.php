<x-base-layout>
    <section id="layout" class="h-14">
        <header class="flex h-full items-center justify-center bg-primary-500">
            <h3 class="text-xl font-bold text-white">Barang</h3>
        </header>
        <div class="flex w-full" style="height: calc(100vh - 3.5rem)">
            <aside class="grid-rows-10 grid w-40 items-center bg-primary-600 p-4">
                <a href="barang.html"
                    class="w-full rounded bg-primary-700 py-2 text-center font-bold text-white hover:bg-primary-800">Barang</a>
                <a href="pelanggan.html"
                    class="w-full rounded bg-primary-700 py-2 text-center font-bold text-white hover:bg-primary-800">Pelanggan</a>
                <a href="transaksi.html"
                    class="w-full rounded bg-primary-700 py-2 text-center font-bold text-white hover:bg-primary-800">Transaksi</a>
                <a href="riwayat.html"
                    class="w-full rounded bg-primary-700 py-2 text-center font-bold text-white hover:bg-primary-800">Riwayat</a>
                <a href="laporan.html"
                    class="w-full rounded bg-primary-700 py-2 text-center font-bold text-white hover:bg-primary-800">Laporan</a>
                <a href="pengguna.html"
                    class="w-full rounded bg-primary-700 py-2 text-center font-bold text-white hover:bg-primary-800">Pengguna</a>
                <a href="/src/views/login.html"
                    class="row-start-10 w-full rounded bg-primary-700 py-2 text-center font-bold text-white hover:bg-primary-800">Keluar</a>
            </aside>
            <main style="width: calc(100vw - 10rem)">
                {{ $slot }}
            </main>
        </div>
    </section>
</x-base-layout>
