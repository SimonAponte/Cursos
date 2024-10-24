@extends('layout/main')

<div class="container">
    <h2>Agregar un nuevo usuario</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('store')}}" method="post">
                        @csrf
                        @method('POST')
                        <label for="name">Escribe el nombre</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                        <label for="email">Escribe el email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                        <label for="password">Escribe la contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                        <button class="btn btn-primary">
                            <i class="fa-solid fa-user-plus"></i> Agregar usuario 
                        </button>
                        <a href="{{route('index')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>