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

-- Inserting Fake Classes
-- CLASSES: ClassID, SubjectName, SubjectNum, CourseName
INSERT INTO Classes VALUES ('C001', 'CECS', 100, 'Crit Think in Digital Age');
INSERT INTO Classes VALUES ('C002', 'CECS', 105, 'Intro to CECS');
INSERT INTO Classes VALUES ('C003', 'CECS', 110, 'Beg Web Design');
INSERT INTO Classes VALUES ('C004', 'CECS', 174, 'Intro Prog & Problem Solv');
INSERT INTO Classes VALUES ('C005', 'CECS', 200, 'Int Web Design');
INSERT INTO Classes VALUES ('C006', 'CECS', 201, 'Comp Logic Design I');

-- Inserting Fake Books
-- BOOKS: BookID, Title, Author, ISBN, Edition, Publisher, PublishDate, MSRP, ClassID
INSERT INTO Book VALUES ('BK0001', 'Title1', 'Neil Terrel',    100, '1', 'Publisher1', '2010-12-11', 20.00, 'C001');
INSERT INTO Book VALUES ('BK0002', 'Title2', 'Johua Hayter',   101, '1', 'Publisher2', '2012-11-31', 50.00, 'C001');
INSERT INTO Book VALUES ('BK0003', 'Title3', 'Eric Hernandez', 102, '2', 'Publisher1', '2012-01-11', 50.00, 'C002');
INSERT INTO Book VALUES ('BK0004', 'Title4', 'Tom Johnson',    103, '3', 'Publisher3', '2010-03-21', 50.00, 'C003');
INSERT INTO Book VALUES ('BK0005', 'Title5', 'Daniel Cregg',   104, '2', 'Publisher4', '1990-01-11', 25.00, 'C006');

-- Inserting Copy Books
-- COPY: Conditions, SellingPrice, CopyID, SellerID, BookID, ClassID
INSERT INTO Copy VALUES ('Good',      10.00,  'CY001', 'S001', 'BK0001', 'C001');
INSERT INTO Copy VALUES ('Bad',       25.00,  'CY002', 'S001', 'BK0001', 'C001');
INSERT INTO Copy VALUES ('Excellent', 100.00, 'CY003', 'S002', 'BK0004', 'C003');
INSERT INTO Copy VALUES ('Excellent', 100.00, 'CY004', 'S002', 'BK0005', 'C006');

SELECT * FROM Users;
SELECT * FROM SystemAdmin;
SELECT * FROM Client;
SELECT * FROM Buyer;
SELECT * FROM Seller;
SELECT * FROM Book;
SELECT * FROM Classes;
SELECT * FROM Copy;

