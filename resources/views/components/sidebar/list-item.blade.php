<li {{ $attributes->merge(['class'=>'nav-item my-2']) }}>
    <a href="{{ $alink }}" class="nav-link">
        <i class="nav-icon fas fa-{{ $fa }}"></i>              
        <p>{{  $slot }}</p>
    </a>
</li>