<!DOCTYPE html>
<html lang="ja" class="no-js no-svg"> 
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="ja" />
	<title>【サイトTOP】</title>
	<link href="/css/style.css" rel="stylesheet" type="text/css">
	<script src="/js/HelloWorld.js"></script>
	<script>
/*
	Delighters - Add CSS animations to delight users as they scroll down.
	(c) 2018 - Q42
	Written by Martin Kool
	https://github.com/Q42/delighters
*/
var Delighters = new (function() {
	var self = this,
			dels = this.dels = [],

			// default options
			options = {
				attribute: 	'data-delighter',
				classNames: ['delighter', 'started', 'ended'],
				start: 			0.5, // default start threshold
				end: 			0.75, // default end threshold
				autoInit: 	true 	// initialize when DOMContentLoaded
			};

	document.addEventListener("DOMContentLoaded", function() {
		if (options.autoInit) init();
	});

	function config(opts) {
		for (var name in opts) options[name] = opts[name];
	}
	
	function init() {		
		document.addEventListener('scroll', scroll)
		var els = document.querySelectorAll('[' + options.attribute + ']');

		for (var i=0; i<els.length; i++) {
			var el 			= els[i],
					def 		= el.getAttribute(options.attribute, 2),
					pairs 	= def.split(';'),
					del 		= {};
					del.start = options.start;
					del.end = options.end;
			
			for (var j=0; j<pairs.length; j++) {
				var pair 	= pairs[j].split(':'),
						name 	= pair[0],
						val 	= isNaN(pair[1] * 1)? pair[1] : pair[1] * 1;
				if (name) del[name] = (val === undefined)? true : val;
			}

			del.el = el;
			del.id = dels.length;
			dels.push(del);
			el.classList.add(options.classNames[0])
			if (del.debug) el.style.outline = 'solid red 4px';
		}
		scroll();
	}

	function scroll() {
		var viewportHeight = window.innerHeight;
		for (var i=0; i<dels.length; i++) {
			var del = dels[i],
					box = del.el.getBoundingClientRect(),
					factorStart = box.top / viewportHeight,
					factorEnd = box.bottom / viewportHeight;

			if (del.debug) {
				if (factorStart >= 0 && factorStart <= 1) {
					if (!del.startLine) {
						del.startLine = document.createElement('div')
						document.body.appendChild(del.startLine);
						del.startLine.style = 'position:fixed;height:0;width:100%;border-bottom:dotted red 2px;top:' + (del.start * 100) + 'vh';
					}
				}
				if (((factorEnd < del.end) || (factorStart > 1)) && del.startLine) {
					del.startLine.parentNode.removeChild(del.startLine);
					delete del.startLine;
				}
			}
			if (factorStart < del.start && !del.started) {
				del.started = true;
				del.el.classList.add(options.classNames[1])
			}
			else if (factorStart > del.start && del.started) {
				del.started = false;
				del.el.classList.remove(options.classNames[1])
			}
			if (factorEnd < del.end && !del.ended) {
				del.ended = true;
				del.el.classList.add(options.classNames[2])
			}
			else if (factorEnd > del.end && del.ended) {
				del.ended = false;
				del.el.classList.remove(options.classNames[2])
			}
		}
	}

	self.init = init;
	self.config = config;
})();
	//Delighters.config({end: 0.5});
	</script>
</head>
<body id="HOME">
	<div id="ALL">
		<div id="CONTENT">
			<div class="cmn-area cmn-area-type0" id="S-0" data-delighter>
				<div class="cmn-area_inner">
					<h1>First View</h1>
					<p class="text">☟scroll☟</p>
				</div>
			</div>
			<section class="cmn-area cmn-area-type1 cmn-section" id="S-1" data-delighter>
				<div class="cmn-area_inner">
					<header>
						<h2>section 1</h2>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<button>Lorem ipsum</button>
				</div>
			</section>
			<section class="cmn-area cmn-area-type1 cmn-section" id="S-2" data-delighter>
				<div class="cmn-area_inner">
					<header>
						<h2>section 2</h2>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<button>Lorem ipsum</button>
				</div>
			</section>
			<section class="cmn-area cmn-area-type1 cmn-section" id="S-3" data-delighter>
				<div class="cmn-area_inner">
					<header>
						<h2>section 3</h2>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<button>Lorem ipsum</button>
				</div>
			</section>
			<section class="cmn-area cmn-area-type2 cmn-section" id="S-4" data-delighter>
				<div class="cmn-area_inner">
					<header>
						<h2>section 4</h2>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<button>Lorem ipsum</button>
				</div>
			</section>
			<section class="cmn-area cmn-area-type2 cmn-section" id="S-5" data-delighter>
				<div class="cmn-area_inner">
					<header>
						<h2>section 5</h2>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<button>Lorem ipsum</button>
				</div>
			</section>
		</div>
		<div id="BG">
			<canvas id="myCanvas" width="400" height="400">Your browser does not support the canvas tag.</canvas>
		</div>
	</div>
	<div id="TEST">
<?php
	echo "HELLO WORLD!!", ' | "index.php"';
 ?>
		<h1>H1</h1>
		<h2>H2</h2>
		<h3>H3</h3>
		<h4>H4</h4>
		<ul>
			<li>aaaa</li>
			<li><a href="#D">aaaa</a></li>
		</ul>
		<ol>
			<li>aaaa</li>
		</ol>
		<img src="img/800.jpg" width="300" alt="">
	</div>
</body>
</html>