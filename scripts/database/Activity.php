<?php

/**
 * This is a stub file for the refactoring exercise
 * You can modify it as you see fit but the methods
 * are purely to provide a base level of functionality.
 */

class Activity
{
    /**
     * Activity undertaken by the user
     *
     * @var int 1
     */
    public const USER_ACTION = 1;


    public function __construct($orgId)
    {
        // N/A
    }

    /**
     * Record activity
     *
     * @param int $userId User ID
     * @param int $activityId Activity ID
     * @param string $activity Brief description
     * @return void
     */
    public function insert($userId, $activityId, $activity)
    {
        return;
    }
}
