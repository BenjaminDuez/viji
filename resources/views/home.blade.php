@extends('layout')

@section('title', 'Accueil')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('main')

    <h1>Viji</h1>
    <h2>Bienvenue</h2>

    <section id="first-section">
        <h3>Je m'informe sur une espèce marine</h3>
        <a class="button button--white" href="{{ route('check') }}">
            <img src="{{ asset('assets/img/check.png') }}" alt="icone de vérification" width="16" height="16">
            Vérifier
        </a>
    </section>

    <section id="scd-section">
        <h3>Je signale une pratique illégale</h3>
        <a class="button button--orange" href="">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.49998 9.64028C8.97198 9.64028 9.32794 9.9613 9.32794 10.387C9.32794 10.8128 8.97198 11.1338 8.49998 11.1338C8.02022 11.1338 7.67202 10.8197 7.67202 10.387C7.67202 9.94735 8.01249 9.64028 8.49998 9.64028Z" fill="white"/>
                <path d="M7.92334 8.69005L7.68021 4.99833C7.65332 4.58975 8.02817 4.24561 8.50013 4.24561C8.9721 4.24561 9.34699 4.58975 9.32006 4.99833L9.07697 8.69005C9.0595 8.95522 8.80643 9.16247 8.50013 9.16247C8.19388 9.1625 7.94081 8.95522 7.92334 8.69005Z" fill="white"/>
                <path d="M9.11368 15.8702C14.4868 13.7009 16.6239 8.55518 16.4945 3.72595C16.4878 3.47638 16.2857 3.2625 16.0034 3.20636C14.488 2.90468 13.3008 1.9639 13.3124 0.548479C13.3139 0.24988 13.0252 0 12.6787 0H4.31879C3.97237 0 3.6837 0.249778 3.68509 0.548342C3.71863 1.87997 2.53289 2.98783 1.03404 3.19959C0.731936 3.24226 0.508451 3.46496 0.502946 3.72872C0.403225 8.4958 2.83443 13.4582 7.85372 15.8249C8.06501 15.9245 8.45071 16.1378 9.11368 15.8702ZM8.5986 14.8721C8.55479 14.8888 8.50501 14.8869 8.46196 14.8666C6.88509 14.123 1.82148 11.1837 1.7673 4.17494C3.40576 3.76749 4.68616 2.56191 4.91558 1.09238H12.0819C12.3115 2.56301 13.5935 3.76913 15.2335 4.1758C15.2424 8.3667 13.3545 13.0489 8.5986 14.8721C8.55479 14.8889 9.26798 14.6155 8.5986 14.8721Z" fill="white"/>
            </svg>
            Nous avertir
        </a>
    </section>
@endsection

@section('footer')
    <footer>
        <img width="69" height="50" src="{{ asset('assets/img/logo-sea-sheperd.png') }}" alt="Logo Sea Sheperd">
    </footer>
@endsection
