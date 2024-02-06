<?php
class Test extends Dbh {

    public function create($name,$email){
        $query = "INSERT INTO test_tbl(name,email) VALUES('$name','$email')";
        $stmt = $this->connect()->query($query);
        if($stmt){
            return header('Location: table.php');
        }else{
            return 'Invalid Statement';
        }
    }
    public function getUsers(){
        $sql = "SELECT * FROM test_tbl";
        $stmt = $this->connect()->query($sql);
        $i= 1;
        echo 
        '<table class="table table-hover">
                <thead>
                    <th>SL.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Update</th>
                    <th>Delete</th>
                </thead>
                <tbody>';
        while($row = $stmt->fetch()){
            echo 
            '<tr>
                <td>'.$i.'</td>
                <td>'.$row['name'].'</td>
                <td>'.$row['email'].'</td>
                <td><a class="btn btn-sm btn-outline-primary" href="update.php?id='.$row['id'].'">Update</a></td>
                <td><a class="btn btn-sm btn-outline-danger" href="delete.php?id='.$row['id'].'">Delete</a></td>
            </tr>';
            $i++;
        }
        echo 
        '</tbody>
        </table>';
    }
    public function update($name,$email,$id){
        $query = "UPDATE test_tbl SET name = '$name', email = '$email' WHERE id = $id";
        $stmt = $this->connect()->query($query);
        if($stmt){
            return header('Location: table.php');
        }else{
            return 'Invalid Statement';
        }
    }

    public function delete($id){
        $query = "DELETE FROM test_tbl WHERE id = $id";
        $stmt = $this->connect()->query($query);
        if($stmt){
            return header('Location: table.php');
        }else{
            return 'Invalid Statement';
        }
    }
}