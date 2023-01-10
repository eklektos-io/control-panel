<?php

namespace EklektosIo\ControlPanel\Widgets;

use Statamic\Widgets\Widget;

class Dashboard extends Widget
{
    /**
     * The HTML that should be shown in the widget.
     *
     * @return string|\Illuminate\View\View
     */
    public function html()
    {
        return view('eklektos-io::widgets.dashboard');
    }
}
