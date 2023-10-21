<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/yves_pos_save.js"></script>
    <link rel="stylesheet" href="../css/1cssstore.css">
    <title>SHOES</title>
</head>

<body>
    <div class="d-flex">
        <div class="vh-100 sticky-top bg-danger" style="width: 280px;">
            <h1 class="text-white fs-5 text-center my-5">Yves's Enterprise</h1>
            <nav class="NAVBAR">
                <ul class="nav flex-column mb-auto">
                    <li><a href="../admin_page.php">Home</a></li>
                    <li><a href="../employee_registation_save.php">Employee Registration</a></li>
                    <li><a href="#">Employee Report</a></li>
                    <li><a href="../payroll.php">Payroll</a></li>
                    <li><a href="">Payroll Report</a></li>
                    <li><a href="PANTS.PHP">POS</a></li>
                    <li><a href="#">POS Sales Report</a></li>
                    <li><a href="../user_account.php">User Account</a></li>
                    <li><a href="../login_form.php">Logout</a></li>
                </ul>
            </nav>
        </div>

        <div class="flex-grow-1">
            <main class="container border bg-white">
                <div class="row container mx-auto">
                    <h1 class="text-center">YVES'S SARI SARI STORE</h1>
                    <div class="dropdown my-2">
                        <button type="button" class="btn btn-danger">SEARCH</button>
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Shoes
                        </button>
                        <ul class="dropdown-menu mb-3">
                            <li><a class="dropdown-item" href="PANTS.PHP">PANTS</a></li>
                            <li><a class="dropdown-item" href="POLO.PHP">POLO</a></li>
                            <li><a class="dropdown-item" href="SHIRT.PHP">SHIRT</a></li>
                            <li><a class="dropdown-item" href="SHOES.PHP">SHOES</a></li>
                            <li><a class="dropdown-item" href="SHORT.PHP">SHORT</a></li>
                        </ul>
                    </div>
                    <?php
                    require_once('PRICE.PHP');
                    for ($i = 1; $i <= 20; $i++) {
                        $label = "SHOES $i";
                        $price = "$SHOES_PRICE[$i]";
                        echo "
                <div class='col' onclick='handleItems(\"$label\", \"$price\")' role='button'>
                <div class='card mb-4 mx-4 ' style='width: 150px;'>
                <img src='../IMAGE/SHOES/$i.jfif' class='card-img-top' alt='...'height = '150'>
                <div class='form-check d-flex justify-content-center align-items-center'>
                <label class='form-check-label px-3' for='checkbox$i'>
                    <h5 class='card-title'>$label :P{$price} </h5>
                    </div>
                </div>
                </div>
            ";
                    }
                    ?>
                    <div class="row">

                        <div class="col">

                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Name of an Item:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="ItemName">
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Quantity:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="Quantity">
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Price:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Price">
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Discount Amount:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Discount">
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Discounted Amount:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Discounted">
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Total Quantity:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="TotalQuantity">
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Total Discount Given:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="TotalDiscount">
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Total Discounted Amount:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="TotalDiscounted">
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Cash Given:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="Cash">
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Change:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Change">
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <!-- calculator -->
                        <div class="col">
                            <!-- radio -->
                            <div>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="senior" onclick="handleDiscounts(0.30)">
                                        <label class="form-check-label" for="flexRadioDefault1">Senior Citizen</label>
                                    </li>

                                    <li class="list-group-item"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="DiscountCard" onclick="handleDiscounts(0.20)">
                                        <label class="form-check-label" for="flexRadioDefault1">With Disc. Card</label>
                                    </li>

                                    <li class="list-group-item"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="Employee" onclick="handleDiscounts(0.15)">
                                        <label class="form-check-label" for="flexRadioDefault1">Employee Disc.</label>
                                    </li>

                                    <li class="list-group-item"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="noDiscount" onclick="handleDiscounts(0)">
                                        <label class="form-check-label" for="flexRadioDefault1">No Disc.</label>
                                    </li>
                                </ul>
                            </div>

                            <!-- buttons -->

                            <div class="my-3 w-75">

                                <div class="row row-cols-4 mb-3">
                                    <div class="col">
                                        <button type="button" class="btn btn-primary w-120" onclick="handleChange()">Calculate Change</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-danger w-100" onclick="handleNew()">New</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-warning w-100">Save</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-dark w-100">Update</button>
                                    </div>
                                </div>

                                <div class="row row-cols-5">
                                    <div class="col-3">
                                        <button type="button" class="btn btn-primary h-100 w-100" onclick="handleCalculator()">Enter</button>
                                    </div>

                                    <div class="col-9">
                                        <div class="row row-cols-3">
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '/'">/</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '*'">*</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '-'">-</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '+'">+</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '9'">9</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '8'">8</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '7'">7</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '6'">6</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '5'">5</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '4'">4</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '3'">3</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '2'">2</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '1'">1</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '0'">0</button>
                                            </div>

                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '.'">.</button>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
        </div>

        <script>
            TotalQuantity = 0
            TotalDiscount = 0
            TotalDiscounted = 0
        </script>
        <script src="../js/Calculator.js" defer></script>
        <script src="../js/Changebutton.js" defer></script>
        <script src="../js/Discount.js" defer></script>
        <script src="../js/Newbutton.js" defer></script>
</body>

</html>