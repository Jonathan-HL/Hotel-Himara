@component('mail::message')

<p>Vous avez réservé une chambre.</p>
<p>Voici les détails.</p>

Votre nom : {{$reservation->nom}}
Votre email : {{$reservation->email}}
Nombre d'adultes : {{$reservation->adult}}
Nombre d'enfants : {{$reservation->enfant}}
@if($reservation->category)
Chambre : {{$reservation->category->nom}}
@endif
Date: {{$reservation->debut}} - {{$reservation->fin}}
@if($reservation->country)
Location: {{$reservation->country}}
@endif
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
