@component('mail::message')
# Bonjour {{ $candidateName }},

{{ $body }}

<!-- **Détails du poste :**
- **Titre :** {{ $job->title }}
- **Entreprise :** {{ $job->company_name }}
- **Localisation :** {{ $job->location }}
- **Type :** {{ $job->type }}
- **Description :** {{ $job->description }} -->

Pour plus de détails, rendez-vous sur wura.africa.

Cordialement,<br>
L'équipe de {{ config('app.name') }}
@endcomponent
