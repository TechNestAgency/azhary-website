@component('mail::message')
# New Enrollment Submission

A new enrollment has been submitted on your website.

## Student Information
**Name:** {{ $enrollment->name }}  
**Email:** {{ $enrollment->email }}  
**Phone:** {{ $enrollment->mobile }}  
**Arabic Level:** {{ $enrollment->arabic_level }}

## Course Details
**Package/Course:** {{ $enrollment->package }}  
**Course Details:** {{ $enrollment->course_details ?: 'No additional details provided' }}

## Preferred Schedule
**Preferred Days:** {{ $enrollment->preferred_days ? implode(', ', $enrollment->preferred_days) : 'Not specified' }}  
**Preferred Times:** {{ $enrollment->preferred_times ? implode(', ', $enrollment->preferred_times) : 'Not specified' }}

## Enrollment Status
**Status:** {{ ucfirst($enrollment->status) }}  
**Submitted:** {{ $enrollment->created_at->format('F j, Y \a\t g:i A') }}

@component('mail::button', ['url' => route('admin.enrollments.show', $enrollment->id)])
View Enrollment Details
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
