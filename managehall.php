<?php
    include_once "scripts/checklogin.php";
    include_once "include/header.php";
    include_once "scripts/DB.php";

    if (!check("admin")) {
        header('Location: logout.php');
        exit();
    }

    $stmt = DB::query("SELECT * FROM providers");

    $providers = $stmt->fetchAll(PDO::FETCH_OBJ);

    include_once "msg/managehall.php";
?>
<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
<style>
    /* General Styles */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        color: #333;
    }

    .container {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
        margin-bottom: 60px;
    }

    /* Table Styles */
    .table-responsive {
        overflow-x: auto;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table th, .table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #34495e;
        color: white;
        font-weight: bold;
    }

    .table tbody tr:hover {
        background-color: #f5f5f5;
    }

    .table img {
        height: 150px;
        border-radius: 8px;
        border: 2px solid #27ae60;
    }

    /* Ensure text in all columns is black */
    .table td {
        color: #000000; /* Black color for text */
    }

    /* Button Styles */
    .btn-danger {
        background-color: #e74c3c;
        border: none;
        padding: 8px 16px;
        font-size: 14px;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #c0392b;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .table th, .table td {
            padding: 8px;
        }

        .table img {
            height: 100px;
        }

        .btn-danger {
            width: 100%;
            margin-top: 5px;
        }
    }
</style>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Profession</th>
                <th>Action</th>
            </tr>
            <?php foreach ($providers as $provider): ?>
            <tr>
                <td>
                    <img style="height: 150px"
                        src="storage/<?= $provider->photo; ?>"
                        alt="photo">
                </td>
                <td><?= $provider->name; ?>
                </td>
                <td><?= $provider->contact; ?>
                </td>
                <td>
                    <?= $provider->adder1; ?>,<br>
                    <?= $provider->adder2 ?>,<br>
                    <?= $provider->city; ?>
                </td>
                <td><?= $provider->profession; ?>
                </td>
                <td>
                    <form action="deletehall.php" method="post">
                        <input type="hidden" name="id"
                            value="<?= $provider->id ;?>">
                        <button type="submit" name="remove" class="btn btn-danger btn-block">Remove</a>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<?php include_once "include/footer.php";
