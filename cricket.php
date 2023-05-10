<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cricket Website</title>
<link rel="stylesheet" type="text/css" href="css/cric.css">
</head>
<body>
<header>
    <div class="user">
        <img src="logo.png" alt="Profile Picture">
        <div class="logo">Cricket Website</div>
    </div>
</header>
<div class="topnav">
  <a href="#">Home</a>
  <a href="liveScores.php">Live scores</a>
    <div class="dropdown">
      <div class="dropdownlink">
          <a href="#">Events</a>
      </div>
    <div class="dropdown-content">
      <a href="#">Intramural Tournament</a>
      <a href="#">NPL</a>
      <a href="#">section league</a>
      <a href="#">faculty league</a>
    </div>
    </div>
    <a href="news.php">News</a>
  <a href="video.php" onclick="playVideo()">Videos</a>
  <a href="#">cric.tv</a>
  <a href="admin/login.php" style="float:right" target="blank">login</a>
</div>

<div class="main">
<div class="header1">
    <p id="intro" >Welcome to our local cricket website, your source for news and updates from the world of cricket in our community. Stay informed and join our community of cricket lovers.</p>
</div>

 <!-- <div class="card">
    <img src="https://akm-img-a-in.tosshub.com/businesstoday/images/story/202210/untitled-5-sixteen_nine.jpg?size=948:533" alt="Cricket Match" >
    <div class="overlay">
      <h3>India beats England by 10 wickets in 3rd Test</h3>
      <p>India cruises to victory in Ahmedabad to take a 2-1 lead in the series.</p>
      <span class="date">Feb 26, 2023</span>
    </div>
</div> -->

<div class="news-container">
    <div class="news-item">
      <img src="group1.jpeg" alt="News Image 1">
      <div class="news-text">
        <h3>Cricket team wins championship</h3>
        <p> Team Spirit leads to won the match </p>
        <a href="#">Read More</a>
      </div>
    </div>
    
    <div class="news-item">
      <img src="cric2.jpeg" alt="News Image 2">
      <div class="news-text">
        <h3>Player Riteesh joins in Gully Cricket</h3>
        <p> After Severe Injury Riteesh Joins to the cse team again</p>
        <a href="#">Read More</a>
      </div>
    </div>

    <div class="news-item">
        <img src="cric3.jpeg" alt="News Image 2">
        <div class="news-text">
          <h3>Cricket Everywhere</h3>
          <p> Cricket evolved all streets in India effectively </p>
          <a href="#">Read More</a>
        </div>
      </div>
</div>

<div class="slideshow-container">
  <div class="slide fade">
    <img src="grp2.jpeg" alt="Cricket Image 1">
  </div>
  <div class="slide fade">
    <img src="gully.jpg" alt="Cricket Image 2">
  </div>
  <div class="slide fade">
    <img src="Domestic-Cricket-10.jpg" alt="Cricket Image 3">
  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
</div>


<div class="footer">
<img src="data:image/png;base64,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" width="30px" height="30px">

<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIUAAACFCAMAAABCBMsOAAAATlBMVEX///9VrO9Pqu9JqO71+v3N5PlfsfBFpu75/P7X6vrf7vtar++WyfTl8fzI4vmkz/WCwPPw9/1qtPDB3vix1vd0uPCNxfO42vc4ou3o9PslbvA8AAAE9klEQVR4nO1baZerIAxVsOJakbrU//9HH9pVJwngMsM5z/txpuIlhOwGwYkTJ06cOPFfIxqy9DIizYboL95fXiup4jxkD4R5rGR1LX+RS913iguu3/0NxvTfVNfXv0Ehq9QPAt9UhFBVdiyF+tYylMGHCWtvx0kkamJhovAkIuLqGBWJKs6tKDzA+QE8oiZ04TDxCJudeaTKlcPEQ6U7ckgKsYLDiHuR7EUidT6MD1i4kzgabncxEBq82YOEXHsaLwi5mcOQbxHEUxx5uY1EFm8noWnEm2x6Fu5BYtTRDTSyTXo5o8FX09hLEhONtdIYdtGJN414WMVih9sxo5GvISH3JaFprLAbzXqrjcHdiqb7k9DScPQpyY7X44tF6OZhiyNEoWkULiTSrR4Mg3A4k0gdRCIMlX0QeMD9eMH+nkTrXjAmZ8LseWyFUa0RBROqaPq+6vKvnAXIoHhlKYoVJBjr0uctjC7yuQDjbQvQsBPGCq1g+Uz3ey0DfT7qGgC/tdOMOobew6v0jpLgcmGNSiXaShProRsf2+SwN9BW8DLoMRmxJQl9LNObSvDn4mbBAjhK/aI2QY+KYWqfSLDEwFoziQy8amzS7Ct4KBzbW3u/ywZazBx2wRvm/fTPFIh8sK0NXXdLQMky82VVoCzE9fHfUv4gKXp4oXpUlg48XmUiUcN+7MVCm7T7YmFOxJMNsprploB3a3bJSzkr6LAWt0IV4po5Ir43QBEuAoO0/VJ9Iprs0Kvd0SQiWC30Uc52fJFvt4Wv+FOFkNV+oMSevC/Ck6Fp+cQElUWCbGgEp9PnKxZkAS8bbkUb4/uiWHyUHQTu1Bn4YF2mKRLRRqA/esqCthhoKqRdpGMhNcpxFoYECZMiK5TI3RLNmoi6aLuFSlFk0aWTTiWZEo8EtHenLsmASdHKG8+BKvoIUq4ZKkKndGYCHb1SbjVFlbN1rp6SOT+ZsV7QJ12Sqglw4PhmcVnFwiZAmoFO+leyCJnJDy5Aq8VaFibbvwTFwcSC2oBTDeRCZ/0kC/SOTE+6HAoSp1jtCLUXj0dFS23hG7Upv6PsBWo7JxKtVEraFU9NtSDSdlLe2KVSCCdlXyD9COpTHzSs1RONOF8r0bkAbXZtLZexTGkQK21rLCsgibGAbliIdMdESjrfirFCaIg70RjcQRqk6XsuQ9thLB/57MLYqDXeD3M+YrJ5owVt+6HGV0ksGhqm3AzLU2driHuOCiQBizALGPNUJGefseAFKoraqh9vzNlpuzXug0lcM0qrJpe5fkHWGXVqxDtCOy92TS6LWg5c1+JCCJ7LivSpZjvxZGHhESH1KrIyKyM6DLce0bByBFC9kylTYDEUxqmhF6wyLDCE1wEO9WxWWI4NjbCq/SL6yXhYwUWC8qZcOuGWHRK0PcK5Kq5D8kUlqdOmzR3kEFr3BKhSyjgkJ4uq6W99UxVScYu2zIKEZX/E0Ctio9UYLy43j7FBsG6cedE3M/v39XDoIfrRTz2st8zdijF+9NmPmTngznNsXsxfeDKL4slcjiczSkG2ozQ2TK95MbvmyRyfJzONnsx3Bn7Mumo0q4KZtyD2mfvdNgPN95qB9mQePPBjNj7w5DuBwI9vJiYeDt+PqAPk8ML4LY3Rt+hfHPktzYSsUULQ3xU1B39X9IAH31g94MH3Zh8uf/zt3YkTJ06cOOER/gHGGj7Yxoe6KQAAAABJRU5ErkJggg==" width="30px" height="30px">

