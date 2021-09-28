@include("site.includes.head")


<body id="blogPostagem">

@include("site.includes.navbar")



<section class="container-fluid s_cover">
    <div class="container-fav">
      <div class="_pic">
        <img src="{{ asset('site/img/banner_blog.jpg') }}" alt="Foto do blog" />
      </div>
      <div class="_menu">
        <div class="_comp">
          <div class="_ico">
            <img src="{{ asset('site/img/calendar.svg') }}" alt="Ícone de calendário" />
          </div>
          <span>12 de maio</span>
        </div>
        <div class="_comp">
          <div class="_ico">
            <img src="{{ asset('site/img/chatscircle.svg') }}" alt="Ícone de chat" />
          </div>
          <span>89</span>
        </div>
        <div class="_comp">
          <div class="_ico">
            <img src="{{ asset('site/img/heartbeat.svg') }}" alt="Ícone de coração" />
          </div>
          <span>30</span>
        </div>
      </div>
    </div>
  </section>
  <section class="container-fluid b_content">
    <div class="container-fav">
      <main>
        <h6>Tradução para o inglês por H. Rackha, feita em 1914</h6>

        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy text
          ever since the 1500s, when an unknown printer took a galley of type
          and scrambled it to make a type specimen book. It has survived not
          only five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged. It was popularised in the 1960s
          with the release of Letraset sheets containing Lorem Ipsum passages,
          and more recently with desktop publishing software like Aldus
          PageMaker including versions of Lorem Ipsum
        </p>

        <p>
          Contrary to popular belief, Lorem Ipsum is not simply random text.
          It has roots in a piece of classical Latin literature from 45 BC,
          making it over 2000 years old. Richard McClintock, a Latin professor
          at Hampden-Sydney College in Virginia, looked up one of the more
          obscure Latin words, consectetur, from a Lorem Ipsum passage, and
          going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections
          1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a
          treatise on the theory of ethics, very popular during the
          Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit
          amet..", comes from a line in section 1.10.32. The standard chunk of
          Lorem Ipsum used since the 1500s is reproduced below for those
          interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
          Malorum" by Cicero are also reproduced in their exact original form,
          accompanied by English versions from the 1914 translation by H.
          Rackham.
        </p>
      </main>

      <div class="_lastones _posts">
        <div class="_text">Últimas postagens</div>

        <div class="_lastpost-list">
          <div class="_post">
            <div class="_pic">
              <img src="{{ asset('site/img/blog_post@list') }}.jpg" alt="" />
            </div>
            <div class="_content">
              <span class="date">25 ABR 2021</span>
              <div class="_postTitle">Lorem ipsum dolor sit amet</div>
              <a href="/">
                Leia mais
                <div class="_icon">
                  <img
                    src="{{ asset('site/img/blog_icon_arrowright.svg') }}"
                    alt="Seta para direita"
                  />
                </div>
              </a>
            </div>
          </div>
          <div class="_post">
            <div class="_pic">
              <img src="{{ asset('site/img/blog_post@list') }}.jpg" alt="" />
            </div>
            <div class="_content">
              <span class="date">25 ABR 2021</span>
              <div class="_postTitle">Lorem ipsum dolor sit amet</div>
              <a href="/">
                Leia mais
                <div class="_icon">
                  <img
                    src="{{ asset('site/img/blog_icon_arrowright.svg') }}"
                    alt="Seta para direita"
                  />
                </div>
              </a>
            </div>
          </div>
          <div class="_post">
            <div class="_pic">
              <img src="{{ asset('site/img/blog_post@list') }}.jpg" alt="" />
            </div>
            <div class="_content">
              <span class="date">25 ABR 2021</span>
              <div class="_postTitle">Lorem ipsum dolor sit amet</div>
              <a href="/">
                Leia mais
                <div class="_icon">
                  <img
                    src="{{ asset('site/img/blog_icon_arrowright.svg') }}"
                    alt="Seta para direita"
                  />
                </div>
              </a>
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
              <h6 class="blogTitle">
                Como a alimentação saudável afeta na nossa saúde
              </h6>
              <p class="blogDate">12.09.2020</p>
            </div>
          </div>
          <div class="_blog">
            <div class="_pic">
              <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
            </div>
            <div class="_info">
              <span class="blogTag">DICAS</span>
              <h6 class="blogTitle">
                Como a alimentação saudável afeta na nossa saúde
              </h6>
              <p class="blogDate">12.09.2020</p>
            </div>
          </div>
          <div class="_blog">
            <div class="_pic">
              <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
            </div>
            <div class="_info">
              <span class="blogTag">DICAS</span>
              <h6 class="blogTitle">
                Como a alimentação saudável afeta na nossa saúde
              </h6>
              <p class="blogDate">12.09.2020</p>
            </div>
          </div>
          <div class="_blog">
            <div class="_pic">
              <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
            </div>
            <div class="_info">
              <span class="blogTag">DICAS</span>
              <h6 class="blogTitle">
                Como a alimentação saudável afeta na nossa saúde
              </h6>
              <p class="blogDate">12.09.2020</p>
            </div>
          </div>

          <div class="_blog">
            <div class="_pic">
              <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
            </div>
            <div class="_info">
              <span class="blogTag">DICAS</span>
              <h6 class="blogTitle">
                Como a alimentação saudável afeta na nossa saúde
              </h6>
              <p class="blogDate">12.09.2020</p>
            </div>
          </div>
          <div class="_blog">
            <div class="_pic">
              <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
            </div>
            <div class="_info">
              <span class="blogTag">DICAS</span>
              <h6 class="blogTitle">
                Como a alimentação saudável afeta na nossa saúde
              </h6>
              <p class="blogDate">12.09.2020</p>
            </div>
          </div>
          <div class="_blog">
            <div class="_pic">
              <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
            </div>
            <div class="_info">
              <span class="blogTag">DICAS</span>
              <h6 class="blogTitle">
                Como a alimentação saudável afeta na nossa saúde
              </h6>
              <p class="blogDate">12.09.2020</p>
            </div>
          </div>
          <div class="_blog">
            <div class="_pic">
              <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
            </div>
            <div class="_info">
              <span class="blogTag">DICAS</span>
              <h6 class="blogTitle">
                Como a alimentação saudável afeta na nossa saúde
              </h6>
              <p class="blogDate">12.09.2020</p>
            </div>
          </div>

          <div class="_blog">
            <div class="_pic">
              <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
            </div>
            <div class="_info">
              <span class="blogTag">DICAS</span>
              <h6 class="blogTitle">
                Como a alimentação saudável afeta na nossa saúde
              </h6>
              <p class="blogDate">12.09.2020</p>
            </div>
          </div>
          <div class="_blog">
            <div class="_pic">
              <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
            </div>
            <div class="_info">
              <span class="blogTag">DICAS</span>
              <h6 class="blogTitle">
                Como a alimentação saudável afeta na nossa saúde
              </h6>
              <p class="blogDate">12.09.2020</p>
            </div>
          </div>
          <div class="_blog">
            <div class="_pic">
              <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
            </div>
            <div class="_info">
              <span class="blogTag">DICAS</span>
              <h6 class="blogTitle">
                Como a alimentação saudável afeta na nossa saúde
              </h6>
              <p class="blogDate">12.09.2020</p>
            </div>
          </div>
          <div class="_blog">
            <div class="_pic">
              <img src="{{ asset('site/img/blog_post.jpg') }}" alt="Capa do Blog" />
            </div>
            <div class="_info">
              <span class="blogTag">DICAS</span>
              <h6 class="blogTitle">
                Como a alimentação saudável afeta na nossa saúde
              </h6>
              <p class="blogDate">12.09.2020</p>
            </div>
          </div>
        </div>
      </div>

      <div class="_menu">
        <div class="_buttons">
          <div class="_previous _button">
            <img
              src="{{ asset('site/img/halfarrowleft.svg') }}"
              alt="Seta indicando a esquerda"
            />
          </div>

          <div class="_indicator">
            <img class="active" alt="Indicador da lista" />
            <img alt="Indicador da lista" />
            <img alt="Indicador da lista" />
          </div>

          <div class="_next _button">
            <img
              src="{{ asset('site/img/halfarrowright.svg') }}"
              alt="Seta indicando a direita"
            />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid s_send">
    <div class="container-fav">

      <main>
      <div class="title">ENVIE SUA MENSAGEM</div>

      <form action="/">

        <label>
          <input type="text" placeholder="Nome" />
        </label>
        <label>
          <input type="e-mail" placeholder="E-mail" />
        </label>

        <textarea placeholder="Mensagem"></textarea>

        <button>Enviar</button>

      </form>

    </div>
  </main>
  </section>



@include('site.includes.publicidade')
@include('site.includes.parceiros')
@include('site.includes.footer-expanded')