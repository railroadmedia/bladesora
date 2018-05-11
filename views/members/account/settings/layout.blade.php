<div class="flex flex-row bg-white shadow corners-3">
    <div id="settingsSidebar" class="flex flex-column br-light-1 corners-left-3 hide-xs-only">
        @include('bladesora::members.account.partials._sidebar-links', [
            "brand" => $brand,
            "sections" => [
                [
                    "url" => url()->route('account.settings.profile'),
                    "icon" => "fas fa-edit",
                    "title" => "Profile",
                    "active" => strpos(url()->current(), 'profile')
                ],
                [
                    "url" => url()->route('account.settings.login'),
                    "icon" => "fas fa-lock",
                    "title" => "Login Credentials",
                    "active" => strpos(url()->current(), 'login')
                ],
                [
                    "url" => url()->route('account.settings.payments'),
                    "icon" => "far fa-credit-card",
                    "title" => "Payments",
                    "active" => strpos(url()->current(), 'payment')
                ],
                [
                    "url" => url()->route('account.settings.privacy'),
                    "icon" => "far fa-eye-slash",
                    "title" => "Privacy",
                    "active" => strpos(url()->current(), 'privacy')
                ],
                [
                    "url" => url()->route('account.settings.notifications'),
                    "icon" => "fas fa-bell",
                    "title" => "Notifications",
                    "active" => strpos(url()->current(), 'notifications')
                ],
                [
                    "url" => url()->route('account.settings.membership'),
                    "icon" => "far fa-calendar-alt",
                    "title" => "Membership",
                    "active" => strpos(url()->current(), 'subscription')
                ],
            ]
        ])
    </div>
    <div class="flex flex-column">
        @yield('edit-forms')
    </div>
</div>