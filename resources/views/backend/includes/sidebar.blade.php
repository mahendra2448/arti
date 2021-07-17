<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <img class="c-sidebar-brand-full" src="{{ asset('img/brand/ARTI-logo.png') }}" height="40" alt="ARTI Logo">
        <img class="c-sidebar-brand-minimized" src="{{ asset('img/brand/ARTI-logo.png') }}" height="40" alt="ARTI Logo">
    </div><!--c-sidebar-brand-->

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-title">Main Menu</li>
        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.dashboard')"
                :active="activeClass(Route::is('admin.dashboard'), 'c-active text-warning font-weight-bold')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Dashboard')" />
        </li>
        
        <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.home*'), 'c-open c-show') }}">
            <x-utils.link
                href="#"
                icon="c-sidebar-nav-icon fas fa-bars"
                class="c-sidebar-nav-dropdown-toggle"
                :text="__('Homepage')" />

            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item ml-2">
                    <x-utils.link
                    class="c-sidebar-nav-link"
                    :href="route('admin.home.header.index')"
                    :active="activeClass(Route::is('admin.home.header.index'), 'c-active text-warning font-weight-bold')"
                    icon="c-sidebar-nav-icon fas fa-sync"
                    :text="__('Update Header')" />
                </li>
                <li class="c-sidebar-nav-item ml-2">
                    <x-utils.link
                        class="c-sidebar-nav-link"
                        :href="route('admin.home.exp.exp-index')"
                        :active="activeClass(Route::is('admin.home.exp.exp-index'), 'c-active text-warning font-weight-bold')"
                        icon="c-sidebar-nav-icon fas fa-th"
                        :text="__('Experiences')" />
                </li>
                <li class="c-sidebar-nav-item ml-2">
                    <x-utils.link
                        class="c-sidebar-nav-link"
                        :href="route('admin.home.testi.testi-index')"
                        :active="activeClass(Route::is('admin.home.testi.testi-index'), 'c-active text-warning font-weight-bold')"
                        icon="c-sidebar-nav-icon fas fa-comment"
                        :text="__('Testimonial')" />
                </li>
            </ul>
        </li>

        @if (
            $logged_in_user->hasAllAccess() ||
            (
                $logged_in_user->can('admin.access.user.list') ||
                $logged_in_user->can('admin.access.user.deactivate') ||
                $logged_in_user->can('admin.access.user.reactivate') ||
                $logged_in_user->can('admin.access.user.clear-session') ||
                $logged_in_user->can('admin.access.user.impersonate') ||
                $logged_in_user->can('admin.access.user.change-password')
            )
        )
            <li class="c-sidebar-nav-title">@lang('System')</li>

            <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.auth.user.*') || Route::is('admin.auth.role.*'), 'c-open c-show') }}">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-user"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Access')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    @if (
                        $logged_in_user->hasAllAccess() ||
                        (
                            $logged_in_user->can('admin.access.user.list') ||
                            $logged_in_user->can('admin.access.user.deactivate') ||
                            $logged_in_user->can('admin.access.user.reactivate') ||
                            $logged_in_user->can('admin.access.user.clear-session') ||
                            $logged_in_user->can('admin.access.user.impersonate') ||
                            $logged_in_user->can('admin.access.user.change-password')
                        )
                    )
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.auth.user.index')"
                                class="c-sidebar-nav-link"
                                :text="__('User Management')"
                                :active="activeClass(Route::is('admin.auth.user.*'), 'c-active')" />
                        </li>
                    @endif

                    @if ($logged_in_user->hasAllAccess())
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.auth.role.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Role Management')"
                                :active="activeClass(Route::is('admin.auth.role.*'), 'c-active')" />
                        </li>
                    @endif
                </ul>
            </li>
        @endif

        @if ($logged_in_user->hasAllAccess())
            <li class="c-sidebar-nav-dropdown">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-list"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Logs')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('log-viewer::dashboard')"
                            class="c-sidebar-nav-link"
                            :text="__('Dashboard')" />
                    </li>
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('log-viewer::logs.list')"
                            class="c-sidebar-nav-link"
                            :text="__('Logs')" />
                    </li>
                </ul>
            </li>
        @endif
    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div><!--sidebar-->
