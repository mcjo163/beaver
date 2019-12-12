DROP DATABASE IF EXISTS `beaverbase`;
CREATE DATABASE `beaverbase`;

USE `beaverbase`;

CREATE TABLE `artist` (
  `artist_id` int NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(45) NOT NULL,
  PRIMARY KEY (`artist_id`),
  UNIQUE KEY `artist_id_UNIQUE` (`artist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `email_address` varchar(45) NOT NULL,
  `hashed_password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_ID_UNIQUE` (`user_id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_address_UNIQUE` (`email_address`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `album` (
  `album_id` int NOT NULL AUTO_INCREMENT,
  `user_fk` int NOT NULL,
  `artist_fk` int NOT NULL,
  `album_name` varchar(45) NOT NULL,
  `release_year` year(4) NOT NULL,
  PRIMARY KEY (`album_id`),
  UNIQUE KEY `album_id_UNIQUE` (`album_id`),
  KEY `user_fk_idx` (`user_fk`),
  KEY `artist_fk_idx` (`artist_fk`),
  CONSTRAINT `fk_artist_album` FOREIGN KEY (`artist_fk`) REFERENCES `artist` (`artist_id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_user_album` FOREIGN KEY (`user_fk`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `playlist` (
  `playlist_id` int NOT NULL AUTO_INCREMENT,
  `user_fk` int NOT NULL,
  `playlist_name` varchar(45) NOT NULL,
  PRIMARY KEY (`playlist_id`),
  UNIQUE KEY `playlist_id_UNIQUE` (`playlist_id`),
  KEY `fk_user_playlist_idx` (`user_fk`),
  CONSTRAINT `fk_user_playlist` FOREIGN KEY (`user_fk`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `song` (
  `song_id` int NOT NULL AUTO_INCREMENT,
  `album_fk` int NOT NULL,
  `song_order` int NOT NULL,
  `song_name` varchar(45) NOT NULL,
  PRIMARY KEY (`song_id`),
  UNIQUE KEY `song_id_UNIQUE` (`song_id`),
  CONSTRAINT `fk_album_song` FOREIGN KEY (`album_fk`) REFERENCES `album` (`album_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `playlist_song` (
  `playlist_fk` int NOT NULL,
  `song_fk` int NOT NULL,
  `order_in_playlist` int NOT NULL,
  KEY `fk_song_playlist-song_idx` (`song_fk`),
  KEY `fk_playlist_playlist-song_idx` (`playlist_fk`),
  CONSTRAINT `fk_playlist_playlist-song` FOREIGN KEY (`playlist_fk`) REFERENCES `playlist` (`playlist_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_song_playlist-song` FOREIGN KEY (`song_fk`) REFERENCES `song` (`song_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `user_favorite_album` (
  `user_fk` int NOT NULL,
  `album_fk` int NOT NULL,
  KEY `user_fk_idx` (`user_fk`),
  KEY `album_fk_idx` (`album_fk`),
  CONSTRAINT `fk_album_following` FOREIGN KEY (`album_fk`) REFERENCES `album` (`album_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_following` FOREIGN KEY (`user_fk`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO artist (artist_name) VALUES ("Adele"), ("Arctic Monkeys"), ("Dayglow"),
("Hippo Campus"), ("Jon Bellion"), ("Queen"), ("Red Vox");

INSERT INTO user (username, email_address, hashed_password) VALUES 
("SamGulinello", "sg1355@messiah.edu", "5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8"),
("rd1288", "rd1288@messiah.edu", "5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8"),
("MicahJ", "mj1262@messiah.edu", "5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8");

INSERT INTO album (user_fk, artist_fk, album_name, release_year) VALUES
(1, 1, "19", 2008),
(1, 2, "AM", 2013),
(2, 3, "Fuzzybrain", 2018),
(2, 4, "Landmark", 2017),
(3, 5, "The Human Condition", 2016),
(3, 6, "A Night At The Opera", 1975),
(2, 7, "Another Light", 2017),
(2, 7, "Stranded", 2018);

INSERT INTO playlist (user_fk, playlist_name) VALUES
(1, "Sam's Cool Playlist"),
(2, "Robbie's Ultimate Single Song Playlist");

INSERT INTO song (album_fk, song_order, song_name) VALUES
(1, 1, "Daydreamer"),
(1, 2, "Best For Last"),
(1, 3, "Chasing Pavements"),
(1, 4, "Cold Shoulder"),
(1, 5, "Crazy For You"),
(1, 6, "Melt My Heart To Stone"),
(1, 7, "First Love"),
(1, 8, "Right As Rain"),
(1, 9, "Make You Feel My Love"),
(1, 10, "My Same"),
(1, 11, "Tired"),
(1, 12, "Hometown Glory"),
(2, 1, "Do I Wanna Know?"),
(2, 2, "R U Mine?"),
(2, 3, "One For The Road"),
(2, 4, "Arabella"),
(2, 5, "I Want It All"),
(2, 6, "No. 1 Party Anthem"),
(2, 7, "Mad Sounds"),
(2, 8, "Fireside"),
(2, 9, "Why'd You Only Call Me When You're High?"),
(2, 10, "Snap Out Of It"),
(2, 11, "Knee Socks"),
(2, 12, "I Wanna Be Yours"),
(3, 1, "False Direction"),
(3, 2, "Can I Call You Tonight?"),
(3, 3, "Hot Rod"),
(3, 4, "Run the World!!!"),
(3, 5, "Fair Game"),
(3, 6, "Dear Friend,"),
(3, 7, "Fuzzybrain"),
(3, 8, "Junior Varsity"),
(4, 1, "Sun Veins"),
(4, 2, "Way It Goes"),
(4, 3, "Vines"),
(4, 4, "Epitaph"),
(4, 5, "Simple Season"),
(4, 6, "Tuesday"),
(4, 7, "Western Kids"),
(4, 8, "Poems"),
(4, 9, "Monsoon"),
(4, 10, "Vacation"),
(4, 11, "Boyish"),
(4, 12, "Interlude"),
(4, 13, "Buttercup"),
(5, 1, "He Is The Same"),
(5, 1, "80's Films"),
(5, 1, "All Time Low"),
(5, 1, "New York Soul - Pt. ii"),
(5, 1, "Fashion"),
(5, 1, "Maybe IDK"),
(5, 1, "Woke The F*ck Up"),
(5, 1, "Overwhelming"),
(5, 1, "Weight Of The World"),
(5, 1, "The Good In Me"),
(5, 1, "Morning In America"),
(5, 1, "iRobot"),
(5, 1, "Guillotine"),
(5, 1, "Hand Of God - Outro"),
(6, 1, "Death On Two Legs"),
(6, 2, "Lazing On A Sunday Afternoon"),
(6, 3, "I'm In Love With My Car"),
(6, 4, "You're My Best Friend"),
(6, 5, "'39"),
(6, 6, "Sweet Lady"),
(6, 7, "Seaside Rendezvous"),
(6, 8, "The Prophet's Song"),
(6, 9, "Love Of My Life"),
(6, 10, "Good Company"),
(6, 11, "Bohemian Rhapsody"),
(6, 12, "God Save The Queen"),
(7, 1, "Another Light"),
(7, 2, "Settle for Less"),
(7, 3, "Memories Lie"),
(7, 4, "Tell Me"),
(7, 5, "I'm so Happy"),
(7, 6, "I'm so Sad"),
(7, 7, "Memento Mori"),
(7, 8, "From the Stars"),
(7, 9, "Rub Your Eyes"),
(7, 10, "Reno"),
(7, 11, "In the Garden"),
(7, 12, "Forgive and Forget"),
(7, 13, "Burn a Picture"),
(8, 1, "Stranded");

INSERT INTO user_favorite_album (user_fk, album_fk) VALUES
(1, 1),
(1, 2),
(1, 4),
(1, 5),
(1, 7),
(2, 8);

INSERT INTO playlist_song (playlist_fk, song_fk, order_in_playlist) VALUES
(1, 1, 1),
(1, 6, 2),
(1, 12, 3),
(1, 78, 4),
(1, 79, 5),
(1, 63, 6),
(1, 70, 7),
(1, 20, 8),
(2, 82, 1);