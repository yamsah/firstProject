<?php
    require_once("./header.php");
?>


    <div class="container mt-5 mb-3 text-center table-striped table-hover">
  <h2>People Registrated</h2>
  <table class="table">
    <thead>
      <tr class="bg-dark text-white">
        <th>Firstname</th>
        <th>Lastname</th>
        <th>City</th>
        <th>Email</th>
      </tr>
    </thead>

    <?php

        require_once("./connection.php");

        try{
            $stmt =$conn->prepare("SELECT * FROM registration");
            $stmt->execute();

        } catch (PDOException $th) {
            echo "Error: There is no data on your database...";
        }

    ?>
    <tbody>
        <?php
            while($result=$stmt->fetch()){
                
            

        ?>
    <tr>
        <td><?php echo $result['Firstname']?></td>
        <td><?php echo $result['Lastname']?></td>
        <td><?php echo $result['City']?></td>
        <td><?php echo $result['Email']?></td>
      </tr>

    <?php
    }
    ?>
    </tbody>
  </table>
</div>

    
</body>
</html>