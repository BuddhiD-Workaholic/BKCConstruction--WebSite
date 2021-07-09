<?php
// Array with names
$a[] = "Carpenter: Colombo";
$info[$a[0]]="Required 4 Carpenters for a site in  Colmbo. Join a well respected over 25 years established Company. Great remuneration package for Right Candidate. Report to Estimating Manager. Slary: 60000 and Up";
$a[] = "Carpenter: Negambo";
$info[$a[1]]="Required 6 Carpenters for a site in  Colmbo. Join a well respected over 25 years established Company. Great remuneration package for Right Candidate. Report to Estimating Manager. Slary: 60000 and Up";
$a[] = "Carpenter: Jafna";
$info[$a[2]]="Required 2 Carpenters for a site in  Jafna. Join a well respected over 25 years established Company. Great remuneration package for Right Candidate. Report to Estimating Manager. Slary: 60000 and Up";
$a[] = "Carpenter: Kandy";
$info[$a[3]]="Required 2 Carpenters for a site in  Kandy. Join a well respected over 25 years established Company. Great remuneration package for Right Candidate. Report to Estimating Manager. Slary: 60000 and Up";
$a[] = "Site Admin: Kandy";
$info[$a[4]]="Join a well respected over 25 years established Company. Great remuneration package for Right Candidate. Report to Estimating Manager. Slary: 100000 and Up";
$a[] = "Site Admin: Jafna";
$info[$a[5]]="Join a well respected over 25 years established Company. Great remuneration package for Right Candidate. Report to Estimating Manager. Slary: 100000 and Up";
$a[] = "Site Admin: Kurunagala";
$info[$a[6]]="Join a well respected over 25 years established Company. Great remuneration package for Right Candidate. Report to Estimating Manager. Slary: 100000 and Up";
$a[] = "Civil Engineer: Colombo";
$info[$a[7]]="Join a well respected over 25 years established Company. Great remuneration package for Right Candidate. Report to Estimating Manager. Slary: 100000 and Up";
$a[] = "Civil Engineer: Hambantota";
$info[$a[8]]="Join a well respected over 25 years established Company. Great remuneration package for Right Candidate. Report to Estimating Manager. Slary: 100000 and Up";
$a[] = "Plumbers: Jafna";
$info[$a[9]]="Join a well respected over 25 years established Company. Great remuneration package for Right Candidate. Report to Estimating Manager. Slary: 50000 and Up";
$a[] = "Meason Bas: Kandy";
$info[$a[10]]="Join a well respected over 25 years established Company. Great remuneration package for Right Candidate. Report to Estimating Manager. Slary: 80000 and Up";
$a[] = "Plumbers: Kandy";
$info[$a[11]]="Join a well respected over 25 years established Company. Great remuneration package for Right Candidate. Report to Estimating Manager. Slary: 50000 and Up";
$a[] = "Project Mamagers: Hambantoata";
$info[$a[12]]="Join a well respected over 25 years established Company. Great remuneration package for Right Candidate. Report to Estimating Manager. Slary: 160000 and Up";
$a[] = "Project Mamagers: Horana";
$info[$a[13]]="Join a well respected over 25 years established Company. Great remuneration package for Right Candidate. Report to Estimating Manager. Slary: 160000 and Up";
$a[] = "Project Mamagers: Colombo";
$info[$a[14]]="Join a well respected over 25 years established Company. Great remuneration package for Right Candidate. Report to Estimating Manager. Slary: 160000 and Up";


$q = $_REQUEST["F"];

$hint = "";

if ($q !== "") { 		  

$q = strtolower($q);
$len=strlen($q);
	
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
		  $table = '<div class="card"><div class="card-body">';	
		  $tr = '<h5 class="card-title" align="center">';
		  $td = '<p class="card-text" align="center">';	
        $table .= $tr. $name . '</h5>' . $td . $info[$name]. '</p>';
		  $table .= '<p class="card-text" align="center"><button type="button" onclick="func()" class="btn btn-primary BtnModel">Apply for this Job</button></p>
              </div>
              </div>';
		  		echo $table;
      } else {
		  $table = '<div class="card"><div class="card-body"';	
		  $tr = '<h5 class="card-title" align="center">';
		  $td = '<p class="card-text" align="center">';
		  
        $hint .= ", $name";
        $table .= $tr . $name . '</h5>' . $td . $info[$name] . '</p>';
		$table .= '<p class="card-text" align="center"><button type="button" onclick="func()" class="btn btn-primary BtnModel">Apply for this Job</button></p>
                </div>
              </div>';
		  		echo $table;
      }
    }
  }
}

echo $hint === "" ? "No suggestions!" : "";
?>