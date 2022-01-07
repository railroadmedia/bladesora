<div class="method-progress flex flex-row flex-wrap ba-grey-1-5 p-sm-up bg-{{$brand}} align-center">
    <div class="flex flex-column xs-12 sm-7 ph-3 align-center">
        <img
            src="{{$methodLogo}}"
            alt="The {{$brand}} Method Logo"
        >
    </div>

    <div class="flex flex-column xs-12 sm-5 ph-3 align-center">
        <h1 class="text-white large-display uppercase">Level {{ $level }}.{{ $lesson }}</h1>

        <div class="progress-bar bg-white ba-white-3 relative">
            <div class="progress bg-{{$brand}}" style="width:{{ $progress }}%">
                <span
                    class="amount text-white tiny font-bold
                        {{ $progress < 20 ? ('text-'.$brand. ' right') : 'text-white' }}"
                >
                    {{ $progress }}%
                </span>
            </div>
        </div>
    </div>
</div>