<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Local Camera Feed</title>
  <link href="./resources/css/videochat.css" rel="stylesheet" type="text/css">
  <link href="./resources/css/common.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>Local Camera Feed</h1>
  <video id="localvideo" autoplay></video>
  <script>
    const localVideo = document.getElementById('localvideo');

    // Function to start local video stream
    async function startLocalVideo() {
      try {
        const stream = await navigator.mediaDevices.getUserMedia({ video: true });
        localVideo.srcObject = stream;
      } catch (error) {
        console.error('Error accessing media devices:', error);
      }
    }

    // Start local video when page loads
    startLocalVideo();
  </script>
</body>
</html>
