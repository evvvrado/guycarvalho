@include('site.includes.head')
<body class="cursos" style="overflow:hidden;">
    @include('site.includes.bodyHeader', [
        "classe" => "brasil cursos",
        "adicional" => '<div class="direita" style="padding-right: 150px;padding-bottom: 50px;">
            <h1>Cursos</h1>
            <a href="' . route('site.quem_somos') . '">Quem somos</a>
        </div>'    
    ])
    <main class="main">
        <section class="container-fluid s_detail">
            <div class="container-fav">
                <div class="_card">
                    <div class="_top">
                        Inscrições Encerradas
                    </div>
                    <main>
                        <div class="row">
                            <div class="svg">
                                <img src="{{asset('site/img/calendar.svg')}}'" alt="">
                            </div>
                            04.02.21
                        </div>
    
                        <div class="row">
                            <div class="svg">
                                <img src="{{asset('site/img/alarm.svg')}}" alt="">
                            </div>
                            Noite, 20h00
                        </div>
                        <div class="row">
                            <div class="svg">
                                <img src="{{asset('site/img/alarm.svg')}}" alt="">
                            </div>
                            35 turmas
                        </div>
                        <div class="row">
                            <div class="svg">
                                <img src="{{asset('site/img/MapPin.svg')}}" alt="">
                            </div>
                            ABS São Paulo
                            São Paulo, SP
                        </div>
                        <div class="row">
                            <button>Inscreva-se</button>
                        </div>
                    </main>
                </div>
                <nav>
                    <div class="nav-component">
                        <div class="svg">
                            <img src="{{asset('site/img/TextAlignLeft.svg')}}" alt="">
                        </div>
                        Detalhes
                    </div>
                    <div class="nav-component">
                        <div class="svg">
                            <img src="{{asset('site/img/FolderNotchOpen.svg')}}" alt="">
                        </div>
                        Programação
                    </div>
                    <div class="nav-component">
                        <div class="svg">
                            <img src="{{asset('site/img/user.svg')}}" alt="">
                        </div>
                        Instrutores
                    </div>
                    <div class="nav-component">
                        <div class="svg">
                            <img src="{{asset('site/img/MapPinLine.svg')}}" alt="">
                        </div>
                        Local
                    </div>
                </nav>
            </div>
    
            <div class="container-fav">
                
                <div class="_text">
                    <h2>Detalhes da turma</h2>
                    <p>Introdução ao Mundo do Vinho, porta de entrada nesse fascinante
                        universo, é um curso abrangente e completo, desenvolvido pelos 
                       especialistas da ABS-Brasil com o objetivo de oferecer, num
                       formato compacto (8 aulas), o máximo de informações e curiosidades 
                       sobre tudo o que diz respeito a essa bebida maravilhosa.
                        O curso se destina especialmente a leigos ou enófilos amadores 
                       que desejam ampliar seus conhecimentos sobre o assunto, mas 
                       não dispõem de muito tempo para isso.</p>
                       <p>As oito aulas (uma por semana) analisam temas que vão dos 
                        princípios de degustação à fascinante arte de compatibilizar 
                        vinho e comida. E sempre incluem a degustação de ótimos vinhos 
                        relacionados aos assuntos comentados em aula. O curso visa, 
                        assim, capacitar o consumidor a, em pouco tempo, adquirir os 
                        conhecimentos necessários para escolher cada vez melhor seus 
                        vinhos e consumi-los, em casa ou num restaurante, sabendo o que
                         esperar de cada garrafa.</p>
                    <p>O curso aborda, de forma sistemática e didática, todos os 
                        principais tópicos relacionados a degustação e apreciação de 
                        vinhos -- de sua história e importância social ao serviço do vinho 
                        em casa ou nos restaurantes. São analisadas também questões 
                        como a importância da viticultura para a qualidade do vinho, o 
                        processo de vinificação de brancos, tintos e espumantes, a relação
                         entre vinho e saúde, os cuidados na guarda e armazenamento 
                        dos vinhos e ainda os fundamentos da harmonização entre vinho 
                        e comida.<br> <br>
                        
                        Ressalte-se que em todas as aulas são degustados vinhos, de
                         diferentes tipos e origem, para ilustrar de forma prática os pontos
                         mais importantes abordados em cada uma.  As aulas são 
                        ministradas por profissionais da própria Brasil, com grande 
                        experiência na análise e degustação de vinhos e muitos anos de 
                        prática didática nos vários cursos oferecidos regularmente pela ABS - Brasil.</p>
    
                        <div class="_certify">
                            <h2>Certificação Brasileira e Internacional</h2>
                            <p>Associação Brasileira de Sommelier, e ASI(Association de la Sommellerie Internationale - França)</p>
                            <div class="logo">
                                <img src="{{asset('site/img/Mask Group.png')}}" alt="">
                                <img src="{{asset('site/img/Logo asi.png')}}" alt="">
                            </div>
                        </div>
    
                </div>
                <div class="_imgs">
                    <div class="png">
                        <img src="{{asset('site/img/image_19.png')}}" alt="">                    
                    </div>
    
                    <div class="_card">
                        <div class="_top">
                             Turma prevista para iniciar
                        </div>
                        <main>
                            <div class="row">
                                <div class="svg">
                                    <img src="{{asset('site/img/calendar.svg')}}" alt="">
                                </div>
                                21 De Setembro
                            </div>
        
                            <div class="row">
                                <div class="svg">
                                    <img src="{{asset('site/img/alarm.svg')}}" alt="">
                                </div>
                                Ás 20 Horas
                            </div>
                            <div class="row">
                                <div class="svg">
                                    <img src="{{asset('site/img/GlobeHemisphereWest.svg')}}" alt="">
                                </div>
                                Aulas Ministradas Online.
                            </div>
                    </div>
    
                    <div class="_card __alternative">
                        <div class="_top">
                             INVESTIMENTO
                             <p>O investimento total do curso
                            </p>
                           
                        </div>
    
                        <h3> 10X<span>R$</span>190<span>,00</span></h3>
                        <main>
                            <div class="row">
                                
                                <button>Inscreva-se</button>
                            </div>
                    </div>
                </div>
               
            </div>
        </section>
    </main>
    @include('site.includes.footer')
</body>

</html>
