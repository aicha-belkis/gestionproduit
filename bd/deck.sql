
create table decks (
     brands_d  varchar(40) ,
     width varchar(50),
     shape varchar(50),
     concave varchar(50),
     length_d varchar(50),
     wheelbase varchar(50),
    construction varchar(50),
     for_kids   varchar(50),
     price DOUBLE ,
     colors varchar(50),
     sorting varchar (50),
     constraint decks_pk PRIMARY KEY(brands_d)


);
INSERT into decks( brands_d,width, shape, concave,length_d ,wheelbase,construction,for_kids,price,colors,sorting )VALUES
 ('zero' , '8"','shaped','low','31.875','11.857"', '7-ply ','150cm','70EUR','red','popular'),
  ('girl' , '9"','standard popsicle','meduim','31.875"','14"', 'R1 ','175cm','120EUR','pin','Rating');
  SELECT * FROM decks;
 