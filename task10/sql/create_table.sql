CREATE TABLE user_data (id int(3) PRIMARY KEY AUTO_INCREMENT,
                       	name varchar(50) not null,
                        gender ENUM('Male', 'Female', 'Other'),
                        register_date date DEFAULT CURRENT_DATE,
                       	address text
                       );