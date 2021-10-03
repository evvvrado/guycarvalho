@include("site.includes.head")


<body id="duvidas">

@include("site.includes.navbar")


<section class="container-fluid s_duvidas">
    <div class="container-fav">
        <div class="_top"><h4>Dúvidas Frequentes</h4></div>

        <div class="_duvidas">
        <div class="_box">
            <div class="_main">
            <span>Lorem ipsum dolor sit amet</span>
            <div class="_icon">
                <img src="{{ asset('/site/img/arrowbottom.svg')}}" alt="Seta para baixo" />
            </div>
            </div>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id aenean tempus lobortis
            tristique condimentum. At blandit integer eu volutpat fermentum, tortor. Egestas
            scelerisque arcu auctor blandit semper ornare nam. Egestas lacus volutpat blandit
            viverra hendrerit.
            </p>
        </div>
        <div class="_box">
            <div class="_main">
            <span>Lorem ipsum dolor sit amet</span>
            <div class="_icon">
                <img src="{{ asset('/site/img/arrowbottom.svg')}}" alt="Seta para baixo" />
            </div>
            </div>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id aenean tempus lobortis
            tristique condimentum. At blandit integer eu volutpat fermentum, tortor. Egestas
            scelerisque arcu auctor blandit semper ornare nam. Egestas lacus volutpat blandit
            viverra hendrerit.
            </p>
        </div>
        <div class="_box">
            <div class="_main">
            <span>Lorem ipsum dolor sit amet</span>
            <div class="_icon">
                <img src="{{ asset('/site/img/arrowbottom.svg')}}" alt="Seta para baixo" />
            </div>
            </div>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id aenean tempus lobortis
            tristique condimentum. At blandit integer eu volutpat fermentum, tortor. Egestas
            scelerisque arcu auctor blandit semper ornare nam. Egestas lacus volutpat blandit
            viverra hendrerit.
            </p>
        </div>
        <div class="_box">
            <div class="_main">
            <span>Lorem ipsum dolor sit amet</span>
            <div class="_icon">
                <img src="{{ asset('/site/img/arrowbottom.svg')}}" alt="Seta para baixo" />
            </div>
            </div>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id aenean tempus lobortis
            tristique condimentum. At blandit integer eu volutpat fermentum, tortor. Egestas
            scelerisque arcu auctor blandit semper ornare nam. Egestas lacus volutpat blandit
            viverra hendrerit.
            </p>
        </div>
        <div class="_box">
            <div class="_main">
            <span>Lorem ipsum dolor sit amet</span>
            <div class="_icon">
                <img src="{{ asset('/site/img/arrowbottom.svg')}}" alt="Seta para baixo" />
            </div>
            </div>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id aenean tempus lobortis
            tristique condimentum. At blandit integer eu volutpat fermentum, tortor. Egestas
            scelerisque arcu auctor blandit semper ornare nam. Egestas lacus volutpat blandit
            viverra hendrerit.
            </p>
        </div>
        </div>
    </div>
</section>



 @include('site.includes.publicidade')



@include("site.includes.parceiros")


@include("site.includes.footer")

<script>

    $(
        "section.s_duvidas .container-fav ._duvidas ._box ._main, section.s_content .container-fav ._modulos ._box ._main"
    ).click(function () {
        $(this).closest("div._box").toggleClass("active");
    });
</script>
    


