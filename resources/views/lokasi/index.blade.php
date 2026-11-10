<x-layouts.app>
    <div class="flex items-center justify-between">
        <h2 class="text-xl font-medium text-on-surface">Daftar Lokasi</h2>
        <a href="{{ route('lokasi.create') }}"
            class="inline-flex items-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-semibold text-on-primary shadow-sm hover:bg-primary/80 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 disabled:cursor-not-allowed disabled:bg-primary/50 disabled:text-on-primary/50">
            Tambah Lokasi
        </a>
    </div>
    <div class="overflow-x-auto"></div>
    <table class="w-full text-left text-sm text-on-surface">
        <thead class="bg-surface-variant text-xs uppercase text-on-surface-variant">
            <tr>
                <th scope="col" class="px-6 py-3">No</th>
                <th scope="col" class="px-6 py-3">Nama Lokasi</th>
                <th scope="col" class="px-6 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($lokasis as $item)
            <tr class="border-b bg-background hover:bg-surface-variant">
                <td class="whitespace-nowrap px-6 py-4 font-medium text-on-background">{{ $loop->iteration }}</td>
                <td class="whitespace-nowrap px-6 py-4 text-on-background">{{ $item->lokasi }}</td>
                <td class="whitespace-nowrap px-6 py-4">
                    <a href="{{ route('lokasi.edit', $item->id) }}"
                        class="text-primary hover:underline focus:outline-none focus:ring focus:ring-primary focus:ring-opacity-50">Edit</a>

                    <form action="{{ route('lokasi.destroy', $item->id) }}" method="POST"
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus lokasi ini?')"
                        style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="text-error hover:underline focus:outline-none focus:ring focus:ring-error focus:ring-opacity-50">Hapus</button>
                    </form>
                </td>
            </tr>

            @empty
            <tr>
                <td colspan="3" class="whitespace-nowrap px-6 py-4 text-center text-on-background">Tidak ada data
                    lokasi.</td>
            </tr>
            @endforelse

</x-layouts.app>