<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Registration Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4 mb-5 bg-white rounded" style="max-width: 500px;">
            <div class="card-body">
                <h2 class="card-title text-center mb-4"><strong>Register Form</strong></h2>
                <form action="{{ url('user/register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender:</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="genderMale" name="gender" value="male" checked>
                            <label for="genderMale" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="genderFemale" name="gender" value="female">
                            <label for="genderFemale" class="form-check-label">Female</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Mo. No.:</label>
                        <input type="number" class="form-control" placeholder="Enter Mobile No." name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address:</label>
                        <textarea name="address" id="address" class="form-control" rows="3" placeholder="Enter Address"></textarea>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
