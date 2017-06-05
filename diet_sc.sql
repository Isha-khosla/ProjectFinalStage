create table admin
(
  username char(16) not null primary key,
  password char(40) not null
);

create table nutritions
(
  catid int unsigned not null auto_increment primary key,
  catname char(60) not null
);

create table diets
(
   batch char(13) not null primary key,
   wecall char(80),
   noofoodintakeperday char(100),
   catid int unsigned references nutritions(catid),
   dailywater float(4,2) not null,
   tips varchar(255)
);

create table orders
(
  orderid int unsigned not null auto_increment primary key,
  customerid int unsigned not null,
  amount float(6,2),
  date date not null,
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
  orderid int unsigned not null references orders(orderid),
  batch char(13) not null,
  item_dailywater float(4,2) not null,
  quantity tinyint unsigned not null,
  primary key (orderid, batch)
);




