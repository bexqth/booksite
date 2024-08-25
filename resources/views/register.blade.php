<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="/css/registerPage.css" rel="stylesheet">

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
        <div class="column image_column">
            <img src="{{ asset('images/book_blue.jpg') }}" class="home_image">
        </div>

        <form action="{{route('registerPostRoute')}}" method="POST" class="column text_column">
            @csrf
            <label class="label_text"><b>Email</b></label>
            <input class="input_text" type="text" placeholder="Enter Email" name="email" required>

            <label class="label_text"><b>Username</b></label>
            <input class="input_text" type="text" placeholder="Enter Username" name="username" required>
        
            <label class="label_text"><b>Password</b></label>
            <input class="input_text" type="password" placeholder="Enter Password" name="password" required>
        
            <button class="button_submit" type="submit">Sing in</button>
            <a href="/login">already have an account? Log in!</a>
        </form>
    </div>
    

</body>
</html>