<?php
include("connectform.php");
$rInfoDef = mysqli_real_escape_string($dbconn, $_POST["rInfoDef"]);
$rInfoPresence = mysqli_real_escape_string($dbconn, $_POST["rInfoPresence"]);
$rInfoNow = mysqli_real_escape_string($dbconn, $_POST["rInfoNow"]);
$rInfoLDR = mysqli_real_escape_string($dbconn, $_POST["rInfoLDR"]);
$rInfoGender = mysqli_real_escape_string($dbconn, $_POST["rInfoGender"]);
$rStartDate = mysqli_real_escape_string($dbconn, $_POST["rStartDate"]);
$rEndDate = mysqli_real_escape_string($dbconn, $_POST["rEndDate"]);
$romComm = mysqli_real_escape_string($dbconn, $_POST["romComm"]);
$romCommInt = mysqli_real_escape_string($dbconn, $_POST["romCommInt"]);
$romFriend = mysqli_real_escape_string($dbconn, $_POST["romFriend"]);
$romInt = mysqli_real_escape_string($dbconn, $_POST["romInt"]);
$romPass = mysqli_real_escape_string($dbconn, $_POST["romPass"]);
$romPat = mysqli_real_escape_string($dbconn, $_POST["romPat"]);
$romRom = mysqli_real_escape_string($dbconn, $_POST["romRom"]);
$romTru = mysqli_real_escape_string($dbconn, $_POST["romTru"]);
$rIdealGender = mysqli_real_escape_string($dbconn, $_POST["rIdealGender"]);
$bfInfoDef = mysqli_real_escape_string($dbconn, $_POST["bfInfoDef"]);
$bfInfoPresence = mysqli_real_escape_string($dbconn, $_POST["bfInfoPresence"]);
$bfNum = mysqli_real_escape_string($dbconn, $_POST["bfNum"]);
$bfCountryRes = mysqli_real_escape_string($dbconn, $_POST["bfCountryRes"]);
$bfCityRes = mysqli_real_escape_string($dbconn, $_POST["bfCityRes"]);
$bfOutRes = mysqli_real_escape_string($dbconn, $_POST["bfOutRes"]);
$bfOneCheck = mysqli_real_escape_string($dbconn, $_POST["bfOneCheck"]);
$bfOneComm = mysqli_real_escape_string($dbconn, $_POST["bfOneComm"]);
$bfOneCommInt = mysqli_real_escape_string($dbconn, $_POST["bfOneCommInt"]);
$bfOneFriend = mysqli_real_escape_string($dbconn, $_POST["bfOneFriend"]);
$bfOneInt = mysqli_real_escape_string($dbconn, $_POST["bfOneInt"]);
$bfOnePass = mysqli_real_escape_string($dbconn, $_POST["bfOnePass"]);
$bfOnePat = mysqli_real_escape_string($dbconn, $_POST["bfOnePat"]);
$bfOneRom = mysqli_real_escape_string($dbconn, $_POST["bfOneRom"]);
$bfOneTru = mysqli_real_escape_string($dbconn, $_POST["bfOneTru"]);
$bfOneGender = mysqli_real_escape_string($dbconn, $_POST["bfOneGender"]);
$bfTwoCheck = mysqli_real_escape_string($dbconn, $_POST["bfTwoCheck"]);
$bfTwoStat = mysqli_real_escape_string($dbconn, $_POST["bfTwoStat"]);
$bfTwoComm = mysqli_real_escape_string($dbconn, $_POST["bfTwoComm"]);
$bfTwoCommInt = mysqli_real_escape_string($dbconn, $_POST["bfTwoCommInt"]);
$bfTwoFriend = mysqli_real_escape_string($dbconn, $_POST["bfTwoFriend"]);
$bfTwoInt = mysqli_real_escape_string($dbconn, $_POST["bfTwoInt"]);
$bfTwoPass = mysqli_real_escape_string($dbconn, $_POST["bfTwoPass"]);
$bfTwoPat = mysqli_real_escape_string($dbconn, $_POST["bfTwoPat"]);
$bfTwoRom = mysqli_real_escape_string($dbconn, $_POST["bfTwoRom"]);
$bfTwoTru = mysqli_real_escape_string($dbconn, $_POST["bfTwoTru"]);
$bfTwoGender = mysqli_real_escape_string($dbconn, $_POST["bfTwoGender"]);
$bfThreeCheck = mysqli_real_escape_string($dbconn, $_POST["bfThreeCheck"]);
$bfThreeComm = mysqli_real_escape_string($dbconn, $_POST["bfThreeComm"]);
$bfThreeCommInt = mysqli_real_escape_string($dbconn, $_POST["bfThreeCommInt"]);
$bfThreeFriend = mysqli_real_escape_string($dbconn, $_POST["bfThreeFriend"]);
$bfThreeInt = mysqli_real_escape_string($dbconn, $_POST["bfThreeInt"]);
$bfThreePass = mysqli_real_escape_string($dbconn, $_POST["bfThreePass"]);
$bfThreePat = mysqli_real_escape_string($dbconn, $_POST["bfThreePat"]);
$bfThreeRom = mysqli_real_escape_string($dbconn, $_POST["bfThreeRom"]);
$bfThreeTru = mysqli_real_escape_string($dbconn, $_POST["bfThreeTru"]);
$bfThreeGender = mysqli_real_escape_string($dbconn, $_POST["bfThreeGender"]);
$age = mysqli_real_escape_string($dbconn, $_POST["age"]);
$birthplace = mysqli_real_escape_string($dbconn, $_POST["birthplace"]);
$res = mysqli_real_escape_string($dbconn, $_POST["res"]);
$participantEth = mysqli_real_escape_string($dbconn, $_POST["participantEth"]);
$participantSexOrient = mysqli_real_escape_string($dbconn, $_POST["participantSexOrient"]);
$participantRomOrient = mysqli_real_escape_string($dbconn, $_POST["participantRomOrient"]);
$maritalStatus = mysqli_real_escape_string($dbconn, $_POST["maritalStatus"]);
$participantGender = mysqli_real_escape_string($dbconn, $_POST["participantGender"]);
$participantSex = mysqli_real_escape_string($dbconn, $_POST["participantSex"]);
$partnerGenderOtherText = mysqli_real_escape_string($dbconn, $_POST["partnerGenderOtherText"]);
$rIdealGenderText = mysqli_real_escape_string($dbconn, $_POST["rIdealGenderText"]);
$bfOneGenderOtherText = mysqli_real_escape_string($dbconn, $_POST["bfOneGenderOtherText"]);
$bfTwoGenderOtherText = mysqli_real_escape_string($dbconn, $_POST["bfTwoGenderOtherText"]);
$bfThreeGenderOtherText = mysqli_real_escape_string($dbconn, $_POST["bfThreeGenderOtherText"]);
$participantEthOtherText = mysqli_real_escape_string($dbconn, $_POST["participantEthOtherText"]);
$participantSexOrientOtherText = mysqli_real_escape_string($dbconn, $_POST["participantSexOrientOtherText"]);
$participantRomOrientOtherText = mysqli_real_escape_string($dbconn, $_POST["participantRomOrientOtherText"]);
$maritalOtherText = mysqli_real_escape_string($dbconn, $_POST["maritalOtherText"]);
$participantGenderOtherText = mysqli_real_escape_string($dbconn, $_POST["participantGenderOtherText"]);
$participantSexOtherText = mysqli_real_escape_string($dbconn, $_POST["participantSexOtherText"]);


