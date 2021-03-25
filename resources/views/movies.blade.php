@include('layouts.header')
<div class="container">
  <div class="row mt-2">
      <div class="offset-md-3 col-md-8">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <span class="navbar-brand mb-1 h1">Popular Movies</span>
            </div>
        </nav>
      </div>
  </div>
  <div class="row">
    <div class="offset-md-3 col-md-8 mt-4">
      @include('components.pagination')
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Poster</th>
            <th scope="col">Title</th>
            <th scope="col">Release Date</th>
            <th scope="col">Vote Average</th>
            <th scope="col">Popularity</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($movies as $movie)
            <tr>
              <td> <img src="https://image.tmdb.org/t/p/original/{{ $movie['poster'] }}" class="img-responsive img-thumbnail" style="max-height: 150px"> </td>
              <td class="align-middle" style="width: 250px">{{ $movie['title'] }}</td>
              <td class="align-middle">{{ $movie['release_date'] }}</td>
              <td class="align-middle">{{ $movie['vote_average'] }}</td>
              <td class="align-middle">{{ $movie['popularity'] }}</td>
              <td class="align-middle">
                <a href="/movies/{{ $movie['id'] }}" class="btn btn-primary"><i class="bi bi-eye"></i> View</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      @include('components.pagination')
    </div>
  </div>
</div>
@include('layouts.footer')