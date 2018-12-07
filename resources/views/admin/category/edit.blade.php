@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card_normal">
                {!! Form::open(['action' => 'Admin\CategoryController@store', 'id' => 'form_configuration']) !!}
                <input type="hidden" value="{{isset($category) ? $category->id : ''}}" name="id" id="id" />
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" name="title" id="title" value="{{isset($category) ? $category->title : ''}}" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <input type="text" name="description" id="description" value="{{isset($category) ? $category->description : ''}}" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-sm" value="Salvar" />
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection