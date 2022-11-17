<?php

require_once __DIR__ . '/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cover_img_url = $_POST['cover_img_url'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $about_you = $_POST['about_you'];
    $phone_no = $_POST['phone_no'];
    $location = $_POST['location'];
    $services = $_POST['services'];
    if ($services == 'services') {
        $services = 'Services';
    } else {
        $services = 'Products';
    }
    $img_url1 = $_POST['img_url1'];
    $description1 = $_POST['description1'];
    $img_url2 = $_POST['img_url2'];
    $description2 = $_POST['description2'];
    $img_url3 = $_POST['img_url3'];
    $description3 = $_POST['description3'];
    $company_description = $_POST['company_description'];
    $linkedin = $_POST['linkedin'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];

    $sql = "INSERT INTO website (cover_img_ur, title, subtitle, about_you, phone_no, location, services, img_url1, description1, img_url2, description2, img_url3, description3, company_description, linkedin, facebook, twitter, instagram) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $stmt = $connect->prepare($sql);
    try {
        if ($stmt->execute([$cover_img_url, $title, $subtitle, $about_you, $phone_no, $location, $services, $img_url1, $description1, $img_url2, $description2, $img_url3, $description3, $company_description, $linkedin, $facebook, $twitter, $instagram])) {
            $id = $connect->lastInsertId();
            header("Location: ../website.php?status=success&id=$id");
            die();
        } else {
            header("Location: ../website.php?status=error");
            die();
        }
    } catch (PDOException $e) {
        $e->getMessage();
    }

    // if ($_GET['status'] == 'success') {
    //     echo "<p class ='text-center' style='color:green; font-weight:bold;'>Successfully Created</p>" . "<br>";
    // } else {
    //     echo "<p class = 'text-center' style='color:red; font-weight:bold;'>Error, Try again!</p>" . "<br>";
    // }
}
