@php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
$containerNav = $containerNav ?? 'container-fluid';
$navbarDetached = ($navbarDetached ?? '');
@endphp

<!-- Navbar -->
@auth
<nav class="layout-navbar {{ $containerNav }} navbar navbar-expand-xl {{ $navbarDetached }} align-items-center bg-navbar-theme" id="layout-navbar">
  @if(!isset($navbarDetached))
  <div class="{{$containerNav}}">
  @endif

    <!-- Menu Toggle -->
    @if(!isset($navbarHideToggle))
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>
    @endif

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <!-- Search -->
      <div class="navbar-nav align-items-center">
        <div class="nav-item d-flex align-items-center">
          <i class="bx bx-search fs-4 lh-0"></i>
          <input type="text" class="form-control border-0 shadow-none ps-1" placeholder="{{ __('Search...') }}" aria-label="Search...">
        </div>
      </div>
      <!-- /Search -->

      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- Notification -->
        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <i class="bx bx-bell bx-sm"></i>
            <span class="badge bg-danger rounded-pill badge-notifications">5</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end py-0">
            <li class="dropdown-menu-header border-bottom">
              <div class="dropdown-header d-flex align-items-center py-3">
                <h5 class="text-body mb-0 me-auto">{{ __('Notification') }}</h5>
                <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('Mark all as read') }}">
                  <i class="bx fs-4 bx-envelope-open"></i>
                </a>
              </div>
            </li>
            <li class="dropdown-notifications-list scrollable-container">
              <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">{{ __('New Message') }} ✉️</h6>
                      <p class="mb-0">{{ __('You have new message from Natalie') }}</p>
                      <small class="text-muted">1h ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown-menu-footer border-top">
              <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                {{ __('View all notifications') }}
              </a>
            </li>
          </ul>
        </li>
        <!--/ Notification -->

        <!-- User -->
        @if($user = Auth::user())
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="{{ $user->profile_photo_url ?? asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="{{ route('settings.profile') }}">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="{{ $user->profile_photo_url ?? asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-semibold d-block">{{ $user->name }}</span>
                    <small class="text-muted">{{ $user->email }}</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('settings.profile') }}">
                <i class="bx bx-user me-2"></i>
                <span class="align-middle">{{ __('Profile') }}</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('settings.password') }}">
                <i class="bx bx-lock-alt me-2"></i>
                <span class="align-middle">{{ __('Password') }}</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('settings.appearance') }}">
                <i class="bx bx-cog me-2"></i>
                <span class="align-middle">{{ __('Settings') }}</span>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault(); this.closest('form').submit();">
                  <i class="bx bx-power-off me-2"></i>
                  <span class="align-middle">{{ __('Log Out') }}</span>
                </a>
              </form>
            </li>
          </ul>
        </li>
        @endif
        <!--/ User -->
      </ul>
    </div>

  @if(!isset($navbarDetached))
  </div>
  @endif
</nav>
@else
<!-- Guest Navigation -->
<nav class="layout-navbar {{ $containerNav }} navbar navbar-expand-xl {{ $navbarDetached }} align-items-center bg-navbar-theme" id="layout-navbar">
  <div class="{{$containerNav}}">
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">
            <i class="bx bx-log-in me-2"></i>
            <span class="align-middle">{{ __('Login') }}</span>
          </a>
        </li>
        <li class="nav-item ms-2">
          <a class="nav-link" href="{{ route('register') }}">
            <i class="bx bx-user-plus me-2"></i>
            <span class="align-middle">{{ __('Register') }}</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endauth
<!-- / Navbar -->
