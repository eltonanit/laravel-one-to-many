@extends('layouts.dashboard')

@section('main-content')
    <div class="container-full">
        <div class="row">
            <div class="col-12">
                <h2>Edit Project</h2>              
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.update' ,  ['project'=> $project->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <label for="" class="control-label">Nome progetto:</label>
                            <input type="text" name="name" id="" class="form-control form-control-sm" 
                            placeholder="Nome progetto" value="{{ old('name', $project->name)}}">
                        </div>
                        <div class="col-12">
                            <label for="" class="control-label">SUMMARY PROJECTS</label>
                            <textarea name="summary" id="" cols="30" rows="10" class="form-control form-control-sm" value="{{ old('summary', $project->summary)}}"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-success">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection