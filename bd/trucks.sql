create table trucks(
     brands_t  varchar(40) ,
     truck_width varchar(50),
     axle_width varchar(50),
     truck_hight varchar(50),
     hanger_width varchar(50),
    
    construction varchar(50),
  
     price DOUBLE ,
     colors varchar(50),
     sorting varchar (50),
     constraint trucks_pk PRIMARY KEY( brands_t )


);


INSERT into trucks(  brands_t , truck_width,axle_width, truck_hight, hanger_width ,construction,price,colors,sorting )VALUES
                    
  ('ace' , '>185mm','7"','low','5"','hollow axle', '24','purple','highest price'),
  ('film' , '9"','8"','meduim','4.5"','titanium axle', '80','green','new in stock');
  SELECT * FROM trucks