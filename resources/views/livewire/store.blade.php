<div>
    @foreach ($items as $item)
        {{$item->name}}<br>
{{--
        @livewire('item', ['item' => $item], key($item->id))
--}}
    @endforeach

</div>
