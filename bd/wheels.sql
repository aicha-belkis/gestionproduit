create table wheels(
     brands_w varchar(40) ,
     wheel_diameter varchar(50),
     wheel_durometer varchar(50),
     shape varchar(50),
    lip varchar(50),
     price varchar(50),
     colors varchar(50),
     sorting varchar (50),
     constraint wheels_pk PRIMARY KEY( brands_w)


);
INSERT into wheels( brands_w,wheel_diameter, wheel_durometer, shape,lip, price,colors,sorting )VALUES
 ('pig' , '50mm -62mm','78a-104a','classic/standard','29-60','rounded','Brown','popular'),
  ('flip' , '50mm -62mm','78a-104a','conical','29-60','rounded','Coral','lowest price');
  SELECT * FROM wheels;
  commit;
 