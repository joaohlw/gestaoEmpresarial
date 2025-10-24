@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($clientes as $cliente)
                            <tr>
                                <th scope="row">{{ $cliente -> id }}</th>
                                <td>{{ $cliente -> name }}</td>
                                <td>{{ $cliente -> email }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">nenhum cliente cadastrado ainda.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


