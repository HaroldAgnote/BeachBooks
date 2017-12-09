DROP TABLE IF EXISTS `Exchange`;
DROP TABLE IF EXISTS `BookCover`;
DROP TABLE IF EXISTS `Copy`;
DROP TABLE IF EXISTS `Book`;
DROP TABLE IF EXISTS `Classes`;
DROP TABLE IF EXISTS `Request`;
DROP TABLE IF EXISTS `Seller`;
DROP TABLE IF EXISTS `Buyer`;
DROP TABLE IF EXISTS `Client`;
DROP TABLE IF EXISTS `SystemAdmin`;
DROP TABLE IF EXISTS `Users`;

-- Create the table for Users
CREATE TABLE Users (
    UserID varchar(30) NOT NULL,
    Password varchar(30) NOT NULL,
	UserName varchar(50) NOT NULL,
    LoginStatus boolean,
	
    PRIMARY KEY (UserID));

-- Create the table for SystemAdmin
CREATE TABLE SystemAdmin (
    AdminName varchar(40),
    AdminEmail varchar(60),
    UserID varchar(30),

    PRIMARY KEY (UserID, AdminName),
    FOREIGN KEY (UserID) REFERENCES Users(UserID));

-- Create the table for Client
CREATE TABLE Client (
    ClientName varchar(40),
    ClientEmail varchar(60),
    UserID varchar(30),

    PRIMARY KEY (UserID),
    FOREIGN KEY (UserID) REFERENCES Users(UserID));

-- Create the table for Buyer
CREATE TABLE Buyer (
    BuyerID varchar(30),
    UserID varchar(30),

    PRIMARY KEY (BuyerID),
    FOREIGN KEY (UserID) REFERENCES Client(UserID));

-- Create the table for Seller
CREATE TABLE Seller (
    SellerID varchar(30),
    UserID varchar(30),

    PRIMARY KEY (SellerID),
    FOREIGN KEY (UserID) REFERENCES Client(UserID));

-- Create the table for Request 
CREATE TABLE Request (
    RequestStatus boolean,
    RequestID varchar(30),
    BuyerID varchar(30),

    PRIMARY KEY (RequestID),
    FOREIGN KEY (BuyerID) REFERENCES Buyer(BuyerID));

-- Create the table for Book
CREATE TABLE Book (
    BookID varchar(30),
    title varchar(50),
    author varchar(30),
    ISBN integer,
    Edition varchar(30),
    Publisher varchar(30),
    PublishDate varchar(30),
    MSRP decimal,

    PRIMARY KEY (BookID));

-- Create the table for Classes
CREATE TABLE Classes (
    ClassSubjNum varchar(30),
    CourseName varchar(30),
    BookID varchar(30),
    
    PRIMARY KEY (BookID, ClassSubjNum),
    FOREIGN KEY (BookID) REFERENCES Book(BookID));

-- Create the table for Copy
CREATE TABLE Copy (
    Conditions varchar(30),
    SellingPrice integer,
    CopyID  varchar(30),
    SellerID varchar(30),
    BookID varchar(30),

    PRIMARY KEY (CopyID),
    FOREIGN KEY (BookID) REFERENCES Book(BookID),
    FOREIGN KEY (SellerID) REFERENCES Seller(SellerID));

-- Create the table for BookCover (repeated att w/in Copy)
CREATE TABLE BookCover (
    URL varchar(90),
    CopyID varchar(30),

    PRIMARY KEY (CopyID, URL),
    FOREIGN KEY (CopyID) REFERENCES Copy(CopyID));

-- Create TEMP table for Exchange
CREATE TABLE Exchange (
    Exchange varchar(30),
    CopyID varchar(30),
    RequestID varchar(30),
    ExchangeOccurred boolean,

    PRIMARY KEY (RequestID, CopyID),
    FOREIGN KEY (RequestID) REFERENCES Request(RequestID),
    FOREIGN KEY (CopyID) REFERENCES Copy(CopyID));
