@extends('main')

@section('content')

<div class="mt-5 container w-50 ">
    <form class="container">
        <div class="form-group row">
            <label for="url" class="col-sm-2 col-form-label">Url:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="url" placeholder="write url">
            </div>
        </div>
        <div class="form-group row mt-4">
            <label for="short_url" class="col-sm-2 col-form-label">Converted Url:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="short_url" disabled>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
</div>
@endsection
