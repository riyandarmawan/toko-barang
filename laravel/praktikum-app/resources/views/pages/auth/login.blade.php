<x-base-layout>
    <div class="grid h-screen grid-cols-2 grid-rows-1">
        <div class="flex items-center justify-center bg-primary-500">
            <img src="{{ asset('storage/images/people-shopping.png') }}" alt="People Shopping" />
        </div>
        <form action="" method="POST" class="flex flex-col items-center justify-center gap-4">
            <h1 class="mb-4 text-4xl font-bold">Selamat Datang Kembali</h1>
            <input type="text" name="username" id="username" placeholder="Username"
                class="w-96 rounded bg-gray-300 px-4 py-2 outline-none placeholder:text-gray-600 focus:ring focus:ring-primary-500" />
            <input type="password" name="password" id="password" placeholder="Password"
                class="w-96 rounded bg-gray-300 px-4 py-2 outline-none placeholder:text-gray-600 focus:ring focus:ring-primary-500" />
            <button class="mt-2 w-96 rounded bg-primary-500 py-2 font-bold text-white hover:bg-primary-600">
                Masuk
            </button>
        </form>
    </div>
</x-base-layout>
