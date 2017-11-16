SELECT c.ClientName, b.Title, b.Author, b.Edition, cl.ClassNameNum, co.Conditions FROM Client c
INNER JOIN Seller s
ON c.UserID = s.UserID
INNER JOIN Copy co
ON s.SellerID = co.SellerID
INNER JOIN Book b
ON co.BookID = b.BookID
INNER JOIN Classes cl
ON cl.ClassID = b.ClassID;
