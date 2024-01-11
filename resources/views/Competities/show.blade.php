<!-- resources/views/competities/show.blade.php -->
@if ($competitie)
    <div class="grid grid-cols-2 gap-4">
        <div class="competition-details">
            <h1 class="text-2xl font-bold mb-4">{{ $competitie->naam }}</h1>
            <p><strong>Start Datum:</strong> {{ $competitie->start_datum }}</p>
            <p><strong>Eind Datum:</strong> {{ $competitie->eind_datum }}</p>
            <p><strong>Locatie:</strong> {{ $competitie->locatie }}</p>
            <p><strong>Aantal Teams:</strong> {{ $competitie->aantal_teams }}</p>

            <form action="{{ route('competities.destroy', ['competitie' => $competitie->id]) }}" method="post" class="mt-4">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Verwijder Competitie</button>
            </form>

            <a href="{{ route('competities.edit', ['competitie' => $competitie->id]) }}" class="mt-2">
                <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded">Bewerk Competitie</button>
            </a>
        </div>
        <!-- Voeg hier andere informatie of componenten toe -->
    </div>
@endif

