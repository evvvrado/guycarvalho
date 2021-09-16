@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
    Mapa do sistema
@endsection

@section('conteudo')
<div class="row">
    <div class="col-lg-4"  style="max-width: 300px">
        <div class="card mini-stats-wid">
            <div class="card-body">
                
                <div class="d-flex flex-wrap">
                    <div class="me-3">
                        <p class="text-muted mb-2">Aluno • Login</p>
                        <h5 class="mb-0"><a href="/aluno/login">Abrir Página</a></h5>
                    </div>

                    <div class="avatar-sm ms-auto">
                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                            <i style="color: #19a5d3" class="bx bx-user"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4"  style="max-width: 300px">
        <div class="card mini-stats-wid">
            <div class="card-body">
                
                <div class="d-flex flex-wrap">
                    <div class="me-3">
                        <p class="text-muted mb-2">Sistema • Login</p>
                        <h5 class="mb-0"><a href="/sistema/login">Abrir Página</a></h5>
                    </div>

                    <div class="avatar-sm ms-auto">
                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                            <i style="color: #19a5d3" class="bx bx-book-open"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Required datatable js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script src="{{asset('admin/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.10/sorting/datetime-moment.js"></script>
  
@endsection