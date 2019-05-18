@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @csrf
                @foreach ($message as $msg)
                    <form method="POST" action="{{ route('admin_path') }}">
                        @csrf
                        <div class="card">
                            <div class="card-header">reçu le {{ $msg->created_at }} de Mr {{ $msg->prenom }} {{ $msg->nom }}
                            </div>
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <div class="card-body">
                                    <p class="card-text">" {{ $msg->message }} "</p>
                                    <button type="submit" class="btn btn-danger" >Supprimer</button>
                                    <input type="hidden" name="id_message" value="{{ $msg->id }}">
                                </div>
                        </div><br/>
                    </form>
                @endforeach
        </div>
    </div>
</div>
@endsection
