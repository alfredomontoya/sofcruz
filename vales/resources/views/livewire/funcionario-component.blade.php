<div class="container">
    @if ($show == true)

    @switch($mode)
        @case("index")
            @include('livewire.funcionario-index')
            @break
        @case("show")
            @include('livewire.funcionario-show')
            @break
        @default

    @endswitch



    @endif
</div>
