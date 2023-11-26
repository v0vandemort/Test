INSERT INTO Users (Email, Phone, Password)
VALUES (:email, :phone, :password)
    ON DUPLICATE KEY UPDATE Password = Values (Password);

INSERT INTO People (LastName, FirstName, BirthDay)
VALUES (:lastName,:firstName,:birthDay)
    ON DUPLICATE KEY UPDATE  LastName=Values(LastName), FirstName=Values(FirstName), BirthDay=Values(BirthDay);


