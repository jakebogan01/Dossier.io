@component('mail::message')
    <h2>
        You have received a message from your MyDossier portfolio.
    </h2>
    <p>
        <span class="font-bold">From: {{ $full_name }}</span>
        <br><br>
        {{ $message }}
    </p>
    <p>
        <span class="font-bold">Contact info:</span>
        Phone: {{ $phone }}<br>
        Email: {{ $email }}
    </p>
@endcomponent
