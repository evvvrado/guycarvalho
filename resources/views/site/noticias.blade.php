@include("site.includes.head")

<body class="_blog">

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


    <!-- SECTIONS EXTRAS -->
    <section class="container-fluid s_blog-vertical">
        <div class="container-fav">
            <div class="vertical-blog">
                <div class="img"><img src="{{asset('site/img/_bvertical1.jpg')}}"></div>
                <div class="_title">Prêmio ABS-Brasil
                    melhores do Ano
                    2020</div>
                <button class="btn-alternative">
                    <span>Saiba Mais</span>
                    <div class="svg">
                        <img src="{{asset('site/img/arrowlong.svg')}}" alt="">
                    </div>
                </button>
            </div>
            <div class="vertical-blog">
                <div class="img"><img src="{{asset('site/img/_bvertical2.jpg')}}"></div>
                <div class="_title">Prêmio ABS-Brasil
                    melhores do Ano
                    2020</div>
                <button class="btn-alternative">
                    <span>Saiba Mais</span>
                    <div class="svg">
                        <img src="{{asset('site/img/arrowlong.svg')}}" alt="">
                    </div>
                </button>
            </div>
            <div class="vertical-blog">
                <div class="img"><img src="{{asset('site/img/_bvertical3.jpg')}}"></div>
                <div class="_title">Prêmio ABS-Brasil
                    melhores do Ano
                    2020</div>
                <button class="btn-alternative">
                    <span>Saiba Mais</span>
                    <div class="svg">
                        <img src="{{asset('site/img/arrowlong.svg')}}" alt="">
                    </div>
                </button>
            </div>
        </div>
    </section>
    <section class="container-fluid s_blogmenu">
        <div class="container-fav">
            <h2>Categorias</h2>
            <div class="_menu">
                <nav>
                    <div class="nav-component _active">
                        <a href="">Todas</a>
                    </div>
                    <div class="nav-component">
                        <a href="">ABS-PE</a>
                    </div>
                    <div class="nav-component">
                        <a href="">Na Mídia</a>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <section class="container-fluid s_blog">
        <div class="container-fav">
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

    {{-- PARCEIROS --}}
    @include("site.includes.parceiros")

    <script>

    </script>

    @include("site.includes.footer")
