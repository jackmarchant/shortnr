@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h1>Dashboard</h1>
        <div class="mb-3">
            <a class="btn btn-primary" href="{{ route('index') }}">Create a Shortnr URL</a>
        </div>

        <table class="table table-responsive table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Short URL</th>
                    <th scope="col">URL</th>
                    <th scope="col"># Visits</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($urls as $url)
                    <tr>
                        <td><a target="_blank" rel="noreferrer noopener" href="{{ route('short', $url->short) }}">{{ route('short', $url->short) }}</a></td>
                        <td>{{ $url->url }}</td>
                        <td>{{ $url->visits }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop