@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <table id="tbl_category" class="table table-striped table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Criação</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>
                        <a href="{{asset('admin/category/edit').'/'.$category->id}}" class="btn btn-light btn-sm" title="Editar">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn btn-danger btn-sm" title="Excluir">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection