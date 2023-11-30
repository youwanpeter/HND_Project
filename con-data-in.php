                                <?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "hnd";
									$f_name = $_POST["name"];
									$mail = $_POST["email"];
									$contact_no = $_POST["contact"];
									$type_of_func = $_POST["function"];
									$location = $_POST["location"];
									$date_of_func = $_POST["funcdate"];
									$message = $_POST["message"];

									//create connection
									$conn = new mysqli($servername, $username, $password, $dbname);

									//check connection
									if($conn->connect_error){
										die("Connection Failed: ".$conn->connect_error);
									}
									$sql = "INSERT INTO contact (f_name, email, contactno, typeoffunc, userlocation, dateoffunc, exmessage)
									VALUES ('$f_name', '$mail', '$contact_no', '$type_of_func', '$location', '$date_of_func', '$message')";
									if($conn->query($sql) === TRUE){
										echo "<script>
                                        alert('DATA INSERTED SUCCESSFULLY');
                                        window.location.href='contact-3.php';
                                        </script>";
                                        
									} else{
										echo "Error: ". $sql . "<br>" . $conn->error;
									}
									$conn->close();
								?>