<div>
   <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="kategori">Kategori:</label>
            <input type="text" name="kategori" id="kategori" value="{{ $kategori->kategori }}" required>
        </div>
       
        <div>
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" id="deskripsi">{{ $kategori->deskripsi }}</textarea>
        </div>
        <button type="submit">Simpan</button>
    </form>
</div>
