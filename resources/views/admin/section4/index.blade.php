@extends('admin.layouts.template')

@section('content')
<div class="container px-4 ">
    <h1 class="text-center">Section 4</h1>
    <div class="row">
        <div >
            {{-- @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif --}}
            <div class="card">
                {{-- <div class="card-header ">Welcome to Section 4</div>       --}}
                <div class="card-body">
                 <a class="btn btn-info mb-4" href="{{url('section4/create')}}">Create</a>
                 <div class="table-responsive">
                   <table class="table-bordered table">
                     <thead class="table-dark">
                       <tr>
                           <th>Title</th>
                           <th>Satuan</th>
                           <th>Price</th>
                           <th>Feature1</th>
                           <th>Feature2</th>
                           <th>Feature3</th>
                           <th>Feature4</th>
                           <th>Feature5</th>
                           <th>Feature6</th>
                           <th colspan="2" class="text-center">Action</th>
                       </tr>
                     </thead>
                       @foreach ($section4s as $section4)
                           <tr>
                               <td>{{ $section4-> title}}</td>
                               <td>{{ $section4-> satuan}}</td>
                               <td>{{ $section4-> price}}</td>
                               <td>{{ $section4-> feature1}}</td>
                               <td>{{ $section4-> feature2}}</td>
                               <td>{{ $section4-> feature3}}</td>
                               <td>{{ $section4-> feature4}}</td>
                               <td>{{ $section4-> feature5}}</td>
                               <td>{{ $section4-> feature6}}</td>
                               <td><a class="btn btn-info " href="{{url('section4/'.$section4->id.'/edit')}}">Edit</a></td>
                               <td>
                                   <form action="{{url('section4/'.$section4->id)}}" method="POST">
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
      $('.section4').addClass("active");
</script>
@endpush