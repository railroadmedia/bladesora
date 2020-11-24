<div id="sidebar" class="">
    <div class="">
        <div class="member-section flex flex-row align-v-center bb-grey-1-1">
            <div class="member-avatar">
                <img class="bg-grey-2 rounded" src="{{ $member['avatar'] }}" alt="member avatar">
            </div>
            <div class="member-details">
                <h5 class="title font-bold">{{ $member['name'] }}</h5>
                <div class="body member-stats">
                    <span>LEVEL {{ $member['level'] }}</span>
                    <span class="member-stats-xp">{{ $member['xp'] }} XP</span>
                </div>
            </div>
        </div>
        <div class="user-links-section pl-1 bb-grey-1-1">
            @foreach($userLinks as $link)
                <div class="pv-1">
                    <a
                        href="{{ $link['url'] }}"
                        class="sidebar-link no-decoration text-black body {{ $link['active'] ? 'active' : '' }}"
                    ><div class="sidebar-link-icon"><i class="{{ $link['icon'] }}"></i></div><span class="sidebar-link-title">{{ $link['title'] }}</span></a>
                </div>
            @endforeach
        </div>
        <div class="edge-links-section pl-1">
            <h5 class="title font-bold">DRUMEO EDGE</h5>
            @foreach($edgeLinks as $link)
                <div class="pv-1">
                    <a
                        href="{{ $link['url'] }}"
                        class="sidebar-link no-decoration text-black body {{ $link['active'] ? 'active' : '' }}"
                    ><div class="sidebar-link-icon"><i class="{{ $link['icon'] }}"></i></div><span class="sidebar-link-title">{{ $link['title'] }}</span></a>
                </div>
            @endforeach
        </div>
    </div>
</div>
