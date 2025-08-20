@extends('website.layouts.app')

@section('title', 'Debug - Language Switching Test')
@section('meta_description', 'Debug page for testing language switching functionality')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1>Language Switching Debug</h1>
            
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Current Language Information</h5>
                </div>
                <div class="card-body">
                    <p><strong>Current Locale:</strong> {{ app()->getLocale() }}</p>
                    <p><strong>Session Locale:</strong> {{ session()->get('locale', 'Not set') }}</p>
                    <p><strong>Config Locale:</strong> {{ config('app.locale') }}</p>
                    <p><strong>Fallback Locale:</strong> {{ config('app.fallback_locale') }}</p>
                    <p><strong>Session ID:</strong> {{ session()->getId() }}</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <h5>Language Switcher Test</h5>
                </div>
                <div class="card-body">
                    <p>Click the links below to test language switching:</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('language.switch', 'en') }}" class="btn btn-primary">Switch to English</a>
                        <a href="{{ route('language.switch', 'fr') }}" class="btn btn-primary">Switch to French</a>
                        <a href="{{ route('debug.locale') }}" class="btn btn-info" target="_blank">Debug API</a>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <h5>Translation Test</h5>
                </div>
                <div class="card-body">
                    <p><strong>Home:</strong> {{ __('website.Home') }}</p>
                    <p><strong>About:</strong> {{ __('website.About') }}</p>
                    <p><strong>Contact:</strong> {{ __('website.Contact') }}</p>
                    <p><strong>Enroll Now:</strong> {{ __('website.Enroll Now') }}</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <h5>Header Language Switcher</h5>
                </div>
                <div class="card-body">
                    <p>This is the language switcher from the header:</p>
                    <div class="language-switcher d-flex align-items-center gap-1">
                        <a href="{{ route('language.switch', 'en') }}" class="nav-link p-0" style="color: {{ app()->getLocale() == 'en' ? '#0a2260' : '#0a2260b0' }}; font-weight: {{ app()->getLocale() == 'en' ? 'bold' : 'normal' }};">EN</a>
                        <span style="color: #0a2260; font-weight: bold;">|</span>
                        <a href="{{ route('language.switch', 'fr') }}" class="nav-link p-0" style="color: {{ app()->getLocale() == 'fr' ? '#0a2260' : '#0a2260b0' }}; font-weight: {{ app()->getLocale() == 'fr' ? 'bold' : 'normal' }};">FR</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5>Session Debug</h5>
                </div>
                <div class="card-body">
                    <pre>{{ print_r(session()->all(), true) }}</pre>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 