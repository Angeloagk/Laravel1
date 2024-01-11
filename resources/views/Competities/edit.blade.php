<!-- resources/views/competities/edit.blade.php -->
<h1>Bewerk Competitie: {{ $competitie->naam }}</h1>
<form action="{{ route('competities.update', $competitie) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="naam">Naam:</label>
    <input type="text" name="naam" value="{{ old('naam', $competitie->naam) }}" required>

    <label for="start_datum">Start Datum:</label>
    <input type="date" name="start_datum" value="{{ old('start_datum', $competitie->start_datum) }}" required>

    <label for="eind_datum">Eind Datum:</label>
    <input type="date" name="eind_datum" value="{{ old('eind_datum', $competitie->eind_datum) }}" required>
    
    <label for="locatie">Locatie:</label>
    <input type="text" name="locatie" value="{{ old('locatie', $competitie->locatie) }}" required>

    <label for="aantal_teams">Aantal Teams:</label>
    <input type="number" name="aantal_teams" value="{{ old('aantal_teams', $competitie->aantal_teams) }}" required>

    <!-- Voeg hier andere inputvelden toe voor locatie, aantal_teams, etc. -->

    <button type="submit">Bijwerken</button>
</form>
