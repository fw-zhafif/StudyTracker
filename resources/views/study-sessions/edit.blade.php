<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Study Session</title>
</head>
<body>
    <h1>Edit Study Session</h1>

    <form method="POST" action="{{ route('study-sessions.update', $studySession) }}">
        @csrf
        @method('PUT')

        @include('study-sessions.partials.form')

        <button type="submit">Update</button>
    </form>
    
</body>
</html>