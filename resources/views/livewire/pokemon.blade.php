<div>
    <div>
        <input type="text" wire:model.debounce.500ms="keyword"/>
    </div>
    <div wire:loading>
        Loading Pokemons!
    </div>
    <div wire:loading.remove>
        @if($searched && count($pokemonList) === 0)
            Pokemon not found!
        @endif
    </div>
    <div>
        @foreach ($pokemonList as $pokemon)
            <div>
                {{var_dump($pokemon)}}
            </div>
        @endforeach
    </div>
</div>
