@extends('visitor.layouts.app')

@section('content')
{{-- Slider --}}
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    @foreach ($section1s as $slider)
      <div class="carousel-item {{$loop->first ? 'active' : '' }}">
          <img src="{{asset('images/' . $slider->image)}}"
           class="d-block w-100" alt="...">
           <div class="carousel-caption d-none d-md-block">
            <h5>{{$slider->title}}</h5>
            <p>{{$slider->desc}}</p>
          </div>
      </div> 
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
{{-- ENDSlider --}}

<div class="container px-4 ">
   <div class="background-color-grey grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-black text-5xl uppercase font-bold text-shadow-md pb-14">
                    Welcome to Company Profile
                </h1>
            </div>
        </div>
    </div>

    {{-- Article --}}
    <h1 class="text-center font-bold">Article</h1>
    <br>
    @foreach ($posts as $post)
    <div class="row gx-5">
      <div class="col">
        <img src="{{asset('images/' . $post->image_path)}}"
        class="d-block w-100" alt="...">
        
      </div>
      <div class="col">
        <div class=" text-left w-4/5 block">
            <h3 class="text-3xl font-extrabold text-gray-600">
              {{$post->title}}
            </h3>
            <span class="text-gray-500">
              By <span class="font-bold italic text-gray-800">
              {{$post->user->name}}</span>, Created on {{date('jS M Y', strtotime($post->updated_at))}}
          </span>
            <p class="py-8 text-gray-500 text-s">
              <em> 
                {{$post->description}}
                </em>
            </p>
           {{-- <a href="/blog/{{$post->slug}}" class="btn btn-primary">
            Keep Reading
          </a> --}}
        </div>
      </div>
    </div>
    <br>
    <br>
    @endforeach
  
{{-- END Article --}}

{{-- Section2 --}}
<h1 class="text-center font-bold">About</h1>
    <br>
  <div class="row justify-content-center">
    @foreach ($section2s as $section2)
      <div class="col-md-6">
        <div class="card h-100">
            <div class="card-header font-bold">
              {{$section2->title}}
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>{{$section2->desc}}</p>
                <footer class="blockquote-footer">By-<cite title="Source Title">{{$post->user->name}}</cite></footer>
              </blockquote>
            </div>
        </div>
      </div>
    @endforeach
  </div>
  {{-- ENDSection2 --}}

  {{-- Section3 --}}
  <h1 class="text-center font-bold mt-4">My Team</h1>
    <br>
    <div class="row justify-content-center">
        @foreach ($section3s as $section3)
        <div class="col-md-4 mt-2">
            <div class="card h-100">
              <img src="{{asset('images/' . $section3->image)}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-bold">{{$section3->full_name}}</h5>
                <p class="card-text">{{$section3->position}}</p>
                <p class="card-text">{{$section3->desc}}</p>
              </div>
              {{-- <a href=""
              class="uppercase bg-transparent border-2
              border-gray-400 text-black-100 text-xs font-extrabold
              py-3 px-5 rounded-3xl">
              Find Out More
            </a> --}}
            </div>
        </div>
        @endforeach
  </div>
{{-- ENDSection3 --}}

{{-- Section4 --}}
<section class="pricing py-5">
  <h1 class="text-center font-bold mt-3">Product</h1>
<br>
<div class="container">
  <div class="row justify-content-center">
      @foreach ($section4s as $section4)
      <!-- Free Tier -->
      <div class="col-md-3 mt-2">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">{{$section4->title}}</h5>
            <h6 class="card-price text-center">${{$section4->satuan}}<span class="period">/pcs</span></h6>
            <h6 class="card-price text-center">${{$section4->price}}<span class="period"></span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>{{$section4->feature1}}</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>{{$section4->feature2}}</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>{{$section4->feature3}}</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>{{$section4->feature4}}</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>{{$section4->feature5}}</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>{{$section4->feature6}}</li>
              </ul>
            {{-- <div class="d-grid">
              <a href="#" class="btn btn-primary text-uppercase">Button</a>
            </div> --}}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ENDSection4 --}}

{{-- Section5 --}}
<h1 class="text-center font-bold mt-3">Portofolio</h1>
<br>
<div class="row justify-content-center">
  @foreach ($section5s as $section5)
  <div class="col-md-4 mt-2">
      <div class="card h-100">
        <img src="{{asset('images/' . $section5->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$section5->title}}</h5>
          <p class="card-text">{{$section5->desc}}</p>
        </div>
        {{-- <a href=""
        class="uppercase bg-transparent border-2
        border-gray-400 text-black-100 text-xs font-extrabold
        py-3 px-5 rounded-3xl">
        Find Out More
      </a> --}}
      </div>
    </div>
    @endforeach
</div>
{{-- ENDSection5 --}}

{{-- Contact --}}
<h1 class="text-center font-bold mt-5">Contact</h1>
    <br>
@foreach ($contacts as $contact)
    
<div class="card">
  <div class="card-header bg-light p-2 text-dark font-bold">Info Contact</div>
  <div class="card-body">
        <div class="mb-2">
           <label for="address">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                  </svg>
            </label>
                <td>{{ $contact-> address}}</td>
        </div>
        <div class="mb-2">
          <label for="phone">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"/>
              </svg>
            </label>
            <td>{{ $contact-> phone}}</td>
        </div>
        <div class="mb-2">
          <label for="email">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-check-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
              </svg>
            </label>
            <td>{{ $contact-> email}}</td>
        </div>
        <div class="mb-2">
          <label for="facebook">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
            </label>
            <td>{{ $contact-> facebook}}</td>
        </div>
        <div class="mb-2">
          <label for="twitter" class=" font-bold">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
              </svg>
            </label>
            <td>{{ $contact-> twitter}}</td>
        </div>    
  </div>
</div>
@endforeach
{{-- EndContact --}}

</div>
@endsection