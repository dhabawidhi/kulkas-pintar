CREATE DATABASE kulkas;

-- Table: menu

-- DROP TABLE menu;

CREATE TABLE menu
(
  nama character varying(30) NOT NULL,
  bahan1 character varying(30),
  kuantitas1 integer,
  bahan2 character varying(30),
  kuantitas2 integer,
  bahan3 character varying(30),
  kuantitas3 integer,
  bahan4 character varying(30),
  kuantitas4 integer,
  bahan5 character varying(30),
  kuantitas5 integer,
  bahan6 character varying(30),
  kuantitas6 integer,
  bahan7 character varying(30),
  kuantitas7 integer,
  bahan8 character varying(30),
  kuantitas8 integer,
  bahan9 character varying(30),
  kuantitas9 integer,
  bahan10 character varying(30),
  kuantitas10 integer,
  cara_masak text,
  CONSTRAINT menu_pkey PRIMARY KEY (nama)
);

-- Table: menu3

-- DROP TABLE menu3;

CREATE TABLE menu3
(
  nama character varying(30),
  bahan character varying(30),
  kuantitas integer,
  cara_masak text
);

CREATE TABLE bahannya
(
  bahan character varying(30) NOT NULL,
  harga integer,
  CONSTRAINT bahannya_pkey PRIMARY KEY (bahan)
);
insert into bahannya(bahan,harga) values('',0);
insert into bahannya(bahan,harga) values('nasi',8);
insert into bahannya(bahan,harga) values('daun bawang',1);
insert into bahannya(bahan,harga) values('telur',18);
insert into bahannya(bahan,harga) values('bawang putih',20);
insert into bahannya(bahan,harga) values('tomat',5);
insert into bahannya(bahan,harga) values('saus',62);
insert into bahannya(bahan,harga) values('bawang merah',31);
insert into bahannya(bahan,harga) values('minyak goreng',29);
insert into bahannya(bahan,harga) values('cabai',55);
insert into bahannya(bahan,harga) values('kerupuk',60);
insert into bahannya(bahan,harga) values('ayam',20);
insert into bahannya(bahan,harga) values('sosis',30);
insert into bahannya(bahan,harga) values('ikan',35);
insert into bahannya(bahan,harga) values('spageti',25);
insert into bahannya(bahan,harga) values('kornet',100);
insert into bahannya(bahan,harga) values('garam',2);
insert into bahannya(bahan,harga) values('mentega',105);
insert into bahannya(bahan,harga) values('wortel',40);
insert into bahannya(bahan,harga) values('kubis',22);
insert into bahannya(bahan,harga) values('toge',24);
insert into bahannya(bahan,harga) values('air',4);
insert into bahannya(bahan,harga) values('terigu',5);
insert into bahannya(bahan,harga) values('kecap',32);
insert into bahannya(bahan,harga) values('santan kelapa',12);
insert into bahannya(bahan,harga) values('susu',15);
insert into bahannya(bahan,harga) values('jahe',37);
insert into bahannya(bahan,harga) values('lengkuas',28);
insert into bahannya(bahan,harga) values('daun pandan',16);
insert into bahannya(bahan,harga) values('daging sapi',80);
insert into bahannya(bahan,harga) values('kentang',17);
