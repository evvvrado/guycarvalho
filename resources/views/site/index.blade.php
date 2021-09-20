@include("site.includes.head")


<body id="home">

@include("site.includes.navbar")

<section class="container-fluid s_hero">
    <div class="container-fav">
      <div class="_h1 fade">
        <h6>WORKSHOPS AO VIVO</h6>
        <h1>Invista em você</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua.
        </p>
        <button name="hero_button">
          <img src="{{ asset('site/img/arrowright.svg') }}" alt="" />
        </button>
      </div>
    </div>
</section>

<section class="container-fluid s_publi">
  <div class="container-fav">
    <a
      target="_blank"
      rel="noopener"
      href="https://www.sistemasca.com/inicio"
      title="Conheça o Sistema SCA - Gestão de Academias"
    >
      <img src="{{ asset('site/img/banner_publicidade.jpg') }}" rel="noopener" alt="Publicidade ~ SISTEMA SCA" />
    </a>
  </div>
</section>

<section class="container-fluid s_nextEvent">
  <div class="container-fav">
    <div class="_case fade">
      <div class="_buttons">
        <div class="_previous">
          <img src="{{ asset('site/img/halfarrowleft.svg') }}" alt="Evento Anterior" />
        </div>
        <div class="_next">
          <img src="{{ asset('site/img/halfarrowright.svg') }}" alt="Próximo Evento" />
        </div>
      </div>
      <div class="_img">
        <img src="{{ asset('site/img/case_nextEvent.jpg') }}" alt="Próximo evento aqui no ENAF" />
      </div>
    </div>
    <div class="_content">
      <h6>Próximo evento</h6>
      <h2 class="event_name">Enaf Day Strong</h2>
      <span class="event_date">Sábado: 08h às 18h</span>
      <p class="event_local">São Paulo - SP</p>
      <button name="event_button">
        <img src="{{ asset('site/img/arrowright_white.svg') }}" alt="Vamos nessa!" title="Vamos nessa!" />
      </button>
    </div>
  </div>
</section>

<section class="container-fluid s_events">
  <div class="container-fav">
    <div class="_eventList">
      <div class="_event">
        <div class="_pic">
          <img src="{{ asset('site/img/events_Pic (1).jpg') }}" alt="Imagem deste evento" />
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
          <img src="{{ asset('site/img/events_Pic (2).jpg') }}" alt="Imagem deste evento" />
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
          <img src="{{ asset('site/img/events_Pic (3).jpg') }}" alt="Imagem deste evento" />
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
          <img src="{{ asset('site/img/events_Pic (4).jpg') }}" alt="Imagem deste evento" />
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

