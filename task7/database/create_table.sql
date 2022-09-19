CREATE TABLE profile(id int(5) AUTO_INCREMENT PRIMARY KEY,
                     f_name varchar(50) not null, 
                     m_name varchar(50),
                     l_name varchar(50),
                     aadhar int(12) not null,
                     dob date DEFAULT CURRENT_DATE,
                     country varchar(20)
                     );