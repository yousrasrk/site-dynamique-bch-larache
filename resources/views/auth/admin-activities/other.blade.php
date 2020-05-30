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
</style>
<body >
<div class="center">
<p style="text-align:right;">
<a href="/activities" >retour </a></p>
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
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
<div style="font-size:20px;">
<p ><strong  style="color:#2E8B57;">titre:</strong>&nbsp;&nbsp;{{ $activitie->Titre}}</p><br>
<p><strong style="color:#2E8B57;">contenu:</strong>&nbsp;&nbsp;{{ $activitie->contenu }}</p><br>
<p><strong style="color:#2E8B57;">date:</strong>&nbsp;&nbsp;{{ $activitie->Date}}</p><br>
<p><strong style="color:#2E8B57;">lien youtube1:</strong>&nbsp;&nbsp;{{ $activitie->fileYoutube1}}</p><br>
<p><strong style="color:#2E8B57;">lien youtube2:</strong>&nbsp;&nbsp;{{ $activitie->fileYoutube2}}</p>
   </div>  
<table class="table table-sm">
  <thead class="head1">
    <tr>
      
      <th scope="col"  colspan="3">media : </th>
     

    </tr>
   
  </thead>
  <tbody>
 
    <tr>
      @if ( !empty ( $activitie->filePhoto1 ) ) 
        <td><img style="height:100px;width:100px;"src="{{asset('storage/' .$activitie->filePhoto1 ) }}" class="img-thumbnail" style="width:400px;height:300px"></td>
      
      @else
        <td></td>
      
      @endif
      @if ( !empty ( $activitie->filePhoto2) ) 
      <td><img style="height:100px;width:100px;"src="{{asset('storage/' .$activitie->filePhoto2) }}" class="img-thumbnail" style="width:400px;height:300px"></td>

      @else
        <td></td>
      
      @endif
      @if ( !empty ( $activitie->filePhoto3) ) 
        <td><iframe width="200px" height="100px" src="{{asset('storage/' .$activitie->filePhoto3) }}" ></iframe>  </td>   

      @else
        <td></td>
      
      @endif
      
      
    </tr>
    <tr>
    @if ( !empty ( $activitie->filePhoto4) ) 
        <td><img style="height:100px;width:100px;"src="{{asset('storage/' .$activitie->filePhoto4) }}" class="img-thumbnail" style="width:400px;height:300px"></td>
      
      @else
        <td></td>
      
      @endif
      @if ( !empty ( $activitie->filePhoto5) ) 
        <td><iframe width="200px" height="100px" src="{{asset('storage/' .$activitie->filePhoto5) }}" ></iframe>  </td>   
      
      @else
        <td></td>
      
      @endif
      @if ( !empty ( $activitie->filePhoto6) ) 
        <td><iframe width="200px" height="100px" src="{{asset('storage/' .$activitie->filePhoto6) }}" ></iframe>  </td>   
     
      @else
        <td></td>
      
      @endif
    </tr>

    <tr>
    @if ( !empty ( $activitie->fileVideo1) ) 
    <td><iframe width="200px" height="100px" src="{{asset('storage/' .$activitie->fileVideo1) }}" ></iframe>  </td> 
      @else
        <td></td>
      
      @endif
      @if ( !empty ( $activitie->fileVideo2) ) 
        <td><iframe width="200px" height="100px" src="{{asset('storage/' .$activitie->fileVideo2) }}" ></iframe>  </td>   
      @else
        <td></td>
      @endif
      @if ( !empty ( $activitie->fileVideo3) ) 
        <td><iframe width="200px" height="100px" src="{{asset('storage/' .$activitie->fileVideo3) }}" ></iframe>  </td>  
       
      @else
        <td></td>
      
      @endif
    </tr>
   
  </tbody>
</table>






</div>

@endsection
