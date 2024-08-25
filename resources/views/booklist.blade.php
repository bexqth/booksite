<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
    <link href="/css/booklistPage.css" rel="stylesheet">
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
            <div class="optionList">
                <div class ="button-container">
                <button class="optionButton buttonDashboard">Fiction</button>
                <button class="optionButton buttonSubjects">Romance</button>
                <button class="optionButton buttonToDo">Classics</button>
                <button class="optionButton buttonTests">Fantasy</button>
                <button class="optionButton buttonAssignment">Historical Fiction</button>
                </div>
            </div>
        
            <div class="booklist_container">
                <div class="headTile">
                <h2 class="booklistTitle">Booklist</h2>
                </div>
                
                <div class="cards">
                    @foreach($books as $book)
                        <div class="card">
                            <a href="{{ route('books.show', $book->isbn) }}">
                                <img src="{{ $book->cover_image }}" alt="{{ $book->title }}">
                                <p class="bookTitle">{{ $book->title }}</p>
                                <p class="bookAuthor">{{ $book->author }}</p>
                            </a>
                            <button class="addButton">add to read</button>
                        </div>
                    @endforeach
                </div>
        
            </div>
        </div>

</body>
</html>
