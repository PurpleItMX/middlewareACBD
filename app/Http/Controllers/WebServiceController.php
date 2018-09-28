<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WebServiceController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getClients()
    {

    	ini_set('soap.wsdl_cache_enabled',0);
		ini_set('soap.wsdl_cache_ttl',0);
    	require_once('lib/nusoap.php');
    	$soapServer = new \soap_server();
    	$soapServer->configureWSDL("WebService Administrador ACBD");	

		$soapServer->register(
		'ClientsCompanies', // method name
   		array(), // input parameters
   		array('return' => 'xsd:Array'), // output parameters
   		false, // namespace
   		false, // soapaction
   		'rpc', // style
   		'encoded', // use
   		'Servicio que retorna un array de Clientes con sus compañias' // documentation
		);

		/*$soapServer->register(
    	'Service.sum',
    	array('a' => 'xsd:string', 'b' => 'xsd:string'),
    	array('return' => 'xsd:int'), 
    	false,
    	false,
    	"rpc",
    	"encoded",
    	"Servicio que suma dos números"
		);
 
		$this->_soapServer->register(
    	"Service.getName",
    	array('name' => "xsd:string"),
    	array("return" => "xsd:string"),
    	false,
    	false,
    	"rpc",
    	"encoded",
    	"Servicio que retorna un string"
    	);*/	
		
		//procesamos el webservice
		$soapServer->service(file_get_contents("php://input"));
    }

    private function ClientsCompanies()
    {

    	$clientCompanies = array();
    	$clients = DB::select('select * from clients');

    	foreach ($clients as $key => $client) {
    		$companies = DB::select('select * from companies where id_client = ?', [$client->id_client]);

    		$clientCompanies[] = array('client' => $client, 
    								  'companies'=>$companies);

    	}

    	return $clientCompanies;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
