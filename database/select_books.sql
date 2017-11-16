SELECT clientName, Title, Author, Edition,(COALESCE(cl.subjectname, '') || COALESCE(cl.subjectnum, '')) AS course, Conditions
FROM Client c
INNER JOIN Seller s
ON c.USERID = s.USERID
INNER JOIN Copy co
ON s.SELLERID = co.SELLERID
INNER JOIN Book b
ON co.BOOKID = b.BOOKID
INNER JOIN Classes cl
ON cl.CLASSID = b.CLASSID;
