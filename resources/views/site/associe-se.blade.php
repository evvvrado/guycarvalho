@include('site.includes.head')
<body class="brasil" style="overflow:hidden;">
    @include('site.includes.bodyHeader', ["classe" => "brasil"])
    <main class="main">
        @include('site.includes.menuBrasil')
        <section id="associeSe">
            <img class="banner" src="{{asset('site/img/uva.jpg')}}" alt="Cachos de uva" width="270" height="331">
            <div class="texto">
                <h1>Associe-se <span>Conheça as vantagens em ser nosso associado</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor, velit posuere id id lectus at. Suspendisse eget velit auctor orci. Consectetur hendrerit adipiscing massa ridiculus massa ipsum viverra phasellus. Sed enim tortor at nulla diam morbi suspendisse ultrices. Orci molestie tempor vitae, blandit tempus lorem.
                    Maecenas mollis in vitae vulputate tempus. Faucibus blandit massa justo tortor amet, vel nullam nulla. Molestie ullamcorper orci sed habitant lorem scelerisque cursus. Nec, diam eget elit donec in placerat eget. Facilisis vitae et elementum eget at pharetra, tortor faucibus lorem. Convallis cursus lacinia arcu posuere vitae.
                </p>
                <div class="valores">
                    <p>Você pode ser nosso associado e desfrutar de todos os benefícios por apenas</p>
                    <div class="precos">
                        <div>
                            <h2><span>R$</span>200<span>,00</span></h2>
                            <p>Semestrais</p>
                        </div>
                        <div>
                            <h2><span>R$</span>380<span>,00</span></h2>
                            <p>Anuais</p>
                        </div>
                    </div>
                    <p>Faça agora o seu cadastro.</p>
                    <a href="/cadastro" class="botao">INSCREVA-SE</a>
                </div>
                <img class="serve" src="{{asset('site/img/vinho.jpg')}}" alt="Servindo vinho" width="270" height="331">
            </div>
        </section>
    </main>
    @include('site.includes.footer')
</body>

</html>
