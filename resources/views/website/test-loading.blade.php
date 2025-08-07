@extends('website.layouts.app')

@section('title', 'Loading Test - Azhary Academy')
@section('meta_description', 'Test page to verify loading functionality')
@section('meta_keywords', 'test, loading, verification')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4">Loading Test Page</h1>
            <div class="alert alert-success">
                <h4>✅ Content Visibility Test</h4>
                <p>If you can see this content, the loading spinner issue has been resolved!</p>
                <ul>
                    <li>✅ Page content is visible</li>
                    <li>✅ No infinite loading spinner</li>
                    <li>✅ Navigation links work properly</li>
                    <li>✅ JavaScript is loading correctly</li>
                </ul>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Navigation Test</h5>
                            <p class="card-text">Click these links to test navigation:</p>
                            <a href="{{ route('website.index') }}" class="btn btn-primary">Home Page</a>
                            <a href="{{ route('website.teachers.index') }}" class="btn btn-secondary">Teachers</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">JavaScript Test</h5>
                            <p class="card-text">Click this button to test JavaScript functionality:</p>
                            <button class="btn btn-success" onclick="testJavaScript()">Test JavaScript</button>
                            <div id="js-test-result" class="mt-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-4">
                <h4>Page Load Information:</h4>
                <div id="page-info">
                    <p><strong>DOM Ready:</strong> <span id="dom-ready">Loading...</span></p>
                    <p><strong>Page Load:</strong> <span id="page-load">Loading...</span></p>
                    <p><strong>Content Visibility:</strong> <span id="content-visibility">Checking...</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function testJavaScript() {
    const result = document.getElementById('js-test-result');
    result.innerHTML = '<div class="alert alert-info">✅ JavaScript is working correctly!</div>';
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('dom-ready').textContent = '✅ Ready';
    
    // Check content visibility
    const body = document.body;
    const main = document.querySelector('main');
    
    const bodyVisible = body.style.display !== 'none' && 
                       body.style.visibility !== 'hidden' && 
                       body.style.opacity !== '0';
    
    const mainVisible = main && main.style.display !== 'none' && 
                       main.style.visibility !== 'hidden' && 
                       main.style.opacity !== '0';
    
    document.getElementById('content-visibility').textContent = 
        bodyVisible && mainVisible ? '✅ Visible' : '❌ Hidden';
});

window.addEventListener('load', function() {
    document.getElementById('page-load').textContent = '✅ Loaded';
});
</script>
@endsection 