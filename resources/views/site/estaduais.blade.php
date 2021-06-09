@include('site.includes.head')
<style>


    
    #categoriasEstaduais #nav{
        display: flex;
        margin-top: 52px;
        margin-bottom: 30px;
        border-bottom: 1px solid rgba(183,177,177,0.5);
    }

    #categoriasEstaduais #nav a{
        width: 100%;
        display: inline-block;
        font-family: Spartan;
        font-weight: normal;
        font-size: 16px;
        line-height: 18px;
        text-align: center;
        color: #686868;
        padding: 0 1vw;
        line-height: 200%;
        margin-bottom: -1px;
        border-bottom: 2px solid transparent;
    }

    .contato {
        display: flow-root;
        margin-bottom: 100px;
    }

    .zigzag h3{
        color: var(--corAmarelo)!important;
    }

    .zigzag .estadoimg{
        height: 100% !important;
    }

    .zigzog{
        width: 100% !important;
        height: 100% !important;
        box-sizing: border-box !important;
        padding: 50px !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: baseline !important;
        justify-content: center !important;
    } 

    .zogzig{
        width: 100% !important;
        height: 100% !important;
        box-sizing: border-box  !important;
        padding: 25px  !important;
        display: flex  !important;
        flex-direction: column  !important;
        align-items: baseline  !important;
        justify-content: center  !important;
    }

    a.ativo{
        border-bottom: 2px solid var(--corVinho1) !important;
    }

    #saibamais{
        background-color: black;
        float: right;
        height: 40px;
        width: fit-content;
        display: flex;
        font-weight: bold;
        align-items: center;
        background-color: var(--corAmarelo);
        color: #674c00;
    }

    #saibamais p::before{
        display: none !important;
    }

    .estaduaiscase{
        height: 340px;
        display: flex;
        padding:0;
        align-items: center;
    }
</style>
<body class="estaduais" style="overflow:hidden;">
    @include('site.includes.bodyHeader', [
        "classe" => "estaduais",
        "adicional" => '<div class="direita">
            <h1>ABS<br>Estaduais</h1>
            <a href="' . route('site.quem_somos') . '">Quem somos</a>
        </div>'    
    ])
    <main class="main">
        <section id="estaduais" class="fundo" style="background-color:	var(--SIS_COR_BACKGROUND);">
            <h1>ABS Estaduais</h1>
        </section>
        <section id="categoriasEstaduais">
            <h2>Regiões</h2>
            <div id="nav">
                <a href="{{route('site.estaduais')}}" @if(url()->current() == route('site.estaduais')) class="ativo" @endif>
                    Todas
                </a>
                @foreach(config("globals.regioes") as $key => $regiao)
                    <a 
                        href="{{route('site.estaduais.filtro', ['slug' => Illuminate\Support\Str::slug($regiao)])}}"
                        @if(url()->current() == route('site.estaduais.filtro', ['slug' => Illuminate\Support\Str::slug($regiao)]))
                            class="ativo"
                        @endif
                    >
                        {{$regiao}}
                    </a>
                @endforeach
            </div>
        </section>
        <section id="blog">
            <!-- <div class="zigzag">
                @foreach($estaduais as $estadual)
                    <div>
                        <a href="{{route('site.estadual', ['slug' => $estadual->slug])}}" class="blogItem"><img src="{{asset($estadual->foto)}}" alt="Ilustra blog 1" width="470" height="400"></a>
                        <div class="zigzog">
                            <a href="{{route('site.estadual', ['slug' => $estadual->slug])}}" class="blogItem"><h3>{{$estadual->nome}}</h3></a>
                            <a class="blogCat" href="{{route('site.estaduais.filtro', ['slug' => Illuminate\Support\Str::slug(config('globals.regioes')[$estadual->regiao])])}}">{{config("globals.regioes")[$estadual->regiao]}}</a>
                            <p style="line-height: 25px;">
                                <span><a class="fone" href="tel:{{$estadual->telefone}}" target="_blank" rel="nofollow noopener"><b>Telefone:</b> {{$estadual->telefone}}</a></span>
                                <span><a class="site" href="{{$estadual->site}}" target="_blank" rel="nofollow noopener"><b>Site:</b> {{$estadual->site}}</a></span>
                                <span><a class="email" href="mailto:{{$estadual->email}}" target="_blank" rel="nofollow noopener"><b>Email:</b> {{$estadual->email}}</a></span>
                                <span><a class="face" href="{{$estadual->facebook}}" target="_blank" rel="nofollow noopener"><b>Facebook:</b> {{$estadual->facebook}}</a></span>
                                <span><a class="insta" href="{{$estadual->instagram}}" target="_blank" rel="nofollow noopener"><b>Instagram:</b> {{$estadual->instagram}}</a></span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> -->

        <div class="zigzag"> 
                @foreach($estaduais as $estadual)
                    <div class="estaduaiscase">
                        <a href="{{route('site.estadual', ['slug' => $estadual->slug])}}" class="blogItem"><img src="{{asset($estadual->foto)}}" alt="Ilustra blog 1" width="470" height="400" class="estadoimg"></a>
                        <div class="zigzog">
                            <a href="{{route('site.estadual', ['slug' => $estadual->slug])}}" class="blogItem"><h3>{{$estadual->nome}}</h3></a>
                            <a class="blogCat" href="{{route('site.estaduais.filtro', ['slug' => Illuminate\Support\Str::slug(config('globals.regioes')[$estadual->regiao])])}}">{{config("globals.regioes")[$estadual->regiao]}}</a>
                            <p style=" overflow: initial;">
                                <span><a class="fone" href="tel:{{$estadual->telefone}}" target="_blank" rel="nofollow noopener"><b style="color: var(--corAmarelo)"><i class="fas fa-phone-alt"></i></b> {{$estadual->telefone}}</a></span>
                                <span><a class="site pt-3" href="{{$estadual->site}}" target="_blank" rel="nofollow noopener"><b style="color: var(--corAmarelo)"><i class="far fa-window-maximize"></i></b> {{$estadual->site}}</a></span>
                                <span><a class="email pt-3" href="mailto:{{$estadual->email}}" target="_blank" rel="nofollow noopener"><b style="color: var(--corAmarelo)"><i class="fas fa-envelope"></i></b> {{$estadual->email}}</a></span>
                                <span><a class="face pt-3" href="{{$estadual->facebook}}" target="_blank" rel="nofollow noopener"><b style="color: var(--corAmarelo)"><i class="fab fa-facebook"></i></b> {{$estadual->facebook}}</a></span>
                                <span><a class="insta pt-3" href="{{$estadual->instagram}}" target="_blank" rel="nofollow noopener"><b style="color: var(--corAmarelo)"><i class="fab fa-instagram"></i></b> {{$estadual->instagram}}</a></span>
                            </p>

                            <div style="width: 100%;">
                                <a id="saibamais" class="position-absolute mb-5 p-4" href="{{route('site.estadual', ['slug' => $estadual->slug])}}">                        
                                        <span class="mr-2"> Saiba Mais </span><img src="https://homolog.abs-brasil.com/site/img/ico_setaAmarela.svg" style="filter: brightness(0.4);" alt="seta" width="15" height="8">
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        
    </main>
    @include('site.includes.footer')
</body>

</html>
