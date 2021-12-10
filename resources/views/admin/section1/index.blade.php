@extends('admin.layouts.template')

@section('content')
<div class="container px-4 ">
    <h1 class="text-center">Section 1</h1>
    <div class="row">
        <div >
            {{-- @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif --}}
            <div class="card">
                {{-- <div class="card-header ">Welcome to Section 1</div> --}}     
                <div class="card-body">
                 <a class="btn btn-info mb-4" href="{{url('section1/create')}}">Create</a>
                 <div class="table-responsive">
                   <table class="table-bordered table">
                     <thead class="table-dark">
                       <tr>
                           <th>Title</th>
                           <th>Descrition</th>
                           <th>Image</th>
                           <th colspan="2" class="text-center">Action</th>
                       </tr>
                     </thead>
                       @foreach ($section1s as $section1)
                           <tr>
                               <td>{{ $section1-> title}}</td>
                               <td>{{ $section1-> desc}}</td>
                               <td> {{$section1->image}} </td>
                               <td><a class="btn btn-info " href="{{url('section1/'.$section1->id.'/edit')}}">Edit</a></td>
                               <td>
                                   <form action="{{url('section1/'.$section1->id)}}" method="POST">
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
      $('.section1').addClass("active");
</script>
@endpush