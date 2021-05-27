<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">

            <li class="nav-item">
                <a href="{{ route("admin.categories.index") }}"
                   class="nav-link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-tags nav-icon">

                    </i>
                    {{ trans('cruds.category.title') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.locations.index") }}"
                   class="nav-link {{ request()->is('admin/locations') || request()->is('admin/locations/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-map-marker-alt nav-icon">

                    </i>
                    {{ trans('cruds.location.title') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.companies.index") }}"
                   class="nav-link {{ request()->is('admin/companies') || request()->is('admin/companies/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-building nav-icon">

                    </i>
                    {{ trans('cruds.company.title') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.jobs.index") }}"
                   class="nav-link {{ request()->is('admin/jobs') || request()->is('admin/jobs/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-briefcase nav-icon">

                    </i>
                    {{ trans('cruds.job.title') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"
                   onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
