<x-layout title="Animes Alura">
    <a href="/series/criar" class="btn btn-dark mb-2">Nova Série de Anime</a>
    <ul class="list-group">
        @foreach($listaSeriesNaView as $anime)
        <li class="list-group-item">{{ $anime }}</li>
        @endforeach
    </ul>
</x-layout>
