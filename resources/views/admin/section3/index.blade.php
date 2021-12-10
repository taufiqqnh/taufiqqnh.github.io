@extends('admin.layouts.template')

@section('content')
<div class="container px-4 ">
    <h1 class="text-center">Section 3</h1>
    <div class="row">
        <div >
            {{-- @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif --}}
            <div class="card">
                {{-- <div class="card-header ">Welcome to Section 3</div> --}}
                <div class="card-body">
                 <a class="btn btn-info mb-4" href="{{url('section3/create')}}">Create</a>
                 <div class="table-responsive">
                   <table class="table-bordered table">
                     <thead class="table-dark">
                       <tr>
                           <th>Image</th>
                           <th>Full Name</th>
                           <th>Position</th>
                           <th>Descrition</th>
                           <th colspan="2" class="text-center">Action</th>
                       </tr>
                     </thead>
                       @foreach ($section3s as $section3)
                           <tr>
                               <td> {{$section3-> image}} </td>
                               <td>{{ $section3-> full_name}}</td>
                               <td>{{ $section3-> position}}</td>
                               <td>{{ $section3-> desc}}</td>
                               <td><a class="btn btn-info " href="{{url('section3/'.$section3->id.'/edit')}}">Edit</a></td>
                               <td>
                                   <form action="{{url('section3/'.$section3->id)}}" method="POST">
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
      $('.section3').addClass("active");
</script>
@endpush