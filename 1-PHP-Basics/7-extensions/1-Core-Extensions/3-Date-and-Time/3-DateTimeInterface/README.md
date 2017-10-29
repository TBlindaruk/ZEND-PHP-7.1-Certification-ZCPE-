### DateTimeInterface

http://php.net/manual/en/class.datetimeinterface.php

<strong>DateTimeInterface is meant so that both DateTime and DateTimeImmutable can be type hinted for. It is not possible to implement this interface with userland classes.</strong>

<table class="doctable informaltable">  
 <thead>
  <tr>
   <th>Version</th>
   <th>Description</th>
  </tr>
 </thead>
 <tbody class="tbody">
  <tr>
   <td>5.5.8</td>
   <td>
    Trying to implement <strong class="classname">DateTimeInterface</strong> raises a
    fatal error now. Formerly implementing the interface didn't raise an
    error, but the behavior was erroneous.
   </td>
  </tr>
 </tbody>
</table>