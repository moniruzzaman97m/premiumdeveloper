@component('mail::message')

<h3>New Message : {{$contact_form_data['name']}}</h3>
<p>Name: {{ $contact_form_data['email'] }}</p>
<p>Message: {{ $contact_form_data['message'] }}</p>

@endcomponent
