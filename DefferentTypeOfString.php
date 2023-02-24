<?php
$Myname="Zidan";

$heredoc= <<<EOD
This is first time i am using heredoc and i am {$Myname}
EOD;

printf($heredoc);