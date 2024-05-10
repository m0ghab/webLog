<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Article</title>
    <link rel="stylesheet" href="../Css/new-article.css">
</head>
<body>
    <section class="main">
        <form action="../index.php" method="post">
            <div class="style_input-image">
                <P>Upload your paper photo:</P>
                <input   type='file' class="input-image" >
            </div>
            <div class="style_input-text">
                <p>What is the subject of this article?</p>
                <input type="text" class="input-text" placeholder="Subject">
            </div>
            <div class="style_textarea">
                <p>Write the text of your article.</p>
                <textarea name=""  id="" placeholder="Article text"></textarea>
            </div>
            <input type="submit" value="Publishing Article" class="input_submit" >
        </form>    

    </section>
    <section class="footer">
        <div class="footer_logo">
            <a class="logo" href="#" class="icon">
                <img class="logo_footer" src="../Icons/blog(1).png" alt="">
                <h1>WEBLOG</h1>
            </a> 
            
            <p class="footer_copyR">All Rights Reserved.</p>
        </div>
        <div class="footer_developer">
            <h3 class="footer--h3">Developer:</h3>
            <p><b>Name:</b> Hossein Rahimi</p>
            <P><b>Email:</b> hosseinrahimi@gmail.com</P>
            <P><b>Phone number:</b> 09170656278</P>
        </div>
        <div class="about-us">
            <h3 class="footer--h3">About Us</h3>
            <p>This site is an academic project for a web-based programming course that focuses on the php language.</p>
            <p>And this site is about writing articles and uploading them on the site.</p>
        </div>
    </section>
</body>
</html>