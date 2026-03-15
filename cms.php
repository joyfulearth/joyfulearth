<?php
/*
variables([
	VARSectionsHaveFiles => BOOLYes,
	VARLinkToSectionHome => BOOLYes,
]);
*/
autosetPageMenu();

if (nodeIs(SITEHOME))
	variable(VARWelcomeMessage, replaceItems('We are building an' . NEWLINE .
	'[**offline first**](#%offline-first%) ' . NEWLINE .
	'[**INTENT Driven**](#%intent-driven%) ' . NEWLINE .
	'[Internet of Missions](#%internet-of-m%) ' . NEWLINE .
	'&rarr; see [Imran\'s Stance](#%imrans-stance%) and ' . NEWLINE .
	'[The Year 2025](#%the-year-2025%)' . NEWLINE .
	'<br /><br /><img class="img-fluid img-max-600 mt-3 m-auto d-block" src="%site-assets%%safeName%-mood.png" />' . NEWLINE .
	'<hr class="m-5" /><img class="img-fluid img-max-600 mt-3 m-auto d-block" src="%site-assets%%safeName%-expertise.png" />' . NEWLINE .
	'<br /><br />See one of the articles below to know more',
		[
			'offline-first' => '%urlOf-imran%2025-09/11-to-15/14--amadeusweb--dawn-engage-opus-blitz/BTNSECONDARY',
			'intent-driven' => '%urlOf-imran%2025-12/06-to-10/07--full-on-evolutionary-syntheses--by-commander-integritas/BTNSUCCESS',
			'internet-of-m' => '%urlOf-imran%2025-12/06-to-10/08--power-to-all-our-friends/BTNWARNING',
			'imrans-stance' => '%urlOf-imran%2025-12/01-to-05/03--the-architect-who-stood-his-ground/BTNSITE',
			'the-year-2025' => '%urlOf-imran%the-year-2025/BTNPRIMARY',
		]
	, '%'));
