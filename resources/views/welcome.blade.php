@extends('layouts.app')

@section('content')
    <div class="container text-center" id="error">

        <svg height="100" width="100">
            <circle cx="50" cy="50" r="31" stroke="#FFAA00" stroke-width="9.5" fill="none" />
            <circle cx="50" cy="50" r="6" stroke="#FFAA00" stroke-width="1" fill="#FFAA00" />
            <line x1="50" y1="50" x2="35" y2="50" style="stroke:#679b08;stroke-width:6" />
            <line x1="65" y1="35" x2="50" y2="50" style="stroke:#679b08;stroke-width:6" />
            <path d="M59 65 L83 65 L75 87 Z" fill="#FFAA00" />
            <rect width="20" height="9" x="70" y="56" style="fill:#eee;stroke-width:0;" />
        </svg>
        <div class="row">
            <div class="col-md-12">
                <div class="main-icon text-success"><span class="uxicon uxicon-clock-refresh"></span></div>
                <h1>Future home of kenyan comedy.</h1>
                <p class="lead">If you're the <strong>site owner</strong>, <a href="/cpanel">log in</a> to launch this site</p>
                <p class="lead">If you are a <strong>visitor</strong>, check back soon.</p>
            </div>
        </div>

    </div>
@endsection
