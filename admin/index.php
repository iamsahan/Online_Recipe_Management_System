<?php
    session_start();
?>

<?php
    include_once("dbh.inc.php");

	$user = $_SESSION['name'];

    $sql = array(
            "SELECT * FROM recipe WHERE status = 'pending'", 
            "SELECT COUNT(rid) FROM recipe",
            "SELECT * FROM user WHERE type = 'user'",
            "SELECT * FROM user WHERE type = 'admin'",
			"SELECT * FROM recipe WHERE status = 'approved'"
        );

    for ($i = 0; $i < 5; $i++) {
        if ($i == 0) {
            $result = mysqli_query($conn, $sql[$i]);
        }
        if ($i == 1) {
            $result2 = mysqli_query($conn, $sql[$i]);
        }
        if ($i == 2) {
            $result3 = mysqli_query($conn, $sql[$i]);
        }
        if ($i == 3) {
            $result4 = mysqli_query($conn, $sql[$i]);
        }
		if ($i == 4) {
            $result5 = mysqli_query($conn, $sql[$i]);
        }
    }    

    $rowcount=mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Responsive Admin Dashboard</title>
		<!-- ======= Styles ====== -->
		<link rel="stylesheet" href="style.css" />
	</head>

	<body>
		<!-- =============== Navigation ================ -->
		<div class="container">
			<div class="navigation">
				<ul>
					<li>
						<a href="#">
							<span class="icon">
								<img src="imgs/customer01.jpg" alt="" />
							</span>
							<span class="tit"><?php echo $user;?></span>
						</a>
					</li>

					<li>
						<a href="#">
							<span class="icon">
								<ion-icon name="home-outline"></ion-icon>
							</span>
							<span class="title">Dashboard</span>
						</a>
					</li>

					<li>
						<a href="#recentRes">
							<span class="icon">
								<ion-icon name="albums-outline"></ion-icon>

							</span>
							<span class="title">Recent Recipes</span>
						</a>
					</li>

					<li>
						<a href="#don">
							<span class="icon">
								<ion-icon name="card-outline"></ion-icon>
							</span>
							<span class="title">Donations</span>
						</a>
					</li>

					<li>
						<a href="#recentUsr">
							<span class="icon">
							<ion-icon name="people-outline"></ion-icon>
							</span>
							<span class="title">Recent Users</span>
						</a>
					</li>

					<li>
						<a href="#mngAdmin">
							<span class="icon">
							<ion-icon name="person-circle-outline"></ion-icon>
							</span>
							<span class="title">Manage Admin</span>
						</a>
					</li>

					<li>
						<a href="settings.php?updateaid=<?= $mysqli['A_ID']?>">
							<span class="icon"> 
								<ion-icon name="settings-outline"></ion-icon>
							</span>
							<span class="title">Settings</span>
						</a>
					</li>

					<li>
						<a href="#">
							<span class="icon">
								<ion-icon name="log-out-outline"></ion-icon>
							</span>
							<span class="title">Sign Out</span>
						</a>
					</li>
				</ul>
			</div>

			<!-- ========================= Main ==================== -->
			<div class="main">
				<div class="topbar">
					<div class="toggle">
						<ion-icon name="menu-outline"></ion-icon>
					</div>

					<div class="se">
							<img src="imgs/l6.png">
				
					</div>

					<div class="user">
						<img src="imgs/customer01.jpg" alt="" />
					</div>
				</div>

				<!-- ======================= Cards ================== -->
				<div class="cardBox">
					<div class="card">
						<div>
							<div class="numbers"><?php echo $rowcount; ?></div>
							<div class="cardName">Total Recipes</div>
						</div>

						<div class="iconBx">
							<ion-icon name="eye-outline"></ion-icon>
						</div>
					</div>

					<div class="card">
						<div>
							
							<div class="numbers"></div>
							<div class="cardName">Registred Users</div>
						</div>

						<div class="iconBx">
							<ion-icon name="people-outline"></ion-icon>
						</div>
					</div>

					<div class="card">
						<div>
							
							<div class="numbers"></div>
							<div class="cardName">Recipes</div>
						</div>

						<div class="iconBx">
							<ion-icon name="albums-outline"></ion-icon>
						</div>
					</div>

					<div class="card">
						<div>
							<div class="numbers"><?php echo $rowcount; ?></div>
							<div class="cardName">Donations</div>
						</div>

						<div class="iconBx">
							<ion-icon name="cash-outline"></ion-icon>
						</div>
					</div>
				</div>

				<!-- ================ Recent Recipes ================= -->
				<div class="details">
					<div id="recentRes">
                        <div class="recentOrders">
                            <div class="cardHeader">
                                <h2>Pending Recipes</h2>
                            </div>

                            <table>
                                <thead>
                                    <tr>
                                        <td>Recipe ID</td>
                                        <td>Recipe Name</td>
                                        <td>Date</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_assoc($result)) { 
                                                echo      '<tr>';
                                                echo      '<td>'. $row['rid']. '</td>';
                                                echo      '<td><a href="/Online_Recipe_Management_System/recipe/view.php?id=' . $row['rid'] . '">' . $row['name'] . '</a></td>';
                                                echo      '<td>'. $row['date']. '</td>';
                                                echo      '<td>'. '<span class="status return">' .'Pending' .'</span>' .'</td>';
                                                echo      '</tr>';
                                            }
                                        };
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


					<!-- ================ Recent Recipes ================= -->
				<div class="details">
					<div id="recentRes">
                        <div class="recentOrders">
                            <div class="cardHeader">
                                <h2>Approved Recipes</h2>
                            </div>

                            <table>
                                <thead>
                                    <tr>
                                        <td>Recipe ID</td>
                                        <td>Recipe Name</td>
                                        <td>Date</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(mysqli_num_rows($result5) > 0) {
                                            while($row = mysqli_fetch_assoc($result5)) { 
                                                echo      '<tr>';
                                                echo      '<td>'. $row['rid']. '</td>';
                                                echo      '<td><a href="/Online_Recipe_Management_System/recipe/appview.php?id=' . $row['rid'] . '">' . $row['name'] . '</a></td>';
                                                echo      '<td>'. $row['date']. '</td>';
                                                echo      '<td>'. '<span class="status return">' .'Approved' .'</span>' .'</td>';
                                                echo      '</tr>';
                                            }
                                        };
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
				

                <!--recent users-->
				
					<div id="recentUsr">
                        <div class="recentOrders">
                            <div class="cardHeader">
                                <h2>Recent Users</h2>
                            </div>

                            <table>
                                <thead>
                                    <tr>
                                        <td>User ID</td>
                                        <td>User Name</td>
                                        <td>Email</td>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        if(mysqli_num_rows($result3) > 0) {
                                            while($row = mysqli_fetch_assoc($result3)) { 
                                                echo      '<tr>';
                                                echo      '<td>'. $row['uid']. '</td>';
                                                echo      '<td>'. $row['name']. '</td>';
                                                echo      '<td>'. $row['email']. '</td>';
                                                echo      '</tr>';
                                            }
                                        };
                                    ?>	
                                </tbody>
                            </table>
                        </div>
                    </div>


					
				

				<!--admins-->
			
				<div id="mngAdmin">
					<div class="recentOrders">
					    <div class="cardHeader">
							<h2>Admins</h2>
							<a href="addadmin.php" class="btn">Add New Admin</a>
						</div>

						<table>
							<thead>
								<tr>
									<td>User ID</td>
									<td>User Name</td>
									<td>Email</td>
								</tr>
							</thead>
							<tbody>
                                <?php
									if(mysqli_num_rows($result4) > 0) {
										while($row = mysqli_fetch_assoc($result4)) { 
											echo      '<tr>';
											echo      '<td>'. $row['uid']. '</td>';
                                            echo      '<td>'. $row['name']. '</td>';
                                            echo      '<td>'. $row['email']. '</td>';
											echo      '</tr>';
										}
									};
                            	?>	
							</tbody>
						</table>
					</div>
                </div>
			</div>
		</div>

		<!-- =========== Scripts =========  -->
		<script src="main.js"></script>

		<!-- ====== ionicons ======= -->
		<script
			type="module"
			src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
		></script>
		<script
			nomodule
			src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
		></script>
	</body>
</html>
