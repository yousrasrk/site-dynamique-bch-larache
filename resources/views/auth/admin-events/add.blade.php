@extends('layouts.app')

@section('content')
<style>
.center {
  margin: auto;
  width: 70%;
  padding: 10px;
}
</style>
<body >
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>Le titre est obligatoire</li>
                <li>Les Medias sont trop large , vous devez le mettre dans la chaine youtube</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="center">
<p style="text-align:right;">
<a href="/events" >Annuler  </a></p>
<form action="/events" method="POST" enctype="multipart/form-data">
        <div class="form-row">
        <div class="form-group col-md-6">
        <label >Titre de l'evenement :</label>
      <input type="text" class="form-control-file" name="titre" multiple>
      <label >Contenu de l'evenement :</label>
      <textarea class="form-control w-100" name="contenu"  cols="30" rows="9" name="contenu"></textarea>
      <label >Date de l'evenement :</label>
      <input class="form-control" type="date"  name="date">
      <div class="form-group col-md-6">
      <label >Photo 1  de l'evenement :</label>
      <input type="file" class="form-control-file" name="photo1" multiple>
      </div>
      <div class="form-group col-md-6">
      <label >Photo 2  de l'evenement :</label>
      <input type="file" class="form-control-file" name="photo2" multiple>
      </div>
      <div class="form-group col-md-6">
      <label >Photo 3  de l'evenement :</label>
      <input type="file" class="form-control-file" name="photo3" multiple>
      </div>
      <div class="form-group col-md-6">
      <label >Photo 4  de l'evenement :</label>
      <input type="file" class="form-control-file" name="photo4" multiple>
      </div>
      <div class="form-group col-md-6">
      <label >Photo 5  de l'evenement :</label>
      <input type="file" class="form-control-file" name="photo5" multiple>
      </div>
      <div class="form-group col-md-6">
      <label >Photo 6  de l'evenement :</label>
      <input type="file" class="form-control-file" name="photo6" multiple>
      </div>
    </div>
      <div class="form-group col-md-6">
        <label >Video 1 de l'evenement :</label>
        <input type="file" class="form-control-file" name="video1" multiple>
        <label >Video 2 de l'evenement :</label>
        <input type="file" class="form-control-file" name="video2" multiple>
        <label >Video 3 de l'evenement :</label>
        <input type="file" class="form-control-file" name="video3" multiple>
        <label >Video 1 de Youtube :</label>
        <input type="text" class="form-control-file" name="youtube1" multiple>
        <label >Video 2 de Youtube :</label>
        <input type="text" class="form-control-file" name="youtube2" multiple>
        
      </div>
    </div>
  </div>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
  <button type="submit" class="btn btn-primary">Ajouter</button>
  @csrf
</form>
</div>
@endsection
