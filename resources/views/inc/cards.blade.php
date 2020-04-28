<div class="row">
    @foreach ($phones as $phone)
        <div class="col-md-4 p-5 col-sm-6 text-center">
            <div class="card mb-2 border-gradient border-gradient-purple">
                <div class="image mx-auto">
                    <img
                    src="/storage/phones/{{ $phone->cover_image }}"
                    alt="{{ $phone->cover_image }}"
                    />
                </div>
                <div class="card-body">

                    <h4 class="card-title">{{ $phone->model}}</h4>

                    <h3 class="card-text">{{ $phone->brand}}</h3>

                    <p class="card-text">€ {{ $phone->price}}</p>

                    <a href="/phones/{{ $phone->id }}"><button class="btn btn-primary btn-sm btn-rounded" >Preview</button></a>
                    
                </div>
            </div>
        </div>
    @endforeach
</div>
