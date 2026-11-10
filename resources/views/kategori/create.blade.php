<x-layouts.app>
    <div class="flex justify-center px-4 py-6">

        {{-- Card Form --}}
        <div class="w-full md:w-1/2 rounded-xl bg-surface-container p-6 shadow-lg">

            <h2 class="mb-6 text-xl font-bold text-slide-60">
                Tambah Kategori
            </h2>

            <form action="{{ route('kategori.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="nama_kategori"
                        class="block font-body-md text-body-md font-semibold text-on-surface-variant">
                        Nama Kategori
                    </label>

                    <input type="text" name="kategori" id="kategori" value="{{ old('kategori') }}"
                        class="mt-2 block w-full rounded-lg border border-surface-container-high bg-surface-container px-4 py-2.5 text-on-surface-variant focus:border-primary focus:ring-1 focus:ring-primary"
                        placeholder="Masukkan nama kategori" required>

                    @error('nama_kategori')
                    <p class="mt-1 text-sm text-error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="deskripsi"
                        class="block font-body-md text-body-md font-semibold text-on-surface-variant">
                        Deskripsi
                    </label>

                    <textarea name="deskripsi" id="deskripsi" rows="4"
                        class="mt-2 block w-full rounded-lg border border-surface-container-high bg-surface-container px-4 py-2.5 text-on-surface-variant focus:border-primary focus:ring-1 focus:ring-primary"
                        placeholder="Masukkan deskripsi kategori">{{ old('deskripsi') }}</textarea>

                    @error('deskripsi')
                    <p class="mt-1 text-sm text-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="inline-flex items-center gap-2 rounded-lg bg-primary px-5 py-2.5 text-sm font-semibold text-on-primary shadow-sm hover:bg-primary/80 focus:outline-none focus:ring-2 focus:ring-primary">
                        Simpan
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-layouts.app>