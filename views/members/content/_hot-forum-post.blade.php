<div class="flex flex-column xs-12 md-6 pa">
    <div class="flex flex-row">
        <div class="flex flex-column avatar-col">
            <img src="{{ $avatar }}" class="rounded">
        </div>
        <div class="flex flex-column grow ph">
            <h5 class="tiny font-bold text-truncate">
                {{ $title }}
            </h5>
            <h6 class="x-tiny text-light uppercase font-italic mb-1">
                Posted <strong>{{ $date }}</strong> by <strong>{{ $author }}</strong>
            </h6>
            <p class="x-tiny">
                {{ $post }}...
                <a href="{{ $url }}" class="font-bold text-black ml-1">See Post &raquo;</a>
            </p>
        </div>
    </div>
</div>