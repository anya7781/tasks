create table head (
id int (10) AUTO_INCREMENT,
name varchar(20) NOT NULL,
wage INT NOT NULL,
PRIMARY KEY (id_user),
ENGINE = INNODB
);

create table worker (
id int (10) AUTO_INCREMENT,
name varchar(20) NOT NULL,
wage INT NOT NULL,
PRIMARY KEY (id),
id_head INT NOT NULL,
FOREIGN KEY (id_head) REFERENCES head(id) 
	ON UPDATE CASCADE 
	ON DELETE CASCADE,
ENGINE = INNODB
);

select t1.name, t2.name from worker t1
inner join head t2 on t1.id_head = t2.id
where t1.wage > t2.wage;



