@extends('painel.template.main')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    {{-- <link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}


    <style>
        .filters {
            margin-bottom: 22px;
            cursor: default;
            border-radius: 5px;
            background-color: var(--principal);
            width: 100%;
            color: white;
            font-size: .8125rem;
            padding: .47rem .75rem;
        }

        .filters span {
            cursor: pointer;
            transition: 0.32s;
        }

        .filters span:hover {
            opacity: 0.7;
        }

        .filters span.active {
            color: #e5e5e5;
        }

        .card:not(.clinica) {
            display: none;
        }

    </style>
@endsection

@section('titulo')
    Projetos / <a style="color: unset" href="{{ route('painel.clinicas') }}">Clinicas</a> / Cadastrar
@endsection
@section('conteudo')


    <div class="filters">
        <span data-filter="clinica" class="active">Clinica ></span>
        <span data-filter="local">Local ></span>
        <span data-filter="cursos">Cursos ></span>
        <span data-filter="hoteis">Hoteis</span>
    </div>


    @include('painel.includes.errors')
    <div class="row">
        <div class="col-12">
            <div class="card clinica">
                <div class="card-body">
                    <h4 class="card-title">Cadastro de Clinica</h4>
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
                                    <input id="price" name="price" type="tel" class="form-control"
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

                                <div class="mb-3">
                                    <label class="control-label">Professores e Embaixadores</label>
                                    <select class="form-control">
                                        <option data-select2-id="3">Selecione o tipo</option>
                                        <option value="FA">Curso 1</option>
                                        <option value="EL">Curso 2</option>
                                        <option value="EL">Curso 3</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                            <button type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</button>
                        </div>
                    </form>
                </div>

                <div class="card-body row">
                    <div class="card-body col-2">
                        <h4 class="card-title mb-3">Thumbnail</h4>
                        <form action="https://themesbrand.com/" method="post" class="dropzone dz-clickable"
                            style="max-width: 335px; height:">
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                </div>
                                <h4>Inserir imagem</h4>
                            </div>
                        </form>
                    </div>

                    <div class="card-body col-8">
                        <h4 class="card-title mb-3">Banner</h4>
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
                </div>
                <div class="card">
                    <div class="card-body col-3">
                        <h4 class="card-title mb-3">Thumbnail</h4>
                        <form action="https://themesbrand.com/" method="post" class="dropzone dz-clickable">
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                </div>
                                <h4>Inserir imagem</h4>
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
                                                        style="height: 34px!important;"><i
                                                            class="bx bx-edit"></i></button>
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
