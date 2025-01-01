<form action="{{ route('matches.store') }}" method="POST">
    @csrf
    <input type="text" name="mdate" placeholder="Match Date" required>
    <input type="text" name="startsat" placeholder="Start Time" required>
    <input type="number" name="ticketprice" placeholder="Ticket Price" required>
    <input type="text" name="mtype" placeholder="Match Type" required>
    <button type="submit">Create Match</button>
</form>
