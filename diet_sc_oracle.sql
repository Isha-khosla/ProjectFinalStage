DROP TABLE admin CASCADE CONSTRAINTS PURGE;
DROP TABLE nutritions CASCADE CONSTRAINTS PURGE;
DROP TABLE diets CASCADE CONSTRAINTS PURGE;
DROP TABLE orders CASCADE CONSTRAINTS PURGE;
DROP TABLE order_items CASCADE CONSTRAINTS PURGE;

COMMIT;

create table admin
(
  username char(16) not null primary key,
  password char(40) not null
);

create table nutritions
(
  catid int not null primary key,
  catname char(60) not null
);

create table diets
(
   batch char(13) not null primary key,
   wecall char(80),
   noofoodintakeperday char(100),
   catid int references nutritions(catid),
   dailywater number(4,2) not null,
   tips varchar(255)
);

create table orders
(
  orderid int not null primary key,
  customerid int not null,
  amount number(6,2),
  order_date date not null,
  order_status char(10),
  ship_name char(60) not null,
  ship_address char(80) not null,
  ship_city char(30) not null,
  ship_state char(20),
  ship_zip char(10),
  ship_country char(20) not null
);

create table order_items
(
  orderid int not null references orders(orderid),
  batch char(13) not null,
  item_dailywater number(4,2) not null,
  quantity int not null,
  primary key (orderid, batch)
);



