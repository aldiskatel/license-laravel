<?php namespace Aldiskatel\License;${"G\x4c\x4fBA\x4c\x53"}["\x6d\x73nxp\x68\x6fp\x74\x6f\x78"]="\x72\x65\x73\x70\x6f\x6e\x73\x65";${"\x47\x4c\x4f\x42\x41LS"}["g\x69n\x63\x6ab\x72\x74\x72nqn"]="\x64at\x61\x73";${"\x47\x4cO\x42A\x4c\x53"}["\x62e\x66\x75\x6a\x67oo\x71t"]="\x72equ\x65s\x74";use GuzzleHttp\Client;use GuzzleHttp\RequestOptions;use Illuminate\Http\Request;class NeuLicense{public static function verify(){${"\x47L\x4f\x42ALS"}["z\x76x\x75\x6e\x72cl"]="\x63\x6c\x69\x65\x6et";$jdbqsfaayor="l\x69\x63e\x6ese\x5f\x6b\x65\x79";${$jdbqsfaayor}=ENV("\x41\x50P_\x4cI\x43\x45NS\x45");${"G\x4c\x4f\x42\x41\x4c\x53"}["\x66\x6d\x67\x74\x69\x72"]="\x72e\x73\x70\x6fn\x73\x65";$wtmqmyhqj="l\x69\x63\x65\x6e\x73e_\x6be\x79";${${"\x47\x4c\x4fB\x41LS"}["z\x76\x78\x75n\x72\x63\x6c"]}=new\GuzzleHttp\Client();${"\x47\x4c\x4fBA\x4cS"}["\x74\x75m\x6de\x73\x74s\x65\x68\x68m"]="\x72es\x70\x6fn\x73\x65";${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["b\x65\x66\x75\x6ag\x6f\x6f\x71\x74"]}=$client->get("\x68\x74\x74\x70://l\x69ce\x6es\x65\x2eneu\x6de\x64ira.c\x6f\x6d/a\x70i/\x76erif\x79/".${$wtmqmyhqj});${${"GLO\x42\x41\x4c\x53"}["\x66m\x67\x74i\x72"]}=$request->getBody()->getContents();${${"GL\x4f\x42\x41\x4c\x53"}["gin\x63\x6ab\x72\x74rn\x71\x6e"]}=json_decode(${${"\x47L\x4f\x42\x41\x4c\x53"}["t\x75\x6d\x6d\x65\x73\x74\x73e\x68\x68\x6d"]});if(empty(${${"G\x4cO\x42AL\x53"}["\x6d\x73\x6e\x78\x70\x68\x6f\x70\x74o\x78"]})){echo"<h\x31\x3e\x3c\x63\x65\x6eter>Lic\x65\x6e\x73\x65\x20\x74i\x64\x61k di\x74emukan\x20\x64\x69s\x65\x72ver\x20a\x74\x61u\x20g\x61gal\x20dimu\x61t\x3c/\x63\x65n\x74e\x72>\x3c/\x68\x31\x3e";echo"<m\x65ta \x68t\x74\x70-equi\x76\x3d\x22r\x65\x66re\x73\x68\"\x20con\x74ent=0\x3e";die();}if($datas->data[0]->status_license!="a\x63t\x69v\x65"){echo"\x3ch1><cent\x65\x72>\x53ist\x65m \x47\x61g\x61\x6c D\x69mua\x74\x20kar\x65\x6e\x61 \x6c\x69s\x65n\x73i\x20\x73\x69t\x75\x73\x20\x69\x6e\x69\x20\x74\x65\x6c\x61\x68 \x64\x69\x20\x73u\x73pen\x64\x2e.\x3c/\x63en\x74\x65\x72\x3e</h1\x3e";die();}if($_SERVER["\x53E\x52V\x45R\x5f\x4eAM\x45"]!=$datas->data[0]->ip=$datas->data[0]->ip){echo"\x3c\x681\x3e\x3c\x63\x65\x6et\x65r\x3e\x49LL\x45\x47\x41\x4c!\x21<b\x72>\x4ci\x63e\x6e\x73e \x75\x6etuk \x77e\x62site\x20\x69\x6e\x69 \x68\x61nya\x20\x64idafta\x72\x6ban pad\x61 ".$datas->data[0]->ip=$datas->data[0]->ip."</c\x65\x6e\x74\x65\x72></h1>";die();}if(date("\x59-m-d")>$datas->data[0]->expired){echo"<h1\x3e<\x63\x65\x6et\x65r>".$datas->data[0]->expired_message."\x3c/\x63\x65n\x74\x65r>\x3c/\x681\x3e";die();}}}
