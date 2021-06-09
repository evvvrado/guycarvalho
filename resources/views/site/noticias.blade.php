@include('site.includes.head')
<body class="cursos" style="overflow:hidden;">
    @include('site.includes.bodyHeader', [
        "classe" => "blog"    
    ])
    <main class="main">
        @if($destaques)
            <section id="destaquesBlog" class="slider">
                <div class="sliderPreCorpo">
                    <div class="sliderCorpo">
                        @foreach($destaques as $destaque)
                            <div class="sliderItem">
                                <img src="{{asset($destaque->preview)}}" alt="{{$destaque->titulo}}" width="389" height="532">
                                <div>
                                    <div>
                                        <h3><a href="{{route('site.noticia', ['categoria' => $destaque->categoria->slug, 'noticia' => $destaque->slug])}}">{{$destaque->titulo}}</a></h3>
                                        <a class="blogCat" href="{{route('site.noticias', ['slug' => $destaque->categoria->slug])}}">{{$destaque->categoria->nome}}</a>
                                        <a class="blogItem" href="{{route('site.noticia', ['categoria' => $destaque->categoria->slug, 'noticia' => $destaque->slug])}}">Saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="sliderItem">
                            <img src="{{asset('site/img/_blogDestaque2.jpg')}}" alt="Blog destaque 2" width="389" height="532">
                            <div>
                                <div>
                                    <h3><a href="/noticias/danio-braga">Danio Braga – Presidente ABS-Brasil</a></h3>
                                    <a class="blogCat" href="/noticias/abs-brasil">ABS Brasil</a>
                                    <a class="blogItem" href="/noticias/danio-braga">Saiba mais</a>
                                </div>
                            </div>
                        </div>
                        <div class="sliderItem">
                            <img src="{{asset('site/img/_blogDestaque3.jpg')}}" alt="Blog destaque 3" width="389" height="532">
                            <div>
                                <div>
                                    <h3><a href="/noticias/vinagre"></a>O vinagre, tao antigo quanto o vinho</h3>
                                    <a class="blogCat" href="/noticias/abs-estaduais">ABS Brasil</a>
                                    <a class="blogItem" href="/noticias/vinagre">Saiba mais</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="sliderBtn">
                    <button title="Anterior"><img width="32" height="32" src="/img/ico_setaEsq.svg" alt="Seta esquerda"></button>
                    <button title="Próximo" class="proximo"><img width="32" height="32" src="/img/ico_setaDir.svg" alt="Seta direita"></button>
                </div>
            </section> 
        @endif
        <section id="categoriasBlog">
            <h2>Categorias</h2>
            <nav>
                <a href="{{route('site.noticias')}}" @if(url()->current() == route("site.noticias", ['slug' => ''])) class="ativo" @endif>Todas</a>
                @foreach(App\Models\Categoria::all() as $categoria)
                    <a href="{{route('site.noticias', ['slug' => $categoria->slug])}}" @if(url()->current() == route("site.noticias", ['slug' => $categoria->slug])) class="ativo" @endif>{{$categoria->nome}}</a>
                @endforeach
            </nav>
        </section>
        <section id="blog">
            <div class="zigzag">
                @foreach($noticias as $noticia)
                    <div>
                        <a href="{{route('site.noticia', ['categoria' => $noticia->categoria->slug, 'noticia' => $noticia->slug])}}" class="blogItem"><img src="{{asset($noticia->preview)}}" alt="Ilustra blog 1" width="470" height="342"></a>
                        <div style="width: 100%;">
                            <a href="{{route('site.noticia', ['categoria' => $noticia->categoria->slug, 'noticia' => $noticia->slug])}}" class="blogItem"><h3>{{$noticia->titulo}}</h3></a>
                            <a class="blogCat" href="{{route('site.noticias', ['slug' => $noticia->categoria->slug])}}">{{$noticia->categoria->nome}}</a>
                            <p>
                                <a href="{{route('site.noticia', ['categoria' => $noticia->categoria->slug, 'noticia' => $noticia->slug])}}">
                                    {!! $noticia->resumo !!}
                                </a>
                            </p>
                            <div style="width: 100%;">
                                <a href="{{route('site.noticia', ['categoria' => $noticia->categoria->slug, 'noticia' => $noticia->slug])}}" class="seta"><img src="{{asset('site/img/ico_setaAmarela.svg')}}" alt="seta" width="15" height="8"></a>
                                <p>{{date("d/m/Y", strtotime($noticia->created_at))}}</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
    @include('site.includes.footer')
</body>

</html>
