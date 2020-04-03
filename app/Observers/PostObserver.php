<?php

namespace App\Observers;

use App\PostModel;

class PostObserver
{
    /**
     * Handle the post model "created" event.
     *
     * @param  \App\PostModel  $postModel
     * @return void
     */
    public function created(PostModel $postModel)
    {
        //
    }

    /**
     * Handle the post model "updated" event.
     *
     * @param  \App\PostModel  $postModel
     * @return void
     */
    public function updated(PostModel $postModel)
    {
        //
    }

    /**
     * Handle the post model "deleted" event.
     *
     * @param  \App\PostModel  $postModel
     * @return void
     */
    public function deleted(PostModel $postModel)
    {
        //
    }

    /**
     * Handle the post model "restored" event.
     *
     * @param  \App\PostModel  $postModel
     * @return void
     */
    public function restored(PostModel $postModel)
    {
        //
    }

    /**
     * Handle the post model "force deleted" event.
     *
     * @param  \App\PostModel  $postModel
     * @return void
     */
    public function forceDeleted(PostModel $postModel)
    {
        //
    }
}
