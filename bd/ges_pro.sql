use ges_pro;

CREATE table categories (
     idCat INT(4) auto_increment PRIMARY key,
     nomCat VARCHAR(30),
     marque VARCHAR(30)
);
INSERT into categories (nomCat,marque)VALUES
 ('ELECTRONIQUE' , 'SAMSUNG'),
  ('HYGIN' , 'DALAA'),
   ('FOURNITURE' , 'IKEA'),
    ('VETEMENT' , 'ADIDAS'),
     ('ALIMENTATION' , 'COPAG');
SELECT * FROM categories;