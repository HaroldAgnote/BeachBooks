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
    ('Starting out with Python Student Value Ed', 'Tony Gaddis', 9780134444468,'4th','Pearson',NULL, 116.00),
    ('Basics Of Web Design: Html5 & Css3', 'Terry Felke-Morris', 9780133970746, '3rd', 'Pearson',NULL ,100.00 ),
    ('Digital Design', 'M. Morris Mano',9780134549897 , '6th', 'Pearson', NULL,214.00 ),
    ('Grob’s Basic Electronics', 'Mitchel E. Schultz', 9781259229534, '12', 'Mcgraw Hill', NULL, 150.27 ),
    ('Digital Design and Computer Architecture', 'Sarah L. Harris', 9780123944245, '2nd', 'Morgan K', NULL, 70),
    ('Discrete Mathematics and Its Applications', 'Kenneth H. Rosen', 9780077431440, '7th', 'Mcgraw Hill', NULL, 182),
    ('Coding the Matrix', 'Philip N. Klein', 9780615880990, '1st', 'Newtonian', NULL,33.25 ),
    ('The 8051 Microcontroller and Embedded Systems', 'Muhammad Ali Mazidi', 9780131194021, '2nd', 'Prentice Hall', NULL,147.60 ),
    ('Using R for Numerical Analysis in Science and Engineering', 'Victor A. Bloomfield', 9781439884485, '1st', 'Touchstone', NULL,52.20 ),
    ('Big Java: Early Objects ', 'Cay Horstmann', 9781119141587, '6th', 'Wiley', NULL,89.68 ),
    ('Starting Out W/ C++ From Control Structures through Objects', 'Tony Gaddis', 9780133778816, '8th', 'Pearson', NULL,36.31 ),
    ('Big Java: Early Objects ', 'Cay Horstmann', 9781119141587, '6th', 'Wiley', NULL,89.68 ),
    ('C++ for Java Programmers', 'Timothy A. Budd', 9780201612462, NULL, NULL, NULL,103.82 );

    --  ('Height of the Tree', 'Neal Terrell',    100, '1st', 'Publisher1', '2010-12-11', 20.00),
    --  ('Mhmm, Absolutely!', 'Joshua Hayter',   101, '1st', 'Publisher2', '2012-11-31', 50.00),
    --  ('The Book of PVC Pipes', 'Eric Hernandez', 102, '2nd', 'Publisher1', '2012-01-11', 50.00),
    --  ('Cars', 'Tom Johnson',    103, '3rd', 'Publisher3', '2010-03-21', 50.00),
    --  ('Why I Like being a Spy', 'Daniel Cregg',   104, '2nd', 'Publisher4', '1990-01-11', 25.00);



    -- Inserting Fake Classes (Repeated Att)
    -- CLASSES: ClassSubjNum, CourseName, BookID
INSERT INTO Classes
    (ClassSubjNum, CourseName, BookID)
VALUES
    ('CECS 100', 'Crit Think in Digital Age', 1),
    ('CECS 110','Beginning Web Design', 2),
    ('CECS 201','Comp Logic Design I', 3),
    ('CECS 211','Principles of Computer Engineering I', 4),
    ('CECS 228','Discrete Structures with Computing Applications', 6),
    ('CECS 229','Discrete Structures with Computing Applications II', 7),
    ('CECS 262','Introduction to Embedded System Programming', 8),
    ('CECS 271','Introduction to Numerical Methods', 9),
    ('CECS 274','Object Oriented Programming and Data Structures', 10),
    ('CECS 275','Programming and Data Structures in C++', 11),
    ('CECS 277','Object Oriented Application Development', 12),
    ('CECS 282','C++ for Java Programmers', 13);

    

    --  ('CECS 105', 'Intro to CECS', 2),
    --  ('CECS 174', 'Intro Prog & Problem Solv', 3),
    --  ('CECS 274', 'Intro Prog & Problem Solv II', 3 ),
    --  ('CECS 200', 'Int Web Design', 4),



    -- Inserting Copy Books
    -- COPY: Conditions, SellingPrice, CopyID, SellerID, BookID
INSERT INTO Copy
    (Conditions, SellingPrice, SellerID, BookID)
VALUES
    ('Excellent',      0.00,  1, 1),
    ('Good',      10.00,  2, 1),
    ('Bad',      100.00,  3, 1),
    ('Fair',      20.00,  4, 1),
    ('Good',      10.00,  5, 1),

    ('Good',       25.00,  2, 2),

    ('Excellent', 55.00, 2, 3),
    ('Good', 121.00, 4, 3),
    ('Fair', 11.50, 5, 3),

    ('Excellent', 11.50, 2, 4),
    ('Excellent', 11.50, 4, 4),

    ('Good', 12.50, 1, 5),
    ('Fair', 10.40, 3, 5),

    ('Excellent', 7.50, 1, 6),

    ('Good', 7.50, 1, 7),
    ('Fair', 8.50, 3, 7),

    ('Poor', 3.10, 2, 8),
    ('Good', 10.00, 4, 8);


    -- Inserting Fake BookCover (Repeatd Att)
    -- BOOKCOVER: URL, CopyID
INSERT INTO BookCover
    (URL, CopyID)
VALUES
    ('https://www.pearsonhighered.com/assets/bigcovers/0/1/3/4/0134543661.jpg', 1),
    ('https://www.pearsonhighered.com/assets/bigcovers/0/1/3/4/0134543661.jpg', 2),
    ('https://www.pearsonhighered.com/assets/bigcovers/0/1/3/4/0134543661.jpg', 3),
    ('https://www.pearsonhighered.com/assets/bigcovers/0/1/3/4/0134543661.jpg', 4),
    ('https://www.pearsonhighered.com/assets/bigcovers/0/1/3/4/0134543661.jpg', 5),

    ('http://www-fp.pearsonhighered.com/assets/hip/images/bigcovers/0133970744.jpg',6),

    ('https://images-na.ssl-images-amazon.com/images/I/41881MC9Q5L.jpg', 7), 
    ('https://images-na.ssl-images-amazon.com/images/I/41881MC9Q5L.jpg', 8), 
    ('https://images-na.ssl-images-amazon.com/images/I/41881MC9Q5L.jpg', 9), 

    ('https://images-na.ssl-images-amazon.com/images/I/51r1bnnpfaL._SX389_BO1,204,203,200_.jpg', 10),
    ('https://images-na.ssl-images-amazon.com/images/I/51nSnO5i7eL._SX403_BO1,204,203,200_.jpg', 11),

    ('https://images-na.ssl-images-amazon.com/images/I/91H1%2Be4fj2L.jpg', 12),
    ('https://images-na.ssl-images-amazon.com/images/I/91H1%2Be4fj2L.jpg', 13),

    ('https://images-na.ssl-images-amazon.com/images/I/51nSnO5i7eL._SX403_BO1,204,203,200_.jpg', 14),

    ('https://d3f1iyfxxz8i1e.cloudfront.net/courses/course_image/8696292edf7d.jpg', 15),
    ('https://d3f1iyfxxz8i1e.cloudfront.net/courses/course_image/8696292edf7d.jpg', 16),

    ('http://www.circuitstoday.com/wp-content/uploads/2012/05/mazidi-8051.jpg', 17),
    ('http://www.circuitstoday.com/wp-content/uploads/2012/05/mazidi-8051.jpg', 18);


    
