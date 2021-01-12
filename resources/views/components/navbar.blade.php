@php
$user = auth()->user();
@endphp

{{--<div class="navbar-bg"></div>--}}
@livewire('navigation-dropdown')
{{--<nav class="navbar navbar-expand-lg main-navbar">--}}


{{--    <ul class="navbar-nav navbar-right">--}}
{{--        <li class="dropdown"><a href="#" data-turbolinks="false" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">--}}
{{--            @if (!is_null($user))--}}
{{--                <div class="d-sm-none d-lg-inline-block">Hi, {{ $user->name }}</div></a>--}}
{{--            @else--}}
{{--                <div class="d-sm-none d-lg-inline-block">Hi, Welcome</div></a>--}}
{{--            @endif--}}
{{--            <div class="dropdown-menu dropdown-menu-right">--}}
{{--                <a href="{{route('admin.profile.show')}}" class="dropdown-item has-icon">--}}
{{--                    <i class="far fa-user"></i> Profile--}}
{{--                </a>--}}
{{--                @if (request()->get('is_admin'))--}}
{{--                <a href="/setting" class="dropdown-item has-icon">--}}
{{--                    <i class="fas fa-cog"></i> Setting--}}
{{--                </a>--}}
{{--                @endif--}}
{{--                <div class="dropdown-divider"></div>--}}
{{--                <form method="POST" action="{{ route('logout') }}">--}}
{{--                    @csrf--}}

{{--                    <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();this.closest('form').submit();">--}}
{{--                        <i class="fas fa-sign-out-alt"></i> Logout--}}
{{--                    </a>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</nav>--}}
