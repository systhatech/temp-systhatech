<?php
 /**
 * THIS INTELLECTUAL PROPERTY IS COPYRIGHT Ⓒ 2020
 * SYSTHA TECH LLC. ALL RIGHT RESERVED
 * -----------------------------------------------------------
 * SALES@SYSTHATECH.COM
 * 512 903 2202
 * WWW.SYSTHATECH.COM
 * -----------------------------------------------------------
*/


namespace Systha\systhatech\HTTP\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Lib\Template\TemplateMerge;
use App\Model\EmailTemplate;
use App\Model\Lookup\Lookup;
use App\Http\Controllers\Controller;;
Use Systha\vendorpackage\Models\Vendor;
Use Systha\vendorpackage\Models\VendorTemplate;
use Systha\vendorpackage\Models\StaticContent;
use Systha\vendorpackage\Models\FrontendMenu;
use Systha\vendorpackage\Models\VendorMenuComponent;
use Systha\vendorpackage\Models\VendorComponentPost;
use Systha\vendorpackage\Models\EmailSubscription;
use Systha\systhatech\helpers\CmsHelper as CmsHelper;
use Systha\Subscription\Model\RequestList; 





class SysthatechController extends Controller{

    protected $template;
    protected $vendor;
    protected $menus;

    public function __construct() {
        $h = request()->getHttpHost();
        $host = $h;
        if(strpos($h, 'www.') !== false){
            $indexof = strpos($h, 'www.')+4;
            $host = substr($h, $indexof, strlen($h)-1);
        }
        $temp = VendorTemplate::where('host', $host)->where('is_active', 1)->where('is_deleted', 0)->first();
        if (! $temp) {
            return redirect('/admin');
        }
        $this->template = $temp;
        $this->vendor = $temp->vendor;
        $this->menus = $temp->menus;
    }


    public function index(Request $req){
        $this->cms($req);
    }


    public function enq(Request $req){
        return $req->all();
    }


    public function cms(Request $req){
       $d=array(); 
       $d['menus']=$this->cms_route_mange($req); 
       $data = $this->comp($req,  $d['menus']); 
       $d['comp_post']= $data['comp_post']; 
       $d['detail_post'] = $data ['detail_post'];
       $d['comp_static'] = StaticContent::where(['is_deleted'=> 0, 'frontend_menu_id'=> $d['menus']->id])->first();
       $d['vendor'] = $this->vendor; 
       $d['file'] = $d['vendor']->files;
       $d['contacts'] = $d['vendor']->contacts;
       $d['address'] = $d['vendor']->address;
       $d['menus'] = CmsHelper::menuheader($this->menus, 'Header');  
       $d['footer_menu']  =  CmsHelper::menufooter($this->menus); 
       $d['product_menu'] = CmsHelper::menu_get_parent_group($this->menus, "2");
       $d['custom_menu'] = CmsHelper::menu_get_parent_group($this->menus, "1");
       $d['all_menu'] = $this->menus;
    //  dd($d);
 //dd($d['comp_post']->toArray());
       $d['product_menu']= $this->product_child_menu($d['product_menu'] ); 
       $d['cato'] =CmsHelper::group_by_cato($d['comp_post'], "category");
       
       return view('systhatech::page')->with($d);
    }


    public function cms_route_mange($req){   
        $path = $req->path();
        $path = explode("/", $path);
	    if(!isset($path[1])|| $path[1] ==""):
          //  return redirect('/');
          $path[1] = "home";
        endif;
		$path_parsal= explode('.', $path[1]);
		if(isset($path_parsal[0])){
			$path[1] = $path_parsal[0];
		}
		
        $menu= FrontendMenu::where('menu_code', $path[1])->first(); 

         if(!is_object($menu)):
            return redirect('/');
        endif;
      
        return $menu; 

    }


    public function comp_post_detail($req) {
        $data = array();
        $comp_post = VendorMenuComponent::where('page_id', $req->detail_comp_id)->with('posts')->orderBy('seq_no', 'asc')->get();
        $detail_post = VendorComponentPost::where('id', $req->_detail_post_id)->get(); 

        $data['comp_post'] = $comp_post; 
        $data['detail_post'] = $detail_post; 

        return $data; 
    }
    

