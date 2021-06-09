<?php
$age = 89;
$gender = "femme";
if ($age >=18 AND $gender = "femme")
{
    echo "Vous êtes une femme et vous êtes majeure";
}
elseif ($age < 18 AND $gender = "femme")
{
    echo "Vous êtes une femme et vous êtes mineures";
}
elseif ($age >=18 AND $gender = "homme")
{
    echo "Vous êtes un homme et vous êtes majeur";
}
elseif ($age <18 AND $gender = "homme")
{
    echo "Vous êtes un homme et vous êtes mineur";
}
?>
