<?php

namespace App\Http\Controllers;
use App\Models\GlobalSetting;
use App\Models\NavigationItems;
use App\Models\NavigationVideoItems;
use App\Models\Navigation;
use Illuminate\Http\Request;
use App\Job;


class HomeController extends Controller
{
    public function index(){

        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()!=null){
            $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
            $About = Navigation::query()->where('parent_page_id',$about_id)->latest()->first();
        }
        else{
            $About = [];
        }
  
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%partner%")->where('page_type','Group')->latest()->first()!=null){
            $partner_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%partner%")->where('page_type','Group')->latest()->first()->id;
            $partners = Navigation::query()->where('parent_page_id',$partner_id)->latest()->get();
            //return $services;
        }
        else{
            $partners = [];
        }
        if(Navigation::query()->where('nav_category','Main')->where('nav_name', 'LIKE', "%service%")->where('page_type','Group')->latest()->first()!=null){
            $service_id = Navigation::query()->where('nav_category','Main')->where('nav_name', 'LIKE', "%service%")->where('page_type','Group')->latest()->first()->id;
            $services = Navigation::query()->where('parent_page_id',$service_id)->latest()->get();
            //return $services;
        }
        else{
            $services = [];
        }
        
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%statistic%")->where('page_type','Group')->latest()->first()!=null){
            $statistics_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%statistic%")->where('page_type','Group')->latest()->first()->id;
            $statistics = Navigation::query()->where('parent_page_id',$statistics_id)->latest()->get();
        }
        else{
            $statistics = [];
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%testimonial%")->where('page_type','Group')->latest()->first()!=null){
            $testimonial_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%testimonial%")->where('page_type','Group')->latest()->first()->id;
            $testimonial = Navigation::query()->where('parent_page_id',$testimonial_id)->latest()->first();
        }
        else{
            $testimonial = [];
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()!=null){
            $banner_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()->id;
            $banners = Navigation::query()->where('parent_page_id',$banner_id)->latest()->get();
        }
        else{
            $banners = [];
        } 
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()!=null){
            $slider_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()->id;
            $sliders = Navigation::query()->where('parent_page_id',$slider_id)->latest()->get();
        }
        else{
            $sliders = [];
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()!=null){
            $misson_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()->id;
            $missons = Navigation::query()->where('parent_page_id',$misson_id)->latest()->get();
            //return $misson;
        }
        else{
            $missons = [];
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
            $message_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
            $message = Navigation::query()->where('parent_page_id',$message_id)->latest()->first();
        }
        else{
            $message = [];
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()!=null){
            $process_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()->id;
            $process = Navigation::query()->where('parent_page_id',$process_id)->latest()->get();
        }
        else{
            $process = [];
        }
        //return $misson;
        $job_categories = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('banner_image','!=',null);
        if(Navigation::all()->where('nav_name','client')->count()>0){
            $partners_id = Navigation::all()->where('nav_name','client')->first()->id;
            $partners = Navigation::all()->where('parent_page_id',$partners_id);
        }
        else{
            $partners = [];
        }
        $job = Job::query()->OrderBy('created_at','desc')->paginate(10);
        $global_setting = GlobalSetting::all()->first(); 
        

        return view("website.index")->with(['partners'=>$partners,'jobs'=>$job,'testimonial'=>$testimonial,'statistics'=>$statistics,'services'=>$services,'banners'=>$banners,'about'=>$About,'global_setting'=>$global_setting,'sliders'=>$sliders,'missons'=>$missons,'message'=>$message,'process'=>$process]);
    }
    public function category($menu){
        //return $menu." this is category";
        //return $menus->first()->submenus;
        $jobs = Navigation::query()->where('page_type','Job')->latest()->get();
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()!=null){
            $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
            $About = Navigation::query()->where('parent_page_id',$about_id)->latest()->first();
        }
        else{
            $About = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()!=null){
            $banner_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()->id;
            $banners = Navigation::query()->where('parent_page_id',$banner_id)->latest()->get();
        }
        else{
            $banners = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%partner%")->where('page_type','Group')->latest()->first()!=null){
            $services_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%partner%")->where('page_type','Group')->latest()->first()->id;
            $services = Navigation::query()->where('parent_page_id',$services_id)->latest()->get();
            //return $services;
        }
        else{
            $services = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
            $message_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
            $message = Navigation::query()->where('parent_page_id',$message_id)->latest()->first();
        }
        else{
            $message = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()!=null){
            $slider_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()->id;
            $sliders = Navigation::query()->where('parent_page_id',$slider_id)->latest()->get();
        }
        else{
            $sliders = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()!=null){
            $misson_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()->id;
            $missons = Navigation::query()->where('parent_page_id',$misson_id)->latest()->get();
            //return $misson;
        }
        else{
            $missons = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
            $message_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
            $message = Navigation::query()->where('parent_page_id',$message_id)->latest()->first();
        }
        else{
            $message = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()!=null){
            $process_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()->id;
            $process = Navigation::query()->where('parent_page_id',$process_id)->latest()->get();
        }
        else{
            $process = null;
        }
        //return $misson;
        $job_categories = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('banner_image','!=',null);
        //sreturn $job_categories;
        $global_setting = GlobalSetting::all()->first();        
        //return view("website.index")->with(['jobs'=>$jobs,'banners'=>$banners,'about'=>$About,'menus'=>$menus,'global_setting'=>$global_setting,'sliders'=>$sliders,'missons'=>$missons,'job_categories'=>$job_categories,'message'=>$message,'process'=>$process]);
        if(Navigation::all()->where('nav_name',$menu)->count()>0){
            $job_id = Navigation::all()->where('nav_name',$menu)->first()->id;        
            $jobs = Navigation::query()->where('parent_page_id',$job_id)->where('page_type','Job')->orderBy('created_at', 'desc')->get();
        }
        else{
            $jobs = null;
        }
        $slug_detail = Navigation::all()->where('nav_name',$menu)->first();
        //
        if(Navigation::all()->where('nav_name',$menu)->count()>0){
                    //$normal_notice_page = Navigation::all()->where('nav_name',$slug)->first();
            $category_id = Navigation::all()->where('nav_name',$menu)->first()->id;
            
            if(Navigation::all()->where('parent_page_id',$category_id)->count()>0){
                   $category_type = Navigation::all()->where('parent_page_id',$category_id)->first()->page_type;
                   
                }
            else{
                   $category_type = Navigation::all()->where('nav_name',$menu)->where('page_type','!=','Notice')->first()->page_type;
                 }
         }
        else{
            $category_type = null;
        }
        
        if($category_type == "Photo Gallery"){
            //return "return to page gallary";
            $photos = NavigationItems::where('navigation_id',$category_id)->get();
            return view("website.page_type.gallery")->with(['services','photos'=>$photos,'jobs'=>$jobs,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($category_type == "Video Gallery"){
            return "return to page gallary";
            $photos = Navigation::query()->where('parent_page_id',$category_id)->where('page_status','1')->latest()->get();
            return view("website.page_type.gallery")->with(['photos'=>$photos,'jobs'=>$jobs,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($category_type == "Job"){
            //return "return to view job";
            return view("website.page_type.job-list")->with(['jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($category_type == "Service"){
            $services = Navigation::query()->where('parent_page_id',$category_id)->latest()->get();      
            return view("website.page_type.service")->with(['services'=>$services,'jobs'=>$jobs,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($category_type == "Normal"){
            //return $category_id;
            $normal = Navigation::find($category_id);
            return view("website.page_type.normal")->with(['message'=>$message,'normal'=>$normal,'jobs'=>$jobs,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($category_type == "Client"){
            $clients = Navigation::query()->where('parent_page_id',$category_id)->latest()->get(); 
            return view("website.page_type.client")->with(['clients'=>$clients,'jobs'=>$jobs,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        else{

                $men_detail = Navigation::where('nav_name',$menu)->first();
                if($men_detail!=null){
                    $menu_childs = $men_detail->childs;
                    $total_Category = $menu_childs->count();
                    $category_count = $menu_childs->where('banner_image','!=',null)->count();
                    if($category_count==0){
                        return redirect('/');
                    }
                    $per = ($category_count/$total_Category)*100;
                    if($per>50){
                        $job_categories = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('banner_image','!=',null);
                        //return $job_categories;
                         return view('website.job-category',compact('job_categories','slug_detail'));
                    }
                }  
               else{
                        return redirect('/');
                    }            
        }

    }

  public function subcategory($slug1,$submenu){
       
        //return $menus->first()->submenus;
        $jobs = Navigation::query()->where('page_type','Job')->latest()->get();
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()!=null){
            $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
            $About = Navigation::query()->where('parent_page_id',$about_id)->latest()->first();
        }
        else{
            $About = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()!=null){
            $banner_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()->id;
            $banners = Navigation::query()->where('parent_page_id',$banner_id)->latest()->get();
        }
        else{
            $banners = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
            $message_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
            $message = Navigation::query()->where('parent_page_id',$message_id)->latest()->first();
        }
        else{
            $message = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%partner%")->where('page_type','Group')->latest()->first()!=null){
            $services_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%partner%")->where('page_type','Group')->latest()->first()->id;
            $services = Navigation::query()->where('parent_page_id',$services_id)->latest()->get();
            //return $services;
        }
        else{
            $services = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()!=null){
            $slider_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()->id;
            $sliders = Navigation::query()->where('parent_page_id',$slider_id)->latest()->get();
        }
        else{
            $sliders = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()!=null){
            $misson_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()->id;
            $missons = Navigation::query()->where('parent_page_id',$misson_id)->latest()->get();
            //return $misson;
        }
        else{
            $missons = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
            $message_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
            $message = Navigation::query()->where('parent_page_id',$message_id)->latest()->first();
        }
        else{
            $message = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()!=null){
            $process_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()->id;
            $process = Navigation::query()->where('parent_page_id',$process_id)->latest()->get();
        }
        else{
            $process = null;
        }
        //return $misson;
        $job_categories = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('banner_image','!=',null);
        //sreturn $job_categories;
        $global_setting = GlobalSetting::all()->first();        
        //return view("website.index")->with(['jobs'=>$jobs,'banners'=>$banners,'about'=>$About,'menus'=>$menus,'global_setting'=>$global_setting,'sliders'=>$sliders,'missons'=>$missons,'job_categories'=>$job_categories,'message'=>$message,'process'=>$process]);
        if(Navigation::all()->where('nav_name',$submenu)->count()>0){
            $job_id = Navigation::all()->where('nav_name',$submenu)->first()->id;        
            $jobs = Navigation::query()->where('parent_page_id',$job_id)->where('page_type','Job')->orderBy('created_at', 'desc')->get();
        }
        else{
            $jobs = null;
        }
        $slug_detail0 =  Navigation::all()->where('nav_name',$slug1)->first();
        $slug_detail = Navigation::all()->where('nav_name',$submenu)->first();
        //
        if(Navigation::all()->where('nav_name',$submenu)->count()>0){
            $subcategory_id = Navigation::all()->where('nav_name',$submenu)->first()->id;
            if(Navigation::all()->where('parent_page_id',$subcategory_id)->count()>0){
                $subcategory_type = Navigation::all()->where('parent_page_id',$subcategory_id)->first()->page_type;//slug/slug2(GROUP)
            }
            else{
                //return Navigation::all()->where('nav_name',$submenu)->where('page_type','Normal')->first()->page_type;
                if(Navigation::all()->where('nav_name',$submenu)->where('page_type','Normal')->count()>0){
                    $subcategory_type = Navigation::all()->where('nav_name',$submenu)->where('page_type','Normal')->first()->page_type;//slug/slug2(group)
                    
                }
                elseif(Navigation::all()->where('nav_name',$submenu)->where('page_type','Video Gallery')->count()>0){
                    $subcategory_type = Navigation::all()->where('nav_name',$submenu)->where('page_type','Video Gallery')->first()->page_type;//slug/slug2(group)
                    //return $subcategory_type;
                }
                elseif(Navigation::all()->where('nav_name',$submenu)->where('page_type','Photo Gallery')->count()>0){
                    $subcategory_type = Navigation::all()->where('nav_name',$submenu)->where('page_type','Photo Gallery')->first()->page_type;//slug/slug2(group)
                    //return $subcategory_type;
                }
                else{
                    return redirect('/');//submenu is page_type=Group and its internal items are empty
                }
            }
           
         }
        else{
             $subcategory_type = null;
         }
        if($subcategory_type == "Photo Gallery"){
            //return "return to page gallary";
            $photos = NavigationItems::where('navigation_id',$subcategory_id)->get();
            return view("website.page_type.gallery")->with(['services'=>$services,'photos'=>$photos,'jobs'=>$jobs,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting, 'slug_detail0'=>$slug_detail0,'slug_detail1'=>$slug_detail]);
        }
        elseif($subcategory_type == "Video Gallery"){
            $photos = NavigationVideoItems::where('navigation_id',$subcategory_id)->get();
            return view("website.page_type.video_gallery")->with(["services"=>$services,'photos'=>$photos,'jobs'=>$jobs,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail0'=>$slug_detail0,'slug_detail1'=>$slug_detail]);
        }
        elseif($subcategory_type == "Job"){
            $jobs = Navigation::where('parent_page_id',$subcategory_id)->get();
            return view("website.page_type.job-list")->with(["services"=>$services,'jobs'=>$jobs,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail0'=>$slug_detail0,'slug_detail1'=>$slug_detail]);
        }
        elseif($subcategory_type == "Service"){
            // return "return to view Notice";
            $service_id = Navigation::query()->where('parent_page_id',$subcategory_id)->where('page_type','Service')->latest()->get();
            $services = Navigation::find($service_id);
            //return $notice_heading;
            return view("website.page_type.service")->with(["services"=>$services,'jobs'=>$jobs,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail0'=>$slug_detail0,'slug_detail1'=>$slug_detail]);
        }
        elseif($subcategory_type == "Client"){
            // return "return to view Notice";
            $client_id = Navigation::query()->where('parent_page_id',$subcategory_id)->where('page_type','Notice')->latest()->get();
            $clients = Navigation::find($client_id);
            //return $notice_heading;
            return view("website.page_type.notice")->with(["clients"=>$clients,'jobs'=>$jobs,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail0'=>$slug_detail0,'slug_detail1'=>$slug_detail]);
        }
        elseif($subcategory_type == "Normal"){
            $normal = Navigation::find($subcategory_id);
            return view("website.page_type.normal")->with(["services"=>$services,'message'=>$message,'normal'=>$normal,'jobs'=>$jobs,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail0'=>$slug_detail0,'slug_detail1'=>$slug_detail]);
        }
        else{
            return redirect("/");
        }
    }
    public function singlePage($slug){
        $job =Navigation::all()->where('nav_name',$slug)->first();  
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%partner%")->where('page_type','Group')->latest()->first()!=null){
            $services_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%partner%")->where('page_type','Group')->latest()->first()->id;
            $services = Navigation::query()->where('parent_page_id',$services_id)->latest()->get();
            //return $services;
        }
        else{
            $services = null;
        }      
        $global_setting = GlobalSetting::all()->first(); 
       
        return view("website.job_detail")->with(["services"=>$services,'job'=>$job,'global_setting'=>$global_setting]);
    }
    public function ReadMore($slug){
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
            $message_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
            $message = Navigation::query()->where('parent_page_id',$message_id)->latest()->first();
        }
        else{
            $message = null;
        }
        $normal = Navigation::where('id',$slug)->first();
        //return $normal;
        $global_setting = GlobalSetting::all()->first(); 
        return view("website.normal")->with(['message'=>$message,'slug_detail'=>$normal,'normal'=>$normal,'global_setting'=>$global_setting,'job_slug'=>$slug]);
    }
    public function allCategory(){
        $job_categories = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('banner_image','!=',null);
        $global_setting = GlobalSetting::all()->first(); 
        return view("website.all_category")->with(['job_categories'=>$job_categories,'global_setting'=>$global_setting]);
    }
    public function allJobs(){
         $jobs = Navigation::query()->where('page_type','Job')->latest()->get();
         $global_setting = GlobalSetting::all()->first(); 
         return view("website.job-list")->with(['jobs'=>$jobs,'global_setting'=>$global_setting]);
    }
    public function GalleryView($slug){
        $navigataion_id = Navigation::where('nav_name',$slug)->first()->id;        
        $photos = NavigationItems::where('navigation_id',$navigataion_id)->get();
        //return $photos;
         $global_setting = GlobalSetting::all()->first(); 
         return view("website.gallery_view")->with(['photos'=>$photos,'global_setting'=>$global_setting]);
    }
}