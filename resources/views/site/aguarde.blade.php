<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta
            name="description"
            content="Congresso e Feira Fitness. Cursos, Palestras e Workshops de atualização profissional"
        />
        <meta name="keywords" content="Congresso, Feira, Fitness, Cursos, Palestras, Workshops" />
        <meta name="author" content="7Seven Trends" />

        <meta property="og:title" content="ENAF, - Esporte, Fitness e Saúde" />
        <meta property="og:url" content="https://enafdigital.com.br" />
        <meta
            property="og:description"
            content="Congresso e Feira Fitness. Cursos, Palestras e Workshops de atualização profissional"
        />
        <meta property="og:image" content="{{ asset('site/img/_og140.png') }} " />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        />

        <link
            rel="stylesheet"
            href="https://cdn.rawgit.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css"
        />


        
        <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" />

        <link rel="preload" href="{{ asset('site/css/aguarde.css') }}" as="style" />

        <link rel="stylesheet" href="{{ asset('site/css/aguarde.css') }}" />

        <title>ENAF - Esporte, Fitness e Saúde</title>
    </head>

    <body id="aguarde">

        <div class="container-fluid">
            <div class="container-fav">
                <h1>
                    ESTÁ CURIOSO<br />
                    DO QUE ESTÁ POR VIR? 🤔
                </h1>

                <button class="discover">
                    VENHA <u>DESCOBRIR</u> <img src="{{ asset('site/img/aguarde/setapracima.svg')}}" alt="Seta para cima" />
                </button>


                

        <div class="_form">
            <h4>Vem descobrir!</h4>
            <p>Deixe seus dados para deixamos você informado das novidades</p>
            <div class="_close"><img src="{{ asset('site/img/feira/icon_close.svg') }}" alt="Fechar" /></div>

            <form>
                <label>
                    <span>Filiação</span>
                    <select name="filiacao" required>
                        <option value="-">Escolher</option>
                        <option value="">Patrocinadora</option>
                        <option value="">Expositora</option>
                        <option value="">Professor</option>
                        <option value="">Aluno</option>   
                    </select>
                    <div class="_icon">
                        <img src="{{ asset('site/img/feira/icon_form_building.svg') }}" alt="" />
                    </div>
                </label>
                <label>
                    <span>Nome Completo</span>
                    <input type="text" name="nome" placeholder="Seu nome" required/>
                    <div class="_icon">
                        <img src="{{ asset('site/img/feira/icon_form_persons.svg') }}" alt="" />
                    </div>
                </label>
                <label>
                    <span>E-mail</span>
                    <input type="email" name="email" placeholder="email@exemplo.com.br" required/>
                    <div class="_icon">
                        <img src="{{ asset('site/img/feira/icon_form_envelop.svg') }}" alt="" />
                    </div>
                </label>
                <label>
                    <span>Telefone</span>
                    <input type="tel" name="telefone" placeholder="(99) 9 9999-9999" required/>
                    <div class="_icon">
                        <img src="{{ asset('site/img/feira/icon_form_cellphone.svg') }}" alt="" />
                    </div>
                </label>

                <button>Enviar</button>
            </form>

            <button id="expand">Continuar</button>
        </div>
            </div>
        </div>

        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"
        ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js" integrity="sha512-Y/GIYsd+LaQm6bGysIClyez2HGCIN1yrs94wUrHoRAD5RSURkqqVQEU6mM51O90hqS80ABFTGtiDpSXd2O05nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
    <script>
        



        $(document).ready(() => {
            $("h1").addClass("show");

            
            $('input[type="tel"]').mask('(99) 9 9999-9999')

        });

        $('button.discover, ._form ._close').click(() => {
            $('._form').toggleClass("show");
        })

        $('button#expand').click(() => {
            $('form').css('max-height', `${($('form').height()) / 10 + 13.5}rem`)

            if($('form').height() > 200){
                $('button#expand').hide();
                $('form').css('max-height', '900px');
                $('form').css('overflow', 'visible');
            }
            

        })

    </script>

</html>
