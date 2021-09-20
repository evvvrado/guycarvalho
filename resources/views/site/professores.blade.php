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
            <li>
              <div data-filter=".cross" class="_checkbox"></div>
              <span>Cross Training</span>
            </li>
            <li>
              <div data-filter=".avaliacao" class="_checkbox"></div>
              <span>Avaliação Física</span>
            </li>
            <li>
              <div data-filter=".salao" class="_checkbox"></div>
              <span>Dança de Salão</span>
            </li>
            <li>
              <div data-filter=".ginastica" class="_checkbox"></div>
              <span>Ginástica</span>
            </li>
            <li>
              <div data-filter=".hidro" class="_checkbox"></div>
              <span>Hidro</span>
            </li>
            <li>
              <div data-filter=".musculacao" class="_checkbox"></div>
              <span>Musculação</span>
            </li>
            <li>
              <div data-filter=".nutricao" class="_checkbox"></div>
              <span>Nutrição</span>
            </li>
            <li>
              <div data-filter=".personal" class="_checkbox"></div>
              <span>Personal Trainer</span>
            </li>
            <li>
              <div data-filter=".pilates" class="_checkbox"></div>
              <span>Pilates</span>
            </li>
            <li>
              <div data-filter=".recreacao" class="_checkbox"></div>
              <span>Recreação</span>
            </li>
            <li>
              <div data-filter=".ritmos" class="_checkbox"></div>
              <span>Ritmos e Funcional</span>
            </li>
            <li>
              <div class="_checkbox"></div>
              <span>Ritmos e Funcional</span>
            </li>
            <li>
              <div data-filter=".musculacaofeminina" class="_checkbox"></div>
              <span>Musculação Feminina</span>
            </li>
          </ul>
        </div>

        <div class="_lista">
          <div class="_Professor musculacaofeminina">
            <img src="{{ asset('site/img/professores_Lista.jpg') }}" alt="Foto de Professor" />
          </div>
          <div class="_Professor ritmos personal">
            <img src="{{ asset('site/img/professores_Lista.jpg') }}" alt="Foto de Professor" />
          </div>
          <div class="_Professor salao personal">
            <img src="{{ asset('site/img/professores_Lista.jpg') }}" alt="Foto de Professor" />
          </div>
          <div class="_Professor ritmos cross">
            <img src="{{ asset('site/img/professores_Lista.jpg') }}" alt="Foto de Professor" />
          </div>
          <div class="_Professor recreacao">
            <img src="{{ asset('site/img/professores_Lista.jpg') }}" alt="Foto de Professor" />
          </div>
          <div class="_Professor pilates recreacao">
            <img src="{{ asset('site/img/professores_Lista.jpg') }}" alt="Foto de Professor" />
          </div>
          <div class="_Professor nutricao">
            <img src="{{ asset('site/img/professores_Lista.jpg') }}" alt="Foto de Professor" />
          </div>
          <div class="_Professor personal musculacao">
            <img src="{{ asset('site/img/professores_Lista.jpg') }}" alt="Foto de Professor" />
          </div>
          <div class="_Professor avaliacao personal hidro ginastica">
            <img src="{{ asset('site/img/professores_Lista.jpg') }}" alt="Foto de Professor" />
          </div>
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
          <img
            src="{{ asset('site/img/apoio_Gefit.svg') }}"
            alt="Logo Gefit Fitness Intelligence"
            title="Gefit ~ Gestão de Academias"
          />
        </div>
      </div>
      <div class="_patrocinadores">
        <span>Patrocinadores</span>
        <div class="_patrocinadorList">
          <div class="_patrocinador">
            <img
              src="{{ asset('site/img/patrocinadores_SCA.png') }}"
              alt="Logo SCA"
              title="SCA ~ ISTEMA COMPLETO PARA ACADEMIAS, CLUBES E STUDIOS."
            />
          </div>
          <div class="_patrocinador">
            <img
              src="{{ asset('site/img/patrocinadores_LION.png') }}"
              alt="Logo Lion"
              title="Lion ~ Equipamentos Fitness"
            />
          </div>
          <div class="_patrocinador">
            <img
              src="{{ asset('site/img/patrocinadores_GYMPASS.png') }}"
              alt="Logo Gympass"
              title="Gympass ~ Academias próximas - Descubra academias perto"
            />
          </div>
          <div class="_patrocinador">
            <img
              src="{{ asset('site/img/patrocinadores_REDE.png') }}"
              alt="Logo Rede"
              title="Rede ~ Máquina de cartão de crédito e débito sem fio"
            />
          </div>
        </div>
      </div>
    </div>
  </section>


@include("site.includes.footer-expanded")