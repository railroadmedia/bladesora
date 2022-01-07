<section class="flex flex-row tw-mb-6 md:tw-mb-8">
    <div class="flex flex-column grow">

        <div class="flex flex-row align-v-center pv-2">
            <span class="rounded bg-{{$brand}} text-white icon-bg-circle body mr-1">
                <i class="fas fa-signal"></i>
            </span>
            <h2 class="heading capitalize grow">
                <a
                    href="{{ $userDashboardUrl }}"
                    class="text-black font-no-underline"
                >My Stats</a>
            </h2>
            <a href="{{ $userDashboardUrl }}"
                aria-label="See My Dashboard"
                class="text-{{$brand}} tiny no-decoration nowrap raised-hover pa-1 dense font-bold uppercase corners-10">
                Dashboard
            </a>
        </div>

        @component('bladesora::members.components.home._method-progress', [
            "brand" => $brand,
            "progress" => $nextLearningPathProgressPercent,
            "level" => explode('.', $nextLearningPathLevel)[0] ?? "1",
            "lesson" => explode('.', $nextLearningPathLevel)[1] ?? "0",
            "methodLogo" => $methodLogo,
        ])
        @endcomponent

        <div class="flex flex-row flex-wrap mt-1 nmh-1">
            @foreach($userMetrics as $userMetric)
                <a href="{{ $userDashboardUrl }}"
                   class="flex flex-column xs-6 sm-3 no-decoration">
                    @include('bladesora::members.components.user-metric', [
                        "brand" => $brand,
                        "icon" => $userMetric['icon'],
                        "value" => $userMetric['value'],
                        "label" => $userMetric['label'],
                    ])
                </a>
            @endforeach
        </div>
    </div>
</section>