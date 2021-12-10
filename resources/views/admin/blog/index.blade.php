@extends('admin.layouts.template')

@section('content')

<div class="container px-4 ">
    <h1 class="text-center">Article</h1>
    <div class="row">
        <div >
            {{-- @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif --}}
            <div class="card">     
                <div class="card-body">
                 <a class="btn btn-info mb-4" href="{{url('blog/create')}}">Create</a>
                 <div class="table-responsive">
                   <table class="table-bordered table">
                     <thead class="table-dark">
                       <tr>
                           <th>Title</th>
                           <th>Description</th>
                           <th>Image</th>
                           <th colspan="2" class="text-center">Action</th>
                       </tr>
                     </thead>
                       @foreach ($posts as $post)
                           <tr>
                               <td>{{ $post-> title}}</td>
                               <td>{{ $post-> description}}</td>
                               <td> {{$post-> image_path}}</td>
      
                               <td><a class="btn btn-info " href="{{url('blog/'.$post->slug.'/edit')}}">Edit</a></td>
                               <td>
                                    <form action="/blog/{{$post->slug}}" method="POST">
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
      $('.blog').addClass("active");
</script>
@endpush