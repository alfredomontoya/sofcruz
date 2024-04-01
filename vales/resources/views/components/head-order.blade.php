<th scope='col' class='text-start'>
    <a class="{{ ($orderby==$attribute)? 'text-primary' : 'link-secondary' }} text-decoration-none" wire:click.prevent="{{ $action }}" href="#">
        <span class="text-uppercase">{{ $label }}</span>
        @if ($orderby=='{{ $attribute }}')
            @if ($ordermode)
                <i class="fa-solid fa-arrow-down-a-z"></i>
            @else
                <i class="fa-solid fa-arrow-up-z-a"></i>
            @endif
        @else
            <i class="fa-solid fa-sort"></i>
        @endif

    </a>
</th>
