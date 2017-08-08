<h1>User</h1>


<form action="post" acdtion="<?php echo URL; ?>user/create">
    <label for="login">login</label><input id="login" type="text" name="login" />
    <label for="password">Password</label><input id="password" type="text" name="password" />
    <label for="role">Role</label>
    <select id="role" name="role">
        <option value="default">Default</option>
        <option value="admin">Admin</option>
    </select><br />
    <label>&nbsp;</label><input type="submit">
</form>


<hr />

<table>
    <?php
        foreach($this->userList as $key => $value) {
            echo '<tr>';
            echo '<td>' . $value['id'] . '</td>';
            echo '<td>' . $value['login'] . '</td>';
            echo '<td>' . $value['role'] . '</td>';
            echo '<td>
                    <a href="' . URL . 'user/edit/' . $value['id'] . '">Edit</a>
                    <a href="' . URL . 'user/delete/' . $value['id'] . '">Delete</a>
                  </td>';
            echo '</tr>';
        }
    ?>
</table>