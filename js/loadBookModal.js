var copy_id = 0;
$(".bookEntry").click(function () {
    var id = this.id;
    copy_id = id;
    var book = document.getElementById(id)
    var bookSeller = book.childNodes[1].innerHTML;
    var bookTitle = book.childNodes[5].innerHTML;
    var bookCover = book.childNodes[3].innerHTML;
    var bookAuthor = book.childNodes[7].innerHTML;
    var bookEdition = book.childNodes[9].innerHTML;
    console.log(copy_id);
    console.log(bookTitle);
    console.log(bookCover);

    document.getElementById("bookModalTitle").innerHTML = "Book Title: " + bookTitle;
    document.getElementById("bookModalAuthor").innerHTML = "Book Author: " + bookAuthor;
    document.getElementById("bookModalEdition").innerHTML = "Book Edition " + bookEdition;
    document.getElementById("bookModalSeller").innerHTML = "Book Seller: " + bookSeller;
    document.getElementById("bookModalCover").innerHTML = bookCover;
});
