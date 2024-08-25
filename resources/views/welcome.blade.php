<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="/css/welcomePage.css" rel="stylesheet">

</head>

<body>

     <div class="row1">
        <header class="header">
            <a href="#" class="logo">BookSite</a>
            <nav class="navbar">
                <a class="home" href="#">Home</a>
                <a class="about" href="#">About</a>
                <a class="books" href="#">Books</a>
                <a class="account" href="#">Account</a>
            </nav>
        </header>
    </div>
    <div class="row2">
        <div class="column text_column">
            <h2 class="intro_title book">BOOK</h2>
            <h2 class="intro_title">LIBRARY</h2>
            <p class="intro_text">Discover a world of books at your fingertips. At BookSite, you can explore a vast collection of books, mark your favorites as read, and share your thoughts with fellow readers. Whether you’re looking for your next great read or want to leave a review, BookSite is your go-to platform for all things books. Join our community of book lovers today and start your literary journey with us!</p>
            <button class="button">GET MORE</button>
        </div>

        <div class="column image_column">
            <img src="{{ asset('images/home_blue_image.jpg') }}" class="home_image">
        </div>
    </div>
    

</body>
</html>