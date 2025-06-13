<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Voting System Registration</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">

    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-white">
    <h1 class="text-success text-center p-3">Fountain University Online Voting System</h1>
    <div class="bg-success py-4">
        <h2 class="text-center"> Register Account </h2>
        <div class="container text-center">
            <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="username" placeholder="Enter your username" required=required>
                </div>
                            <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="mobile" placeholder="Enter your mobile number" required=required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="password" placeholder="Enter your password" required=required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="cpassword" placeholder="Confirm your password" required=required>
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control w-50 m-auto" name="photo" >
                </div>
                <div class="mb-3">
                    <select name="std" id="" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Register</button>
                <button type="reset" class="btn btn-dark my-4">Reset</button>
                <p>Don't have an account? <a href="../" class="text-white"> Login Here</a></p>


            </form>
        </div>
    </div>




</body>
<footer class="text-success text-center p-3"><b>Design by Biyi</b></footer>
</html>