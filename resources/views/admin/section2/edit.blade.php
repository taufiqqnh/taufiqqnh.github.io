@extends('admin.layouts.template')

@section('content')
<div class="container px-4 ">
    <div class="w-4/5 m-auto ">
        <div class="py-15">
            <h1 class="text-5xl text-center">
               Update Section 2
            </h1>
        </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2x
                py-4">
                    {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
    
@endif

<div class="w-4/5 m-auto pt-20">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update Section</div>
                <div class="card-body">
                    <form action="/section2/{{$section2->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="mb-2">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" value="{{$section2->title}}" name="title" id="title" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="satuan" class="form-label">Description</label>
                        <input type="text" value="{{$section2->desc}}" name="desc" id="desc" class="form-control">
                    </div>
                </div>            
                        <button class="btn btn-info mt-2" type="submit" >Save Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection