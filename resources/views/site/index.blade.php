@include('site.includes.head')
<body class="home" style="overflow:hidden;">
    @include('site.includes.bodyHeader', [
        "classe" => "brasil",
        "adicional" => '<h2>Seja um Sommelier</h2>
        <!--<p>Com nossos cursos online você poderá identificar o vinho pela safra e mostrar que saber de vinho é fundamental.</p>-->
        <!--<div class="nums">
            <a target="_blank" rel="noopener" title="Navegar curso" href="' . route('site.cursos') . '">
                <h3>01</h3>
                <p>Aguardem - Vem novidades! </p>
            </a>
            <a target="_blank" rel="noopener" title="Navegar curso" href="' . route('site.cursos') . '">
                <h3>02</h3>
                <p>Curso de Introdução em Coquetelaria - Online</p>
            </a>
            <a target="_blank" rel="noopener" title="Navegar curso" href="' . route('site.cursos') . '">
                <h3>01</h3>
                <p>Aguardem - Vem novidades!  On-line</p>
            </a>
        </div>-->
        <div class="curso">
            <img src="' . asset('site/img/curso1.jpg') . '" width="328" height="183" alt="Imagem curso Header">
            <div>
                <p>Aguardem - Vem novidades!  -</p>
                <h3>On-line</h3>
                <h4><!--10x <span>R$</span>550<span>,00</span>--> <span>R$ Aguardem!</span> </h4>
                <a href="' . route('site.cadastro') . '">EM BREVE TURMAS</a>
                <div>
                    <p><img src="' . asset('site/img/ico_alarme.svg') . '" width="20" height="20" alt="Ícone despertador">Em breve</p>
                    <p><img src="' . asset('site/img/ico_calendario.svg') . '" width="18" height="20" alt="Ícone calendário">Em breve</p>
                </div>
            </div>
        </div>'    
    ])
    <main class="main">
        <section id="agenda">
            <div class="maxSec">
                <img class="taca" src="{{ asset('site/img/tacas.svg') }}" width="439" height="199"
                    alt="Taças desenhadas em uma linha">
                <div class="intro">
                    <h2 class="traco">Confira nossa agenda para os próximos cursos</h2>
                    <!-- 						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi eget sed etiam diam. Et placerat sit placerat amet felis, pellentesque accumsan. Volutpat vel sapien amet, neque sed scelerisque arcu consequat. Facilisis et in lectus arcu dictum.</p> -->
                </div>

                <div class="cursos">
                    <div class="linha"></div>
                    <div class="meses">
                        <button class="mes">Maio</button>
                        <!--							<button class="mes">Março</button>
                        <button class="mes">Abril</button>-->
                    </div>
                    <div class="curso branco">
                        <img src="{{ asset('site/img/curso1.jpg') }}" width="328" height="183"
                            alt="Imagem curso Header">
                        <div>
                            <p>Aguardem - Vem novidades!</p>
                            <h3>On-line</h3>
                            <h4>
                                <!--10x <span>R$</span>550<span>,00</span>--> <span>R$ Aguardem!</span>
                            </h4>
                            <a href="/cadastro">EM BREVE TURMAS</a>
                            <div>
                                <p><img src="{{asset('site/img/ico_calendario.svg')}}" width="18" height="20" alt="Ícone calendário">Em
                                    breve</p>
                                <p><img src="{{asset('site/img/ico_alarme.svg')}}" width="20" height="20" alt="Ícone despertador">Em
                                    breve</p>
                            </div>
                        </div>
                    </div>
                    <div class="curso">
                        <img src="{{ asset('site/img/curso1.jpg') }}" width="328" height="183"
                            alt="Imagem curso Header">
                        <div>
                            <p>Aguardem - Vem novidades!</p>
                            <h3>On-line</h3>
                            <h4>
                                <!--10x <span>R$</span>550<span>,00</span>--> <span>R$ Aguardem!</span>
                            </h4>
                            <a href="/cadastro">EM BREVE TURMAS</a>
                            <div>
                                <p><img src="{{ asset('site/img/ico_calendario.svg') }}" width="18" height="20"
                                        alt="Ícone calendário">Em breve</p>
                                <p><img src="{{ asset('site/img/ico_alarme.svg') }}" width="20" height="20"
                                        alt="Ícone despertador">Em breve</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{route('site.cursos')}}" class="btn">Ver agenda completa</a>
            </div>
        </section>
        <section id="quem-somos" class="fundo">
            <div class="grid">
                <div class="intro">
                    <h2 class="traco">A Associação Brasileira de Sommeliers</h2>
                    <p>A Associação Brasileira de Sommeliers é uma entidade sem fins lucrativos, que tem por objetivo a
                        difusão da cultura do vinho e de outras bebidas, bem como seu consumo responsável, por meio de
                        cursos dirigidos a amadores e profissionais e de inúmeras atividades culturais e sociais.</p>
                </div>
                <img src="{{ asset('site/img/quem-somos-mv.jpg') }}" width="298" height="408" alt="Moça vinhos">
                <div>
                    <div>
                        <h2 class="traco">Nossos Cursos</h2>
                        <p>A ABS-Brasil oferece ampla gama de cursos para profissionais e apreciadores do vinho e outras
                            bebidas.</p>
                        <a href="{{route('site.cursos')}}">Ver cursos</a>
                    </div>
                    <div>
                    </div>
        </section>
        <section id="blogHome" class="slider fundo">
            <div class="base">
                <div>
                    <div class="sliderPreCorpo" style="height:505px;">
                        <div class="gradeBlog sliderCorpo">
                            <div class="sliderItem">
                                <a href="/noticias/projeto-digital">
                                    <img width="370" height="191" src="{{ asset('site/img/_blog1.jpg') }}"
                                        alt="Ilustra Blog 1">
                                    <p class="info">
                                        <img width="18" height="19" src="{{ asset('site/img/ico_calendar.svg') }}"
                                            alt="Icone calendário">3.Jun 2021
                                    </p>
                                </a>
                                <a class="tag" href="/noticias/abs-brasil">ABS Brasil</a>
                                <h3><a href="/noticias/projeto-digital" class="blogItem">Lançamento projeto digital
                                        Associação Brasileira de Sommeliers - Brasil</a></h3>
                                <p class="texto">
                                    <a href="/noticias/projeto-digital">
                                        A lançamento desse nosso site demonstra a maturidade de nossa Associação
                                        Brasileira de Sommeliers - Brasil e a disposição dos vários Presidentes das
                                        secções regionais para levarmos adiante esse produto arrojado
                                    </a>
                                </p>
                            </div>
                            <div class="sliderItem">
                                <a href="/noticias/danio-braga">
                                    <img width="370" height="191" src="{{ asset('site/img/_blog2.jpg') }}"
                                        alt="Ilustra Blog 2">
                                    <p class="info">
                                        <img width="18" height="19" src="{{ asset('site/img/ico_calendar.svg') }}"
                                            alt="Icone calendário">2.Jun 2021
                                    </p>
                                </a>
                                <a class="tag" href="/noticias/abs-brasil">ABS Brasil</a>
                                <h3><a href="/noticias/danio-braga" class="blogItem">Danio Braga – Presidente
                                        ABS-Brasil</a></h3>
                                <p class="texto">
                                    <a href="/noticias/danio-braga">
                                        Caros amigos, quando me tornei Sommelier profissional no longínquo ano de 1978,
                                        prestei meu exame a banca Julgadora da melhor qualidade, uma trinca e tanto:
                                        Franco Colombani que era na época o Presidente AIS...
                                    </a>
                                </p>
                            </div>
                            <div class="sliderItem magro">
                                <a href="/noticias/vinagre">
                                    <img width="370" height="191" src="{{ asset('site/img/_blog3.jpg') }}"
                                        alt="Ilustra Blog 3">
                                    <p class="info">
                                        <img width="18" height="19" src="{{ asset('site/img/ico_calendar.svg') }}"
                                            alt="Icone calendário">3.Jun 2021
                                    </p>
                                </a>
                                <a class="tag" href="/noticias/abs-brasil">ABS Brasil</a>
                                <h3><a href="/noticias/vinagre" class="blogItem">O vinagre, tao antigo quanto o
                                        vinho</a></h3>
                                <p class="texto"><a href="/noticias/vinagre">A profissão de sommelier, como outras,
                                        exige constante atualização e a ABS-SP...</a></p>
                            </div>
                            <div class="sliderItem magro">
                                <a href="/noticias/asi">
                                    <img width="370" height="191" src="{{ asset('site/img/_blog4.jpg') }}"
                                        alt="Ilustra Blog 4">
                                    <p class="info">
                                        <img width="18" height="19" src="{{ asset('site/img/ico_calendar.svg') }}"
                                            alt="Icone calendário">30.Mai 2021
                                    </p>
                                </a>
                                <a class="tag" href="/noticias/na-midia">Na Mídia</a>
                                <h3><a href="/noticias/asi" class="blogItem">Association de la Sommellerie
                                        Internationale - ASI</a></h3>
                                <p class="texto"><a href="/noticias/asi">Fundada em junho de 1969 na França, a
                                        Association de la Sommellerie Internationale...</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="sliderBtn">
                        <button title="Anterior"><img width="32" height="32"
                                src="{{ asset('site/img/ico_setaEsq.svg') }}" alt="Seta esquerda"></button>
                        <button title="Próximo" class="proximo"><img width="32" height="32"
                                src="{{ asset('site/img/ico_setaDir.svg') }}" alt="Seta direita"></button>
                    </div>
                </div>
                <div>
        </section>
        <section id="numeros">
            <img class="banner" src="{{ asset('site/img/banner_numeros.jpg') }}" alt="Queijos e vinho" width="405"
                height="467">
            <div class="intro">
                <h2 class="traco">A ABS</h2>
                <p>Foi fundada no Rio de Janeiro, em 1983, por iniciativa do sommelier e restaurateur Danio Braga. Em
                    2011 liderou campanha que culminou com a regulamentação da profissão de Sommelier</p>
            </div>
            <div class="direita">
                <div class="caixas">
                    <div>
                        <img src="{{ asset('site/img/ico_tacas.svg') }}" width="58" height="58" alt="Taças">
                        <p><span class="grande">38</span>anos de história</p>
                    </div>
                    <div>
                        <img src="{{ asset('site/img/ico_globo.svg') }}" width="51" height="51" alt="Pessoas globo">
                        <p><span>10</span>ABS Estaduais</p>
                    </div>
                    <div>
                        <img src="{{ asset('site/img/ico_livros.svg') }}" width="50" height="50" alt="Livros">
                        <p><span>1</span>Curso</p>
                    </div>
                </div>
                <h2>Fonte de formação de sommeliers profissionais do país</h2>
                <a href="{{route('site.quem_somos')}}" class="botao">Quem somos</a>
            </div>
        </section>
        <section id="sommelierHome" class="fundo">
            <div class="base">
                <div class="conheca">
                    <h2 class="traco">Sommelier, conheça a profissão</h2>
                    <p>Quando da popularização dos restaurantes em Paris, no final do séc. XVIII, convencionou-se que
                        quem trazia ou transportava o vinho ficava com a obrigação de prová-lo, não só pelo motivo
                        exposto acima, mas também para garantir se o produto era de boa qualidade.</p>
                    <p>Assim, paulatinamente, nasceu a profissão como é conhecida hoje; o Sommelier é responsável pela
                        escolha, compra, recebimento, guarda e pela prova do vinho antes que seja servido ao cliente.
                    </p>
                    <a class="botao" href="/sommelier">Continue lendo</a>
                </div>
                <div class="deonde">
                    <img src="{{ asset('site/img/ico_baloes.svg') }}" width="70" height="70" alt="Balões">
                    <h3>Da onde vem este termo: Sommelier?</h3>
                    <p>A palavra Sommelier vem do francês. Em resumo, o carroceiro dos castelos e palácios, que, por
                        transportar as pipas de vinho, acabou sendo incumbido de provar seu conteúdo antes que fosse
                        servido aos Reis e nobres.</p>
                </div>
            </div>
        </section>
        <section id="onde" class="fundo">
            <div class="base">
                <img class="postal" src="{{ asset('site/img/banner_onde.jpg') }}" alt="Postal" width="505"
                    height="647">
                <div class="cidades">
                    <h2 class="traco">Onde estamos</h2>
                    <h4>Cidades</h4>
                    <a href="/estaduais/sp">Associação Brasileira de Sommeliers - São Paulo</a>
                    <a href="/estaduais/sc">Associação Brasileira de Sommeliers - Santa Catarina</a>
                    <a href="/estaduais/rj">Associação Brasileira de Sommeliers - Rio de Janeiro</a>
                    <a href="/estaduais/mg">Associação Brasileira de Sommeliers - Minas Gerias</a>
                    <a href="/estaduais/rs">Associação Brasileira de Sommeliers - Rio Grande do Sul</a>
                    <a href="/estaduais/pr">Associação Brasileira de Sommeliers - Paraná</a>
                    <a href="/estaduais/pe">Associação Brasileira de Sommeliers - Pernambuco</a>
                    <a href="/estaduais/ce">Associação Brasileira de Sommeliers - Ceará</a>
                    <a href="/estaduais/go">Associação Brasileira de Sommeliers - Goiás</a>
                    <a href="/estaduais/df">Associação Brasileira de Sommeliers - Distrito Federal</a>
                </div>
            </div>
        </section>
        <hr>
        <section id="apoio">
            <nav>
                <a target="_blank" rel="noopener" title="Navegar para apoio 1" href="#"><img
                        src="{{ asset('site/img/apoio4.jpg') }}" width="117" height="117" alt="Logomarca Apoio 4"></a>
                <a target="_blank" rel="noopener" title="Navegar para apoio 2" href="#"><img
                        src="{{ asset('site/img/apoio2.jpg') }}" width="117" height="117" alt="Logomarca Apoio 2"></a>
                <a target="_blank" rel="noopener" title="Navegar para apoio 3" href="#"><img
                        src="{{ asset('site/img/apoio3.jpg') }}" width="117" height="117" alt="Logomarca Apoio 3"></a>
                <a target="_blank" rel="noopener" title="Navegar para apoio 4" href="#"><img
                        src="{{ asset('site/img/apoio4.jpg') }}" width="117" height="117" alt="Logomarca Apoio 4"></a>
            </nav>
        </section>
    </main>
    @include('site.includes.footer')
</body>

</html>
