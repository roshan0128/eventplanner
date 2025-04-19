<?php
    include_once "scripts/checklogin.php";
    include_once "scripts/DB.php";
    include_once "include/header.php";

    if (!check("admin")) {
        header('Location: logout.php');
        exit();
    }

    $sql = "SELECT b.*, p.name AS provider_name FROM bookings AS b, providers AS p WHERE b.provider_id = p.id ORDER BY b.date DESC";

    $bookings = DB::query($sql)->fetchAll(PDO::FETCH_OBJ);


    include_once "msg/admin.php";
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

    h2.text-center {
        color: #2c3e50;
        font-weight: bold;
        margin-bottom: 20px;
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
        color: white;
        text-decoration: none;
        display: inline-block;
    }

    .btn-danger:hover {
        background-color: #c0392b;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .table th, .table td {
            padding: 8px;
        }

        .btn-danger {
            width: 100%;
            margin-top: 5px;
        }
    }
</style>
    <h2 class="text-center"> Bookings </h2>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Date</th>
                <th>Payment Method</th>
                <th>Queries</th>
                <th>Provider Name</th>
                <th>Action</th>
            </tr>
            <?php foreach ($bookings as $booking): ?>
            <tr>
                <td>
                    <?= $booking->fname; ?> <?= $booking->lname; ?>
                </td>
                <td>
                    <?= $booking->contact; ?>
                </td>
                <td>
                    <?= $booking->adder; ?>
                </td>
                <td>
                    <?= $booking->date; ?>
                </td>
                <td>
                    <?= $booking->payment; ?>
                </td>
                <td>
                    <?= $booking->queries; ?>
                </td>
                <td>
                    <?= $booking->provider_name; ?>
                </td>
                <td>
                    <a class="btn btn-danger"
                        href="deletebooking.php?id=<?= $booking->id; ?>">Remove</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<?php include_once "include/footer.php";
