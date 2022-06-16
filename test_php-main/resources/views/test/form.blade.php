@extends('app')
@section('content')
<div class="container w-25 border p-4 mt-4">
    <form action="{{ route('form') }}" id="form" method="POST">
        @csrf

        @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif

        @error('firtName')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        <div class="mb-3">
            <label for="firtName" class="form-label">Firt Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="firtName" require>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="lastName" require>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputPassword1" name="email" require>
        </div>

        <div class="g-recaptcha" data-sitekey="6LenF3QgAAAAAGogX4ZaEe33DAxL6AwnCRfniabs"></div>
        <br/>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection