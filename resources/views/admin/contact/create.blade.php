@extends('admin.layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
<div class="card">
    <div class="card-header">Create new Contact</div>
    <div class="card-body">
        <form action="{{url('contact/')}}" method= "POST">
            @csrf
        <div class="mb-2">
            <label for="address" class="form-label">Address</label>
            <input type="text" value="{{old('address')}}" name="address" id="address" class="form-control">
        </div>
        <div class="mb-2">
            <label for="phone" class="form-label">Phone</label>
            <input type="number" value="{{old('phone')}}" name="phone" id="phone" class="form-control">
        </div>
        <div class="mb-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{old('email')}}" name="email" id="email" class="form-control">
        </div>
        <div class="mb-2">
            <label for="facebook" class="form-label">Facebook</label>
            <input type="text" value="{{old('facebook')}}" name="facebook" id="facebook" class="form-control">
        </div>
        <div class="mb-2">
            <label for="twitter" class="form-label">Twitter</label>
            <input type="text" value="{{old('twitter')}}" name="twitter" id="twitter" class="form-control">
        </div>
            
            <button class="btn btn-info mt-2" type="submit" >Simpan</button>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection