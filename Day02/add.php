<?php
    include $_SERVER['DOCUMENT_ROOT'].'/util/pet/add.php';
    header('Content-Type:text/plain; charset:utf-8');
    $requestData=file_get_contents('php://input');
    $data=json_decode($requestData,true);

    $email=$data['email'];
    $provider_id=$data['provider_id'];
    $pet_name=$data['pet_name'];
    $pet_imageUrl=$data['pet_imageUrl'];
    $pet_birthDate=$data['pet_birthDate'];
    $pet_gender=$data['pet_gender'];
    $pet_neutering=$data['pet_neutering'];
    $pet_breed=$data['pet_breed'];
    $login_type=$data['login_type'];
    $code=pet_add($email, $provider_id, $pet_name, $pet_imageUrl, $pet_birthDate, $pet_gender, $pet_neutering, $pet_breed, $login_type); 

    echo $code;  // 5200 펫 추가 성공 5201 펫 추가 실패 4204 서비스 회원 아님 
?>