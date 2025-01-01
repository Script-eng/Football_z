@foreach($matchs as $match)
    <div>
        <h3>{{ $match->mdate }} - {{ $match->mtype }}</h3>
        <p>{{ $match->ticketprice }}</p>
        <a href="{{ route('matches.edit', $match->id) }}">Edit</a>
        <form action="{{ route('matches.destroy', $match->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach