### DateTime

http://php.net/manual/en/class.datetime.php

<div class="section" id="datetime.constants.types">
<h2 class="title">Predefined Constants<a class="genanchor" href="#datetime.constants.types"> ¶</a></h2>
<dl>
 <dt id="datetime.constants.atom"><strong><code>DateTime::ATOM</code></strong></dt>
 <dt>
<strong><code>DATE_ATOM</code></strong></dt>
 <dd>
  <span class="simpara">
   Atom (example: 2005-08-15T15:52:01+00:00)
  </span>
 </dd>
 <dt id="datetime.constants.cookie"><strong><code>DateTime::COOKIE</code></strong></dt>
 <dt>
<strong><code>DATE_COOKIE</code></strong></dt>
 <dd>
  <span class="simpara">
   HTTP Cookies (example: Monday, 15-Aug-2005 15:52:01 UTC)
  </span>
 </dd>
 <dt id="datetime.constants.iso8601"><strong><code>DateTime::ISO8601</code></strong></dt>
 <dt>
<strong><code>DATE_ISO8601</code></strong></dt>
 <dd>
  <span class="simpara">
   ISO-8601 (example: 2005-08-15T15:52:01+0000)
  </span>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    This format is not compatible with ISO-8601, but is left this way for
    backward compatibility reasons. Use <strong><code>DateTime::ATOM</code></strong>
    or <strong><code>DATE_ATOM</code></strong> for compatibility with ISO-8601
    instead.
   </span>
  </p></blockquote>
 </dd>
 <dt id="datetime.constants.rfc822"><strong><code>DateTime::RFC822</code></strong></dt>
 <dt>
<strong><code>DATE_RFC822</code></strong></dt>
 <dd>
  <span class="simpara">
   RFC 822 (example: Mon, 15 Aug 05 15:52:01 +0000)
  </span>
 </dd>
 <dt id="datetime.constants.rfc850"><strong><code>DateTime::RFC850</code></strong></dt>
 <dt>
<strong><code>DATE_RFC850</code></strong></dt>
 <dd>
  <span class="simpara">
   RFC 850 (example: Monday, 15-Aug-05 15:52:01 UTC)
  </span>
 </dd>
 <dt id="datetime.constants.rfc1036"><strong><code>DateTime::RFC1036</code></strong></dt>
 <dt>
<strong><code>DATE_RFC1036</code></strong></dt>
 <dd>
  <span class="simpara">
   RFC 1036 (example: Mon, 15 Aug 05 15:52:01 +0000)
  </span>
 </dd>
 <dt id="datetime.constants.rfc1123"><strong><code>DateTime::RFC1123</code></strong></dt>
 <dt>
<strong><code>DATE_RFC1123</code></strong></dt>
 <dd>
  <span class="simpara">
   RFC 1123 (example: Mon, 15 Aug 2005 15:52:01 +0000)
  </span>
 </dd>
 <dt id="datetime.constants.rfc2822"><strong><code>DateTime::RFC2822</code></strong></dt>
 <dt>
<strong><code>DATE_RFC2822</code></strong></dt>
 <dd>
  <span class="simpara">
   RFC 2822 (example: Mon, 15 Aug 2005 15:52:01 +0000)
  </span>
 </dd>
 <dt id="datetime.constants.rfc3339"><strong><code>DateTime::RFC3339</code></strong></dt>
 <dt>
<strong><code>DATE_RFC3339</code></strong></dt>
 <dd>
  <span class="simpara">
   Same as <strong><code>DATE_ATOM</code></strong> (since PHP 5.1.3)
  </span>
 </dd>
 <dt id="datetime.constants.rss"><strong><code>DateTime::RSS</code></strong></dt>
 <dt>
<strong><code>DATE_RSS</code></strong></dt>
 <dd>
  <span class="simpara">
   RSS (example: Mon, 15 Aug 2005 15:52:01 +0000)
  </span>
 </dd>
 <dt id="datetime.constants.w3c"><strong><code>DateTime::W3C</code></strong></dt>
 <dt>
<strong><code>DATE_W3C</code></strong></dt>
 <dd>
  <span class="simpara">
   World Wide Web Consortium (example: 2005-08-15T15:52:01+00:00)
  </span>
 </dd>
