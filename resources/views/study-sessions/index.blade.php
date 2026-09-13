<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Sessions</title>
</head>
<body>
    <h1>Study Sessions</h1>
    <a href="study-sessions/create">Tambah session</a>

    @foreach ($sessions as $session)
        <div>
            <h2>{{ $session->subject }}</h2>
            <p>Durasi: {{ $session->duration }} menit</p>
            <p>Tanggal: {{ $session->studied_at }}</p>
            <p>Status: {{ $session->completed ? 'Selesai' : 'Belum selesai' }}</p>
        </div>

        <a href="/study-sessions/{{ $session->id }}/edit">
            Edit
        </a>

         <form method="POST" action="/study-sessions/{{ $session->id }}">
            @csrf
            @method('DELETE')

            <button type="submit">Delete</button>
        </form>
    @endforeach
</body>
</html>