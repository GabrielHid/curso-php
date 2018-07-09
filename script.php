<?php

$categories = [];
$categories[] = 'infantil';
$categories[] = 'adolescente';
$categories[] = 'adulto';
$categories[] = 'idoso';

$name = $_POST['name'];
$age = $_POST['age'];

if(empty($name)){
	echo "o nome não pode ser vazio";
	return;
}
if(strlen($name) < 3){
	echo "o nome deve conter mais de 3 caracteres";
	return;
}
if(strlen($name) > 40){
	echo "nome muito extenso";
	return;
}
if(!is_numeric($age)){
	echo "informe um número para a idade";
	return;
}


if($age >= 6 && $age <= 12)
{
	for($i = 0; $i < count($categories); $i++)
	{
		if($categories[$i] == 'infantil')
			echo "o nadador " .$name. " compete na categoria infantil";
	}
}
else if ($age >= 13 && $age <= 18)
{
	for($i = 0; $i < count($categories); $i++)
	{
		if($categories[$i] == 'adolescente')
			echo "o nadador " .$name. " compete na categoria adolescente";
	}
}
else
{
	for($i = 0; $i < count($categories); $i++)
	{
		if($categories[$i] == 'adulto')
			echo "o nadador " .$name. " compete na categoria adulto";
	}
}

