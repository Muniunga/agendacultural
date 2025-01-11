@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> Adicionar evento</h3>
                        </div>
                        <!-- /.card-header -->
                        <form method="post" id="registoProduto" action="">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input type="text" class="form-control"name="nome" value="{{ old('nome') }}" required placeholder="Nome do evento">
                                        </div>
                                        <div class="form-group">
                                            <label>Descrição</label>
                                            <input type="text" class="form-control" name="descricao" value="{{ old('descricao') }}" required placeholder="Descrição">
                                            <div style="color:red">{{ $errors->first('descricao') }}</div>
                                        </div>
                                        <div class="form-group">
                                            <label>Local</label>
                                            <input type="text" class="form-control" name="local_evento" value="{{ old('local_evento') }}" required placeholder="Local do evento">
                                            <div style="color:red">{{ $errors->first('local_evento') }}</div>
                                        </div>
                                        <div class="form-group">
                                            <label>Categoria</label>
                                            <select name="categoria" class="form-control">
                                                <option>Selecione uma categoria</option>
                                                @foreach($categorias as $categoria)
                                                <option value="{{$categoria->id}}"> {{$categoria->nome}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Data do evento</label>
                                            <input id="data_evento" type="date" class="form-control" name="data_evento" value="{{ old('data_evento') }}" required placeholder=" ">
                                            <div style="color:red">{{ $errors->first('data_evento') }}</div>
                                        </div>
                                        <div class="form-group">
                                            <label>Horário</label>
                                            <input id="hora_evento" type="time" class="form-control" name="hora_evento" value="{{ old('hora_evento') }}" required placeholder=" ">
                                            <div style="color:red">{{ $errors->first('hora_evento') }}</div>
                                        </div>
                                        <div class="form-group">
                                            <label>Rede social</label>
                                            <input type="text" class="form-control" name="rede_social" value="{{ old('rede_social') }}" required placeholder="Rede Social">
                                            <div style="color:red">{{ $errors->first('rede_social') }}</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <div class="row float-right">
                                    <div class="mr-2">
                                        <button onclick="goBack()" class="btn btn-secondary">Voltar</button>
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-primary ">Adicionar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
