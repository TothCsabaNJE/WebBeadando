<?php
        $host = 'localhost';
        $dbname = 'beadweb';
        $username = 'beadweb';
        $password = 'bead_312';
        ?>
        <table class="striped">
            <tr class="header">
                <td>Sender</td>
                <td>Message</td>
            </tr>
            <?php
                $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $stmt = $conn->prepare("SELECT sender, message FROM `messages`");
                $stmt->execute();
               while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                   echo "<tr>";
                   echo "<td>".$row['sender']."</td>";
                   echo "<td>".$row['message']."</td>";
                   echo "</tr>";
               }

            ?>
        </table>