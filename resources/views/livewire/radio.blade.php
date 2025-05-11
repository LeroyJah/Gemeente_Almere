<div>
    <div class="my-1 border-2 border-gray-200 rounded p-2">
            <input type="radio" value="0,65" wire:model.live="radioValue">
            <label for="">€0,65</label><br>
            <input type="radio" value="1,30" wire:model.live="radioValue">
            <label for="">€1,30</label><br>
            <input type="radio" value="2,-" wire:model.live="radioValue">
            <label for="">€2,-</label><br>
            <input type="radio" value="2,50" wire:model.live="radioValue">
            <label for="">€2,50</label><br>
    </div>
    <p>Het maandelijkse bedrag word: €{{ $radioValue }}</p>
</div>
