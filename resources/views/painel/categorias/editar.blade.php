@extends('painel.template.main')

@section("styles")
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{asset('admin/libs/select2/css/select2.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
{{--  <link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" />  --}}
@endsection

@section('titulo')
    Catálogo / <a style="color: unset" href="{{route('painel.categorias')}}">Categoria</a> / Editar
@endsection

@section('conteudo')

@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
       <div class="card">
          <div class="card-body">
             <h4 class="card-title">Cadastro de Categoria</h4>
             <form>
                <div class="row">
                   <div class="col-sm-6">
                      <div class="mb-3">
                         <label for="productname">Nome</label>
                         <input id="productname" name="productname" value="hyp8 tec." type="text" class="form-control">
                      </div>
                      <div class="mb-3">
                         <label for="manufacturername">Início de Contrato</label>
                         <input class="form-control" type="date" value="2021-06-12" id="example-date-input">
                      </div>
                      <div class="mb-3">
                         <label for="price">Valor de Contrato</label>
                         <input id="price" name="price" value="R$ 5.800,00" type="text" class="form-control">
                      </div>
                   </div>
                   <div class="col-sm-6">
                      <div class="mb-3">
                         <label class="control-label">Anunciante</label>
                         <select class="form-control">
                            <option data-select2-id="3">hyp8</option>
                            <option value="FA">Empresa 1</option>
                            <option value="EL">Empresa 2</option>
                         </select>
                      </div>

                      
                      <div class="mb-3">
                        <label for="manufacturerbrand">Fim de Contrato</label>
                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                     </div>


                      <div class="mb-3 ">
                         <label for="productdesc">Ativo / Inativo</label>
                         <div class="form-check form-switch form-switch-lg pt-3 ">
                             <input class="form-check-input form-control" type="checkbox" id="SwitchCheckSizelg" checked="">       
                             </div>                 
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
                  <h4>Arraste uma Imagem</h4>
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
                   <h4>Arraste uma Imagem</h4>
                </div>
             </form>
          </div>
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{asset('admin/libs/select2/js/select2.min.js')}}"></script>
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