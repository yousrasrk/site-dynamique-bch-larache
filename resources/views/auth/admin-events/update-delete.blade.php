
@extends('layouts.app')

@section('content')
<style>

.center {
  margin: auto;
  width: 90%;
  padding: 10px;
  
}
table, td, th
{
  text-align:center;
  padding:30px;

}
tr{
  border: 1px solid black;
}
.center2 {
  margin-left:40%;
  width: 90%;
  padding: 10px;
  background-color:#8B0000; 
  color:#fff;
  font-size:20px;
  padding: 15px 32px;

font-weight:  10px;
}
.head1{
 background-color:#191970;
  color:#fff;
  padding:40px;
  font-size:20px;
}
a:link {
  text-decoration: none;
}
a:hover{
  color:white;
}
.aa a:hover{
  color:white;
  background-color:#191970;


}
.supprimer{
  
  background-color: #B22222;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
 
 
}
.modifier{

 
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
 
}
h1{
 margin-left:400px;
}
</style>
<body >
<h1 >
<div class="center">
<div class="aa">
  les evenements  <a  class="center2"href="/add-events">Ajouter un event</a>
    </div>
</div></h1>


<div class="center">

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<table class="table table-sm">
  <thead class="head1">
    <tr>
      <th scope="col">#</th>
      <th scope="col">titre</th>
      <th scope="col">Contenu</th>
      <th scope="col">tous les informations</th>
      <th scope="col">supprimer</th>
      <th scope="col">modifier</th>
    </tr>
  </thead>
  <tbody>
  @foreach($events as $event)
    <tr>
      <th scope="row">{{ $event->id}}</th>
  <!--    @if ( !empty ( $event->filePhoto) ) 
        <td><img style="height:100px;width:100px;"src="{{asset('storage/' .$event->filePhoto ) }}" class="img-thumbnail" style="width:400px;height:300px"></td>
      
      @else
        <td></td>
      
      @endif
      @if ( !empty ( $event->fileVideo) ) 
        <!--<td><iframe width="200px" height="100px" src="{{asset('storage/' .$event->fileVideo) }}" ></iframe>  </td>   -->
      <!--  <td><video width="100px" height="100px" controls>
            <source src="{{asset('storage/' .$event->fileVideo) }}" type="video/mp4" />
        </video></td>
      @else
        <td></td>
      
      @endif-->
      <td>{{ $event->Titre}}</td>
      <td>{{ $event->contenu}}</td>
      <td><a class="modifier"href="{{url('events/'.$event->id.'/autre')}}">voir plus</a></td>
      <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{url('events/'.$event->id.'/delete')}}">Supprimer</a></td>
      <td><a  class="modifier"href="{{url('events/'.$event->id.'/edit')}}">Modifier</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>


</body>
@endsection
</html>
