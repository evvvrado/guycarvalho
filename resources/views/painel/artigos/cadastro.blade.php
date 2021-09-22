@extends('painel.template.main')

@section("styles")
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{asset('admin/libs/select2/css/select2.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
{{--  <link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" />  --}}
@endsection

@section('titulo')
    Blog / <a style="color: unset" href="{{route('painel.artigos')}}">Artigos</a> / Cadastro  
@endsection

@section('conteudo')
@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
       <div class="card">
          <div class="card-body">
             <h4 class="card-title">Cadastro do Artigo</h4>
             <form>
                <div class="row">
                   <div class="col-sm-6">
                      <div class="mb-3">
                         <label for="titulo">Título</label>
                         <input id="titulo" name="titulo" type="text" placeholder="Insira o título do Artigo" class="form-control">
                      </div>
                      <div class="mb-3">
                         <label for="categoria">Categoria</label>
                         <input id="categoria" name="categoria" type="text" placeholder="Categoria do Artigo" class="form-control">
                      </div>
                      <div class="mb-3">
                         <label for="fonte">Fonte</label>
                         <input id="fonte" name="fonte" type="text" placeholder="Fonte do Artigo" class="form-control">
                      </div>
                   </div>
                   <div class="col-sm-6">
                     <div class="mb-3">
                        <label for="autor">Autor</label>
                        <input id="autor" name="autor" type="text" placeholder="Insira o nome do autor" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label for="publicacaodata">Data de Publicação</label>
                        <input class="form-control" type="date" id="publicacaodata">
                     </div>
                     <div class="mb-3">
                        <label for="tags">Tags</label>
                        <input id="tags" name="tags" type="text" placeholder="Tags do Artigo" class="form-control">
                     </div>
                   </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="resumo">Resumo</label>
                        <input id="resumo" name="resumo" type="text" placeholder="Resumo do Artigo" class="form-control">
                     </div>
                </div>

                <div class="row">
                   
                  <div class="mb-3">
                     <label for="resumo">Conteúdo</label>
                     <textarea class="form-control" name="conteudo" id="summernote" rows="10"></textarea>
                  </div>
                  
                </div>
                <div class="d-flex flex-wrap gap-2">
                   <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                   <button type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</button>
                </div>
             </form>
          </div>
       </div>
       <div class="card">
         
          <div class="card-body">
             <h4 class="card-title mb-3">Banner do Artigo</h4>
             <form action="https://themesbrand.com/" method="post" class="dropzone dz-clickable">
                <div class="dz-message needsclick">
                   <div class="mb-3">
                      <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                   </div>
                   <h4>Inserir imagem</h4>
                </div>
             </form>
       </div>
       

       <!-- end card-->
       {{-- <div class="card">
          <div class="card-body">
             <h4 class="card-title">Meta Data</h4>
             <p class="card-title-desc">Fill all information below</p>
             <form>
                <div class="row">
                   <div class="col-sm-6">
                      <div class="mb-3">
                         <label for="metatitle">Meta title</label>
                         <input id="metatitle" name="productname" type="text" class="form-control">
                      </div>
                      <div class="mb-3">
                         <label for="metakeywords">Meta Keywords</label>
                         <input id="metakeywords" name="manufacturername" type="text" class="form-control">
                      </div>
                   </div>
                   <div class="col-sm-6">
                      <div class="mb-3">
                         <label for="metadescription">Meta Description</label>
                         <textarea class="form-control" id="metadescription" rows="5"></textarea>
                      </div>
                   </div>
                </div>
                <div class="d-flex flex-wrap gap-2">
                   <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                   <button type="submit" class="btn btn-secondary waves-effect waves-light">Cencelar</button>
                </div>
             </form>
          </div>
       </div> --}}
    </div>
 </div>
@endsection

@section('scripts')
<script src="{{asset('admin/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('admin/libs/dropzone/min/dropzone.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>


<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 500,
        });

        $('#select_tag').select2({
        });

        $('#select_hashtag').select2({
        });
    });
</script>
@endsection