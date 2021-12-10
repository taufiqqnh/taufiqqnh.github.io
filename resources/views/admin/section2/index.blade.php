@extends('admin.layouts.template')

@section('content')

<div class="container">
    <h1 class="text-center">Section 2</h1>
    <div class="row">
        <div >
            {{-- @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif --}}
            <div class="card">
                {{-- <div class="card-header ">Welcome to Section 2</div>     --}}
                <div class="card-body">
                 <a class="btn btn-info mb-4" href="{{url('section2/create')}}">Create</a>
                 <div class="table-responsive">
                   <table class="table-bordered table">
                     <thead class="table-dark">
                       <tr>
                           <th>Title</th>
                           <th>Descrition</th>
                           <th colspan="2" class="text-center">Action</th>
                       </tr>
                     </thead>
                       @foreach ($section2s as $key=>$value)
                           <tr>
                               <td>{{ $value-> title}}</td>
                               <td>{{ $value-> desc}}</td>
                               <td><a class="btn btn-info" href="{{url('section2/'.$value->id.'/edit')}}">Edit</a></td>
                               <td>
                                   <form action="{{url('section2/'.$value->id)}}" method="POST">
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
      $('.section2').addClass("active");
</script>
@endpush