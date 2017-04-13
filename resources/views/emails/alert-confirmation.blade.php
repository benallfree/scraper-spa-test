@component('mail::message')

<h2>Hello {{ $email }},</h2>
<p>Thank you for signing up. In a short while, you wil receive your first alert with loan choices. Sit tight.</p>
<p>The Loan Alert Team</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent