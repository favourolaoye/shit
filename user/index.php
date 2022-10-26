<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="landing.css">
    <link rel="stylesheet" href="remix-icon/remixicon.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <span>Annals Of Research Journals</span>
            </div>
          
            <nav>
                <a href="home.php">Journals</a>
                <a href="about.php">About</a>
            </nav>
        </div>

    </header>
    <div class="overlay"></div>
    <div class="hero-container">


        <div class="hero-content">
            <h1>Annals of Research Journal (ARJ)<br>Journal Publication of FCAH&PT, Ibadan</h1>
            <p>Find the best journals on research in your field of specialization  to help your writing career [<span class="colored-text">Agriculture</span>]</p>
            <a href="home.php">Explore</a>
        </div>

    </div>
    <span class="bottom-text">Developed by <a href="https://www.pyvot360.org" target="_blank">Pyvot360</a></span>
</body>
<script>
const body=document.querySelector('body');
const text=document.querySelector('.colored-text');
let count=2,
text_count=1;
setInterval(()=>{
    if(count>12) count=1;
   body.style.backgroundImage=`url(images/${count}.jpg)`;
   count++;
},5000)
setInterval(()=>{
    const words=["Agriculture","Science","Engineering","Information Technology"];
    if(text_count>3) text_count=0;
    text.textContent=`${words[text_count]}`
   text_count++;
},15000)

</script>
</html>
