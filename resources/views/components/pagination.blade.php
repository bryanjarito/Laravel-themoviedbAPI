<nav aria-label="pagination">
  <ul class="pagination justify-content-end">
    <li class="page-item"><a class="page-link" href="/movies?page=1"><i class="bi bi-skip-start"></i></a></li>
    @if (Request::get('page') != 1 && Request::get('page') !== null)
      <li class="page-item"><a class="page-link" href="/movies?page={{ Request::get('page') - 1 }}"><i class="bi bi-skip-backward"></i></a></li>
    @else
      <li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-skip-backward"></i></a></li>
    @endif
    <li class="page-item"><a class="page-link" href="/movies?page={{ Request::get('page') + 1 }}">{{ Request::get('page') + 1 }}</a></li>
    <li class="page-item"><a class="page-link" href="/movies?page={{ Request::get('page') + 2 }}">{{ Request::get('page') + 2 }}</a></li>
    <li class="page-item"><a class="page-link" href="/movies?page={{ Request::get('page') + 3 }}">{{ Request::get('page') + 3 }}</a></li>
    <li class="page-item"><a class="page-link" href="/movies?page={{ Request::get('page') + 1 }}"><i class="bi bi-skip-forward"></i></a></li>
  </ul>
</nav>