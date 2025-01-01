<form action="{{ route('matches.update', $match->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="mdate" value="{{ $match->mdate }}" required>
    <input type="text" name="startsat" value="{{ $match->startsat }}" required>
    <input type="number" name="ticketprice" value="{{ $match->ticketprice }}" required>
    <input type="text" name="mtype" value="{{ $match->mtype }}" required>
    <button type="submit">Update Match</button>
</form>
