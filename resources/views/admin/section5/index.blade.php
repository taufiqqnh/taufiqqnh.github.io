@extends('admin.layouts.template')

{{-- @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session()->get('success')}}
    </div>
@endif --}}
@section('content')
<div class="container px-4 ">
    <h1 class="text-center">Section 5</h1>
    <div class="row">
        <div >
            <div class="card">
                {{-- <div class="card-header ">Welcome to Section 5</div> --}}
                <div class="card-body">
                 <a class="btn btn-info mb-4" href="{{url('section5/create')}}">Create</a>
                 <div class="table-responsive">
                   <table class="table-bordered table">
                     <thead class="table-dark">
                       <tr>
                           <th>Image</th>
                           <th>Title</th>
                           <th>Descrition</th>
                           <th colspan="2" class="text-center">Action</th>
                       </tr>
                     </thead>
                       @foreach ($section5s as $section5)
                           <tr>
                                <td>
                                {{-- <img 
                                    src="{{asset('images/' . $section5->image)}}"
                                    class="w-6/10 mb-8 shadow-xl"
                                    alt=""> --}}
                                    {{$section5->image}}
                                </td>
                               <td>{{ $section5-> title}}</td>
                               <td>{{ $section5-> desc}}</td>
                              
                               <td><a class="btn btn-info" href="{{url('section5/'.$section5->id.'/edit')}}">Edit</a></td>
                               <td>
                                   <form action="{{url('section5/'.$section5->id)}}" method="POST">
                                     @csrf
                                     <input type="hidden" name="_method" value="DELETE">
                                     <button class="btn btn-danger mt-3" type="submit">Delete</button>
                                   </form>
                               </td>
                           </tr>
                       @endforeach
                   </table>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push("script")
<script>
      $('.section5').addClass("active");
</script>
@endpush