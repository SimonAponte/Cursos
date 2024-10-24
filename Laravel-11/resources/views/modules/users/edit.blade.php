@extends('layout/main')

<div class="container">
    <h2>Actualizar usuario</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update', $item->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="name">Escribe el nombre</label>
                        <input type="text" name="name" id="name" class="form-control" required value={{$item->name}}>
                        <label for="email">Escribe el email</label>
                        <input type="email" name="email" id="email" class="form-control" required value={{$item->email}}>
                        <label for="password">Escribe la contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" required value={{$item->password}}>
                        <button class="btn btn-warning">
                            <i class="fa-solid fa-user-plus"></i> Actualizar usuario 
                        </button>
                        <a href="{{route('index')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>