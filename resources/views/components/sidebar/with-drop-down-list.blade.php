<li {{ $attributes->merge(['class'=>'nav-item']) }}>
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-{{ $faLeft }}"></i>
        <p class="ml-3">
            {{ $linkTitle }}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul {{ $attributes->merge(['class'=>'nav nav-treeview']) }}>
        $slot
    </ul>
</li>