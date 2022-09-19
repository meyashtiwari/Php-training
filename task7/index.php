<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form | MySql Connectivity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="./assets/styles/styles.css" rel="stylesheet">
    <script src="./assets/js/function.js"></script>
</head>

<body>
    <main>
        <div class="container">
            <div class="form-wrap">
                <form id="register-form" action="./register.php" method="POST">
                    <div class="row mb-3">
                        <h2>Register</h2>
                    </div>
                    <div class="row mb-3">
                        <label for="firstName" class="col-sm-4 col-form-label">First Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="fName" name="fName" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="middleName" class="col-sm-4 col-form-label">Middle Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="mName" name="mName">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lastName" class="col-sm-4 col-form-label">Last Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="lName" name="lName">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="aadharNumber" class="col-sm-4 col-form-label">Aadhar Number</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="aadharNumber" name="aadharNumber" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="dob" class="col-sm-4 col-form-label">D.O.B.</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="country" class="col-sm-4 col-form-label">Choose any</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="country">
                                <option value="null" selected>Select a country</option>
                                <option value="India">India</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Nepal">Nepal</option>
                                <option value="China">China</option>
                            </select>
                        </div>
                    </div>
                    <div id="1" class="row mb-3 unique">
                        <label for="date1" class="col-sm-1 col-form-label">Date 1</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="date1">
                        </div>
                        <label for="date2" class="col-sm-1 col-form-label">Date 2</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="date2">
                        </div>
                        <div class="col-sm-2">
                            <button type="button" id="add" onclick="addButtonClicked()" class="btn btn-success">Add</button>
                        </div>
                        <div class="col-sm-2">
                            <button type="button" id="remove" onclick="removeButtonClicked(this.id)" class="btn btn-danger hidden">Remove</button>
                        </div>
                    </div>
                    <div id="submit-button">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>