<?php 
	function getKalender() {
		$db = openDatabaseConnection();
		$sql_select_all="SELECT * FROM birthdays ORDER BY month, day, year, person";
		$query = $db->prepare($sql_select_all);
        $query->execute();
		$db = null;

		return $query->fetchAll();

	}
    function createBirthday($data) {
        $person = $data['person'];
        $day = $data['day'];
        $month = $data['month'];
        $year = $data['year'];
        $db = openDatabaseConnection();
        $sql_add_post = "INSERT INTO birthdays (person, day, month, year) VALUES ('$person', '$day', '$month', '$year')";
        $query = $db->prepare($sql_add_post);
        $query->execute();
        $db = null;

        // TODO: check if the insert worked.
        // if yes, then return true
        // if no, then return false
        RETURN true;
    }

    function getPerson($id) {
        $db = openDatabaseConnection();
        $sql_select_all="SELECT * FROM birthdays WHERE id=" . $id . " ORDER BY month, day, year, person";
        $query = $db->prepare($sql_select_all);
        $query->execute();
        $db = null;

        return $query->fetch();
    }

    function editBirthday($data) {
        $id = $data['id'];
        $person = $data['person'];
        $day = $data['day'];
        $month = $data['month'];
        $year = $data['year'];
        $db = openDatabaseConnection();
        $sql_edit_post = "UPDATE birthdays SET person = '$person', day = $day, month = $month, year = $year WHERE id = $id";        
        $query = $db->prepare($sql_edit_post);
        $query->execute();
        $db = null;

        // TODO: check if the insert worked.
        // if yes, then return true
        // if no, then return false
        RETURN true;
    }

    function deleteBirthday($id) {
        $db = openDatabaseConnection();
        $sql_delete_id = "DELETE FROM birthdays WHERE id= $id";
        $query = $db->prepare($sql_delete_id);
        $query->execute();
        $db = null;
    }
?>