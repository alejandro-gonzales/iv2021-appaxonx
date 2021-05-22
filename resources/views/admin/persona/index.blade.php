@extends('template.main.index')
@section('title', 'Lista de Personas')
@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col">
            <div class="card">
            @section('content-header')
            <li class="nav-item dropdown">
              <a class="nav-link" href="{{route('persona.create')}}">
                  <button class="btn btn-icon btn-default" type="button">
                    <span class="btn-inner--icon"><i class="ni ni-single-02"></i></span>
                    <span class="btn-inner--text">Registrar</span>
                  </button>
              </a>
            </li>
            @endSection
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light text-center">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">CI</th>
                                <th scope="col">Fecha de Nacimiento</th>
                                <th scope="col">Email</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody class="list text-center">
                            @foreach($personas as $persona)
                            <tr>
                                <td class="budget">
                                    {{$persona->nombre}}
                                </td>
                                <td class="budget">
                                    {{$persona->apellido}}
                                </td>
                                <td class="budget">
                                    {{$persona->ci}}
                                </td>
                                <td class="budget">
                                    {{$persona->fecha_nac}}
                                </td>
                                <td class="budget">
                                    {{$persona->email}}
                                </td>
                                <td class="budget">
                                    {{$persona->direccion}}
                                </td>
                                <td class="budget">
                                    {{$persona->celular}}
                                </td>
                                <td class="budget">

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>       
            </div>
            {{$personas->render()}}
        </div>
    </div>
</div>
@endSection
