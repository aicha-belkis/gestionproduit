create table bearing(
     brands_b  varchar(40) ,
     ABEC varchar(50),
     price varchar(50),
     colors varchar(50),
     sorting varchar (50),
     constraint bearing_pk PRIMARY KEY( brands_b )


);
INSERT into bearing(  brands_b, ABEC ,price,colors,sorting )VALUES
                    
  ('skf' , 'abec3', '19eur -180eur',' Black','highest price'),
  ('cortina' , 'swiss', '19eur -180eur',' Orange','new in stock');
  SELECT * FROM  bearing;