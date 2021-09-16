@include("site.includes.head")


<body id="contato">

@include("site.includes.navbar")


<section class="container-fluid s_atendimento">
    <div class="container-fav">
      <div class="_col">
        <h4>Atendimento</h4>
        <p>Entre em contato conosco. Estamos à disposição para tirar todas as dúvidas a respeito de como funciona a nossa assessoria e programação de eventos. Entraremos em contato imediatamente.</p>



        <section class=" s_send">
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
              <label>
                <input type="tel" placeholder="Telefone" />
              </label>
    
              <textarea placeholder="Mensagem"></textarea>
    
              <button>Enviar</button>
    
            </form>
    
          </div>
        </main>
        </section>
    
      </div>

      <div class="_col">
        <div class="_pic">
          <img src="{{asset('site/img/banner_local.jpg')}}" alt="Local do ENAF">
        </div>
        <p>Endereço: R. Bias Fortes, 212 - Centro, Alfenas - MG, 37130-063</p>
        <p>
          Horário: 
          Seg às Sabádo 08:00 - 18:00
        </p>
         
        <h6>(35) 9.8707-4902</h6>

        
      <div class="_buttons">
        <div>
          <img src="{{asset('site/img/sistema/chat.svg')}}" alt="" />
        </div>
        <div>
          <img src="{{asset('site/img/sistema/call.svg')}}" alt="" />
        </div>
        <div>
          <img src="{{asset('site/img/sistema/whatsappButton.svg')}}" alt="" />
        </div>
        <div>
          <img src="{{asset('site/img/sistema/envelopButton.svg')}}" alt="" />
        </div>
      </div>
      </div>
    </div>
  </section>



@include("site.includes.footer")