<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Study Session</title>
</head>
<body>
    <h1>Edit Study Session</h1>

    <form method="POST" action="/study-sessions/{{ $studySession->id }}">
        @csrf
        @method('PUT')

        <div>
            <label for="subject">Subject</label>
            <input
                type="text"
                id="subject"
                name="subject"
                value="{{ $studySession->subject }}"
            >
        </div>

        <div>
            <label for="duration">Durasi (menit)</label>
            <input
                type="number"
                id="duration"
                name="duration"
                value="{{ $studySession->duration }}"
            >
        </div>

        <div>
            <label for="studied_at">Tanggal</label>
            <input
                type="date"
                id="studied_at"
                name="studied_at"
                value="{{ $studySession->studied_at }}"
            >
        </div>

        <button type="submit">Update</button>
    </form>
</body>
</html>