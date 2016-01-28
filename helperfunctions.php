<?php 
function addnews($hl,$desc,$imgname,$user_, $tst,$conn)
$sql='INSERT into tb_iithnews(headline,description,postedby,entry_time) values ("$hl","$desc","$imgname","$user","$tst")';
if ($conn->query($sql) === TRUE) {
    echo "Post added successfully";
} else {
    echo "Error inserting the data " . $conn->error;
}
?>