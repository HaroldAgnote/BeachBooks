var book_id = 0;
$(".postEntry").click(function () {
    var id = this.id;
    book_id = id;
    var book = document.getElementById(id)
    var bookTitle = book.childNodes[1].innerHTML;
    var bookAuthor = book.childNodes[3].innerHTML;
    var bookEdition = book.childNodes[5].innerHTML;
    var bookCourse = book.childNodes[7].innerHTML;
    console.log(book_id);
    console.log(bookTitle);

    document.getElementById("postModalTitle").innerHTML = "Book Title: " + bookTitle;
    document.getElementById("postModalAuthor").innerHTML = "Book Author: " + bookAuthor;
    document.getElementById("postModalEdition").innerHTML = "Book Edition " + bookEdition;
    document.getElementById("postModalBookId").value = book_id;
});
