<?php
include ('../conn/conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {    

    if (isset($_POST['date'], $_POST['day'])) {
        $trackerID = $_POST['tbl_tracker_id'];
        $date = $_POST['date'];
        $day = $_POST['day'];
        $drinking_water = $_POST['drinking_water'];
        $meditation = $_POST['meditation'];
        $readBook = $_POST['read_book'];
        $eating_healthy = $_POST['eating_healthy'];
        $good_sleep_cycle = $_POST['good_sleep_cycle'];
        $playing_sports = $_POST['playing_sports'];
        $learn_something_new = $_POST['learn_something_new'];
        $use_nature_therapy = $_POST['use_nature_therapy'];
        $building_a_connection_with_loved_ones = $_POST['building_a_connection_with_loved_ones'];
        try {
            $conn->beginTransaction();

            $stmt = $conn->prepare("UPDATE tbl_tracker SET date = :date, day = :day, drinking_water = :drinking_water, meditation = :meditation, read_book = :read_book, eating_healthy = :eating_healthy, good_sleep_cycle = :good_sleep_cycle, playing_sports = :playing_sports, learn_something_new = :learn_something_new, use_nature_therapy = :use_nature_therapy, building_a_connection_with_loved_ones = :building_a_connection_with_loved_ones WHERE tbl_tracker_id = :trackerID ");
           
            $stmt->bindParam(":trackerID", $trackerID, PDO::PARAM_STR);
            $stmt->bindParam(":date", $date, PDO::PARAM_STR);
            $stmt->bindParam(":day", $day, PDO::PARAM_STR);
            $stmt->bindParam(":drinking_water", $drinking_water, PDO::PARAM_STR);
            $stmt->bindParam(":meditation", $meditation, PDO::PARAM_STR);
            $stmt->bindParam(":read_book", $readBook, PDO::PARAM_STR);
            $stmt->bindParam(":eating_healthy", $eating_healthy, PDO::PARAM_STR);
            $stmt->bindParam(":good_sleep_cycle", $good_sleep_cycle, PDO::PARAM_STR);
            $stmt->bindParam(":playing_sports", $playing_sports, PDO::PARAM_STR);
            $stmt->bindParam(":learn_something_new", $learn_something_new, PDO::PARAM_STR);
            $stmt->bindParam(":use_nature_therapy", $use_nature_therapy, PDO::PARAM_STR);
            $stmt->bindParam(":building_a_connection_with_loved_ones", $building_a_connection_with_loved_ones, PDO::PARAM_STR);

            $stmt->execute();
            $conn->commit();

            echo "
                <script>
                    alert('Tracker updated successfully!');
                    window.location.href = 'http://localhost/Habitify/home(1).php';
                </script>
            ";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    } else {
        echo "
            <script>
                alert('Fill the date!');
                window.location.href = 'http://localhost/Habitify/home(1).php';
            </script>
        ";
    }
}
?>
