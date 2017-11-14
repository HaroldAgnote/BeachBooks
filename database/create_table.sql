DROP TABLE Exchange IF EXISTS Exchange;
DROP TABLE Copy IF EXISTS Copy;
DROP TABLE Seller IF EXISTS Seller;
DROP TABLE Request IF EXISTS Request;
DROP TABLE Buyer IF EXISTS Buyer;
DROP TABLE Book IF EXISTS Book;
DROP TABLE SystemAdmin IF EXISTS SystemAdmin;
DROP TABLE Client IF EXISTS Client;
DROP TABLE Classes IF EXISTS Classes;
DROP TABLE Users IF EXISTS Users;

-- Create the table for Users
CREATE TABLE Users (UserID varchar(30) NOT NULL,
    Password varchar (30) NOT NULL,
    LoginStatus boolean,
    PRIMARY KEY (UserID));

-- Create the table for SystemAdmin
CREATE TABLE SystemAdmin (AdminName varchar(40),
    AdminEmail varchar (60),
    UserID varchar(30),
    PRIMARY KEY (UserID, AdminName),
    FOREIGN KEY (UserID) REFERENCES Users(UserID));

-- Create the table for Client
CREATE TABLE Client (ClientName varchar(40),
    ClientEmail varchar (60),
    UserID varchar(30),
    PRIMARY KEY (UserID),
    FOREIGN KEY (UserID) REFERENCES Users(UserID));

-- Create the table for Buyer
CREATE TABLE Buyer (BuyerID varchar (30),
    UserID varchar(30),
    PRIMARY KEY (BuyerID),
    FOREIGN KEY (UserID) REFERENCES Client(UserID));

-- Create the table for Seller
CREATE TABLE Seller (SellerID varchar (30),
    UserID varchar(30),
    PRIMARY KEY (SellerID),
    FOREIGN KEY (UserID) REFERENCES Client(UserID));

-- Create the table for Request ??
CREATE TABLE Request (RequestStatus boolean,
    RequestID varchar (30),
    BuyerID varchar (30),
    PRIMARY KEY (RequestID),
    FOREIGN KEY (BuyerID) REFERENCES Buyer(BuyerID));

-- Create the table for Classes
CREATE TABLE Classes (ClassID varchar (30),
    SubjectName varchar (30),
    SubjectNum varchar (30),
    CourseName varchar (50),
    PRIMARY KEY (ClassID));

-- Create the table for Book
CREATE TABLE Book (BookID varchar (30),
    title varchar (50),
    author varchar (30),
    ISBN integer,
    Edition varchar (30),
    Publisher varchar (30),
    PublishDate varchar (30),
    MSRP decimal,
    ClassID varchar (30),
    PRIMARY KEY (BookID, ClassID),
    FOREIGN KEY (ClassID) REFERENCES Classes(ClassID));

-- Create the table for Copy
CREATE TABLE Copy (Conditions varchar (30),
    SellingPrice integer,
    CopyID  varchar (30),
    SellerID varchar (30),
    BookID varchar (30),
    ClassID varchar (30),
    PRIMARY KEY (CopyID),
    FOREIGN KEY (BookID, ClassID) References Book(BookID, ClassID));

-- Create TEMP table for Exchange
CREATE TABLE Exchange (Exchange varchar(30),
    CopyID varchar (30),
    RequestID varchar (30),
    ExchangeOccurred boolean,
    PRIMARY KEY (RequestID, CopyID),
    FOREIGN KEY (RequestID) REFERENCES Request(RequestID),
    FOREIGN KEY (CopyID) REFERENCES Copy(CopyID));
