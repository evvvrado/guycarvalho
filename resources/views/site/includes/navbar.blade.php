<section class="back-drop">
    <svg width="52" height="67" viewBox="0 0 52 67" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M25.9074 28.0111C25.1037 28.0949 24.2832 28.1451 23.446 28.1451C10.7374 28.1451 0.439941 17.8755 0.439941 5.2102C0.439941 3.46788 0.640868 1.77582 1.00923 0.134024C1.82968 0.0502592 2.65013 0 3.48733 0C16.1959 0 26.4934 10.2696 26.4934 22.9349C26.4767 24.6773 26.2758 26.3861 25.9074 28.0111Z"
            fill="#9DC135" />
        <path
            d="M50.4538 0.134024C50.8222 1.75907 51.0231 3.46788 51.0231 5.2102C51.0231 17.8755 40.7256 28.1451 28.017 28.1451C27.1798 28.1451 26.3593 28.0949 25.5556 28.0111C25.1873 26.3861 24.9863 24.6773 24.9863 22.9349C24.9863 10.2696 35.2838 0 47.9924 0C48.8129 0 49.6333 0.0502592 50.4538 0.134024Z"
            fill="#6F9323" />
        <path
            d="M39.3358 12.5481C38.7832 12.079 37.9628 12.146 37.494 12.6821L26.0914 26.0008L13.952 12.6653C13.4665 12.1292 12.646 12.0957 12.1102 12.5816C11.5744 13.0674 11.5409 13.8883 12.0265 14.4244L24.8188 28.4802V33.0538H27.4141V28.4635L39.453 14.3909C39.9386 13.8381 39.8716 13.0172 39.3358 12.5481Z"
            fill="#5C7A26" />
        <path d="M27.4313 33.037V49.6393C27.4313 50.3597 26.8452 50.946 26.1252 50.946C25.4053 50.946 24.8192 50.3597 24.8192 49.6393V33.037H6.45117L25.7234 66.4426L44.9956 33.037H27.4313V33.037Z"
            fill="white" />
    </svg>

</section>

<div class="container-fluid d_superMenu">
    <div class="container-fav">
        <div class="_left">
            <h3>Todas Categorias</h3>
            <div class="_lists">
                <ul>
                    <li><a href="{{ route('site.eventos') }}">Eventos</a></li>
                    <li><a href="{{ route('site.clinicas') }}">Clínicas</a></li>
                    <li><a href="{{ route('site.cursos') }}">Cursos</a></li>
                    <li><a href="{{ route('site.professores') }}">Professores</a></li>
                    <li><a style="color: green" href="{{ route('site.feira') }}">EXPO ENAF</a></li>
                </ul>
                <ul>
                    <li><a href="{{ route('site.quem_somos') }}">Sobre</a></li>
                    <li><a href="{{ route('site.artigo-grid') }}">Artigos</a></li>
                    <li><a href="{{ route('site.blog-grid') }}">Blog</a></li>
                    <li><a href="{{ route('site.contato') }}">Imprensa</a></li>
                    <li><a href="{{ route('site.duvidas') }}">Dúvidas Frequentes</a></li>
                </ul>
            </div>
        </div>
        <div class="_right">
            <div class="_text">
                <h6></h6>
                <p>Dicas do experiente cafeicultor e engenheiro agrônomo Guy Carvalho</p>
            </div>
        </div>

        <div class="close_superMenu">X</div>
    </div>
</div>

<header class="container-fluid">
    <div class="container-fav">
        <div class="_logo">
            <a href="/"> <img src="{{ asset('site/img/_logo57.svg') }}" alt="Logo Enaf" /></a>
        </div>

        <nav>
            <div class="_hamburguer" title="Abrir Super-Menu">
                <div class="_icon">
                    <img src="{{ asset('site/img/list.svg') }}" alt="Menu Hamburguer" />
                </div>
                <span>MENU</span>
            </div>
            <ul>
                <li><a href="{{ route('site.contato') }}">CONTATO</a></li>
            </ul>
        </nav>
    </div>
</header>