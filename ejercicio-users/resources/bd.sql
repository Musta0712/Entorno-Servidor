use library;
create table if not exists books (
	isbn varchar(50) primary key,
	title varchar(255),
	author varchar(255),
	pages int,
	genre varchar(255)
);