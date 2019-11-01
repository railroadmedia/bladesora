<div class="flex flex-column xs-12 sm-6 md-4 pa-3 raised-hover corners-3">
    <a href="{{ $url }}" class="flex flex-row no-decoration">
        <div class="flex flex-column avatar-col text-black">
            <img src="{{ $avatar }}" class="rounded mb-1">

            <p class="title text-center font-compressed">{{ parse_xp_value($xp) }}</p>

            <p
               class="tiny text-center font-compressed"
               style="margin-top:-3px;"
            >
                {{ $rank }}
            </p>
        </div>
        <div class="flex flex-column grow ph">
            <h5 class="text-black tiny font-bold text-truncate">
{{--                <span class="x-tiny corners-3 uppercase text-white font-bold bg-{{ $themeColor ?? 'drumeo' }}" style="padding:2px 5px;margin-right:5px;">New Reply</span>--}}
                {!! $title !!}
            </h5>
            <h6 class="x-tiny text-grey-3 uppercase text-black mb-1">
                Posted
                <strong class="text-{{ $themeColor ?? 'drumeo' }}">
                    {{ $date }}
                </strong>
                by
                <strong class="text-{{ $themeColor ?? 'drumeo' }}">
                    {{ $author }}
                </strong>
            </h6>
            <p class="x-tiny text-black break-words">
                {!! str_replace('&nbsp;', '', $post) !!}...
                <span class="font-bold text-black ml-1 text-underline">See Post &raquo;</span>
            </p>
        </div>
    </a>
</div>