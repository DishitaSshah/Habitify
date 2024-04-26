<?php
session_start();
include 'connect.php';
if(!isset($_SESSION['email'])){
    header("location: index.php");
    exit();
}{
    $email = $_SESSION['email'];
    $sql = "SELECT fName FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $fName = $row['fName'];
    } else {
        echo "Welcome User!";
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Habit Tracker</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Data Table --> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins';
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('IMAGES/habit.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .main {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            width: 1450px;
            padding: 20px;
        }

        .profile-container {
            width: 200px;
            background-color: rgba(0, 0, 0, 0.7);
            color: rgb(255, 255, 255);
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            padding: 20px;
        }

        .profile-container h3 {
            margin-bottom: 20px;
        text-align: center;
        }

        .profile-container .profile-info {
            text-align: center;
        }

        .tracker-container {
            width: 1450px;
            height: 700px;
            background-color: rgba(0, 0, 0, 0.7);
            color: rgb(255, 255, 255);
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            padding: 40px;
        }

        .table {
            color: rgb(255, 255, 255) !important; 
            }

        .dataTables_wrapper {
            position: relative;
            padding: 10px;
            height: 570px !important;
            text-align: center !important;
        }

        .dataTables_info {
            position: absolute;
            bottom: 10px;
            left: 10px;
        }

        .dataTables_paginate {
            position: absolute;
            bottom: 10px;
            right: 0px;
        }

        table.dataTable thead > tr > th.sorting, table.dataTable thead > tr > th.sorting_asc, table.dataTable thead > tr > th.sorting_desc, table.dataTable thead > tr > th.sorting_asc_disabled, table.dataTable thead > tr > th.sorting_desc_disabled, table.dataTable thead > tr > td.sorting, table.dataTable thead > tr > td.sorting_asc, table.dataTable thead > tr > td.sorting_desc, table.dataTable thead > tr > td.sorting_asc_disabled, table.dataTable thead > tr > td.sorting_desc_disabled {
            text-align: center;
        }

        .action-button {
            display: flex;
            justify-content: center;
        }
        7
        .action-button > button {
            width: 28px;
            height: 28px;
            font-size: 17px;
            display: flex !important;
            justify-content: center;
            align-items: center;
            margin: 0px 2px;
        }
        </style>

</head>
<body>
    
    <div class="main">

        <div class="tracker-container">
            <div class="tracker-header row">
                <h3 class="col-9">Track your daily habit!</h3>
                <button class="btn btn-dark ml-5" data-toggle="modal" data-target="#addTrackerModal">Add tracker today</button>
                <button class="btn btn-danger ml-4" onclick="window.location.href = 'ds.php'">Logout</button>
            </div>
            <hr style="background-color: rgb(200, 200, 200)">
            <div class="profile-container">
    <div class="profile-info">
        <?php
            // Assuming $fname is the user's first name retrieved from the database
            echo "<p>Welcome, $fName!</p>";
        ?>
    </div>
</div>

            <!-- Add Modal -->
            <div class="modal fade" id="addTrackerModal" tabindex="-1" aria-labelledby="addTracker" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="background-color: rgb(60, 60, 60)">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addTracker">Add Daily Habit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="./endpoint/add-tracker.php" method="POST">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-2 col-form-label">Date:</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="date" name="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="day" class="col-sm-2 col-form-label">Day:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="day" name="day">
                                    </div>
                                </div>
                                <hr style="background-color: rgb(255, 255, 255);">
                                <h4>Habits</h4>
                                <div class="form-group row">
                                    <label for="drinking_water" class="col-sm-6 col-form-label">drinking_water:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="drinking_water" id="drinking_water">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="meditation" class="col-sm-6 col-form-label">meditation:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="meditation" id="meditation">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="read_book" class="col-sm-6 col-form-label">Read Book:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="read_book" id="read_book">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="eating_healthy" class="col-sm-6 col-form-label">eating_healthy:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="eating_healthy" id="eating_healthy">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="good_sleep_cycle" class="col-sm-6 col-form-label">Make good_sleep_cycle:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="good_sleep_cycle" id="good_sleep_cycle">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="playing_sports" class="col-sm-6 col-form-label">playing_sports:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="playing_sports" id="playing_sports">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="learn_something_new" class="col-sm-6 col-form-label">No learn_something_new:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="learn_something_new" id="learn_something_new">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="use_nature_therapy" class="col-sm-6 col-form-label">use_nature_therapy:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="use_nature_therapy" id="use_nature_therapy">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="building_a_connection_with_loved_ones" class="col-sm-6 col-form-label">building_a_connection_with_loved_ones:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="building_a_connection_with_loved_ones" id="building_a_connection_with_loved_ones">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-secondary">Add Tracker</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Update Modal -->
            <div class="modal fade" id="updateTrackerModal" tabindex="-1" aria-labelledby="updateTracker" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="background-color: rgb(60, 60, 60)">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateTracker">Update Daily Habit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="./endpoint/update-tracker.php" method="POST">
                                <input type="hidden" class="form-control" id="updateTrackerID" name="tbl_tracker_id">

                                <div class="form-group row">
                                    <label for="updateDate" class="col-sm-2 col-form-label">Date:</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="updateDate" name="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="updateDay" class="col-sm-2 col-form-label">Day:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="updateDay" name="day">
                                    </div>
                                </div>
                                <hr style="background-color: rgb(255, 255, 255);">
                                <h4>Habbits</h4>
                                <div class="form-group row">
                                    <label for="updatedrinking_water" class="col-sm-6 col-form-label">Drink water:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="drinking_water" id="updatedrinking_water">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="updatemeditation" class="col-sm-6 col-form-label">Meditation</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="meditation" id="updatemeditation">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="updateread_book" class="col-sm-6 col-form-label">Read Book:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="read_book" id="updateread_book">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="updateeating_healthy" class="col-sm-6 col-form-label">Eating healthy:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="eating_healthy" id="updateeating_healthy">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="updategood_sleep_cycle" class="col-sm-6 col-form-label">Sleep cycle:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="good_sleep_cycle" id="updategood_sleep_cycle">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="updateplaying_sports" class="col-sm-6 col-form-label">Sports:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="playing_sports" id="updateplaying_sports">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="updatelearn_something_new" class="col-sm-6 col-form-label">Learnt Something New:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="learn_something_new" id="updatelearn_something_new">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="updateuse_nature_therapy" class="col-sm-6 col-form-label">Spent time in Nature:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="use_nature_therapy" id="use_nature_therapy">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="updatebuilding_a_connection_with_loved_ones" class="col-sm-6 col-form-label">Spent time with loved ones:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="building_a_connection_with_loved_ones" id="building_a_connection_with_loved_ones">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-secondary">Update Tracker</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-container">
                <table class="table habit-table">
                    <thead class="thead-dark">
                        <tr>    
                            <th scope="col">Date</th>
                            <th scope="col">Day</th>
                            <th scope="col">Drink water</th>
                            <th scope="col">Meditation</th>
                            <th scope="col">Read Book</th>
                            <th scope="col">Eating healthy</th>
                            <th scope="col">Sleep cycle</th>
                            <th scope="col">Sports</th>
                            <th scope="col">Learnt Something New</th>
                            <th scope="col">Spent time in Nature</th>
                            <th scope="col">Spent time with loved ones</th>
                            <th scope="col">Progress</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                        include ('conn\conn.php');

                        $stmt = $conn->prepare("SELECT * FROM tbl_tracker");
                        $stmt->execute();

                        $result = $stmt->fetchAll();

                        foreach ($result as $row) {
                            $trackerID = $row['tbl_tracker_id'];
                            $date = $row['date'];
                            $day = $row['day'];
                            $drinking_water = $row['drinking_water'];
                            $meditation = $row['meditation'];
                            $read_book = $row['read_book'];
                            $eating_healthy = $row['eating_healthy'];
                            $good_sleep_cycle = $row['good_sleep_cycle'];
                            $playing_sports = $row['playing_sports'];
                            $learn_something_new = $row['learn_something_new'];
                            $use_nature_therapy = $row['use_nature_therapy'];
                            $building_a_connection_with_loved_ones = $row['building_a_connection_with_loved_ones'];

                            // Calculate progress here
                            $totalHabits  = 9;
                            $completedHabits = count(array_filter([$drinking_water, $meditation, $read_book, $eating_healthy, $good_sleep_cycle, $playing_sports, $learn_something_new, $use_nature_therapy, $building_a_connection_with_loved_ones], function($habit) { return $habit == 'Yes'; }));

                            // Avoid division by zero
                            $progress = $totalHabits > 0 ? ($completedHabits / $totalHabits) * 100 : 0;
                            ?>

                            <tr>
                                <th scope="row" id="date-<?= $trackerID ?>"><?= $date ?></th>
                                <td id="day-<?= $trackerID ?>"><?= $day ?></td>
                                <td id="drinking_water-<?= $trackerID ?>"><?= $drinking_water ?></td>
                                <td id="meditation-<?= $trackerID ?>"><?= $meditation ?></td>
                                <td id="read_book-<?= $trackerID ?>"><?= $read_book ?></td>
                                <td id="eating_healthy-<?= $trackerID ?>"><?= $eating_healthy ?></td>
                                <td id="good_sleep_cycle-<?= $trackerID ?>"><?= $good_sleep_cycle ?></td>
                                <td id="playing_sports-<?= $trackerID ?>"><?= $playing_sports ?></td>
                                <td id="learn_something_new-<?= $trackerID ?>"><?= $learn_something_new ?></td>
                                <td id="use_nature_therapy-<?= $trackerID ?>"><?= $use_nature_therapy ?></td>
                                <td id="building_a_connection_with_loved_ones-<?= $trackerID ?>"><?= $building_a_connection_with_loved_ones ?></td>
                                <td style="width: 150px;">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $progress ?>%;" aria-valuenow="<?= $progress ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="action-button">
                                    <button class="btn btn-dark" onclick="updateTracker(<?= $trackerID ?>)"><i class="fa-solid fa-pencil"></i></button>
                                    <button class="btn btn-danger" onclick="deleteTracker(<?= $trackerID ?>)"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>

                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    
    <!-- Data Table -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
            $('.habit-table').DataTable();
        });

        function updateTracker(id) {
            $("#updateTrackerModal").modal("show");

            let updateTrackerID = id;
            let updateDate = $("#date-" + id).text();
            let updateDay = $("#day-" + id).text();
            let updatedrinking_water = $("#drinking_water-" + id).text();
            let updatemeditation = $("#meditation-" + id).text();
            let updateread_book = $("#read_book-" + id).text();
            let updateeating_healthy = $("#eating_healthy-" + id).text();
            let updategood_sleep_cycle = $("#good_sleep_cycle-" + id).text();
            let updateplaying_sports = $("#playing_sports-" + id).text();
            let updatelearn_something_new = $("#learn_something_new-" + id).text();
            let updateuse_nature_therapy = $("#use_nature_therapy-" + id).text();
            let updatebuilding_a_connection_with_loved_ones = $("#building_a_connection_with_loved_ones-" + id).text();

            $("#updateTrackerID").val(updateTrackerID);
            $("#updateDate").val(updateDate);
            $("#updateDay").val(updateDay);
            $("#updatedrinking_water option").each(function() {
                let drinking_water = $(this).text();
                if (drinking_water === updatedrinking_water) {
                    $(this).prop("selected", true);
                    return false;
                }
            });
            $("#updatemeditation option").each(function() {
                let meditation = $(this).text();
                if (meditation === updatemeditation) {
                    $(this).prop("selected", true);
                    return false;
                }
            });
            $("#updateread_book option").each(function() {
                let read_book = $(this).text();
                if (read_book === updateread_book) {
                    $(this).prop("selected", true);
                    return false;
                }
            });
            $("#updateeating_healthy option").each(function() {
                let eating_healthy = $(this).text();
                if (eating_healthy === updateeating_healthy) {
                    $(this).prop("selected", true);
                    return false;
                }
            });
            $("#updategood_sleep_cycle option").each(function() {
                let good_sleep_cycle = $(this).text();
                if (good_sleep_cycle === updategood_sleep_cycle) {
                    $(this).prop("selected", true);
                    return false;
                }
            });
            $("#updateplaying_sports option").each(function() {
                let playing_sports = $(this).text();
                if (playing_sports === updateplaying_sports) {
                    $(this).prop("selected", true);
                    return false;
                }
            });
            $("#updatelearn_something_new option").each(function() {
                let learn_something_new = $(this).text();
                if (learn_something_new === updatelearn_something_new) {
                    $(this).prop("selected", true);
                    return false;
                }
            });
            $("#updateuse_nature_therapy").each(function() {
                let use_nature_therapy = $(this).text();
                if (use_nature_therapy === updateuse_nature_therapy) {
                    $(this).prop("selected", true);
                    return false;
                }
            });
            $("#updatebuilding_a_connection_with_loved_ones option").each(function() {
                let building_a_connection_with_loved_ones = $(this).text();
                if (building_a_connection_with_loved_ones === updatebuilding_a_connection_with_loved_ones) {
                    $(this).prop("selected", true);
                    return false;
                }
            });
        }

        function deleteTracker(id) {
            if (confirm("Do you want to delete this record?")) {
                window.location = "./endpoint/delete-tracker.php?tracker=" + id;
            }
        }
    </script>
</body>
</html>