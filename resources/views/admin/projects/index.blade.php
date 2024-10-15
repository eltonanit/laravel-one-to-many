@extends('layouts.dashboard');

@section('main-content')
       <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <h2>ELENCO PROGETTI AUTH </h2>
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-primary"> AGGIUNGI PROGETTO</a>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>ID</th>
                        <th>Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->id}}</td>
                            <td>{{ $project->name}}</td>
                            <td>{{ $project->slug}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.projects.show', ['project' => $project->id] ) }}" 
                                    class="btn btn-sm  btn-ptimary me-2">
                                        <i class="fas fa-eye"> qui</i>
                                    </a>

                                        <a href="{{ route('admin.projects.edit', ['project' => $project->id] ) }}" 
                                    class="btn btn-sm  btn-warning ">
                                        <i class="fas fa-edit"> qui</i>
                                    </a>
                                    <form action="{{  route('admin.projects.destroy' , ['project' => $project->id])}}" method="post" onsubmit="return confirm('Sei sicuro di voler eliminare questa auto?');">>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger delete-progect ">
                                             <i class="fas fa-trash"> X </i>
                                        </button>
                                    </form>

                                    
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
       </div>
@endsection
             