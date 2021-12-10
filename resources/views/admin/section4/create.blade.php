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
    <div class="w-4/5 m-auto pt-20">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create new Section</div>
                    <div class="card-body">
                    <form action="{{url('section4/')}}" method= "POST">
                        @csrf
                    <div class="mb-2">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" value="{{old('title')}}" name="title" id="title" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="satuan" class="form-label">Satuan</label>
                        <input type="text" value="{{old('satuan')}}" name="satuan" id="satuan" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" value="{{old('price')}}" name="price" id="price" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="feature1" class="form-label">Feature1</label>
                        <input type="text" value="{{old('feature1')}}" name="feature1" id="feature1" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="feature2" class="form-label">Feature2</label>
                        <input type="text" value="{{old('feature2')}}" name="feature2" id="feature2" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="feature3" class="form-label">Feature3</label>
                        <input type="text" value="{{old('feature3')}}" name="feature3" id="feature3" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="feature4" class="form-label">Feature4</label>
                        <input type="text" value="{{old('feature4')}}" name="feature4" id="feature4" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="feature5" class="form-label">Feature5</label>
                        <input type="text" value="{{old('feature5')}}" name="feature5" id="feature5" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="feature6" class="form-label">Feature6</label>
                        <input type="text" value="{{old('feature6')}}" name="feature6" id="feature6" class="form-control">
                    </div>
                    
                </div>    
                        <button class="btn btn-info mt-2" type="submit" >Simpan</button>
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection