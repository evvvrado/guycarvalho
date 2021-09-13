@include("site.includes.head")
<body class="_home">

    <section class="container-fluid _infobox">
        <div class="_box">
            <span id="_info"></span>
        </div>
        <div class="_loadingBox">
        </div>
    </section>


    <div class="_toUp">
        <img src="{{asset('site/img/arrow.svg')}}" alt="Seta para cima">
    </div>


    <div id="backdrop">
        <div class="logo"><img src="{{asset('site/img/_logo91.png')}}" alt="Logo ABS-Brasil"></div>
    </div>

    <!-- MENU LATERAL -->
    @include("site.includes.menu_lateral")
    <!-- MENU LATERAL -->

    {{--  BARRA DE LOGIN E CADASTRE-SE  --}}
    @include("site.includes.barra_login")

    
    {{--  NAVBAR SUPEROR  --}}
    @include("site.includes.navbar")
    <!-- BARRA SUPERIOR DE LOGIN E HEADER-->


    <!-- SECTION HERO -->
    <section class="container-fluid s_hero">
        <div class="hero_cards">
            <div>
                <img src="{{asset('site/img/calendarpointed.svg')}}" alt="" />
                <span>04.02.21</span>
            </div>
            <div>
                <img src="{{asset('site/img/alarm.svg')}}" alt="" />
                <span>Às 20hs</span>
            </div>
        </div>

        <div class="container-fav">
            <div class="text">
                <div class="curso_online">
                    <img src="{{asset('site/img/greenball.svg')}}" alt="" />
                    <p>Curso online</p>
                </div>
                <div class="title">
                    <h1>Curso de formação de sommeliers e profissionais</h1>
                </div>
                <div class="info">
                    <p class="minitext">Apenas</p>
                    <h1>
                        10X<span class="lowsized">R$</span>550<span class="lowsized">,00</span>
                    </h1>
                </div>
                <button class="btn-primary">Inscreva-se</button>
            </div>

            <div class="hero_indicator">
                <div>
                    <img src="{{asset('site/img/heroindicator_A.svg')}}" alt="" />
                </div>

                <div>
                    <img src="{{asset('site/img/heroindicator_B.svg')}}" alt="" />
                </div>
                <!-- 
          <div>
            <img src="{{asset('site/img/heroindicator_B.svg')}}" alt="" />
          </div> -->
            </div>
        </div>
    </section>
    <!-- SECTION HERO -->

    <!-- SECTIONS EXTRAS -->
    <section class="container-fluid s_cursos ">
        <div class="container-fav showin">
            <div class="content">
                <div class="title">
                    <h2>Confira nossa agenda para os próximos dias</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas
                        malesuada sagittis.
                    </p>
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
                                    10X<span class="lowsized">R$</span>550<span class="lowsized">,00</span>
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
                                    10X<span class="lowsized">R$</span>550<span class="lowsized">,00</span>
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
                                <img src="{{asset('site/img/_curso4.png')}}" alt="" />
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
                    <div class="curso-item">
                        <div class="curso-pic">
                            <div class="img">
                                <img src="{{asset('site/img/_curso3.png')}}" alt="" />
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
                <div class="btn-case">
                    <button class="btn-primary">Ver agenda completa</button>
                </div>

            </div>

        </div>
    </section>

    <section class="container-fluid s_quem">
        <div class="container-fav showin">
            <div class="title">
                <h3>Quem somos</h3>
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus sed
                    felis ipsum mattis at. Duis consequat dis dolor pellentesque
                    tincidunt sit sit diam mattis. Imperdiet tristique felis etiam est.
                    Cursus sit potenti at ut a maecenas elit.
                </p>
            </div>

            <div class="_options">
                <div>
                    <h4>Nossos Cursos</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus
                        sed felis ipsum mattis at.
                    </p>
                    <button class="btn-alternative">Ver agenda</button>
                </div>

                <div>
                    <h4>Nossos Eventos</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus
                        sed felis ipsum mattis at.
                    </p>
                    <button class="btn-alternative">Ver agenda</button>
                </div>
            </div>
        </div>

        </div>
    </section>

    {{--  NUMEROS  --}}
    @include("site.includes.numeros")

    {{--  VANTAGENS  --}}
    @include("site.includes.vantagens")

    <section class="container-fluid s_blog">
        <div class="container-fav">
            <div class="text">
                <h2>Blog</h2>
                <button class="btn-primary" onclick="window.location.href = '/blog.html' ">Acessar blog</button>
            </div>
            <div class="blog-group">
                <div class="blog-item">
                    <div class="blog-pic">
                        <div class="img">
                            <img src="{{asset('site/img/_noticia1.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="row">
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{asset('site/img/calendarpointed.svg')}}" alt="" />
                                </div>
                                <span>22 junho 2021</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text">
                                <span>Simply dummy text of the printing typesetting industry. </span>
                            </div>
                            <button class="btn-alternative">
                                LEIA MAIS
                            </button>
                        </div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-pic">
                        <div class="img">
                            <img src="{{asset('site/img/_noticia2.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="row">
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{asset('site/img/calendarpointed.svg')}}" alt="" />
                                </div>
                                <span>22 junho 2021</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text">
                                <span>Simply dummy text of the printing typesetting industry. </span>
                            </div>
                            <button class="btn-alternative">
                                LEIA MAIS
                            </button>
                        </div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-pic">
                        <div class="img">
                            <img src="{{asset('site/img/_noticia3.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="row">
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{asset('site/img/calendarpointed.svg')}}" alt="" />
                                </div>
                                <span>22 junho 2021</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text">
                                <span>Simply dummy text of the printing typesetting industry. </span>
                            </div>
                            <button class="btn-alternative" onclick="window.location.href = '/blog-post.html'">
                                LEIA MAIS
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--  PARCEIROS  --}}
    @include("site.includes.parceiros")

@include("site.includes.footer")