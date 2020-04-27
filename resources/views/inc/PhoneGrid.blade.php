<!-- phone Grid-->
<section class="page-section bg-light" id="phone">
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="phone-item">

                    <a class="phone-link">

                        <img class="img-fluid" src="/storage/index/03-thumbnail.jpg" alt=""/>

                    </a>

                    <div class="phone-caption">

                      <form class="" action="{{ route('search') }}" method="GET">

                            <h1 class="phone-caption-heading">Latest Phones

                              <button type="submit" class="phone-caption-subheading btn btn-outline-dark btn-sm ">View</button>

                            </h1>

                            <input type="hidden" name="phones" value="latestPhones">

                      </form>

                        <div class="phone-caption-subheading text-muted">Latest Mobiles Phones on the market</div>

                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="phone-item">

                    <a class="phone-link">

                        <img class="img-fluid" src="/storage/index/04-thumbnail.jpg" alt=""/>

                    </a>

                    <div class="phone-caption">

                      <form class="" action="{{ route('search') }}" method="GET">

                            <h1 class="phone-caption-heading">Cheap Phones

                              <button type="submit" class="phone-caption-subheading btn btn-outline-dark btn-sm ">View</button>

                            </h1>

                            <input type="hidden" name="phones" value="cheapPhones">

                      </form>

                        <div class="phone-caption-subheading text-muted">Phones with cheap prices</div>

                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="phone-item">

                    <a class="phone-link">

                        <img class="img-fluid" src="/storage/index/05-thumbnail.jpg" alt=""/>

                    </a>

                    <div class="phone-caption">

                      <form class="" action="{{ route('search') }}" method="GET">

                            <h1 class="phone-caption-heading">For Gaming

                              <button type="submit" class="phone-caption-subheading btn btn-outline-dark btn-sm ">View</button>

                            </h1>

                            <input type="hidden" name="phones" value="forgamingPhones">

                      </form>

                        <div class="phone-caption-subheading text-muted">Better gaming experience</div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
