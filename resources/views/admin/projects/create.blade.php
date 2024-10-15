@extends('layouts.dashboard')

@section('main-content')
    <div class="container-full">
        <div class="row">
            <div class="col-12">
                <h2>Add New Project</h2>              
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="" class="control-label">Nome progetto:</label>
                            <input type="text" name="name" id="" class="form-control form-control-sm" 
                            placeholder="Nome progetto" value="{{ old('name')}}">
                        </div> 
                        </div>
                        <div class="col-12">
                            <label for="" class="control-label">IMAGES</label>
                            <input type="file" name="image" id="image" class="form-control control-sm">
                        </div>
                        <div class="col-12">
                            <label for=" " class="control-label">TIPOLOGY PROJECTSS </label>
                            <select name="type_id" id="" class="form-select form-select-sm">
                                <option value="">seleziona tipologia </option>
                               @foreach ($types as $type)
                                       <option value="{{ $type->id }}" @selected($type->id == old('type_id'))>{{ $type->name }}</option>
                               @endforeach

                            </select>
                        </div>

                        <div>
                            <label for="" class="control-label">SUMMARY PROJECTS</label>
                            <textarea name="summary" id="" cols="30" rows="10" class="form-control form-control-sm" 
                            value="{{ old('summary')}}"></textarea>
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