<?php namespace app\Events;

use app\Events\Event;
use app\User;

use Illuminate\Queue\SerializesModels;

class UserLoggedIn extends Event {

    use SerializesModels;

    public $userId;


    /**
     * Create a new event instance.
     *
     * @param int userId the primary key of the user who was just authenticated.
     *
     * @return void
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
        DB::table('login_count')-> update(array(
            'user_id'    => $userId,
            'created_at'    => \Carbon\Carbon::now()
        ));
    }

}