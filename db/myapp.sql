-- sqlite3 myapp.db < myapp.sql  

drop table if exists image_table;
create table image_table  (
id integer primary key,
number,
contributor,
comment,
images,
id_flg
);

.headers on
.mode column
select * from image_table;

-- insert into image_table (number , contributor, comment, images, id_flg) values (
--   0,
--   '担当者',
--   'テキスト',
--   '1.jpg',
--   'タイトル'
--   );

insert into image_table (number , contributor, comment, images, id_flg) values (
  1,
  '1日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  2,
  '2日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  3,
  '3日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  4,
  '4日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  5,
  '5日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  6,
  '6日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  7,
  '7日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  8,
  '8日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  9,
  '9日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  10,
  '10日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  11,
  '11日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  12,
  '12日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  13,
  '13日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  14,
  '14日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  15,
  '15日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  16,
  '16日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  17,
  '17日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  18,
  '18日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  19,
  '19日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );

insert into image_table (number , contributor, comment, images, id_flg) values (
  20,
  '20日目担当',
  'メッセージ',
  '1.jpg',
  ''
  );