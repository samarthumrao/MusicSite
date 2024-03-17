<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/music_style.css">
    <title>Document</title>
</head>
<body>
    <body>
        <main>
          <nav class="main-menu">
            <div>
              <div class="user-info">
              <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
              <p><?php echo $fetch['name']; ?></p>
              </div>
              <ul>
                <li class="nav-item active">
                  <a href="#">
                    <i class="fa fa-map nav-icon"></i>
                    <span class="nav-text">Discover</span>
                  </a>
                </li>
    
                <li class="nav-item">
                  <a href="#">
                    <i class="fa fa-arrow-trend-up nav-icon"></i>
                    <span class="nav-text">Uploads</span>
                  </a>
                </li>
    
                <li class="nav-item">
                  <a href="#">
                    <i class="fa fa-compact-disc nav-icon"></i>
                    <span class="nav-text">Album</span>
                  </a>
                </li>
    
                <li class="nav-item">
                  <a href="#">
                    <i class="fa fa-circle-play nav-icon"></i>
                    <span class="nav-text">Playlist</span>
                  </a>
                </li>
    
                <li class="nav-item">
                  <a href="#">
                    <i class="fa fa-heart nav-icon"></i>
                    <span class="nav-text">Favorites</span>
                  </a>
                </li>
              </ul>
            </div>
    
            <ul>
              <li class="nav-item">
                <a href="home.php">
                  <i class="fa fa-user nav-icon"></i>
                  <span class="nav-text">Account</span>
                </a>
              </li>
    
              <li class="nav-item">
                <a href="#">
                  <i class="fa fa-gear nav-icon"></i>
                  <span class="nav-text">Settings</span>
                </a>
              </li>
    
              <li class="nav-item">
                <a href="login.php">
                  <i class="fa fa-right-from-bracket nav-icon"></i>
                  <span class="nav-text">Logout</span>
                </a>
              </li>
            </ul>
          </nav>
    
          <section class="content">
            <div class="left-content">
              <div class="slider-container">
                <h1>Popular Playlist</h1>
                <div class="swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b1.jpg?raw=true" />
                      <div class="slide-overlay">
                        <h2>Midnight Moods</h2>
                        <button>
                          Listen Now <i class="fa-solid fa-circle-play"></i>
                        </button>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b5.jpg?raw=true" />
                      <div class="slide-overlay">
                        <h2>Party Starters</h2>
                        <button>
                          Listen Now <i class="fa-solid fa-circle-play"></i>
                        </button>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b2.jpg?raw=true" />
                      <div class="slide-overlay">
                        <h2>Relaxing Tones</h2>
                        <button>
                          Listen Now <i class="fa-solid fa-circle-play"></i>
                        </button>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b3.jpg?raw=true" />
                      <div class="slide-overlay">
                        <h2>Smooth Jazz Journey</h2>
                        <button>
                          Listen Now <i class="fa-solid fa-circle-play"></i>
                        </button>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b4.jpg?raw=true" />
                      <div class="slide-overlay">
                        <h2>Uplifting Rhythms</h2>
                        <button>
                          Listen Now <i class="fa-solid fa-circle-play"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
    
              <div class="artists">
                <h1>Featured Artists</h1>
                <div class="artist-container containers">

                  <div class="artist">
                    <img
                      src="https://github.com/samarthumrao/Songs/blob/main/a7.jpg?raw=true"
                      alt="" />
                    <p>Nicholson</p>
                  </div>
    
                  <div class="artist">
                    <img
                      src="https://github.com/samarthumrao/Songs/blob/main/a6.jpg?raw=true"
                      alt="" />
                    <p>Hari & Sukhmani</p>
                  </div>
    
                  <div class="artist">
                    <img
                      src="https://github.com/samarthumrao/Songs/blob/main/a5.jpeg?raw=true"
                      alt="" />
                    <p>Parvaaz</p>
                  </div>
    
                  <div class="artist">
                    <img
                      src="https://github.com/samarthumrao/Songs/blob/main/a1.jpg?raw=true"
                      alt="" />
                    <p>Nucleya</p>
                  </div>
    
                  <div class="artist">
                    <img
                      src="https://github.com/samarthumrao/Songs/blob/main/a2.jpg?raw=true"
                      alt="" />
                    <p>Shirley Setia</p>
                  </div>
    
                  <div class="artist">
                    <img
                      src="https://github.com/samarthumrao/Songs/blob/main/a3.jpeg?raw=true"
                      alt="" />
                    <p>The F16s</p>
                  </div>
    
                  <div class="artist">
                    <img
                      src="https://github.com/samarthumrao/Songs/blob/main/a4.png?raw=true"
                      alt="" />
                    <p>Dualist Inquiry</p>
                  </div>
                </div>
              </div>
    
              <div class="albums">
                <h1>Recommended Albums</h1>
                <div class="album-container containers">
                  <div class="album">
                    <div class="album-frame">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b1.jpg?raw=true"
                        alt="" />
                    </div>
                    <div>
                      <h2>Views</h2>
                      <p>Drake</p>
                    </div>
                  </div>
    
                  <div class="album">
                    <div class="album-frame">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b2.jpg?raw=true"
                        alt="" />
                    </div>
                    <div>
                      <h2>Speak Now</h2>
                      <p>Taylor Swift</p>
                    </div>
                  </div>
    
                  <div class="album">
                    <div class="album-frame">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b3.jpg?raw=true"
                        alt="" />
                    </div>
                    <div>
                      <h2>Born to Die</h2>
                      <p>Lana Del Rey</p>
                    </div>
                  </div>
    
                  <div class="album">
                    <div class="album-frame">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b4.jpg?raw=true"
                        alt="" />
                    </div>
                    <div>
                      <h2>Endless Summer Vacation</h2>
                      <p>Miley Cyrus</p>
                    </div>
                  </div>
    
                  <div class="album">
                    <div class="album-frame">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b5.jpg?raw=true"
                        alt="" />
                    </div>
                    <div>
                      <h2>The Dark Side of The Moon</h2>
                      <p>Pink Floyd</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="right-content">
              <div class="recommended-songs">
                <h1>Recommended Songs</h1>
                <div class="song-container">
                  <div class="song">
                    <div class="song-img">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b2.jpg?raw=true"
                        alt="" />
                      <div class="overlay">
                        <i class="fa-solid fa-play"></i>
                      </div>
                    </div>
                    <div class="song-title">
                      <h2>Blank Space</h2>
                      <p>Taylor Swift</p>
                    </div>
                    <span>4:33</span>
                  </div>
    
                  <div class="song">
                    <div class="song-img">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b3.jpg?raw=true"
                        alt="" />
                      <div class="overlay">
                        <i class="fa-solid fa-play"></i>
                      </div>
                    </div>
                    <div class="song-title">
                      <h2>One Dance</h2>
                      <p>Drake</p>
                    </div>
                    <span>4:03</span>
                  </div>
    
                  <div class="song">
                    <div class="song-img">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b4.jpg?raw=true"
                        alt="" />
                      <div class="overlay">
                        <i class="fa-solid fa-play"></i>
                      </div>
                    </div>
                    <div class="song-title">
                      <h2>Pawn It All</h2>
                      <p>Alicia Keys</p>
                    </div>
                    <span>3:10</span>
                  </div>
    
                  <div class="song">
                    <div class="song-img">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b5.jpg?raw=true"
                        alt="" />
                      <div class="overlay">
                        <i class="fa-solid fa-play"></i>
                      </div>
                    </div>
                    <div class="song-title">
                      <h2>Lose Control</h2>
                      <p>Teddy Swims</p>
                    </div>
                    <span>3:30</span>
                  </div>
    
                  <div class="song">
                    <div class="song-img">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b1.jpg?raw=true"
                        alt="" />
                      <div class="overlay">
                        <i class="fa-solid fa-play"></i>
                      </div>
                    </div>
                    <div class="song-title">
                      <h2>Be The One</h2>
                      <p>Dua Lipa</p>
                    </div>
                    <span>3:24</span>
                  </div>
    
                  <div class="song">
                    <div class="song-img">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b2.jpg?raw=true"
                        alt="" />
                      <div class="overlay">
                        <i class="fa-solid fa-play"></i>
                      </div>
                    </div>
                    <div class="song-title">
                      <h2>Delicate</h2>
                      <p>Taylor Swift</p>
                    </div>
                    <span>3:54</span>
                  </div>
    
                  <div class="song">
                    <div class="song-img">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b3.jpg?raw=true"
                        alt="" />
                      <div class="overlay">
                        <i class="fa-solid fa-play"></i>
                      </div>
                    </div>
                    <div class="song-title">
                      <h2>Last Christmas</h2>
                      <p>Wham!</p>
                    </div>
                    <span>4:39</span>
                  </div>
    
                  <div class="song">
                    <div class="song-img">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b4.jpg?raw=true"
                        alt="" />
                      <div class="overlay">
                        <i class="fa-solid fa-play"></i>
                      </div>
                    </div>
                    <div class="song-title">
                      <h2>Paradise</h2>
                      <p>Coldplay</p>
                    </div>
                    <span>4:20</span>
                  </div>
    
                  <div class="song">
                    <div class="song-img">
                      <img
                        src="https://github.com/samarthumrao/Songs/blob/main/b5.jpg?raw=true"
                        alt="" />
                      <div class="overlay">
                        <i class="fa-solid fa-play"></i>
                      </div>
                    </div>
                    <div class="song-title">
                      <h2>Easy On Me</h2>
                      <p>Adele</p>
                    </div>
                    <span>3:45</span>
                  </div>
                </div>
              </div>
    
              <div class="music-player">
                <div class="album-cover">
                  <img src="images/b1.jpg" id="rotatingImage" alt="" />
                  <span class="point"></span>
                </div>
    
                <h2>Redemption</h2>
                <p>Besomorph & Coopex</p>
    
                <audio id="song">
                  <source src="Besomorph-Coopex-Redemption.mp3" type="audio/mpeg" />
                </audio>
    
                <input type="range" value="0" id="progress" />
    
                <div class="controls">
                  <button class="backward">
                    <i class="fa-solid fa-backward"></i>
                  </button>
                  <button class="play-pause-btn">
                    <i class="fa-solid fa-play" id="controlIcon"></i>
                  </button>
                  <button class="forward">
                    <i class="fa-solid fa-forward"></i>
                  </button>
                </div>
              </div>
            </div>
          </section>
        </main>
      </body>
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <script src="js/main.js"></script>
</body>
</html>