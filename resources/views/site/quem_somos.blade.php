@include("site.includes.head")
<body class="_quem-somos">

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
        <div class="container-fav">
            <h1>Quem somos</h1>
        </div>
       
      </section>
     <!-- SECTION HERO -->


     
    <!-- SECTIONS EXTRAS -->
    <section class="container-fluid s_quem-somos" id="quem-somos">
        <div class="container-fav">
            <div class="_menu">
                <nav>
                    <div class="nav-component _active">
                        <a href="/quem-somos.html#quem-somos">Quem Somos</a>
                    </div>
                    <div class="nav-component">
                        <a href="/sommelier.html#quem-somos">Sommelier</a>
                    </div>
                    <div class="nav-component">
                        <a href="/diretoria.html#quem-somos">Diretoria</a>
                    </div>
                </nav>
            </div>
            <div class="_text">
                <h2>ABS - PE</h2>
                <p>A Associação Brasileira de Sommeliers é uma entidade sem fins lucrativos, que tem por objetivo a difusão da cultura do vinho e de outras bebidas, bem como seu consumo responsável, por meio de cursos dirigidos a amadores e profissionais e de inúmeras atividades culturais e sociais. A ABS foi fundada no Rio de Janeiro, em 1983, por iniciativa do sommelier e restaurateur Danio Braga, italiano de Parma radicado no país há mais de 40 anos, seu presidente até hoje. Em 1989, a convite de Danio, o empresário e amante de vinhos Ciro Lilla liderou o grupo que fundou a ABS São Paulo. Hoje, além de Rio de Janeiro e São Paulo, a ABS tem representações oficiais em vários estados.</p>
            </div>
        </div>
    </section>

    {{--  NUMEROS  --}}
    @include("site.includes.numeros")

    {{--  VANTAGENS  --}}
    @include("site.includes.vantagens")

    {{--  PARCEIROS  --}}
    @include("site.includes.parceiros")

<script>
    
</script>

@include("site.includes.footer")