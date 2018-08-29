<a href="{{ $url }}" class="page-link flex flex-row body text-black align-v-center pa-1 bb-grey-2-1 {{ $greyed ? 'bg-grey-1' : '' }}">
    @if(!empty($icon))<i class="{{ $icon }} mr-1 text-{{ $greyed ? 'black' : $themeColor }}"></i>@endif {{ $page }}
</a>