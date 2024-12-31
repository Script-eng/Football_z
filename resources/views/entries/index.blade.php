<table>
    <thead>
        <tr>
            <th>Timestamp</th>
            <th>Match</th>
            <th>Spectator</th>
        </tr>
    </thead>
    <tbody>
        @foreach($entries as $entry)
        <tr>
            <td>{{ $entry->timestamp }}</td>
            <td>{{ $entry->match->mtype }} - {{ $entry->match->mdate }}</td>
            <td>{{ $entry->spectator->sname }}</td>
        </tr>
        @endforeach
    </tbody>
</table>