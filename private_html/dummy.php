<?php // dummy site info to test smarty before database implementation

// accounts
$accounts = array(
    1 => array(
        "current" => false,
        "username" => "SamGulinello",
        "email" => "sg1355@messiah.edu",
        "avatar" => "images/profile/user1.jpg"
    ),
    2 => array(
        "current" => true,
        "username" => "rd1288",
        "email" => "rd1288@messiah.edu",
        "avatar" => "images/profile/user2.jpg"
    ),
    3 => array(
        "current" => false,
        "username" => "MicahJ",
        "email" => "mj1262@messiah.edu",
        "avatar" => "images/profile/user3.jpg"
    )
);

// albums
$albums = array(
    1 => array(
        "title" => "19",
        "cover" => "/images/album/19.jpg",
        "artist" => "Adele",
        "year" => "2008",
        "following" => true,
        "user" => "SamGulinello",
        "posterID" => 1,
        "songs" => array(
            "Daydreamer",
            "Best For Last",
            "Chasing Pavements",
            "Cold Shoulder",
            "Crazy For You",
            "Melt My Heart To Stone",
            "First Love",
            "Right As Rain",
            "Make You Feel My Love",
            "My Same",
            "Tired",
            "Hometown Glory"
        )
    ),
    2 => array(
        "title" => "A Night At The Opera",
        "cover" => "/images/album/a_night_at_the_opera.jpg",
        "artist" => "Queen",
        "year" => "1975",
        "following" => false,
        "user" => "MicahJ",
        "posterID" => 1,
        "songs" => array(
            "Death On Two Legs",
            "Lazing On A Sunday Afternoon",
            "I'm In Love With My Car",
            "You're My Best Friend",
            "'39",
            "Sweet Lady",
            "Seaside Rendezvous",
            "The Prophet's Song",
            "Love Of My Life",
            "Good Company",
            "Bohemian Rhapsody",
            "God Save The Queen"
        )
    ),
    3 => array(
        "title" => "AM",
        "cover" => "images/album/am.jpg",
        "artist" => "Arctic Monkeys",
        "year" => "2013",
        "following" => true,
        "user" => "SamGulinello",
        "posterID" => 1,
        "songs" => array(
            "Do I Wanna Know?",
            "R U Mine?",
            "One For The Road",
            "Arabella",
            "I Want It All",
            "No. 1 Party Anthem",
            "Mad Sounds",
            "Fireside",
            "Why'd You Only Call Me When You're High?",
            "Snap Out Of It",
            "Knee Socks",
            "I Wanna Be Yours"
        )
    ),
    4 => array(
        "title" => "Another Light",
        "cover" => "images/album/another_light.jpg",
        "artist" => "Red Vox",
        "year" => "2017",
        "following" => true,
        "user" => "rd1288",
        "posterID" => 2,
        "songs" => array(
            "Another Light",
            "Settle for Less",
            "Memories Lie",
            "Tell Me",
            "I'm so Happy",
            "I'm so Sad",
            "Memento Mori",
            "From the Stars",
            "Rub Your Eyes",
            "Reno",
            "In the Garden",
            "Forgive and Forget",
            "Burn a Picture"
        )
    ),
    5 => array(
        "title" => "Fuzzybrain",
        "cover" => "images/album/fuzzybrain.jpg",
        "artist" => "Dayglow",
        "year" => "2018",
        "following" => false,
        "user" => "rd1288",
        "posterID" => 2,
        "songs" => array(
            "False Direction",
            "Can I Call You Tonight?",
            "Hot Rod",
            "Run the World!!!",
            "Fair Game",
            "Dear Friend,",
            "Fuzzybrain",
            "Junior Varsity"
        )
    ),
    6 => array(
        "title" => "Landmark",
        "cover" => "images/album/landmark.jpg",
        "artist" => "Hippo Campus",
        "year" => "2017",
        "following" => true,
        "user" => "rd1288",
        "posterID" => 2,
        "songs" => array(
            "Sun Veins",
            "Way It Goes",
            "Vines",
            "Epitaph",
            "Simple Season",
            "Tuesday",
            "Western Kids",
            "Poems",
            "Monsoon",
            "Vacation",
            "Boyish",
            "Interlude",
            "Buttercup"
        )
    ),
    7 => array(
        "title" => "The Human Condition",
        "cover" => "images/album/the_human_condition.jpg",
        "artist" => "Jon Bellion",
        "year" => "2016",
        "following" => true,
        "user" => "MicahJ",
        "posterID" => 3,
        "songs" => array(
            "He Is The Same",
            "80's Films",
            "All Time Low",
            "New York Soul - Pt. ii",
            "Fashion",
            "Maybe IDK",
            "Woke The F*ck Up",
            "Overwhelming",
            "Weight Of The World",
            "The Good In Me",
            "Morning In America",
            "iRobot",
            "Guillotine",
            "Hand Of God - Outro"
        )
    ),
    8 => array(
        "title" => "Stranded",
        "cover" => "images/album/stranded.jpg",
        "artist" => "Red Vox",
        "year" => "2018",
        "following" => false,
        "user" => "rd1288",
        "posterID" => 2,
        "songs" => array(
            "Stranded",
        )
    )
);

