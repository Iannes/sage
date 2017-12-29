{{--  @php
if ($_SERVER['WP_ENV'] == 'development') {
  $debug = new \Sober\Controller\Module\Debugger(get_defined_vars(), 'CKD debugger');
  $fields = get_fields();
  PC::debug($debug);
  PC::debug($fields);
}
@endphp  --}}

<header class="banner">

  <section class="navigation-bar">

      <div class="container logo-container">

        <a href="/">
          {{--  <img src="@asset('images/logo.svg')" width="140" alt="Logo">  --}}
          LOGO
        </a>

        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>

        <div class="mobile-menu--trigger">
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
          </div>
      </div>

  </section>

  <div id="mobile-nav">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']) !!}
      @endif
  </div>

</header>
