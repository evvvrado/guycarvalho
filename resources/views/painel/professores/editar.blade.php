@extends('painel.template.main')

@section("styles")
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{asset('admin/libs/select2/css/select2.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
{{--  <link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" />  --}}
@endsection

@section('titulo')
    Projeto / <a style="color: unset" href="{{route('painel.professores')}}">Professores</a> / editar
@endsection


@section('conteudo')

@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
       <div class="card">
          <div class="card-body">
             <h4 class="card-title">Cadastro de Professor</h4>
             <form>
                <div class="row">
                   <div class="col-sm-6">
                      <div class="mb-3">
                         <label for="productname">Nome</label>
                         <input id="productname" name="productname" type="text" class="form-control" placeholder="Insira o nome">
                      </div>
                      <div class="mb-3">
                         <label for="atuacaoprofessor">Atuação</label>
                         <input id="atuacaoprofessor" name="atuacaoprofessor" type="text" class="form-control" placeholder="Insira a área de atuação">
                      </div>
                   </div>
                   <div class="col-sm-6">
                      <div class="mb-3">
                         <label for="empresaprofessor">Empresa</label>
                         <input id="empresaprofessor" name="empresaprofessor" type="text" class="form-control" placeholder="Insira o nome">
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
            <h4 class="card-title mb-3">Foto do Professor</h4>
            <form action="https://themesbrand.com/" method="post" class="dropzone dz-clickable" style="display:flex; align-items: center; justify-content: center; max-width: 335px; height:
            600px;">
               <div class="dz-message needsclick">
                  <div class="mb-3">
                     <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                  </div>
                  <h4>Inserir imagem</h4>
               </div>
            </form>
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