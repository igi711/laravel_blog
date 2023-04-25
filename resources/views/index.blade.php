@include('includes.head')
@include('includes.nav')

<!-- Blogpost cards-->

  @foreach ($blog_posts as $blog_post)
                   
  <div class="container"> 
  <div class="row justify-content-around">
  <div class="cols-4 cols-md-2 g-4">
  <div class="card border-danger">
  <!-- <img src="..." class="card-img-top" alt="...">-->
  <div class="card-body">
  <h5 class="card-title"><a href="#" class="stretched-link" aria-disabled="true" style="text-decoration: none; color: black;"> {{$blog_post->title}}</h5></a>
  <p class="card-text">{{ $blog_post->body}} </p>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>

   @endforeach
     

@include('includes.foot')