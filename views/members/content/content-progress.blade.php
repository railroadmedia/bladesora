<div class="content-progress flex flex-row flex-wrap bg-{{ $themeColor }} corners-3 pa {{ !empty($compact) && $compact === true ? 'compact' : '' }}">
    <div class="flex flex-column {{ !empty($compact) && $compact === true ? '' : 'xs-12 sm-9 lg-10' }}">
        <div class="flex flex-row trophy-progress-bar mr-2 {{ $progress === 100 ? 'complete' : '' }}">
            <div class="flex flex-column trophy-progress-cutoff bg-{{ $themeColor }} inverted">
                <div class="trophy-progress bg-white" style="width:{{ $progress }}%;"></div>
            </div>
            <div class="flex flex-column align-center trophy title">
                <i class="fas fa-trophy text-{{ $themeColor }} pr-1"></i>
            </div>
        </div>
    </div>
    @if(empty($compact))
        <div class="flex flex-column {{ !empty($compact) && $compact === true ? '' : 'xs-12 sm-3 lg-2' }}">
            <a href="{{ $progress === 100 ? $backButton['url'] : $nextLessonUrl }}"
               class="btn bg-white short text-{{ $themeColor }}
               {{ $contentType === 'learning-path' && $progress < 100 ? 'start-learning-path' : '' }}">
                @if($progress > 0 && $progress < 100)
                    Next Lesson &raquo;
                @elseif($progress === 100)
                    {{ $backButton['text'] }}
                @else
                    Start First Lesson
                @endif
            </a>
        </div>
    @endif
</div>

{{--@if($progress === 100)--}}
    {{--<div class="congrats-container flex flex-row bg-white corners-bottom-3 pa bb-recordeo-3 {{ !empty($compact) && $compact === true ? 'compact' : '' }}">--}}
        {{--<div class="flex flex-column flex-auto align-center">--}}
            {{--<div class="square bg-black rounded">--}}
                {{--<div class="pa-1 heading text-white">--}}
                    {{--<i class="fas fa-trophy"></i>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="flex flex-column align-v-center ph">--}}
            {{--<h4 class="subtitle"><span class="font-bold">Course Complete!</span> Congratulations you've finished this Course!</h4>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endif--}}