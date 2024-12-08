
CREATE TABLE Guests (
    GuestID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100),
    ContactDetails VARCHAR(100),
    Nationality VARCHAR(50)
);


CREATE TABLE Rooms (
    RoomID INT AUTO_INCREMENT PRIMARY KEY,
    RoomType VARCHAR(50),
    Rate DECIMAL(10, 2),
    AvailabilityStatus ENUM('Available', 'Occupied', 'Under Maintenance')
);


CREATE TABLE Reservations (
    ReservationID INT AUTO_INCREMENT PRIMARY KEY,
    GuestID INT,
    RoomID INT,
    CheckInDate DATE,
    CheckOutDate DATE,
    FOREIGN KEY (GuestID) REFERENCES Guests(GuestID),
    FOREIGN KEY (RoomID) REFERENCES Rooms(RoomID)
);

CREATE TABLE Payments (
    PaymentID INT AUTO_INCREMENT PRIMARY KEY,
    ReservationID INT,
    PaymentMethod VARCHAR(50),
    PaymentDate DATE,
    Amount DECIMAL(10, 2),
    FOREIGN KEY (ReservationID) REFERENCES Reservations(ReservationID)
);


CREATE TABLE Staff (
    StaffID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100),
    Role VARCHAR(50),
    ContactDetails VARCHAR(100)
);


CREATE TABLE Services (
    ServiceID INT AUTO_INCREMENT PRIMARY KEY,
    Description VARCHAR(200),
    Fee DECIMAL(10, 2)
);


CREATE TABLE GuestServices (
    GuestServiceID INT AUTO_INCREMENT PRIMARY KEY,
    GuestID INT,
    ServiceID INT,
    UsageDate DATE,
    FOREIGN KEY (GuestID) REFERENCES Guests(GuestID),
    FOREIGN KEY (ServiceID) REFERENCES Services(ServiceID)
);
