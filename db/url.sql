-- sqlite3 url.db < url.sql  

-- drop table if exists url_table;
-- create table url_table  (
-- id integer primary key,
-- ad1,
-- ad2
-- );

.headers on
.mode column
select * from url_table;

-- insert into url_table (ad1 , ad2) values (
--   1,
--   1
--   );