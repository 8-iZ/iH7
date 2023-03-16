<?php

function newBot($q,$botID,$title,$type,$botStatus,$cID,$time,$botInfo,$botUN,$botLog,$key) {mysqli_query($q, "INSERT INTO bots (id, title, type, status, admin, start, info, nick, log, key) VALUES ('$botID', '$title', '$type', '2', '$cID', NOW(), '$info', '$nick', '$log', 'key')");}

function reBot($q,$botID,$title,$type,$botStatus,$cID,$time,$botInfo,$botUN,$botLog,$key) {mysqli_query
($q, 'UPDATE `bots` SET `title`=$title,`type`=$type,`status`=$botStatus,`master`=$cID,`connected`=$time,`info`=$botInfo,`nick`=$botUN,`log`=$botLog,`key`=$key WHERE `id`=$botID');}

function newUser($q,$cID,$fn,$ln,$u,$time,$botID,$uLog) {mysqli_query
($q, 'INSERT INTO `users`(`id`, `first_name`, `last_name`, `nick`, `status`, `balance`, `ratio`, `start`, `bot`, `info`, `temp`, `lang`, `city`, `log`, `pass`, `pin`) VALUES ($cID,$fn,$ln,$u,'1','0','1',$time,$botID,'','','RU','',$uLog,'','')');}

function newOrder($q,$mID,$cID,$botID,$merchID) {mysqli_query
($q, 'INSERT INTO `orders`(`id`, `user`, `bot`, `merch`, `status`, `temp`) VALUES ($mID,$cID,$botID,$merchID,'1','')');}

function newPayment($q,$botID,$title,$type,$botStatus,$cID,$time,$botInfo,$botUN,$botLog,$key) {mysqli_query
($q, 'INSERT INTO `payments`(`id`, `user`, `bot`, `summ`, `currency`, `time`, `status`, `wallet`, `parameter`, `temp`, `ticket`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])');}

function newMerch($q,$botID,$title,$type,$botStatus,$cID,$time,$botInfo,$botUN,$botLog,$key) {
SELECT MAX(id) FROM `merches`
mysqli_query
($q, 'INSERT INTO `merches`(`id`, `name`, `price`, `category`, `parameter`, `status`, `agent`, `seller`, `start`, `info`, `gallery`, `bonus`, `place`, `description`, `photos`, `sold`, `temp`, `log`, `ticket`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19])');}

function newMsg($q,$botID,$title,$type,$botStatus,$cID,$time,$botInfo,$botUN,$botLog,$key) {mysqli_query
($q, 'INSERT INTO `messages`(`id`, `sender`, `receiver`, `followed`, `time`, `dialog`, `text`, `media`, `special`, `status`, `bot`, `log`, `flags`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13])');}

function newDig($q,$digID,$digStatus,$botID,$digInfo){mysqli_query
($q, 'INSERT INTO `dialogs`(`id`, `status`, `bot`, `info`) VALUES ($digID,$digStatus,$botID,$digInfo)');}

?>