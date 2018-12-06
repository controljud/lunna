@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4>Imagem Banner</h4>
            <form id="form-configuration" method="post" action="{{asset('admin/configuration/store')}}" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="title">Título do site</label>
                            <input type="text" class="form-control" id="title" name="title" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <input type="text" class="form-control" id="description" name="description" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="img-banner">Resolução recomendada: (1920 x 900)</label>
                            <img src="{{asset($configuration->img_header_path)}}" id="img-banner" alt="..." class="img-fluid img-thumbnail rounded mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="img_header_path">Substituir</label>
                            <input type="file" id="img_header_path" name="img_header_path" class="form-control"/>
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
            </form>
        </div>
    </div>
@endsection