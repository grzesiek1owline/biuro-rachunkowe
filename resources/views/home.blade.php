@extends('layouts.app') @section('content')
<section class="section section-intro">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="intro__body">
          <h1 class="intro__title">Oszczędzamy Twój czas i pieniądze</h1>
          <p class="pgh pgh--subtitle intro__pgh">abyś spokojnie rozwijał swój biznes</p>
          <button class="btn intro__btn">Sprawdź ofertę</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-about">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="section-title">
          <p class="section-title__small">SPRAWNOŚĆ, ZAUFANIE I POUFNOŚĆ</p>
          <h2 class="section-title__head">Wieloletnie doświadczenie zawodowe, kompleksowa
            i rzetelna obsługa</h2>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="text-center text-lg-left">
          <p class="pgh pgh--dark about__pgh">
            Biura działa na rynku od 2000 r. Działalność oparta jest o wieloletnie doświadczanie zawodowe ich
            właścicieli i pracowników. <br /><br />
            Posiadamy wypracowane procedury gwarantujące kompleksowe
            i rzetelna obsługę podatkową, księgowo i kadrowo - płacową.
            Gwarantujemy sprawność, zaufanie i poufność w zakresie przekazywanej dokumentacji!
          </p>
        </div>
      </div>
    </div>
    <div class="row align-items-center align-items-lg-stretch flex-column flex-lg-row about__row">
      <div class="col-12 col-lg-4">
        <div class="box-icon">
          <img src="@asset('images/accounting.svg')" alt="usługi księgowe" class="box-icon__image" />
          <h3>Usługi księgowe</h3>
          <p class="pgh pgh--dark">Oferujemy kompleksową obsługę
            w zakresie prowadzenia ksiąg rachunkowych i podatkowych.</p>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="box-icon">
          <img src="@asset('images/employee.svg')" alt="kadry i płace" class="box-icon__image" />
          <h3>Usługi kadrowo - płacowe</h3>
          <p class="pgh pgh--dark">Realizujemy wszystkie rozliczenia płacowe, obsługujemy dokumentacje kadrową,
            rozliczamy pracowników oraz właścicieli firm.</p>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="box-icon">
          <img src="@asset('images/taxes.svg')" alt="podatki" class="box-icon__image" />
          <h3>Doradztwo podatkowe
            i usługi ekonomiczne</h3>
          <p class="pgh pgh--dark">Oferujemy kompleksowe rozliczenia podatkowe, doradztwo w sprawach podatkowych,
            analizy finansowe
            i sprawozdania.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="about__details">
    <div class="container">
      <div class="row align-items-center align-items-lg-stretch flex-column flex-lg-row">
        <div class="col-12 col-lg-4">
          <div class="details">
            <h3>Usługi księgowe</h3>
            <ul class="details__list">
              <li class="details__element">
                <p class="pgh">Usługi w zakresie prowadzenia ksiąg rachunkowych,</p>
              </li>
              <li class="details__element">
                <p class="pgh">Prowadzenie ewidencji dla celów podatku VAT,</p>
              </li>
              <li class="details__element">
                <p class="pgh">Usługi w zakresie prowadzenia ksiąg rachunkowych,</p>
              </li>
              <li class="details__element">
                <p class="pgh">Prowadzenie ewidencji dla celów podatku VAT,</p>
              </li>
              <li class="details__element">
                <p class="pgh">Usługi w zakresie prowadzenia ksiąg rachunkowych,</p>
              </li>
              <li class="details__element">
                <p class="pgh">Prowadzenie ewidencji dla celów podatku VAT,</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <div class="details">
            <h3>Usługi kadrowo - płacowe</h3>
            <ul class="details__list">
              <li class="details__element">
                <p class="pgh">Usługi w zakresie prowadzenia ksiąg rachunkowych,</p>
              </li>
              <li class="details__element">
                <p class="pgh">Prowadzenie ewidencji dla celów podatku VAT,</p>
              </li>
              <li class="details__element">
                <p class="pgh">Usługi w zakresie prowadzenia ksiąg rachunkowych,</p>
              </li>
              <li class="details__element">
                <p class="pgh">Prowadzenie ewidencji dla celów podatku VAT,</p>
              </li>
              <li class="details__element">
                <p class="pgh">Usługi w zakresie prowadzenia ksiąg rachunkowych,</p>
              </li>
              <li class="details__element">
                <p class="pgh">Prowadzenie ewidencji dla celów podatku VAT,</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <div class="details">
            <h3>Doradztwo podatkowe i usługi ekonomiczne</h3>
            <ul class="details__list">
              <li class="details__element">
                <p class="pgh">Usługi w zakresie prowadzenia ksiąg rachunkowych,</p>
              </li>
              <li class="details__element">
                <p class="pgh">Prowadzenie ewidencji dla celów podatku VAT,</p>
              </li>
              <li class="details__element">
                <p class="pgh">Usługi w zakresie prowadzenia ksiąg rachunkowych,</p>
              </li>
              <li class="details__element">
                <p class="pgh">Prowadzenie ewidencji dla celów podatku VAT,</p>
              </li>
              <li class="details__element">
                <p class="pgh">Usługi w zakresie prowadzenia ksiąg rachunkowych,</p>
              </li>
              <li class="details__element">
                <p class="pgh">Prowadzenie ewidencji dla celów podatku VAT,</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-prices">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="baner">
          <p class="baner__text">
            Chcesz dowiedzieć się więcej? Chętnie porozmawiamy o tym co możemy dla Ciebie zrobić
          </p>
          <button class="btn btn--transparent">
            Umów spotkanie
          </button>
        </div>
      </div>
    </div>
    <div class="row row-prices">
      <div class="col-12">
        <div class="section-title">
          <p class="section-title__small">cennik</p>
          <h2 class="section-title__head">Ile zapłacisz za usługi</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-6">
        <p class="pgh pgh--dark">
          Opłaty za usługi, które świadczy biuro rachunkowe ustalane są indywidualnie w drodze negocjacji z Klientem.
          Uzależnione są one między innymi od:
        </p>
        <ul class="details__list">
          <li class="details__element">
            <p class="pgh pgh--dark">dddd</p>
          </li>
          <li class="details__element">
            <p class="pgh pgh--dark">dddd</p>
          </li>
          <li class="details__element">
            <p class="pgh pgh--dark">dddd</p>
          </li>
          <li class="details__element">
            <p class="pgh pgh--dark">dddd</p>
          </li>
          <li class="details__element">
            <p class="pgh pgh--dark">dddd</p>
          </li>
        </ul>
      </div>
      <div class="col-12 col-lg-6">
        <ul class="details__list">
          <li class="details__element">
            <p class="pgh pgh--dark">dddd</p>
          </li>
          <li class="details__element">
            <p class="pgh pgh--dark">dddd</p>
          </li>
          <li class="details__element">
            <p class="pgh pgh--dark">dddd</p>
          </li>
          <li class="details__element">
            <p class="pgh pgh--dark">dddd</p>
          </li>
          <li class="details__element">
            <p class="pgh pgh--dark">dddd</p>
          </li>
        </ul>
      </div>

    </div>
    <div class="row">
      <div class="col-12">
        <p class="pgh pgh--dark">
          *Podane ceny są cenami netto. Podane ceny nie stanowią oferty w rozumieniu art. 66 Kodeksu Cywilnego. Służą one wyłącznie do oszacowania wartości usług przy współpracy z Klientem.
        </p>
      </div>
    </div>
  </div>
</section>


<section class="section section-team">
  <div class="section__half-bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 offset-0 offset-lg-6">
        <div class="section-title">
          <p class="section-title__small">sdfsdf</p>
          <h2 class="section-title__head">sdfsdfsdfsdfsdfsdf</h2>
          <p class="pgh">sddssad</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-baner">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="baner">
          <p class="baner__text">
            ewrwerwerwer
          </p>
          <button class="btn btn--transparent">
            umów spotkanie
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-slider">
  <div class="container">
    <div class="row">
      <ul class="testimonials">
        <li class="testimonial">
          <p class="pgp">dsffdf</p>
          <p class="pgh">Adam z Krakowa</p>
        </li>
      </ul>
    </div>
  </div>
</section>

@endsection