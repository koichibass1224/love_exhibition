-- sqlite3 news.db < news.sql  

-- drop table if exists news_table;
-- create table news_table  (
-- id integer primary key,
-- ad1,
-- ad2,
-- ad3
-- );

.headers on
.mode column
select * from news_table;

insert into news_table (ad1 , ad2 ,ad3) values (
  2021.12.24,
  テキストテキストテキストテキストテキスト,
  1
  );