</dl>
</div>

----------------------------

#### DateTime::add — Adds an amount of days, months, years, hours, minutes and seconds to a DateTime object
http://php.net/manual/en/datetime.add.php

```PHP
<?php
/**
 * Adds an amount of days, months, years, hours, minutes and seconds to a DateTime object
 * @param DateInterval $interval
 * @return static
 * @link http://php.net/manual/en/datetime.add.php
 */
public function add (DateInterval $interval) {}
```
```PHP
<?php
$date = new DateTime('2000-01-01');
$date->add(new DateInterval('P10D'));
echo $date->format('Y-m-d') . "\n"; //2000-01-11
```
-------------------------
#### DateTime::sub — Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object
http://php.net/manual/en/datetime.sub.php

```PHP
<?php
class DataTIme {
/**
     * Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object
     * @param DateInterval $interval
     * @return static
     * @link http://php.net/manual/en/datetime.sub.php
     */
    public function sub (DateInterval $interval) {}
}
```

```PHP
<?php
$date = new DateTime('2000-01-20');
$date->sub(new DateInterval('P10D'));
echo $date->format('Y-m-d') . "\n"; // 2000-01-10
```

---------------------------------
#### DateTime::diff - Returns the difference between two DateTimeInterface objects.
http://php.net/manual/en/datetime.diff.php

```PHP
<?php
 /**
     * Returns the difference between two DateTime objects represented as a DateInterval.
     * @param DateTimeInterface $datetime2 The date to compare to.
     * @param boolean $absolute [optional] Whether to return absolute difference.
     * @return DateInterval|boolean The DateInterval object representing the difference between the two dates or FALSE on failure.
     * @link http://php.net/manual/en/datetime.diff.php
     */
    public function diff ($datetime2, $absolute = false) {}
```

```PHP
<?php
$datetime1 = new DateTime('2009-10-11');
$datetime2 = new DateTime('2009-10-13');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a days'); // +2 days
```

--------------------------------

#### DateTime::modify — Alters the timestamp
http://php.net/manual/en/datetime.modify.php

```PHP
<?php
    /**
     * Alter the timestamp of a DateTime object by incrementing or decrementing
     * in a format accepted by strtotime().
     * @param string $modify A date/time string. Valid formats are explained in <a href="http://www.php.net/manual/en/datetime.formats.php">Date and Time Formats</a>.
     * @return static Returns the DateTime object for method chaining or FALSE on failure.
     * @link http://php.net/manual/en/datetime.modify.php
     */
    public function modify ($modify) {}
```

```PHP
<?php
$date = new DateTime('2006-12-12');
$date->modify('+1 day');
echo $date->format('Y-m-d'); //2006-12-13
```
-----------------------
#### DateTime::setDate — Sets the date
http://php.net/manual/en/datetime.setdate.php

```PHP
<?php
    /**
     * Sets the current date of the DateTime object to a different date.
     * @param int $year
     * @param int $month
     * @param int $day
     * @return static
     * @link http://php.net/manual/en/datetime.setdate.php
     */
    public function setDate ($year, $month, $day) {}
```

```PHP
<?php
$date = new DateTime();
$date->setDate(2001, 2, 3);
echo $date->format('Y-m-d'); //2001-02-03
```
------------

#### DateTime::setISODate — Sets the ISO date
http://php.net/manual/en/datetime.setisodate.php

-------------------------

#### DateTime::setTime — Sets the time
http://php.net/manual/en/datetime.settime.php

-------------------------

#### DateTime::__construct — Returns new DateTime object
http://php.net/manual/en/datetime.construct.php

---------------
#### DateTime::createFromFormat — Parses a time string according to a specified format
http://php.net/manual/en/datetime.createfromformat.php

------------
#### DateTime::getLastErrors — Returns the warnings and errors
http://php.net/manual/en/datetime.getlasterrors.php

---------------
#### DateTime::__set_state — The __set_state handler
http://php.net/manual/en/datetime.set-state.php

-----------------------
#### DateTime::setTimestamp — Sets the date and time based on an Unix timestamp
http://php.net/manual/en/datetime.settimestamp.php

----------
#### DateTime::setTimezone — Sets the time zone for the DateTime object
http://php.net/manual/en/datetime.settimezone.php
