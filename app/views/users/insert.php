<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Add User</title>
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe); /* Light gray background for the body */
        }
        .container {
            background-color: #ffffff; /* White background for the form container */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow for elevation effect */
            max-width: 600px;
            margin: auto;
        }
        h2 {
            color: #007bff; /* Blue color for the heading */
        }
        .btn-success {
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn-success:hover {
            background-color: #218838; /* Darker success color on hover */
            border-color: #1e7e34; /* Darker border color on hover */
        }
        .btn-secondary:hover {
            background-color: #007bff; /* Change to success color on hover */
            border-color: #007bff; /* Change border color to success color */
        }
        .btn {
            transition: background-color 0.3s, border-color 0.3s; /* Smooth transition for hover effects */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Add User</h2>

        <form action="<?= site_url('create/insert'); ?>" method="POST">
            <div class="mb-3">
                <label for="hpn_last_name" class="form-label">Last Name:</label>
                <input type="text" class="form-control" id="hpn_last_name" name="hpn_last_name" placeholder="Enter last name" required>
            </div>
            <div class="mb-3">
                <label for="hpn_first_name" class="form-label">First Name:</label>
                <input type="text" class="form-control" id="hpn_first_name" name="hpn_first_name" placeholder="Enter first name" required>
            </div>
            <div class="mb-3">
                <label for="hpn_email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="hpn_email" name="hpn_email" placeholder="Enter email" required>
            </div>
            <div class="mb-3">
                <label for="hpn_gender" class="form-label">Gender:</label>
                <select class="form-select" id="hpn_gender" name="hpn_gender" required>
                    <option value="" disabled selected>Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="hpn_address" class="form-label">Address:</label>
                <textarea class="form-control" id="hpn_address" name="hpn_address" rows="3" placeholder="Enter address" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a class="btn btn-secondary" href="<?= site_url('create/display'); ?>">See to List</a>
        </form>
    </div>
</body>
</html>
