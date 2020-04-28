<form class="form-inline my-2 my-lg-0" action="{{ route('search') }}" method="GET">
    <input class="form-control mr-sm-2" type="search" name="query" value="{{ request()->input('query') }}" id="query" placeholder="Search for product" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
