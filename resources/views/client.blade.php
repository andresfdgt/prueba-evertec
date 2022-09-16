@extends('layout.core')
@section('custom-style')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4>Datos del cliente</h4>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Juan Doe">
                                    <small id="nameHelp" class="form-text text-muted">Ingrese su nombre</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Correo electrónico</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="jdoe@mail.com">
                                    <small id="emailHelp" class="form-text text-muted">Escribe tu correo electrónico.</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Número de teléfono</label>
                                    <input type="text" class="form-control" id="number" aria-describedby="numberHelp" placeholder="1234567890">
                                    <small id="numberHelp" class="form-text text-muted">Digita tu numero de teléfono.</small>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-scripts')
@endsection
