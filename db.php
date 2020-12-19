<?php 

$dbhost="localhost";
$dbname="db";
$username="alex";
$password="root";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

// Заполнение формы//
function get_forms_all(){
    global $db;
    $forms=$db -> query("SELECT * FROM form");
    foreach($forms as $forms){
        return $forms;
    }
}
//Вывод всех квартир 
function get_forms_all_main(){
    global $db;
    $table = 'form';
    $forms=$db -> query("SELECT * FROM form");
        return $forms;
        return $table='form';
}
//Вывод всех домов
function get_houses_all(){
    global $db;
    $table = 'house';
    $house=$db -> query("SELECT * FROM house");
        return $house;
        return $table= 'house';
}

// Вывод квартир по id города и по количеству комнат//
function get_form_by_city_rooms($city_id, $rooms){
    global $db;
    $forms=$db -> query("SELECT * FROM form WHERE city_id=$city_id AND rooms=$rooms");
        return $forms;
}
// Вывод домов по id города //
function get_house_by_city($city_id){
    global $db;
    $house=$db -> query("SELECT * FROM house WHERE city_id=$city_id");
        return $house;
}

function get_form_by_id($id){
    global $db;
    $forms=$db -> query("SELECT * FROM form WHERE id=$id");

    foreach($forms as $forms){
        return $forms;
    }
}
function get_house_by_id($id){
    global $db;
    $house=$db -> query("SELECT * FROM house WHERE id=$id");
    $table = 'house';
    foreach($house as $house){
        return $house;
    }
}
function get_sity_all($city){
    global $db;
    $forms=$db -> query("SELECT * FROM sitys WHERE city=$id");
        return $sitys;
}

//Выбор города по id//

function get_sity_by_id($id){
    global $db;
    $sitys=$db->query("SELECT * FROM sitys WHERE id=$id");
    foreach($sitys as $sitys){
        return $sitys;
    }
}
//Вставка информации в базу данных//

?>