<x-mail::message>
Nouvelle Soumission du Formulaire de Contact

Bonjour ,

Vous avez reçu une nouvelle soumission du formulaire de contact. Voici les détails :


<h3>Nom: {{$contactdata['nom']}}</h3>
<h3>Prénom: {{$contactdata['prenom']}}</h3>
<h3>Email: {{$contactdata['email']}}</h3>
<h3>Objet: {{$contactdata['objet']}}</h3>
<h3>Message: {{$contactdata['message']}}</h3>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
