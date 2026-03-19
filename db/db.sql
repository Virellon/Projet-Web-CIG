-- create database cubic_infrastructure group;
-- user_cubic__infrastructure group;
-- drop table users, player, boutique_item ,purchase;
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
id_user INT not null,
item_id INT not null,
constraint user_fk FOREIGN KEY (id_user) REFERENCES users(id),
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


insert into users (username,email,password,role) values 
('aa','aa@aa.aa','aa','aa'),
('bb','bb@bb.bb','bb','bb'),
('cc','cc@cc.cc','cc','cc');



INSERT INTO purchase (id_user, item_id) VALUES
(1, 1),
(2, 3),
(3, 2);



select * from users ;

SELECT id_user, boutique_item.nom
FROM purchase
JOIN user ON purchase.id_user = id_user
JOIN boutique_item ON purchase.item_id = boutique_item.id;


SELECT 
u.id,
u.username,
u.email,
b.nom,
b.prix,
p.id
FROM boutique_item b
full JOIN purchase p ON b.id = p.id
full JOIN users u ON p.id_user = u.id;




SELECT 
u.id AS id_user,
u.username,
u.email,
b.nom AS item_name,
b.prix,
p.id AS purchase_id
FROM purchase p
full join boutique_item b on b.id = p.id
full JOIN player u ON u.id = p.id_user ;
