@foreach (\Modules\Core\Entities\Menu::backThemeItems()->get() as $menu)
 
        {{-- Differentiating between items with/without sub menus --}}
        @if ($menu->sub_menu)
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (in_array(\Route::current()->getName(), $menu->active_routes)) ? 'show' : '' }}">
            <span class="menu-link">
                <span class="menu-icon">
                    <i class="{{ $menu->icon }}"></i>
                </span>
                <span class="menu-title">{{ $menu->title }}</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion">
                @foreach ($menu->sub_menu as $sub_menu_item)
                    {{-- Display sub menu only if it doesn't have permissions or the auth user has the exact permission for it --}}
                    <div class="menu-item">
                        <a class="menu-link {{ \Route::current()->getName() == $sub_menu_item['route'] ? 'active' : '' }}" href="{{ \Route::has($sub_menu_item['route']) ? route($sub_menu_item['route']) : '#' }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">{{ $sub_menu_item['title'] }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="menu-item">
            <a class="menu-link {{ \Route::current()->getName() == $menu->route ? 'active' : '' }}" href="{{ \Route::has($menu->route) ? route($menu->route) : '#' }}">
                <span class="menu-icon">
                    <i class="{{ $menu->icon }}"></i>
                </span>
                <span class="menu-title">{{ $menu->title }}</span>
            </a>
        </div>
        @endif
@endforeach