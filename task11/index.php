<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="./javascript.js"></script>
    <title>File Upload</title>
</head>
<body>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="mt-5 mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="Email" name="Email" required>
            </div>
            <div class="mb-3">
                <label for="myfile" class="form-label">Select a file</label>
                <input type="file" class="form-control" id="uploadfile" name="myfile" required>
            </div>
            <button type="button" id="submit" class="btn btn-primary float-end">Upload File</button>
        </form>
    </div>
    <div class="pt-5 container">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Uploader Email</th>
                <th scope="col">Original File Name</th>
                <th scope="col">File name on server</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                require_once("./database/checkfiles.php");
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>