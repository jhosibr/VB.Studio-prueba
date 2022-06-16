@extends('app')
@section('content')


<div class="container mt-5">
    <table class="table table-striped table-bordered table-responsive ">
        <thead>
            <tr class="text-center">
                <th scope="col">Firt Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $tests as $test )
            <tr>
                <td href="{{ route('dataview', ['id' => $test -> id]) }}"> {{ $test->firtName }} </td>
                <td href="{{ route('dataview', ['id' => $test -> id]) }}"> {{ $test->lastName }} </td>
                <td  href="{{ route('dataview', ['id' => $test -> id]) }}"> {{ $test->email }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection