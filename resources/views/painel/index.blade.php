@extends('painel.template.main')


@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
{{--
<link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}

<style>
    .abas {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    .abas div {
        cursor: pointer;
        display: flex;
        flex-direction: column;
        gap: 20px;

        align-items: center;
        justify-content: center;

        border-radius: 8px;

        padding: 40px;
        opacity: 0.4;
    }

    .abas div.active {
        background: white;
        opacity: 1;

        box-shadow: 10px 20px 40px rgba(19, 51, 113, 0.05);
    }
</style>

@endsection

@section('titulo')
Dashboard / <a style="color: unset" href="{{ route('painel.eventos') }}">Início</a>
@endsection

@section('conteudo')
@include('painel.includes.errors')

<nav class="abas">
    <div class="active">
        <picture>
            <img src="{{ asset('/site/img/icon_form.svg') }}" alt="">
        </picture>
        <span>Projeto</span>
    </div>
    <div>
        <picture>
            <img src="{{ asset('/site/img/icon_folder.svg') }}" alt="">
        </picture>
        <span>Catálogo</span>
    </div>
    <div>
        <picture>
            <img src="{{ asset('/site/img/icon_persons.svg') }}" alt="">
        </picture>
        <span>Financeiro</span>
    </div>
    <div>
        <picture>
            <img src="{{ asset('/site/img/icon_screen.svg') }}" alt="">
        </picture>
        <span>Institucional</span>
    </div>
</nav>
@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>

@endsection