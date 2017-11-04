<?php

$string = "<a href='test'>Test</a>";
$new = htmlspecialchars($string, ENT_QUOTES);
echo $new . PHP_EOL; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
echo htmlspecialchars_decode($new,ENT_QUOTES) . PHP_EOL; // <a href='test'>Test</a>
