<?php
class VideoModel
{
  public function getAllVideo()
  {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&regionCode=ID&maxResults=4&q=seks+edukasi+remaja&key=AIzaSyDuup9R603lc9dRwFkZsP2RjhePmMBXd54');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = array();
    $headers[] = 'Accept: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
      echo 'Error:' . curl_error($ch);
    }
    // curl_close($ch);
    $data = json_decode($result, true);
    return $data['items'];
  }
}
