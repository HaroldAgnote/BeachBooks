INSERT INTO Users 
    (Password, UserName, LoginStatus)
VALUES
    ('hagnote', 'hagnote', NULL),
    ('athrekeld', 'athrekeld', NULL),
    ('sadame', 'sadame', NULL),
    ('sperez', 'sperez', NULL),
    ('sgomez', 'sgomez', NULL); 

INSERT INTO Client
    (ClientName, ClientEmail, UserID)
VALUES
    ('Harold Agnote', 'harold@beachbooks.com', 1),
    ('Aimee Threlkeld', 'aimee@beachbooks.com', 2),
    ('Sebastian Adame', 'sebastian@beachbooks.com', 3),
    ('Sergio Perez', 'sergio@beachbooks.com', 4),
    ('Stephanie Gomez', 'stephanie@beachbooks.com', 5);


INSERT INTO Book
    (title, author, ISBN, Edition, Publisher, PublishDate, MSRP)
VALUES
    ('Title1', 'Neal Terrell',    100, '1st', 'Publisher1', '2010-12-11', 20.00),
    ('Title2', 'Joshua Hayter',   101, '1st', 'Publisher2', '2012-11-31', 50.00),
    ('Title3', 'Eric Hernandez', 102, '2nd', 'Publisher1', '2012-01-11', 50.00),
    ('Title4', 'Tom Johnson',    103, '3rd', 'Publisher3', '2010-03-21', 50.00),
    ('Title5', 'Daniel Cregg',   104, '2nd', 'Publisher4', '1990-01-11', 25.00);



    -- Inserting Fake Classes (Repeated Att)
    -- CLASSES: ClassSubjNum, CourseName, BookID
INSERT INTO Classes
    (ClassSubjNum, CourseName, BookID)
VALUES
    ('CECS 100', 'Crit Think in Digital Age', 1),
    ('CECS 105', 'Intro to CECS', 2),
    ('CECS 174', 'Intro Prog & Problem Solv', 3),
    ('CECS 274', 'Intro Prog & Problem Solv II', 3 ),
    ('CECS 200', 'Int Web Design', 4),
    ('CECS 201', 'Comp Logic Design I', 5);



    -- Inserting Copy Books
    -- COPY: Conditions, SellingPrice, CopyID, SellerID, BookID
INSERT INTO Copy
    (Conditions, SellingPrice, SellerID, BookID)
VALUES
    ('Good',      10.00,  1, 1),
    ('Bad',       25.00,  1, 1),
    ('Excellent', 100.00, 2, 4),
    ('Excellent', 100.00, 2, 5);


    -- Inserting Fake BookCover (Repeatd Att)
    -- BOOKCOVER: URL, CopyID
INSERT INTO BookCover
    (URL, CopyID)
VALUES
    ('https://images.tandf.co.uk/common/jackets/amazon/978084932/9780849326912.jpg', 1),
    ('http://www.cl.cam.ac.uk/~rja14/Papers/book2coverlarge.jpg',2),
    ('http://win.ua.ac.be/~sdemey/imagesPriv/swEvolBookCover.jpg',3),
    ('http://www.freetechbooks.com/uploads/1482396498-61EzGYVPF9L._SX379_BO1,204,203,200_.jpg',4);
