create table posts(
	id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) not null,
    content text not null,
    date datetime not null
);

insert into posts (subject,content,date) VALUES('lorem ipsum',"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", '2018-5-27 1.00' )

SELECT * FROM `posts` WHERE id='1' AND subject='lorem ipsum'

UPDATE posts
SET subject='lorem ipsum is fuck'

DELETE from posts
where id='1'

ALTER TABLE posts

SELECT * FROM `posts` order by id DESC