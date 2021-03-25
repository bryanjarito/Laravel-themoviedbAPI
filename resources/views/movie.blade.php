@include('layouts.header')
<div class="container">
  <div class="row">
    <div class="offset-md-3 col-md-6 mt-1">
      <div class="card mx-auto" style="width: 35rem">
        <img src="https://image.tmdb.org/t/p/original/{{ $movie[0]['poster'] }}" class="img-fluid card-img-top mx-auto mt-3" style="width: 25rem">
        <div class="card-body">
          <h5 class="card-title">{{ $movie[0]['title'] }} 
            <div class="badge bg-info text-wrap">
              <i class="bi bi-star-fill"></i> {{ $movie[0]['vote_average'] }}
            </div>
          </h5>
          <blockquote class="blockquote-footer mt-1">
            {{ \Carbon\Carbon::parse($movie[0]['release_date'])->format('F m, Y') }}
          </blockquote>
          <p class="card-text fst-italic">{{ $movie[0]['overview'] }}</p>
          <a href="/movies" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i> Go Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')























<!-- <script src="{{ asset('js/app.js') }}"></script> -->

