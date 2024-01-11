<div class="container mx-auto my-8">
    <h1 class="text-3xl font-bold mb-4 text-indigo-800">Voetbalcompetities</h1>

    <ul class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($competities as $competitie)
            <li class="bg-white p-4 shadow-md rounded">
                <a href="{{ route('competities.show', ['competitie' => $competitie->id]) }}" class="text-blue-500 font-bold hover:underline">
                    {{ $competitie->naam }}
                </a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('competities.create') }}" class="btn btn-primary" style="background-color: #4CAF50; /* Green */
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
border-radius: 8px;">Add Competition</a>

</div>
