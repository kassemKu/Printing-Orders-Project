<nav class="uk-navbar-transparent uk-padding uk-padding-remove-vertical" uk-navbar>
  <div class="uk-navbar-right">
    <a href="/" class="uk-navbar-item uk-logo">
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-wind">
          <path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"></path>
        </svg>
      </span>
      <span>
        {{ config('app.name', 'Laravel') }}
        <small class="uk-article-meta">لخدمات النشر والطباعة</small>
      </span>
    </a>
  </div>
  <div class="uk-navbar-left">
    @guest
    <ul class="uk-navbar-nav">
      <li>
        <a href="{{ route('login') }}">تسجيل دخول</a>
      </li>
      <li>
        <a href="{{ route('register') }}">حساب جديد</a>
      </li>
    </ul>
    @else
    <ul class="uk-navbar-nav">
      <li>
        <a href="#">{{ auth()->user()->name }}</a>
        <div uk-dropdown="offset: -20">
          <ul class="uk-nav uk-navbar-dropdown-nav">
            <li class="uk-active uk-text-uppercase">
              <a href="{{ route('logout') }}" class="uk-text-background" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                Logout
              </a>
            </li>
          </ul>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </li>
    </ul>
    @endguest
  </div>
</nav>