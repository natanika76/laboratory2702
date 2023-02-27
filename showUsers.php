<?php
    $str = file_get_contents("users.txt");
    $arr = explode("\r\n", $str);
?>

<?php 

    $content = '';

    foreach($arr as $item){
        $user = explode(':', $item);

        $content = $content . "<tr>    
            <td>{$user[0]}</td>
            <td>{$user[1]}</td>
            <td>{$user[2]}</td>
        </tr>";
    }
?>

<table>
    <tr>    
        <th>Login</th>
        <th>Password</th>
        <th>Email</th>
    </tr>

    <?=$content?>

    <?php foreach($arr as $item) {
        $user = explode(':', $item);
    ?>
        <tr>    
            <td><?=$user[0]?></td>
            <td><?=$user[1]?></td>
            <td><?=$user[2]?></td>          
        </tr>
    <?php } ?>
</table>