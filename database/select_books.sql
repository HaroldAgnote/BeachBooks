SELECT c.clientName, b.Title, b.Author, b.Edition,(COALESCE(cl.subjectname, '') || COALESCE(cl.subjectnum, '')) AS Class, co.Conditions
FROM Client c
INNER JOIN Seller s
ON c.USERID = s.USERID
INNER JOIN copy co
ON s.SELLERID = co.SELLERID
INNER JOIN book b
ON co.BOOKID = b.BOOKID
INNER JOIN classes cl
ON cl.CLASSID = b.CLASSID;
