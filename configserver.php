<?php
require_once 'siteconfig.php';
/*
** Admin site template
** Luna Punto Junio, 2017
**
** Archivo de configuración de servidor.
** Una vez configurado no cambiar.
**
*/

// ¿El sitio web está en producción?
$production = false;
define('is_production', $production);


// Directorios
define('dir','http://'.$_SERVER['HTTP_HOST'].'/LPTemplate');
define('admin',dir.'/admin');
define('asset',dir.'/assets');
define('css',asset.'/css');
define('js',asset.'/js');



// Variables de BD
define('DATABASE', '');
define('USERNAME','');
define('PASSWORD', '');

define('HOST', 'localhost');

// Timezone
date_default_timezone_set ('America/Mexico_City');


/*


MMMMMMMMMMMMMMMMMMMMMMMMMMMNdyo+/-.```````..-:/oshmMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMds/.`````````````````````````-+sdMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMh/`````````````.------.``````````````:smMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMNo.````````:+shmNMMMMMMMMMMMmdyo/-`````````.+dMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMN+```````:sdMMMMMMMMMMMMMMMMMMMMMMMMMds/.```````.sNMMMMMMMMMMMMMM
MMMMMMMMMMMMMMh.`````.sNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMdo-```````/mMMMMMMMMMMMM
MMMMMMMMMMMMMh``````sMMMMMMMMNho+/::/+smMMMMMMMMMMMMMMMMMMMdo.``````/mMMMMMMMMMM
MMMMMMMMMMMMm`````.mMMMMMMMd/```````````-yMMMMMMMMMMMMMMMMMMMMy-``````+NMMMMMMMM
MMMMMMMMMMMM+`````mMMMMMMM+```````````````-mMMMMMMMMMMMMMMMMMMMMh-`````.yMMMMMMM
MMMMMMMMMMMM.````:MMMMMMMs`````-ymMNd+`````.mMMMMMMMMMMMMMMMMMMMMMy.`````+NMMMMM
MMMMMMMMMMMM-````:MMMMMMM`````-MMMMMMMh`````/MMMMMMMMMMMMMMMMMMMMMMN/`````-NMMMM
MMMMMMMMMMMMo`````yMMMMMN`````+MMMMMMMM/`````MMMMMMMMMMMMMMMMMMMMMMMMs`````.NMMM
MMMMMMMMMMMMN.`````oNMMMN`````/MMMMMMMM:`````MMMMMMMMMMMMMMMMMMMMMMMMMy`````-NMM
MMho/--/sNMMMm-`````.+hNM:`````NMMMMmy:`````oMMMMMMMMMMMMMMMMMMMMMMMMMMy`````/MM
m.```````:MMMMMo````````.://::///:.````````+MMMMMMMMMMMMMMMMMMMMMMMMMMMM+`````yM
s`````````MMMMMMNs-``````````````````````:hMMMMMMMMmhsoooshmMMMMMMMMMMMMN.````.M
Mo//os.``/MMMMMMMMMNyo:.````````````.:ohNMMMMMMMh/```````````:yNMMMMMMMMMs`````h
MMM+`````mMMMMMMMMMMMMMMMmds/////sNMMMMMMMMMMMd-````````````````sMMMMMMMMN`````/
MMh`````yMMMMMMMMMMMMMMMMMMM-`````mMMMMMMMMMMh``````-oyhhy+.`````:NMMMMMMM.````-
MN.````/MMMMMMMMMMMMMMMMMMMMm`````-MMMMMMMMMN`````.dMMMMMMMM+`````/MMMMMMM-`````
Mo`````NMMMMMMMMMMMMMMMMMMMMMy`````+MMMMMMMMh`````oMMMMMMMMMM/`````mMMMMMM.`````
m`````oMMMMMMMMMMMMMMMMMMMMMMM/`````hMMMMMMMy`````oMMMMMMMMMMd`````yMMMMMN`````.
o`````mMMMMMMMMMMMMMMNhs+/:---h.````.NMMMMMMh`````:MMMMMMMMMMh`````hMMMMMy`````/
-````-MMMMMMMMMMMMMh:`````````-y`````o::+shmN:`````NMMMMMMMMN:`````NMMMMM-`````y
.````:MMMMMMMMMMMN:````````````s:`````h``````-/++++hMMMMMMNy.`````yMMMMMy`````.M
`````/MMMMMMMMMMM-`````/hmNMMNNNd`````o-````````````-://:-```````yMMMMMm``````yM
-````:MMMMMMMMMMs`````yMMMMMMMMMM:````.do/-````````````````````+NMMMMMM/`````:MM
/`````MMMMMMMMMM:````.MMMMMMMMMMMs`````mMMMMmhs+/-.```````.:+hNMMMMMMMMy.```:NMM
h`````hMMMMMMMMM:````.MMMMMMMMMMMh`````mMMMMMMMs.-/++sNNNMMMMMMMMMMMMMMMMmdNMMMM
M.````-MMMMMMMMMs`````sMMMMMMMMMM+`````NMMMMMMMM.````.MMMMMMMMMMMMMMMMMMMMMMMMMM
My`````oMMMMMMMMN-`````+NMMMMMMNo`````+MMMMMMMMMo`````hMMMMMMMMMdddNMMMMMMMMMMMM
MM/`````yMMMMMMMMm-``````:+oo/-``````:MMMMMMMMMMd`````oMMMMMMMo`````/NMMMMMMMMMM
MMM:`````yMMMMMMMMMo```````````````.sMMMMMMMMMMMN`````/MMMMMMh```````+MMMMMMMMMM
MMMN:`````+MMMMMMMMMNy/.````````-+hMMMMMMMMMMMMMm`````+MMMMMMm```````sMMMMMMMMMM
MMMMM+`````.hMMMMMMMMMMMNdddddmMMMMMMMMMMMMMMMMMs`````yMMMMMMMm+-../hMMMMMMMMMMM
MMMMMMh.`````:dMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMd`````.MMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMNo``````-yNMMMMMMMMMMMMMMMMMMMMMMMMMMMMs``````dMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMm+```````/yNMMMMMMMMMMMMMMMMMMMMMMNy-`````.dMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMNs-```````-+ydNMMMMMMMMMMMMMmho:```````+NMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMdo-``````````-:/+++++/:.`````````.omMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMmy+-```````````````````````-odMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMNdyo/:-.```````.-:/oydMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM

*/
