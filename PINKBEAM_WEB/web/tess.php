<?php
        $dbc = mysqli_connect('211.218.150.109' , 'ci2018forward' , '2018forward!')
         or die( mysqli_connect_error() );

        mysqli_select_db($dbc, 'ci2018forward');

        $query = "insert into 'test' (id,pw,name) values ("test","test1","test2")";

        $result = mysqli_query($dbc,$query)
         or die( mysqli_error($dbc) );

        mysqli_close($dbc);
?>
