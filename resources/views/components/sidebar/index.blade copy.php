<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a style="background-image: linear-gradient(90deg, #324466, #60799e 79%); background-size: cover;" href="@if(Auth::user()->hasAnyRoles(['Admin', 'Owner']))
                   {{route('site-dashboard')}}
                    @elseif(Auth::user()->hasAnyRoles('Staff'))
                        {{route('site-dashboard')}}
                    @elseif(Auth::user()->hasAnyRoles('Customer'))
                        {{route('site-dashboard')}}
                    @endif" class="nav-link active py-3 mx-2 mr-0">
                <i class="fas fa-landmark"></i>
                <p class="ml-3" align="center">
                    <span class="tx-sitecolor1 font-weight-bolder">
                        @if(Auth::user()->hasAnyRoles(['Admin', 'Owner']))
                        Admin
                        @elseif(Auth::user()->hasAnyRoles('Staff'))
                        Staff
                        @elseif(Auth::user()->hasAnyRoles('Customer'))
                        Customer
                        @endif
                    </span>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="my-2 nav-item mx-1 
        {{ Nav::hasSegment(['room-booking','all-room-bookings'], [3, 4], 'menu-open' )}}">
            <a href="#" class="nav-link {{ Nav::isRoute('') }}">
                <i class="nav-icon fas fa-bed"></i>
                <p class="ml-3">
                    Room Bookings
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item {{ Nav::isRoute('dd')}}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-check-square  nav-icon"></i>
                        <p class="text-right">All Bookings </p>
                    </a>
                </li>
                <li class="nav-item {{ Nav::isRoute('admin.booking-isServiced')}}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-folder-plus  nav-icon"></i>
                        <p class="text-right">Completed Room Serviced </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book-open  nav-icon"></i>
                        {{-- <i class="fas fa-circle nav-icon"></i> --}}
                        <p class="text-right">Add New Booking </p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="my-2 nav-item mx-1 
        {{ Nav::hasSegment(['room-cleaning'], [3, 4], 'menu-open' )}}">
            <a href="#" class="nav-link {{ Nav::isRoute('admin.cleaning.room-status') }}">
                <i class="nav-icon fas fa-broom"></i>
                <p class="ml-3">
                    Room Cleaning
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item {{ Nav::isRoute('admin.cleaning.room-status') }}">
                    {{-- {{ Nav::isRoute('' )}} --}}
                    <a href="#" class="nav-link">
                        {{-- # --}}
                        <i class="fas fa-check-square  nav-icon"></i>
                        <p class="text-right">Cleaning Status </p>
                    </a>
                </li>
                <li class="nav-item ">
                    {{-- {{ Nav::isRoute('admin.booking-isServiced')}} --}}
                    <a href="" class="nav-link">
                        {{-- {{ route('admin.booking-isServiced')}} --}}
                        <i class="fas fa-folder-plus  nav-icon"></i>
                        <p class="text-right">Assign Staff for Cleaning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-circle nav-icon"></i>

                        <p class="ml-2">Check Cleaning status</p>
                    </a>
                </li>

            </ul>
        </li>
        <li class="my-2 nav-item mx-1">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-briefcase"></i>
                <p class="ml-3">
                    Our Guests
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-circle nav-icon"></i>
                        <p class="ml-2">All Guests</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-circle nav-icon"></i>
                        <p class="ml-2">Active-Guests</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="my-2 nav-item mx-1">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p class="ml-3">
                    Staff
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p class="ml-2">Staff List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p class="ml-2">Add New Staff</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="my-2 nav-item mx-1">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-wallet"></i>
                <p class="ml-3">
                    Pay roll
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-circle nav-icon"></i>
                        <p class="ml-2">Staff Salary</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-circle nav-icon"></i>
                        <p class="ml-2">Pay slip</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-circle nav-icon"></i>
                        <p class="ml-2">Leave Type</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="my-2 nav-item mx-1">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-bar"></i>
                <p class="ml-3">
                    Account Session
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-money nav-icon"></i>
                        <p class="ml-2">Revenue</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-check nav-icon"></i>
                        <p class="ml-2">Invoices</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-check nav-icon"></i>
                        <p class="ml-2">Payments</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-check nav-icon"></i>
                        <p class="ml-2">Expenses</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="my-2 nav-item mx-1">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-bar"></i>
                <p class="ml-3">
                    Report Session
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-money nav-icon"></i>
                        <p class="ml-2">Revenue Report</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-check nav-icon"></i>
                        <p class="ml-2">Lodged Guest Report</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-check nav-icon"></i>
                        <p class="ml-2">Expenses Reports</p>
                    </a>
                </li>
            </ul>
        </li>
        {{-- <div class="divider"></div> --}}
        <li class="my-2 nav-item mx-1">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tools"></i>
                <p class="ml-3">
                    Site Settings
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-shield-alt nav-icon"></i>
                        <p class="ml-2">Site Information</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-clipboard-check nav-icon"></i>
                        <p class="ml-2">POS Ternimals</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-tasks nav-icon"></i>
                        <p class="ml-2">Roles & Permissions</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-tasks nav-icon"></i>
                        <p class="ml-2">Add New Roles</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-tasks nav-icon"></i>
                        <p class="ml-2">Assign Role to staff</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-tasks nav-icon"></i>
                        <p class="ml-2">Email Settings</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item mx-2 mr-0">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p class="ml-3">
                    Rooms
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-search nav-icon"></i>
                        <p class="ml-2">All Rooms</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-plus-circle nav-icon"></i>
                        <p class="ml-2">Add New Rooms</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-check-double nav-icon"></i>
                        <p class="ml-2">Edit Room Accessories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ml-lg-3">
                        <i class="fas fa-sort-numeric-up-alt nav-icon"></i>
                        <p class="ml-2">Add Number to Room</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item my-2 mx-2">
            <a href="#" class="nav-link">
                <i class="fas fa-arrow-alt-circle-right nav-icon"></i>
                <p>
                    Room Pricing
                    <span class="right badge badge-info">&#8358;</span>
                </p>
            </a>
        </li>
        <li class="nav-item my-2">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-shield-alt"></i>
                <p>
                    Change Password
                </p>
            </a>
        </li>
        <li class="nav-item my-2">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-eye"></i>
                <p>Change Profile Picture
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-cog"></i>
                <p class="ml-3">
                    Guests
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item my-2">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-plus"></i>
                        <p>Book a Room
                        </p>
                    </a>
                </li>
                <li class="nav-item my-2">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-suitcase-rolling"></i>
                        <p>My Booking History
                        </p>
                    </a>
                </li>

                <li class="nav-item my-2">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>My Booking Status
                        </p>
                    </a>
                </li>
                <li class="nav-item my-2">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Rescheduling Booking
                        </p>
                    </a>
                </li>
                <li class="nav-item my-2">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-wallet"></i>
                        <p>My wallet</p>
                    </a>
                </li>
                <li class="nav-item my-2">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>Make Enquiry
                        </p>
                    </a>
                </li>
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