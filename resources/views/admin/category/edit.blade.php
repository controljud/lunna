@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['action' => 'Admin\CategoryController@store', 'id' => 'form_configuration']) !!}
            <input type="hidden" value="" name="id" id="id" />
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" value="" required/>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="description">Descrição</label>
                        <input type="text" name="description" id="description" value="" required/>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection