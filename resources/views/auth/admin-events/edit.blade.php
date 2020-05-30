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
<a href="/events" >Annuler </a></p>
<form action="{{ url('events/'.$event->id) }}" method="POST" enctype="multipart/form-data">
{{ method_field('PUT') }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Titre de l'activite :</label>
      <input  class="form-control w-100" type="text"  value="{{ $event->Titre}}" name="titre">
      <label >Contenu de l'activite :</label>
      <input  class="form-control w-100" type="text"  value="{{ $event->contenu}}" name="contenu">
      <label >Date de l'activite :</label>
      <input  class="form-control w-100" type="date"  value="{{ $event->Date}}" name="date">
      <label >Video 1 de youtube :</label>
      @if ( !empty ( $event->fileYoutube1) ) 
      <iframe width="100" height="100" src="//{{ $event->fileYoutube1}}" frameborder="0" allowfullscreen></iframe>
        </iframe>
        @endif
      <input  class="form-control w-100" type="text"  value="{{ $event->fileYoutube1}}" name="youtube1">
      <label >Video 2 de youtube :</label>
      @if ( !empty ( $event->fileYoutube2) ) 
      <iframe width="100" height="100"
        src="{{$event->fileYoutube2}}">
        </iframe>
        @endif
      <input  class="form-control w-100" type="text"  value="{{ $event->fileYoutube2}}" name="youtube2">
    
    </div>
    <div class="form-group col-md-6">
    <label >Photo 1 de l'activite :</label>
    @if ( !empty ( $event->filePhoto1) ) 
    <img style="height:100px;width:100px;"src="{{asset('storage/' .$event->filePhoto1 ) }}" class="img-thumbnail" style="width:400px;height:300px">
    <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('events/'.$event->filePhoto1.'/'.$event->id.'/1')}}">Supprimer</a></td>
    @endif
        <input type="file" class="form-control-file" name="photo1" value="{{ url('storage/' . $event->filePhoto1)}} " >
    <label >Photo 2 de l'activite :</label>
    @if ( !empty ( $event->filePhoto2) ) 
    <img style="height:100px;width:100px;"src="{{asset('storage/' .$event->filePhoto2 ) }}" class="img-thumbnail" style="width:400px;height:300px">
    <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('events/'.$event->filePhoto2.'/'.$event->id.'/2')}}">Supprimer</a></td>
    @endif
    <input type="file" class="form-control-file" name="photo2" value="{{ url('storage/' . $event->filePhoto2)}} " >
    <label >Photo 3 de l'activite :</label>
    @if ( !empty ( $event->filePhoto3) ) 
    <img style="height:100px;width:100px;"src="{{asset('storage/' .$event->filePhoto3 ) }}" class="img-thumbnail" style="width:400px;height:300px">
    <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('events/'.$event->filePhoto3.'/'.$event->id.'/3')}}">Supprimer</a></td>
    @endif
    <input type="file" class="form-control-file" name="photo3" value="{{ url('storage/' . $event->filePhoto3)}} " >
    <label >Photo 4 de l'activite :</label>
    @if ( !empty ( $event->filePhoto4) ) 
    <img style="height:100px;width:100px;"src="{{asset('storage/' .$event->filePhoto4 ) }}" class="img-thumbnail" style="width:400px;height:300px">
    <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('events/'.$event->filePhoto4.'/'.$event->id.'/4')}}">Supprimer</a></td>
    @endif
        <input type="file" class="form-control-file" name="photo4" value="{{ url('storage/' . $event->filePhoto4)}} " >
    <label >Photo 5 de l'activite :</label>
    @if ( !empty ( $event->filePhoto5) ) 
    <img style="height:100px;width:100px;"src="{{asset('storage/' .$event->filePhoto5 ) }}" class="img-thumbnail" style="width:400px;height:300px">
    <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('events/'.$event->filePhoto5.'/'.$event->id.'/5')}}">Supprimer</a></td>
    
    @endif
        <input type="file" class="form-control-file" name="photo5" value="{{ url('storage/' . $event->filePhoto5)}} " >
    <label >Photo 6 de l'activite :</label>
    @if ( !empty ( $event->filePhoto6) ) 
    <img style="height:100px;width:100px;"src="{{asset('storage/' .$event->filePhoto6 ) }}" class="img-thumbnail" style="width:400px;height:300px">
    <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('events/'.$event->filePhoto6.'/'.$event->id.'/6')}}">Supprimer</a></td>

    @endif
        <input type="file" class="form-control-file" name="photo6" value="{{ url('storage/' . $event->filePhoto6)}} " >
    
    </div>
    <div class="form-group col-md-6">
    <label >Video 1 de  l'activite :</label>
    @if ( !empty ( $event->fileVideo1) ) 
        <video width="100px" height="100px" controls>
            <source src="{{asset('storage/' .$event->fileVideo1) }}" type="video/mp4" />
        </video>
        <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('events/'.$event->fileVideo1.'/'.$event->id.'/v1')}}">Supprimer</a></td>

 @endif
    <input type="file" class="form-control-file" name="video1" value="{{ url('storage/' . $event->fileVideo1)}} " >
    <label >Video 2 de  l'activite :</label>
    @if ( !empty ( $event->fileVideo2) ) 
        <video width="100px" height="100px" controls>
            <source src="{{asset('storage/' .$event->fileVideo2) }}" type="video/mp4" />
        </video>
        <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('events/'.$event->fileVideo2.'/'.$event->id.'/v2')}}">Supprimer</a></td>

 @endif
    <input type="file" class="form-control-file" name="video2" value="{{ url('storage/' . $event->fileVideo2)}} " >
    <label >Video 3 de  l'activite :</label>
    @if ( !empty ( $event->fileVideo3) ) 
        <video width="100px" height="100px" controls>
            <source src="{{asset('storage/' .$event->fileVideo3) }}" type="video/mp4" />
        </video>
        <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('events/'.$event->fileVideo3.'/'.$event->id.'/v3')}}">Supprimer</a></td>

 @endif
    <input type="file" class="form-control-file" name="video3" value="{{ url('storage/' . $event->fileVideo3)}} " >
    
    </div>
  </div>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>Il faut saisir un fichier</li>
            @endforeach
        </ul>
    </div>
@endif
  <button type="submit" class="btn btn-primary">Modifier</button>
  @csrf
</form>
</div>
@endsection
