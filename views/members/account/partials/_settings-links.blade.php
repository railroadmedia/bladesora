<div class="flex flex-row pv flex-wrap account-links">
    @foreach($sections as $section)
        <div class="account-link flex flex-column xs-6 sm-4 md-3 pa {{ $brand }}">
            <a href="{{ $section['url'] }}"
               class="flex-center ba-black-2 corners-3 heading no-decoration text-black pv-3 ph-1">
                <i class="{{ $section['icon'] }} mb-1"></i>
                <p class="subtitle text-center">{{ $section['title'] }}</p>
            </a>
        </div>
    @endforeach
</div>