<section class="container-fluid s_cursos">
  <div class="container-fav">
    <div class="title">
      <h4>Cursos</h4>
      <div class="_filter">
        <nav>
          <div class="_filterItem active">Online</div>
          <div class="_filterItem">Presenciais</div>
        </nav>
      </div>
    </div>
    <div class="_cursosList">
      <div class="_curso online">
        <div class="_pic">
          <img src="{{ asset('site/img/curso_Pic (1).jpg') }}" alt="Imagem deste curso" />
        </div>
        <div class="_content">
          <div class="_top">
            <h4 class="curso_name">Meeting de musculação</h4>
            <p class="curso_description">
              Treinamentos para hipertrofia muscular e suplementação combinada
            </p>
          </div>
          <div class="_bottom">
            <p class="curso_certificate">Certificado de 10hs</p>
          </div>
        </div>
      </div>
      <div class="_curso online">
        <div class="_pic">
          <img src="{{ asset('site/img/curso_Pic (2).jpg') }}" alt="Imagem deste curso" />
        </div>
        <div class="_content">
          <div class="_top">
            <h4 class="curso_name">Treinamento Multifuncional</h4>
            <p class="curso_description">& Longevidade Saudável Aplicação Prática</p>
          </div>
          <div class="_bottom">
            <p class="curso_certificate">Certificado de 10hs</p>
          </div>
        </div>
      </div>
      <div class="_curso online">
        <div class="_pic">
          <img src="{{ asset('site/img/curso_Pic (3).jpg') }}" alt="Imagem deste curso" />
        </div>
        <div class="_content">
          <div class="_top">
            <h4 class="curso_name">Cross Training</h4>
            <p class="curso_description">Baseado na metodologia do CrossFit</p>
          </div>
          <div class="_bottom">
            <p class="curso_certificate">Certificado de 10hs</p>
          </div>
        </div>
      </div>
      <div class="_curso online">
        <div class="_pic">
          <img src="{{ asset('site/img/curso_Pic (4).jpg') }}" alt="Imagem deste curso" />
        </div>
        <div class="_content">
          <div class="_top">
            <h4 class="curso_name">Musculação Feminina</h4>
            <p class="curso_description">Programa para maximizar os resultados</p>
          </div>
          <div class="_bottom">
            <p class="curso_certificate">Certificado de 10hs</p>
          </div>
        </div>
      </div>

      <div class="_curso presencial">
        <div class="_pic">
          <img src="{{ asset('site/img/curso_Pic (4).jpg') }}" alt="Imagem deste curso" />
        </div>
        <div class="_content">
          <div class="_top">
            <h4 class="curso_name">Musculação Feminina</h4>
            <p class="curso_description">Programa para maximizar os resultados</p>
          </div>
          <div class="_bottom">
            <p class="curso_certificate">Certificado de 10hs</p>
          </div>
        </div>
      </div>
      <div class="_curso presencial">
        <div class="_pic">
          <img src="{{ asset('site/img/curso_Pic (3).jpg') }}" alt="Imagem deste curso" />
        </div>
        <div class="_content">
          <div class="_top">
            <h4 class="curso_name">Cross Training</h4>
            <p class="curso_description">Baseado na metodologia do CrossFit</p>
          </div>
          <div class="_bottom">
            <p class="curso_certificate">Certificado de 10hs</p>
          </div>
        </div>
      </div>
      <div class="_curso presencial">
        <div class="_pic">
          <img src="{{ asset('site/img/curso_Pic (2).jpg') }}" alt="Imagem deste curso" />
        </div>
        <div class="_content">
          <div class="_top">
            <h4 class="curso_name">Treinamento Multifuncional</h4>
            <p class="curso_description">& Longevidade Saudável Aplicação Prática</p>
          </div>
          <div class="_bottom">
            <p class="curso_certificate">Certificado de 10hs</p>
          </div>
        </div>
      </div>
      <div class="_curso presencial">
        <div class="_pic">
          <img src="{{ asset('site/img/curso_Pic (1).jpg') }}" alt="Imagem deste curso" />
        </div>
        <div class="_content">
          <div class="_top">
            <h4 class="curso_name">Meeting de musculação</h4>
            <p class="curso_description">
              Treinamentos para hipertrofia muscular e suplementação combinada
            </p>
          </div>
          <div class="_bottom">
            <p class="curso_certificate">Certificado de 10hs</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid s_publi">
  <div class="container-fav">
    <a
      target="_blank"
      rel="noopener"
      href="https://www.sistemasca.com/inicio"
      title="Conheça o Sistema SCA - Gestão de Academias"
    >
      <img rel="noopener" src="{{ asset('site/img/banner_publicidade.jpg') }}" alt="Publicidade ~ SISTEMA SCA" />
    </a>
  </div>
</section>

<section class="container-fluid s_sobre">
  <div class="container-fav">
    <div class="_left">
      <h4>Sobre o Enaf</h4>
      <p>
        O ENAF é o maior evento de Sport & Fitness e Saúde realizado nas Américas e um dos mais
        importantes do mundo. Tendo como objetivo promover a reciclagem e aprimoramento de
        técnicas.<br /><br />
        São dezenas de cursos, palestras e workshops acontecendo simultâneamente, de manhã, à
        tarde e à noite. Essa intensa troca de informações faz do ENAF um congresso obrigatório
        para estudantes e profissionais de sport, fitness e saúde.
      </p>
      <button>
        <img src="{{ asset('site/img/arrowright_white.svg') }}" alt="Seta para a direita" />
      </button>
    </div>
    <div class="_right">
      <div class="_text">
        <div class="_icon">
          <img src="{{ asset('site/img/icon_star.svg') }}" alt="Estrela" />
          <p>
            Para você qualificar se e distinguir-se no mercado trabalho, venha e atualize-se com
            quem conhece do assunto.
          </p>
        </div>
      </div>

      <div class="_cases fade">
        <div class="_case">
          <div class="_icon">
            <img src="{{ asset('site/img/icon_form.svg') }}" alt="Papel preenchido" />
          </div>
          <span>Técnicas e Conceitos</span>
        </div>
        <div class="_case">
          <div class="_icon">
            <img src="{{ asset('site/img/icon_screen.svg') }}" alt="Monitor" />
          </div>
          <span>Treinamentos e Aulas</span>
        </div>
        <div class="_case">
          <div class="_icon">
            <img src="{{ asset('site/img/icon_folder.svg') }}" alt="Papel limpo" />
          </div>
          <span>Dicas e Estratégias</span>
        </div>
      </div>

      <div class="_background">
        <img src="{{ asset('site/img/banner_sobre.jpg') }}" alt="Pessoa com planilha" />
      </div>
    </div>
  </div>
</section>

