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
                <li>Le titre est obligatoire</li>
                <li>Les Medias sont trop large , vous devez les mettre dans la chaine youtube</li>
        </ul>
    </div>
@endif
<div class="center">
<p style="text-align:right;">
<a href="/activities" >Annuler </a></p>
<form action="{{ url('activities/'.$activitie->id) }}" method="POST" enctype="multipart/form-data">
{{ method_field('PUT') }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Titre de l'activite :</label>
      <input  class="form-control w-100" type="text"  value="{{ $activitie->Titre}}" name="titre">
      <label >Contenu de l'activite :</label>
      <input  class="form-control w-100" type="text"  value="{{ $activitie->contenu}}" name="contenu">
      <label >Date de l'activite :</label>
      <input  class="form-control w-100" type="date"  value="{{ $activitie->Date}}" name="date">
      <label >Video 1 de youtube :</label>
      @if ( !empty ( $activitie->fileYoutube1) ) 
      <iframe width="100" height="100" src="//{{ $activitie->fileYoutube1}}" frameborder="0" allowfullscreen></iframe>
        </iframe>
        @endif
      <input  class="form-control w-100" type="text"  value="{{ $activitie->fileYoutube1}}" name="youtube1">
      <label >Video 2 de youtube :</label>
      @if ( !empty ( $activitie->fileYoutube2) ) 
      <iframe width="100" height="100"
        src="{{$activitie->fileYoutube2}}">
        </iframe>
        @endif
      <input  class="form-control w-100" type="text"  value="{{ $activitie->fileYoutube2}}" name="youtube2">
    
    </div>
    <div class="form-group col-md-6">
    <label >Photo 1 de l'activite :</label>
    @if ( !empty ( $activitie->filePhoto1) ) 
    <img style="height:100px;width:100px;"src="{{asset('storage/' .$activitie->filePhoto1 ) }}" class="img-thumbnail" style="width:400px;height:300px">
    <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('activities/'.$activitie->filePhoto1.'/'.$activitie->id.'/1')}}">Supprimer</a></td>
    @endif
        <input type="file" class="form-control-file" name="photo1" value="{{ url('storage/' . $activitie->filePhoto1)}} " >
    <label >Photo 2 de l'activite :</label>
    @if ( !empty ( $activitie->filePhoto2) ) 
    <img style="height:100px;width:100px;"src="{{asset('storage/' .$activitie->filePhoto2 ) }}" class="img-thumbnail" style="width:400px;height:300px">
    <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('activities/'.$activitie->filePhoto2.'/'.$activitie->id.'/2')}}">Supprimer</a></td>
    @endif
    <input type="file" class="form-control-file" name="photo2" value="{{ url('storage/' . $activitie->filePhoto2)}} " >
    <label >Photo 3 de l'activite :</label>
    @if ( !empty ( $activitie->filePhoto3) ) 
    <img style="height:100px;width:100px;"src="{{asset('storage/' .$activitie->filePhoto3 ) }}" class="img-thumbnail" style="width:400px;height:300px">
    <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('activities/'.$activitie->filePhoto3.'/'.$activitie->id.'/3')}}">Supprimer</a></td>
    @endif
    <input type="file" class="form-control-file" name="photo3" value="{{ url('storage/' . $activitie->filePhoto3)}} " >
    <label >Photo 4 de l'activite :</label>
    @if ( !empty ( $activitie->filePhoto4) ) 
    <img style="height:100px;width:100px;"src="{{asset('storage/' .$activitie->filePhoto4 ) }}" class="img-thumbnail" style="width:400px;height:300px">
    <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('activities/'.$activitie->filePhoto4.'/'.$activitie->id.'/4')}}">Supprimer</a></td>
    @endif
        <input type="file" class="form-control-file" name="photo4" value="{{ url('storage/' . $activitie->filePhoto4)}} " >
    <label >Photo 5 de l'activite :</label>
    @if ( !empty ( $activitie->filePhoto5) ) 
    <img style="height:100px;width:100px;"src="{{asset('storage/' .$activitie->filePhoto5 ) }}" class="img-thumbnail" style="width:400px;height:300px">
    <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('activities/'.$activitie->filePhoto5.'/'.$activitie->id.'/5')}}">Supprimer</a></td>
    @endif
        <input type="file" class="form-control-file" name="photo5" value="{{ url('storage/' . $activitie->filePhoto5)}} " >
    <label >Photo 6 de l'activite :</label>
    @if ( !empty ( $activitie->filePhoto6) ) 
    <img style="height:100px;width:100px;"src="{{asset('storage/' .$activitie->filePhoto6 ) }}" class="img-thumbnail" style="width:400px;height:300px">
    <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('activities/'.$activitie->filePhoto6.'/'.$activitie->id.'/6')}}">Supprimer</a></td>
    @endif
        <input type="file" class="form-control-file" name="photo6" value="{{ url('storage/' . $activitie->filePhoto6)}} " >
    
    </div>
    <div class="form-group col-md-6">
    <label >Video 1 de  l'activite :</label>
    @if ( !empty ( $activitie->fileVideo1) ) 
        <video width="100px" height="100px" controls>
            <source src="{{asset('storage/' .$activitie->fileVideo1) }}" type="video/mp4" />
        </video>
        <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('activities/'.$activitie->fileVideo1.'/'.$activitie->id.'/v1')}}">Supprimer</a></td>

    @endif
    <input type="file" class="form-control-file" name="video1" value="{{ url('storage/' . $activitie->fileVideo1)}} " >
    <label >Video 2 de  l'activite :</label>
    @if ( !empty ( $activitie->fileVideo2) ) 
        <video width="100px" height="100px" controls>
            <source src="{{asset('storage/' .$activitie->fileVideo2) }}" type="video/mp4" />
        </video>
        <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('activities/'.$activitie->fileVideo2.'/'.$activitie->id.'/v2')}}">Supprimer</a></td>

 @endif
    <input type="file" class="form-control-file" name="video2" value="{{ url('storage/' . $activitie->fileVideo2)}} " >
    <label >Video 3 de  l'activite :</label>
    @if ( !empty ( $activitie->fileVideo3) ) 
        <video width="100px" height="100px" controls>
            <source src="{{asset('storage/' .$activitie->fileVideo3) }}" type="video/mp4" />
        </video>
        <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('activities/'.$activitie->fileVideo3.'/'.$activitie->id.'/v3')}}">Supprimer</a></td>

 @endif
    <input type="file" class="form-control-file" name="video3" value="{{ url('storage/' . $activitie->fileVideo3)}} " >
    
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Modifier</button>
  @csrf
</form>
</div>
@endsection
