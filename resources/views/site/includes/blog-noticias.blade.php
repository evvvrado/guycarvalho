<section class="container-fluid s_blog">
    <div class="container-fav">
        <div class="_title">
            <div class="_icon">
                <img src="{{ asset('site/img/icon_check.svg') }}" alt="Ícone de Check" />
            </div>
            <h4>Blog</h4>
        </div>

        <div class="_content">
            <div class="_blogList">
                @foreach(\App\Models\Noticia::where([["publicacao", "<=", date("Y-m-d")], ["tipo", 0]])->orderby("publicacao")->limit(12)->get() as $noticia)
                    <div class="_blog" onclick="window.location.href = '{{route('site.noticia', ['categoria' => $noticia->categoria->slug, 'noticia' => $noticia->slug])}}'">
                        <div class="_pic">
                            <img src="{{ asset($noticia->preview) }}" alt="{{$noticia->titulo}}" />
                        </div>
                        <div class="_info">
                            <span class="blogTag">{{strtoupper($noticia->categoria->nome)}}</span>
                            <h6 class="blogTitle">{{$noticia->titulo}}</h6>
                            <p class="blogDate">{{date("d.m.Y", strtotime($noticia->publicacao))}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="_menu">
            <div class="_buttons">
                <div class="_previous _button">
                    <img src="{{ asset('site/img/halfarrowleft.svg') }}" alt="Seta indicando a esquerda" />
                </div>

                <div class="_indicator">
                    <img class="active" alt="Indicador da lista" />
                    <img alt="Indicador da lista" />
                    <img alt="Indicador da lista" />
                </div>

                <div class="_next _button">
                    <img src="{{ asset('site/img/halfarrowright.svg') }}" alt="Seta indicando a direita" />
                </div>
            </div>
        </div>
    </div>
</section>