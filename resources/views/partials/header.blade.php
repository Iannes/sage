{{--  @php
if ($_SERVER['WP_ENV'] == 'development') {
  $debug = new \Sober\Controller\Module\Debugger(get_defined_vars(), 'CKD debugger');
  $fields = get_fields();
  PC::debug($debug);
  PC::debug($fields);
}
@endphp  --}}

<header class="banner">
  <div class="container">
    <a href="/">
      {{--  <img src="@asset('images/logo.svg')" width="140" alt="Logo">  --}}
      LOGO
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
