<x-base-layout :$title>
    <div class="grid h-screen grid-cols-2 grid-rows-1">
        <div class="flex items-center justify-center bg-primary-500">
            <img src="{{ asset('storage/images/people-shopping.png') }}" alt="People Shopping" />
        </div>
        <form action="" method="POST" class="flex flex-col items-center justify-center gap-4">
            @csrf
            <h1 class="mb-4 text-4xl font-bold">Selamat Datang Kembali</h1>
            <div>
                <input type="text" name="username" id="username" placeholder="Username" value="{{ old('username') }}"
                    class="{{ $errors->has('username') ? 'input-invalid' : 'input-valid' }} w-96 rounded px-4 py-2 outline-none focus:ring" />
                @error('username')
                    <p class="pl-2 pt-2 text-sm font-semibold text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Password"
                    class="{{ $errors->has('password') ? 'input-invalid' : 'input-valid' }} w-96 rounded px-4 py-2 outline-none focus:ring" />
                @error('password')
                    <p class="pl-2 pt-2 text-sm font-semibold text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <button class="mt-2 w-96 rounded bg-primary-500 py-2 font-bold text-white hover:bg-primary-600">
                Masuk
            </button>
        </form>
    </div>
</x-base-layout>
