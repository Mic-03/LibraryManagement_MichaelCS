@extends('layouts.app')

@section('title', 'CD Catalog')

@section('content')
<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <h3 class="text-center">CD Catalog</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cds as $cd)
                    <tr>
                        <td>{{ $cd->title }}</td>
                        <td>{{ $cd->artist }}</td>
                        <td>{{ $cd->genre }}</td>
                        <td>{{ "Rp " . number_format($cd->price, 2, ',', '.') }}</td>
                        <td>{{ $cd->stock }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No CDs available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
