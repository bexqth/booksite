<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="/css/loginPage.css" rel="stylesheet">

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

        <form action="{{route('loginPostRoute')}}" method="POST" class="column text_column"> 
            @csrf
            <label class="label_text"><b>Email</b></label>
            <input class="input_text" type="text" placeholder="Enter Email" name="email" required>
        
            <label class="label_text"><b>Password</b></label>
            <input class="input_text" type="password" placeholder="Enter Password" name="password" required>
        
            <button class="button_submit" type="submit">Login</button>
            <label>
                <input class="checkbox_remember" type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <a href="/register">dont have account? Sing in!</a>
        </form>
    </div>
    

</body>
</html>