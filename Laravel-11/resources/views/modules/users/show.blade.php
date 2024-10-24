@extends('layout/main')

<div class="container">
    <h2>Mostrar la información de {{$item->name}}</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm text-center">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                        </thead>
                        <tbody>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                        </tbody>
                    </table>
                    <a href="{{route('index')}}" class="btn btn-secondary mt-4">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>