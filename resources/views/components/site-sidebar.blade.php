<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a style="background-image: linear-gradient(90deg, #324466, #60799e 79%); background-size: cover;" href="@if(Auth::user()->hasAnyRoles(['Admin', 'Owner']))
                   {{route('site-dashboard')}}
                    @elseif(Auth::user()->hasAnyRoles(['Staff']))
                        {{route('site-dashboard')}}
                    @elseif(Auth::user()->hasAnyRoles(['Customer']))
                        {{route('site-dashboard')}}
                    @endif" 
              class="nav-link active py-3 w-100">
                <i class="fas fa-landmark"></i>
                <p class="ml-3" align="center">
                    <span class="tx-sitecolor1 font-weight-bolder">
                        @if(Auth::user()->hasAnyRoles(['Admin', 'Owner']))
                        Admin
                        @elseif(Auth::user()->hasAnyRoles(['Staff']))
                        Staff
                        @elseif(Auth::user()->hasAnyRoles(['Customer']))
                        Customer
                        @endif
                    </span> 
                    Dashboard
                </p>
            </a>
        </li>
        <li class="my-2 nav-item mx-1 {{ Nav::hasSegment(['room-booking','all-room-bookings'], [3, 4], 'menu-open' )}}">
            <a href="#" class="nav-link {{ Nav::isRoute('') }}">
                <i class="nav-icon fa-solid fa-clipboard-list"></i>
                <p class="ml-3">
                    Products
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ route('product.create') }}</x-slot>
                    <x-slot name="fa">circle-plus</x-slot>                   
                    Add New Products
                </x-sidebar.list-item>
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa"> book-open</x-slot>
                    All Products
                </x-sidebar.list-item>
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">file-arrow-down</x-slot>
                    Import Products
                </x-sidebar.list-item>                
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">file-arrow-down</x-slot>
                    Products Variants
                </x-sidebar.list-item>                
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">file-arrow-down</x-slot>
                    Products Brands
                </x-sidebar.list-item>
            </ul>
        </li>
        <x-sidebar.list-item>
            <x-slot name="alink"> {{ '#' }}</x-slot>
            <x-slot name="fa">ruler</x-slot>
            Stock Units
        </x-sidebar.list-item>
        <li class="my-2 nav-item mx-1 {{ Nav::hasSegment(['room-booking','all-room-bookings'], [3, 4], 'menu-open' )}}">
            <a href="#" class="nav-link {{ Nav::isRoute('') }}">                
                <i class="fa fa-regular fa-list-check"></i>
                <p class="ml-3">
                    Product Category
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">circle-plus</x-slot>                   
                    Add New Category
                </x-sidebar.list-item>
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa"> book-open</x-slot>
                    All Category
                </x-sidebar.list-item>
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">file-arrow-down</x-slot>
                    Import Category
                </x-sidebar.list-item>                
            </ul>
        </li>

        <li class="my-2 nav-item mx-1 {{ Nav::hasSegment(['room-booking','all-room-bookings'], [3, 4], 'menu-open' )}}">
            <a href="#" class="nav-link {{ Nav::isRoute('') }}">
                {{-- <i class="nav-icon fa-solid fa-clipboard-list"></i> --}}
                <i class="fa-solid fa-money-bill-transfer"></i>
                <p class="ml-3">
                    Expenses
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">book-open</x-slot>
                    All Expenses
                </x-sidebar.list-item>
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">arrow-right-arrow-left</x-slot>                    
                    Add Expense
                </x-sidebar.list-item>
            </ul>
        </li>

        <li class="my-2 nav-item mx-1 {{ Nav::hasSegment(['room-booking','all-room-bookings'], [3, 4], 'menu-open' )}}">
            <a href="#" class="nav-link {{ Nav::isRoute('') }}">
                {{-- <i class="nav-icon fa-solid fa-clipboard-list"></i> --}}
                <i class="fa-solid fa-money-bill-transfer"></i>
                <p class="ml-3">
                    Purchase
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">book-open</x-slot>
                   Purchase List
                </x-sidebar.list-item>
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">arrow-right-arrow-left</x-slot>
                    Add Purchase
                </x-sidebar.list-item>
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">file-arrow-down</x-slot>
                    Import Purchase 
                </x-sidebar.list-item>
            </ul>
        </li>
        
        
        <li class="my-2 nav-item mx-1 {{ Nav::hasSegment(['room-booking','all-room-bookings'], [3, 4], 'menu-open' )}}">
            <a href="#" class="nav-link {{ Nav::isRoute('') }}">
               <i class="fa fa-shopping-cart"></i>
                <p class="ml-3">
                    Sales                                       
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">circle-check</x-slot>                                        
                    Front Desk Sales - POS
                </x-sidebar.list-item>
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">chart-bar</x-slot>
                    Sale History
                </x-sidebar.list-item>
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">cart-plus</x-slot> 
                    Add Sale 
                </x-sidebar.list-item>
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">truck</x-slot>
                    Delivery List
                </x-sidebar.list-item>
            </ul>
        </li>
        <li class="my-2 nav-item mx-1 {{ Nav::hasSegment(['room-booking','all-room-bookings'], [3, 4], 'menu-open' )}}">
            <a href="#" class="nav-link {{ Nav::isRoute('') }}">
                <i class="fa fa-paper-plane"></i>
                <p class="ml-3">
                    Product Transfer                      
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">circle-arrow-right</x-slot>                  
                    Make New Transfer
                </x-sidebar.list-item>
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">circle-arrow-left</x-slot>                  
                    Accept Income Stock
                </x-sidebar.list-item>
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">circle-check</x-slot>                                        
                    Transfer History
                </x-sidebar.list-item>                
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">cart-plus</x-slot> 
                    Import Transfer (CSV) 
                </x-sidebar.list-item>
                <x-sidebar.list-item class="ml-lg-3">
                    <x-slot name="alink"> {{ '#' }}</x-slot>
                    <x-slot name="fa">cart-plus</x-slot> 
                    Export Stock Transfer (CSV) 
                </x-sidebar.list-item>
            </ul>
        </li>

        <x-sidebar.list-item>
            <x-slot name="alink"> {{ '#' }}</x-slot>
            <x-slot name="fa">tags</x-slot> 
            Gift Card List
        </x-sidebar.list-item>
        <x-sidebar.list-item>
            <x-slot name="alink"> {{ '#' }}</x-slot>
            <x-slot name="fa">hand-holding-heart</x-slot>           
            Coupon List
        </x-sidebar.list-item>
        <x-sidebar.list-item>
            <x-slot name="alink"> {{ '#' }}</x-slot>
            <x-slot name="fa">house</x-slot>
            Stocks Ware House
        </x-sidebar.list-item>
       <li class="my-2 nav-item mx-1 {{ Nav::hasSegment(['room-booking','all-room-bookings'], [3, 4], 'menu-open' )}}">
        <a href="#" class="nav-link {{ Nav::isRoute('') }}">            
            <i class="fa fa-book"></i>
            <p class="ml-3">
                Return Products
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <x-sidebar.list-item class="ml-lg-3">
                <x-slot name="alink"> {{ '#' }}</x-slot>
                <x-slot name="fa">circle-arrow-right</x-slot>
                Sales product Return
            </x-sidebar.list-item>
            <x-sidebar.list-item class="ml-lg-3">
                <x-slot name="alink"> {{ '#' }}</x-slot>
                <x-slot name="fa">circle-arrow-left</x-slot>
                Purchase Product Return
            </x-sidebar.list-item>
            <x-sidebar.list-item class="ml-lg-3">
                <x-slot name="alink"> {{ '#' }}</x-slot>
                <x-slot name="fa">circle-arrow-left</x-slot>
                Accepted Return Products
            </x-sidebar.list-item>
        </ul>
    </li>
        <li class="nav-item my-2">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>logout
                </p>
            </a>
        </li>
    </ul>
</nav>