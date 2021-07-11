<?php
session_start();
function CleanInputs($input)
{
    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = CleanInputs($_POST['email']);
    $password = CleanInputs($_POST['password']);
    $url = CleanInputs($_POST['url']);
    $date    =  strtotime($_POST['BirthDate']);
    $_SESSION = ['email' => $email, 'pass' => $password, 'url' => $url, 'date' => date('m/d/Y', $date)];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'your email must contain @ and (.com),(.net),....etc' . '<br>';
    } else {
        echo $email . '<br>';
    }
    if (strlen($password) < 6) {
        echo 'your password must be at least 6 digits or characters' . '<br>';
    } else {
        echo $password . '<br>';
    }
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        echo 'your url is not valide' . '<br>';
    } else {
        if (stripos($url, 'www.linkedin.com') !== false) {
            echo $url . '<br>';
        } else {
            echo 'your url must contain www.linkedin.com' . '<br>';
        }
    }
    if (!empty($_FILES['uploadedfile']['name']) && isset($_FILES['uploadedfile']['name'])) {
        $tmp_path = $_FILES['uploadedfile']['tmp_name'];
        $name = $_FILES['uploadedfile']['name'];
        $size = $_FILES['uploadedfile']['size'];
        $type = $_FILES['uploadedfile']['type'];

        $namearray = explode('.', $name);
        $extension = end($namearray);
        $final = rand() . time() . '.' . $extension;
        $allowedextenssions = ['png', 'jpg', 'mp4', 'mp3', 'jpeg', 'pdf', 'rar', 'exe'];
        if (in_array($extension, $allowedextenssions)) {
            $disfolder = './uploads/';
            $dispath = $disfolder . $final;
            echo 'final name: ' . $final . '<br>';
            echo 'temp path: ' . $tmp_path . '<br>';
            echo 'new path: ' . $dispath . '<br>';
            move_uploaded_file($tmp_path, $dispath);
            if (move_uploaded_file($tmp_path, $dispath)) {
                echo 'file uploaded <br>';
            } else {
                echo 'Error(couldn\'t upload file) <br>';
            }
        } else {
            echo 'file extension not allowed  <br>';
        }
    } else {
        echo 'there no file (upload one first) <br>';
    }
    $checkDate = strtotime('1/1/2010');
    $agetillnow = strtotime(date('m/d/Y')) - $date;
    if ($date != 0) {
        //not best practice as !empty but only for change
        if ($date > $checkDate) {

            echo "Date Must be < 1/1/2010  <br>";
        } else {
            //calculating age as addtion to the task
            echo "your age is " . floor($agetillnow / 31536000);
        }
    } else {
        echo "Invalid Date (please enter your birthdate) <br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Your Email Address">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Linkedin Account URL</label>
                <input type="text" name="url" class="form-control" placeholder="Enter Your Linkedin URL">
            </div>
            <div class="form-group">
                <label> File</label>
                <input type="file" name="uploadedfile">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Birth Date</label>
                <input type="date" name="BirthDate" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="done" class="form-control">
            </div>

        </form>
    </div>
</body>

</html>