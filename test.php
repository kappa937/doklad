<?php<br>$fixture = array();<br>
assertTrue(count($fixture) == 0);<br> <br>$fixture[] = 'element';<br>
assertTrue(count($fixture) == 1);<br> <br>function assertTrue($condition)<br>
{<br>  if (!$condition) {<br>    
throw new Exception('Assertion failed.');<br>
  }<br>}<br>?><br><br>
?>