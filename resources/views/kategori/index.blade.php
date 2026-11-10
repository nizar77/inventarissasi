<x-layouts.app>
    <div class="flex items-center justify-between">
        <h2 class="text-xl font-medium text-on-surface">Daftar Kategori</h2>
        <a href="{{ route('kategori.create') }}"
            class="inline-flex items-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-semibold text-on-primary shadow-sm hover:bg-primary/80 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 disabled:cursor-not-allowed disabled:bg-primary/50 disabled:text-on-primary/50">
            Tambah Kategori
        </a>
    </div>
    <div class="overflow-x-auto mt-space-md">
        <table class="w-full border-collapse border border-surface-container-high">
            <thead>
                <tr class="bg-surface-container-high">
                    <th
                        class="border border-surface-container-high px-space-md py-space-xs text-left font-body-md text-body-md font-semibold text-on-surface-variant">
                        No</th>
                    <th
                        class="border border-surface-container-high px-space-md py-space-xs text-left font-body-md text-body-md font-semibold text-on-surface-variant">
                        Nama Kategori</th>
                    <th wire:ignore
                        class="border border-surface-container-high px-space-md py-space-xs text-left font-body-md text-body-md font-semibold text-on-surface-variant">
                        Deskripsi</th>    
                    <th
                        class="border border-surface-container-high px-space-md py-space-xs text-left font-body-md text-body-md font-semibold text-on-surface-variant">
                        Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($ktgrs as $kategori)
                <tr class="hover:bg-surface-container-low">
                    <td
                        class="border border-surface-container-high px-space-md py-space-xs font-body-md text-body-md text-on-surface-variant">
                        {{ $loop->iteration }}</td>
                    <td
                        class="border border-surface-container-high px-space-md py-space-xs font-body-md text-body-md text-on-surface-variant">
                        {{ $kategori->kategori }}</td>
                         <td
                        class="border border-surface-container-high px-space-md py-space-xs font-body-md text-body-md text-on-surface-variant">
                        {{ $kategori->deskripsi }}</td>
                    <td
                        class="border border-surface-container-high px-space-md py-space-xs font-body-md text-body-md text-on-surface-variant">
                        <a href="{{ route('kategori.edit', $kategori->id) }}"
                            class="text-primary hover:text-yellow-700">Edit</a>
                        <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-error hover:text-red-700"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3"
                        class="border border-surface-container-high px-space-md py-space-xs font-body-md text-body-md text-on-surface-variant text-center">
                        Tidak ada kategori yang ditemukan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
</x-layouts.app>