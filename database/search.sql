SELECT c.ClientName, b.Title, b.Author, b.Edition, cl.ClassSubjNum, co.Conditions, bc.URL 
FROM Client c
INNER JOIN Seller s
ON c.UserID = s.UserID
INNER JOIN Copy co
ON s.SellerID = co.SellerID
INNER JOIN Book b
ON co.BookId = b.BookId
INNER JOIN Classes cl
ON cl.BookID = b.BookID
INNER JOIN BookCover bc
on co.CopyId = bc.CopyId
WHERE b.title LIKE '%Aimee%'
OR 
b.author LIKE '%Aimee%'
OR
c.ClientName LIKE '%Aimee%'
OR
cl.ClassSubjNum LIKE '%Aimee%';

