@component('mail::message')
# Nouvelle Inscription Soumise

Une nouvelle inscription a été soumise sur votre site web.

## Informations de l’étudiant
**Nom :** {{ $enrollment->name }}  
**Email :** {{ $enrollment->email }}  
**Téléphone :** {{ $enrollment->mobile }}  
**Niveau d’arabe :** {{ $enrollment->arabic_level }}

## Détails du cours
**Forfait/Cours :** {{ $enrollment->package }}  
**Détails du cours :** {{ $enrollment->course_details ?: 'Aucun détail supplémentaire fourni' }}

## Préférences d’horaire
**Jours préférés :** {{ $enrollment->preferred_days ? implode(', ', $enrollment->preferred_days) : 'Non spécifié' }}  
**Heures préférées :** {{ $enrollment->preferred_times ? implode(', ', $enrollment->preferred_times) : 'Non spécifié' }}

## Statut de l’inscription
**Statut :** {{ ucfirst($enrollment->status) }}  
**Soumis le :** {{ $enrollment->created_at->format('j F Y \à H:i') }}

@component('mail::button', ['url' => route('admin.enrollments.show', $enrollment->id)])
Voir les détails de l’inscription
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
