@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(isset($token))
                        <p>{{$token}}</p>
                    @endif
                    <form action="{{route('refresh')}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Regenerate Token</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
