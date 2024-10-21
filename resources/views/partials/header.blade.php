@php
    $links = [
        [
            'url' => '#',
            'label' => 'Characters',
            'active' => false,
        ],
        [
            'url' => '#',
            'label' => 'Comics',
            'active' => true,
        ],
        [
            'url' => '#',
            'label' => 'Movies',
            'active' => false,
        ],
        [
            'url' => '#',
            'label' => 'tv',
            'active' => false,
        ],
        [
            'url' => '#',
            'label' => 'Games',
            'active' => false,
        ],
        [
            'url' => '#',
            'label' => 'Collectibles',
            'active' => false,
        ],
        [
            'url' => '#',
            'label' => 'Videos',
            'active' => false,
        ],
        [
            'url' => '#',
            'label' => 'Fans',
            'active' => false,
        ],
        [
            'url' => '#',
            'label' => 'News',
            'active' => false,
        ],
        [
            'url' => '#',
            'label' => 'Shop',
            'active' => false,
        ],
    ];
@endphp

<header>
    <nav class="d-flex justify-content-between">
        <div>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC LOGO">
        </div>
        <ul class="d-flex">
            @foreach ($links as $link)
                <li>
                    @if ($link['active'])
                        <a class="active" href="{{ $link['url'] }}">
                            {{ $link['label'] }}
                        </a>
                    @else
                        <a  href="{{ $link['url'] }}">
                            {{ $link['label'] }}
                        </a>
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>
</header>
