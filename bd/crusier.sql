create table crusier(
     brands_c  varchar(40) ,
     usable_for varchar(40) ,
     width varchar(50),
     shape varchar(50),
     concave varchar(50),
     length_c varchar(50),
     wheelbase varchar(50),
      deck_truck_mount varchar(50),
     longboardflex varchar(50),
     material varchar(50),
     price varchar(50), 
     colors varchar(60),
     sorting varchar (50),
     constraint crusier_pk PRIMARY KEY(brands_c)


);
INSERT into crusier( brands_c, usable_for , width, shape ,concave, length_c , wheelbase, deck_truck_mount, longboardflex , material, price,  colors ,sorting )VALUES
 ('yow' , 'cruising ','20.0cm-25.5cm','full','meduim','57-89cm', '29-54ocm[33] ','topmount','meduim','"hybrid/others','74-300EUR','indigo','popular'),
  ('penny' , ' carving','20.0cm-25.5cm','full','low','57-89cm', '29-54ocm[33]  ','topmount','meduim','maple','74-300EUR','violet','Rating');
  SELECT * FROM crusier;
 
 
 