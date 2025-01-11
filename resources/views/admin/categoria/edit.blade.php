@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> Editar categoria</h3>
                        </div>
                        <!-- /.card-header -->
                        <form method="post" action="">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" name="nome"  value="{{ old('nome',$categoria->nome)}}"  required placeholder="Nome da categoria">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <div class="row float-right">
                                    <div class="mr-2">
                                        <button onclick="goBack()" class="btn btn-secondary">Voltar</button>
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-primary ">Atualizar</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->






                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->



                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>
@endsection
