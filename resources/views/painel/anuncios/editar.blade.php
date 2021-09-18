@extends('painel.template.main')

@section("styles")
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{asset('admin/libs/select2/css/select2.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
{{--  <link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" />  --}}
@endsection

@section('titulo')
    Publicidade / <a style="color: unset" href="{{route('painel.anuncios')}}">Anúncios</a> / Editar
@endsection


@section('conteudo')

@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
       <div class="card">
          <div class="card-body">
             <h4 class="card-title">Editar Publicidade</h4>
             <form>
                <div class="row">
                   <div class="col-sm-6">
                      <div class="mb-3">
                         <label for="productname">Nome</label>
                        <input id="productname" name="productname" type="text" value="hyp8" class="form-control" placeholder="Insira o nome">
                      </div>
                   </div>
                   <div class="col-sm-6">
                      <div class="mb-3">
                        <label for="manufacturerbrand">URL para redirecionar</label>
                        <input class="form-control" type="url"  value="hyp8.com.br"  placeholder="Insira a URL" id="example-url-input">
                     </div>
                   </div>
                </div>
                <div class="d-flex flex-wrap gap-2">
                   <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                   <button type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</button>
                </div>
             </form>
          </div>
       </div>
       <div class="card row flex-row">
        <div class="card-body col-2">
            <h4 class="card-title mb-3">Imagem Mobile</h4>
            <form action="https://themesbrand.com/" method="post" class="dropzone dz-clickable" style="max-width: 335px; height:
            204px;">
               <div class="dz-message needsclick">
                  <div class="mb-3">
                     <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                  </div>
                  <h4>Inserir imagem</h4>
               </div>
            </form>
         </div>
         
          <div class="card-body col-8">
             <h4 class="card-title mb-3">Imagem Desktop</h4>
             <form action="https://themesbrand.com/" method="post" class="dropzone dz-clickable">
                <div class="dz-message needsclick">
                   <div class="mb-3">
                      <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                   </div>
                   <h4>Inserir imagem</h4>
                </div>
             </form>
          </div>
       </div>
       
@endsection




@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{asset('admin/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('admin/libs/dropzone/min/dropzone.min.js')}}"></script>
<script>
    var inp = document.getElementById('logo-upload');
    inp.addEventListener('change', function(e){
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function(){
            document.getElementById('logo-preview').src = this.result;
            };
        reader.readAsDataURL(file);
    },false);

    var inp = document.getElementById('banner-upload');
    inp.addEventListener('change', function(e){
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function(){
            document.getElementById('banner-preview').src = this.result;
            };
        reader.readAsDataURL(file);
    },false);

    $(document).ready(function() {
        $('#summernote').summernote({
            height: 600,
        });

        $('#select_tag').select2({
        });

        $('#select_hashtag').select2({
        });
    });
</script>
@endsection