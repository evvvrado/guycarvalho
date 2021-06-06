@include('site.includes.head')
<style>
    
</style>
<body class="estadual" style="overflow:hidden;">
    @include('site.includes.bodyHeader', [
        "classe" => "estaduais",
        "adicional" => ''    
    ])
    <main class="main">
        <section id="menuBrasil">
            <a class="voltar" href="{{route('site.estaduais')}}">Voltar</a>
            <img src="{{asset('site/img/tacaLinha.svg')}}" alt="Taça" width="141" height="113">
        </section>
        <section id="diretoria">
            <h1 style="font-family: Segoe UI; font-size: 45px; line-height: 65px;">{{$estadual->nome}}</h1>
            <div class="apresenta container-fluid d-flex align-content-center">
                <div class="container">
                    <h2 class="mb-5 text-center">Sobre</h2>

                    <div style="margin: auto; background-image: url('/site/img/_linedivider.png'); background-size: 100%; width: 250px; height: 50px;"></div>
                            
                    <div class="mt-5" style='font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji" !important; font-weight: lighter;'>
                        {!! $estadual->sobre !!}
                    </div>
                    {{--  <h3 class="mt-5" style="font-weight: lighter;">  --}}
                        
                    {{--  </h3>  --}}
                            
                    <div class="row d-flex flex-column align-content-center">
                        <h2 class="text-center">Composição da Diretoria</h2>
                        <div class="zigzag diretoria">
                            @foreach($estadual->diretorias->sortBy("ordem") as $diretoria)
                                <div>
                                    <h4>{{$diretoria->cargo}}</h4>
                                    <h3>{{$diretoria->nome}}</h3>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('site.includes.footer')
</body>

</html>
