<?php
    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 06/08/2017;
     * At Time: 04:26;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */

?>

<!--<hr/>-->
<?php //echo $this->msg; ?>

<h1>Login</h1>


<!-- stay in the login controller, execute function 'run' -->
<form action="login/run" method="post">

    <label>Login</label> <br/> <input type="text" name="login"/> <br/>

    <label>Password</label> <br/> <input type="password" name="password"/> <br/><br/>

    <label></label> <input type="submit"/>

</form>
