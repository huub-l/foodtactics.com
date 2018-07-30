<header class="ph3 bg-white">

  <div class="pre-header">

    <div class="social-primary">
      @php(dynamic_sidebar('social-primary'))
    </div>
    <div class="lang-primary tc">
      @php(dynamic_sidebar('lang-primary'))
    </div>

  </div>

  <div class="tc center mt4"><a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/foodtactics.svg')" alt="Foodtactics" style="height: 90px;"></a></div>
  <nav class="nav-primary mt3">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>

</header>
