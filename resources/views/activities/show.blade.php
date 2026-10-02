<!DOCTYPE html>
<html>
    <head>
        <title>Detail Activity</title>
    </head>
    <body>
        <h1>Detail Activity</h1>

        <h2>{{ $activity->title }}</h2>
        <p>Deskripsi: {{ $activity->description }}</p>
        <p>Tanggal: {{ $activity->activity_date }}</p>
        <p>Kategori: {{ $activity->category }}</p>
        <p>Status: {{ $activity->status }}</p>

        <a href="{{ route('activities.edit', $activity) }}">
            Edit Activity
        </a>

        <br><br>

        <a href="{{ route('activities.index') }}">
            Kembali ke Daftar Activity
        </a>
    </body>
</html>
```
