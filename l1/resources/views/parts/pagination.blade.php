<nav class ="@if($allPages < 2) d-none @endif" aria-label="Page navigation example">
  <form class="mb-2" method="get"action="{{route('frontIndex')}}">
  <label id="perPage">Animals per page</label>
  <input name="perPage" id="perPage" class="col-1">
  <button class="btn btn-outline-danger" type="submit">GO</button>
  </form>
  <ul class="pagination">
    <li class="page-item @if($pageNow == 1) disabled @endif">
      <a class="page-link" href="{{route('frontIndex', ['page' => $pageNow - 1] + $querry)}}" aria-label="Previous">
        <span caria-hidden="true">&laquo;</span>
      </a>
    </li>
    @foreach(range(1, $allPages) as $page)
        <li class="page-item @if($pageNow == $page) active @endif"><a class="page-link" href="{{route('frontIndex', ['page' => $page] + $querry)}}">{{$page}}</a></li>
    @endforeach
    <li class="page-item @if($allPages == $pageNow) disabled @endif ">
      <a class="page-link" href="{{route('frontIndex', ['page' => $pageNow + 1] + $querry)}}" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>