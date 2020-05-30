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
<div class="center">
<p style="text-align:right;">
<a href="/dece" >Annuler  </a></p>
  
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>Ce champs ne doit pas etre vide</li>
               
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ url('deces/'.$dece->id) }}" method="POST" >
            {{ method_field('PUT') }}  
            <label >Contenu des Condoléances :</label>
           
            <textarea  class="form-control w-100" rows="10" type="text" name="contenu" style="text-align:right;direction:rtl">                                                                      
            {{ $dece->contenu}}
            </textarea>
        <div class="py-3">
        <button type="submit" class="btn btn-primary ">Modifier</button>
        </div>
        @csrf
</form>
      </div>

</div>
@endsection