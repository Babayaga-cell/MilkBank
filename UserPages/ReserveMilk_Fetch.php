<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=milkbankdb", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
 $data = array(
  ':Donate_FirstName'   => "%" . $_GET['Donate_FirstName'] . "%",
  ':Donate_LastName'   => "%" . $_GET['Donate_LastName'] . "%",
  ':Donate_Age'     => "%" . $_GET['Donate_Age'] . "%",
  ':Donate_BirthDate'    => "%" . $_GET['Donate_BirthDate'] . "%",
  ':Donate_Address'    => "%" . $_GET['Donate_Address'] . "%",
  ':Donate_PhoneNum'    => "%" . $_GET['Donate_PhoneNum'] . "%",
  ':Donate_Email'    => "%" . $_GET['Donate_Email'] . "%",
  ':Donate_Spouse'   => "%" . $_GET['Donate_Spouse'] . "%",
  ':Donate_DaysGiveBirth'   => "%" . $_GET['Donate_DaysGiveBirth'] . "%",
  ':Donate_Reason'     => "%" . $_GET['Donate_Reason'] . "%",
  ':Hospital_DonateChoice1'    => "%" . $_GET['Hospital_DonateChoice1'] . "%",
  ':bottles_DonateChoice1'    => "%" . $_GET['bottles_DonateChoice1'] . "%",
  ':Hospital_DonateChoice2'    => "%" . $_GET['Hospital_DonateChoice2'] . "%",
  ':bottles_DonateChoice2'    => "%" . $_GET['bottles_DonateChoice2'] . "%",
  ':Donate_Date'    => "%" . $_GET['Donate_Date'] . "%",
  ':Donate_Valid'    => "%" . $_GET['Donate_Valid'] . "%"
 );
 $query = "SELECT * FROM milk_donate 
           WHERE Donate_FirstName LIKE :Donate_FirstName AND
                    Donate_LastName LIKE :Donate_LastName AND
                    Donate_Age LIKE :Donate_Age AND
                    Donate_BirthDate LIKE :Donate_BirthDate AND
                    Donate_Address LIKE :Donate_Address AND
                    Donate_PhoneNum LIKE :Donate_PhoneNum AND
                    Donate_Email LIKE :Donate_Email AND
                    Donate_Spouse LIKE :Donate_Spouse AND
                    Donate_DaysGiveBirth LIKE :Donate_DaysGiveBirth AND
                    Donate_Reason LIKE :Donate_Reason AND
                    Hospital_DonateChoice1 LIKE :Hospital_DonateChoice1 AND
                    bottles_DonateChoice1 LIKE :bottles_DonateChoice1 AND
                    Hospital_DonateChoice2 LIKE :Hospital_DonateChoice2 AND
                    bottles_DonateChoice2 LIKE :bottles_DonateChoice2 AND
                    Donate_Date LIKE :Donate_Date AND
                    Donate_Valid LIKE :Donate_Valid 
            ORDER BY Donate_ID DESC";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'Donate_ID'    => $row['Donate_ID'],   
   'Donate_FirstName'  => $row['Donate_FirstName'],
   'Donate_LastName'   => $row['Donate_LastName'],
   'Donate_Age'    => $row['Donate_Age'],
   'Donate_BirthDate'  => $row['Donate_BirthDate'],
   'Donate_Address'   => $row['Donate_Address'],
   'Donate_PhoneNum'    => $row['Donate_PhoneNum'],
   'Donate_Email'  => $row['Donate_Email'],
   'Donate_Spouse'   => $row['Donate_Spouse'],
   'Donate_DaysGiveBirth'    => $row['Donate_DaysGiveBirth'],
   'Donate_Reason'  => $row['Donate_Reason'],
   'Hospital_DonateChoice1'   => $row['Hospital_DonateChoice1'],
   'bottles_DonateChoice1'    => $row['bottles_DonateChoice1'],
   'Hospital_DonateChoice2'  => $row['Hospital_DonateChoice2'],
   'bottles_DonateChoice2'   => $row['bottles_DonateChoice2'],
   'Donate_Date'    => $row['Donate_Date'],
   'Donate_Valid'  => $row['Donate_Valid']
 
  );
 }
 header("Content-Type: application/json");
 echo json_encode($output);
}