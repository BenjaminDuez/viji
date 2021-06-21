@extends('layout')

@section('title', 'Vérification')
@section('header')
    <x-header title="Scanner" back_url="{{ route('home') }}" />
@endsection

@section('main')
    <div id="overlay-scan">
        <h1>Scannez de manière lisible l'écriteau ou l'étiquette du produit</h1>
        <div id="cadre">
            <img id="screenshot">
            <div id="photo-button">
                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 2L8 0H12L14 2H20V18H0V2H6ZM8.41421 1L6.41421 3H1V17H19V3H13.5858L11.5858 1H8.41421ZM14 10C14 7.79086 12.2091 6 10 6C7.79086 6 6 7.79086 6 10C6 12.2091 7.79086 14 10 14C12.2091 14 14 12.2091 14 10ZM15 10C15 12.7614 12.7614 15 10 15C7.23858 15 5 12.7614 5 10C5 7.23858 7.23858 5 10 5C12.7614 5 15 7.23858 15 10Z" fill="#072B4F"/>
                </svg>
            </div>
        </div>
    </div>
    <video id="stream" autoplay></video>
@endsection

@section('scripts')
    <script>
         function handleError(error) {
             console.error("Error: ", error);
         }

        const screenshotButton = document.querySelector("#photo-button");
        const img = document.querySelector("#screenshot");
        const video = document.querySelector("#stream");
        const canvas = document.createElement("canvas");

        (function () {
            navigator.mediaDevices
                .getUserMedia({ audio: false, video: { facingMode:  "environment" } })
                .then(handleSuccess)
                .catch(handleError);
        })();

        screenshotButton.onclick = video.onclick = function () {
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            canvas.getContext("2d").drawImage(video, 0, 0);
            // Other browsers will fall back to image/png
            img.src = canvas.toDataURL("image/webp");
        };

        function handleSuccess(stream) {
            video.srcObject = stream;
        }
    </script>
@endsection

