@include('site.includes.head')
<body class="brasil" style="overflow:hidden;">
     @include('site.includes.bodyHeader', [
        "classe" => "brasil info-header",
        "adicional" => '<div class="direita">
            <h1 style="padding-right: 150px">Quem<br> somos</h1>
            <a href="' . route('site.sommelier') . '">Descubra mais</a>
        </div>'    
    ])
    <main class="main">
        @include('site.includes.menuBrasil')
        

        <section id="quemSomos">
            <h1>ABS Brasil, <span>uma entidade a serviço do vinho.</span></h1>
            <div class="colunas">
                <p>
                    A Associação Brasileira de Sommeliers é uma entidade sem fins lucrativos, que tem por objetivo a difusão da cultura do vinho e de outras bebidas, bem como seu consumo responsável, por meio de cursos dirigidos a amadores e profissionais e de inúmeras atividades culturais e sociais.
                    A ABS foi fundada no Rio de Janeiro, em 1983, por iniciativa do sommelier e restaurateur Danio Braga, italiano de Parma radicado no país há mais de 40 anos, seu presidente até hoje. Em 1989, a convite de Danio, o empresário e amante de vinhos Ciro Lilla liderou o grupo que fundou a ABS São Paulo. Hoje, além de Rio de Janeiro e São Paulo, a ABS tem representações oficiais em vários estados.
                </p>
                <p>
                    Entre outras conquistas, a ABS liderou campanha que culminou com a regulamentação da profissão de Sommelier, em 2011.
                    Desde sua fundação, a ABS Brasil e suas representações estaduais são filiadas à Association de la Sommellerie Internationale (ASI). Com sede em Paris, a ASI é a principal representante mundial desses profissionais. Institucionalmente, cabe à ABS organizar, periodicamente, concursos para a certificação de profissionais, tanto a nível regional como a nível Brasil, esse último o máximo reconhecimento que um sommelier pode alcançar no país. Esses concursos seguem rigorosamente a metodologia utilizada internacionalmente pela ASI.
                <p>
        </section>
        @include('site.includes.numeros')
        <section id="outrosBrasil">
            <div>
                <img src="{{asset('site/img/ico_id.svg')}}" alt="Diretoria" width="32" height="32">
                <h3>Conheça os membros da Diretoria</h3>
                <a href="/diretoria">Ver mais</a>
            </div>
            <div>
                <img src="{{asset('site/img/taca.png')}}" alt="Taça Martini" width="32" height="32" style="width:auto;height:32px;">
                <h3>Sommelier, conheça a profissão</h3>
                <p>O Sommelier é o profissional responsável pelas bebidas (principalmente, mas não unicamente, vinho) no estabelecimento, que pode ser um restaurante, bar ou um comércio - loja ou importadora de bebidas.</p>
                <a href="/sommelier">Ver mais</a>
            </div>
        </section>
    </main>
    @include('site.includes.footer')
</body>

</html>
