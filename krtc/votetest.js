
	var tag = document.createElement('script');

	tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

		var video11,video12,
		 	video21,video22,
		 	video31,video32,
		 	video41,video42;


		function onPlayerStateChange(event) {
		    //When the video has ended
		    if (event.data == YT.PlayerState.ENDED) {
		        //Get rid of the player
		        event.target.destroy();
		    }
		} 		
		
		$("#box2").click(function onYouTubeIframeAPIReady() {
			video21= new YT.Player('video21', {
				height: '315',
				width: '560',
				videoId: 'e9EMIYbxOLU',
				events: {
	            'onStateChange': onPlayerStateChange
	          	}
			});
			video22 = new YT.Player('video22', {
				height: '315',
				width: '560',
				videoId: 'sWqDmBZ3RH4',
				events: {
	            'onStateChange': onPlayerStateChange
	          	}
			});
		})
		$("#box3").click(function onYouTubeIframeAPIReady() {
			video31 = new YT.Player('video31', {
			height: '315',
			width: '560',
			videoId: 'inlKLPGOrtU',
			});
			video32 = new YT.Player('video32', {
			height: '315',
			width: '560',
			videoId: 'aOo-ZBeQgno',
			});
		})
		$("#box4").click(function onYouTubeIframeAPIReady() {
			video41 = new YT.Player('video41', {
			height: '315',
			width: '560',
			videoId: 'cWbfM-AobEk',
			});
			video42 = new YT.Player('video42', {
			height: '315',
			width: '560',
			videoId: '-qUoqLJdYpM',
			});
		})
		$("#box5").click(function onYouTubeIframeAPIReady() {
			video51 = new YT.Player('video51', {
			height: '315',
			width: '560',
			videoId: 'X_wOnxdGxpY',
			});
			video52 = new YT.Player('video52', {
			height: '315',
			width: '560',
			videoId: 'Q_Y1GdY-jCQ',
			});
		})
		$("#box6").click(function onYouTubeIframeAPIReady() {
			video61 = new YT.Player('video61', {
			height: '315',
			width: '560',
			videoId: 'PIcbmEBnbps',
			});
			video62 = new YT.Player('video62', {
			height: '315',
			width: '560',
			videoId: 'gLavT-Z1rVE',
			});
		})
		$("#box7").click(function onYouTubeIframeAPIReady() {
			video71 = new YT.Player('video71', {
			height: '315',
			width: '560',
			videoId: '1tM3S_IoXwo',
			});
			video72 = new YT.Player('video72', {
			height: '315',
			width: '560',
			videoId: '_TJjz98Nhac',
			});
		})
		$("#box8").click(function onYouTubeIframeAPIReady() {
			video81 = new YT.Player('video81', {
			height: '315',
			width: '560',
			videoId: 'Dj7uwt0dNTc',
			});
			video82 = new YT.Player('video82', {
			height: '315',
			width: '560',
			videoId: 'Lkgc1XBH4w0',
			});
		})
		$("#box9").click(function onYouTubeIframeAPIReady() {
			video91 = new YT.Player('video91', {
			height: '315',
			width: '560',
			videoId: 'FoQMs7-j_H8',
			});
			video92 = new YT.Player('video92', {
			height: '315',
			width: '560',
			videoId: 'i1m5buQiUrw',
			});
		})

		$("#box10").click(function onYouTubeIframeAPIReady() {
			video101 = new YT.Player('video101', {
			height: '315',
			width: '560',
			videoId: 'rF_83NLkp5Y',
			});
			video102 = new YT.Player('video102', {
			height: '315',
			width: '560',
			videoId: '7gg7PShVTWg',
			});
		})
		$("#box11").click(function onYouTubeIframeAPIReady() {
			video111 = new YT.Player('video111', {
			height: '315',
			width: '560',
			videoId: '8fxVbFne3Es',
			});
			video112 = new YT.Player('video112', {
			height: '315',
			width: '560',
			videoId: 'W4vGttCCv-U',
			});
		})
		$("#box12").click(function onYouTubeIframeAPIReady() {
			video121 = new YT.Player('video121', {
			height: '315',
			width: '560',
			videoId: 'xvSyhFIHGVo',
			});
			video122 = new YT.Player('video122', {
			height: '315',
			width: '560',
			videoId: 'DstkF4ij2AE',
			});
		})
		$("#box13").click(function onYouTubeIframeAPIReady() {
			video131 = new YT.Player('video131', {
			height: '315',
			width: '560',
			videoId: 'Cmi_FdPa3N4',
			});
			video132 = new YT.Player('video132', {
			height: '315',
			width: '560',
			videoId: '8A7OGf3imuo',
			});
		})
		$("#box14").click(function onYouTubeIframeAPIReady() {
			video141 = new YT.Player('video141', {
			height: '315',
			width: '560',
			videoId: 'X_3Uw9S-pH4',
			});
			video142 = new YT.Player('video142', {
			height: '315',
			width: '560',
			videoId: 'TKKD-nSWFjw',
			});
		})
		$("#box15").click(function onYouTubeIframeAPIReady() {
			video151 = new YT.Player('video151', {
			height: '315',
			width: '560',
			videoId: '4usvrkw1FGg',
			});
			video152 = new YT.Player('video152', {
			height: '315',
			width: '560',
			videoId: 'pX8ByPrywOM',
			});
		})
		$("#box16").click(function onYouTubeIframeAPIReady() {
			video161 = new YT.Player('video161', {
			height: '315',
			width: '560',
			videoId: '',
			});
			video162 = new YT.Player('video162', {
			height: '315',
			width: '560',
			videoId: '',
			});
		})
		$("#box17").click(function onYouTubeIframeAPIReady() {
			video171 = new YT.Player('video171', {
			height: '315',
			width: '560',
			videoId: '48GZ9d4oWgc',
			});
			video172 = new YT.Player('video172', {
			height: '315',
			width: '560',
			videoId: '-DkXR3JJ2TU',
			});
		})
		$("#box18").click(function onYouTubeIframeAPIReady() {
			video181 = new YT.Player('video181', {
			height: '315',
			width: '560',
			videoId: 'S3qvdkRHJyA',
			});
			video182 = new YT.Player('video182', {
			height: '315',
			width: '560',
			videoId: 'RP1Wm5oE-AU',
			});
		})
		$("#box19").click(function onYouTubeIframeAPIReady() {
			video191 = new YT.Player('video191', {
			height: '315',
			width: '560',
			videoId: 'MviIhAJvkgI',
			});
			video192 = new YT.Player('video192', {
			height: '315',
			width: '560',
			videoId: 'xJ3Rz0PWKBY',
			});
		})
		$("#box20").click(function onYouTubeIframeAPIReady() {
			video201 = new YT.Player('video201', {
			height: '315',
			width: '560',
			videoId: 'rTq-lDw95Js',
			});
			video202 = new YT.Player('video202', {
			height: '315',
			width: '560',
			videoId: '6Z7OvxzEHfQ',
			});
		})
		$("#box21").click(function onYouTubeIframeAPIReady() {
			video211 = new YT.Player('video211', {
			height: '315',
			width: '560',
			videoId: 'mJS-8irf84c',
			});
			video212 = new YT.Player('video212', {
			height: '315',
			width: '560',
			videoId: 'KctjGjkusHk',
			});
		})
		$("#box22").click(function onYouTubeIframeAPIReady() {
			video221 = new YT.Player('video221', {
			height: '315',
			width: '560',
			videoId: 'TXyCVtszY3c',
			});
			video222 = new YT.Player('video222', {
			height: '315',
			width: '560',
			videoId: 's14fOwNvaM4',
			});
		})
		$("#box23").click(function onYouTubeIframeAPIReady() {
			video231 = new YT.Player('video231', {
			height: '315',
			width: '560',
			videoId: 'PS8e3yZWlkk',
			});
			video232 = new YT.Player('video232', {
			height: '315',
			width: '560',
			videoId: 'VfUdsbiga3k',
			});
		})
		$("#box24").click(function onYouTubeIframeAPIReady() {
			video241 = new YT.Player('video241', {
			height: '315',
			width: '560',
			videoId: 'nWsNhqfzNek',
			});
			video242 = new YT.Player('video242', {
			height: '315',
			width: '560',
			videoId: '8seojSx6nv0',
			});
		})
		$("#box25").click(function onYouTubeIframeAPIReady() {
			video251 = new YT.Player('video251', {
			height: '315',
			width: '560',
			videoId: '-o1U518LgfI',
			});
			video252 = new YT.Player('video252', {
			height: '315',
			width: '560',
			videoId: 'WB6zpJkADlc',
			});
		})
		$("#box26").click(function onYouTubeIframeAPIReady() {
			video261 = new YT.Player('video261', {
			height: '315',
			width: '560',
			videoId: 'YmIRpTYH4fs',
			});
			video262 = new YT.Player('video262', {
			height: '315',
			width: '560',
			videoId: 'vFDMkrUdxvw',
			});
		})
		$("#box27").click(function onYouTubeIframeAPIReady() {
			video271 = new YT.Player('video271', {
			height: '315',
			width: '560',
			videoId: 'yI_lObhU97M',
			});
			video272 = new YT.Player('video272', {
			height: '315',
			width: '560',
			videoId: 'odgNko0xouM',
			});
		})
		$("#box28").click(function onYouTubeIframeAPIReady() {
			video281 = new YT.Player('video281', {
			height: '315',
			width: '560',
			videoId: '',
			});
			video282 = new YT.Player('video282', {
			height: '315',
			width: '560',
			videoId: '',
			});
		})
		$("#box29").click(function onYouTubeIframeAPIReady() {
			video291 = new YT.Player('video291', {
			height: '315',
			width: '560',
			videoId: '',
			});
			video292 = new YT.Player('video292', {
			height: '315',
			width: '560',
			videoId: '',
			});
		})
		$("#box30").click(function onYouTubeIframeAPIReady() {
			video301 = new YT.Player('video301', {
			height: '315',
			width: '560',
			videoId: 'v0QNAFiVovM',
			});
			video302 = new YT.Player('video302', {
			height: '315',
			width: '560',
			videoId: 'ieWh9d4u3eA',
			});
		})
		$("#box31").click(function onYouTubeIframeAPIReady() {
			video311 = new YT.Player('video311', {
			height: '315',
			width: '560',
			videoId: '3BChNbimvT8',
			});
			video312 = new YT.Player('video312', {
			height: '315',
			width: '560',
			videoId: 'ncUW2wGIg0c',
			});
		})
		$("#box32").click(function onYouTubeIframeAPIReady() {
			video321 = new YT.Player('video321', {
			height: '315',
			width: '560',
			videoId: '_I_52pOsT2I',
			});
			video322 = new YT.Player('video322', {
			height: '315',
			width: '560',
			videoId: 'tBwLJScH8WM',
			});
		})

		$("#box33").click(function onYouTubeIframeAPIReady() {
			video331 = new YT.Player('video331', {
			height: '315',
			width: '560',
			videoId: 'ezjtom-0BMk',
			});
			video332 = new YT.Player('video332', {
			height: '315',
			width: '560',
			videoId: 'astHx3MV37k',
			});
		})
		$("#box34").click(function onYouTubeIframeAPIReady() {
			video341 = new YT.Player('video341', {
			height: '315',
			width: '560',
			videoId: 'fqIJUUcPni8',
			});
			video342 = new YT.Player('video342', {
			height: '315',
			width: '560',
			videoId: 'Ur6yNyDAdug',
			});
		})
		$("#box35").click(function onYouTubeIframeAPIReady() {
			video351 = new YT.Player('video351', {
			height: '315',
			width: '560',
			videoId: '3er_nODIqjI',
			});
			video352 = new YT.Player('video352', {
			height: '315',
			width: '560',
			videoId: 'SriUc9uNO5M',
			});
		})
		$("#box36").click(function onYouTubeIframeAPIReady() {
			video361 = new YT.Player('video361', {
			height: '315',
			width: '560',
			videoId: '',
			});
			video362 = new YT.Player('video362', {
			height: '315',
			width: '560',
			videoId: '',
			});
		})
		$("#box37").click(function onYouTubeIframeAPIReady() {
			video371 = new YT.Player('video371', {
			height: '315',
			width: '560',
			videoId: 'fu3znZDNY5A',
			});
			video372 = new YT.Player('video372', {
			height: '315',
			width: '560',
			videoId: 'q3apk80HAEM',
			});
		})
		$("#box38").click(function onYouTubeIframeAPIReady() {
			video381 = new YT.Player('video381', {
			height: '315',
			width: '560',
			videoId: 'pOTaoxbtg3w',
			});
			video382 = new YT.Player('video382', {
			height: '315',
			width: '560',
			videoId: 'ZTckUTrhmPI',
			});
		})
		$("#box39").click(function onYouTubeIframeAPIReady() {
			video391 = new YT.Player('video391', {
			height: '315',
			width: '560',
			videoId: 'dHSzNbkCwDs',
			});
			video392 = new YT.Player('video392', {
			height: '315',
			width: '560',
			videoId: 'kzKxfv0AHT4',
			});
		})
		$("#box40").click(function onYouTubeIframeAPIReady() {
			video401 = new YT.Player('video401', {
			height: '315',
			width: '560',
			videoId: 'Sibyo3I7EhM',
			});
			video402 = new YT.Player('video402', {
			height: '315',
			width: '560',
			videoId: 'F-c6NZidDsw',
			});
		})

		$("#box41").click(function onYouTubeIframeAPIReady() {
			video411 = new YT.Player('video411', {
			height: '315',
			width: '560',
			videoId: 'QIoz6KqmvXQ',
			});
			video412 = new YT.Player('video412', {
			height: '315',
			width: '560',
			videoId: 'EtuxPWzBbec',
			});
		})
		$("#box42").click(function onYouTubeIframeAPIReady() {
			video421 = new YT.Player('video421', {
			height: '315',
			width: '560',
			videoId: 'PlZTm46rePQ',
			});
			video422 = new YT.Player('video422', {
			height: '315',
			width: '560',
			videoId: 'YzMbJ7V-rJ4',
			});
		})
		$("#box43").click(function onYouTubeIframeAPIReady() {
			video431 = new YT.Player('video431', {
			height: '315',
			width: '560',
			videoId: 'GSoaRptLaC4',
			});
			video432 = new YT.Player('video432', {
			height: '315',
			width: '560',
			videoId: 'm_RKyEpsbto',
			});
		})
		$("#box44").click(function onYouTubeIframeAPIReady() {
			video441 = new YT.Player('video441', {
			height: '315',
			width: '560',
			videoId: 'XbocGKLSJr0',
			});
			video442 = new YT.Player('video442', {
			height: '315',
			width: '560',
			videoId: 'w5P-iW5mXBM',
			});
		})
		$("#box45").click(function onYouTubeIframeAPIReady() {
			video451 = new YT.Player('video451', {
			height: '315',
			width: '560',
			videoId: 'kn3TvAor3-M',
			});
			video452 = new YT.Player('video452', {
			height: '315',
			width: '560',
			videoId: '3VWDh7mCLKI',
			});
		})
		$("#box46").click(function onYouTubeIframeAPIReady() {
			video461 = new YT.Player('video461', {
			height: '315',
			width: '560',
			videoId: 'jr97Z50e-io',
			});
			video462 = new YT.Player('video462', {
			height: '315',
			width: '560',
			videoId: '91q3JPdwr94',
			});
		})
		$("#box47").click(function onYouTubeIframeAPIReady() {
			video471 = new YT.Player('video471', {
			height: '315',
			width: '560',
			videoId: 'msK5E9rIIXE',
			});
			video472 = new YT.Player('video472', {
			height: '315',
			width: '560',
			videoId: '9hvIsJ-EXcE',
			});
		})
		$("#box48").click(function onYouTubeIframeAPIReady() {
			video481 = new YT.Player('video481', {
			height: '315',
			width: '560',
			videoId: '',
			});
			video482 = new YT.Player('video482', {
			height: '315',
			width: '560',
			videoId: '',
			});
		})
		$("#box49").click(function onYouTubeIframeAPIReady() {
			video491 = new YT.Player('video491', {
			height: '315',
			width: '560',
			videoId: '',
			});
			video492 = new YT.Player('video492', {
			height: '315',
			width: '560',
			videoId: '',
			});
		})
		$("#box50").click(function onYouTubeIframeAPIReady() {
			video501 = new YT.Player('video501', {
			height: '315',
			width: '560',
			videoId: 'Xtys1nvRGnk',
			});
			video502 = new YT.Player('video502', {
			height: '315',
			width: '560',
			videoId: 'a8CcFt-xxEY',
			});
		})
		$("#box51").click(function onYouTubeIframeAPIReady() {
			video511 = new YT.Player('video511', {
			height: '315',
			width: '560',
			videoId: 'T6qxTnLIB-U',
			});
			video512 = new YT.Player('video512', {
			height: '315',
			width: '560',
			videoId: '1Kw91UxnMvI',
			});
		})
		$("#box52").click(function onYouTubeIframeAPIReady() {
			video521 = new YT.Player('video521', {
			height: '315',
			width: '560',
			videoId: 'PCYvj9M5V7k',
			});
			video522 = new YT.Player('video522', {
			height: '315',
			width: '560',
			videoId: 'c9EJvk2yZXw',
			});
		})
		$("#box53").click(function onYouTubeIframeAPIReady() {
			video531 = new YT.Player('video531', {
			height: '315',
			width: '560',
			videoId: 'cPmRN3lyNs8',
			});
			video532 = new YT.Player('video532', {
			height: '315',
			width: '560',
			videoId: 'rmZxohmvI38',
			});
		})
		$("#box54").click(function onYouTubeIframeAPIReady() {
			video541 = new YT.Player('video541', {
			height: '315',
			width: '560',
			videoId: 'yadMCPQc74o',
			});
			video542 = new YT.Player('video542', {
			height: '315',
			width: '560',
			videoId: 'NT7vJ4isFeQ',
			});
		})
		$("#box55").click(function onYouTubeIframeAPIReady() {
			video551 = new YT.Player('video551', {
			height: '315',
			width: '560',
			videoId: 'Pok8TXqIUm0',
			});
			video552 = new YT.Player('video552', {
			height: '315',
			width: '560',
			videoId: 'PTEWX6ExpFE',
			});
		})
		$("#box56").click(function onYouTubeIframeAPIReady() {
			video561 = new YT.Player('video561', {
			height: '315',
			width: '560',
			videoId: 'KgDXIaVBYfc',
			});
			video562 = new YT.Player('video562', {
			height: '315',
			width: '560',
			videoId: 'mEmqcsN2T4c',
			});
		})
		$("#box57").click(function onYouTubeIframeAPIReady() {
			video571 = new YT.Player('video571', {
			height: '315',
			width: '560',
			videoId: 'L_tyo3jjDVw',
			});
			video572 = new YT.Player('video572', {
			height: '315',
			width: '560',
			videoId: '',
			});
		})
		$("#box58").click(function onYouTubeIframeAPIReady() {
			video581 = new YT.Player('video581', {
			height: '315',
			width: '560',
			videoId: 'sYVw1FnqG0E',
			});
			video582 = new YT.Player('video582', {
			height: '315',
			width: '560',
			videoId: '6wEFxiqrNqM',
			});
		})
		$("#box59").click(function onYouTubeIframeAPIReady() {
			video591 = new YT.Player('video591', {
			height: '315',
			width: '560',
			videoId: '331ifEfpddk',
			});
			video592 = new YT.Player('video592', {
			height: '315',
			width: '560',
			videoId: 'IGuT59MW9SA',
			});
		})
		$("#box60").click(function onYouTubeIframeAPIReady() {
			video601 = new YT.Player('video601', {
			height: '315',
			width: '560',
			videoId: '',
			});
			video602 = new YT.Player('video602', {
			height: '315',
			width: '560',
			videoId: '',
			});
		})
		$("#box61").click(function onYouTubeIframeAPIReady() {
			video611 = new YT.Player('video611', {
			height: '315',
			width: '560',
			videoId: 'PybxnGzB_QI',
			});
			video612 = new YT.Player('video612', {
			height: '315',
			width: '560',
			videoId: 'of4UsasjWPA',
			});
		})
		$("#box62").click(function onYouTubeIframeAPIReady() {
			video621 = new YT.Player('video621', {
			height: '315',
			width: '560',
			videoId: 'HbRPjfLxlMo',
			});
			video622 = new YT.Player('video622', {
			height: '315',
			width: '560',
			videoId: 'khcxjRVdz0Q',
			});
		})
		$("#box63").click(function onYouTubeIframeAPIReady() {
			video631 = new YT.Player('video631', {
			height: '315',
			width: '560',
			videoId: 'TOOOkf2xKFc',
			});
			video632 = new YT.Player('video632', {
			height: '315',
			width: '560',
			videoId: 'Uv-JObuwAlk',
			});
		})
		$("#box64").click(function onYouTubeIframeAPIReady() {
			video641 = new YT.Player('video641', {
			height: '315',
			width: '560',
			videoId: '_BhbhkdfIN0',
			});
			video642 = new YT.Player('video642', {
			height: '315',
			width: '560',
			videoId: 'R20ihf4NDP0',
			});
		})
		$("#box65").click(function onYouTubeIframeAPIReady() {
			video651 = new YT.Player('video651', {
			height: '315',
			width: '560',
			videoId: 'n9JgXdfGzGo',
			});
			video652 = new YT.Player('video652', {
			height: '315',
			width: '560',
			videoId: '4Wsv7s-Ovfg',
			});
		})
		$("#box66").click(function onYouTubeIframeAPIReady() {
			video661 = new YT.Player('video661', {
			height: '315',
			width: '560',
			videoId: 'qigPL880zBI',
			});
			video662 = new YT.Player('video662', {
			height: '315',
			width: '560',
			videoId: 'PJLwPozNCj0',
			});
		})
		$("#box67").click(function onYouTubeIframeAPIReady() {
			video671 = new YT.Player('video671', {
			height: '315',
			width: '560',
			videoId: 'ZG0AOCAmLqI',
			});
			video672 = new YT.Player('video672', {
			height: '315',
			width: '560',
			videoId: '_GSm0-rdPvA',
			});
		})

		$("#box68").click(function onYouTubeIframeAPIReady() {
			video681 = new YT.Player('video681', {
			height: '315',
			width: '560',
			videoId: 'eCmftVXX4Iw',
			});
			video682 = new YT.Player('video682', {
			height: '315',
			width: '560',
			videoId: 'S-WG-BMpBz0',
			});
		})
		$("#box69").click(function onYouTubeIframeAPIReady() {
			video691 = new YT.Player('video691', {
			height: '315',
			width: '560',
			videoId: '5VZW6x2FlTc',
			});
			video692 = new YT.Player('video692', {
			height: '315',
			width: '560',
			videoId: 'k3lueQT1n-g',
			});
		})
		$("#box70").click(function onYouTubeIframeAPIReady() {
			video701 = new YT.Player('video701', {
			height: '315',
			width: '560',
			videoId: 'ZoyPZVfpZ8Q',
			});
			video702 = new YT.Player('video702', {
			height: '315',
			width: '560',
			videoId: 'P8VAuJRcON0',
			});
		})
		$("#box71").click(function onYouTubeIframeAPIReady() {
			video711 = new YT.Player('video711', {
			height: '315',
			width: '560',
			videoId: '7eLn_kUuxR8',
			});
			video712 = new YT.Player('video712', {
			height: '315',
			width: '560',
			videoId: 'FlEdOmgfOdM',
			});
		})
		$("#box72").click(function onYouTubeIframeAPIReady() {
			video721 = new YT.Player('video721', {
			height: '315',
			width: '560',
			videoId: 'OYYnHsUxe_c',
			});
			video722 = new YT.Player('video722', {
			height: '315',
			width: '560',
			videoId: 'CddZ8QC93-Q',
			});
		})
		$("#box73").click(function onYouTubeIframeAPIReady() {
			video731 = new YT.Player('video731', {
			height: '315',
			width: '560',
			videoId: 'PDBiy-PI7To',
			});
			video732 = new YT.Player('video732', {
			height: '315',
			width: '560',
			videoId: 'LSYANS4lJI0',
			});
		})
		$("#box74").click(function onYouTubeIframeAPIReady() {
			video741 = new YT.Player('video741', {
			height: '315',
			width: '560',
			videoId: 'tmvkU9TocZ8',
			});
			video742 = new YT.Player('video742', {
			height: '315',
			width: '560',
			videoId: 'Gk_s71AMugg',
			});
		})
		$("#box75").click(function onYouTubeIframeAPIReady() {
			video751 = new YT.Player('video751', {
			height: '315',
			width: '560',
			videoId: '',
			});
			video752 = new YT.Player('video752', {
			height: '315',
			width: '560',
			videoId: '',
			});
		})
		$("#box76").click(function onYouTubeIframeAPIReady() {
			video761 = new YT.Player('video761', {
			height: '315',
			width: '560',
			videoId: 'kBtCP4n8n8I',
			});
			video762 = new YT.Player('video762', {
			height: '315',
			width: '560',
			videoId: 'fmAdYrULeZ4',
			});
		})
		$("#box77").click(function onYouTubeIframeAPIReady() {
			video771 = new YT.Player('video771', {
			height: '315',
			width: '560',
			videoId: '',
			});
			video772 = new YT.Player('video772', {
			height: '315',
			width: '560',
			videoId: '',
			});
		})
		$("#box78").click(function onYouTubeIframeAPIReady() {
			video781 = new YT.Player('video781', {
			height: '315',
			width: '560',
			videoId: '',
			});
			video782 = new YT.Player('video782', {
			height: '315',
			width: '560',
			videoId: '',
			});
		})
		$("#box79").click(function onYouTubeIframeAPIReady() {
			video791 = new YT.Player('video791', {
			height: '315',
			width: '560',
			videoId: 'mk1k4i5bGjc',
			});
			video792 = new YT.Player('video792', {
			height: '315',
			width: '560',
			videoId: 'jhZDowidL_I',
			});
		})

		$("#box80").click(function onYouTubeIframeAPIReady() {
			video801 = new YT.Player('video801', {
			height: '315',
			width: '560',
			videoId: 'I3TmUqCYgrE',
			});
			video802 = new YT.Player('video802', {
			height: '315',
			width: '560',
			videoId: 'ihclvYcoJfk',
			});
		})
		$("#box81").click(function onYouTubeIframeAPIReady() {
			video811 = new YT.Player('video811', {
			height: '315',
			width: '560',
			videoId: 'nw6b9cwucMo',
			});
			video812 = new YT.Player('video812', {
			height: '315',
			width: '560',
			videoId: '6ICO3iGbT5A',
			});
		})
		$("#box82").click(function onYouTubeIframeAPIReady() {
			video821 = new YT.Player('video821', {
			height: '315',
			width: '560',
			videoId: 'cjMyykpUNe0',
			});
			video822 = new YT.Player('video822', {
			height: '315',
			width: '560',
			videoId: '4S1yvROx0MQ',
			});
		})
		$("#box83").click(function onYouTubeIframeAPIReady() {
			video831 = new YT.Player('video831', {
			height: '315',
			width: '560',
			videoId: '1cUk3P6fi4U',
			});
			video832 = new YT.Player('video832', {
			height: '315',
			width: '560',
			videoId: 'LrMqOL3Ef64',
			});
		})
		$("#box84").click(function onYouTubeIframeAPIReady() {
			video841 = new YT.Player('video841', {
			height: '315',
			width: '560',
			videoId: 'AUnTp0A4nPM',
			});
			video842 = new YT.Player('video842', {
			height: '315',
			width: '560',
			videoId: 'Pwwavf0TpCI',
			});
		})
		$("#box85").click(function onYouTubeIframeAPIReady() {
			video851 = new YT.Player('video851', {
			height: '315',
			width: '560',
			videoId: 'UoAZvA_qwAs',
			});
			video852 = new YT.Player('video852', {
			height: '315',
			width: '560',
			videoId: 'ZtE421X4fuo',
			});
		})