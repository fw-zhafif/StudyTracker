<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Study Session</title>
</head>
<body>
    <h1>Tambah Study Session</h1>

    <form method="POST" action="{{ route('study-sessions.store') }}">
        @csrf

        @include('study-sessions.partials.form')

        <button type="submit">Simpan</button>
    </form>
    
</body>
</html>