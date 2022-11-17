<?php

require_once __DIR__ . "/connection/connect.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>

    <!--Bootstrap CND -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Local CSS -->
    <link rel="stylesheet" href="./assets/style.css" />

    <!-- Latest Font-Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body>

    <div class="wrapper">
        <div class="container">
            <form action="./website.php" method="POST" class="mt-3 p-3">
                <div class="row">
                    <h2 class="text-center text-danger">You are one step away from you webpage!</h2>

                    <div class="col-12 col-lg-6 offset-lg-3 block border border-secondary text-danger mt-3 pb-3">
                        <div class="form-group">
                            <label for="cover_img_url" class="m-2">Cover image URL:</label>
                            <input type="url" id="cover_img_url" name="cover_img_url" class="form-control" placeholder="https://imageURL.com">
                        </div>

                        <div class="form-group">
                            <label for="title" class="m-2">Main title of page:</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Write a title...">
                        </div>

                        <div class="form-group">
                            <label for="subtitle" class="m-2">Subtitle of page:</label>
                            <input type="text" id="subtitle" name="subtitle" class="form-control" placeholder="Subtitle...">
                        </div>

                        <div class="form-group">
                            <label for="about_you" class="m-2">Something about you:</label>
                            <textarea name="about_you" id="abotu_you" cols="25" rows="2" class="form-control" placeholder="Tell us something abotu you..."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="phone_no" class="m-2">Your telephone number:</label>
                            <input type="tel" id="phone_no" name="phone_no" class="form-control" placeholder="123-45-678">
                        </div>

                        <div class="form-group">
                            <label for="location" class="m-2">Location:</label>
                            <input type="text" id="location" name="location" class="form-control" placeholder="Location...">
                        </div>

                        <hr>
                        <p class="h6 mt-3">Provide url for an image and description of your service/product</p>
                        <hr>

                        <div class="form-group">
                            <label for="img_url1" class="m-2">Image URL</label>
                            <input type="text" name="img_url1" id="img_url1" class="form-control" placeholder="Image ULR...">
                        </div>

                        <div class="form-group">
                            <label for="description1" class="m-2">Description of service/product:</label>
                            <textarea name="description1" id="description1" class="form-control" placeholder="Description..." cols="25" rows="2">Description...</textarea>
                        </div>

                        <div class="form-group">
                            <label for="img_url2" class="m-2">Image URL</label>
                            <input type="text" name="img_url2" id="img_url2" class="form-control" placeholder="Image ULR...">
                        </div>

                        <div class="form-group">
                            <label for="description2" class="m-2">Description of service/product:</label>
                            <textarea name="description2" id="description2" cols="25" rows="2" class="form-control" placeholder="Description..."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="img_url3" class="m-2">Image URL</label>
                            <input type="text" name="img_url3" id="img_url3" class="form-control" placeholder="Image ULR...">
                        </div>

                        <div class="form-group">
                            <label for="description3" class="m-2">Description of service/product:</label>
                            <textarea name="description3" id="description3" cols="25" rows="2" class="form-control" placeholder="Description..."></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="company_description" class="m-2">Provide a description of your company, something people should be aware of before than contact you:</label>
                            <textarea name="company_description" id="company_decsription" cols="25" rows="2" class="form-control" placeholder="Descritpion of your company..."></textarea>
                        </div>
                        <hr>

                        <div class="form-group">
                            <label for="linkedin" class="m-2">Linkedin:</label> <br>
                            <input type="text" name="linkedin" id="linked" class="form-control" placeholder="Your linkedin profile...">
                        </div>

                        <div class="form-group">
                            <label for="facebook" class="m-2">Facebook:</label> <br>
                            <input type="text" name="facebook" id="facebook" class="form-control" placeholder="Your facebook profile...">
                        </div>

                        <div class="form-group">
                            <label for="twitter" class="m-2">Twitter:</label> <br>
                            <input type="text" name="twitter" id="twitter" class="form-control" placeholder="Your twitter profile...">
                        </div>

                        <div class="form-group">
                            <label for="instagram" class="m-2">Instagram:</label> <br>
                            <input type="text" name="instagram" id="instagram" class="form-control" placeholder="Your instagram profile...">
                        </div>
                        
                        <hr>
                        <div class="services form-group pb-3">
                            <label for="services" class="m-2">Do you provide services or products?</label> <br>
                            <select name="services" id="services" class="form-control">
                                <option value="">Select service/products</option>
                                <option value="services">Services</option>
                                <option value="products">Products</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-danger form-control">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>