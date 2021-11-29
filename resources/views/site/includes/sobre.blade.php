<section class="container-fluid s_sobre">
    <div class="container-fav">
        <div class="_left">
            <h4>Sobre Guy Carvalho</h4>
            <p>
                E não poderia ser diferente, Guy cresceu em meio aos pés de cafés, formou-se para trabalhar na área e não deixou de buscar mais conhecimentos, possuindo MBA em Gestão em Agronegócios,
                pela FGV e Especialização em Agronegócio do Café pela Universidade Illy.

                Além disso, Guy aplica suas pesquisas na prática, atuando como cafeicultor nos municípios de Guaranésia e Cabo Verde.


            </p>
            @if (!Route::is('site.quem_somos') )
            <button onclick="window.location.href = '{{ route('site.quem_somos')}}'">
                <img src="{{ asset('site/img/arrowright_white.svg') }}" alt="Seta para a direita" />
            </button>
            @endif
        </div>
        <div class="_right">
            <div class="_text">
                <div class="_icon">
                    <img src="{{ asset('site/img/icon_star.svg') }}" alt="Estrela" />
                    <p>
                        Nosso objetivo é a reciclagem e aprimoramento dos profissionais das áreas de esporte e fitness e a criação de networking entre empresas e o seu público-alvo.
                    </p>
                </div>
            </div>

            <div class="_cases fade">
                <div class="_case">
                    <div class="_icon">
                        <img src="{{ asset('site/img/icon_form.svg') }}" alt="Papel preenchido" />
                    </div>
                    <span>Visita técnica com avaliação</span>
                </div>
                <div class="_case">
                    <div class="_icon">
                        <img src="{{ asset('site/img/icon_screen.svg') }}" alt="Monitor" />
                    </div>
                    <span>Acompanhamento agronômico </span>
                </div>
                <div class="_case">
                    <div class="_icon">
                        <img src="{{ asset('site/img/icon_folder.svg') }}" alt="Papel limpo" />
                    </div>
                    <span>Palestras Técnicas e treinamentosicon</span>
                </div>
            </div>

            <div class="_background">
                <img src="{{ asset('site/img/banner_sobre.jpg') }}" alt="Pessoa com planilha" />
            </div>
        </div>
    </div>
</section>