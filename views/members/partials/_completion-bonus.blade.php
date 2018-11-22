<div class="flex flex-row content-table-row ph-1">
    <div class="flex flex-column">
        <h2 class="subheading pv-3 ph text-black">Completion Bonus</h2>
    </div>
    <div class="flex flex-column flex-auto ph {{ $isComplete ? ('text-' . $themeColor) : 'text-grey-2' }}">
        <p class="body font-bold nowrap uppercase">
            {{ $xpBonus ?? 0 }} XP
        </p>
    </div>
    <div class="flex flex-column icon-col align-center {{ $isComplete ? ('text-' . $themeColor) : 'text-grey-2' }}">
        <i class="fas fa-trophy no-events"></i>
    </div>
</div>