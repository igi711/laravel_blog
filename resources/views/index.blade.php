@include('includes.head')
@include('includes.nav')

<!-- Blogpost cards-->

  @foreach ($blog_posts as $blog_post)

  <div class="card mx-auto mt-4 mb-3 justify-content-center" style="max-width: 950px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="/img/3.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><a href="#" class="stretched-link" aria-disabled="true" style="text-decoration: none; color: black;"> {{$blog_post->title}}</h5></a>
          <p class="card-text">{{ $blog_post->body}}</p>
        </div>
      </div>
    </div>
  </div>

   @endforeach
     
@include('includes.foot')