// playlists
$playlists = array(
    1 => array(
        "title" => "Sam's Cool Playlist",
        "user" => "SamGulinello",
        "albumCount" => 4,
        "artistCount" => 4,
        "songs" => array(
            1 => array("Daydreamer", "19", "Adele"),
            2 => array("Melt My Heart To Stone", "19", "Adele"),
            3 => array("Hometown Glory", "19", "Adele"),
            4 => array("Memento Mori", "Another Light", "Red Vox"),
            5 => array("From the Stars", "Another Light", "Red Vox"),
            6 => array("You're My Best Friend", "A Night At The Opera", "Queen"),
            7 => array("Bohemian Rhapsody", "A Night At The Opera", "Queen"),
            8 => array("Fireside", "AM", "Arctic Monkeys")
        )
    ),
    2 => array(
        "title" => "Robbie's Ultimate Single Song Playlist",
        "user" => "rd1288",
        "albumCount" => 1,
        "artistCount" => 1,
        "songs" => array(
            1 => array("In the Garden", "Another Light", "Red Vox")
        )
    )
);
// get array of logged in user
foreach ($accounts as $id=>$account) {
    if ($account['current']) {
        $user = $account;
        $user['id'] = $id;
        break;
    }
}

// generate favorites from albums
$following = array();
foreach ($albums as $id=>$album) {
    if ($album['following']) {
        $following[$id] = $album;
    }
}
$user['following'] = $following;

// generate 'my posts' array from albums
$my_posts = array();
foreach ($albums as $id=>$album) {
    if ($album['user'] == $user['username']) {
        $my_posts[$id] = $album;
    }
}
$user['posts'] = $my_posts;

// generate 'my playlists' array from playlists
$my_playlists = array();
foreach($playlists as $playlist) {
    if ($playlist['user'] == $user['username']) {
        array_push($my_playlists, $playlist);
    }
}
$user['playlists'] = $my_playlists;


// generate artists array from albums
$artists = array();
foreach ($albums as $album) {
    $artist = $album['artist'];
    if (!in_array($artist, $artists)) {
        array_push($artists, $artist);
    }
}

// generate alphebetized artists array from artists list 
// !!! needed after database implementation !!!
sort($artists, SORT_NATURAL | SORT_FLAG_CASE);
$artists_alphabetized = array();
foreach ($artists as $artist) {
    $alpha = strtoupper(substr($artist, 0, 1));
    if (array_key_exists($alpha, $artists_alphabetized)) {
        array_push($artists_alphabetized[$alpha], $artist);
    } else {
        $artists_alphabetized[$alpha] = array($artist);
    }
}

// gets an artist's albums
function get_albums($artist, $album_list) {
    $result = array();
    foreach ($album_list as $id=>$album) {
        if ($album['artist'] == $artist) {
            $result[$id] = $album;
        }
    }
    return $result;
}
// gets an account's posts
function get_posts($account, $album_list) {
    $result = array();
    foreach ($album_list as $id=>$album) {
        if ($album['user'] == $account) {
            $result[$id] = $album;
        }
    }
    return $result;
}
// gets an account's playlists
function get_playlists($account, $playlist_list) {
    $result = array();
    foreach ($playlist_list as $id=>$playlist) {
        if ($playlist['user'] == $account) {
            $result[$id] = $playlist;
        }
    }
    return $result;
}

function is_match($query, $title) {
    $query = strtolower($query);
    $title = strtolower($title);
    return strpos($title, $query) !== false;
}
