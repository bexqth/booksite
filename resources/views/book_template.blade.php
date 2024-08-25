<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
    <link href="/css/book_templatePage.css" rel="stylesheet">
</head>
<body>

    <div class="header">
        <a href="#" class="logo">BookSite</a>
        <div class="navbar">
            <a href="#" class="home">Home</a>
            <a href="#" class="books">Books</a>
            <a href="#" class="account">Account</a>
            <a href="#" class="about">About</a>
        </div>
    </div>

        <div class="flexbox-container">
            <div class="book-container">
                <div>
                    <img class="bookImage" src="{{ $chosenBook->cover_image }}" alt="{{ $chosenBook->title }}">
                </div>
                <div class="bookInfo">
                    <p class="bookTitle">{{ $chosenBook->title }}</p>
                    <a href="#" class="bookAuthor">Author: {{ $chosenBook->author }}</a>
                    <p class="bookGenre">Genre: {{ $chosenBook->genre }}</p>
                    <p class="bookISBN">ISBN: {{ $chosenBook->isbn }}</p>
                    <p class="descriptionTitle">Description</p>
                    <p class="bookDescription">{{ $chosenBook->description }}</p>
                </div>
            </div>
            <div class="review-container">

            </div>
        </div>

</body>
</html>
