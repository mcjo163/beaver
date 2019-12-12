<?php
// adds a new album to the database from the form
include '../../../private_html/config.php';
include PRIVATE_PATH . "db.inc.php";

$errors = array(
    'imageError'=>false,
    'titleError'=>false,
    'artistError'=>false,
    'yearError'=>false,
    'songError'=>false
);
$okToUpload = true;

// error-checking to see if every field is filled
foreach($_POST as $id=>$value) {
    if ($id == 'title' && $value == "") {
        $errors['titleError'] = true;
        $okToUpload = false;
        echo("titleError<br>");
    } elseif ($id == 'artist' && $value == "") {
        $errors['artistError'] = true;
        $okToUpload = false;
        echo("artistError<br>");
    } elseif ($id == 'year' && $value == "") {
        $errors['yearError'] = true;
        $okToUpload = false;
        echo("yearError<br>");
    } elseif ($id != 'submit' && $value == "") {
        $errors['songError'] = true;
        $okToUpload = false;
        echo("songError<br>");
    }
}

echo("<hr>");
// Checks if the image is valid
$target_dir = "../../images/album/";
$target_file = $target_dir . basename($_FILES["cover"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["cover"]["tmp_name"]);
if(!($check !== false)) {
    $errors['imageError'] = true;
    $okToUpload = false;
    echo("imageError<br>");
    echo("not an image");
}

// Only allows jpg images (for now)
if($imageFileType != "jpg") {
    $errors['imageError'] = true;
    $okToUpload = false;
    echo("imageError<br>");
    echo("not a jpg");

}

if (isset($_POST['submit'])) {

    if ($okToUpload) {
        // checks to see if the artist is already included in the database
        $sql = "SELECT count(*) AS artist_exists
            FROM artist
            WHERE artist_name = :name";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":name", $_POST['artist']);
        $stmt->execute();
        $artist = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($artist['artist_exists'] == 0) {
            $sql = "INSERT INTO artist (artist_name)
                VALUES (:name)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":name", $_POST['artist']);
            $stmt->execute();
        }
    // gets artist fk
        $sql = "SELECT *
            FROM artist
            WHERE artist_name = :name";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":name", $_POST['artist']);
        $stmt->execute();
        $artist = $stmt->fetch(PDO::FETCH_ASSOC);

        $user_id = unserialize($_SESSION['user'])['user_id'];

    // inserts the album
        $sql = "INSERT INTO album (user_fk, artist_fk, album_name, release_year)
            VALUES (:user, :artist, :album_name, :release_year)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":user", $user_id);
        $stmt->bindParam(":artist", $artist['artist_id']);
        $stmt->bindParam(":album_name", $_POST['title']);
        $stmt->bindParam(":release_year", $_POST['year']);
        $stmt->execute();

    //gets album ID of latest album
        $sql = "SELECT album_id FROM album ORDER BY album_id DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $album_id = $stmt->fetch(PDO::FETCH_ASSOC);

        $song_order = 1;
        foreach ($_POST as $id => $value) {
    //        echo($id . ', ' . $value);
            if (!in_array($id, array("cover", "title", "artist", "year", "details", "submit"))) {
                $sql = "INSERT INTO song (album_fk, song_order, song_name) VALUES (:album_id, :song_order, :song_name)";
                $song = $pdo->prepare($sql);
                $song->bindParam(":album_id", $album_id['album_id']);
                $song->bindParam(":song_order", $song_order);
                $song->bindParam(":song_name", $value);
                $song->execute();
                $song_order++;
            }
        }

        // uploads the image
        move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file);
        $new_name = $target_dir . $album_id['album_id'] . ".jpg";
        rename($target_file, $new_name);

        ob_start();
        header("location: " . WEB_URL . "/album?id=" . $album_id['album_id']);
        ob_end_flush();
        exit();


    }
} else {
//    ob_start();
//    header("location: " . WEB_URL . "/album");
//    ob_end_flush();
//    exit();
}

