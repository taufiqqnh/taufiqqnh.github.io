@extends('admin.layouts.template')

@section('content')
<div class="container px-4 ">
    <div class="w-4/5 m-auto ">
        <div class="py-15">
            <h1 class="text-5xl text-center">
                Update Contact
            </h1>
        </div>
    </div>
    <div class="w-4/5 m-auto pt-20">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Update Contact</div>
                    <div class="card-body">
                        @foreach ($contacts as $contact)  
                        <form action="" method= "POST">
                            @csrf
                            <div class="mb-2">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" disabled value="{{$contact->address}}" name="address" id="address" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="number" disabled value="{{$contact->phone}}" name="phone" id="phone" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" disabled value="{{$contact->email}}" name="email" id="email" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" disabled value="{{$contact->facebook}}" name="facebook" id="facebook" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" disabled value="{{$contact->twitter}}" name="twitter" id="twitter" class="form-control">
                            </div>
                            </div>                       
                            <td><a class="btn btn-info" href="{{url('contact/'.$contact->id.'/edit')}}">Edit</a></td>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection

@push("script")
<script>
      $('.contact').addClass("active");
</script>
@endpush