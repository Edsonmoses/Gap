@foreach ($homes as $homepage )
        @if ($homepage->name == 'Home Search')
        @livewire('pages.home-search-component')
        @endif
        @if ($homepage->name == 'Home Map')
        @livewire('pages.home-map-component')
        @endif
        @if ($homepage->name == 'Home Property')
        @livewire('pages.home-property-component')
        @endif
        @if ($homepage->name == 'Home Splash')
        @livewire('pages.home-splash-component')
        @endif
    @endforeach
