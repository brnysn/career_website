<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Category;
use App\Job;
use App\Location;

class SidebarComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('sidebarCategories', Category::withCount('jobs')->whereHas('jobs')->orderBy('jobs_count', 'desc')->get());
    }
}
