<?php include_once "./include/header.php"; ?>

<?php
$cities = ["Ahmednagar", "Akola", "Akot", "Amalner", "Ambejogai", "Amravati", "Anjangaon", "Arvi", "Aurangabad", "Bhiwandi", "Dhule", "Kalyan-Dombivali", "Ichalkaranji", "Kalyan-Dombivali", "Karjat", "Latur", "Loha", "Lonar", "Lonavla", "Mahad", "Malegaon", "Malkapur", "Mangalvedhe", "Mangrulpir", "Manjlegaon", "Manmad", "Manwath", "Mehkar", "Mhaswad", "Mira-Bhayandar", "Morshi", "Mukhed", "Mul", "Greater Mumbai*", "Murtijapur", "Nagpur", "Nanded-Waghala", "Nandgaon", "Nandura", "Nandurbar", "Narkhed", "Nashik", "Navi Mumbai", "Nawapur", "Nilanga", "Osmanabad", "Ozar", "Pachora", "Paithan", "Palghar", "Pandharkaoda", "Pandharpur", "Panvel", "Parbhani", "Parli", "Partur", "Pathardi", "Pathri", "Patur", "Pauni", "Pen", "Phaltan", "Pulgaon", "Pune", "Purna", "Pusad", "Rahuri", "Rajura", "Ramtek", "Ratnagiri", "Raver", "Risod", "Sailu", "Sangamner", "Sangli", "Sangole", "Sasvad", "Satana", "Satara", "Savner", "Sawantwadi", "Shahade", "Shegaon", "Shendurjana", "Shirdi", "Shirpur-Warwade", "Shirur", "Shrigonda", "Shrirampur", "Sillod", "Sinnar", "Solapur", "Soyagaon", "Talegaon Dabhade", "Talode", "Tasgaon", "Thane", "Tirora", "Tuljapur", "Tumsar", "Uchgaon", "Udgir", "Umarga", "Umarkhed", "Umred", "Uran", "Uran Islampur", "Vadgaon Kasba", "Vaijapur", "Vasai-Virar", "Vita", "Wadgaon Road", "Wai", "Wani", "Wardha", "Warora", "Warud", "Washim", "Yavatmal", "Yawal", "Yevla"];
?>
<?php include_once "msg/register.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register as Service Provider</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Header Styles */
        header {
            background-color: #34495e;
            padding: 15px 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            color: white;
            font-size: 24px;
            margin: 0;
        }

        /* Container Styles */
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            margin: 30px auto;
        }

        /* Card Styles */
        .card {
            border: none;
            border-radius: 15px;
            background-color: #ffffff;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .card-title h3 {
            color:rgb(0, 0, 0);
            font-weight: bold;
            margin: 0;
        }

        hr {
            border: 0;
            height: 1px;
            background: #ddd;
            margin: 20px 0;
        }

        /* Form Group Styles */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: #34495e;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #bdc3c7;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #27ae60;
            outline: none;
        }

        /* File Upload Styles */
        .form-group input[type="file"] {
            padding: 8px;
        }

        /* Button Styles */
        .btn-primary {
            width: 100%;
            padding: 12px;
            background-color: #2980b9;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #3498db;
        }

        /* Responsive Design */
        @media (max-width: 576px) {
            .container {
                padding: 20px;
            }

            .form-group input,
            .form-group textarea,
            .form-group select {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Service Provider Registration</h1>
    </header>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Register as Service Provider</h3>
                </div>
                <hr>
                <form action="scripts/register.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                    </div>

                    <div class="form-group">
                        <label for="contact">Contact No.</label>
                        <input id="contact" name="contact" type="text" class="form-control" placeholder="Contact" minlength="10" maxlength="10" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                    </div>

                    <div class="form-group">
                        <label for="adder1">Address Line 1</label>
                        <input id="adder1" name="adder1" type="text" class="form-control" placeholder="Enter Address line-1" required>
                    </div>

                    <div class="form-group">
                        <label for="adder2">Address Line 2</label>
                        <input id="adder2" name="adder2" type="text" class="form-control" placeholder="Enter Address line-2" required>
                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                        <select class="form-control" name="city" id="city">
                            <?php foreach ($cities as $city) : ?>
                                <option value="<?= $city ?>"><?= $city ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="photo">Photo (Square Size)</label>
                        <input id="photo" name="photo" type="file" class="form-control-file" required>
                    </div>

                    <div class="form-group">
                        <label for="descr">Add Description</label>
                        <textarea name="descr" id="descr" class="form-control" cols="30" rows="5" placeholder="Tell something about you..." required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" class="form-control" placeholder="Enter 6 Character Password" minlength="4" required>
                    </div>

                    <div class="form-group">
                        <label for="profession">Profession</label>
                        <select class="form-control" name="profession" id="profession">
                            <option value="electrician">Electrician</option>
                            <option value="plumber">Plumber</option>
                            <option value="mobile">Mobile Repairer</option>
                        </select>
                    </div>

                    <button class="btn btn-primary" type="submit" name="register" id="register">Register</button>
                </form>
            </div>
        </div>
    </div>

    <?php include_once "./include/footer.php"; ?>
</body>
</html>