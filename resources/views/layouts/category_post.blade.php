@extends('layouts.app')

@section('content')
{{-- navbar section --}}

 <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="{{url('/')}}">Miniblog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
 </div>


 <div class="container mt-4">
     <div class="row">
         @foreach ( $categories->posts as $post)

        <div class="col-lg-4">
           <div class="card mb-4">
               <img src="{{asset($post->image)}}" class="card-img-top" alt="..."  style="height:220px;">
               <div class="card-body">
                 <h5 class="card-title">{{$post->title}}</h5>
                 <div class="btn-group" role="group">
                       <a href="{{route('singlePost',$post->id)}}" class="btn btn-light">View</a>
                 </div>
               </div>
             </div>
        </div>
        @endforeach
    </div>
    
 </div>
 <hr>
 <div class="container-fluid">
    <footer class="bg-light p-4 ">
        <p class="text-center font-weight-bolder">&copy; right by Rasel</p>
    </footer>
</div>
@endsection
