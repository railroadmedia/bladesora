<div class="container mt-3">
    <div class="flex flex-row flex-wrap shadow bg-{{ $brand }} corners-3 pa">
        <div class="flex flex-column xs-12 sm-9 lg-10">
            <div class="flex flex-row trophy-progress-bar mr-2">
                <div class="flex flex-column trophy-progress-cutoff bg-{{ $brand }} inverted">
                    <div class="trophy-progress bg-white" style="width:{{ $progress }}%;"></div>
                </div>
                <div class="flex flex-column align-center trophy title">
                    <i class="fas fa-trophy text-{{ $brand }} pr-1"></i>
                </div>
            </div>
        </div>
        <div class="flex flex-column xs-12 sm-3 lg-2">
            <a href="{{ $nextLessonUrl }}" class="btn bg-white text-{{ $brand }} short">
                @if($progress > 0)
                    Next Lesson &raquo;
                @else
                    Start {{ ucwords($contentType) }}
                @endif
            </a>
        </div>
    </div>
</div>