$query = "INSERT INTO form_RBF (rInfoDef, rInfoPresence, rInfoNow, rInfoLDR, rInfoGender, rStartDate, rEndDate, romComm, romCommInt, romFriend, romInt, romPass, romPat, romRom, romTru, rIdealGender, bfInfoDef, bfInfoPresence, bfNum, bfCountryRes, bfCityRes, bfOutRes, bfOneCheck, bfOneComm, bfOneCommInt, bfOneFriend, bfOneInt, bfOnePass, bfOnePat, bfOneRom, bfOneTru, bfOneGender, bfTwoCheck, bfTwoStat, bfTwoComm, bfTwoCommInt, bfTwoFriend, bfTwoInt, bfTwoPass, bfTwoPat, bfTwoRom, bfTwoTru, bfTwoGender, bfThreeCheck, bfThreeComm, bfThreeCommInt, bfThreeFriend, bfThreeInt, bfThreePass, bfThreePat, bfThreeRom, bfThreeTru, bfThreeGender, age, birthplace, res, participantEth, participantSexOrient, participantRomOrient, maritalStatus, participantGender, participantSex, partnerGenderOtherText, rIdealGenderText, bfOneGenderOtherText, bfTwoGenderOtherText, bfThreeGenderOtherText, participantEthOtherText, participantSexOrientOtherText, participantRomOrientOtherText, maritalOtherText, participantGenderOtherText, participantSexOtherText) VALUES (N'".$rInfoDef."',N'".$rInfoPresence."',N'".$rInfoNow."',N'".$rInfoLDR."',N'".$rInfoGender."',N'".$rStartDate."',N'".$rEndDate."',N'".$romComm."',N'".$romCommInt."',N'".$romFriend."',N'".$romInt."',N'".$romPass."',N'".$romPat."',N'".$romRom."',N'".$romTru."',N'".$rIdealGender."',N'".$bfInfoDef."',N'".$bfInfoPresence."',N'".$bfNum."',N'".$bfCountryRes."',N'".$bfCityRes."',N'".$bfOutRes."',N'".$bfOneCheck."',N'".$bfOneComm."',N'".$bfOneCommInt."',N'".$bfOneFriend."',N'".$bfOneInt."',N'".$bfOnePass."',N'".$bfOnePat."',N'".$bfOneRom."',N'".$bfOneTru."',N'".$bfOneGender."',N'".$bfTwoCheck."',N'".$bfTwoStat."',N'".$bfTwoComm."',N'".$bfTwoCommInt."',N'".$bfTwoFriend."',N'".$bfTwoInt."',N'".$bfTwoPass."',N'".$bfTwoPat."',N'".$bfTwoRom."',N'".$bfTwoTru."',N'".$bfTwoGender."',N'".$bfThreeCheck."',N'".$bfThreeComm."',N'".$bfThreeCommInt."',N'".$bfThreeFriend."',N'".$bfThreeInt."',N'".$bfThreePass."',N'".$bfThreePat."',N'".$bfThreeRom."',N'".$bfThreeTru."',N'".$bfThreeGender."',N'".$age."',N'".$birthplace."',N'".$res."',N'".$participantEth."',N'".$participantSexOrient."',N'".$participantRomOrient."',N'".$maritalStatus."',N'".$participantGender."',N'".$participantSex."',N'".$partnerGenderOtherText."',N'".$rIdealGenderText."',N'".$bfOneGenderOtherText."',N'".$bfTwoGenderOtherText."',N'".$bfThreeGenderOtherText."',N'".$participantEthOtherText."',N'".$participantSexOrientOtherText."',N'".$participantRomOrientOtherText."',N'".$maritalOtherText."',N'".$participantGenderOtherText."',N'".$participantSexOtherText."')";
echo "Thank you for taking part in our study. Should you have any questions, please contact PhD candidate, Ng Li Ying, at LIYING001@e.ntu.edu.sg.";
echo "<br/>";
if (mysqli_query($dbconn, $query)) {
               echo "Data were saved successfully.";
            } else {
               echo "Error: " . $query . "" . mysqli_error($dbconn);

               $filename = date('YmdHis').".txt";
               if (!file_exists($filename)) {
                  $fh = fopen($filename, 'w') or die("Can't create file");
               }
               $ret = file_put_contents($filename, $query, FILE_APPEND | LOCK_EX);
               if($ret === false) {
                  die('An error has occured.');
               }
               else {
                  echo "Data were saved successfully.";
               }

            }
?>