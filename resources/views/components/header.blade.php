@props([
    'title',
    'back_url' => URL::previous()
])

<header>
    <nav>
        <a href="{{ $back_url  }}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.5 12L16.7807 22L17.4975 21.3027L7.93365 12L17.4975 2.69725L16.7807 2L6.5 12Z" fill="#072B4F"/>
            </svg>
        </a>
        <p>{{ $title }}</p>
        <a href="{{ route('home') }}">
            <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.0001 0.359619L0.687744 8.6095L1.31244 9.39037L3.00009 8.04024V18.9999H9.00009V12.9999H13.0001V18.9999H19.0001V8.04024L20.6877 9.39037L21.3124 8.6095L11.0001 0.359619ZM18.0001 7.24024V17.9999H14.0001V11.9999H8.00009V17.9999H4.00009V7.24024L11.0001 1.64024L18.0001 7.24024Z" fill="#072B4F"/>
            </svg>
        </a>
    </nav>
</header>
