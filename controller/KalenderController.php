<?php
	require(ROOT . "model/KalenderModel.php");

	function index() {
		render("kalender/index", array(
			"getBirthday" =>getKalender()
		));
		
	}

	function create() {
		render("birthday/create");
	}

	function createAction() {
		// hier update uitvoeren 
		// functie aanroepen vanuit model en data als parameter aan modellaag meegeven
		createBirthday($_POST);
		header('Location: ' . URL . 'kalender/index');
	}

	function edit($id) {
		$edit = getPerson($id);
		// TODO: check if the person exists; if not then exit with errormessage (redirect)
		if ($edit == null) die('stuk');
/* 
array (size=5)
  'id' => string '350' (length=3)
  'person' => string 'Quinten' (length=7)
  'day' => string '7' (length=1)
  'month' => string '12' (length=2)
  'year' => string '1999' (length=4)
*/
  		$data['person'] = $edit['person'];
  		$data['year'] = $edit['year'];
  		$data['month'] = $edit['month'];
  		$data['day'] = $edit['day'];
   		$data['id'] = $edit['id'];


		render("birthday/edit", $data);
	}

	function editAction() {
		// hier update uitvoeren 
		// functie aanroepen vanuit model en data als parameter aan modellaag meegeven

		echo "edit Action in Controller";
		editBirthday($_POST);
		header('Location: ' . URL . 'kalender/index');
	}

	function delete($id) {
		deleteBirthday($id);
		header('Location: ' . URL . 'kalender/index');
	}
?>