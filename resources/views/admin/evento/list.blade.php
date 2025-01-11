@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Eventos</h1>
                </div>

                <div class="col-sm-6 d-flex justify-content-end">
                    <a href="{{ url('admin/eventos/create') }}" class="btn btn-primary">Adicionar</a>
                </div>
            </div>

        </div>
    </section>



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title"> </h3>
                    </div>
                    <form method="get" action="">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-8">
                                    <label>Nome</label>
                                    <input type="search" class="form-control" placeholder="Pesquisar por nome">
                                </div>

                                <div class="form-group col-md-4">
                                    <button class="btn btn-primary" type="submit" style="margin-top:30px;">pesquisar</button>
                                    <a href="" class="btn btn-success" type="submit" style="margin-top:30px;">concluir</a>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>


                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Eventos (Total : {{$eventos->count() }})</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th>Local</th>
                                        <th>Data</th>
                                        <th>Hora</th>
                                        <th>acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($eventos as $evento)

                                    <tr class="search-result-row">
                                        <td>{{ $evento->id }}</td>
                                        <td>{{ $evento->nome }}</td>
                                        <td>{{ $evento->descricao }}</td>
                                        <td>{{ $evento->local_evento }}</td>
                                        <td>{{ $evento->data_evento }}</td>
                                        <td>{{ $evento->hora_evento }}</td>
                                        <td>
                                            <a href="{{ url('admin/eventos/edit/'.$evento->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                            <a href="{{ url('admin/eventos/delete/'.$evento->id) }}" data-toggle="modal" data-target="#modal-danger" class="btn btn-danger"><i class="fas fa-trash"></i></i></a>
                                        </td>
                                    </tr>

                                    <!-- /.modal -->

                                    <div class="modal fade" id="modal-danger">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Atenção!</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Tens a certeza que queres apagar a evento {{$evento->nome}} ?</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">fechar</button>
                                                    <a href="{{ url('admin/eventos/delete/'.$evento->id) }}" class="btn btn-danger">apagar</a>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    @endforeach
                                </tbody>
                            </table>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
