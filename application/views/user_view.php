<html>
    <body>
        <table>
            <tr>
               <th>S.no</th><th>user</th><th>company</th>
            </tr>
                <?php
                    foreach($userArray as $key => $value){
                        // echo'<pre>';
                        // print_r($value);
                        // echo'</pre>';
                        echo '<tr>
                            <td>'.$value['id'].'<td>
                            <td>'.$value['username'].'<td>
                            <td>'.$value['company'].'<td>
                        </tr>';
                    }
                ?>
        </table>
    </body>
</html>