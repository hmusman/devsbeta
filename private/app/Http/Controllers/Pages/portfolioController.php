<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Sidebar;
use App\Models\Category;
use App\Models\Service;
use DB;
class portfolioController extends Controller
{
   public  function index(Request $request,$name){
       
      $services = Service::all();
      $result = Portfolio::where("name",urldecode($name))->first();
      $id = $result->id; 
      $single=Portfolio::find($id);       
      $portfolios=Portfolio::all();
     // get previous user id
    $previousPortfolio = Portfolio::where('id', '<', $id)->max('id');
      if($previousPortfolio){
       $previous=Portfolio::find($previousPortfolio); 
         }else{
        $previous=Portfolio::find($id); 
       }
    // get next user id
    $nextPortfolio = Portfolio::where('id', '>', $id)->min('id');
      if($nextPortfolio){
          $next=Portfolio::find($nextPortfolio);
      }else{
        $next=Portfolio::find($id); 
      }
  
      return view('Pages.portfolios',compact('single','portfolios','previous','next','services'));
    }

    public function all(){
      $services = Service::all();
      $categories=Category::all();
      $totalCategories=count($categories);
      return view('Pages.portfoliomain',compact('categories','totalCategories','services'));
         
    }
    function load_data(Request $request){
      if($request->ajax()){
        if ($request->id > 0) {
          $data = DB::table('portfolios')
          ->where('id', '<', $request->id)
          ->orderBy('id', 'DESC')
          ->limit(8)
          ->get();
        }
        else{
          $data = DB::table('portfolios')
          ->orderBy('id', 'DESC')
          ->limit(8)
          ->get();
        }
        $output = '';
        $last_id = '';
        if(!$data->isEmpty()){
          $temp = 1; 
          foreach ($data as $row) {
            $output .='
              <div class="port'.$row->categories_id.' col-md-3 mb-30 each_portfolio animated zoomIn" id="port'.$temp++.'">
                <div class="portfolio-card"><a class="portfolio-thumb" href="'.url('portfolio').'/'.urlencode($row->name).'"><img src="'.$row->image.'" alt="Portfolio Thumbnail"/></a>
                  <div class="portfolio-card-body">
                    <div class="portfolio-meta"></div>
                    <h6 class="assets/portfolio-title"><a href="portfolio/'.urlencode($row->name).'" style="text-decoration: none;">'.$row->name.'</a></h6>            
                  </div>
                </div>
              </div>
            ';
            $last_id = $row->id;
          }
        $output .= '
         <div id="load_more" class="container text-center">
          <button type="button" name="load_more_button" class="btn btn-success" data-id="'.$last_id.'" id="load_more_button">Scroll Down to load more data</button>
         </div>
         ';
        }
        else{
          $output .= '
           <div id="load_more" class="container text-center">
            <button type="button" name="load_more_button" class="btn btn-info ">No more data</button>
           </div>
           ';
        }
        echo $output;
      }
    }
}
