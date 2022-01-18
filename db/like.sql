-- sqlite3 like.db < like.sql  

-- drop table if exists like_table;
-- create table like_table  (
-- id integer primary key,
-- number,
-- like
-- );

.headers on
.mode column
select * from like_table;

-- insert into like_table (number , like) values (
--   1,
--   1
--   );