@extends('layouts.admin')

@section('style_header')
    <link rel="stylesheet" href='{{asset("css/admin/events.css")}}'>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card_normal">
                {!! Form::open(['action' => 'Admin\EventsController@store', 'id' => 'form_configuration', 'enctype' => 'multipart/form-data']) !!}
                <input type="hidden" value="{{isset($event) ? $event->id : ''}}" name="id" id="id" />
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" name="title" id="title" value="{{isset($event) ? $event->title : ''}}" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <input type="text" name="description" id="description" value="{{isset($event) ? $event->description : ''}}" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input id="files" name="files[]" type="file" multiple />
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group" id="img-pack">
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

@section('script_footer')
    <script src='{{asset("js/admin/events.js")}}'></script>
@endsection