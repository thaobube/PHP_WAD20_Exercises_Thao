<?php
function changeNom(&$unNom)
{
    $unNom = "Lucy";
}
$n = "Sophie";
changeNom($n);
echo $n; // in ra Lucy do ham truyen gia tri tham chieu
//changeNom("Anna"); =>bi loi vi bien ban dau se phai tham chieu den gia tri bi bien doi trong khi thuc hien ham, tuy nhien o day bien ban dau la mot gia tri co dinh dang literal nen ko tham chieu dc 

function changeNom2($unNom)
{
    $unNom = "Lucy";
}
$n = "Sophie";
changeNom2($n);
echo $n; // in ra Sophie do ham truyen gia tri tham tri
changeNom2("Anna");
