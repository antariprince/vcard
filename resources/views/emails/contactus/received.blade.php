@component('mail::message')
# Hi Admin,

Contactus message received.

Name: {{ $data->contactName }}<br>
Email: {{ $data->contactEmail }}<br>
Subject: {{ $data->contactSubject }}<br>
Message: {{ $data->contactMessage }}<br>
<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
