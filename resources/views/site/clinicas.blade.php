@include("site.includes.head")


<body id="nossoscursos">

@include("site.includes.navbar")



<section class="container-fluid s_search">
    <div class="container-fav">
      <div class="_title">
        <h4>Nossas Clínicas</h4>
      </div>
      <div class="_filters">
        <label>
          <select name="" id="">
            <option value="Todos">Todos</option>
            <option value="Todos">Todos</option>
          </select>
        </label>

        <label>
          <input type="text" name="" id="" placeholder="Busca" />
          <button name="" class="_icon">
            <img src="{{ asset('site/img/icon_lupa.svg') }}" alt="Ícone de Lupa" />
          </button>
        </label>
      </div>
    </div>
</section>

@include('site.includes.publicidade')

<section class="container-fluid s_events">
    <div class="container-fav">
      <div class="_eventList">
        <div class="_event">
          <div class="_pic">
            <img src="{{ asset('site/img/events_Pic (1') }}).jpg" alt="Imagem deste evento" />
          </div>
          <div class="_content">
            <div class="_top">
              <h4 class="event_name">Strong Day</h4>
              <p class="event_local">Poços de Caldas - MG</p>
            </div>
            <div class="_bottom">
              <span class="event_date">20 de Jun.</span>
              <p class="event_time">Sábado: 08h às 18h</p>
            </div>
          </div>
        </div>
        <div class="_event">
          <div class="_pic">
            <img src="{{ asset('site/img/events_Pic (2') }}).jpg" alt="Imagem deste evento" />
          </div>
          <div class="_content">
            <div class="_top">
              <h4 class="event_name">Enaf Life of Life</h4>
              <p class="event_local">Rio de Janeiro - RJ</p>
            </div>
            <div class="_bottom">
              <span class="event_date">20 a 22 de Ago.</span>
              <p class="event_time">Sábado: 08h às 18h</p>
            </div>
          </div>
        </div>
        <div class="_event">
          <div class="_pic">
            <img src="{{ asset('site/img/events_Pic (3') }}).jpg" alt="Imagem deste evento" />
          </div>
          <div class="_content">
            <div class="_top">
              <h4 class="event_name">Fitness World</h4>
              <p class="event_local">Rio de Janeiro - RJ</p>
            </div>
            <div class="_bottom">
              <span class="event_date">08 a 12 de Out.</span>
              <p class="event_time">Sábado: 08h às 18h</p>
            </div>
          </div>
        </div>
        <div class="_event">
          <div class="_pic">
            <img src="{{ asset('site/img/events_Pic (4') }}).jpg" alt="Imagem deste evento" />
          </div>
          <div class="_content">
            <div class="_top">
              <h4 class="event_name">25 Anos Fitness</h4>
              <p class="event_local">Alfenas - MG</p>
            </div>
            <div class="_bottom">
              <span class="event_date">12 de Jan.</span>
              <p class="event_time">Sábado: 08h às 18h</p>
            </div>
          </div>
        </div>
        <div class="_event">
          <div class="_pic">
            <img src="{{ asset('site/img/events_Pic (1') }}).jpg" alt="Imagem deste evento" />
          </div>
          <div class="_content">
            <div class="_top">
              <h4 class="event_name">Strong Day</h4>
              <p class="event_local">Poços de Caldas - MG</p>
            </div>
            <div class="_bottom">
              <span class="event_date">20 de Jun.</span>
              <p class="event_time">Sábado: 08h às 18h</p>
            </div>
          </div>
        </div>
        <div class="_event">
          <div class="_pic">
            <img src="{{ asset('site/img/events_Pic (1') }}).jpg" alt="Imagem deste evento" />
          </div>
          <div class="_content">
            <div class="_top">
              <h4 class="event_name">Strong Day</h4>
              <p class="event_local">Poços de Caldas - MG</p>
            </div>
            <div class="_bottom">
              <span class="event_date">20 de Jun.</span>
              <p class="event_time">Sábado: 08h às 18h</p>
            </div>
          </div>
        </div>
        <div class="_event">
          <div class="_pic">
            <img src="{{ asset('site/img/events_Pic (1') }}).jpg" alt="Imagem deste evento" />
          </div>
          <div class="_content">
            <div class="_top">
              <h4 class="event_name">Strong Day</h4>
              <p class="event_local">Poços de Caldas - MG</p>
            </div>
            <div class="_bottom">
              <span class="event_date">20 de Jun.</span>
              <p class="event_time">Sábado: 08h às 18h</p>
            </div>
          </div>
        </div>
        <div class="_event">
          <div class="_pic">
            <img src="{{ asset('site/img/events_Pic (1') }}).jpg" alt="Imagem deste evento" />
          </div>
          <div class="_content">
            <div class="_top">
              <h4 class="event_name">Strong Day</h4>
              <p class="event_local">Poços de Caldas - MG</p>
            </div>
            <div class="_bottom">
              <span class="event_date">20 de Jun.</span>
              <p class="event_time">Sábado: 08h às 18h</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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

  <section class="container-fluid s_destaque">
    <div class="container-fav">
      <div class="_content fade">
        <div class="_line">
          <button>
            <img src="{{ asset('site/img/arrowright.svg') }}" alt="Seta para direita" />
          </button>
        </div>
        <h6></h6>
        <div class="_svg">
          <img src="{{ asset('site/img/svg_poweroflife_white.svg') }}" alt="Power of Life" />
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        </p>
      </div>
    </div>
  </section>

  

@include("site.includes.footer")