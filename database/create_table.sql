DROP TABLE IF EXISTS `Exchange`;
DROP TABLE IF EXISTS `BookCover`;
DROP TABLE IF EXISTS `Request`;
DROP TABLE IF EXISTS `Copy`;
DROP TABLE IF EXISTS `Classes`;
DROP TABLE IF EXISTS `Book`;
DROP TABLE IF EXISTS `Seller`;
DROP TABLE IF EXISTS `Buyer`;
DROP TABLE IF EXISTS `Client`;
DROP TABLE IF EXISTS `SystemAdmin`;
DROP TABLE IF EXISTS `Users`;

-- Create the table for Users
CREATE TABLE Users (
    UserID int NOT NULL AUTO_INCREMENT,
    Password varchar(30) NOT NULL,
	UserName varchar(50) NOT NULL,
    LoginStatus boolean,
	
    PRIMARY KEY (UserID, UserName));

-- Create the table for SystemAdmin
CREATE TABLE SystemAdmin (
    AdminName varchar(40),
    AdminEmail varchar(60),
    UserID int,

    PRIMARY KEY (UserID, AdminName),
    FOREIGN KEY (UserID) REFERENCES Users(UserID));

-- Create the table for Client
CREATE TABLE Client (
    ClientName varchar(40),
    ClientEmail varchar(60),
    UserID int,

    PRIMARY KEY (UserID),
    FOREIGN KEY (UserID) REFERENCES Users(UserID));

-- Create the table for Book
CREATE TABLE Book (
    BookID int AUTO_INCREMENT,
    title varchar(100),
    author varchar(30),
    ISBN varchar(30),
    Edition varchar(30),
    Publisher varchar(30),
    PublishDate varchar(30),
    MSRP decimal,

    PRIMARY KEY (BookID));

-- Create the table for Classes
CREATE TABLE Classes (
    ClassSubjNum varchar(30),
    CourseName varchar(100),
    BookID int,
    
    PRIMARY KEY (BookID, ClassSubjNum),
    FOREIGN KEY (BookID) REFERENCES Book(BookID));

-- Create the table for Copy
CREATE TABLE Copy (
    Conditions varchar(30),
    SellingPrice integer,
    CopyID  int AUTO_INCREMENT,
    SellerID int,
    BookID int,

    PRIMARY KEY (CopyID),
    FOREIGN KEY (BookID) REFERENCES Book(BookID),
    FOREIGN KEY (SellerID) REFERENCES Client(UserID));

-- Create the table for BookCover (repeated att w/in Copy)
CREATE TABLE BookCover (
    URL varchar(90),
    CopyID int,

    PRIMARY KEY (CopyID, URL),
    FOREIGN KEY (CopyID) REFERENCES Copy(CopyID));

-- Create the table for Request 
CREATE TABLE Request (
    RequestStatus boolean,
    RequestID int AUTO_INCREMENT,
    BuyerID int,
    CopyID int,

    PRIMARY KEY (RequestID),
    FOREIGN KEY (BuyerID) REFERENCES Client(UserID),
    FOREIGN KEY (CopyID) REFERENCES Copy(CopyID));

-- Create TEMP table for Exchange
CREATE TABLE Exchange (
    ExchangeID int AUTO_INCREMENT,
    RequestID int,
    ExchangeOccurred boolean,
    ExchangeDate DATE,
    ExchangeTime VARCHAR(6),
    ExchangeInformation TEXT,

    PRIMARY KEY (ExchangeID),
    FOREIGN KEY (RequestID) REFERENCES Request(RequestID));
