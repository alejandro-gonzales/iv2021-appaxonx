@extends('template.main.index')
@section('title', 'Lista de Personas')
@section('content')
<div class="col-xl-12 order-xl-1 mt-5">
    <form action="{{route('persona.store')}}" method="post">
    @csrf
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h3 class="mb-0">Registro de Personas</h3>
                    </div>
                    <div class="col-4 text-right">
                        <button type="submit" class="btn btn-default">Registrar</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Informacion:</h6>
                <div class="pl-lg-2">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-control-label">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">    
                                <label class="form-control-label">Apellidos</label>
                                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellidos" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">    
                                <label class="form-control-label">Carnet de Identidad</label>
                                <input type="number" name="ci" id="ci" class="form-control" placeholder="CI" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">    
                                <label class="form-control-label">Fecha de Nacimiento</label>
                                <input type="date" name="fecha_nac" id="fecha_nac" class="form-control" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="juan@ejemplo.com" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirección" value="" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">    
                                <label class="form-control-label">Celular</label>
                                <input type="number" name="celular" id="celular" class="form-control" placeholder="Celular" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<hr class="my-4"/>-->
            </div>
        </div>
    </form>
</div>
@endSection