-- sqlite3 myapp.db < myapp.sql  

-- drop table if exists user_table;
-- create table user_table  (
-- id integer primary key,
-- u_name,
-- u_mail,
-- u_pw,
-- life_flg,
-- indate datetime
-- );

-- insert into user_table (u_name, u_mail , u_pw , life_flg ) values ('test', 'test_mail' , 'pass' , '1');

.headers on
.mode column
select * from user_table;