<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAACCCAMAAAC93eDPAAAAllBMVEX////+AAAAAAAiIiISEhIlJSX/wcG9vb0WFhYeHh5EREQoKCiHh4d3d3ePj4/w8PBqamrJycnS0tL/+PgJCQn/zMz/8/Ph4eH39/f/7e3/5ub+V1cxMTH/0tL9p6f+ISH+Y2P/2tr+EhL+Tk6jo6O0tLQ5OTn+PDz+tLT+enpgYGBOTk7+mpr+kZD+i4v/hYX+MDD+cG+YHjZtAAAEbUlEQVR4nO2Za3OqOhSGYwANhpuAghZRFLyAre3//3NnBWyne9oDMQl7zpnJ6wcxAddjWDcDQlpaWlpaWlpaWlpa42i9KbbL6eVyyUG32+vb/X5tdb+/vd5ubBQmp8ttsVmrtRwV0/y6P+92h8OEU4fDbnfeX/NpEakAyI/cln9hOebSEMVZ3H6ncyFHsJQFYFrKEGxUEEwmGwmEvRqEvThBoYZgMhF3h7sqhLsoQfSiCuFFNDI3O1UIO1GHLFQRiDvDVB3CVBDhpg7hJohwVYdwFUToT0xPFY+9IEK/ken2CYjzOAhQx7mjVhAheh9AgD6KN3++i+Wmdf9v7OKs4KtkO7FObiA5fob6lMclBNNj0d+wfWWb6HUY4SCWHnkRYL0GM8joCHDucRSEbf+3/pn2o0t//GzHR0Bo9aYeYaB7/ln8+lxCrIt+GiHK/917/g7Css8lxRCe84X1R+/ZYr7wTFBGA8Vi9LwQXYZK5tgI2+FmXxCBs0ytefo7wTLFVax5atREuFhztCxo2n/OlwRblsHGjbdfmYzVOy5XTzT5ogj9jr5/5h/niyDCf+CvDJ+zc+lVEOGiDuEiiKBku62T6KbbRmLP808dRLc4VgM9Kb+OK0EE1N8CPKEPUQJ12yyimywgzgowpHdxAlUxIbUJrWS7SXSj6aFcniCXI4CCLLkF+yL5OKLVOr/vhfzyfX/P1T2kiqJVUSwvOXsmdv3YM72Ajg+x43bw48qelOWXZVGsIhXPpYawAKwVOxrdnJaWltb/Wf5iESr+Ss9xE3ibuW7505zz0Le5Gca1YoQAY/b9dYx/QcAmaYWDbwhG8ONEOVXYduHtZOHkJ4JhUItSahF3TITENhofJYaR/TKZpmhukCqF9xER0towEzQzifP7/NwwZ98/j4CAPIIXyCHMUFKVFbsdaRiGKUrCMHkg+O1hO9AihGXV8c/KUkF8hJh4aG5TH5U4hpcHtjDGPnIw88IWYYExzIPnOgzB9bCJG7g3MAwXKFgUYtcI2w0KiWXV1II1STA1fOSZzFEfCNbcR65NGAKlWWNTtjYnwwrmFq6kEQIyD3FcIpfYHtgF7+9HsGjIRj04hBMW2JZfhtLMHBKHKOuMGc0AAnNHjy2dZ5olSmFKGiEhNDPg1pqWuQDPsE7+MEJJ4M4FNiAgmEqHjQwosygYSzElLULGhQCLVdvdKpx8aQSXUHApQDCfRTCaILBVIICTx6kQAjUhLLEtjxDGViaGQLyESZrggYDihy/wuaPx6Y5+Ku+NnwhQEBkCBAdXUAbIYUEJgdQoQ2gdvIztNjXZCVj8QmhvD2qMDqFpR8suNfntZ0UIFdhxoG+AegWr0NRZ9oWQmNSu6xPtErTdQIImIUoyg7qNwaqKrBY4Ntj9dKH6mHHQHhFsLU4YEE6YMbEBGpK2TGGnxl0fVcEFcVzLBwTyq6prCRae43VHlVP6aFYtIGIrVr/Tkg1UFfz0qvJTmG5PS8rPC7S0tLS0tLS0tLS0VOkflIlpiB30Pr4AAAAASUVORK5CYII=" width="30px" height="30px">
<p>2023 © All Rights Are Reserved To CRICKET WEBSITE FZ LLC</p>
</div>



<script src="script.js"></script>
</body>  
</html>