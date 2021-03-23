create table griptape(
     brands_g  varchar(40) ,
     griptape_roughness varchar(50),
     width varchar(50),
     price varchar(50),
     colors varchar(50),
     sorting varchar (50),
     constraint griptape_pk PRIMARY KEY( brands_g )


);
INSERT into griptape(  brands_g,griptape_roughness ,width ,price,colors,sorting )VALUES
                    
  ('plan b' , 'smooth','9"', '0.00eur - 18.00eur','gold','highest price'),
  ('mob' , 'rough','11"', '0.00eur - 18.00eur','  silver','new in stock');