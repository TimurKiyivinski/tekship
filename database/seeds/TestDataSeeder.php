<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Video;
use App\Subscription;
use App\Comment;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Admin account
        $admin = new User();
        $admin->name = "Timur Kiyivinski";
        $admin->email = "timur@linux.com";
        $admin->password = Hash::make("timurkiyivinski");
        $admin->type = "Admin";
        $admin->save();

        // Create Content Creator accounts
        for ($i = 0; $i < 30; $i++) {
            echo "Creating creator $i\n";
            $creator = new User();
            $creator->name = "Creator $i";
            $creator->email = "creator$i@localhost.com";
            $creator->password = Hash::make("password");
            $creator->type = "Creator";
            $creator->save();

            // Create Videos
            for ($ii = 0; $ii < rand(10, 20); $ii++) {
                echo "Creating video $ii\n";
                $video = new Video();
                $video->user_id = $creator->id;
                $video->title = "Creator $i Video $ii";
                $video->description = "This is an example description";
                $video->path = "videos/example.webm";
                $video->save();
            }
        }

        // Create User accounts
        for ($i = 0; $i < 100; $i++) {
            echo "Creating user $i\n";
            $user = new User();
            $user->name = "User $i";
            $user->email = "user$i@localhost.com";
            $user->password = Hash::make("password");
            $user->type = "";
            $user->save();

            // Create Subscriptions
            foreach (User::where('type', 'Creator')->get() as $creator) {
                // Randomly subscribe users to channels
                if (rand(1, 10) % 2 == 0) {
                    echo "Subscribing user $user->name to $creator->name\n";
                    $subscription = new Subscription();
                    $subscription->user_id = $user->id;
                    $subscription->subscription_id = $creator->id;
                    $subscription->save();

                    // Randomly assign comments to videos
                    foreach (Video::where('user_id', $creator->id)->get() as $video) {
                        echo "Commenting as user $user->name on $video->title\n";
                        $comment = new Comment();
                        $comment->user_id = $user->id;
                        $comment->video_id = $video->id;
                        $comment->data = "This is a comment";
                        $comment->save();
                    }
                }
            }
        }
    }
}
