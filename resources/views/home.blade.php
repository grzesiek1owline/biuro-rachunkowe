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

<section class="section section-about" id="oferta">
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
        <div class="text-center text-md-left text-lg-left">
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

<section class="section section-prices" id="cennik">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="baner">
          <p class="baner__text">
            Chcesz dowiedzieć się więcej? Chętnie porozmawiamy o tym co możemy dla Ciebie zrobić
          </p>
          <button class="btn btn--transparent btn--bigger">
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
      <div class="col-12 col-lg-5">
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
      <div class="col-12 col-lg-7">
        <ul class="details__list details__list--right">
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


<section class="section section-team" id="onas">
  <div class="half-bg">
    <img src="@asset('images/kobieta@2x.png')" alt="" class="half-img">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 offset-0 offset-lg-6 team-text">
        <div class="section-title">
          <p class="section-title__small">poznaj nas</p>
          <h2 class="section-title__head section-title__head--light">Biuro Rachunkowe</h2>
          <p class="pgh pgh--light team-pgh">
            W skład biura wchodzą dwa podmioty świadczące ten sam zakres usług:
            - Biuro Rachunkowe Wiesława Renata Wyrzykowska <br>
            - Biuro Rachunkowe dr Wojciech Wyrzykowski <br>
            <br><br>
            Renata Wyrzykowska
            przez 30 lat kierowała pionami finansowymi dużych firm Trójmiasta.
            <br><br>
            Wojciech Wyrzykowski
            oprócz wieloletniej praktyki zawodowej jest również wykładowcą akademickim  autorem kilkudziesięciu publikacji w tym 10 monografii dotyczących zagadnień, podatkowych, rachunkowych i przedsiębiorczości. Wykłada m.in. przedmioty: Prawo podatkowe, rachunkowość podatkowa, międzynarodowe prawo podatkowe i przedsiębiorczość w UE.
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
            Chcesz dowiedzieć się więcej? Chętnie porozmawiamy o tym co możemy dla Ciebie zrobić
          </p>
          <button class="btn btn--transparent btn--bigger">
            Umów spotkanie
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-slider">
  <div class="container">
    <div class="row">

        <div class="glide">
            <div data-glide-el="track" class="glide__track">
              <ul class="glide__slides">
                <li class="glide__slide">
                  <div class="testimonial">
                    <p class="pgh pgh--testimonial">
                      Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae
                    </p>
                    <p class="pgh pgh--author text-right">
                      Marek z Kielc
                    </p>
                  </div>
                </li>
                <li class="glide__slide">
                    <div class="testimonial">
                      <p class="pgh pgh--testimonial">
                        Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae
                      </p>
                      <p class="pgh pgh--author text-right">
                        Marek z Kielc
                      </p>
                    </div>
                  </li>
                  <li class="glide__slide">
                      <div class="testimonial testimonial--even">
                        <p class="pgh pgh--testimonial">
                          Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae
                        </p>
                        <p class="pgh pgh--author text-right">
                          Marek z Kielc
                        </p>
                      </div>
                    </li>
                    <li class="glide__slide">
                        <div class="testimonial">
                          <p class="pgh pgh--testimonial">
                            Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae
                          </p>
                          <p class="pgh pgh--author text-right">
                            Marek z Kielc
                          </p>
                        </div>
                      </li>
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
@endsection