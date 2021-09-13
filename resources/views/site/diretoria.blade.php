@include("site.includes.head")

<body class="_quem-somos">

    <!-- MENU LATERAL -->
    @include("site.includes.menu_lateral")
    <!-- MENU LATERAL -->

    {{-- BARRA DE LOGIN E CADASTRE-SE --}}
    @include("site.includes.barra_login")


    {{-- NAVBAR SUPEROR --}}
    @include("site.includes.navbar")
    <!-- BARRA SUPERIOR DE LOGIN E HEADER-->


    <!-- SECTIONS EXTRAS -->
    <section class="container-fluid s_quem-somos _diretoria" id="quem-somos">
        <div class="container-fav">
            <div class="_menu">
                <nav>
                    <div class="nav-component">
                        <a href="/quem-somos.html#quem-somos">Quem Somos</a>
                    </div>
                    <div class="nav-component">
                        <a href="/sommelier.html#quem-somos">Sommelier</a>
                    </div>
                    <div class="nav-component _active">
                        <a href="/diretoria.html#quem-somos">Diretoria</a>
                    </div>
                </nav>
            </div>
            <div class="_diretores">
                <div class="_diretor showin">
                    <div class="img">
                        <img src="{{asset('site/img/_dRenato.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="_name">
                            RENATO ARCANJO COSTA
                        </div>
                        <div class="_cargo">
                            <img src="{{asset('site/img/medal.svg')}}" alt="">
                            Presidente
                        </div>
                        <div class="_description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus rhoncus diam eros molestie
                                augue volutpat turpis nibh. Sollicitudin non elit vitae egestas tempor consectetur
                                curabitur sapien. Est aliquet a eget amet vel scelerisque. </p>
                        </div>
                    </main>

                </div>
                <div class="_diretor showin">
                    <div class="img">
                        <img src="{{asset('site/img/_dRenato.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="_name">
                            RENATO ARCANJO COSTA
                        </div>
                        <div class="_cargo">
                            <img src="{{asset('site/img/medal.svg')}}" alt="">
                            Presidente
                        </div>
                        <div class="_description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus rhoncus diam eros molestie
                                augue volutpat turpis nibh. Sollicitudin non elit vitae egestas tempor consectetur
                                curabitur sapien. Est aliquet a eget amet vel scelerisque. </p>
                        </div>
                    </main>

                </div>
                <div class="_diretor showin">
                    <div class="img">
                        <img src="{{asset('site/img/_dRenato.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="_name">
                            RENATO ARCANJO COSTA
                        </div>
                        <div class="_cargo">
                            <img src="{{asset('site/img/medal.svg')}}" alt="">
                            Presidente
                        </div>
                        <div class="_description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus rhoncus diam eros molestie
                                augue volutpat turpis nibh. Sollicitudin non elit vitae egestas tempor consectetur
                                curabitur sapien. Est aliquet a eget amet vel scelerisque. </p>
                        </div>
                    </main>

                </div>
                <div class="_diretor showin">
                    <div class="img">
                        <img src="{{asset('site/img/_dRenato.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="_name">
                            RENATO ARCANJO COSTA
                        </div>
                        <div class="_cargo">
                            <img src="{{asset('site/img/medal.svg')}}" alt="">
                            Presidente
                        </div>
                        <div class="_description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus rhoncus diam eros molestie
                                augue volutpat turpis nibh. Sollicitudin non elit vitae egestas tempor consectetur
                                curabitur sapien. Est aliquet a eget amet vel scelerisque. </p>
                        </div>
                    </main>

                </div>
            </div>
        </div>
    </section>

    {{-- PARCEIROS --}}
    @include("site.includes.parceiros")

    <script>

    </script>

    @include("site.includes.footer")
