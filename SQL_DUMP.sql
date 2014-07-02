drop database nova_db;

create database nova_db;

use nova_db;

create table Department(
	id integer auto_increment primary key,
	department varchar(100) not null
);

-- THIS IS TEST DATA AND MUST BE REMOVED ONCE SYSTEM IS INSTALLED.
insert into Department(department) values('Networks'), ('Bussines'), ('Accounts'), ('Human Resource');

create table Job(
	id integer auto_increment primary key,
	title varchar(100) not null
);

-- THIS IS TEST DATA AND MUST BE REMOVED ONCE SYSTEM IS INSTALLED.
insert into Job(title) values('CEO and Founder'), ('Supervisor'), ('Inventor of PCB'), ('Head of Department');

create table Location(
	id integer auto_increment primary key,
	name varchar(100) not null,
	x_cord integer null default 0,
	y_cord integer null default 0
);


create table User(
	id integer not null auto_increment primary key,
	username varchar(100) not null unique, 
	password varchar(150) not null,
	first_name varchar(100) null,
	last_name varchar(100) null,
	email varchar(100) not null,
	img_url varchar(100) null,
	gender enum ('MALE', 'FEMALE') null,
	position integer null,
	dept integer null,
	is_admin boolean not null default 0,
	about_user tinytext null,
	auto_login varchar(150) null,
	foreign key(position) references Job(id),
	foreign key(dept) references Department(id)
);

--CAN BE LEFT BUT CHANGE PASSWORD ONCE LOGGED IN AS ADMIN.
insert into User(username, password, first_name, last_name, email, img_url, gender, position, dept, is_admin, about_user)
values('admin', '21232f297a57a5a743894a0e4a801fc3', 'Default ','Admin', 'admin@support.org', 'assets/images/img.png', 'MALE', '1','1', '1', "I'm a simple and easy person to deal with as long as you can edit this section and make me a better person.");
create table Category(
	id integer auto_increment primary key,
	name varchar(100) not null
);


create table Event(
	id integer auto_increment primary key,
	title varchar(100) not null,
	event_desc tinytext not null,
	tags varchar(100) not null,
	creator_id integer not null,
	event_type enum('CLASS', 'ONE ON ONE') NOT NULL DEFAULT 'CLASS',
	creation_date timestamp not null default current_timestamp,
	commence_date datetime not null,
	location integer not null,
	foreign key(location) references Location(id),
	foreign key(creator_id) references User(id)
);


create table User_Message(
	id integer auto_increment primary key,
	receiver_id integer not null,
	from_id integer not null,
	message tinytext not null,
	is_read boolean not null default 0,
	foreign key(receiver_id) references User(id),
	foreign key(from_id) references User(id)
);

--Sample data to be deleted once system has been configured
insert into User_Message( receiver_id,from_id, message) values('1','1','Hey, you must change your email password before Thursday');
