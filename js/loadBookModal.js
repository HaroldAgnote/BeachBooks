var books = document.getElementsByClassName("bookEntry");
for (var i = 0; i < books.length; i++) {
    book = books[i];
    bookInfo = book.childNodes;
    book.onclick = function() {
        console.log(bookInfo[3].innerHTML); 
    }
}
