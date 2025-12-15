@extends('layouts.app')

@section('title', 'Cara Mengatasi Error Connection Timeout - PANDU')

@push('styles')
    <style>
        /* Styling khusus konten artikel */
        .article-content h2 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-top: 2rem;
            margin-bottom: 1rem;
            color: #0f172a;
        }

        .article-content h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
            color: #1e293b;
        }

        .article-content p {
            margin-bottom: 1rem;
            line-height: 1.75;
            color: #334155;
        }

        .article-content ul {
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-bottom: 1rem;
            color: #334155;
        }

        .article-content li {
            margin-bottom: 0.5rem;
        }

        .article-content img {
            border-radius: 0.5rem;
            margin: 1.5rem 0;
            border: 1px solid #e2e8f0;
        }

        .article-content pre {
            background: #f1f5f9;
            padding: 1rem;
            border-radius: 0.5rem;
            overflow-x: auto;
            font-family: monospace;
            font-size: 0.9em;
            margin-bottom: 1rem;
        }
    </style>
@endpush

@section('content')

    @include('articles.partials.header')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

            <article class="lg:col-span-8">

                @include('articles.partials.content')

                @include('articles.partials.feedback')

            </article>

            <aside class="lg:col-span-4 space-y-6">
                @include('articles.partials.sidebar')
            </aside>

        </div>
    </div>
@endsection
