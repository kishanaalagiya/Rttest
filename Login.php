<!DOCTYPE html>
<html>
<title>Login Facebook</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css"> 
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('back.jpeg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-text-white">
  
  <div class="w3-display-middle w3-jumbo">
    <h1 style="width:100%;height:auto;font-size:45px;margin-bottom:220px">ARCHIVE FACEBOOK ALBUMS</h1> 
     <div style="height:80px;width:100%;margin-bottom:200px;margin-top:-80px;margin-left:360px"><img src="fb.png" width="350px" height="auto"></div>

  </div>
  <div class="w3-display-topleft w3-container w3-xlarge">
    <p><a href="home.php"><button class="w3-button w3-black">About App & Devloper</button></a></p>
    <p><button class="w3-button w3-black" onclick="document.getElementById('contact').style.display='block'">Contact Me</button></p>
  </div>
  <div class="w3-display-bottomleft w3-container" >
    <p style=" color:blue" class="w3-xlarge">Here, You Can Download Your Facebook Album Easily</p>
    <p style=" color:blue" class="w3-large">We Ensure You That Your Data Is Secure Only Use Can Use It.</p>
    <p style=" color:blue">powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">A.K</a></p>
  </div>
</div>


<!-- Contact Modal -->
<div id="contact" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Contact Me</h1>
    </div>
    <div class="w3-container">
      <p> just send me a message:</p>
      <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="Contact" placeholder="Contact" required name="People"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="Email" placeholder="Email" required name="email" value=" "></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
        <p><button class="w3-button" type="submit">SEND MESSAGE</button></p>
      </form>
    </div>
  </div>
</div>

</body>
</html>

