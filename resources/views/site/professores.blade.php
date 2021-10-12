@include("site.includes.head")


<body id="professores">

    @include("site.includes.navbar")

    <section class="container-fluid s_hero">
        <div class="container-fav">
            <div class="_h1 fade">
                <h3>PROFESSORES</h3>
            </div>
        </div>
    </section>

    <div class="container-fluid _nossotime">
        <div class="container-fav">
            <div class="_title">
                <h4>Nosso Time de Professores Online</h4>
                <div class="_icons">
                    <img src="{{ asset('site/img/icon_folder@x2.svg') }}" alt="Íconde de Página" />
                    <img src="{{ asset('site/img/icon_folder@x2.svg') }}" alt="Íconde de Página" />
                    <img src="{{ asset('site/img/icon_folder@x2.svg') }}" alt="Íconde de Página" />
                    <img src="{{ asset('site/img/icon_folder@x2.svg') }}" alt="Íconde de Página" />
                    <img src="{{ asset('site/img/icon_folder@x2.svg') }}" alt="Íconde de Página" />
                    <img src="{{ asset('site/img/icon_folder@x2.svg') }}" alt="Íconde de Página" />
                </div>
            </div>

            <div class="_pesquisa">
                <div class="_filter">
                    <span>Atuação</span>
                    <ul>
						@foreach(config("professores.atuacao_nome") as $codigo => $atuacao)
                        <li>
                            <div data-filter=".{{Illuminate\Support\Str::slug($atuacao)}}" class="_checkbox"></div>
                            <span>{{$atuacao}}</span>
                        </li>
						@endforeach
                    </ul>
                </div>

                <div class="_lista">
					@foreach($professores as $professor)
                    <div class="_Professor {{Illuminate\Support\Str::slug(config("professores.atuacao_nome")[$professor->atuacao])}}">
                        <img src="{{ asset($professor->foto) }}" alt="{{$professor->nome}}" />
                    </div>
					@endforeach
                </div>
            </div>
        </div>
    </div>

    @include('site.includes.publicidade')

    <section class="container-fluid s_parceiros">
        <div class="container-fav">
            <div class="_apoio">
                <span>Apoio</span>
                <div class="_apoiador">
                    <img src="{{ asset('site/img/apoio_Gefit.svg') }}" alt="Logo Gefit Fitness Intelligence"
                        title="Gefit ~ Gestão de Academias" />
                </div>
            </div>
            <div class="_patrocinadores">
                <span>Patrocinadores</span>
                <div class="_patrocinadorList">
                    <div class="_patrocinador">
                        <img src="{{ asset('site/img/patrocinadores_SCA.png') }}" alt="Logo SCA"
                            title="SCA ~ ISTEMA COMPLETO PARA ACADEMIAS, CLUBES E STUDIOS." />
                    </div>
                    <div class="_patrocinador">
                        <img src="{{ asset('site/img/patrocinadores_LION.png') }}" alt="Logo Lion"
                            title="Lion ~ Equipamentos Fitness" />
                    </div>
                    <div class="_patrocinador">
                        <img src="{{ asset('site/img/patrocinadores_GYMPASS.png') }}" alt="Logo Gympass"
                            title="Gympass ~ Academias próximas - Descubra academias perto" />
                    </div>
                    <div class="_patrocinador">
                        <img src="{{ asset('site/img/patrocinadores_REDE.png') }}" alt="Logo Rede"
                            title="Rede ~ Máquina de cartão de crédito e débito sem fio" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include("site.includes.footer-expanded")
