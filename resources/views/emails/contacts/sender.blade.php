@component('mail::message')
# Hi {{ $data->contactName }}

I have received your message and I will get back to you as soon as possible.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
