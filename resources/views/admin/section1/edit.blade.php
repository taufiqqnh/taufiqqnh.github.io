@extends('admin.layouts.template')

@section('content')
<div class="container px-4 ">
    <div class="w-4/5 m-auto ">
        <div class="py-15">
            <h1 class="text-5xl text-center">
                Update Section
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
                <div class="card-header">Update Section 1</div>
                <div class="card-body">
                    <img 
                    src="{{asset('images/' . $section1->image)}}"
                    class="w-8/12 mb-8 shadow-xl"
                    alt="">
                    <form action="/section1/{{$section1->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" value="{{$section1->title}}" name="title" id="title" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="satuan" class="form-label">Description</label>
                            <input type="text" value="{{$section1->desc}}" name="desc" id="desc" class="form-control">
                        </div>
                            <label class="">
                                <span class="mt-2 text-base leading-normal">
                                    Select a file / image
                                </span>
                                <input 
                                    type="file"
                                    name="image"
                                    class="hidden">
                            </label>
                        </div>            
                        <button class="btn btn-info mt-2" type="submit" >Save Update</button>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>


{{-- <div class="w-4/5 m-auto pt-20">
    <form action="/section1/{{$section1->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input
        type="text"
        name="title"
        value="{{$section1->title}}"
        class="bg-transparent block-b-2 w-full h-8 text-3xl outline-none">
<br>
<br>
    <textarea
        name="desc"
        placeholder="description"
        class="py-20 bg-transparent block border-b-2 w-80 h-50 text-3xl
        outline-none">{{$section1->decs}}"</textarea>
<br>
<br>
    <div class="bg-grey-lighter pt-15">
        <label class="">
            <span class="mt-2 text-base leading-normal">
                Select a file / image
            </span>
            <input 
                type="file"
                name="image"
                class="hidden">
        </label>
    </div>

    <button 
        type="submit"
        class=" btn btn-primary">
        Submit Section
    </button>

</form>
</div>
</div> --}}
@endsection