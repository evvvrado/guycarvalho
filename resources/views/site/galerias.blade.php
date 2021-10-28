@include("site.includes.head")
<title>ENAF - Galerias</title>

@php
$galerias = \App\Models\Galeria::all()->get();
$fotos = \App\Models\GaleriaFoto::where('galeria_id', $galeria->ativo)->get();
@endphp



<body id="galerias">

    @include("site.includes.navbar")

    <section class="container-fluid s_hero">
        <div class="container-fav">
        </div>
    </section>




    @include('site.includes.publicidade')



    @include("site.includes.parceiros")


    @include("site.includes.footer")