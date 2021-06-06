@include('site.includes.head')
<body class="brasil" style="overflow:hidden;">
    @include('site.includes.bodyHeader', ["classe" => "brasil"])
    <main class="main">
        @include('site.includes.menuBrasil')
        <section id="diretoria">
            <h1>Conheça a diretoria</h1>
            <div class="zigzag">
                <div>
                    <img src="{{asset('site/img/foto-danio-braga.jpg')}}" alt="Nome do diretor 1" width="470" height="342">
                    <div>
                        <h3>Danio Braga</h3>
                        <h4>Presidente</h4>
                        <h5>Profissão: Sommelier profissional e diretor de vinhos do Grupo Fasano</h5>
                        <h5>Tempo de associação: fundador e atual Presidente</h5>
                        <p>
                            Atual Presidente, Fundou em 1983 a Associação Brasileira de Sommeliers-ABS, que transformou a relação dos consumidores com o vinho e que, desde então, vem formando e qualificando profissionais e interessados no assunto. A ABS se tornou a segunda maior do mundo, atrás apenas da Associazione Italiana Sommelier-ASI, mudando o mercado de vinhos no Brasil. Seu livro Sommelier, profissão do futuro foi usado para promoção e reconhecimento da categoria profissional.
                            Continua professor e integrante da APAS Associacao Panamericana de Sommeliers da qual já foi Presidente por dois mandatos. Integrante do comitê didático da APAS, sommelier Professional desde 1978.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('site/img/foto-joseph.jpg')}}" alt="Nome do diretor 2" width="470" height="342">
                    <div>
                        <h3>Joseph R Morgan Junior </h3>
                        <h4>Vice-Presidente</h4>
                        <h5>Profissão:  Engenheiro Eletrônico</h5>
                        <h5>Tempo de associação:  18 anos (Junho/2003)</h5>
                        <p>
                            Engenheiro Eletrônico pela UFRJ, com especialização em administração de empresas pela PUC-RJ. Empresário da área de TI, presidente da  ABS- Associação Brasileira de Sommeliers - Rio de Janeiro (2019-2021). Formador credenciado pela C.I.V.B. Conselho Interprofissional de Vinhos de Bordeaux, professor em cursos de formação de profissionais da área de vinhos e na condução de grupos de degustação na ABS-RJ. Participa como júri um concursos de Sommeliers e de avaliação de vinhos.
                            O vinho me fascina porque ele é muito mais do que uma bebida. Vinho é história, cultura, desenvolvimento humano... É um presente que a natureza dá ao homem. Vinho é confraternização, amizade, socialização. Vinho é vida.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('site/img/foto-mario-telles-junior.jpg')}}" alt="Nome do diretor 5" width="470" height="342">
                    <div>
                        <h3>Mario Telles Junior</h3>
                        <h4>Secretário</h4>
                        <h5>Profissão: Médico</h5>
                        <h5></h5>
                        <p>
                            * Médico pediatra, mestre em pediatria pela Universidade de São Paulo, dedica-se ao estudo do vinho desde 1974.
                            <br>* Membro fundador da ABS-São Paulo, sendo seu sócio nº 3 e primeiro Diretor de De-gustação, tendo feito parte de todas as diretorias eleitas da ABS-SP desde então
                            <br>* Presidente da ABS-SP em 3 mandatos e atual Diretor Executivo e de Cursos
                            <br>* Vice Presidente ABS-BRASIL por 2 mandatos
                            <br>* Fundador da ABS-BRASIL, da qual é o atual Secretário Geral
                            <br>* Realiza há 30 anos viagens de estudos a diversas regiões vitivinícolas no Brasil e ao redor do mundo.
                            <br>* Autor de diversos artigos publicados em revistas e jornais especializados.
                            <br>* Orientou degustações e proferiu palestras em diferentes eventos ligados ao vinho, como os Salões Internacionais do Vinho, Boa Mesa e para muitos grupos de profissionais médicos e empresariais.
                            <br>* Participou como jurado de concursos como Wines of Chile, Wines of Argentina e Vin-Italy
                            <br>* Criador e um dos organizadores dos Cursos Básico, Avançado, Profissional e de Compatibilização Enogastronômica da ABS-SP desde sua fundação.
                            <br>* Organizou e ministrou aulas nos Cursos de Champagne, Vinhos da Alemanha, Vinhos Fortificados, Vinhos de Sobremesa, Vinhos da Alsácia, Vinhos da Espanha, Vinhos de Portugal, Vinhos da Itália, Vinhos da Borgonha, Vinhos de Bordeaux e Chianti realizados pela ABS/SP.
                            <br>* Fez parte de todos os júris do Concurso do Melhor Sommelier de São Paulo e do Brasil além de participar da sua organização.
                            <br>* É considerado um dos mais experimentados degustadores brasileiros, com experiência internacional, contando com arquivo de anotações escritas e comentadas de cerca de 10.000 vinhos diferentes incluindo todos os grandes ícones mundiais.
                            <br>* É confrade da Confraria de Vinhos da Bairrada desde 2003 e da Confraria de Vinhos da Estremadura desde 2004, bem como da Confraria dos Vinhos do Alentejo e Cavaleiro da Ordem do Vinho do Porto
                            <br>* Foi editor e proprietário da revista Wine Style desde 2000, onde foi autor de vários artigos sobre degustação, enogastronomia, historia do vinho e enoturismo.
                            <br>* Criou e dirige desde 2016, a Academia de Bartenders, tendo organizado a grade dos 3 módulos do inovador Curso de Sommelier Bartender
                            <br>* Não tem qualquer vínculo comercial pessoal com qualquer produtor , importador ou qualquer entidade comercial que negocie vinhos
                    </p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('site/img/foto-osvaldo.jpg')}}" alt="Nome do diretor 5" width="470" height="342">
                    <div>
                        <h3>Oswaldo Vasconcelos</h3>
                        <h4>Diretor Tesoureiro</h4>
                        <h5></h5>
                        <h5>Participa das atividades da ABS-SP desde 1996 e na diretoria há mais de 15 anos</h5>
                        <p>Bancário desde 1966, tendo passado pelos Bancos Nacional, Safra, Sudameris, BCN, Bradesco. Atualmente exerce o cargo de Superintendente do Banco Rendimento</p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('site/img/foto-andreia-gentilini-milan.jpg')}}" alt="Nome do diretor 5" width="470" height="342">
                    <div>
                        <h3>Andreia Gentilini Milan</h3>
                        <h4>Diretora Executiva</h4>
                        <h5>Profissão: Sommelier e Administradora de empresas</h5>
                        <h5>Tempo de associação: 6 anos ABS-RS</h5>
                        <p>
                            Atua há 14 anos no setor vitivinícola nas áreas de mercado e marketing do vinho. Esteve à frente do WINESOF BRASIL durante 8 anos na construção do posicionamento do vinho brasileiro no mercado nacional e internacional. É consultora em gestão de categoria de vinhos para o grande varejo e em gestão comercial para vinícolas brasileiras.
                            Sommelier profissional, administradora de empresas com MBA pela Fundação Dom Cabral e Post-MBA naKellogg School of Management. Membro do conselho da ABS-Brasil , ex-presidente e atual tesoureira daABS-RS. Empreendedora do mundo do vinho, é uma das idealizadoras da marca premium de espumantes Amitié e sócia da Agencia de Viagem Bem Vino, com foco em Enoturismo.
                            O que mais me fascina no mundo dos vinhos é saber que em cada garrafa que abrimos é uma descoberta e dentro dela está contida uma identidade de produtor e de uma região.
                            É a capacidade que o mundo do vinho tem de nos instigar pela busca do conhecimento constante nos fazendo sentir eternos aprendizes desta arte milenar.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('site/img/_diretor.jpg')}}" alt="Nome do diretor 2" width="470" height="342">
                    <div>
                        <h3>Andersen Jorge Silva Prado</h3>
                        <h4>Diretor Executivo</h4>
                        <h5>Profissão: Jornalista</h5>
                        <h5>Tempo de associação: 20 anos.</h5>
                        <p>
                            41 anos trabalhando no ramo de alimentos e bebidas , fundador a Abrasel Paraná, professor de enologia na Pontifícia Universidade Católica do Paraná entre 2009 e 2019. Formado em Jornalismo com pós graduação em eventos e enogastronomia, atual Presidente da Abs-Pr.
                            O que mais me fascina no mundo dos vinhos é a cultura a história e a confraternização.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('site/img/foto-jose-roberto-dantas.jpg')}}" alt="Nome do diretor 2" width="470" height="342">
                    <div>
                        <h3>José Roberto Ferreira Dantas</h3>
                        <h4>Diretor Executivo</h4>
                        <h5></h5>
                        <h5>Tempo de associação:  5 anos</h5>
                        <p>Fundador e Presidente da ABS  PE  no triênio 2014-2017 e 2017-2020. Professor da ABS PE. Presidente da SBAV PE 2004 a 2009.</p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('site/img/foto-thiago-juca.jpg')}}" alt="Nome do diretor 2" width="470" height="342">
                    <div>
                        <h3>Thiago Jucá</h3>
                        <h4>Diretor Executivo</h4>
                        <h5>Profissão: Administrador de Empresas</h5>
                        <h5>Tempo de associação: 9 ano e 4 meses</h5>
                        <p>
                            Administrador de Empresas, e pós-graduado em Finanças pela Universidade Estadual do Ceará- UECE. Sommelier formado pela Associação Brasileira de Sommeliers (ABS). Possui também formação na instituição inglesa WSET (Wine & Spirit Education Trust, qualificação de nível 2 em vinhos e destilados. Co-fundador da Associação Brasileira de Sommelier secção Ceará. Professor dos cursos intermediários da Associação Brasileira de Sommelier. Membro fundador da Confraria Medit, com 6 anos de existência. Participou de diversas feiras de vinhos (ProWein, Vinexpo, ExpoVinis, Vinum Brasilis, ViniPortugal, etc) e viajou, em missões técnicas, pelas regiões produtoras da França, Itália, Portugal, Espanha, Chile, Uruguai, Argentina e Brasil.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('site/img/foto-rossela.jpg')}}" alt="Nome do diretor 2" width="470" height="342">
                    <div>
                        <h3>Rossela Ceni</h3>
                        <h4>Diretora Executivo</h4>
                        <h5>Profissão: Advogada </h5>
                        <h5>Tempo de associação:  Desde 2016</h5>
                        <p>
                            Sommelière pela ABS SP/SC em 2016, Diretora da ABS/SC 2017-2019, Presidente da ABS/SC gestão 2020-2022. Professora nas temáticas de Análise Sensorial de Vinhos e História do Vinho na ABS/SC. Advogada previdenciarista.
                            O que me fascina no mundo do vinho são as infinitas possibilidades culturais que se ligam a ele, manifestadas através da história, da geopolítica, da tradição e  dos hábitos de convivialidade ao longo do tempo.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('site/img/foto-sergio-da-silva.jpg')}}" alt="Nome do diretor 2" width="470" height="342">
                    <div>
                        <h3>Sérgio da Silva Venâncio Pires</h3>
                        <h4>Conselheiro Fiscal</h4>
                        <h5>Profissão: Sommelier</h5>
                        <h5>Tempo de associação: 2004</h5>
                        <p>
                            Comecei a apreciar o vinho em 1973 quando aos 19 anos comecei a ganhar meu primeiro salário, desde a década de 80 venho estudando sobre vinho e visitando vinícolas.
                            Na década de 90 comecei a dar pequenos cursos de vinho e a organizar degustações.
                            Quando estava perto de me aposentar resolvi que iria trabalhar com algo que gostasse muito e a opção mais lógica foi o vinho. Assim me formei em 2013 no Curso de Sommelier da ABS.

                            O primeiro fascínio é perceber que o vinho acompanha a humanidade desde os seus primórdios e possui registro de milênios de existência.
                            A conjunção do vinho com as diversas artes, como a pintura, a música (com destaque para as óperas), poesia, literatura, cinema e muito também com a arquitetura.
                            A variedade de uvas, estilos, métodos de produção, etc. A importância do terroir e do trabalho humano no resultado final do vinho.
                            Ver que existem vinícolas que por mais de dois séculos vêm produzindo continuamente um produto de alta qualidade.
                            Se considerarmos o tempo necessário para que um carvalho cheque no ponto de corte, depois o necessário para a elaboração de um barril; o tempo para que o sobreiro possa ter a cortiça extraída; os anos para que a parreira possa oferecer uma uva de qualidade, mais tudo isso somado ao tempo necessário para a elaboração do vinho. Vemos que o vinho é o resultado de um trabalho acumulado de gerações de pessoas do mundo desta bebida.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('site/img/foto-renato-costas.jpg')}}" alt="Nome do diretor 2" width="470" height="342">
                    <div>
                        <h3>Renato Archanjo da Costa</h3>
                        <h4>Conselheiro Fiscal</h4>
                        <h5>Profissão: sommelier e consultor de vinhos</h5>
                        <h5>Tempo de associação: 5 anos</h5>
                        <p>
                            Depois de iniciar como barman, descobriu o mundo do vinho, formou sommelier pela abs, graduou na Escuela Hofmann de ostelaria em Barcelona e na FISAR - Federazione Italiana Sommelier Albergatori Ristoratori, Torino - Piemonte, Itália - Membro fundador da Academia Brasileira da Cachaça de Alambique em Belo Horizonte - MG e atualmente presidente e professor na ABS - Minas.
                            O que mais me fascina no mundo do vinho é a diversidade, o que o vinho me proporciona de possibilidades, viagens, geografia, historia e o mais importante, o compartilhamento de conhecimentos e prazeres!
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('site.includes.footer')
</body>

</html>
