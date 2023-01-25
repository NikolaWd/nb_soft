* Prva grupa zadataka:
a) Prikažite sve kororisnike koji su se prijavili u prethodna dva dana

select user.*
from user
where dateCreate >= DATE_ADD(CURDATE(), INTERVAL -2 DAY);

/* WHERE t.date >= ( CURDATE() - INTERVAL 3 DAY ) */

b) Prikažite ime I prezime korisnika, id porudžbine I ukupnu vrednost svih porudžbina

select first_name, last_name, nb_soft.order.id, sum(product.price * order_item.value) as 'Suma pordzbine'
from user, order_item, nb_soft.order, product
where user.id = nb_soft.order.userId
	and order_item.productId = product.id
    and order_item.orderId = nb_soft.order.id
group by nb_soft.order.userId

* Druga grupa zadataka:
c) Prikažite sve korisnike koji su imali najmanje dve porudžbine

select user.*
from user inner join nb_soft.order on user.id = nb_soft.order.userId
group by nb_soft.order.userId
having count(nb_soft.order.userId) > 1

d) Prikažite ime I prezime korisnika, id porudžbine I broj stavki za svaku porudžbinu

select first_name as 'Ime', last_name as 'Prezime', nb_soft.order.id as 'ID porudzbine', nb_soft.order.value as 'Broj stavki'
from user inner join nb_soft.order on user.id = nb_soft.order.userId
group by nb_soft.order.id

e) Prikažite ime I prezime korisnika, id porudžbine koja ima najmanje dve stavke

select first_name as 'Ime', last_name as 'Prezime', nb_soft.order.id as 'ID porudzbine', nb_soft.order.value as 'Broj stavki'
from user inner join nb_soft.order on user.id = nb_soft.order.userId
where nb_soft.order.value > 1


f) Prikažite sve korisnike koji su kupili najmanje tri različita proizvoda u svim porudžbinama   
   
select user.*
from user inner join nb_soft.order on user.id = nb_soft.order.userId 
	inner join order_item on nb_soft.order.id = order_item.orderId
group by order_item.orderId
having count(DISTINCT order_item.productId) > 2



