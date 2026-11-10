<div>    
    <form action="{{ route('lokasi.store') }}" method="POST">
        @csrf
        <div>
            <label for="lokasi">lokasi:</label>
            <input type="text" name="lokasi" id="lokasi" required>
        </div>
        {{-- <div>
            <label for="slug">Slug:</label>
            <input type="text" name="slug" id="slug" required>
        </div> --}}
       
        <div>
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" id="deskripsi"></textarea>
        </div>
        <button type="submit">Simpan</button>
    </form>
</div>
