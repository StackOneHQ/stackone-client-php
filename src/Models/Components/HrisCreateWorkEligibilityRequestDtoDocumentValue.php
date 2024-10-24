<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** The file format of the file, expressed as a file extension */
enum HrisCreateWorkEligibilityRequestDtoDocumentValue: string
{
    case UnmappedValue = 'unmapped_value';
    case Ez = 'ez';
    case Aw = 'aw';
    case Atom = 'atom';
    case Atomcat = 'atomcat';
    case Atomdeleted = 'atomdeleted';
    case Atomsvc = 'atomsvc';
    case Dwd = 'dwd';
    case Held = 'held';
    case Rsat = 'rsat';
    case Bdoc = 'bdoc';
    case Xcs = 'xcs';
    case Ccxml = 'ccxml';
    case Cdfx = 'cdfx';
    case Cdmia = 'cdmia';
    case Cdmic = 'cdmic';
    case Cdmid = 'cdmid';
    case Cdmio = 'cdmio';
    case Cdmiq = 'cdmiq';
    case Cu = 'cu';
    case Mpd = 'mpd';
    case Davmount = 'davmount';
    case Dbk = 'dbk';
    case Dssc = 'dssc';
    case Xdssc = 'xdssc';
    case Es = 'es';
    case Ecma = 'ecma';
    case Emma = 'emma';
    case Emotionml = 'emotionml';
    case Epub = 'epub';
    case Exi = 'exi';
    case Exp = 'exp';
    case Fdt = 'fdt';
    case Pfr = 'pfr';
    case Geojson = 'geojson';
    case Gml = 'gml';
    case Gpx = 'gpx';
    case Gxf = 'gxf';
    case Gz = 'gz';
    case Hjson = 'hjson';
    case Stk = 'stk';
    case Ink = 'ink';
    case Inkml = 'inkml';
    case Ipfix = 'ipfix';
    case Its = 'its';
    case Jar = 'jar';
    case War = 'war';
    case Ear = 'ear';
    case Ser = 'ser';
    case Class_ = 'class';
    case Js = 'js';
    case Mjs = 'mjs';
    case Json = 'json';
    case Map = 'map';
    case Json5 = 'json5';
    case Jsonml = 'jsonml';
    case Jsonld = 'jsonld';
    case Lgr = 'lgr';
    case Lostxml = 'lostxml';
    case Hqx = 'hqx';
    case Cpt = 'cpt';
    case Mads = 'mads';
    case Webmanifest = 'webmanifest';
    case Mrc = 'mrc';
    case Mrcx = 'mrcx';
    case Ma = 'ma';
    case Nb = 'nb';
    case Mb = 'mb';
    case Mathml = 'mathml';
    case Mbox = 'mbox';
    case Mscml = 'mscml';
    case Metalink = 'metalink';
    case Meta4 = 'meta4';
    case Mets = 'mets';
    case Maei = 'maei';
    case Musd = 'musd';
    case Mods = 'mods';
    case M21 = 'm21';
    case Mp21 = 'mp21';
    case Mp4s = 'mp4s';
    case M4p = 'm4p';
    case Doc = 'doc';
    case Dot = 'dot';
    case Mxf = 'mxf';
    case Nq = 'nq';
    case Nt = 'nt';
    case Cjs = 'cjs';
    case Bin = 'bin';
    case Dms = 'dms';
    case Lrf = 'lrf';
    case Mar = 'mar';
    case So = 'so';
    case Dist = 'dist';
    case Distz = 'distz';
    case Pkg = 'pkg';
    case Bpk = 'bpk';
    case Dump = 'dump';
    case Elc = 'elc';
    case Deploy = 'deploy';
    case Exe = 'exe';
    case Dll = 'dll';
    case Deb = 'deb';
    case Dmg = 'dmg';
    case Iso = 'iso';
    case Img = 'img';
    case Msi = 'msi';
    case Msp = 'msp';
    case Msm = 'msm';
    case Buffer = 'buffer';
    case Oda = 'oda';
    case Opf = 'opf';
    case Ogx = 'ogx';
    case Omdoc = 'omdoc';
    case Onetoc = 'onetoc';
    case Onetoc2 = 'onetoc2';
    case Onetmp = 'onetmp';
    case Onepkg = 'onepkg';
    case Oxps = 'oxps';
    case Relo = 'relo';
    case Xer = 'xer';
    case Pdf = 'pdf';
    case Pgp = 'pgp';
    case Asc = 'asc';
    case Sig = 'sig';
    case Prf = 'prf';
    case P10 = 'p10';
    case P7m = 'p7m';
    case P7c = 'p7c';
    case P7s = 'p7s';
    case P8 = 'p8';
    case Ac = 'ac';
    case Cer = 'cer';
    case Crl = 'crl';
    case Pkipath = 'pkipath';
    case Pki = 'pki';
    case Pls = 'pls';
    case Ai = 'ai';
    case Eps = 'eps';
    case Ps = 'ps';
    case Provx = 'provx';
    case Pskcxml = 'pskcxml';
    case Raml = 'raml';
    case Rdf = 'rdf';
    case Owl = 'owl';
    case Rif = 'rif';
    case Rnc = 'rnc';
    case Rl = 'rl';
    case Rld = 'rld';
    case Rs = 'rs';
    case Rapd = 'rapd';
    case Sls = 'sls';
    case Rusd = 'rusd';
    case Gbr = 'gbr';
    case Mft = 'mft';
    case Roa = 'roa';
    case Rsd = 'rsd';
    case Rss = 'rss';
    case Rtf = 'rtf';
    case Sbml = 'sbml';
    case Scq = 'scq';
    case Scs = 'scs';
    case Spq = 'spq';
    case Spp = 'spp';
    case Sdp = 'sdp';
    case Senmlx = 'senmlx';
    case Sensmlx = 'sensmlx';
    case Setpay = 'setpay';
    case Setreg = 'setreg';
    case Shf = 'shf';
    case Siv = 'siv';
    case Sieve = 'sieve';
    case Smi = 'smi';
    case Smil = 'smil';
    case Rq = 'rq';
    case Srx = 'srx';
    case Gram = 'gram';
    case Grxml = 'grxml';
    case Sru = 'sru';
    case Ssdl = 'ssdl';
    case Ssml = 'ssml';
    case Swidtag = 'swidtag';
    case Tei = 'tei';
    case Teicorpus = 'teicorpus';
    case Tfi = 'tfi';
    case Tsd = 'tsd';
    case Toml = 'toml';
    case Trig = 'trig';
    case Ttml = 'ttml';
    case Ubj = 'ubj';
    case Rsheet = 'rsheet';
    case Td = 'td';
    case Vxml = 'vxml';
    case Wasm = 'wasm';
    case Wgt = 'wgt';
    case Hlp = 'hlp';
    case Wsdl = 'wsdl';
    case Wspolicy = 'wspolicy';
    case Xaml = 'xaml';
    case Xav = 'xav';
    case Xca = 'xca';
    case Xdf = 'xdf';
    case Xel = 'xel';
    case Xns = 'xns';
    case Xenc = 'xenc';
    case Xhtml = 'xhtml';
    case Xht = 'xht';
    case Xlf = 'xlf';
    case Xml = 'xml';
    case Xsl = 'xsl';
    case Xsd = 'xsd';
    case Rng = 'rng';
    case Dtd = 'dtd';
    case Xop = 'xop';
    case Xpl = 'xpl';
    case WildcardXsl = '*xsl';
    case Xslt = 'xslt';
    case Xspf = 'xspf';
    case Mxml = 'mxml';
    case Xhvml = 'xhvml';
    case Xvml = 'xvml';
    case Xvm = 'xvm';
    case Yang = 'yang';
    case Yin = 'yin';
    case Zip = 'zip';
    case Wildcard3gpp = '*3gpp';
    case Adp = 'adp';
    case Amr = 'amr';
    case Au = 'au';
    case Snd = 'snd';
    case Mid = 'mid';
    case Midi = 'midi';
    case Kar = 'kar';
    case Rmi = 'rmi';
    case Mxmf = 'mxmf';
    case WildcardMp3 = '*mp3';
    case M4a = 'm4a';
    case Mp4a = 'mp4a';
    case Mpga = 'mpga';
    case Mp2 = 'mp2';
    case Mp2a = 'mp2a';
    case Mp3 = 'mp3';
    case M2a = 'm2a';
    case M3a = 'm3a';
    case Oga = 'oga';
    case Ogg = 'ogg';
    case Spx = 'spx';
    case Opus = 'opus';
    case S3m = 's3m';
    case Sil = 'sil';
    case Wav = 'wav';
    case WildcardWav = '*wav';
    case Weba = 'weba';
    case Xm = 'xm';
    case Ttc = 'ttc';
    case Otf = 'otf';
    case Ttf = 'ttf';
    case Woff = 'woff';
    case Woff2 = 'woff2';
    case Exr = 'exr';
    case Apng = 'apng';
    case Avif = 'avif';
    case Bmp = 'bmp';
    case Cgm = 'cgm';
    case Drle = 'drle';
    case Emf = 'emf';
    case Fits = 'fits';
    case G3 = 'g3';
    case Gif = 'gif';
    case Heic = 'heic';
    case Heics = 'heics';
    case Heif = 'heif';
    case Heifs = 'heifs';
    case Hej2 = 'hej2';
    case Hsj2 = 'hsj2';
    case Ief = 'ief';
    case Jls = 'jls';
    case Jp2 = 'jp2';
    case Jpg2 = 'jpg2';
    case Jpeg = 'jpeg';
    case Jpg = 'jpg';
    case Jpe = 'jpe';
    case Jph = 'jph';
    case Jhc = 'jhc';
    case Jpm = 'jpm';
    case Jpx = 'jpx';
    case Jpf = 'jpf';
    case Jxr = 'jxr';
    case Jxra = 'jxra';
    case Jxrs = 'jxrs';
    case Jxs = 'jxs';
    case Jxsc = 'jxsc';
    case Jxsi = 'jxsi';
    case Jxss = 'jxss';
    case Ktx = 'ktx';
    case Ktx2 = 'ktx2';
    case Png = 'png';
    case Sgi = 'sgi';
    case Svg = 'svg';
    case Svgz = 'svgz';
    case T38 = 't38';
    case Tif = 'tif';
    case Tiff = 'tiff';
    case Tfx = 'tfx';
    case Webp = 'webp';
    case Wmf = 'wmf';
    case DispositionNotification = 'disposition-notification';
    case U8msg = 'u8msg';
    case U8dsn = 'u8dsn';
    case U8mdn = 'u8mdn';
    case U8hdr = 'u8hdr';
    case Eml = 'eml';
    case Mime = 'mime';
    case Threemf = '3mf';
    case Gltf = 'gltf';
    case Glb = 'glb';
    case Igs = 'igs';
    case Iges = 'iges';
    case Msh = 'msh';
    case Mesh = 'mesh';
    case Silo = 'silo';
    case Mtl = 'mtl';
    case Obj = 'obj';
    case Stpx = 'stpx';
    case Stpz = 'stpz';
    case Stpxz = 'stpxz';
    case Stl = 'stl';
    case Wrl = 'wrl';
    case Vrml = 'vrml';
    case WildcardX3db = '*x3db';
    case X3dbz = 'x3dbz';
    case X3db = 'x3db';
    case WildcardX3dv = '*x3dv';
    case X3dvz = 'x3dvz';
    case X3d = 'x3d';
    case X3dz = 'x3dz';
    case X3dv = 'x3dv';
    case Appcache = 'appcache';
    case Manifest = 'manifest';
    case Ics = 'ics';
    case Ifb = 'ifb';
    case Coffee = 'coffee';
    case Litcoffee = 'litcoffee';
    case Css = 'css';
    case Csv = 'csv';
    case Html = 'html';
    case Htm = 'htm';
    case Shtml = 'shtml';
    case Jade = 'jade';
    case Jsx = 'jsx';
    case Less = 'less';
    case Markdown = 'markdown';
    case Md = 'md';
    case Mml = 'mml';
    case Mdx = 'mdx';
    case N3 = 'n3';
    case Txt = 'txt';
    case Text = 'text';
    case Conf = 'conf';
    case Def = 'def';
    case List = 'list';
    case Log = 'log';
    case In = 'in';
    case Ini = 'ini';
    case Rtx = 'rtx';
    case WildcardRtf = '*rtf';
    case Sgml = 'sgml';
    case Sgm = 'sgm';
    case Shex = 'shex';
    case Slim = 'slim';
    case Slm = 'slm';
    case Spdx = 'spdx';
    case Stylus = 'stylus';
    case Styl = 'styl';
    case Tsv = 'tsv';
    case T = 't';
    case Tr = 'tr';
    case Roff = 'roff';
    case Man = 'man';
    case Me = 'me';
    case Ms = 'ms';
    case Ttl = 'ttl';
    case Uri = 'uri';
    case Uris = 'uris';
    case Urls = 'urls';
    case Vcard = 'vcard';
    case Vtt = 'vtt';
    case WildcardXml = '*xml';
    case Yaml = 'yaml';
    case Yml = 'yml';
    case Threegp = '3gp';
    case Threegpp = '3gpp';
    case Threeg2 = '3g2';
    case H261 = 'h261';
    case H263 = 'h263';
    case H264 = 'h264';
    case M4s = 'm4s';
    case Jpgv = 'jpgv';
    case WildcardJpm = '*jpm';
    case Jpgm = 'jpgm';
    case Mj2 = 'mj2';
    case Mjp2 = 'mjp2';
    case Ts = 'ts';
    case Mp4 = 'mp4';
    case Mp4v = 'mp4v';
    case Mpg4 = 'mpg4';
    case Mpeg = 'mpeg';
    case Mpg = 'mpg';
    case Mpe = 'mpe';
    case M1v = 'm1v';
    case M2v = 'm2v';
    case Ogv = 'ogv';
    case Qt = 'qt';
    case Mov = 'mov';
    case Webm = 'webm';
    case Cww = 'cww';
    case Onekm = '1km';
    case Plb = 'plb';
    case Psb = 'psb';
    case Pvb = 'pvb';
    case Tcap = 'tcap';
    case Pwn = 'pwn';
    case Aso = 'aso';
    case Imp = 'imp';
    case Acu = 'acu';
    case Atc = 'atc';
    case Acutc = 'acutc';
    case Air = 'air';
    case Fcdt = 'fcdt';
    case Fxp = 'fxp';
    case Fxpl = 'fxpl';
    case Xdp = 'xdp';
    case Xfdf = 'xfdf';
    case Ahead = 'ahead';
    case Azf = 'azf';
    case Azs = 'azs';
    case Azw = 'azw';
    case Acc = 'acc';
    case Ami = 'ami';
    case Apk = 'apk';
    case Cii = 'cii';
    case Fti = 'fti';
    case Atx = 'atx';
    case Mpkg = 'mpkg';
    case Key = 'key';
    case M3u8 = 'm3u8';
    case Numbers = 'numbers';
    case Pages = 'pages';
    case Pkpass = 'pkpass';
    case Swi = 'swi';
    case Iota = 'iota';
    case Aep = 'aep';
    case Bmml = 'bmml';
    case Mpm = 'mpm';
    case Bmi = 'bmi';
    case Rep = 'rep';
    case Cdxml = 'cdxml';
    case Mmd = 'mmd';
    case Cdy = 'cdy';
    case Csl = 'csl';
    case Cla = 'cla';
    case Rp9 = 'rp9';
    case C4g = 'c4g';
    case C4d = 'c4d';
    case C4f = 'c4f';
    case C4p = 'c4p';
    case C4u = 'c4u';
    case C11amc = 'c11amc';
    case C11amz = 'c11amz';
    case Csp = 'csp';
    case Cdbcmsg = 'cdbcmsg';
    case Cmc = 'cmc';
    case Clkx = 'clkx';
    case Clkk = 'clkk';
    case Clkp = 'clkp';
    case Clkt = 'clkt';
    case Clkw = 'clkw';
    case Wbs = 'wbs';
    case Pml = 'pml';
    case Ppd = 'ppd';
    case Car = 'car';
    case Pcurl = 'pcurl';
    case Dart = 'dart';
    case Rdz = 'rdz';
    case Dbf = 'dbf';
    case Uvf = 'uvf';
    case Uvvf = 'uvvf';
    case Uvd = 'uvd';
    case Uvvd = 'uvvd';
    case Uvt = 'uvt';
    case Uvvt = 'uvvt';
    case Uvx = 'uvx';
    case Uvvx = 'uvvx';
    case Uvz = 'uvz';
    case Uvvz = 'uvvz';
    case FeLaunch = 'fe_launch';
    case Dna = 'dna';
    case Mlp = 'mlp';
    case Mle = 'mle';
    case Dpg = 'dpg';
    case Dfac = 'dfac';
    case Kpxx = 'kpxx';
    case Ait = 'ait';
    case Svc = 'svc';
    case Geo = 'geo';
    case Mag = 'mag';
    case Nml = 'nml';
    case Esf = 'esf';
    case Msf = 'msf';
    case Qam = 'qam';
    case Slt = 'slt';
    case Ssf = 'ssf';
    case Es3 = 'es3';
    case Et3 = 'et3';
    case Ez2 = 'ez2';
    case Ez3 = 'ez3';
    case Fdf = 'fdf';
    case Mseed = 'mseed';
    case Seed = 'seed';
    case Dataless = 'dataless';
    case Gph = 'gph';
    case Ftc = 'ftc';
    case Fm = 'fm';
    case Frame = 'frame';
    case Maker = 'maker';
    case Book = 'book';
    case Fnc = 'fnc';
    case Ltf = 'ltf';
    case Fsc = 'fsc';
    case Oas = 'oas';
    case Oa2 = 'oa2';
    case Oa3 = 'oa3';
    case Fg5 = 'fg5';
    case Bh2 = 'bh2';
    case Ddd = 'ddd';
    case Xdw = 'xdw';
    case Xbd = 'xbd';
    case Fzs = 'fzs';
    case Txd = 'txd';
    case Ggb = 'ggb';
    case Ggt = 'ggt';
    case Gex = 'gex';
    case Gre = 'gre';
    case Gxt = 'gxt';
    case G2w = 'g2w';
    case G3w = 'g3w';
    case Gmx = 'gmx';
    case Gdoc = 'gdoc';
    case Gslides = 'gslides';
    case Gsheet = 'gsheet';
    case Kml = 'kml';
    case Kmz = 'kmz';
    case Gqf = 'gqf';
    case Gqs = 'gqs';
    case Gac = 'gac';
    case Ghf = 'ghf';
    case Gim = 'gim';
    case Grv = 'grv';
    case Gtm = 'gtm';
    case Tpl = 'tpl';
    case Vcg = 'vcg';
    case Hal = 'hal';
    case Zmm = 'zmm';
    case Hbci = 'hbci';
    case Les = 'les';
    case Hpgl = 'hpgl';
    case Hpid = 'hpid';
    case Hps = 'hps';
    case Jlt = 'jlt';
    case Pcl = 'pcl';
    case Pclxl = 'pclxl';
    case SfdHdstx = 'sfd-hdstx';
    case Mpy = 'mpy';
    case Afp = 'afp';
    case Listafp = 'listafp';
    case List3820 = 'list3820';
    case Irm = 'irm';
    case Sc = 'sc';
    case Icc = 'icc';
    case Icm = 'icm';
    case Igl = 'igl';
    case Ivp = 'ivp';
    case Ivu = 'ivu';
    case Igm = 'igm';
    case Xpw = 'xpw';
    case Xpx = 'xpx';
    case I2g = 'i2g';
    case Qbo = 'qbo';
    case Qfx = 'qfx';
    case Rcprofile = 'rcprofile';
    case Irp = 'irp';
    case Xpr = 'xpr';
    case Fcs = 'fcs';
    case Jam = 'jam';
    case Rms = 'rms';
    case Jisp = 'jisp';
    case Joda = 'joda';
    case Ktz = 'ktz';
    case Ktr = 'ktr';
    case Karbon = 'karbon';
    case Chrt = 'chrt';
    case Kfo = 'kfo';
    case Flw = 'flw';
    case Kon = 'kon';
    case Kpr = 'kpr';
    case Kpt = 'kpt';
    case Ksp = 'ksp';
    case Kwd = 'kwd';
    case Kwt = 'kwt';
    case Htke = 'htke';
    case Kia = 'kia';
    case Kne = 'kne';
    case Knp = 'knp';
    case Skp = 'skp';
    case Skd = 'skd';
    case Skt = 'skt';
    case Skm = 'skm';
    case Sse = 'sse';
    case Lasxml = 'lasxml';
    case Lbd = 'lbd';
    case Lbe = 'lbe';
    case Apr = 'apr';
    case Pre = 'pre';
    case Nsf = 'nsf';
    case Org = 'org';
    case Scm = 'scm';
    case Lwp = 'lwp';
    case Portpkg = 'portpkg';
    case Mvt = 'mvt';
    case Mcd = 'mcd';
    case Mc1 = 'mc1';
    case Cdkey = 'cdkey';
    case Mwf = 'mwf';
    case Mfm = 'mfm';
    case Flo = 'flo';
    case Igx = 'igx';
    case Mif = 'mif';
    case Daf = 'daf';
    case Dis = 'dis';
    case Mbk = 'mbk';
    case Mqy = 'mqy';
    case Msl = 'msl';
    case Plc = 'plc';
    case Txf = 'txf';
    case Mpn = 'mpn';
    case Mpc = 'mpc';
    case Xul = 'xul';
    case Cil = 'cil';
    case Cab = 'cab';
    case Xls = 'xls';
    case Xlm = 'xlm';
    case Xla = 'xla';
    case Xlc = 'xlc';
    case Xlt = 'xlt';
    case Xlw = 'xlw';
    case Xlam = 'xlam';
    case Xlsb = 'xlsb';
    case Xlsm = 'xlsm';
    case Xltm = 'xltm';
    case Eot = 'eot';
    case Chm = 'chm';
    case Ims = 'ims';
    case Lrm = 'lrm';
    case Thmx = 'thmx';
    case Msg = 'msg';
    case Cat = 'cat';
    case WildcardStl = '*stl';
    case Ppt = 'ppt';
    case Pps = 'pps';
    case Pot = 'pot';
    case Ppam = 'ppam';
    case Pptm = 'pptm';
    case Sldm = 'sldm';
    case Ppsm = 'ppsm';
    case Potm = 'potm';
    case Mpp = 'mpp';
    case Mpt = 'mpt';
    case Docm = 'docm';
    case Dotm = 'dotm';
    case Wps = 'wps';
    case Wks = 'wks';
    case Wcm = 'wcm';
    case Wdb = 'wdb';
    case Wpl = 'wpl';
    case Xps = 'xps';
    case Mseq = 'mseq';
    case Mus = 'mus';
    case Msty = 'msty';
    case Taglet = 'taglet';
    case Nlu = 'nlu';
    case Ntf = 'ntf';
    case Nitf = 'nitf';
    case Nnd = 'nnd';
    case Nns = 'nns';
    case Nnw = 'nnw';
    case WildcardAc = '*ac';
    case Ngdat = 'ngdat';
    case NGage = 'n-gage';
    case Rpst = 'rpst';
    case Rpss = 'rpss';
    case Edm = 'edm';
    case Edx = 'edx';
    case Ext = 'ext';
    case Odc = 'odc';
    case Otc = 'otc';
    case Odb = 'odb';
    case Odf = 'odf';
    case Odft = 'odft';
    case Odg = 'odg';
    case Otg = 'otg';
    case Odi = 'odi';
    case Oti = 'oti';
    case Odp = 'odp';
    case Otp = 'otp';
    case Ods = 'ods';
    case Ots = 'ots';
    case Odt = 'odt';
    case Odm = 'odm';
    case Ott = 'ott';
    case Oth = 'oth';
    case Xo = 'xo';
    case Dd2 = 'dd2';
    case Obgx = 'obgx';
    case Oxt = 'oxt';
    case Osm = 'osm';
    case Pptx = 'pptx';
    case Sldx = 'sldx';
    case Ppsx = 'ppsx';
    case Potx = 'potx';
    case Xlsx = 'xlsx';
    case Xltx = 'xltx';
    case Docx = 'docx';
    case Dotx = 'dotx';
    case Mgp = 'mgp';
    case Dp = 'dp';
    case Esa = 'esa';
    case Pdb = 'pdb';
    case Pqa = 'pqa';
    case Oprc = 'oprc';
    case Paw = 'paw';
    case Str = 'str';
    case Ei6 = 'ei6';
    case Efif = 'efif';
    case Wg = 'wg';
    case Plf = 'plf';
    case Pbd = 'pbd';
    case Box = 'box';
    case Mgz = 'mgz';
    case Qps = 'qps';
    case Ptid = 'ptid';
    case Qxd = 'qxd';
    case Qxt = 'qxt';
    case Qwd = 'qwd';
    case Qwt = 'qwt';
    case Qxl = 'qxl';
    case Qxb = 'qxb';
    case Rar = 'rar';
    case Bed = 'bed';
    case Mxl = 'mxl';
    case Musicxml = 'musicxml';
    case Cryptonote = 'cryptonote';
    case Cod = 'cod';
    case Rm = 'rm';
    case Rmvb = 'rmvb';
    case Link66 = 'link66';
    case St = 'st';
    case See = 'see';
    case Sema = 'sema';
    case Semd = 'semd';
    case Semf = 'semf';
    case Ifm = 'ifm';
    case Itp = 'itp';
    case Iif = 'iif';
    case Ipk = 'ipk';
    case Twd = 'twd';
    case Twds = 'twds';
    case Mmf = 'mmf';
    case Teacher = 'teacher';
    case Fo = 'fo';
    case Sdkm = 'sdkm';
    case Sdkd = 'sdkd';
    case Dxp = 'dxp';
    case Sfs = 'sfs';
    case Sdc = 'sdc';
    case Sda = 'sda';
    case Sdd = 'sdd';
    case Smf = 'smf';
    case Sdw = 'sdw';
    case Vor = 'vor';
    case Sgl = 'sgl';
    case Smzip = 'smzip';
    case Sm = 'sm';
    case Wadl = 'wadl';
    case Sxc = 'sxc';
    case Stc = 'stc';
    case Sxd = 'sxd';
    case Std = 'std';
    case Sxi = 'sxi';
    case Sti = 'sti';
    case Sxm = 'sxm';
    case Sxw = 'sxw';
    case Sxg = 'sxg';
    case Stw = 'stw';
    case Sus = 'sus';
    case Susp = 'susp';
    case Svd = 'svd';
    case Sis = 'sis';
    case Sisx = 'sisx';
    case Xsm = 'xsm';
    case Bdm = 'bdm';
    case Xdm = 'xdm';
    case Ddf = 'ddf';
    case Tao = 'tao';
    case Pcap = 'pcap';
    case Cap = 'cap';
    case Dmp = 'dmp';
    case Tmo = 'tmo';
    case Tpt = 'tpt';
    case Mxs = 'mxs';
    case Tra = 'tra';
    case Ufd = 'ufd';
    case Ufdl = 'ufdl';
    case Utz = 'utz';
    case Umj = 'umj';
    case Unityweb = 'unityweb';
    case Uoml = 'uoml';
    case Vcx = 'vcx';
    case Vsd = 'vsd';
    case Vst = 'vst';
    case Vss = 'vss';
    case Vsw = 'vsw';
    case Vis = 'vis';
    case Vsf = 'vsf';
    case Wbxml = 'wbxml';
    case Wmlc = 'wmlc';
    case Wmlsc = 'wmlsc';
    case Wtb = 'wtb';
    case Nbp = 'nbp';
    case Wpd = 'wpd';
    case Wqd = 'wqd';
    case Stf = 'stf';
    case Xar = 'xar';
    case Xfdl = 'xfdl';
    case Hvd = 'hvd';
    case Hvs = 'hvs';
    case Hvp = 'hvp';
    case Osf = 'osf';
    case Osfpvg = 'osfpvg';
    case Saf = 'saf';
    case Spf = 'spf';
    case Cmp = 'cmp';
    case Zir = 'zir';
    case Zirz = 'zirz';
    case Zaz = 'zaz';
    case Sevenz = '7z';
    case Abw = 'abw';
    case Ace = 'ace';
    case WildcardDmg = '*dmg';
    case Arj = 'arj';
    case Aab = 'aab';
    case X32 = 'x32';
    case U32 = 'u32';
    case Vox = 'vox';
    case Aam = 'aam';
    case Aas = 'aas';
    case Bcpio = 'bcpio';
    case WildcardBdoc = '*bdoc';
    case Torrent = 'torrent';
    case Blb = 'blb';
    case Blorb = 'blorb';
    case Bz = 'bz';
    case Bz2 = 'bz2';
    case Boz = 'boz';
    case Cbr = 'cbr';
    case Cba = 'cba';
    case Cbt = 'cbt';
    case Cbz = 'cbz';
    case Cb7 = 'cb7';
    case Vcd = 'vcd';
    case Cfs = 'cfs';
    case Chat = 'chat';
    case Pgn = 'pgn';
    case Crx = 'crx';
    case Cco = 'cco';
    case Nsc = 'nsc';
    case Cpio = 'cpio';
    case Csh = 'csh';
    case WildcardDeb = '*deb';
    case Udeb = 'udeb';
    case Dgc = 'dgc';
    case Dir = 'dir';
    case Dcr = 'dcr';
    case Dxr = 'dxr';
    case Cst = 'cst';
    case Cct = 'cct';
    case Cxt = 'cxt';
    case W3d = 'w3d';
    case Fgd = 'fgd';
    case Swa = 'swa';
    case Wad = 'wad';
    case Ncx = 'ncx';
    case Dtb = 'dtb';
    case Res = 'res';
    case Dvi = 'dvi';
    case Evy = 'evy';
    case Eva = 'eva';
    case Bdf = 'bdf';
    case Gsf = 'gsf';
    case Psf = 'psf';
    case Pcf = 'pcf';
    case Snf = 'snf';
    case Pfa = 'pfa';
    case Pfb = 'pfb';
    case Pfm = 'pfm';
    case Afm = 'afm';
    case Arc = 'arc';
    case Spl = 'spl';
    case Gca = 'gca';
    case Ulx = 'ulx';
    case Gnumeric = 'gnumeric';
    case Gramps = 'gramps';
    case Gtar = 'gtar';
    case Hdf = 'hdf';
    case Php = 'php';
    case Install = 'install';
    case WildcardIso = '*iso';
    case WildcardKey = '*key';
    case WildcardNumbers = '*numbers';
    case WildcardPages = '*pages';
    case Jardiff = 'jardiff';
    case Jnlp = 'jnlp';
    case Kdbx = 'kdbx';
    case Latex = 'latex';
    case Luac = 'luac';
    case Lzh = 'lzh';
    case Lha = 'lha';
    case Run = 'run';
    case Mie = 'mie';
    case Prc = 'prc';
    case Mobi = 'mobi';
    case Application = 'application';
    case Lnk = 'lnk';
    case Wmd = 'wmd';
    case Wmz = 'wmz';
    case Xbap = 'xbap';
    case Mdb = 'mdb';
    case Obd = 'obd';
    case Crd = 'crd';
    case Clp = 'clp';
    case WildcardExe = '*exe';
    case WildcardDll = '*dll';
    case Com = 'com';
    case Bat = 'bat';
    case WildcardMsi = '*msi';
    case Mvb = 'mvb';
    case M13 = 'm13';
    case M14 = 'm14';
    case WildcardWmf = '*wmf';
    case WildcardWmz = '*wmz';
    case WildcardEmf = '*emf';
    case Emz = 'emz';
    case Mny = 'mny';
    case Pub = 'pub';
    case Scd = 'scd';
    case Trm = 'trm';
    case Wri = 'wri';
    case Nc = 'nc';
    case Cdf = 'cdf';
    case Pac = 'pac';
    case Nzb = 'nzb';
    case Pl = 'pl';
    case Pm = 'pm';
    case WildcardPrc = '*prc';
    case WildcardPdb = '*pdb';
    case P12 = 'p12';
    case Pfx = 'pfx';
    case P7b = 'p7b';
    case Spc = 'spc';
    case P7r = 'p7r';
    case WildcardRar = '*rar';
    case Rpm = 'rpm';
    case Ris = 'ris';
    case Sea = 'sea';
    case Sh = 'sh';
    case Shar = 'shar';
    case Swf = 'swf';
    case Xap = 'xap';
    case Sql = 'sql';
    case Sit = 'sit';
    case Sitx = 'sitx';
    case Srt = 'srt';
    case Sv4cpio = 'sv4cpio';
    case Sv4crc = 'sv4crc';
    case T3 = 't3';
    case Gam = 'gam';
    case Tar = 'tar';
    case Tcl = 'tcl';
    case Tk = 'tk';
    case Tex = 'tex';
    case Tfm = 'tfm';
    case Texinfo = 'texinfo';
    case Texi = 'texi';
    case WildcardObj = '*obj';
    case Ustar = 'ustar';
    case Hdd = 'hdd';
    case Ova = 'ova';
    case Ovf = 'ovf';
    case Vbox = 'vbox';
    case VboxExtpack = 'vbox-extpack';
    case Vdi = 'vdi';
    case Vhd = 'vhd';
    case Vmdk = 'vmdk';
    case Src = 'src';
    case Webapp = 'webapp';
    case Der = 'der';
    case Crt = 'crt';
    case Pem = 'pem';
    case Fig = 'fig';
    case WildcardXlf = '*xlf';
    case Xpi = 'xpi';
    case Xz = 'xz';
    case Z1 = 'z1';
    case Z2 = 'z2';
    case Z3 = 'z3';
    case Z4 = 'z4';
    case Z5 = 'z5';
    case Z6 = 'z6';
    case Z7 = 'z7';
    case Z8 = 'z8';
    case Uva = 'uva';
    case Uvva = 'uvva';
    case Eol = 'eol';
    case Dra = 'dra';
    case Dts = 'dts';
    case Dtshd = 'dtshd';
    case Lvp = 'lvp';
    case Pya = 'pya';
    case Ecelp4800 = 'ecelp4800';
    case Ecelp7470 = 'ecelp7470';
    case Ecelp9600 = 'ecelp9600';
    case Rip = 'rip';
    case Aac = 'aac';
    case Aif = 'aif';
    case Aiff = 'aiff';
    case Aifc = 'aifc';
    case Caf = 'caf';
    case Flac = 'flac';
    case WildcardM4a = '*m4a';
    case Mka = 'mka';
    case M3u = 'm3u';
    case Wax = 'wax';
    case Wma = 'wma';
    case Ram = 'ram';
    case Ra = 'ra';
    case Rmp = 'rmp';
    case WildcardRa = '*ra';
    case Cdx = 'cdx';
    case Cif = 'cif';
    case Cmdf = 'cmdf';
    case Cml = 'cml';
    case Csml = 'csml';
    case Xyz = 'xyz';
    case Btif = 'btif';
    case Pti = 'pti';
    case Psd = 'psd';
    case Azv = 'azv';
    case Uvi = 'uvi';
    case Uvvi = 'uvvi';
    case Uvg = 'uvg';
    case Uvvg = 'uvvg';
    case Djvu = 'djvu';
    case Djv = 'djv';
    case WildcardSub = '*sub';
    case Dwg = 'dwg';
    case Dxf = 'dxf';
    case Fbs = 'fbs';
    case Fpx = 'fpx';
    case Fst = 'fst';
    case Mmr = 'mmr';
    case Rlc = 'rlc';
    case Ico = 'ico';
    case Dds = 'dds';
    case Mdi = 'mdi';
    case Wdp = 'wdp';
    case Npx = 'npx';
    case B16 = 'b16';
    case Tap = 'tap';
    case Vtf = 'vtf';
    case Wbmp = 'wbmp';
    case Xif = 'xif';
    case Pcx = 'pcx';
    case Threeds = '3ds';
    case Ras = 'ras';
    case Cmx = 'cmx';
    case Fh = 'fh';
    case Fhc = 'fhc';
    case Fh4 = 'fh4';
    case Fh5 = 'fh5';
    case Fh7 = 'fh7';
    case WildcardIco = '*ico';
    case Jng = 'jng';
    case Sid = 'sid';
    case WildcardBmp = '*bmp';
    case WildcardPcx = '*pcx';
    case Pic = 'pic';
    case Pct = 'pct';
    case Pnm = 'pnm';
    case Pbm = 'pbm';
    case Pgm = 'pgm';
    case Ppm = 'ppm';
    case Rgb = 'rgb';
    case Tga = 'tga';
    case Xbm = 'xbm';
    case Xpm = 'xpm';
    case Xwd = 'xwd';
    case Wsc = 'wsc';
    case Dae = 'dae';
    case Dwf = 'dwf';
    case Gdl = 'gdl';
    case Gtw = 'gtw';
    case Mts = 'mts';
    case Ogex = 'ogex';
    case XB = 'x_b';
    case XT = 'x_t';
    case Vds = 'vds';
    case Usdz = 'usdz';
    case Bsp = 'bsp';
    case Vtu = 'vtu';
    case Dsc = 'dsc';
    case Curl = 'curl';
    case Dcurl = 'dcurl';
    case Mcurl = 'mcurl';
    case Scurl = 'scurl';
    case Sub = 'sub';
    case Fly = 'fly';
    case Flx = 'flx';
    case Gv = 'gv';
    case Threedml = '3dml';
    case Spot = 'spot';
    case Jad = 'jad';
    case Wml = 'wml';
    case Wmls = 'wmls';
    case S = 's';
    case Asm = 'asm';
    case C = 'c';
    case Cc = 'cc';
    case Cxx = 'cxx';
    case Cpp = 'cpp';
    case H = 'h';
    case Hh = 'hh';
    case Dic = 'dic';
    case Htc = 'htc';
    case F = 'f';
    case For = 'for';
    case F77 = 'f77';
    case F90 = 'f90';
    case Hbs = 'hbs';
    case Java = 'java';
    case Lua = 'lua';
    case Mkd = 'mkd';
    case Nfo = 'nfo';
    case Opml = 'opml';
    case WildcardOrg = '*org';
    case P = 'p';
    case Pas = 'pas';
    case Pde = 'pde';
    case Sass = 'sass';
    case Scss = 'scss';
    case Etx = 'etx';
    case Sfv = 'sfv';
    case Ymp = 'ymp';
    case Uu = 'uu';
    case Vcs = 'vcs';
    case Vcf = 'vcf';
    case Uvh = 'uvh';
    case Uvvh = 'uvvh';
    case Uvm = 'uvm';
    case Uvvm = 'uvvm';
    case Uvp = 'uvp';
    case Uvvp = 'uvvp';
    case Uvs = 'uvs';
    case Uvvs = 'uvvs';
    case Uvv = 'uvv';
    case Uvvv = 'uvvv';
    case Dvb = 'dvb';
    case Fvt = 'fvt';
    case Mxu = 'mxu';
    case M4u = 'm4u';
    case Pyv = 'pyv';
    case Uvu = 'uvu';
    case Uvvu = 'uvvu';
    case Viv = 'viv';
    case F4v = 'f4v';
    case Fli = 'fli';
    case Flv = 'flv';
    case M4v = 'm4v';
    case Mkv = 'mkv';
    case Mk3d = 'mk3d';
    case Mks = 'mks';
    case Mng = 'mng';
    case Asf = 'asf';
    case Asx = 'asx';
    case Vob = 'vob';
    case Wm = 'wm';
    case Wmv = 'wmv';
    case Wmx = 'wmx';
    case Wvx = 'wvx';
    case Avi = 'avi';
    case Movie = 'movie';
    case Smv = 'smv';
    case Ice = 'ice';
    case Mht = 'mht';
}
