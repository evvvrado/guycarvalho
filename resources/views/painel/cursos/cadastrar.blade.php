@extends('painel.template.main')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    {{-- <link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}


    <style>
        .filters {
            cursor: default;
            border-radius: 5px 5px 0 0;
            width: 100%;
            color: white;
            font-size: .8125rem;
            display: flex;
            max-width: max-content;
            /* border: solid white 1px; */
        }

        .filters span {
            cursor: pointer;
            transition: 0.32s;
            padding: .84rem 1rem;

            /* border: solid white 1px; */
            border-radius: 5px 5px 0 0;

            color: #495057;

            font-weight: 600;
        }

        .filters span:hover {
            opacity: 0.7;
        }

        .filters span.active {
            color: var(--principal);
            background: white;
        }

        .card:not(.curso) {
            display: none;
        }

    </style>
@endsection

@section('titulo')
    Projetos / <a style="color: unset" href="{{ route('painel.cursos') }}">Cursos</a> / Cadastrar
@endsection

@section('conteudo')


    <div class="filters">
        <span data-filter="curso" class="active">Curso</span>
        {{-- <span data-filter="modulos">Modulos</span>
        <span data-filter="depoimentos">Depoimentos</span> --}}
    </div>


    @include('painel.includes.errors')
    <div class="row">
        <div class="col-12">
            <div class="card curso">
                <div class="card-body">
                    <h4 class="card-title">Cadastro de Cursos</h4>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="productname">Nome</label>
                                    <input id="productname" name="nome" type="text" class="form-control"
                                        placeholder="Insira o nome">
                                </div>
                                <div class="mb-3">
                                    <label for="valor">Valor do Curso (R$)</label>
                                    <input id="valor" name="valor" type="number" class="form-control"
                                        value="0" min="0" step="0.01">
                                </div>
                                <div class="mb-3">
                                    <label for="price">Total de Horas</label>
                                    <input id="price" name="price" type="number" class="form-control" step="1" min="0" value="0">
                                </div>
                                <div class="mb-3">
                                    <label for="video">URL Do Vídeo</label>
                                    <input id="video" name="video" type="text" class="form-control"
                                        placeholder="youtu.be/linkdovideo" maxlength="255">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                {{-- <div class="mb-3">
                                    <label class="control-label">Professores</label>
                                    <select class="form-control">
                                        <option data-select2-id="3">Selecione os Professore</option>
                                        <option value="FA">Empresa 1</option>
                                        <option value="EL">Empresa 2</option>
                                    </select>
                                </div> --}}
                                <div class="mb-3">
                                        <label class="control-label">Professores</label>
                                        <select class="js-example-basic-multiple js-states form-control" multiple="multiple" name="professores[]" id="select_professores" multiple required>
                                            <option value="" label="default"></option>
                                            <option value="FA">Empresa 1</option>
                                            <option value="EL">Empresa 2</option>
                                        </select>
                                </div>



                                <div class="mb-3">
                                    <label class="control-label">Tipo de Curso</label>
                                    <select class="form-control">
                                        <option data-select2-id="3">Selecione o tipo</option>
                                        <option value="FA">EAD</option>
                                        <option value="EL">ONLINE</option>
                                        <option value="EL">PRESENCIAL</option>
                                    </select>
                                </div>



                                <div class="mb-3 ">
                                    <label for="productdesc">Certificado</label>
                                    <div class="form-check form-switch form-switch-lg pt-3 ">
                                        <input class="form-check-input form-control" type="checkbox" id="SwitchCheckSizelg"
                                            checked="">
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
                <div class="row flex-row">
                    <div class="card-body col-2">
                        <div class="col-12 mt-3">
                            <div class="row">
                                <div
                                    class="col-12 text-center d-flex align-items-center justify-content-center flex-column">
                                    Thumbnail

                                    <picture
                                        style="height: 350px; max-width: 350px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                        <img id="thumbnail-preview" src="{{ asset('admin/images/thumb-padrao.png') }}"
                                            style="height: 100%;" alt="">
                                    </picture>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <label class="btn btn-primary" for="thumbnail-upload">Escolher</label>
                                    <input name="thumbnail" id="thumbnail-upload" style="display: none;" type="file">
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>

                    <div class="card-body col-8">
                        <div class="col-12 mt-3">
                            <div class="row">
                                <div
                                    class="col-12 text-center d-flex align-items-center justify-content-center  flex-column">
                                    Banner
                                    <picture
                                        style="height: 350px; width: 100%; background-color: #f3f4f6;overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                        <img id="banner-preview" src="{{ asset('admin/images/thumb-padrao.png') }}"
                                            style="height: 100%;" alt="">
                                    </picture>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <label class="btn btn-primary" for="banner-upload">Escolher</label>
                                    <input name="banner" id="banner-upload" style="display: none;" type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <div class="card modulos">
                <div class="card-body">
                    <h4 class="card-title">Cadastro de Módulo</h4>



                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="productname">Nome do Módulo</label>
                                    <input id="productname" name="productname" type="text" class="form-control"
                                        placeholder="Insira o nome">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="manufacturerbrand">Descrição</label>
                                    <textarea id="textarea" class="form-control" maxlength="107" rows="3"
                                        placeholder="Limite de 107 Caracteres"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Adicionar</button>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="datatable"
                                class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline"
                                role="grid" aria-describedby="datatable_info" style="width: 1185px;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1" style="width: 68px;" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">Módulo</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1" style="width: 70px;"
                                            aria-label="Position: activate to sort column ascending">Descrição</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1" style="width: 10px;"
                                            aria-label="Start date: activate to sort column ascending"></th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr class="odd">
                                        <td class="sorting_1 dtr-control">Módulo 01</td>
                                        <td>Meu nome é Everaldo e eu moro em alfenas mas queria estar
                                            morando em alfenas onde posso comprar todos os alfenas de toda alfenas</td>
                                        <td>
                                            <div class="btn-group edit-table-button ">
                                                <button type="button" class="btn btn-info dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    style="height: 34px!important;"><i class="bx bx-edit"></i></button>
                                                <div class="dropdown-menu" style="margin: 0px;">
                                                    <a class="dropdown-item" style="color: red" href="#">Excluir</a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



            </div>

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

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
    <script>
        var inp = document.getElementById('thumbnail-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('thumbnail-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);

        var inp = document.getElementById('banner-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('banner-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);

        $(document).ready(function() {
            $('#summernote').summernote({
                height: 600,
            });

            $('#select_tag').select2({});

            $('#select_professores').select2({});
        });


        $('.filters span').click(function() {
            $('.card').hide();
            $(`.${$(this).data('filter')}`).show();
            $('.filters span').removeClass('active');
            $(this).addClass('active');
        })
    </script>
@endsection
