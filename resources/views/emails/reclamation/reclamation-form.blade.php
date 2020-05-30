@component('mail::message')

# Reclamation
<strong>: الموضوع الرئيسي</strong> {{ $data['sujet-prin'] }}<br>
<strong>: الموضوع الفرعي</strong> {{ $data['sujet-second'] }}<br>
<strong> Commune : </strong> {{ $data['commune'] }}<br>
<strong>Reclamation :</strong> {{ $data['message'] }}<br>
<strong> piece joint : </strong> {{ $data['file'] }}<br>
<strong>Pour le contacter :</strong> {{ $data['contacter'] }}

@endcomponent