@unless ($breadcrumbs->isEmpty())
    <ol class="bg-yellow-200 breadcrumb text-black flex text-lg">
        @foreach ($breadcrumbs as $breadcrumb)

            @if (!is_null($breadcrumb->url) && !$loop->last)
                <li class="breadcrumb-item text-blue-800 underline"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item text-blue-500"> / {{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    </ol>
@endunless