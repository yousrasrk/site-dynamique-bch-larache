@extends('layouts.app')

@section('content')
<style>
center {
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
  margin-left:45%;
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
 margin-left:250px;
 margin-top:20px;
 margin-bottom:20px;
}

</style>

<body>
<h1 >
<div class="center">
<div class="aa">

Les Condoléances<a class="center2"href="/add-deces">Ajouter des Condoléances</a>
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
      
      <th scope="col">Contenu</th>
      <th scope="col">supprimer</th>
      <th scope="col">modifier</th>
    </tr>
  </thead>
  <tbody>
  @foreach($deces as $dece)
    <tr>
      <th scope="row">{{ $dece->id}}</th>
    
      <td>{{ $dece->contenu}}</td>
      <td><a class="supprimer" onclick="return confirm('voulez-vous vraiment supprimer?')"href="{{ url('deces/'.$dece->id.'/delete')}}">Supprimer</a></td>
      <td><a class="modifier"href="{{url('deces/'.$dece->id.'/edit')}}">Modifier</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

</body>
@endsection
</html>
