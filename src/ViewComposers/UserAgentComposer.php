<?php

namespace Src\ViewComposers;

use Illuminate\View\View;
use Jenssegers\Agent\Agent;

class UserAgentComposer
{
    /**
     * Pass User Agent methods to the view
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $agent = new Agent();

        $view->with(
            [
                "agent" => $agent,
            ]
        );
    }
}