    public function comp_post($menu){
		//dd($menu);
        $comp_post = VendorMenuComponent::where('page_id', $menu->id)->with('posts')->orderBy('seq_no', 'asc')->get();
            foreach ($comp_post as $k=>&$v){   
                if( isset($v->ref_post) && isset($v->ref_comp_id) ){
                    $post = VendorComponentPost::whereIn('page_id',[$v->page_id, $v->ref_post])->whereIn('component_id',[$v->component_id, $v->ref_comp_id])->where(['is_deleted'=>0])->get();
                    $comp_post[$k]['posts'] = $post; 
                }  
                $detail_page_link = FrontendMenu::where('id',$v->page_id)->get(); 
                if(isset($detail_page_link[0]->detailpage_link)){
                    $detail_page_link1 = FrontendMenu::where('id', $detail_page_link[0]->detailpage_link)->get();
                    $comp_post[$k]['detailpage_link'] = $detail_page_link1;   
                }  
            }   
            return $comp_post;    
    }

    public function comp($req, $menu){
        $detail_comp_id = $req->detail_comp_id;
        $detail_post_id = $req->_detail_post_id;
        $data = array(); 
 
       
        if(isset($detail_comp_id) && isset($detail_post_id)) :
            
             $data = $this->comp_post_detail($req) ; 
            else :
                 $data['comp_post'] =   $this->comp_post($menu);
                 $data['detail_post'] = array(); 
        endif;
        
        return $data;
 
    }


    public function product_child_menu($product_menu){
        if(isset($product_menu['ref'])){
            $product_menu = array_chunk($product_menu['ref'], 4); 
        }
        return $product_menu; 
    
    }

public function emailSub(Request $req){
     
          $sub = EmailSubscription::firstOrCreate([
            'email_id'=> $req->email, 
            'vendor_id'=> $req->vendor_id,
            'is_subscribed'=> 1,
            'is_active'=>1 
          ]);

         return response()->json([
            "message" => "Your email has been registered."
        ]);


    }


    public function requestList(Request $req){

         $enq = new RequestList();
         $ip = $req->getClientIp(true);
         $client = new \GuzzleHttp\Client(['verify' => false]);      
         $res = $client->request('GET', "http://ip-api.com/php/".$ip);
         $data = unserialize($res->getBody()->getContents());
       
         $enq->contact_person = $req->name;
         $enq->email = $req->email; 
         $enq->phone = $req->phone;
         $enq->status = "new";
         $enq->product = $req->service;
         $enq->des = $req->message; 
         $enq->ip = $req->getClientIp(true);
         $enq->lat = isset($data['lat']) ? $data['lat']:'';
         $enq->lan = isset($data['lon']) ? $data['lon']:'';
         $enq->city = isset($data['city']) ? $data['city']:'';
         $enq->state = isset($data['region']) ? $data['region']:'';
         $enq->country = isset($data['countryCode']) ? $data['countryCode']:'';
         $enq->timezone = isset($data['timezone']) ? $data['timezone']:''; 
         $enq->save();

        $t =$this->sendEmail($req,$data);
        return response()->json([
            "message" => "Thank you for your request. We will get back to you asap."
        ]);

    }



    private function sendEmail($req, $data){
            $to = $req->email;
            $emailTemplate = EmailTemplate::code('systhatech_web_response');
            $subject = $emailTemplate->subject;
            $message = TemplateMerge::makeTempTemplate($emailTemplate->temp_html, $this->getMergeData($req, $data));

          try {

            Mail::html($message, function ($mail) use ($req, $data, $subject, $to) {
                $mail->to($to);
                $mail->subject($subject);
                $mail->bcc('sales@systhatech.com');
            });

             } catch (\Throwable $exception) {
                   return $exception->getMessage();
        }


    }


    private function getMergeData($req, $data)
            {
                return [
                    'name' => $req->name,
                    'email' => $req->email, 
                    'phone' => $req->phone,
                    'product' => $req->product,
                    'des' => $req->des,
                    'ip' => $req->getClientIp(true),
                    'lat' => isset($data['lat']) ? $data['lat']:'',
                    'lan' => isset($data['lan']) ? $data['lon']:'',
                    'city' => isset($data['city']) ? $data['city']:'',
                    'state' => isset($data['region']) ? $data['region']:'',
                    'country' => isset($data['countryCode']) ? $data['countryCode']:'',
                    'timezone' => isset($data['timezone']) ? $data['timezone']:'', 
                
                ];
            }



}
