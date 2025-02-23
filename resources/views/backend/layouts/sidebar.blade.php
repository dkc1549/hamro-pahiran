<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('index') }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">{{ env('APP_NAME') }}</span>
        </a>

        <a href="javascript:void(0);"
            class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <!-- Outfits -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-t-shirt"></i>
                <div data-i18n="Outfits">Outfits</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.outfits.index') }}" class="menu-link">
                        <div data-i18n="All Outfits">All Outfits</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.outfits.create') }}" class="menu-link">
                        <div data-i18n="Add Outfit">Add Outfit</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Outfit Materials -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-paint-roll"></i>
                <div data-i18n="Outfit Materials">Outfit Materials</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.outfit-materials.index') }}" class="menu-link">
                        <div data-i18n="All Materials">All Materials</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.outfit-materials.create') }}" class="menu-link">
                        <div data-i18n="Add Material">Add Material</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Ethnic Groups -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Ethnic Groups">Ethnic Groups</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.ethnic-groups.index') }}" class="menu-link">
                        <div data-i18n="All Ethnic Groups">All Ethnic Groups</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.ethnic-groups.create') }}" class="menu-link">
                        <div data-i18n="Add Ethnic Group">Add Ethnic Group</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Sellers' Outfits -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div data-i18n="Sellers' Outfits">Sellers' Outfits</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.sellers-outfits.index') }}" class="menu-link">
                        <div data-i18n="All Sellers' Outfits">All Sellers' Outfits</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.sellers-outfits.create') }}" class="menu-link">
                        <div data-i18n="Add Seller's Outfit">Add Seller's Outfit</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Users -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Users</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Users">Users</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.users.index') }}" class="menu-link">
                        <div data-i18n="User List">User List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.users.create') }}" class="menu-link">
                        <div data-i18n="Create User">Create User</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Carousels -->
        <li class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bx-carousel"></i>
                <div data-i18n="Carousels">Carousels</div>
            </a>
        </li>
    </ul>
</aside>
