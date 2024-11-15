@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3 class="text-center">Library Catalogue</h3>
    <hr>

    <!-- Links for each category -->
    <div class="d-flex justify-content-center">
        <a href="{{ route('books.index') }}" class="btn btn-primary mx-1">Books</a>
        <a href="{{ route('cds.index') }}" class="btn btn-primary mx-1">CDs</a>
        <a href="{{ route('newspapers.index') }}" class="btn btn-primary mx-1">Newspapers</a>
        <a href="{{ route('fyps.index') }}" class="btn btn-primary mx-1">FYPs</a>
    </div>

</div>
@endsection
