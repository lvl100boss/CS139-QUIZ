<?php 
    include 'include/problem1.php';
    include 'include/problem2.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz1-CS139</title>
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
</head>
<body>
    <section class="section1">
        <h1>PROBLEM 1</h1>
        <table>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Sales</th>
                <th>Discounted Price</th>
            </tr>
            <?php 
                foreach($Array as $arr){
                    $totalSales = $discountedPrice = 0;  
                    $totalSales = $arr['price'] * $arr['quantity'];
                    if ($totalSales > 100) {
                        $discountedPrice = $arr['price'] * 0.9;
                    } else {
                        $discountedPrice = $arr['price'];
                    }
            ?>
                    <tr class="row">
                        <td><?php echo $arr['product_name']; ?></td>
                        <td><?php echo $arr['price']; ?></td>
                        <td><?php echo $arr['quantity']; ?></td>
                        <td><?php echo $totalSales; ?></td>
                        <td><?php echo $discountedPrice; ?></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </section class="section1">
    <section class="section2">
        <h1>PROBLEM 2</h1>
        <span class="error">Fields with * are Required.</span>
        <div>
            <form action="" method="POST">
                <div>
                    <div>
                        <label for="name">Name</label>
                        <span class="error">
                        * <?php echo $nameErr ?>
                        </span>
                    </div>
                    
                    <div class="container">
                        <input class="input" type="text" name="name" id="Name" value="" placeholder="Name"><span class="error" >
                    </div> 
                    
                </div>
                <div>
                    <div>
                        <label for="age">Age</label>
                        <span class="error"> * <?php echo $ageErr ?></span>
                    </div>
                    <div class="container">
                        <input class="input" type="text" name="age" id="Age" value="" placeholder="Age">
                    </div> 
                </div>
                <div>
                    <div>
                        <label for="gender">Gender</label> 
                    </div>
                    <div class="select-container">
                        <select class="select" name="gender" id="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                
                <div class="button-container">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div>
            <h1>
                OUTPUT 
            </h1>
            <p>FETCHING USER DATA....</p>
            <p>Name: <?php echo $name; ?></p>
            <p>Age: <?php echo $age; ?></p>
            <p>Gender: <?php echo $gender; ?></p>
        </div>
    </section class="section2">
</body>
</html>