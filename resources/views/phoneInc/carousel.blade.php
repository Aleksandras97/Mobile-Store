<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" data-pause="hover">

    @if (count($phone->photos) > 0)

        <ol class="carousel-indicators">

            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>

              <?php $pos=1 ?>
            @foreach ($phone->photos as $photo)

              <li data-target="#carousel-example-1z" data-slide-to="{{ $pos }}"></li>

              <?php $pos++ ?>

            @endforeach

        </ol>

    @endif

  <div class="carousel-inner" role="listbox">

    <div class="carousel-item active">

        <img
        class="mx-auto d-block first-image"
        src="/storage/phones/{{ $phone->cover_image }}" alt="{{ $phone->cover_image }}"
        >

    </div>

    @if (count($phone->photos) > 0)

      @foreach ($phone->photos as $photo)

        <div class="carousel-item">

          <img
          class="mx-auto d-block first-image"
          src="/storage/phones/{{ $photo->phone_id }}/{{ $photo->photo }}" alt="{{ $phone->cover_image }}"
          />

          @if(Auth::check())

            <form class="in-image" action="{{ route('photo-destroy', $photo->id) }}" method="post">
              @csrf
              @method('DELETE')

              <button type="submit" name="button" class="btn btn-danger"><i class="fas fa-times"></i></button>

            </form>

          @endif

        </div>

      @endforeach

    @endif

  </div>
  <!--/.Slides-->

  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">

    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>

  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">

    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>

  </a>

</div>
