<div>
    <label for="subject">Subject</label>
    <input
        type="text"
        id="subject"
        name="subject"
        value="{{ old('subject', $studySession->subject ?? '') }}"
    >

    @error('subject')
        <p>{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="duration">Durasi (menit)</label>
    <input
        type="number"
        id="duration"
        name="duration"
        value="{{ old('duration', $studySession->duration ?? '') }}"
    >

    @error('duration')
        <p>{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="studied_at">Tanggal</label>
    <input
        type="date"
        id="studied_at"
        name="studied_at"
        value="{{ old('studied_at', $studySession->studied_at ?? '') }}"
    >

    @error('studied_at')
        <p>{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="completed">Completed</label>
    <input
        type="checkbox"
        id="completed"
        name="completed"
        value="1"
        {{ old('completed', $studySession->completed ?? false) ? 'checked' : '' }}
    >
</div>