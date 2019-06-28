@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1 class="title m-b-md">
            Shortnr
        </h1>

        <div>
            <form action="/shorten" method="post">
                @csrf
                <div class="form-group">
                    <label for="url" class="d-none">Your URL</label>
                    <input type="text" class="form-control" id="url" name="url" aria-describedby="shortenHelp" placeholder="Enter a URL">
                    <small id="shortenHelp" class="form-text text-muted">We'll generate a shortened version of your URL.</small>
                </div>
                <button type="submit" class="btn btn-primary">Shortn</button>
            </form>
        </div>
    </div>
</div>
@stop
