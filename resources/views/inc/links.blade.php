<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <div>

              {{ $phones->appends(request()->input())->links() }}
              
            </div>
        </div>
    </div>
</div>
