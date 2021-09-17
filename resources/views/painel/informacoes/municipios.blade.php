@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
    Listagem de Destaques
@endsection



@section('conteudo')

    <div class="row">
        <div class="col-12">
            <div class="card py-4">
                <div class="card-body">

                    <h4 class="card-title">Nossa Influência</h4>
                    </p>

                    <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                           <div class="col-sm-12 col-md-6">
                              <div class="dataTables_length" id="datatable_length"></div>
                           </div>
                           <div class="col-sm-12 col-md-6">
                              <div id="datatable_filter" class="dataTables_filter"><label>Procurar:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div>
                           </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-12">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info" style="width: 1185px;">
                        <thead>
                           <tr role="row">
                              <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Codigo</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 70px;" aria-label="Position: activate to sort column ascending">Região</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 20px;" aria-label="Office: activate to sort column ascending">Estado</th>    
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 68px;" aria-label="Age: activate to sort column ascending">Mesoregiao</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 131px;" aria-label="Start date: activate to sort column ascending">Microregiao</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 102px;" aria-label="Salary: activate to sort column ascending">Cidade</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 102px;" aria-label="Salary: activate to sort column ascending">Populacao</th>
                           </tr>
                        </thead>


                        <tbody>    
                            <tr class="odd">
                                <td class="sorting_1 dtr-control">1204022</td>
                                <td>Norte</td>
                                <td>RN</td>
                                <td>Freljord</td>
                                <td>Terras Gélidas Severas</td>
                                <td>Vatchcaer</td>
                                <td>343</td>
                            </tr> 
                            <tr class="odd">
                                <td class="sorting_1 dtr-control">6666666</td>
                                <td>Sudeste</td>
                                <td>RN</td>
                                <td>Águas de Sentina</td>
                                <td>Cidade Portuária sem lei</td>
                                <td>Baia de Aguas de Sentina</td>
                                <td>4.500</td>
                            </tr> 
                            <tr class="odd">
                                <td class="sorting_1 dtr-control">12341243</td>
                                <td>Norte</td>
                                <td>RN</td>
                                <td>Noxus</td>
                                <td>Império Expansionista e Brutal</td>
                                <td>O Bastião Imortal</td>
                                <td>9.345</td>
                            </tr> 
                            <tr class="odd">
                                <td class="sorting_1 dtr-control">1204022</td>
                                <td>Norte</td>
                                <td>RN</td>
                                <td>Freljord</td>
                                <td>Terras Gélidas Severas</td>
                                <td>Vatchcaer</td>
                                <td>343</td>
                            </tr>
                        </tbody>
                    </table>
                </div></div>


                <div class="row">
                   <div class="col-sm-12 col-md-5">
                   </div>
                   <div class="col-sm-12 col-md-7">
                      <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                         <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">Anterior</a></li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                            <li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0" class="page-link">Próximo</a></li>
                         </ul>
                      </div>
                   </div>
                </div>
                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div>

@endsection