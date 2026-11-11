<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Lokasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('lokasi.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nama_lokasi" class="block text-gray-700 font-bold mb-2">Nama Lokasi:</label>
                            <input type="text" name="nama_lokasi" id="nama_lokasi" class="form-input w-full @error('nama_lokasi') border-red-500 @enderror" value="{{ old('nama_lokasi') }}">
                            @error('nama_lokasi')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="alamat" class="block text-gray-700 font-bold mb-2">Alamat:</label>
                            <textarea name="alamat" id="alamat" class="form-textarea w-full @error('alamat') border-red-500 @enderror">{{ old('alamat') }}</textarea>
                            @error('alamat')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan</button>
                            <a href="{{ route('lokasi.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>