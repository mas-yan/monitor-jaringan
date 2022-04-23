<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Monitoring Jaringan</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->is('/') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('dashboard') }}"><i class="fas fa-fire"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="{{ request()->is('list-pc') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('list-pc.index') }}"><i class="fas fa-bars"></i>
                    <span>List Pc</span></a>
            </li>
            {{-- <li class=""><a class="nav-link" href="{{ route('dashboard') }}"><i
                        class="fas fa-eye"></i>
                    <span>Monitoring</span></a>
            </li> --}}
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i>
                    <span>Pengaturan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link {{ request()->is('log') ? 'active' : '' }}" href="{{ route('log') }}">Log
                            Laporan</a></li>
                    <li><a class="nav-link {{ request()->is('list-pc/create') ? 'active' : '' }}"
                            href="{{ route('list-pc.create') }}">Tambah Pc</a></li>
                    <li>
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
