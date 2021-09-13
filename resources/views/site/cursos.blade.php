@include("site.includes.head")

<body class="_cursos-e-eventos">

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


    <!-- SECTION HERO -->
    <section class="container-fluid s_hero">
        <div class="container-fav">
            <h1>Cursos e eventos</h1>
        </div>

    </section>
    <!-- SECTION HERO -->


    <!-- SECTIONS EXTRAS -->
    <section class="container-fluid s_cursos ">
        <div class="container-fav showin">
            <div class="content">
                <div class="title">
                    <nav class="_filter">
                        <h2 class="_cursosbutton _active">Cursos</h2>
                        <h2 class="_eventosbutton">Eventos</h2>
                    </nav>
                </div>
                <div class="_cursos">
                    <div class="curso-group">
                        <div class="curso-item">
                            <div class="curso-pic">
                                <div class="img">
                                    <img src="{{asset('site/img/_curso2.png')}}" alt="" />
                                </div>
                                <div class="curso_online">
                                    <img src="{{asset('site/img/greenball.svg')}}" alt="" />
                                    <p>Curso online</p>
                                </div>
                            </div>
                            <div class="curso-content">
                                <div class="row">
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/calendar.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/bUser.svg')}}" alt="" />
                                        </div>
                                        <span>Presencial</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/clock.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text">
                                        <div class="svg">
                                            <img src="{{asset('site/img/cup.svg')}}" alt="" />
                                        </div>
                                        <span>Curso de formação de Sommelier</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price">
                                        10X<span class="lowsized">R$</span>550<span
                                            class="lowsized">,00</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn-primary"
                                        onclick="window.location.href = '/curso-detalhes.html#conteudo'">
                                        Inscreva-se
                                        <div class="svg">
                                            <img src="{{asset('site/img/arrowlong.svg')}}" alt="" />
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="curso-item">
                            <div class="curso-pic">
                                <div class="img">
                                    <img src="{{asset('site/img/_curso2.png')}}" alt="" />
                                </div>
                                <div class="curso_online">
                                    <img src="{{asset('site/img/greenball.svg')}}" alt="" />
                                    <p>Curso online</p>
                                </div>
                            </div>
                            <div class="curso-content">
                                <div class="row">
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/calendar.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/bUser.svg')}}" alt="" />
                                        </div>
                                        <span>Presencial</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/clock.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text">
                                        <div class="svg">
                                            <img src="{{asset('site/img/cup.svg')}}" alt="" />
                                        </div>
                                        <span>Curso de formação de Sommelier</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price">
                                        10X<span class="lowsized">R$</span>550<span
                                            class="lowsized">,00</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn-primary">
                                        Inscreva-se
                                        <div class="svg">
                                            <img src="{{asset('site/img/arrowlong.svg')}}" alt="" />
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title">
                        <h2>Junho</h2>
                    </div>

                    <div class="curso-group">
                        <div class="curso-item">
                            <div class="curso-pic">
                                <div class="img">
                                    <img src="{{asset('site/img/_curso2.png')}}" alt="" />
                                </div>
                                <div class="curso_online">
                                    <img src="{{asset('site/img/greenball.svg')}}" alt="" />
                                    <p>Curso online</p>
                                </div>
                            </div>
                            <div class="curso-content">
                                <div class="row">
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/calendar.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/bUser.svg')}}" alt="" />
                                        </div>
                                        <span>Presencial</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/clock.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text">
                                        <div class="svg">
                                            <img src="{{asset('site/img/cup.svg')}}" alt="" />
                                        </div>
                                        <span>Curso de formação de Sommelier</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price">
                                        10X<span class="lowsized">R$</span>550<span
                                            class="lowsized">,00</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn-primary"
                                        onclick="window.location.href = '/curso-detalhes.html#conteudo'">
                                        Inscreva-se
                                        <div class="svg">
                                            <img src="{{asset('site/img/arrowlong.svg')}}" alt="" />
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="curso-item">
                            <div class="curso-pic">
                                <div class="img">
                                    <img src="{{asset('site/img/_curso2.png')}}" alt="" />
                                </div>
                                <div class="curso_online">
                                    <img src="{{asset('site/img/greenball.svg')}}" alt="" />
                                    <p>Curso online</p>
                                </div>
                            </div>
                            <div class="curso-content">
                                <div class="row">
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/calendar.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/bUser.svg')}}" alt="" />
                                        </div>
                                        <span>Presencial</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/clock.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text">
                                        <div class="svg">
                                            <img src="{{asset('site/img/cup.svg')}}" alt="" />
                                        </div>
                                        <span>Curso de formação de Sommelier</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price">
                                        10X<span class="lowsized">R$</span>550<span
                                            class="lowsized">,00</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn-primary">
                                        Inscreva-se
                                        <div class="svg">
                                            <img src="{{asset('site/img/arrowlong.svg')}}" alt="" />
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_eventos">
                    <div class="curso-group">
                        <div class="curso-item">
                            <div class="curso-pic">
                                <div class="img">
                                    <img src="{{asset('site/img/_curso2.png')}}" alt="" />
                                </div>
                                <div class="curso_online">
                                    <img src="{{asset('site/img/greenball.svg')}}" alt="" />
                                    <p>Curso online</p>
                                </div>
                            </div>
                            <div class="curso-content">
                                <div class="row">
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/calendar.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/bUser.svg')}}" alt="" />
                                        </div>
                                        <span>Presencial</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/clock.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text">
                                        <div class="svg">
                                            <img src="{{asset('site/img/cup.svg')}}" alt="" />
                                        </div>
                                        <span>Curso de formação de Sommelier</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price">
                                        10X<span class="lowsized">R$</span>550<span
                                            class="lowsized">,00</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn-primary"
                                        onclick="window.location.href = '/curso-detalhes.html#conteudo'">
                                        Inscreva-se
                                        <div class="svg">
                                            <img src="{{asset('site/img/arrowlong.svg')}}" alt="" />
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="curso-item">
                            <div class="curso-pic">
                                <div class="img">
                                    <img src="{{asset('site/img/_curso2.png')}}" alt="" />
                                </div>
                                <div class="curso_online">
                                    <img src="{{asset('site/img/greenball.svg')}}" alt="" />
                                    <p>Curso online</p>
                                </div>
                            </div>
                            <div class="curso-content">
                                <div class="row">
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/calendar.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/bUser.svg')}}" alt="" />
                                        </div>
                                        <span>Presencial</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/clock.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text">
                                        <div class="svg">
                                            <img src="{{asset('site/img/cup.svg')}}" alt="" />
                                        </div>
                                        <span>Curso de formação de Sommelier</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price">
                                        10X<span class="lowsized">R$</span>550<span
                                            class="lowsized">,00</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn-primary">
                                        Inscreva-se
                                        <div class="svg">
                                            <img src="{{asset('site/img/arrowlong.svg')}}" alt="" />
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="title">
                        <h2>Junho</h2>
                    </div>

                    <div class="curso-group">
                        <div class="curso-item">
                            <div class="curso-pic">
                                <div class="img">
                                    <img src="{{asset('site/img/_curso2.png')}}" alt="" />
                                </div>
                                <div class="curso_online">
                                    <img src="{{asset('site/img/greenball.svg')}}" alt="" />
                                    <p>Curso online</p>
                                </div>
                            </div>
                            <div class="curso-content">
                                <div class="row">
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/calendar.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/bUser.svg')}}" alt="" />
                                        </div>
                                        <span>Presencial</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/clock.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text">
                                        <div class="svg">
                                            <img src="{{asset('site/img/cup.svg')}}" alt="" />
                                        </div>
                                        <span>Curso de formação de Sommelier</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price">
                                        10X<span class="lowsized">R$</span>550<span
                                            class="lowsized">,00</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn-primary"
                                        onclick="window.location.href = '/curso-detalhes.html#conteudo'">
                                        Inscreva-se
                                        <div class="svg">
                                            <img src="{{asset('site/img/arrowlong.svg')}}" alt="" />
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="curso-item">
                            <div class="curso-pic">
                                <div class="img">
                                    <img src="{{asset('site/img/_curso2.png')}}" alt="" />
                                </div>
                                <div class="curso_online">
                                    <img src="{{asset('site/img/greenball.svg')}}" alt="" />
                                    <p>Curso online</p>
                                </div>
                            </div>
                            <div class="curso-content">
                                <div class="row">
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/calendar.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/bUser.svg')}}" alt="" />
                                        </div>
                                        <span>Presencial</span>
                                    </div>
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/clock.svg')}}" alt="" />
                                        </div>
                                        <span>Ás 20hs</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text">
                                        <div class="svg">
                                            <img src="{{asset('site/img/cup.svg')}}" alt="" />
                                        </div>
                                        <span>Curso de formação de Sommelier</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price">
                                        10X<span class="lowsized">R$</span>550<span
                                            class="lowsized">,00</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn-primary">
                                        Inscreva-se
                                        <div class="svg">
                                            <img src="{{asset('site/img/arrowlong.svg')}}" alt="" />
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

    {{--  VANTAGENS  --}}
    @include("site.includes.vantagens")

    {{--  PARCEIROS  --}}
    @include("site.includes.parceiros")
    <!-- SECTIONS EXTRAS -->
    @include("site.includes.footer")
