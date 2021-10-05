@include("site.includes.head")


<body id="catalogo">

@include("site.includes.navbar")


<section class="container-fluid s_hero">
    <div class="container-fav">
      <div class="_h1 fade">
        <h6>WORKSHOPS AO VIVO</h6>
        <img src="{{ asset('site/img/feira/catalogo/poweroflife.svg') }}" alt="poweroflife">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua.
        </p>
        <button name="hero_button">
          <img src="{{ asset('site/img/arrowright.svg') }}" alt="" />
        </button>
      </div>
    </div>
</section>



@include("site.includes.footer")