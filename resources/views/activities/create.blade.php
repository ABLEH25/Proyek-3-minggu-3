<!DOCTYPE html>
<html>
<head>
    <title>Tambah Activity</title>
</head>
<body>

    <h1>Tambah Activity</h1>

    <form action="{{ route('activities.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Judul</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
            >

            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description">Deskripsi</label>
            <textarea
                id="description"
                name="description"
            >{{ old('description') }}</textarea>

            @error('description')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="activity_date">Tanggal</label>
            <input
                type="date"
                id="activity_date"
                name="activity_date"
                value="{{ old('activity_date') }}"
            >

            @error('activity_date')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="category">Kategori</label>
            <input
                type="text"
                id="category"
                name="category"
                value="{{ old('category') }}"
            >

            @error('category')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="status">Status</label>
            <select id="status" name="status">
                    <option value="Planned" {{ old('status') === 'Planned' ? 'selected' : '' }}>
                        Planned
                    </option>

                    <option value="Ongoing" {{ old('status') === 'Ongoing' ? 'selected' : '' }}>
                        Ongoing
                    </option>

                    <option value="Done" {{ old('status') === 'Done' ? 'selected' : '' }}>
                        Done
                    </option>
                     <option value="Unknown" {{ old('status') === 'Unknown' ? 'selected' : '' }}>
                        Unknown
                    </option>
            </select>

            @error('status')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan</button>
    </form>

    <br>

    <a href="{{ route('activities.index') }}">
        Kembali ke Daftar Activity
    </a>

</body>
</html>