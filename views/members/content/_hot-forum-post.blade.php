<div class="flex flex-column xs-12 md-6 pa">
    <a href="{{ $url }}" class="flex flex-row no-decoration">
        <div class="flex flex-column avatar-col">
            <img src="{{ $avatar }}" class="rounded">
        </div>
        <div class="flex flex-column grow ph">
            <h5 class="text-black tiny font-bold text-truncate">
                <span class="x-tiny corners-3 uppercase text-white font-bold bg-{{ $themeColor ?? 'drumeo' }}" style="padding:2px 5px;margin-right:5px;">New Reply</span>
                {!! $title !!}
            </h5>
            <h6 class="x-tiny text-grey-3 uppercase text-black font-italic mb-1">
                Posted <strong>{{ $date }}</strong> by <strong>{{ $author }}</strong>
            </h6>
            <p class="x-tiny text-black">
                {!! $post !!}...
                <span class="font-bold text-black ml-1 text-underline">See Post &raquo;</span>
            </p>
        </div>
    </a>
</div>