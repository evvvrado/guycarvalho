@include("site.includes.head")

<body class="_galerias _galeria">

    <section class="container-fluid _infobox">
        <div class="_box">
            <span id="_info"></span>
        </div>
        <div class="_loadingBox">
        </div>
    </section>

    <div id="backdrop">
        <div class="logo"><img src="{{ asset('site/img/_logo91.png') }}" alt="Logo ABS-Brasil"></div>
    </div>

    <!-- MENU LATERAL -->
    @include("site.includes.menu_lateral")
    <!-- MENU LATERAL -->

    {{-- BARRA DE LOGIN E CADASTRE-SE --}}
    @include("site.includes.barra_login")


    {{-- NAVBAR SUPEROR --}}
    @include("site.includes.navbar")
    <!-- BARRA SUPERIOR DE LOGIN E HEADER-->


    <section class="container-fluid s_galeria">
        <div class="container-fav">
            <h2>Galeria 1</h2>
            <div class="_list">
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery2.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery3.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery4.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery5.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery6.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery7.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery8.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
            </div>
            <h2>Galeria 2</h2>
            <div class="_list">
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery2.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery3.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery4.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery5.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery6.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery7.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery8.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
            </div>
            <h2>Galeria 3</h2>
            <div class="_list">
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery2.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery3.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery4.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery5.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery6.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery7.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
                <a href="/galeria.html" class="_img">
                    <img src="{{asset('site/img/_gallery8.jpg')}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                </a>
            </div>
        </div>
    </section>

    {{-- PARCEIROS --}}
    @include("site.includes.parceiros")

    <script>

    </script>

    @include("site.includes.footer")
