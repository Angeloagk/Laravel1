<form action="{{ isset($competitie) ? route('competities.update', ['competitie' => $competitie->id]) : route('competities.store') }}" method="POST">
    @csrf
    @if(isset($competitie))
        @method('PUT')
    @endif

    <label for="naam">Naam:</label>
    <input type="text" name="naam" value="{{ old('naam', isset($competitie) ? $competitie->naam : '') }}" required>

    <label for="start_datum">Start Datum:</label>
    <input type="date" name="start_datum" value="{{ old('start_datum', isset($competitie) ? $competitie->start_datum : '') }}" required>

    <label for="eind_datum">Eind Datum:</label>
    <input type="date" name="eind_datum" value="{{ old('eind_datum', isset($competitie) ? $competitie->eind_datum : '') }}">

    <label for="aantal_teams">Aantal Teams:</label>
    <input type="number" name="aantal_teams" value="{{ old('aantal_teams', isset($competitie) ? $competitie->aantal_teams : '') }}" required>

    <label for="locatie">Locatie:</label>
    <input type="text" name="locatie" value="{{ old('locatie', isset($competitie) ? $competitie->locatie : '') }}" required>


    <button type="submit">{{ isset($competitie) ? 'Bijwerken' : 'Opslaan' }}</button>
</form>
