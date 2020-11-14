create table posts (
	id int (11) not null PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) not null,
    content varchar(1000) not null,   
    date datetime not null
);

insert into posts (subject,content,date) values ('This is the subject', 
'Loremn', '2020-11-05 12:16:30:04'
); 

SELECT * FROM posts ORDER BY id ASC; 