@include("site.includes.head")


<body id="sobre">

@include("site.includes.navbar")


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

  <section class="container-fluid _video">
    <div class="container-fav">
      <div class="_text">
        <h4>Vídeo</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate facilisis volutpat ultrices eget faucibus. Ultrices euismod gravida eget adipiscing orci.</p>
      </div>
      <div class="_videoFrame">
        <img src="{{ asset('site/img/banner_video.jpg') }}" alt="Video Institucional" />
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
            <img src="{{ asset('site/img/galeria_Pic (1') }}).jpg" alt="Foto presente na galeria ENAF" />
          </div>
          <div class="_picture">
            <img src="{{ asset('site/img/galeria_Pic (2') }}).jpg" alt="Foto presente na galeria ENAF" />
          </div>
          <div class="_picture">
            <img src="{{ asset('site/img/galeria_Pic (3') }}).jpg" alt="Foto presente na galeria ENAF" />
          </div>

          <div class="_picture">
            <img src="{{ asset('site/img/galeria_Pic (1') }}).jpg" alt="Foto presente na galeria ENAF" />
          </div>
          <div class="_picture">
            <img src="{{ asset('site/img/galeria_Pic (2') }}).jpg" alt="Foto presente na galeria ENAF" />
          </div>
          <div class="_picture">
            <img src="{{ asset('site/img/galeria_Pic (3') }}).jpg" alt="Foto presente na galeria ENAF" />
          </div>

          <div class="_picture">
            <img src="{{ asset('site/img/galeria_Pic (1') }}).jpg" alt="Foto presente na galeria ENAF" />
          </div>
          <div class="_picture">
            <img src="{{ asset('site/img/galeria_Pic (2') }}).jpg" alt="Foto presente na galeria ENAF" />
          </div>
          <div class="_picture">
            <img src="{{ asset('site/img/galeria_Pic (3') }}).jpg" alt="Foto presente na galeria ENAF" />
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
                <img src="{{ asset('site/img/depoimento_Pic (1') }}).jpg" alt="Foto de Dr. Turíbio" />
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
                <img src="{{ asset('site/img/depoimento_Pic (2') }}).jpg" alt="Foto de Dr. Turíbio" />
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
                <img src="{{ asset('site/img/depoimento_Pic (3') }}).jpg" alt="Foto de Dr. Turíbio" />
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

  @include('site.includes.publicidade')

  
  
@include("site.includes.parceiros")
@include("site.includes.footer-expanded")