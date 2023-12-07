<x-mail::message>
    # Hello {{ $name }},

    Thank you for your message!
    We have received your request regarding <b>{{ $subj }}"</b> and we will get back to you as soon as possible.

    ## Details of your message:

    <b>Name:</b> {{ $name }}
    <b>Email</b> {{ $email }}
    <b>Subject</b> {{ $subj }}

    <b>Message</b>
    {{ $message }}

    Thank you for your interest, and we will contact you as soon as possible.


    <x-mail::button :url="'https://' . config('app.url') . '/'">
        Visit us
    </x-mail::button>

    Best regards,
    {{ config('app.name') }}
</x-mail::message>
