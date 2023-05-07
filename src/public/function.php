<?php 

$tweets = [
    [
        'id' => 1,
        'userName' => 'さとう',
        'tweets' => '腹減った',
        'created_at' => '2022/9/22',
    ],
    [
        'id' => 2,
        'userName' => 'さとう',
        'tweets' => '食べたい',
        'created_at' => '2022/10/23',
    ],
    [
        'id' => 3,
        'userName' => 'すずき',
        'tweets' => '食べたい',
        'created_at' => '2022/9/24',
    ],
    [
        'id' => 4,
        'userName' => 'さとう',
        'tweets' => '食べたい',
        'created_at' => '2022/10/25',
    ],
    [
        'id' => 5,
        'userName' => 'すずき',
        'tweets' => '食べたい',
        'created_at' => '2022/10/26',
    ],
    [
        'id' => 6,
        'userName' => 'さとう',
        'tweets' => '食べたい',
        'created_at' => '2022/9/27',
    ],
    [
        'id' => 7,
        'userName' => 'すずき',
        'tweets' => '腹減った',
        'created_at' => '2022/10/28',
    ],

];

$tweets= createTweetSatou($tweets);

function isSatou(array $tweet): bool 
{
    return $tweet["userName"] == "さとう";
}

function createTweetSatou(array $tweets): array 
{
    $tweetSatou = [];
    foreach($tweets as $tweet) {
        // if ($tweet["userName"] == "さとう") {
        //     $tweetSatou [] = $tweet;
        // }
        if (isSatou($tweet)) {
            $tweetSatou [] = $tweet;
            
        }
        
    }
    return $tweetSatou;
}
?>