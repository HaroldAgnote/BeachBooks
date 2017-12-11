<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/starter-template.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>BeachBooks - Set Up Appointment</title>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <script src="js/jquery-3.2.1.min.js"></script>

    </head>
    <body>
        <!-- Fixed navbar -->
        <?php include('nav.php'); ?>
        <?php 
            $db = new mysqli("localhost", "root", "SoIf7pZnY0DT", "beach_books");
            if ($db->connect_errno) {
                echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
            }
            $request_id = $_POST["request_id"] ;
            $year = $_POST["appoint-year"];
            $month = $_POST["appoint-month"];
            $day = $_POST["appoint-day"];
            $time = $_POST["appoint_time"];
            $extra = $_POST["appoint-specs"];
        ?>
        <main>
            <div class="container center-block">
                <h2>
                    Appointment Confirmed!
                </h2>
                <h3>You will meet with ooga booga on </h3>
                <h3><?php echo $month . " " . $day . ", " . $year; ?></h3>
                <h3>At <?php echo $time; ?></h3>
                <p><?php echo $extra; ?></p>
            </div>
            <?php 
                $query = "INSERT INTO Exchange
                            (RequestID, ExchangeOccurred, ExchangeDate, ExchangeTime, ExchangeInformation) 
                        VALUES
                            (?, NULL, ?, ?, ?);
                    "; 
                $month_num = "00"; 
                switch ($month) {
                    case "jan" : $month_num = "01";
                            break;
                    case "feb" : $month_num = "02";
                            break;
                    case "mar" : $month_num = "03";
                            break;
                    case "apr" : $month_num = "04";
                            break;
                    case "may" : $month_num = "05";
                            break;
                    case "jun" : $month_num = "06";
                            break;
                    case "jul" : $month_num = "07";
                            break;
                    case "aug" : $month_num = "08";
                            break;
                    case "sep" : $month_num = "09";
                            break;
                    case "oct" : $month_num = "10";
                            break;
                    case "nov" : $month_num = "11";
                            break;
                    case "dec" : $month_num = "12";
                            break;
                }
                $day_num = sprintf("%'.02d",$day);

                if ($stmt = $db->prepare($query)) {
                    $stmt->bind_param("dsss", $request_id, $date, $time, $extra);
                    $date = $year . "-" . $month_num . "-" . $day_num;
                    $stmt->execute();
                } else {
                    echo "Preparation failed :("; 
                    echo $db->error;
                }
            ?>
        </main>
    </body>
