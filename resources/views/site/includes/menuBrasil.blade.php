<section id="menuBrasil">
    <nav>
        <a href="{{route('site.quem_somos')}}" @if(url()->current() == route("site.quem_somos")) class="ativo" @endif>Quem somos</a>
        <a href="{{route('site.sommelier')}}" @if(url()->current() == route("site.sommelier")) class="ativo" @endif>Sommelier</a>
        <a href="{{route('site.diretoria')}}" @if(url()->current() == route("site.diretoria")) class="ativo" @endif>Diretoria</a>
        {{--  <a href="{{route('site.associe-se')}}" @if(url()->current() == route("site.associe-se")) class="ativo" @endif>Associe-se</a>  --}}
    </nav>
    <img src="{{asset('site/img/tacaLinha.svg')}}" alt="Taça" width="141" height="113">
</section>