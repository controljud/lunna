@extends('layouts.admin')

@section('style_header')
    <link rel="stylesheet" href='{{asset("css/configuration.css")}}'>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card_normal">
            {!! Form::open(['action' => 'Admin\ConfigurationController@store', 'id' => 'form_configuration', 'enctype' => 'multipart/form-data']) !!}
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="title">Título do site</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$configuration->title}}" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{$configuration->description}}" required/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="img-banner">Banner - Resolução recomendada: (1920 x 900)</label>
                            <img src="{{asset('img/banner/banner.jpg')}}" id="img_banner" alt="..." class="img-fluid img-thumbnail rounded mx-auto d-block">
                        </div>
                    </div>
                </div>
                <div class="row"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="file" id="img_header" name="img_header" class="custom-file-input"/>
                            <label class="custom-file-label" for="img_header">Arquivo de imagem</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Salvar"/>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('script_footer')
    <script src='{{asset("js/admin/configuration.js")}}'></script>
@endsection