<section class="container-fluid s_galeria">
  <div class="container-fav">
    <div class="_title">
      <h4>#SINTAANERGIA</h4>
    </div>

    <div class="_content">
      <div class="_galeriaList">
        <div class="_picture">
          <img src="{{ asset('site/img/galeria_Pic (1).jpg') }}" alt="Foto presente na galeria ENAF" />
        </div>
        <div class="_picture">
          <img src="{{ asset('site/img/galeria_Pic (2).jpg') }}" alt="Foto presente na galeria ENAF" />
        </div>
        <div class="_picture">
          <img src="{{ asset('site/img/galeria_Pic (3).jpg') }}" alt="Foto presente na galeria ENAF" />
        </div>

        <div class="_picture">
          <img src="{{ asset('site/img/galeria_Pic (1).jpg') }}" alt="Foto presente na galeria ENAF" />
        </div>
        <div class="_picture">
          <img src="{{ asset('site/img/galeria_Pic (2).jpg') }}" alt="Foto presente na galeria ENAF" />
        </div>
        <div class="_picture">
          <img src="{{ asset('site/img/galeria_Pic (3).jpg') }}" alt="Foto presente na galeria ENAF" />
        </div>

        <div class="_picture">
          <img src="{{ asset('site/img/galeria_Pic (1).jpg') }}" alt="Foto presente na galeria ENAF" />
        </div>
        <div class="_picture">
          <img src="{{ asset('site/img/galeria_Pic (2).jpg') }}" alt="Foto presente na galeria ENAF" />
        </div>
        <div class="_picture">
          <img src="{{ asset('site/img/galeria_Pic (3).jpg') }}" alt="Foto presente na galeria ENAF" />
        </div>
      </div>
    </div>

    <div class="_menu">
      <strong>GALERIA DE FOTOS</strong>
      <div class="_buttons">
        <div class="_previous _button">
          <img src="{{ asset('site/img/halfarrowleft.svg') }}" alt="Seta indicando a esquerda" />
        </div>

        <div class="_indicator">
          <img class="active" alt="Indicador da lista" />
          <img alt="Indicador da lista" />
          <img alt="Indicador da lista" />
        </div>

        <div class="_next _button">
          <img src="{{ asset('site/img/halfarrowright.svg') }}" alt="Seta indicando a direita" />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid s_professores">
  <div class="container-fav">
    <div class="_left">
      <h4>Nosso Time de Professores Online</h4>
      <p>É hora de se capacitar com professores que são referência do mercado</p>
      <span> Você estuda nos seus horários, de acordo com sua conveniência. </span>

      <button>
        <img src="{{ asset('site/img/arrowright_white.svg') }}" alt="Seta para direita" />
      </button>
    </div>

    <div class="_right">
      <div class="_content">
        <div class="_professores">
          <div class="_professor">
            <img src="{{ asset('site/img/professores_Pic (1).jpg' )}}" alt="Professor Enaf" />
          </div>
          <div class="_professor">
            <img src="{{ asset('site/img/professores_Pic (2).jpg') }}" alt="Professor Enaf" />
          </div>
          <div class="_professor">
            <img src="{{ asset('site/img/professores_Pic (3).jpg') }}" alt="Professor Enaf" />
          </div>
          <div class="_professor">
            <img src="{{ asset('site/img/professores_Pic (4).jpg') }}" alt="Professor Enaf" />
          </div>
          <div class="_professor">
            <img src="{{ asset('site/img/professores_Pic (1).jpg') }}" alt="Professor Enaf" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid s_depoimentos">
  <div class="container-fav">
    <div class="_numeros">
      <div class="_title">
        <h6>Alguns números dos 34 anos</h6>
      </div>

      <div class="_boxes">
        <div class="_box">
          <div class="_icon">
            <img src="{{ asset('site/img/icon_calendar.svg') }}" alt="Ícone de calendário" />
          </div>
          <span class="counting">125</span>
          <p>Eventos</p>
        </div>
        <div class="_box">
          <div class="_icon">
            <img src="{{ asset('site/img/icon_pin.svg') }}" alt="Ícone de Pin" />
          </div>
          <span class="counting">21</span>
          <p>Cidades</p>
        </div>
        <div class="_box">
          <div class="_icon">
            <img src="{{ asset('site/img/icon_check@x2') }}.svg" alt="Ícone de check" />
          </div>
          <span class="counting">292000</span>
          <p>Congressistas</p>
        </div>
        <div class="_box">
          <div class="_icon">
            <img src="{{ asset('site/img/icon_persons.svg') }}" alt="Ícone de Perssoas" />
          </div>
          <span class="counting">122</span>
          <p>Professores</p>
        </div>
        <div class="_box">
          <div class="_icon">
            <img src="{{ asset('site/img/icon_layers.svg') }}" alt="Ícone de Páginas" />
          </div>
          <span class="counting">4000</span>
          <p>Cursos</p>
        </div>
      </div>
    </div>

    <div class="_depoimentos">
      <div class="_title">
        <h6>Reconhecimento de Grandes Referências</h6>
      </div>

      <div class="_content">
        <div class="_depoimentosList">
          <div class="_depoimento">
            <div class="_pic">
              <img src="{{ asset('site/img/depoimento_Pic (1).jpg') }}" alt="Foto de Dr. Turíbio" />
            </div>
            <div class="_text">
              <p>
                O ENAF plantou a semente da ciência na Educação Física no Brasil. A árvore
                nasceu, cresceu e hoje, 30 anos após, todos nós estamos colhendo seus frutos.
              </p>
              <h5>Dr. Turíbio Leite B. Neto</h5>
            </div>
          </div>
          <div class="_depoimento">
            <div class="_pic">
              <img src="{{ asset('site/img/depoimento_Pic (2).jpg') }}" alt="Foto de Dr. Turíbio" />
            </div>
            <div class="_text">
              <p>
                O ENAF plantou a semente da ciência na Educação Física no Brasil. A árvore
                nasceu, cresceu e hoje, 30 anos após, todos nós estamos colhendo seus frutos.
              </p>
              <h5>Dr. Turíbio Leite B. Neto</h5>
            </div>
          </div>
          <div class="_depoimento">
            <div class="_pic">
              <img src="{{ asset('site/img/depoimento_Pic (3).jpg') }}" alt="Foto de Dr. Turíbio" />
            </div>
            <div class="_text">
              <p>
                O ENAF plantou a semente da ciência na Educação Física no Brasil. A árvore
                nasceu, cresceu e hoje, 30 anos após, todos nós estamos colhendo seus frutos.
              </p>
              <h5>Dr. Turíbio Leite B. Neto</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="_menu">
        <div class="_buttons">
          <div class="_previous _button">
            <img src="{{ asset('site/img/halfarrowleft_alternative.svg') }}" alt="Seta indicando a esquerda" />
          </div>

          <div class="_indicator">
            <img class="active" alt="Indicador da lista" />
            <img alt="Indicador da lista" />
            <img alt="Indicador da lista" />
          </div>

          <div class="_next _button">
            <img src="{{ asset('site/img/halfarrowright_alternative.svg') }}" alt="Seta indicando a direita" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid s_blog">
  <div class="container-fav">
    <div class="_title">
      <div class="_icon">
        <img src="{{ asset('site/img/icon_check.svg') }}" alt="Ícone de Check" />
      </div>
      <h4>Blog</h4>
    </div>

    <div class="_content">
      <div class="_blogList">
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>

        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>

        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
      </div>
    </div>

    <div class="_menu">
      <div class="_buttons">
        <div class="_previous _button">
          <img src="{{ asset('site/img/halfarrowleft.svg') }}" alt="Seta indicando a esquerda" />
        </div>

        <div class="_indicator">
          <img class="active" alt="Indicador da lista" />
          <img alt="Indicador da lista" />
          <img alt="Indicador da lista" />
        </div>

        <div class="_next _button">
          <img src="{{ asset('site/img/halfarrowright.svg') }}" alt="Seta indicando a direita" />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid s_publi">
  <div class="container-fav">
    <a
      target="_blank"
      rel="noopener"
      href="https://www.sistemasca.com/inicio"
      title="Conheça o Sistema SCA - Gestão de Academias"
    >
      <img rel="noopener" src="{{ asset('site/img/banner_publicidade.jpg') }}" alt="Publicidade ~ SISTEMA SCA" />
    </a>
  </div>
