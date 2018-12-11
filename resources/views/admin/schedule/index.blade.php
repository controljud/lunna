@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <a href="{{asset('admin/schedule/create')}}" class="btn btn-success btn-sm">Novo</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card_normal">

            </div>
        </div>
    </div>
@endsection