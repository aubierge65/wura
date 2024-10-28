@component('mail::message')
# Bonjour {{ $candidateName }},

{{ $body }}

**Détails du poste :**
- **Titre :** {{ $job->title }}
- **Entreprise :** {{ $job->company_name }}
- **Localisation :** {{ $job->location }}
- **Type :** {{ $job->type }}
- **Description :** {{ $job->description }}

Pour plus de détails, veuillez [cliquer ici]({{ route('job.show', $job->id) }}).

Cordialement,<br>
L'équipe de {{ config('app.name') }}
@endcomponent
