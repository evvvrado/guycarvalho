@include('site.includes.head')
<body class="cursos curso-detalhes" style="overflow:hidden;">
    @include('site.includes.bodyHeader', [
        "classe" => "brasil cursos",
        "adicional" => '<div class="direita" style="padding-right: 150px;padding-bottom: 50px;">
        <div class="_headertitle">
                <h2>'.$curso->titulo.'</h2>
                <span class="chat">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path d="M9.66887 25.2345L5.64348 28.6184C5.49771 28.741 5.31998 28.8193 5.1312 28.8443C4.94241 28.8693 4.75042 28.8399 4.57779 28.7595C4.40516 28.6791 4.25908 28.551 4.15673 28.3905C4.05437 28.2299 4 28.0434 4 27.853V8C4 7.73478 4.10536 7.48043 4.29289 7.29289C4.48043 7.10536 4.73478 7 5 7H27C27.2652 7 27.5196 7.10536 27.7071 7.29289C27.8946 7.48043 28 7.73478 28 8V24C28 24.2652 27.8946 24.5196 27.7071 24.7071C27.5196 24.8946 27.2652 25 27 25H10.3123C10.0769 25 9.84907 25.0831 9.66887 25.2345Z" stroke="#E2B63A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10 17.5C10.8284 17.5 11.5 16.8284 11.5 16C11.5 15.1716 10.8284 14.5 10 14.5C9.17157 14.5 8.5 15.1716 8.5 16C8.5 16.8284 9.17157 17.5 10 17.5Z" fill="black"/>
                <path d="M16 17.5C16.8284 17.5 17.5 16.8284 17.5 16C17.5 15.1716 16.8284 14.5 16 14.5C15.1716 14.5 14.5 15.1716 14.5 16C14.5 16.8284 15.1716 17.5 16 17.5Z" fill="black"/>
                <path d="M22 17.5C22.8284 17.5 23.5 16.8284 23.5 16C23.5 15.1716 22.8284 14.5 22 14.5C21.1716 14.5 20.5 15.1716 20.5 16C20.5 16.8284 21.1716 17.5 22 17.5Z" fill="black"/>
                <path d="M10 17.5C10.8284 17.5 11.5 16.8284 11.5 16C11.5 15.1716 10.8284 14.5 10 14.5C9.17157 14.5 8.5 15.1716 8.5 16C8.5 16.8284 9.17157 17.5 10 17.5Z" fill="#E2B63A"/>
                <path d="M16 17.5C16.8284 17.5 17.5 16.8284 17.5 16C17.5 15.1716 16.8284 14.5 16 14.5C15.1716 14.5 14.5 15.1716 14.5 16C14.5 16.8284 15.1716 17.5 16 17.5Z" fill="#E2B63A"/>
                <path d="M22 17.5C22.8284 17.5 23.5 16.8284 23.5 16C23.5 15.1716 22.8284 14.5 22 14.5C21.1716 14.5 20.5 15.1716 20.5 16C20.5 16.8284 21.1716 17.5 22 17.5Z" fill="#E2B63A"/>
                </svg>
                '.$turma->texto_turma.'
                </span>
                <div class="_price">
                    '.$turma->parcelas.'<span>X</span> <div class="_price" style="display: inline;">R$'.number_format($turma->preco/$turma->parcelas, 2, ",",".").'</div>
                </div>
            </div>
        </div>'    
    ])
    <main class="main">
        <section class="container-fluid s_detail">
            <div class="container-fav">
                <div class="card-button">
                </div>
                <div class="card-area">
                    <div class="card-relative">
                    <div class="_card">
                        <div class="_top">
                            @if($turma->aberto)
                                Inscrições Abertas
                            @else
                                Inscrições Encerradas
                            @endif
                        </div>
                        <main>
                            <div class="row">
                                <div class="svg">
                                    <img src="{{asset('site/img/calendar.svg')}}" alt="">
                                </div>
                                {{date("d.m.Y", strtotime($turma->data))}}
                            </div>
        
                            <div class="row">
                                <div class="svg">
                                    <img src="{{asset('site/img/user_2.svg')}}" alt="">
                                </div>
                                {{$turma->vagas}} vagas
                            </div>
                            <div class="row">
                                <div class="svg">
                                    <img src="{{asset('site/img/alarm.svg')}}" alt="">
                                </div>
                                {{config("globals.periodos")[$turma->periodo]}}, {{date("H:i", strtotime($turma->horario))}}
                            </div>
                            <div class="row">
                                <div class="svg">
                                    <img src="{{asset('site/img/MapPin.svg')}}" alt="">
                                </div>
                                {{$turma->local}}
                            </div>
                            <div class="row">
                                @if($turma->aberto)
                                    {{--  {!! $turma->botao_comprar !!}  --}}

                                    <a href="{{route('site.carrinho-adicionar', ['turma' => $turma])}}">Inscrever-se</a>
                                @else
                                    <button>Encerrado</button>
                                @endif
                            </div>
                        </main>
                    </div></div>
                </div>
                <nav>
                    <div class="nav-component @if($aba == 'detalhes') _active @endif">
                        <a href="{{route('site.curso', ['slug' => $curso->slug])}}">
                            <div class="svg">
                                @if($aba == 'detalhes')
                                    <img src="{{asset('site/img/TextAlignLeftActive.svg')}}" alt="">
                                @else
                                    <img src="{{asset('site/img/TextAlignLeft.svg')}}" alt="">
                                @endif
                            </div>
                            <span>Detalhes</span>
                        </a>
                    </div>
                    <div class="nav-component @if($aba == 'programacao') _active @endif">
                        <a href="{{route('site.curso.programacao', ['slug' => $curso->slug])}}">
                            <div class="svg">
                                @if($aba == 'programacao')
                                    <img src="{{asset('site/img/FolderActive.svg')}}" alt="">
                                @else
                                    <img src="{{asset('site/img/FolderNotchOpen.svg')}}" alt="">
                                @endif
                            </div>
                            <span>Programação</span>
                        </a>
                    </div>
                    <div class="nav-component @if($aba == 'instrutores') _active @endif">
                        <a href="{{route('site.curso.instrutores', ['slug' => $curso->slug])}}">                    
                            <div class="svg">
                                @if($aba == 'instrutores')
                                    <img src="{{asset('site/img/UserActive.svg')}}" alt="">
                                @else
                                    <img src="{{asset('site/img/user.svg')}}" alt="">
                                @endif
                            </div>
                            <span>Instrutores</span>
                        </a>
                    </div>
                    <div class="nav-component @if($aba == 'local') _active @endif">
                        <a href="{{route('site.curso.local', ['slug' => $curso->slug])}}">
                            <div class="svg">
                                @if($aba == 'local')
                                    <img src="{{asset('site/img/PinActive.svg')}}" alt="">
                                @else
                                    <img src="{{asset('site/img/MapPinLine.svg')}}" alt="">
                                @endif
                            </div>
                            <span>Local</span>  
                        </a>
                    </div>
                </nav>
            </div>

            @switch($aba)
                @case("detalhes")
                    @include('site.curso-detalhes')
                    @break;
                @case("local")
                    @include('site.curso-local')
                    @break;
                @case("programacao")
                    @include('site.curso-programacao')
                    @break;
                @case("instrutores")
                    @include('site.curso-instrutores')
                    @break;
                @default
            @endswitch
            
        </section>
    </main>
    @include('site.includes.footer')
</body>

</html>
