@foreach($sections as $section)
    <a href="{{ $section['url'] }}"
       class="flex flex-row section-link body align-v-center ph-3 no-decoration bb-light-1
              {{ !empty($section['active']) && $section['active'] !== false ?
              'bg-' . $brand . ' text-white active' :
              'bg-white text-black' }}">
        <i class="{{ $section['icon'] }} mr-1"></i> {{ $section['title'] }}
    </a>
@endforeach