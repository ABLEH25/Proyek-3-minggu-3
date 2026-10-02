<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Activity</title>
    </head>
    <body>
        <h1></h1>
        @foreach($activities as $activity)
            <div>
                <h2>{{ $activity->title }}</h2>
                <p>{{ $activity->description }}</p>
                <p>Tanggal: {{ $activity->activity_date }}</p>
                <p>Kategori: {{ $activity->category }}</p>
                <p>Status: {{ $activity->status }}</p>
                <a href="{{ route('activities.show',$activity)}}">
                    Lihat Detail
                </a>
                <form action="{{ route('activities.destroy', $activity) }}"method="POST"onsubmit="return confirm('Yakin ingin menghapus activity ini?')">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Hapus</button>
                </form>
            </div>

            <hr>
        @endforeach
    </body>
</html>
