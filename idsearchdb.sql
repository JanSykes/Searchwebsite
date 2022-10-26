CREATE TABLE 'Users'(
    'ID' int(4) NOT NULL,
    'Firstname' varchar(20) NOT NULL,
    'Lastname' varchar(20) NOT NULL,
    'Age' int(3) NOT NULL
) ENGINE= InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE 'Users'
    ADD PRIMARY KEY ('ID'),
    ADD UNIQUE KEY 'Lastname'('Lastname'),
    ADD KEY 'Age' ('Age');

ALTER TABLE 'Users'
MODIFY 'ID' int(7) NOT NULL AUTO_INCREMENT;

INSERT INTO 'Users' ('ID','Firstname','Lastname','Age') VALUES
(001, 'Jann','John','23'),
(002, 'Jonathan','Elias','20'),
(201, 'Stephanie','Biscuit','100'),
(501, 'Michelle','Mishy','50');
