@extends('layouts.app')

@section('content')
@php
$imageHero = get_field('heroBg');
@endphp
<section class="section section-intro" @isset ($imageHero) style="background-image:url({!! $imageHero['url'] !!})" @endisset>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="intro__body">
          <h1 class="intro__title">{{ get_field('heroTitle') }}</h1>
          <p class="pgh pgh--subtitle intro__pgh">{{ get_field('heroSubTitle') }}</p>
          <a href="{{ get_field('heroBrnURL') }}" class="btn intro__btn">{{ get_field('heroBtn') }}</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-about" id="oferta">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="section-title">
          <p class="section-title__small">{{ get_field('ofertaSubTitle') }}</p>
          <h2 class="section-title__head">{{ get_field('ofertaTitle') }}</h2>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="text-left text-md-left text-lg-left">
          <p class="pgh pgh--dark about__pgh">
            {{ get_field('ofertaDesc') }}
          </p>
        </div>
      </div>
    </div>

    @php
        if( have_rows('boxes1') ):
          echo '<div class="row align-items-center align-items-lg-stretch flex-column flex-lg-row about__row">';
            while ( have_rows('boxes1') ) : the_row();
                $icon = get_sub_field('boxIcon');
                $title = get_sub_field('boxTitle');
                $desc = get_sub_field('boxDesc');
                @endphp
                  <div class="col-12 col-lg-4">
                    <div class="box-icon">
                    <img src="{{ $icon['url'] }}" alt="{{ $icon['alt'] }}" class="box-icon__image" />
                    <h3>{{ $title}}</h3>
                    <p class="pgh pgh--dark">{!! $desc !!}</p>
                    </div>
                  </div>
                @php
            endwhile;
          echo '</div>';
        else :
            echo '';
        endif;
    @endphp
  </div>

  @php
      $aboutBG = get_field('detailsBg');
      if( have_rows('boxes1') ):
          @endphp
            <div class="about__details" @isset ($aboutBG) style="background-image:url({!! $aboutBG['url'] !!})" @endisset>
              <div class="container">
                <div class="row align-items-center align-items-lg-stretch flex-column flex-lg-row">
          @php

            while ( have_rows('boxes1') ) : the_row();
              $title = get_sub_field('boxTitle');

                @endphp

                  <div class="col-12 col-lg-4">
                    <div class="details">
                      <h3>{{ $title }}</h3>
                      @php
                      if( have_rows('ofertaList') ):
                          echo '<ul class="details__list">';
                          while ( have_rows('ofertaList') ) : the_row();
                              $sub = get_sub_field('punkt_new');
                              echo '<li class="details__element"><p class="pgh">'.$sub.'</p></li>';
                          endwhile;
                          echo '</ul>';
                      else :
                          // no rows found
                      endif;
                      @endphp
                    </div>
                  </div>

                @php

            endwhile;

          @endphp
                </div>
              </div>
            </div>
          @php
        else :
            echo '';
        endif;

 @endphp


</section>

<section class="section section-prices" id="cennik">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="baner">
          <p class="baner__text">
            {!! get_field('banerTitle') !!}
          </p>
          <a href="{!! get_field('banerBtnURL') !!}" class="btn btn--transparent btn--bigger">
            {!! get_field('banerBtn') !!}
          </a>
        </div>
      </div>
    </div>
    <div class="row row-prices">
      <div class="col-12">
        <div class="section-title">
          <p class="section-title__small">{!! get_field('cennikSubTitle') !!}</p>
          <h2 class="section-title__head">{!! get_field('cennikTitle') !!}</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-5">
        <p class="pgh pgh--dark">
          {!! get_field('cennikDesc') !!}
        </p>
        @php
        if( have_rows('cennikList') ):
          echo '<ul class="details__list">';
            while ( have_rows('cennikList') ) : the_row();
                $sub = get_sub_field('punkt');
                echo '<li class="details__element"><p class="pgh pgh--dark">'.$sub.'</p></li>';
            endwhile;
          echo '</ul>';
        else :
            // no rows found
        endif;
        @endphp

      </div>

        @php
        if( have_rows('cennikExample') ):
          echo '<div class="col-12 col-lg-7"><ul class="details__list details__list--right">';
            while ( have_rows('cennikExample') ) : the_row();
                $sub = get_sub_field('punkt');
                echo '<li class="details__element"><p class="pgh pgh--dark">'.$sub.'</p></li>';
            endwhile;
          echo '</ul></div>';
        else :
            // no rows found
        endif;
        @endphp
    </div>
    <div class="row">
      <div class="col-12">
        <p class="pgh pgh--dark">
          {!! get_field('cennikSmall') !!}
        </p>
      </div>
    </div>
  </div>
</section>


<section class="section section-team" id="onas">
  <div class="half-bg">
    @php
      $aboutImage = get_field('aboutImage');
      $size = 'large';
      $thumb = $aboutImage['sizes'][$size];
    @endphp
    <img src="{{ $thumb }}" alt="{{ $aboutImage['alt'] }}" class="half-img">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 offset-0 offset-lg-6 team-text">
        <div class="section-title">
          <p class="section-title__small">{!! get_field('aboutSubTitle') !!}</p>
          <h2 class="section-title__head section-title__head--light">{!! get_field('aboutTitle') !!}</h2>
          <p class="pgh pgh--light team-pgh">
              {!! get_field('aboutDesc') !!}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-baner">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="baner baner--team">
          <p class="baner__text">
            {!! get_field('baner2Title') !!}
          </p>
          <a href="{!! get_field('baner2BtnURL') !!}" class="btn btn--transparent btn--bigger">
              {!! get_field('baner2Btn') !!}
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


@php
    if( have_rows('opinia','option') ):
    @endphp
      <section class="section section-slider">
          <div class="container">
            <div class="row">

                <div class="glide">
                    <div data-glide-el="track" class="glide__track">
                      <ul class="glide__slides">
    @php
        while ( have_rows('opinia','option') ) : the_row();
            $opinia = get_sub_field('tresc');
            $autor = get_sub_field('autor');

            @endphp
                              <li class="glide__slide">
                                  <div class="testimonial">
                                    <p class="pgh pgh--testimonial">
                                       {!! $opinia !!}
                                    </p>
                                    <p class="pgh pgh--author text-right">
                                      {!! $autor !!}
                                    </p>
                                  </div>
                                </li>
            @php

        endwhile;

    @endphp
                  </ul>
                </div>

                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                </div>
            </div>

            </div>
            </div>
            </section>
    @php

    else :
        // no rows found
    endif;
@endphp

@endsection