<?php
include_once "./include/header.php";
include_once "./msg/login.php";
?>

<div class="container" style="margin-top: 50px; width: 450px;">
    
    <div class="card">
        <img src="./images/providers.jpeg" style="height: 150px; width: 150px; margin-left: 130px" class="card-img-top"
            alt="...">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Login for Service Providers</h3>
            </div>
            <hr>
            <style>
<style>
    /* General Styles */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        color: #333;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
    }

    /* Header Styles */
    header {
        width: 100%;
        background-color: #34495e;
        padding: 15px 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
    }

    header h1 {
        color: white;
        font-size: 24px;
        margin: 0;
    }

    /* Container Styles */
    .container {
        margin-top: 100px; /* Space for the fixed header */
        width: 100%;
        max-width: 450px;
        padding: 20px;
    }

    /* Card Styles */
    .card {
        background-color: white;
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        overflow: hidden;
    }

    .card-img-top {
        display: block;
        margin: 20px auto;
        border-radius: 50%;
        border: 3px solid #27ae60;
        height: 150px;
        width: 150px;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        text-align: center;
        margin-bottom: 20px;
    }

    .card-title h3 {
        color: #2c3e50;
        font-weight: bold;
        margin: 0;
    }

    hr {
        border: 0;
        height: 1px;
        background: #ddd;
        margin: 20px 0;
    }

    /* Form Styles */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
        color: #34495e;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #bdc3c7;
        border-radius: 8px;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #27ae60;
        outline: none;
    }

    .btn-primary {
        width: 100%;
        padding: 12px;
        background-color: #2980b9;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        color: white;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #3498db;
    }

    /* Responsive Design */
    @media (max-width: 576px) {
        .container {
            margin-top: 80px;
            padding: 0 15px;
        }

        .card-img-top {
            height: 120px;
            width: 120px;
        }
    }
</style>

            <form action="scripts/login.php" method="post">
                <div class="form-group">
                    <label for="">Contact No.</label>
                    <input id="contact"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        name="contact" type="text" class="form-control" placeholder="Enter Your Contact No."
                        minlength="10" maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input id="password" name="password" type="password" class="form-control"
                        placeholder="Enter Password" minlength="4" required>
                </div>

                <button style="margin-top: 30px;" class="btn btn-block btn-primary" type="submit" name="login"
                    id="login">Login</button>
            </form>

        </div>
    </div>
</div>


<?php include_once "./include/footer.php";
