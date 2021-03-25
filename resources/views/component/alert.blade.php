@if(session()->has('success'))
<div class="container">
    <div class="row mt-3 px-3">
        <div class="col-sm-3">
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        </div>
    </div>
</div>
@endif
