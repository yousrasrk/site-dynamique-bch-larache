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
      <form action="/deces" method="POST" >
          
            <label >Contenu des Condoléances :</label>
            <textarea  class="form-control w-100" rows="10" type="text" name="contenu" style="text-align:right;direction:rtl">                                                                      
رئيس مجلس جماعة العرائش
إلى 
السادة : أسرة الفقيد(ة)
الموضوع : تعزية في وفاة المرحوم(ة) ..............................
السلام عليكم ورحمة الله تعالى وبركاته
         وبعد، لقد تلقـــــــى المكتب الجماعي لحفــــظ الصحــــة بهـــذه المـــــدينــــة، يومــــــــه 
......................نبا وفاة المغفور له /لها ..........................................................تغمده/ها، الله بواسع الرحمة و المغفرة.
وبهذا المصاب الجلل، نتقدم بصفتنا رئيس المجلس الجماعي، بأحر التعازي وعظيم المواساة لأسرة الفقيد/(ة) رحمه/ها الله، راجيين من الله العلي القدير   أن يلهمكم الصبر والسلوان        ( وإنا لله وإنا إليه راجعون   .   صدق الله العظيم )
الرئيس

   </textarea>
        <div class="py-3">
        <button type="submit" class="btn btn-primary ">Ajouter</button>
        </div>
        @csrf
      </form>
      </div>

</div>
@endsection