</section>

<section class="container-fluid s_blog">
  <div class="container-fav">
    <div class="_title">
      <div class="_icon">
        <img src="{{ asset('site/img/icon_check.svg') }}" alt="Ícone de Check" />
      </div>
      <h4>Últimos Artigos</h4>
    </div>

    <div class="_content">
      <div class="_blogList">
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>

        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>

        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
        <div class="_blog">
          <div class="_pic">
            <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
          </div>
          <div class="_info">
            <span class="blogTag">DICAS</span>
            <h6 class="blogTitle">Como a alimentação saudável afeta na nossa saúde</h6>
            <p class="blogDate">12.09.2020</p>
          </div>
        </div>
      </div>
    </div>

    <div class="_menu">
      <div class="_buttons">
        <div class="_previous _button">
          <img src="{{ asset('site/img/halfarrowleft.svg') }}" alt="Seta indicando a esquerda" />
        </div>

        <div class="_indicator">
          <img class="active" alt="Indicador da lista" />
          <img alt="Indicador da lista" />
          <img alt="Indicador da lista" />
        </div>

        <div class="_next _button">
          <img src="{{ asset('site/img/halfarrowright.svg') }}" alt="Seta indicando a direita" />
        </div>
      </div>
    </div>
  </div>
</section>


@include("site.includes.parceiros")

@include("site.includes.footer-expanded")