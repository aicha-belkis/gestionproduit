create table hardwear(
     brands_h  varchar(40) ,
     length_h varchar(50),
     bolt_head varchar(50),
      bolt_type varchar(50),
     price varchar(50),
     colors varchar(50),
     sorting varchar (50),
     constraint hardware_pk PRIMARY KEY( brands_h);

     INSERT into hardwear(  brands_h,  length_h , bolt_head,bolt_type ,price,colors,sorting )VALUES
                    
  ('enjoi' , '1"', 'flathead[countersunk] ','allen ','3eur-7eur','white','highest price'),
  ('bolzen' , '3"', ' raised head[fillister]',' phillps','3eur-7eur','black','new in stock');
