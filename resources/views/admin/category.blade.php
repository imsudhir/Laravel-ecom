@extends('admin/layout')

@section('container')
<h2 class="mb-2">Category</h2>
<a href="{{url('admin/category/manage_category')}}"> <button type="button" class="btn btn-primary">
    Add Category</button>
</a>
    <div class="row mt-3">

        <div class="col-lg-12">
            @if(session('message')!==null)
            <div class="alert alert-success" role="alert">
                {{session('message')}}
            </div>
            @endif
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>category Name</th>
                            <th class="text-right">Category Slug</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->category_name}}</td>
                            <td>{{$list->category_slug}}</td>
                            <td>
                                <a href="{{url('admin/category/delete')}}/{{$list->id}}">
                                    <button type="button" class="btn btn-danger">Delete</button>    
                                   </a>
                                   <a href="{{url('admin/category/manage_category')}}/{{$list->id}}">
                                    <button type="button" class="btn btn-success">Edit</button>    
                                   </a>
                                    </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
     
    </div>
 
    
@endsection