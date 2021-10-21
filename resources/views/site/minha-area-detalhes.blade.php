@include('site.includes.aluno.header')


<section class="container-fluid _menu">
    <div class="container-fav">
        <nav>
            <ul>
                <li>
                    <a href="/minha-area">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/user.svg') }}" alt="">
                        </div>
                        Minha Área
                    </a>
                </li>
                <li class="_active">
                    <a href="/minha-area/compras">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/bag.svg') }}" alt="">
                        </div>
                        Meus Pedidos
                    </a>
                </li>
                <li>
                    <a href="/minha-area/matriculas">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/page.svg') }}" alt="">
                        </div>
                        Minhas Matrículas
                    </a>
                </li>
                <li>
                    <a href="/minha-area/dados">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/clipboard.svg') }}" alt="">
                        </div>
                        Meus Dados
                    </a>
                </li>
            </ul>
        </nav>
        <div class="_user">
            <div class="_img">
                @if (!$aluno->avatar)
                <img src="{{ asset('site/img/sistema/user.svg') }}" style="max-width: 100%;
                            min-height: unset;
                            min-width: unset;" alt="">
                @else
                <img src="{{ asset($aluno->avatar) }}" style="max-width: 100%;" alt="">
                @endif
            </div>
            <div class="_text">
                Olá <span class="_username">{{ explode(' ', session()->get('aluno')['nome'])[0] }}</span>
                <a href="{{ route('site.aluno.deslogar') }}" class="_sair">
                    Sair
                </a>
            </div>
        </div>
    </div>

</section>
<div class="_menuMax">
    <img src="{{ asset('site/img/arrowright.svg') }}" alt="">
</div>
<section class="container-fluid _menu _mobileMenu">
    <div class="_closeButton">
        <img src="{{ asset('site/img/arrowleft.svg') }}" alt="">
    </div>
    <div class="container-fav">
        <nav>
            <ul>
                <li>
                    <a href="/minha-area/">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/user.svg') }}" alt="">
                        </div>
                        Minha Área
                    </a>
                </li>
                <li class="_active">
                    <a href="/minha-area/compras">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/bag.svg') }}" alt="">
                        </div>
                        Meus Pedidos
                    </a>
                </li>
                <li>
                    <a href="/minha-area/matriculas">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/page.svg') }}" alt="">
                        </div>
                        Minhas Matrículas
                    </a>
                </li>
                <li>
                    <a href="/minha-area/dados">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/clipboard.svg') }}" alt="">
                        </div>
                        Meus Dados
                    </a>
                </li>
            </ul>
        </nav>
        <div class="_user">
            <div class="_img">
                @if (!$aluno->avatar)
                <img src="{{ asset('site/img/sistema/user.svg') }}" style="max-width: 100%;
                            min-height: unset;
                            min-width: unset;" alt="">
                @else
                <img src="{{ asset($aluno->avatar) }}" style="max-width: 100%;" alt="">
                @endif
            </div>
            <div class="_text">
                Olá <span class="_username">{{ explode(' ', session()->get('aluno')['nome'])[0] }}</span>
                <a href="{{ route('site.aluno.deslogar') }}" class="_sair">
                    Sair
                </a>
            </div>
        </div>
    </div>

</section>
</div>



<section class="container-fluid _meusPedidos _detalhes">
    <div class="container-fav">
        <div class="_top">
            <h2>Detalhes do Pedido: 512214124</h2>

        </div>

        <div class="_pedidosList">
            <div class="_pedido">
                <h3>N. 5588893390122</h3>
                <div class="_info">
                    <div class="data">
                        <div class="_svg">
                            <img src="/img/sistema/calendar.svg" alt="">
                        </div>
                        <p>12.05.2020</p>
                    </div>
                    <div class="numero">
                        <div class="_svg">
                            <img src="/img/sistema/plane.svg" alt="">
                        </div>
                        <p>03 Produtos</p>
                    </div>
                </div>
                <button class="btn-primary">
                    Ver Boleto
                    <div class="_svg">
                        <img src="/img/sistema/buttonArrowRight.svg" alt="">
                    </div>
                </button>
            </div>
            <div class="_pedido">
                <h3>N. 5588893390122</h3>
                <div class="_info">
                    <div class="data">
                        <div class="_svg">
                            <img src="/img/sistema/calendar.svg" alt="">
                        </div>
                        <p>12.05.2020</p>
                    </div>
                    <div class="numero">
                        <div class="_svg">
                            <img src="/img/sistema/plane.svg" alt="">
                        </div>
                        <p>03 Produtos</p>
                    </div>
                </div>
                <button class="btn-primary">
                    Ver Boleto
                    <div class="_svg">
                        <img src="/img/sistema/buttonArrowRight.svg" alt="">
                    </div>
                </button>
            </div>
            <div class="_pedido">
                <h3>N. 5588893390122</h3>
                <div class="_info">
                    <div class="data">
                        <div class="_svg">
                            <img src="/img/sistema/calendar.svg" alt="">
                        </div>
                        <p>12.05.2020</p>
                    </div>
                    <div class="numero">
                        <div class="_svg">
                            <img src="/img/sistema/plane.svg" alt="">
                        </div>
                        <p>03 Produtos</p>
                    </div>
                </div>
                <button class="btn-primary">
                    Ver Boleto
                    <div class="_svg">
                        <img src="/img/sistema/buttonArrowRight.svg" alt="">
                    </div>
                </button>
            </div>
            <div class="_pedido">
                <h3>N. 5588893390122</h3>
                <div class="_info">
                    <div class="data">
                        <div class="_svg">
                            <img src="/img/sistema/calendar.svg" alt="">
                        </div>
                        <p>12.05.2020</p>
                    </div>
                    <div class="numero">
                        <div class="_svg">
                            <img src="/img/sistema/plane.svg" alt="">
                        </div>
                        <p>03 Produtos</p>
                    </div>
                </div>
                <button class="btn-primary">
                    Ver Boleto
                    <div class="_svg">
                        <img src="/img/sistema/buttonArrowRight.svg" alt="">
                    </div>
                </button>
            </div>
        </div>
    </div>



</section>



<section class="container-fluid _meusPedidos">
    <div class="container-fav">
        <div class="_top">
            <h2>Meus Pedidos</h2>
            <div class="_topbutton">
                <p>Status da Compra</p>
                <div class="_btn">
                    <img src="img/sistema/threeDots.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>






@include('site.includes.aluno.footer')
</body>

</html>