<header class="header header--page">
  <div class="container">
          <div class="nav">
            @php
                $brandType = get_field('typ_logo','option');
                $url = site_url();

                if($brandType == 'text'){
                  echo '<a href="'.$url.'" class="brand brand--header">'.get_field('logo_tekstowe','option').'</a>';
                } else {
                  $img = get_field('obraz_logo','option');
                  echo '<a href="'.$url.'" class="brand brand--header"><img class="brand__img" scr="'.$img['url'].'"></img></a>';
                }
            @endphp
              <div class="hamburger d-block d-lg-none">
                  <div id="nav-icon3">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                  </div>
              </div>
              <div class="hamburger__target js-hamburger__target">
                @if (has_nav_menu('primary_navigation'))
                  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu', 'container' => false, 'menu_id' => 'site-menu']) !!}
                @endif
                <a href="tel:+{!! get_field('telefon','option') !!}" class="btn btn--tel">{!! get_field('telefon','option') !!}</a>
              </div>
          </div>
  </div>
</header>
