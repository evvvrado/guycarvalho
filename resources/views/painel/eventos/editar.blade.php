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

        .card:not(.evento) {
            display: none;
        }

    </style>

@endsection

@section('titulo')
    Projetos / <a style="color: unset" href="{{ route('painel.eventos') }}">Eventos</a> / Editar
@endsection

@section('conteudo')



    <div class="filters">
        <span data-filter="evento" class="active">Evento</span>
        <span data-filter="local">Local</span>
        <span data-filter="cursos">Cursos</span>
        <span data-filter="embaixadores">Embaixadores e Convidados</span>
        <span data-filter="hoteis">Hoteis</span>
    </div>

    @include('painel.includes.errors')
    <div class="row">
        <div class="col-12">
            <div class="card evento">
                <div class="card-body">
                    <h4 class="card-title">Editar Evento</h4>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="productname">Nome</label>
                                    <input id="productname" name="productname" type="text" class="form-control"
                                        placeholder="Insira o nome">
                                </div>
                                <div class="mb-3">
                                    <label for="productname">SubTitulo</label>
                                    <input id="productname" name="productname" type="text" class="form-control"
                                        placeholder="Insira o nome">
                                </div>


                                <div class="mb-3">
                                    <label for="manufacturername">Data de Início</label>
                                    <input class="form-control" type="date" id="example-date-input">
                                </div>

                                <div class="mb-3">
                                    <label for="price">URL Do Vídeo</label>
                                    <input id="price" name="price" type="url" class="form-control"
                                        placeholder="youtu.be/linkdovideo">
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <div class="mb-3">
                                    <label for="descricao">Descrição</label>
                                    <input id="descricao" name="descricao" type="text" class="form-control"
                                        placeholder="Insira a decrição da clínica">
                                </div>

                                <div class="mb-3">
                                    <label for="descricao">Parágrafo</label>
                                    <input id="descricao" name="descricao" type="text" class="form-control"
                                        placeholder="Insira o conteúdo do paragrafo">
                                </div>


                                <div class="mb-3">
                                    <label for="manufacturername">Data de encerramento</label>
                                    <input class="form-control" type="date" id="example-date-input">
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
            </div>
        </div>


        <div class="card local">
            <div class="card-body">
                <h4 class="card-title">Local da Clínica</h4>
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="productname">Nome</label>
                                <input id="productname" name="productname" type="text" class="form-control"
                                    placeholder="Insira o nome">
                            </div>

                        </div>
                        <div class="col-sm-6">

                            <div class="mb-3">
                                <label for="descricao">Endereço</label>
                                <input id="descricao" name="descricao" type="text" class="form-control"
                                    placeholder="Insira a decrição da clínica">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                        <button type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</button>
                    </div>
                </form>
            </div>


            <div class="card-body col-12">
                <h4 class="card-title mb-3">Imagem do Local</h4>
                <form>
                    <div class="col-12 mt-3">
                        <div class="row">
                            <div class="col-12 text-center d-flex align-items-center justify-content-center">
                                <picture
                                    style="height: 525px; width: 100%; max-width: 756px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                    <img id="local-preview" src="{{ asset('admin/images/thumb-padrao.png') }}"
                                        style="height: 100%;" alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <label class="btn btn-primary" for="local-upload">Escolher</label>
                                <input name="local" id="local-upload" style="display: none;" type="file">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="card cursos">
            <div class="card-body">
                <h4 class="card-title">Cursos Vinculados</h4>



                <form>
                    <div class="row">
                        <div class="mb-3">
                            <label class="control-label">Selecionar Curso</label>
                            <select class="form-control">
                                <option data-select2-id="3">Selecionar Curso</option>
                                <option value="FA">Curso 1</option>
                                <option value="EL">Curso 2</option>
                                <option value="EL">Curso 3</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="manufacturername">Data de Exibição</label>
                            <input class="form-control" type="date" id="example-date-input">
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
                                        aria-label="Name: activate to sort column descending">Curso</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                        colspan="1" style="width: 70px;"
                                        aria-label="Position: activate to sort column ascending">Data</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                        colspan="1" style="width: 10px;"
                                        aria-label="Start date: activate to sort column ascending"></th>
                                </tr>
                            </thead>


                            <tbody>
                                <tr class="odd">
                                    <td class="sorting_1 dtr-control">Curso 01</td>
                                    <td>31/02/2022</td>
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


        <div class="card hoteis">
            <div class="card-body">
                <h4 class="card-title">Hoteis Conveniados</h4>



                <form>
                    <div class="row">

                        <div class="mb-3">
                            <label for="productname">Nome do Local</label>
                            <input id="productname" name="productname" type="text" class="form-control"
                                placeholder="Insira o nome">
                        </div>
                        <div class="mb-3">
                            <label for="productname">Endereço do Local</label>
                            <input id="productname" name="productname" type="text" class="form-control"
                                placeholder="Insira o nome">
                        </div>
                        <div class="mb-3">
                            <label for="productname">URL de Redirecionamento</label>
                            <input id="productname" name="productname" type="text" class="form-control"
                                placeholder="goog.gl/exemplo">
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Adicionar</button>
                    </div>


                </form>
                <div class="col-12 mt-3">
                    <div class="row">
                        <div class="col-12 text-center d-flex align-items-start flex-column">
                            <span class="my-3">Imagem do Hotel</span>
                            <picture
                                style="height: 350px; width: 100%; background-color: #f3f4f6;overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                <img id="hoteis-preview" src="{{ asset('admin/images/thumb-padrao.png') }}"
                                    style="height: 100%;" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <label class="btn btn-primary" for="hoteis-upload">Escolher</label>
                            <input name="hoteis" id="hoteis-upload" style="display: none;" type="file">
                        </div>
                    </div>
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
                                            aria-label="Name: activate to sort column descending">Hotel</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1" style="width: 70px;"
                                            aria-label="Position: activate to sort column ascending">Endereço</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1" style="width: 10px;"
                                            aria-label="Start date: activate to sort column ascending"></th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr class="odd">
                                        <td class="sorting_1 dtr-control">Hotel Conveniado 1</td>
                                        <td>Rua João Cesário, Jardim América - 180, Alfenas - MG</td>
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


        <div class="card embaixadores">
            <div class="card-body">
                <h4 class="card-title">Cadastro de Convidados</h4>



                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nome">Nome</label>
                                <input id="nome" name="nome" type="text" class="form-control" placeholder="Insira o nome"
                                    required>
                            </div>



                            <div class="mb-3">
                                <label class="control-label">Professor ou Embaixador</label>
                                <select class="form-control">
                                    <option data-select2-id="3">Selecione o tipo</option>
                                    <option value="FA">Professor</option>
                                    <option value="EL">Embaixador</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nome">URL para redirecionar</label>
                                <input class="form-control" type="url" placeholder="Insira a URL" id="example-url-input">
                            </div>


                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Adicionar</button>

                    </div>
                    <h4 class="card-title my-3">Foto</h4>
                    <div class="col-12 mt-3">
                        <div class="row">
                            <div class="col-12 text-center d-flex align-items-center justify-content-center">
                                <picture
                                    style="height: 281px; max-width: 281px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                    <img id="depoimento-preview" src="{{ asset('admin/images/thumb-padrao.png') }}"
                                        style="height: 100%;" alt="">
                                </picture>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <label class="btn btn-primary" for="depoimento-upload">Escolher</label>
                                <input name="foto" id="depoimento-upload" style="display: none;" type="file" required>
                            </div>
                        </div>
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
                                        aria-label="Name: activate to sort column descending">Nome</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                        colspan="1" style="width: 70px;"
                                        aria-label="Position: activate to sort column ascending">Função
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                        colspan="1" style="width: 10px;"
                                        aria-label="Start date: activate to sort column ascending"></th>
                                </tr>
                            </thead>


                            <tbody>
                            </tbody>
                        </table>
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

        var inp = document.getElementById('local-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('local-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);



        var inp = document.getElementById('hoteis-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('hoteis-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);





        $('.filters span').click(function() {
            $('.card').hide();
            $(`.${$(this).data('filter')}`).show();
            $('.filters span').removeClass('active');
            $(this).addClass('active');
        })

        $(document).ready(function() {
            $('#summernote').summernote({
                height: 600,
            });

            $('#select_tag').select2({});

            $('#select_hashtag').select2({});
        });
    </script>
@endsection
