<?php
	function komp_tiga($komp_dua){
		$m = str_split($komp_dua);
		$array = array(
			1=>$m[0],		2=>$m[1],		3=>$m[3],		4=>$m[6],		5=>$m[10],		6=>$m[15],		7=>$m[21],		8=>$m[28],		9=>$m[36],		10=>$m[45],		11=>$m[55],		12=>$m[66],		13=>$m[78],		14=>$m[91],		15=>$m[105],	16=>$m[120],
			17=>$m[2],		18=>$m[4],		19=>$m[7],		20=>$m[11],		21=>$m[16],		22=>$m[22],		23=>$m[29],		24=>$m[37],		25=>$m[46],		26=>$m[56],		27=>$m[67],		28=>$m[79],		29=>$m[92],		30=>$m[106],	31=>$m[121],	32=>$m[136],
			33=>$m[5],		34=>$m[8],		35=>$m[12],		36=>$m[17],		37=>$m[23],		38=>$m[30],		39=>$m[38],		40=>$m[47],		41=>$m[57],		42=>$m[68],		43=>$m[80],		44=>$m[93],		45=>$m[107],	46=>$m[122],	47=>$m[137],	48=>$m[151],
			49=>$m[9],		50=>$m[13],		51=>$m[18],		52=>$m[24],		53=>$m[31],		54=>$m[39],		55=>$m[48],		56=>$m[58],		57=>$m[69],		58=>$m[81],		59=>$m[94],		60=>$m[108],	61=>$m[123],	62=>$m[138],	63=>$m[152],	64=>$m[165],
			65=>$m[14],		66=>$m[19],		67=>$m[25],		68=>$m[32],		69=>$m[40],		70=>$m[49],		71=>$m[59],		72=>$m[70],		73=>$m[82],		74=>$m[95],		75=>$m[109],	76=>$m[124],	77=>$m[139],	78=>$m[153],	79=>$m[166],	80=>$m[178],
			81=>$m[20],		82=>$m[26],		83=>$m[33],		84=>$m[41],		85=>$m[50],		86=>$m[60],		87=>$m[71],		88=>$m[83],		89=>$m[96],		90=>$m[110],	91=>$m[125],	92=>$m[140],	93=>$m[154],	94=>$m[167],	95=>$m[179],	96=>$m[191],
			97=>$m[27],		98=>$m[34],		99=>$m[42],		100=>$m[51],	101=>$m[61],	102=>$m[72],	103=>$m[84],	104=>$m[97],	105=>$m[111],	106=>$m[126],	107=>$m[141],	108=>$m[155],	109=>$m[168],	110=>$m[180],	111=>$m[192],	112=>$m[202],
			113=>$m[35],	114=>$m[43],	115=>$m[52],	116=>$m[62],	117=>$m[73],	118=>$m[85],	119=>$m[98],	120=>$m[112],	121=>$m[127],	122=>$m[142],	123=>$m[156],	124=>$m[169],	125=>$m[181],	126=>$m[193],	127=>$m[203],	128=>$m[211],
			129=>$m[44],	130=>$m[53],	131=>$m[63],	132=>$m[74],	133=>$m[86],	134=>$m[99],	135=>$m[113],	136=>$m[128],	137=>$m[143],	138=>$m[157],	139=>$m[170],	140=>$m[182],	141=>$m[194],	142=>$m[204],	143=>$m[212],	144=>$m[220],
			145=>$m[54],	146=>$m[64],	147=>$m[75],	148=>$m[87],	149=>$m[100],	150=>$m[114],	151=>$m[129],	152=>$m[144],	153=>$m[158],	154=>$m[171],	155=>$m[183],	156=>$m[195],	157=>$m[205],	158=>$m[213],	159=>$m[221],	160=>$m[228],
			161=>$m[65],	162=>$m[76],	163=>$m[88],	164=>$m[101],	165=>$m[115],	166=>$m[130],	167=>$m[145],	168=>$m[159],	169=>$m[172],	170=>$m[184],	171=>$m[196],	172=>$m[206],	173=>$m[214],	174=>$m[222],	175=>$m[229],	176=>$m[235],
			177=>$m[77],	178=>$m[89],	179=>$m[102],	180=>$m[116],	181=>$m[131],	182=>$m[146],	183=>$m[160],	184=>$m[173],	185=>$m[185],	186=>$m[197],	187=>$m[207],	188=>$m[215],	189=>$m[223],	190=>$m[230],	191=>$m[236],	192=>$m[241],
			193=>$m[90],	194=>$m[103],	195=>$m[117],	196=>$m[132],	197=>$m[147],	198=>$m[161],	199=>$m[174],	200=>$m[186],	201=>$m[198],	202=>$m[208],	203=>$m[216],	204=>$m[224],	205=>$m[231],	206=>$m[237],	207=>$m[242],	208=>$m[246],
			209=>$m[104],	210=>$m[119],	211=>$m[133],	212=>$m[148],	213=>$m[162],	214=>$m[175],	215=>$m[189],	216=>$m[199],	217=>$m[208],	218=>$m[217],	219=>$m[225],	220=>$m[232],	221=>$m[238],	222=>$m[243],	223=>$m[247],	224=>$m[250],
			225=>$m[119],	226=>$m[134],	227=>$m[149],	228=>$m[163],	229=>$m[176],	230=>$m[190],	231=>$m[200],	232=>$m[209],	233=>$m[218],	234=>$m[226],	235=>$m[233],	236=>$m[239],	237=>$m[255],	238=>$m[248],	239=>$m[251],	240=>$m[253],
			241=>$m[135],	242=>$m[150],	243=>$m[164],	244=>$m[177],	245=>$m[191],	246=>$m[201],	247=>$m[210],	248=>$m[219],	249=>$m[227],	250=>$m[55],	251=>$m[240],	252=>$m[245],	253=>$m[249],	254=>$m[252],	255=>$m[254],	256=>$m[255]
		);

		foreach ($array as $key) {
			$a .= $key;
		}
		
		$om = str_split($a);
		$diag = array(
			1=>$om[240],	2=>$om[241],	3=>$om[224],		4=>$om[242],		5=>$om[225],	6=>$om[208],		7=>$om[243],	8=>$om[226],	9=>$om[209],	10=>$om[192],	11=>$om[244],	12=>$om[227],	13=>$om[210],	14=>$om[193],	15=>$om[176],		16=>$om[245],
			17=>$om[228],	18=>$om[211],	19=>$om[194],		20=>$om[177],		21=>$om[160],	22=>$om[246],		23=>$om[229],	24=>$om[212],	25=>$om[195],	26=>$om[178],	27=>$om[161],	28=>$om[144],	29=>$om[247],	30=>$om[230],	31=>$om[213],		32=>$om[196],
			33=>$om[179],	34=>$om[162],	35=>$om[145],		36=>$om[128],		37=>$om[248],	38=>$om[231],		39=>$om[214],	40=>$om[197],	41=>$om[180],	42=>$om[163],	43=>$om[146],	44=>$om[129],	45=>$om[112],	46=>$om[249],	47=>$om[232],	48=>$om[215],
			49=>$om[198],	50=>$om[181],	51=>$om[164],		52=>$om[147],		53=>$om[130],	54=>$om[113],		55=>$om[96],	56=>$om[250],	57=>$om[233],	58=>$om[216],	59=>$om[199],	60=>$om[182],	61=>$om[165],	62=>$om[148],	63=>$om[131],	64=>$om[114],
			65=>$om[97],	66=>$om[80],	67=>$om[251],		68=>$om[234],		69=>$om[217],	70=>$om[200],		71=>$om[183],	72=>$om[166],	73=>$om[149],	74=>$om[132],	75=>$om[115],	76=>$om[98],	77=>$om[81],	78=>$om[64],	79=>$om[252],	80=>$om[235],
			81=>$om[218],	82=>$om[201],	83=>$om[184],		84=>$om[167],		85=>$om[150],	86=>$om[133],		87=>$om[116],	88=>$om[99],	89=>$om[82],	90=>$om[65],	91=>$om[48],	92=>$om[253],	93=>$om[236],	94=>$om[219],	95=>$om[202],	96=>$om[185],
			97=>$om[168],	98=>$om[151],	99=>$om[134],		100=>$om[117],		101=>$om[100],	102=>$om[83],		103=>$om[66],	104=>$om[49],	105=>$om[32],	106=>$om[254],	107=>$om[237],	108=>$om[220],	109=>$om[203],	110=>$om[186],	111=>$om[169],	112=>$om[152],
			113=>$om[135],	114=>$om[118],	115=>$om[101],		116=>$om[84],		117=>$om[67],	118=>$om[50],		119=>$om[33],	120=>$om[16],	121=>$om[255],	122=>$om[238],	123=>$om[221],	124=>$om[204],	125=>$om[187],	126=>$om[170],	127=>$om[153],	128=>$om[136],
			129=>$om[119],	130=>$om[102],	131=>$om[85],		132=>$om[68],		133=>$om[51],	134=>$om[34],		135=>$om[17],	136=>$om[0],	137=>$om[239],	138=>$om[222],	139=>$om[205],	140=>$om[188],	141=>$om[171],	142=>$om[154],	143=>$om[137],	144=>$om[120],
			145=>$om[103],	146=>$om[86],	147=>$om[69],		148=>$om[52],		149=>$om[35],	150=>$om[18],		151=>$om[1],	152=>$om[223],	153=>$om[206],	154=>$om[189],	155=>$om[172],	156=>$om[155],	157=>$om[138],	158=>$om[121],	159=>$om[104],	160=>$om[87],
			161=>$om[70],	162=>$om[53],	163=>$om[36],		164=>$om[19],		165=>$om[2],	166=>$om[207],		167=>$om[190],	168=>$om[173],	169=>$om[156],	170=>$om[139],	171=>$om[122],	172=>$om[105],	173=>$om[88],	174=>$om[71],	175=>$om[54],	176=>$om[37],
			177=>$om[20],	178=>$om[3],	179=>$om[191],		180=>$om[174],		181=>$om[157],	182=>$om[140],		183=>$om[123],	184=>$om[106],	185=>$om[89],	186=>$om[72],	187=>$om[55],	188=>$om[38],	189=>$om[21],	190=>$om[4],	191=>$om[175],	192=>$om[158],
			193=>$om[141],	194=>$om[124],	195=>$om[107],		196=>$om[90],		197=>$om[73],	198=>$om[56],		199=>$om[39],	200=>$om[22],	201=>$om[5],	202=>$om[159],	203=>$om[142],	204=>$om[125],	205=>$om[108],	206=>$om[91],	207=>$om[74],	208=>$om[57],
			209=>$om[40],	210=>$om[23],	211=>$om[6],		212=>$om[143],		213=>$om[126],	214=>$om[109],		215=>$om[92],	216=>$om[75],	217=>$om[58],	218=>$om[41],	219=>$om[24],	220=>$om[7],	221=>$om[127],	222=>$om[110],	223=>$om[93],	224=>$om[76],
			225=>$om[59],	226=>$om[42],	227=>$om[25],		228=>$om[8],		229=>$om[111],	230=>$om[94],		231=>$om[77],	232=>$om[60],	233=>$om[43],	234=>$om[26],	235=>$om[9],	236=>$om[95],	237=>$om[78],	238=>$om[61],	239=>$om[44],	240=>$om[27],
			241=>$om[10],	242=>$om[79],	243=>$om[62],		244=>$om[45],		245=>$om[28],	246=>$om[11],		247=>$om[63],	248=>$om[46],	249=>$om[29],	250=>$om[12],	251=>$om[47],	252=>$om[30],	253=>$om[13],	254=>$om[31],	255=>$om[14],	256=>$om[15]	
			
		);
		
		foreach ($diag as $dg) {
			$b .= $dg;
		}
	
		return $b;

	}
?>