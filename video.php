<?php
// Define an associative array of videos
$videos = [
    'video1' => 'https://dl.dropboxusercontent.com/scl/fi/afclgo82vlnfumbwqk0dc/4_5872979318962917724.mp4?rlkey=20361lk3v1hfdxt1mv66jl6xu&st=0p67wntu&dl=0',
    'video2' => 'https://dl.dropboxusercontent.com/scl/fi/ximkjspb2lpbvcr57z1v6/VID-20240609-WA0019.mp4?rlkey=k4ee9vsglfnnsab506kgweq9j&dl=0',
    // Add more videos as needed

'video3' => '         <a href="https://youtu.be/Z7Wl2FW2TcA?si=EtawwCJBbweH0Dh9" target="_blank">Link to YouTube Video</a>

       ',
'video4' => ' https://dl.dropboxusercontent.com/scl/fi/zr3i3unu3wvffv5vx658a/yt5s.io-Lockbit-3.0-Phonk-Beat.mp4?rlkey=kwt1jhkdqlm2uz9kap4o9rmte&st=it7gp7gr&dl=0  ',
'video5' => '   //new video link is here               ',
'video6' => '   //new video link is here               ',
'video7' => '   //new video link is here               ',
'video8' => '   //new video link is here               ',
'video9' => '   //new video link is here               ',
'video10' => '   //new video link is here               ',
'video11' => '   //new video link is here               ',
'video12' => '   //new video link is here               ',
'video13' => '   //new video link is here               ',
'video14' => '   //new video link is here               ',
'video15' => '   //new video link is here               '







];

// Get the video key from the query parameter
$videoKey = isset($_GET['v']) ? $_GET['v'] : '';

// Check if the video key exists in the array
if (array_key_exists($videoKey, $videos)) {
    // Redirect to the corresponding Dropbox video URL
    header('Location: ' . $videos[$videoKey]);
    exit();
} else {
    // If the video key doesn't exist, display an error message
    echo "Invalid video key.";
    exit();
}
?>
