@component('mail::message')
# Mail ontvangen

Iemand heeft het online formulier ingevuld. {{ "\n" }}
Hieronder volgen de details:

* Soort: {{ $notification->sort }}
* Naam: {{ $notification->name }}
* Email: {{ $notification->email }}
* Telefoonnummer: {{ $notification->phone ?? 'Geen telefoonnummer'}}
* Bericht: {!! $notification->message !!}

@component('mail::footer')
{{ config('app.name') }}
@endcomponent
@endcomponent