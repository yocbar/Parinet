@extends('layout')

@section('content')
<div class="jumbotron">
  <h1>Test d'acces à OutLook</h1>
  <p>Avoir un OAuth token d'Azure.</p>
  <p>
    <a class="btn btn-lg btn-primary" href="/signin" role="button" id="connect-button">Se connecter à Outlook</a>
  </p>
</div>
@endsection