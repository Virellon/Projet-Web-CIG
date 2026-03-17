-- create database cubic_infrastructure group;
-- user_cubic__infrastructure group;

create table users(
id serial primary key ,
username varchar(100)not null unique ,
email varchar(100) not null unique ,
password varchar(250),
role varchar(20) default 'player',
created_at timestamp default current_timestamp 
);


CREATE TABLE player (
id SERIAL PRIMARY KEY,
username VARCHAR(100),
gamertag VARCHAR(50),
email VARCHAR(100),
is_admin BOOLEAN DEFAULT FALSE
);


create table boutique_item(
id serial primary key ,
nom varchar(50),
prix decimal(55,5),
couleur varchar(50),
stock int
);


CREATE TABLE purchase (
id SERIAL PRIMARY KEY,
user_id INT,
item_id INT,
constraint user_fk FOREIGN KEY (user_id) REFERENCES users(id),
constraint item_fk FOREIGN KEY (item_id) REFERENCES boutique_item(id)
);
INSERT INTO boutique_item (nom,prix,couleur,stock) VALUES
('casque', '20.3','rouge','2'),
('sac','4.5','noir','5'), 
('ordinateur','200.6','blanc','34'),
('t-shirt','30.6','jaune','3'),
('chaussure','18.98','rougevif','6');

select * from boutique_item;

INSERT INTO player (username ,gamertag, email) VALUES
('demba','PlayerOne', 'playerone@example.com'),
('ibou','GamerGirl', 'gamergirl@example.com'),
('dia','NoobMaster', 'noobmaster@example.com');

INSERT INTO purchase (user_id,item_id) VALUES
(1,1),
(2,1),
(1,2);



select * from player ;

SELECT user_id, boutique_item.nom
FROM purchase
JOIN user ON purchase.user_id = user_id
JOIN boutique_item ON purchase.item_id = boutique_item.id;


SELECT a.*, b.*, c.*
FROM users AS a
INNER JOIN boutique_item AS b ON a.common_column = b.common_column
LEFT JOIN purchase AS c ON a.common_column = c.common_column


