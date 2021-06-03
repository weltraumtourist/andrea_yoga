<?php
    if(isset($_POST['submit'])) {

        $mailFrom = $_Post['name'];
        $betreff = $_Post['betreff'];
        $nachricht = $_Post['nachricht'];

        $mailto = "sebastian.wippermann@web.de";
        $headers = "From: ".$mailFrom;
        $txt = "Eine neue Nachricht: ".$betreff"\n\n".$nachricht;


        mail($mailto, $betreff, $txt, $headers);

        header("Location: index.php?mailsend");


}

?>