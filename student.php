<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo-page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4; /* Add a light background color */
        }
        .navbar {
            background-color: #6A5ACD;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .search-container {
            text-align: center; /* Align the search container to the center */
            margin-top: 10px;
        }
        input[type=text] {
            padding: 10px;
            margin-right: 8px; /* Adjust margin-right */
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 200px; /* Set a fixed width for the input */
        }
        button {
            padding: 10px 20px; /* Adjust padding for a more balanced button */
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049; /* Darken the button on hover */
        }
        .content {
            margin: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9; /* Add alternating row color */
        }
    </style>
</head>
<body>

<div class="navbar">
    <h1>Infovue-Solution</h1>
    <div class="search-container">
        <input type="text" placeholder="Search...">
        <button type="button">Search</button>
        <label><input type="checkbox" name="searchColumn" value="id"> ID</label>
        <label><input type="checkbox" name="searchColumn" value="name"> NAME</label>
        <label><input type="checkbox" name="searchColumn" value="email"> EMAIL</label>
        <label><input type="checkbox" name="searchColumn" value="applied_for"> APPLIED FOR</label>
        <label><input type="checkbox" name="searchColumn" value="applied_on"> APPLIED ON</label>
        <label><input type="checkbox" name="searchColumn" value="status"> STATUS</label>
    </div>
</div>

<div class="content">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>APPLIED FOR</th>
                <th>APPLIED ON</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //   fetch data from your database and loop through the records to display them
            // For the sake of example, I'm using static data here
            $applications = [
                ['id' => 1, 'name' => 'Arpan Dutta', 'email' => 'Arpan@example.com', 'applied_for' => 'Front end web Developer', 'applied_on' => '2024-01-11', 'status' => 'Pending'],
                ['id' => 2, 'name' => 'Sayon Guha', 'email' => 'Sayon@example.com', 'applied_for' => 'Graphic Designer', 'applied_on' => '2024-01-12', 'status' => 'Approved'],
                ['id' => 3, 'name' => 'Sudipta', 'email' => 'Sudipta@example.com', 'applied_for' => 'Back-end Developer', 'applied_on' => '2024-01-13', 'status' => 'Approved'],
                ['id' => 4, 'name' => 'Bharat Kumar', 'email' => 'Bharat@example.com', 'applied_for' => 'Web Designer', 'applied_on' => '2024-01-14', 'status' => 'Pending'],
            ];

            foreach ($applications as $application) {
                echo "<tr>";
                echo "<td>{$application['id']}</td>";
                echo "<td>{$application['name']}</td>";
                echo "<td>{$application['email']}</td>";
                echo "<td>{$application['applied_for']}</td>";
                echo "<td>{$application['applied_on']}</td>";
                echo "<td>{$application['status']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>

