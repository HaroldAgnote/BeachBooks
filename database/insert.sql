-- Inserting Fake Users
-- USER: UserID, Password, LoginStatus
INSERT INTO Users VALUES ('U0000', 'test0', NULL);
INSERT INTO Users VALUES ('U0001', 'test1', NULL);
INSERT INTO Users VALUES ('U0002', 'test2', NULL);
INSERT INTO Users VALUES ('U0003', 'test3', NULL);
INSERT INTO Users VALUES ('U0004', 'test4', NULL);
INSERT INTO Users VALUES ('U0005', 'test5', NULL);
INSERT INTO Users VALUES ('U0006', 'test6', NULL);
INSERT INTO Users VALUES ('U0007', 'test7', NULL);
INSERT INTO Users VALUES ('U0008', 'test8', NULL);
INSERT INTO Users VALUES ('U0009', 'test9', NULL);
INSERT INTO Users VALUES ('U000A', 'testA', NULL);

-- Inserting Fake SystemAdmin 
-- SYSTEMADMIN: AdminName, AdminEmail, UserID
INSERT INTO SystemAdmin VALUES ('Ted Cruz', 'ZodiacKiller@hotmail.com', 'U0000');

-- Inserting Fake Clients
-- CLIENT: ClientName, ClientEmail, UserID
INSERT INTO Client VALUES ('Aimee Threlkeld',   'Threlkeld@hotmail.com', 'U0001');
INSERT INTO Client VALUES ('Stephanie Gomez',   'Gomez@hotmail.com',     'U0002');
INSERT INTO Client VALUES ('Harold Agnote',     'Agnote@hotmail.com',    'U0003');
INSERT INTO Client VALUES ('Sebastian Adame',   'Adame@hotmail.com',     'U0004');
INSERT INTO Client VALUES ('Neil Wong',         'Wong@hotmail.com',      'U0005');
INSERT INTO Client VALUES ('Christian Garcia',  'Garcia@hotmail.com',    'U0006');
INSERT INTO Client VALUES ('Anel Ruiz',         'Ruiz@hotmail.com',      'U0007');
INSERT INTO Client VALUES ('Donielle LaCuesta', 'TheDon@hotmail.com',    'U0008');
INSERT INTO Client VALUES ('Sergio Perez',      'Perez@hotmail.com',     'U0009');
INSERT INTO Client VALUES ('John Rochin',       'Rochin@hotmail.com',    'U000A');

-- Inserting Fake Buyers
-- BUYER: BuyerID, UserID
INSERT INTO Buyer VALUES ('B001', 'U0001'); -- Aimee Threlkeld is a buyer (both)
INSERT INTO Buyer VALUES ('B002', 'U000A'); -- John Rochin is a buyer (just a buyer)

-- Inserting Fake Sellers
-- SELLER: SellerID, UserID
INSERT INTO Seller VALUES ('S001', 'U0001'); -- Aimee Threlkeld is a seller (both)
INSERT INTO Seller VALUES ('S002', 'U0005'); -- Neil Wong is a seller (just a seller)

-- Inserting Fake Books
-- BOOKS: BookID, Title, Author, ISBN, Edition, Publisher, PublishDate, MSRP
INSERT INTO Book VALUES ('BK0001', 'Title1', 'Neil Terrel',    100, '1st', 'Publisher1', '2010-12-11', 20.00);
INSERT INTO Book VALUES ('BK0002', 'Title2', 'Johua Hayter',   101, '1st', 'Publisher2', '2012-11-31', 50.00);
INSERT INTO Book VALUES ('BK0003', 'Title3', 'Eric Hernandez', 102, '2nd', 'Publisher1', '2012-01-11', 50.00);
INSERT INTO Book VALUES ('BK0004', 'Title4', 'Tom Johnson',    103, '3rd', 'Publisher3', '2010-03-21', 50.00);
INSERT INTO Book VALUES ('BK0005', 'Title5', 'Daniel Cregg',   104, '2nd', 'Publisher4', '1990-01-11', 25.00);

-- Inserting Fake Classes (Repeated Att)
-- CLASSES: ClassSubjNum, CourseName, BookID
INSERT INTO Classes VALUES ('CECS 100', 'Crit Think in Digital Age', 'BK0001');
INSERT INTO Classes VALUES ('CECS 105', 'Intro to CECS', 'BK0002');
INSERT INTO Classes VALUES ('CECS 174', 'Intro Prog & Problem Solv', 'BK0003');
INSERT INTO Classes VALUES ('CECS 274', 'Intro Prog & Problem Solv II', 'BK0003' );
INSERT INTO Classes VALUES ('CECS 200', 'Int Web Design', 'BK0004');
INSERT INTO Classes VALUES ('CECS 201', 'Comp Logic Design I', 'BK0005');

-- Inserting Copy Books
-- COPY: Conditions, SellingPrice, CopyID, SellerID, BookID
INSERT INTO Copy VALUES ('Good',      10.00,  'CY001', 'S001', 'BK0001');
INSERT INTO Copy VALUES ('Bad',       25.00,  'CY002', 'S001', 'BK0001');
INSERT INTO Copy VALUES ('Excellent', 100.00, 'CY003', 'S002', 'BK0004');
INSERT INTO Copy VALUES ('Excellent', 100.00, 'CY004', 'S002', 'BK0005');

-- Inserting Fake BookCover (Repeatd Att)
-- BOOKCOVER: URL, CopyID
INSERT INTO BookCover Values ('https://images.tandf.co.uk/common/jackets/amazon/978084932/9780849326912.jpg', 'CY001');
INSERT INTO BookCover Values ('http://www.cl.cam.ac.uk/~rja14/Papers/book2coverlarge.jpg','CY002');
INSERT INTO BookCover Values ('http://win.ua.ac.be/~sdemey/imagesPriv/swEvolBookCover.jpg','CY003');
INSERT INTO BookCover Values ('http://www.freetechbooks.com/uploads/1482396498-61EzGYVPF9L._SX379_BO1,204,203,200_.jpg','CY004');
