<?php

function thanks($section) {
  $names = thanks_names($section);

  foreach ($names as &$name) {
    $name = str_replace(' ', '&nbsp;', $name);
  }

  return implode('&nbsp;&nbsp; ', $names);
}

function thanks_names($section) {
  switch ($section) {
    case 'matching':
      return array('SUNIL PAUL');
    case 'champions':
      return array('BRIAN BAKER', 'JEFF BRODY', 'GERRY PERCY', 'JOE SHAPIRO', 'MARC AND SHERYL STUART');
    case 'leaders':
      return array('JOHN DUNHAM', 'BILL TOWNSEND');
    case 'groundbreakers':
      return array('HARALD EKMAN', 'MARGARET LEINEN', 'JIM LIPPARD', 'BILL MELTON', 'NICOLE VOGEL', 'BRUCE YOXSIMER');
    case '$575+':
      return array('FREDRIK BRANSTROM', 'SEAN CARLEY', 'ADAM CECCHETTI', 'HENRY', 'HARTEVELDT', 'JEFF SCHLARB', 'ALLEN TAYLOR', 'STUART WEST', 'R D WHILDEN', 'TONY WIGHT', 'ANDREA', 'DEAN', 'JARED');
    case '$350+':
      return array('GABRIEL ANDERSON', 'JAMES BELLINGHAM', 'TIM FARLEY', 'NICHOLAS FROTA', 'SIDDHARTHA HERDEGEN', 'BOB IPPOLITO', 'JAN LEHNARDT', 'SUSAN MARCUS', 'SHANE RUNQUIST', 'TRAVIS STEPHENSON', 'PENNYTIGLIAS', 'AL WHALEY', 'JUSTIN WICK', 'KIM E WHITTEMORE', 'THOMAS J WOMACK');
    case '$250+':
      return array('MICAH ALTMAN', 'MATT BAMBERGER', 'JACOB BAYLESS', 'SUSAN BRITTON', 'PAUL CHANDLER', 'KEITH COPENHAGEN', 'LORI DARLEY', 'REED ESAU', 'THOMAS R. HALL', 'SEAN HANDEL', 'MICHAEL HUNGER', 'JOSH KNAUER', 'ROD MANN', 'FLORIAN MENEVIS', 'EDWARD PORTER', 'JP RANGASWAMI', 'ED ROMAN', 'KUNIHIKO SHIMADA', 'CAROL THOMAS', 'SAM ZAID', 'GIJSBERT', 'LISA');
    case '$100+':
      return array('JOHN A ALLEN', 'SEANN ASWELL', 'PAUL BAER', 'DAVID BALL', 'AIMEE BARNES', 'JEFFREY BATHE', 'SIMM BEESTON', 'ALEX BLANES', 'MIHAIL BOTEZ', 'GABRIELE BOZZI', 'ANDREW BRENNAN', 'JED BROWN', 'LOPA BRUNJES', 'ANGELA BULL RADOFF', 'CHRISTOPHER BUTLER', 'DAISY CARLSON', 'MICHELE CATASTA', 'DAN CHAFFEY', 'DAVID CHAPMAN', 'JEROME CHARRON', 'NEIL COHN', 'JOHN CUNNINGHAM', 'VALERIA DE PAIVA', 'ANNELENE DECAUX', 'LYLE DENNIS', 'THOMAS DUDZIAK', 'DAVE EAGLE', 'KNUT ELDHUSET', 'DAVID EMANUEL', 'ALLAN ERSKINE', 'DAVID ERWIN', 'FELIX FAASSEN', 'ERIC FACAS', 'LAINE FAST', 'JENNIFER FEIN', 'BRUCE MICHAEL FERGUSON', 'KRISTINA FITZSIMMONS', 'FABRICE FLORIN', 'JIM FOURNIER', 'ROBERT FRIEL', 'BENOIT FRIES', 'MASASHI FUJITA', 'MARC G', 'PETER G', 'MATTHEW G', 'DAVE GORMAN', 'SPRING GRAF', 'LAURIAN GRIDINOC', 'BRETT GROSSMAN', 'YANNIS GUERRA', 'RAY HAMMOND', 'STEVEN HAZEL', 'KITT HODSDEN', 'JASON JOBE', 'MATT JOHNSON', 'HOWARD JONES', ' LUKE JORDAN', 'HERMANN KELDENICH', 'HILMAR LAPP', 'LELAND LECUYER', 'BERANT LEMMENES', 'KERRI LEMOIE', 'DAVID LI', 'MAGNUS LIE HETLAND', 'GREG LLOYD', 'KATE MACQUEEN', 'BERNHARD MAIERHOFER', 'KENNETH MARKOWITZ', 'DAN MARTIN', 'MANDY MCCLAUSKY', 'PATRICK MCKENNA', 'JEREMY MCMILLAN', 'FERENC MIHALY', 'CHRISTOPHER MISTEROVICH', 'JEREME MONTEAU', 'CAROLINA MYRVOLD', 'BRUNO NEESER', 'HORACIO NELSON', 'PETER NEUBAUER', 'KEN NICKERSON', 'VANESSA NOZET', 'GARY OFFICER', 'TOR OKLAND BARSTAD', 'HUGH OLLIPHANT', 'SARA OLSEN', 'ALEXANDRA OLTEANU', 'PAUL O\'NEILL', 'MICHAEL BRIAN ORR', 'BRIAN PEIRIS', 'GEROL PETRUZELLA', 'ADAM PILGER', 'GUNNLAUGUR POR BRIEM', 'TONI PORTMANN', 'CLAUDIA PREPARATA', 'DMITRIJ RAPPOPORT', 'DRUMMOND REED', 'SEAN REGAN', 'BRIAN REMEDIOS', 'STEVE REPETTI', 'DAVID RICHARDS', 'GREG RICHARDSON', 'CATHARINE RODGERS', 'ADAM ROSALKY', 'CAITLIN ROTHERMEL', 'CHRISTIAN SAVARD', 'ANDERS SCHAU KNATTEN', 'GABRIEL SCHUBINER', 'DAMIEN SCOTT', 'BLAIR SHATTKY', 'FAUSTINA SMITH', 'GUY SRINIVASAN', 'FREDRIK STAHL', 'JAMES STEIN', 'JOHN STEINER', 'ERIC STOVER', 'JOSHUA STYLMAN', 'RYAN TALBOT', 'SAYOKO TEITELBAUM', 'BILL THALE', 'BRIAN THOMPSON', 'TETSURO TOKUNAGA', 'TOMTOM TOMMIE', 'TED TREIBICK', 'DANIEL TULLEMANS', 'MICHAEL TURNER', 'MATT VAN NATTA', 'MICHAEL VAN VEEN', 'GREG VERNON', 'BERNIE WALP', 'BEN WERDMULLER VON ELGG', 'ETHAN WHITE', 'ERIK WINTER', 'RALF ZEITLER', '????', 'AKIRI', 'BABOO', 'BARNEY', 'CARL', 'CRAIGP', 'DANIEL', 'DIDACTICUS', 'DREA', 'ERUNQUIST', 'HENRY THE 8TH', 'IOZAY', 'JILL', 'JOEL', 'JUSTINCHUNG.COM', 'KALIYA', 'LEAH ', 'MAYA', 'MBJEREDE', 'MELLOWTIGGER', 'MONICA', 'NBONVIN', 'NORMANDY', 'PAUL', 'SARCALISTIC ', 'SNAZSTER', 'SUBPIXEL', 'TIFFANY', 'TOOTALLSID', 'ZACHARY');
  }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta http-equiv="x-dns-prefetch-control" content="off"/>
    <title>Hypothes.is | The Internet, peer reviewed.</title>
    <link rel="stylesheet" type="text/css" href="fonts/font-face.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/thankyou.css"/>

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-26026798-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
  </head>
<body>
  <div id="wrapper">

    <div id="continue">
      <a href="index.html">Click here to continue to our home page</a>
    </div>

    <div id="celebration">
      <img src="images/celebration_photo.jpg" alt="Celebration" width="949" height="198" />
      <span class="subtitle">Donor Celebration 11/13/2011</span>
    </div>

    <div id="main">

      <a href="index.html" id="logo">
        <img src="images/hypothesis.png" alt="Hypothes.is" width="113" height="159" />
      </a>

      <h1>
        <div class="title1">Thank you!</div>
        <div class="title2">Because of you</div>
        <div class="title3">our amazing donors</div>
        <div class="title4">we raised over $230K as of</div>
        <div class="title5">Nov 13, 2011 via Kickstarter<span class="red">*</span></div>
      </h1>

      <div id="donors">
        <div class="donors1">
          <div class="label">
            Matching<span class="red">:</span>
          </div>
          <div class="value">
            <?php print thanks('matching'); ?>
          </div>
        </div>

        <div class="donors2">
          <div class="label">
            Champions<span class="red">:</span>
          </div>
          <div class="value">
            <?php print thanks('champions'); ?>
          </div>
        </div>

        <div class="donors3">
          <div class="label">
            Leaders<span class="red">:</span>
          </div>
          <div class="value">
            <?php print thanks('leaders'); ?>
          </div>
        </div>

        <div class="donors4">
          <div class="label">
            Groundbreakers<span class="red">:</span>
          </div>
          <div class="value">
            <?php print thanks('groundbreakers'); ?>
          </div>
        </div>

        <div class="donors5">
          <div class="label">
            $575+<span class="red">:</span>
          </div>
          <div class="value">
            <?php print thanks('$575+'); ?>
          </div>
        </div>

        <div class="donors6">
          <div class="label">
            $350+<span class="red">:</span>
          </div>
          <div class="value">
            <?php print thanks('$350+'); ?>
          </div>
        </div>

        <div class="donors7">
          <div class="label">
            $250+<span class="red">:</span>
          </div>
          <div class="value">
            <?php print thanks('$250+'); ?>
          </div>
        </div>

        <div class="donors7">
          <div class="label">
            $100+<span class="red">:</span>
          </div>
          <div class="value">
            <?php print thanks('$100+'); ?>
          </div>
        </div>

        <small><span class="red">*</span> Sunil matched our Kickstarter amount of $105K, several other donors also contributed directly.</small>

      </div>

    </div>
  </div>

<script type="text/javascript">
var _sf_async_config={uid:29661,domain:"hypothes.is"};
(function(){
  function loadChartbeat() {
    window._sf_endpt=(new Date()).getTime();
    var e = document.createElement('script');
    e.setAttribute('language', 'javascript');
    e.setAttribute('type', 'text/javascript');
    e.setAttribute('src',
       (("https:" == document.location.protocol) ? "https://a248.e.akamai.net/chartbeat.download.akamai.com/102508/" : "http://static.chartbeat.com/") +
       "js/chartbeat.js");
    document.body.appendChild(e);
  }
  var oldonload = window.onload;
  window.onload = (typeof window.onload != 'function') ?
     loadChartbeat : function() { oldonload(); loadChartbeat(); };
})();

</script>
	
</body>