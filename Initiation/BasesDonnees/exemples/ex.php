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
changeNom2("Anna");//khi truyen vao se ko lam gi dc ca, vi day la gia tri, ko phai la bien, minh ko the "Anna" = "Lucy"

//Nhu vay ca 2 truong hop tren thi minh thay ro rang la doi voi nhung ham thay doi gia tri truyen vao, minh ko the truyen vao 1 gia tri fix ma can truyen vao mot bien
