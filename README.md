# GuestBook

#Żeby działało logowanie należy ręcznie dodać to do phpmyadmina 

USE DATABASE guestbook;

CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
);


INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'admin', '123', 'admin'),
(2, 'john', 'abc', 'John');