@extends('layouts.app')

@section('title', 'Newspaper Catalog')

@section('content')
<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <h3 class="text-center">Newspaper Catalog</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">publication_date</th>
                    <th scope="col">publisher</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($newspapers as $newspaper)
                    <tr>
                        <td>{{ $newspaper->title }}</td>
                        <td>{{ $newspaper->publication_date }}</td>
                        <td>{{ $newspaper->publisher }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No Newspapers available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection