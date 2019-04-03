--  set foreign_key_checks = 0
DROP TABLE customer;
DROP TABLE movies;
DROP TABLE cinemas;
DROP TABLE movies_showing;
DROP TABLE credit_card;
DROP TABLE booking;
DROP TABLE ticket;

CREATE TABLE customer (
	customer_id int(10) auto_increment primary key,
	fname varchar(255) not null,
	lname varchar(255) not null,
	email varchar(255) not null,
	un varchar(255) not null,
	pw varchar(255) not null,
	contact varchar(11) not null
);

CREATE TABLE movies (
	movie_id int(10) primary key,
	name varchar(255) not null,
	genre varchar(255) not null,
	year date not null,
	synopsis text not null,
	length decimal(2,2) not null
);

CREATE TABLE cinemas(
	cinema_id int(10) primary key,
	name varchar(255) not null,
	seats int(10) not null
);

CREATE TABLE movies_showing (
	movies_showing_id int(10) auto_increment primary key,
	movie_id int(10) not null,
	cinema_id int(10) not null,
	showing_from date not null,
	showing_to date not null,
	screening_time datetime not null,
	foreign key (cinema_id) references cinemas(cinema_id)
);

CREATE TABLE credit_card (
	credit_card_id int(25) primary key,
	name varchar(100) not null,
	card_number int(25) not null,
	card_type varchar(255) not null,
	exp_date date not null,
	card_code int(3) not null,
	customer_id int(10) auto_increment not null,
	foreign key (customer_id) references customer(customer_id)
);

CREATE TABLE booking (
	booking_id int(10) primary key,
	customer_id int(10) auto_increment not null,
	movie_id int(10)  not null,
	seat_quantity int(10) not null,
	foreign key (customer_id) references customer(customer_id),
	foreign key (movie_id) references movies(movie_id)
);

CREATE TABLE ticket (
	ticket_id int(10) primary key,
	price float(5,2) not null,
	movie_id int(10) not null,
	foreign key (movie_id) references movies(movie_id)
);